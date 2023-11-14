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
        $query->set( 'posts_per_page', '-1' );
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
                            <?php $rating = get_field('star_rating', $comment); ?>
                            <?= $rating; ?>
                        </div>
<!--                        <p class="comment-author__info-graduate">4.0</p>-->
                    </div>
                    <p class="comment-author__data"><?= get_comment_date('d.m.Y', get_comment_ID()); ?></p>
                </div>
            </div>

            <p class="comment-content"><?= get_comment_text(get_comment_ID()); ?></p>

            <?php
                $images = get_field('image_comment', $comment) ?? 0;
                if ($images && $images !== 0): ?>
                    <div class="comment-inner__images">
                   <?php foreach ($images as $image) :?>
                        <a href="<?= esc_attr($image['url']) ?>" class="img-block__show" data-lightbox="roadtrip">
                            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/search-show.svg'?>" alt="look" class="img-block__show-icon"/>
                            <img src="<?= esc_attr($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>" class="img-block__image"/>
                        </a>
                <?php endforeach; ?>
                    </div>
            <?php endif; ?>

            <?php
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
            }
            ?>

        </div>
    <?php // без закрывающего </li> (!)
}
function cloud_miners_comment_end ( $comment, $args, $depth ){
    echo '</li>';
}

?>
