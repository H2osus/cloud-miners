<?php
    $title = get_field('add_serv_w_title', 'option') ?? '';
    $text = get_field('add_serv_w_text', 'option') ?? '';
    $button = get_field('add_serv_w_button', 'option') ?? '';
?>

<div class="add-service">
    <img src="<?= get_template_directory_uri() . '/src/img/images/add-service.png' ?>" alt="decoration" class="decoration desk"/>
    <img src="<?= get_template_directory_uri() . '/src/img/images/add-service.png' ?>" alt="decoration" class="decoration mob"/>
    <div class="add-service__content">
        <p class="add-service__title "><?= esc_html($title); ?></p>
        <p class="add-service__description"><?= esc_html($text) ?></p>
        <button class="button purple-contain-button button-w-full js-add-service"><?= esc_html($button) ?></button>
    </div>
</div>
