<?php
$desc_bg = get_field('desctop_background');
$mob_bg = get_field('mobile_background');

$title_1 = get_field('title_first_part');
$title_2 = get_field('title_second_part');
$title_3 = get_field('title_third_part');

$text = get_field('text');
?>

<div class="banner">
    <button class="scroll-button banner_scroll-arrow">
        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/arrow-down.svg'?>" alt="banner mask" class=""/>
    </button>
    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/banner-scroll.svg'?>" alt="banner mask" class="banner_scroll"/>
    <img src="<?= $desc_bg ? esc_attr($desc_bg['url']) : '' ;?>" alt="<?= $desc_bg ? esc_attr($desc_bg['alt']) : '' ;?>" class="banner_img__desk"/>
    <img src="<?= $desc_bg ? esc_attr($mob_bg['url']) : '' ;?>" alt="<?= $desc_bg ? esc_attr($mob_bg['alt']) : '' ;?>" class="banner_img__mobile"/>
    <div class="container">
        <div class="banner_content">
            <div class="banner_text">
                <h1 class="banner_title"><?= $title_1 ? esc_html($title_1) : '' ;?><b><?= $title_2 ? esc_html($title_2) : '' ;?><span><?= $title_3 ? esc_html($title_3) : '' ;?></span></b></h1>
                <p><?= $text ? esc_html($text) : '' ; ?></p>
            </div>
        </div>
    </div>
</div>