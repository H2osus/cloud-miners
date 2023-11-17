<?php
    $text = get_field('text') ?? '';
    $block_id = get_field('block_id') ?? '';
?>

<p id='<?= esc_attr($block_id) ?>'>
    <?= esc_html($text); ?>
</p>