<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * This class customizes and configures the plugin ACF
 */
class Acf_Config
{

    /**
     * Constructor
     */
    public function __construct()
    {

        $this->int_add_option_pages();
        add_action('acf/init', array($this, 'pr_register_acf_gutenberg_block_types'), 10);
        add_filter('block_categories_all', array($this, 'pr_add_custom_block_category'), 10, 2);
    }
    protected function int_add_option_pages()
    {

        if (function_exists('acf_add_options_page')) {

            acf_add_options_page(array(
                'page_title'     => 'Theme General Settings',
                'menu_title'    => 'Theme settings',
                'menu_slug'     => 'theme-general-settings',
                'capability'    => 'edit_posts',
                'redirect'        => false
            ));

            acf_add_options_sub_page(array(
                'page_title'     => 'Theme Header Settings',
                'menu_title'    => 'Header',
                'parent_slug'    => 'theme-general-settings',
            ));

            acf_add_options_sub_page(array(
                'page_title'     => 'Theme Footer Settings',
                'menu_title'    => 'Footer',
                'parent_slug'    => 'theme-general-settings',
            ));
        }
    }

    /**
     * Register acf blocks for Gutenberg editor
     *
     * @return void
     */
    public function pr_register_acf_gutenberg_block_types()
    {
        //Set block names comma separated
        $block_names = array(
            'banner',
            'services',
            'important-articles',
            'useful-articles',
            'actual-articles',
            'seo-module',
            'best-services',
            'single-nav',
            'note',
            'quote',
            'text-for-nav',
            'cloud-link',
            'advantages-and-disadvantages',
            'video-block',
            'chosen-comment',
            'gallery',
        );

        if (function_exists('acf_register_block_type')) {

            foreach ($block_names as $name) {
                acf_register_block_type(
                    array(
                        'name'            => $name . '-block',
                        'title'           => __(' Cloud-Miners', 'cloud_miners') . ' | ' . ucwords(str_replace('-', ' ', $name)),
                        'description'     => ucwords(str_replace('-', ' ', $name)) . __(': ACF block for Gutenberg Editor', 'cloud_miners'),
                        'render_template' => 'template-parts/blocks/pr-' . $name . '.php',
                        'category'        => 'cloud-miners-custom-blocks',
                        'icon'            => 'wordpress',
                        'mode'            => 'edit',
                        'supports'        => array(
                            'mode' => false,
                        ),
                    )
                );
            }
        }
    }

    /**
     * Add custom block category
     */
    public function pr_add_custom_block_category($categories, $post)
    {
        $desired_position = 0;
        $pr_category = array(
            'slug'  => 'cloud-miners-custom-blocks',
            'title' => 'Cloud-miners Blocks',
            'icon'  => 'block-default',
        );

        array_splice($categories, $desired_position, 0, array($pr_category));

        return $categories;
    }
}

if (class_exists('Acf_Config')) {

    new Acf_Config();
}
