<?php
$title = get_field('title_services_success_popup', 'option') ?? 0;
$text = get_field('text_services_success_popup', 'option') ?? 0;
?>
<div class="modal" id="modal-service-success">
    <button class="modal__close">
        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/close.svg' ?>" alt="" class="modal__close-img"/>
    </button>
    <img src="<?= get_template_directory_uri() . '/src/img/images/modal-bg-mobile.png' ?>" alt="" class="modal__bg-mob  modal__bg-desk"/>
    <div class="modal__container">
        <div class="modal__title">
            <div class="modal__check">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/check.svg' ?>" alt=""/>
            </div>
            <p><?= ($title !== 0) ? esc_html($title) : ''; ?></p>
        </div>
        <div class="modal__content">
            <p><?= ($text !== 0) ? esc_html($text) : '' ?></p>
        </div>
    </div>
</div>