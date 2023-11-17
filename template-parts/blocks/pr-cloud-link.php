<?php
    $link = get_field('link') ?? 0;
    if($link !== 0): ?>
    <a href="<?= esc_attr($link['url']) ?>" target="<?= esc_attr($link['target']) ?>" class="yellow-link">
        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/notifications.svg'?>" alt="look"><?= esc_html($link['title']) ?>
    </a>
<?php endif; ?>