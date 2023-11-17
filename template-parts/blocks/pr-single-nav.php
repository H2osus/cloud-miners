<div class="service-navigation" id="service-navigation">
    <div class="open-navigation" id="open-navigation">
        <div class="open-navigation__left">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/nav.svg'?>" alt="" />
            <p><?= esc_html__('Навигация', 'cloud_miners') ?></p>
        </div>
        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/arrow-small.svg'?>" alt="" class="open-navigation__arrow"/>
    </div>
    <?php
    $nav = get_field('content_navigation') ?? 0;
    if($nav && $nav !== 0) : ?>
        <ul class="list-bordered">
            <?php foreach($nav as $item): ?>
                <li><a href="#<?= esc_attr($item['block_id']); ?>"><?= esc_html($item['tilte']) ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>