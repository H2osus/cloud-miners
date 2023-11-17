<?php
    $text = get_field('text') ?? '';
    $link = get_field('link') ?? 0;
    $user = get_field('user') ?? 0;
    $date = get_field('date') ?? 0;
?>

<div class="quote">
    <p><?= esc_html($text) ?>
        <?php if($link && $link !== 0): ?>
        <a href="#<?= esc_attr($link['url']) ?>"><?= esc_attr($link['title']) ?></a>
        <?php endif; ?>
    </p>
    <div>
        <p><?= esc_html($user['display_name']) ?></p>
        <?php if($date && $date !== 0): ?>
        <p><?= $date ?></p>
        <?php endif; ?>
    </div>
</div>