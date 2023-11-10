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
$links = get_field('footer_links', 'option');
$checkedLinks = $links ?? 0;
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
            <nav>
                <ul class="footer_list">
                    <?php
                        if($checkedLinks !== 0) {
                            foreach ($checkedLinks as $link) {
                                if(!is_array($link)) : ?>
                                    <li class="footer_li">
                                        <a href="Javascript:void(0)" class="footer_link js-add-service"><?= $link ? esc_html($link) : '' ?></a>
                                    </li>
                                <?php else: ?>
                                    <li class="footer_li">
                                        <a href="<?= $link ? esc_attr($link['url']) : '' ?>" class="footer_link"><?= $link ? esc_html($link['title']) : '' ?></a>
                                    </li>
                                <?php endif;
                            }
                        }
                    ?>
                </ul>
            </nav>
            <p class="footer__copyright"><?= $copyright ? esc_html($copyright) : ''; ?></p>
        </div>
    </div>
</footer>

</div>
<?php wp_footer(); ?>
</main>
</body>
</html>

