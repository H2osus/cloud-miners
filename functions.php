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


?>