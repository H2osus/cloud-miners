<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cloud_miners
 */

get_header('dark');

$title = get_field('title_404', 'option') ?? 0;
$subtitle = get_field('subtitle_404', 'option') ?? 0;
$text1 = get_field('text_1_404', 'option') ?? 0;
$text2 = get_field('text_2_404', 'option') ?? 0;
$link = get_field('link_404', 'option') ?? 0;
?>

    <main class="main">
        <div class="page-404">
            <img src="<?= get_template_directory_uri() . '/src/img/images/404-bg-desk.png'?>" alt="" class="page-404__img-desk"/>
            <img src="<?= get_template_directory_uri() . '/src/img/images/404-bg-mob.png'?>" alt="" class="page-404__img-mob"/>
            <p class="page-404__error-bg"><?= esc_html($title); ?></p>
            <p class="page-404__404"><?= esc_html($subtitle); ?></p>
            <p class="page-404__error"><?= esc_html($text1); ?></p>
            <p class="page-404__not-found"><?= esc_html($text2); ?></p>
            <a href="<?= ($link !== 0) ? esc_attr($link['url']) : ''; ?>" class="button purple-contain-button"><?= ($link !== 0) ? esc_attr($link['title']) : ''; ?></a>
        </div>
    </main>

<?php get_footer(); ?>
