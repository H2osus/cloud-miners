<?php
    $advantages = get_field('advantages') ?? 0;
    $advTitle = get_field('title_adv') ?? '';
    $disadvantages = get_field('disadvantages') ?? 0;
    $disTitle = get_field('title_dis') ?? '';
?>

<?php if($advantages && $advantages !== 0): ?>
    <div class="advantages">
        <h4><?= esc_html($advTitle) ?></h4>
        <ul>
            <?php foreach ($advantages as $item): ?>
                <li><?= esc_html($item['title']) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if($disadvantages && $disadvantages !== 0): ?>
    <div class="flaws">
        <h4><?= esc_html($disTitle) ?></h4>
        <ul>
            <?php foreach ($disadvantages as $item): ?>
                <li><?= esc_html($item['title']) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
