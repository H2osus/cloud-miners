<?php
$title = get_field('title_complaint_success_popup', 'option') ?? 0;
$text = get_field('text_complaint_success_popup', 'option') ?? 0;
?>
<div class="modal" id="modal-complaint-success">
    <button class="modal__close">
        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/close.svg' ?>" alt="" class="modal__close-img"/>
    </button>
    <img src="<?= get_template_directory_uri() . '/src/img/images/modal-bg-mobile.png' ?>" alt="" class="modal__bg-mob modal__bg-desk"/>
    <div class="modal__container">
        <div class="modal__title">
            <span class="popup-success-icon">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/check.svg' ?>" alt="">
            </span>
            <p><?= ($title !== 0) ? esc_html($title) : ''; ?></p>
        </div>
        <div class="modal__content">
            <p><?= ($text !== 0) ? esc_html($text) : '' ?></p>
        </div>
    </div>
</div>