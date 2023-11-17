<?php
$text = get_field('quote_text') ?? '';
?>

<div class="quote">
    <p><?= esc_html($text); ?></p>
</div>