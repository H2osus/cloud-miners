<?php
/**
 * Підключення setup.php
 */
require get_template_directory() . '/functions-parts/setup.php';

/**
 * Підключення віджетів
 */
require get_template_directory() . '/functions-parts/widgets.php';

/**
 * Підключення скриптів та стилів
 */
require get_template_directory() . '/functions-parts/scripts.php';

/**
 * Підключення меню
 */
require get_template_directory() . '/functions-parts/menus.php';

/**
 * Підключення катсомних типів
 */
require get_template_directory() . '/functions-parts/cpt.php';

/**
 *
 */
require get_template_directory() . '/functions-parts/acf-blocks.php';
require get_template_directory() . '/functions-parts/acf-settings.php';

/**
 * Підключення Додатквих полів в Customize
 */
require get_template_directory() . '/functions-parts/extra-customize-fields.php';

/**
 * Підключення модальних темплейтів
 */

add_action('wp_ajax_get_modal_template',  'get_modal_template');
add_action('wp_ajax_nopriv_get_modal_template', 'get_modal_template');

function get_modal_template() {
    require get_template_directory() . '/template-parts/modules/modal/modal.php';
};




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter( 'pre_get_posts', 'custom_change_cars_posts_per_page' );
/**
 * Change Posts Per Page for Author Archive.
 *
 * @param object $query data
 *
 */
function custom_change_cars_posts_per_page( $query ) {

    if ( is_author() && ! is_admin() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '8' );
    }

    if ( is_post_type_archive('services') && ! is_admin() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '12' );
    }

    if ( is_post_type_archive('articles') && ! is_admin() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '12' );
    }

    return $query;

}

/* Add CPTs to author archives */
function custom_post_author_archive($query) {
    if ($query->is_author)
        $query->set( 'post_type', array('articles', 'post') );
    remove_action( 'pre_get_posts', 'custom_post_author_archive' );
}
add_action('pre_get_posts', 'custom_post_author_archive');

add_filter( 'facetwp_result_count', function( $output, $params ) {
    $output = 'Все статьи автора ('.$params['total'].')';
    return $output;
}, 10, 2 );

function filter_search_by_post_type($query) {
    if ($query->is_search && !is_admin()) {
        // Определите типы записей, для которых вы хотите ограничить поиск
        $post_types_to_search = array('services', 'articles');

        // Установите параметр 'post_type' в вашем запросе
        $query->set('post_type', $post_types_to_search);
    }
}

add_action('pre_get_posts', 'filter_search_by_post_type');

function modify_search_distinct() {
    return 'DISTINCT';
}
add_filter('posts_distinct', 'modify_search_distinct');

function modify_search_results($query) {
    if ($query->is_search && $query->is_main_query()) {
        $query->set('posts_per_page', -1); // Выводить все записи, а не только одну для каждого типа
    }
}

add_action('pre_get_posts', 'modify_search_results');

function enqueue_comment_reply() {
    if( is_single() && comments_open() && (get_option('thread_comments') == 1) )
        wp_enqueue_script('comment-reply');
}
add_action( 'wp_enqueue_scripts', 'enqueue_comment_reply' );


add_filter( 'comment_reply_link', 'wpdocs_comment_reply_link_class' );

function wpdocs_comment_reply_link_class( $class ) {

    $class = str_replace( "class='comment-reply-link", "class='comment-reply-link comment-button-answered", $class );

    return $class;
}

function cloud_miners_comment ( $comment, $args, $depth ){
    ?><li <?php comment_class() ?> id="comment-<?php comment_ID() ?>">
        <div class="comment-inner">
            <div class="comment-author">
                <?php
                    $authorLogo = get_field('avatar', 'user_'. $comment->user_id) ?? 0;
                    if ($authorLogo && $authorLogo !== 0) : ?>
                        <a href="<?= esc_attr(get_author_posts_url($comment->user_id)) ?>" class="comment-author__img">
                            <img src="<?= esc_attr($authorLogo['url']) ?>" alt="look"/>
                        </a>
                    <?php else: ?>
                        <a href="<?= esc_attr(get_author_posts_url($comment->user_id)) ?>" class="comment-author__img">
                            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/user-avatar.png'?>" alt="look"/>
                        </a>
                    <?php endif; ?>
                <div class="comment-author__right">
                    <div class="comment-author__info">
                        <?php
                        $fName = get_the_author_meta('first_name', $comment->user_id);
                        $lName = get_the_author_meta('last_name', $comment->user_id);
                        ?>
                        <a href="<?= esc_attr(get_author_posts_url($comment->user_id)) ?>" class="comment-author__info-name"><?= esc_html($lName . ' ' . $fName); ?></a>
                        <div class="comment-author__info-stars">
                        </div>
                    </div>
                    <p class="comment-author__data"><?= get_comment_date('d.m.Y', get_comment_ID()); ?></p>
                </div>
            </div>
            <?php if($comment->comment_parent !== '0'):
                $comment_text = get_comment_text($comment->comment_parent);
                $trimmed_text = strlen($comment_text) > 50 ? substr($comment_text, 0, 50) . '...' : $comment_text;
                ?>
            <span class="reply-of-comment">
                <?= esc_html__('В ответ на ','cloud_miners') ?>
                <?= esc_html($trimmed_text); ?>
            </span>
            <?php endif; ?>
            <p class="comment-content"><?= get_comment_text(get_comment_ID()); ?></p>

            <?php
            $comment = get_comment();
            $attach = get_comment_meta($comment->comment_ID);

            if (!empty($attach['attachment_id'])) {
                $attachment_data = $attach['attachment_id'][0];

                $attachment_ids = is_serialized($attachment_data) ? unserialize($attachment_data) : array($attachment_data);

                if (!empty($attachment_ids)) {
                    $unicID = uniqid(); ?>
                    <div class="comment-inner__images">
                        <?php foreach ($attachment_ids as $attachment_id) :
                            $image_url = wp_get_attachment_url($attachment_id); ?>
                            <a href="<?= esc_attr($image_url) ?>" class="img-block__show" data-lightbox="gallery-<?= esc_attr($unicID) ?>">
                                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/search-show.svg' ?>" alt="look" class="img-block__show-icon"/>
                                <img src="<?= esc_attr($image_url) ?>" alt="" class="img-block__image"/>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php }
            }

            $post_id = get_the_ID();

            //get the setting configured in the admin panel under settings discussions "Enable threaded (nested) comments  levels deep"
            $max_depth = get_option('thread_comments_depth');
            //add max_depth to the array and give it the value from above and set the depth to 1
            $default = array(
                'add_below'  => 'comment',
                'respond_id' => 'respond',
                'reply_text' => __('Reply'),
                'login_text' => __('Log in to Reply'),
                'depth'      => 1,
                'before'     => '',
                'after'      => '',
                'max_depth'  => $max_depth
            );
            if (is_user_logged_in()) {
                comment_reply_link($default,$comment->ID,$post_id);
            } else {
                echo '<a rel="nofollow" class="comment-reply-link comment-button-answered button-to-login" href="Javascipt:void(0)" >Ответить</a>';
            }
            ?>

        </div>
    <?php // без закрывающего </li> (!)
}
function cloud_miners_comment_end ( $comment, $args, $depth ){
    echo '</li>';
}

add_action( 'wpcf7_init', 'custom_add_form_tag_checkboxes' );
function custom_add_form_tag_checkboxes() {
    wpcf7_add_form_tag( 'checkboxes', 'custom_checkboxes_form_tag_handler' );
}
function custom_checkboxes_form_tag_handler( $tag ) {


    $responce = '
    <div class="group-checkbox-title">
           <p>Тип канала</p>
       </div>
       <div class="group-checkbox">
           <div class="form-group">
               <input name="FREE" type="checkbox" id="FREE">
               <label for="FREE">Публичный (FREE)</label>
           </div>
           <div class="form-group">
               <input name="VIP" type="checkbox" id="VIP">
               <label for="VIP">Приватный (VIP)</label>
           </div>
       </div>
    ';
    return $responce;
}


add_action( 'wp_footer', function() {
    if (is_post_type_archive('services')) {
    ?>
    <script>
        (function($) {
            $(function() {
                if ('undefined' !== typeof FWP) {
                    FWP.auto_refresh = false;
                }
            });
        })(fUtil);
    </script>
    <?php
    }
}, 100 );


//
    add_action( 'set_comment_cookies', function( $comment, $user ) {
        setcookie( 'ta_comment_wait_approval', '1' );
    }, 10, 2 );

    add_action( 'init', function() {
        if( isset($_COOKIE['ta_comment_wait_approval']) && $_COOKIE['ta_comment_wait_approval'] === '1' ) {
            // Instead of null, use an empty string as the default value
            setcookie( 'ta_comment_wait_approval', '', time() - 3600, '/' );
            add_action( 'comment_form_before', function() {
                echo '<script>
                const modalCommentSuccess = document.getElementById("modal-comment-success");
                const buttonCommentSuccess = document.getElementById("button-comment-success");
                const modalBg = document.getElementById("modal-bg");
                
                modalCommentSuccess.classList.add("opened");
                modalBg.classList.add("opened");
                body.classList.add("opened");
                               
                </script>';
            });
        }
    });

    add_filter( 'comment_post_redirect', function( $location, $comment ) {
        $location = get_permalink( $comment->comment_post_ID ) . '#wait_approval';
        return $location;
    }, 10, 2 );

// remove slug of custom post type from url
    function cloud_miners_remove_cpt_slug( $post_link, $post ) {
        if ( ('articles' === $post->post_type || 'services' === $post->post_type) && 'publish' === $post->post_status ) {
            $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
        }
        return $post_link;
    }
    add_filter( 'post_type_link', 'cloud_miners_remove_cpt_slug', 10, 2 );

    function cloud_miners_add_cpt_post_names_to_main_query( $query ) {
        // Return if this is not the main query.
        if ( ! $query->is_main_query() ) {
            return;
        }
        // Return if this query doesn't match our very specific rewrite rule.
        if ( ! isset( $query->query['page'] ) || 2 !== count( $query->query ) ) {
            return;
        }
        // Return if we're not querying based on the post name.
        if ( empty( $query->query['name'] ) ) {
            return;
        }
        // Add CPT to the list of post types WP will include when it queries based on the post name.
        $query->set( 'post_type', array( 'articles', 'services',) );
    }
    add_action( 'pre_get_posts', 'cloud_miners_add_cpt_post_names_to_main_query' );

    ?>
