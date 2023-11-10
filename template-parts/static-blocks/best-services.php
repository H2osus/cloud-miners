<?php
$title = get_field('best_serv_title_2', 'option') ?? 0;
$services = get_field('best_serv_services_2', 'option') ?? 0;
$link = get_field('best_serv_link_2', 'option') ?? 0;
?>

<div class="best-services">
    <div class="container">
        <div class="best-services__title">
            <h2><?= ($title !== 0) ? esc_html($title) : '' ?></h2>
            <a href="<?= ( $link !== 0 ) ? esc_attr($link['url']) : '#' ?>" class="button purple-outline-button"><?= ( $link !== 0 ) ? esc_html($link['title']) : '#' ?> <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/></a>
        </div>
        <div class="best-services__container">
            <?php
                if ($services !== 0) :
                    foreach ($services as $serviceId):
                        require get_template_directory() . "/template-parts/items/service-item.php";
                    endforeach;
                endif;
            ?>
        </div>

        <div class="button-mob">
            <a href="<?= ( $link !== 0 ) ? esc_attr($link['url']) : '#' ?>" class="button purple-outline-button"><?= ( $link !== 0 ) ? esc_html($link['title']) : '#' ?>
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/>
            </a>
        </div>
    </div>
</div>