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
    <?php
        $links = get_field('header_links', 'option');
        $checkedLinks = $links ?? 0;
    ?>
    <header class='header header-light' id="header">
        <div class="container">
            <div class="header_container">
                <?php if (get_theme_mod('custom_logo')) : ?>
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="Cloud Miners" class="logo"/>
                    </a>
                <?php endif ?>
                <nav>
                    <ul class="header_list">
                        <?php
                        if($checkedLinks !== 0) {
                            foreach ($checkedLinks as $link) {
                                if(!is_array($link)) : ?>
                                    <li class="header_li">
                                        <a href="Javascript:void(0)" class="header_link js-add-service"><?= $link ? esc_html($link) : '' ?></a>
                                    </li>
                                <?php else: ?>
                                    <li class="header_li">
                                        <a href="<?= $link ? esc_attr($link['url']) : '' ?>" class="header_link"><?= $link ? esc_html($link['title']) : '' ?></a>
                                    </li>
                                <?php endif;
                            }
                        }
                        ?>
                    </ul>
                </nav>
                <div class="search-hamburger">
                    <div class="search-input__container">
<!--                        <input class="search-input" id="search-input">-->
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <input type="search" id="search-input" class="search-input search-field" value="<?php echo get_search_query() ?>" name="s" />
                        </form>
                        <a href="/search.html" class="search-link" id="search-input-button">
                            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/arrow-down-white.svg'?>" alt="banner mask" class=""/>
                        </a>
                    </div>
                    <div class="search" id="search-button">
                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/search-white.svg'?>" alt="Cloud Miners"/>
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
                        <ul class="header_list">
                            <?php
                            if($checkedLinks !== 0) {
                                foreach ($checkedLinks as $link) {
                                    if(!is_array($link)) : ?>
                                        <li class="header_li">
                                            <button class="header_link js-add-service" ><?= $link ? esc_html($link) : '' ?></button>
                                        </li>
                                    <?php else: ?>
                                        <li class="header_li">
                                            <a href="<?= $link ? esc_attr($link['url']) : '' ?>" class="header_link"><?= $link ? esc_html($link['title']) : '' ?></a>
                                        </li>
                                    <?php endif;
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
                <div class="search-mobile" id="search-mobile">
                    <div class="search-input__container">
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <input type="search" id="search-input" class="search-input search-field" value="<?php echo get_search_query() ?>" name="s" />
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