<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body id="body" <?php  body_class(); ?> >
<?php wp_body_open(); ?>
<main>
    <header class='header header-dark' id="header">
        <div class="container">
            <div class="header_container">
                <?php $logo = get_field('dark_logo', 'option') ?? 0; ?>
                    <a href="<?= home_url('/'); ?>">
                        <img src="<?= ($logo !== 0) ? esc_attr($logo['url']): '' ?>" alt="<?= ($logo !== 0) ? esc_attr($logo['alt']): '' ?>" class="logo"/>
                    </a>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu' => 'header-menu',
                    'menu_class' => 'header_list',
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    'container' => 'nav',
                    'container_class' => 'nav',
                    'link_class' => 'header_link',
                )); ?>
                <div class="search-hamburger">
                    <div class="search-input__container">
<!--                        <input class="search-input" id="search-input">-->
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <input type="search" id="search-input" class="search-input search-field" value="<?php echo get_search_query() ?>" name="s" />
                        </form>
                        <a href="/search.html" class="search-link" id="search-input-button">
                            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/arrow-down.svg'?>" alt="banner mask" class=""/>
                        </a>
                    </div>
                    <div class="search" id="search-button">
                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/search-black.svg'?>" alt="Cloud Miners"/>
                    </div>
                    <button class="hamburger-slim" id="hamburger-slim"></button>
                </div>
                <div class="menu-mobile" id="menu-mobile">
                    <nav class="container">
                        <?php if (get_theme_mod('custom_logo')) : ?>
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="Cloud Miners" class="logo"/>
                            </a>
                        <?php endif ?>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'menu' => 'header-menu',
                            'menu_class' => 'header_list',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                            'link_class' => 'header_link',
                        )); ?>
                    </nav>
                </div>
                <div class="search-mobile" id="search-mobile">
                    <div class="search-input__container">
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <input type="search" id="search-input" class="search-input search-field" value="<?php echo get_search_query() ?>" name="s"  />
                        </form>
                        <a href="/search.html" class="search-link">
                            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/arrow-down.svg'?>" alt="banner mask" class=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- #masthead -->