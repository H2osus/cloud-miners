<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cloud_miners
 */

$logo = get_field('footer_logo', 'option');
$copyright = get_field('copyright', 'option');
?>

<footer class="footer">
    <img src="<?= get_template_directory_uri() . '/src/img/images/footer-mask.png'?>" alt="Clound Miners" class="footer__img footer__img__desk"/>
    <img src="<?= get_template_directory_uri() . '/src/img/images/footer-mobile.png'?>" alt="Clound Miners" class="footer__img footer__img__mobile"/>
    <div class="container">
        <div class="footer-container">
            <a href="<?= esc_attr('/') ?>">
                <img src="<?= $logo ? esc_attr($logo['url']) : ''?>" alt="<?= $logo ? esc_attr($logo['alt']) : ''?>" class="Cloud Miners"/>
            </a>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'menu' => 'footer-menu',
                'menu_class' => 'footer_list',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                'container' => 'nav',
                'container_class' => 'nav',
                'link_class' => 'footer_link',
            )); ?>
            <p class="footer__copyright"><?= $copyright ? esc_html($copyright) : ''; ?></p>
        </div>
    </div>

    <div class="top-up"></div>
</footer>

</div>
<?php wp_footer(); ?>
</main>
</body>
</html>

