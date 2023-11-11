<?php


//Register CPT and taxonomies for website
add_action('init', 'create_taxonomy');
add_action('init', 'register_post_types');

function register_post_types()
{

    register_post_type('articles', [
        'label' => 'Articles',
        'labels' => [
            'name' => 'Articles',
            'singular_name' => 'Article',
            'add_new' => 'Add article',
            'add_new_item' => 'Adding article',
            'edit_item' => 'Edit article',
            'new_item' => 'New article',
            'view_item' => 'Check article',
            'search_items' => 'Find article',
            'not_found' => 'Article not found',
            'not_found_in_trash' => 'Article not found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Articles',
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null,
        // 'exclude_from_search' => null,
        // 'show_ui'             => null,
        // 'show_in_nav_menus'   => null,
        'show_in_menu' => null,
        // 'show_in_admin_bar'   => null,
        'show_in_rest' => true,
        'rest_base' => null,
        'menu_position' => null,
        'menu_icon' => 'dashicons-welcome-write-blog',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post',
        //'map_meta_cap'      => null,
        'hierarchical' => false,
        'supports' => ['title', 'thumbnail', 'excerpt', 'editor', 'author', 'comments'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('services', [
        'label' => 'Services',
        'labels' => [
            'name' => 'Services',
            'singular_name' => 'Service',
            'add_new' => 'Add service',
            'add_new_item' => 'Adding service',
            'edit_item' => 'Edit service',
            'new_item' => 'New service',
            'view_item' => 'Check service',
            'search_items' => 'Find service',
            'not_found' => 'Service not found',
            'not_found_in_trash' => 'Service not found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Services',
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null,
        // 'exclude_from_search' => null,
        // 'show_ui'             => null,
        // 'show_in_nav_menus'   => null,
        'show_in_menu' => null,
        // 'show_in_admin_bar'   => null,
        'show_in_rest' => false,
        'rest_base' => null,
        'menu_position' => null,
        'menu_icon' => 'dashicons-cart',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post',
        //'map_meta_cap'      => null,
        'hierarchical' => false,
        'supports' => ['title', 'thumbnail', 'excerpt', 'editor', 'page-attributes', 'post-formats', 'custom-fields', 'comments'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

}

function create_taxonomy()
{

    register_taxonomy('category-articles', ['articles'], [
        'label' => 'Category',
        'labels' => [
            'name' => 'Category',
            'singular_name' => 'Category',
            'search_items' => 'Search Category',
            'all_items' => 'All',
            'view_item ' => 'View Category',
            'parent_item' => 'Parent Category',
            'parent_item_colon' => 'Parent Category:',
            'edit_item' => 'Edit Category',
            'update_item' => 'Update Category',
            'add_new_item' => 'Add New Category',
            'new_item_name' => 'New Category Name',
            'menu_name' => 'Category',
            'back_to_items' => '← Back to Category',
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'    => null,
        // 'show_in_nav_menus'     => true,
        // 'show_ui'               => true,
        // 'show_in_menu'          => true,
        // 'show_tagcloud'         => true,
        // 'show_in_quick_edit'    => null,
        'hierarchical' => false,

        'rewrite' => true,
        //'query_var'             => $taxonomy,
        'capabilities' => array(),
        'meta_box_cb' => null,
        'show_admin_column' => true,
        'show_in_rest' => null,
        'rest_base' => null,
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ]);

    register_taxonomy('characteristics-articles', ['services'], [
        'label' => 'Characteristics',
        'labels' => [
            'name' => 'Characteristics',
            'singular_name' => 'Characteristics',
            'search_items' => 'Search Characteristics',
            'all_items' => 'All Characteristics',
            'view_item ' => 'View Characteristic',
            'parent_item' => 'Parent Characteristic',
            'parent_item_colon' => 'Parent Characteristic:',
            'edit_item' => 'Edit Characteristic',
            'update_item' => 'Update Characteristic',
            'add_new_item' => 'Add New Characteristic',
            'new_item_name' => 'New Characteristic Name',
            'menu_name' => 'Characteristic',
            'back_to_items' => '← Back to Characteristic',
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'    => null,
        // 'show_in_nav_menus'     => true,
        // 'show_ui'               => true,
        // 'show_in_menu'          => true,
        // 'show_tagcloud'         => true,
        // 'show_in_quick_edit'    => null,
        'hierarchical' => true,

        'rewrite' => true,
        //'query_var'             => $taxonomy,
        'capabilities' => array(),
        'meta_box_cb' => null,
        'show_admin_column' => true,
        'show_in_rest' => null,
        'rest_base' => null,
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ]);
}


?>