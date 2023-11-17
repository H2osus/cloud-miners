<?php
    $text = get_field('text') ?? '';
?>
<div class="note">
    <p><?= esc_html($text); ?></p>
</div>