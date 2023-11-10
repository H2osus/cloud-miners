<?php
    $title = get_field('title_add_services_popup', 'option') ?? 0;
    $form = get_field('form_add_services_popup', 'option') ?? 0;
?>
<div class="modal modal-form" id="modal-add-service">
    <button class="modal__close">
        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/close.svg' ?>" alt="" class="modal__close-img"/>
    </button>
    <img src="<?= get_template_directory_uri() . '/src/img/images/modal-bg-mobile.png' ?>" alt="" class="modal__bg-mob"/>
    <img src="<?= get_template_directory_uri() . '/src/img/images/modal-bg-desk.png' ?>" alt="" class="modal__bg-desk"/>
    <div class="modal__container">
        <div class="modal__title">
            <p><?= ($title !== 0) ? esc_html($title) : ''; ?></p>
        </div>
        <div class="modal__content">
            <?php if($form !== 0): ?>
            <?= do_shortcode('[contact-form-7 id="'. $form->ID .'" title="'.$form->post_title.'"]') ?>
            <?php endif; ?>
        </div>
    </div>
</div>
