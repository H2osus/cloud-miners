<?php
    $title = get_field('top_serv_w_title', 'option') ?? 0;
    $link = get_field('top_serv_w_link', 'option') ?? 0;
    $services = get_field('top_serv_w_services', 'option') ?? 0;
?>

<div class="sidebar">
    <h4><?= ($title !== 0) ? esc_html($title) : '' ?></h4>
    <?php if ($services !== 0) :
        foreach ($services as $serviceId):
            require get_template_directory() . "/template-parts/items/service-item.php";
        endforeach;
    endif; ?>
    <div class="sidebar__button">
        <a href="<?= ($link !== 0) ? esc_attr($link['url']) : '#' ?>" class="button purple-outline-button"><?= ($link !== 0) ? esc_html($link['title']) : '' ?>
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/>
        </a>
    </div>
    <?php
        require get_template_directory() . "/template-parts/items/add-service.php";
    ?>
</div>