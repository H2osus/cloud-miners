<?php
$title = get_field('title');
$link = get_field('link');
$articles = get_field('articles');
?>

<div class="useful-articles">
    <div class="container">
        <div class="important-articles__titles">
            <h2><?= $title ? esc_html($title) : '' ?></h2>
            <a href="<?= $link ? esc_attr($link['url']) : '' ?>" class="button purple-outline-button"><?= $link ? esc_html($link['title']) : '' ?> <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/></a>
        </div>
        <div class="useful-articles_content">
            <?php
            if (!empty($articles)) :
                foreach ($articles as $article) :
                    require get_template_directory() . "/template-parts/items/article-item.php";
                endforeach;
            endif;
            ?>
        </div>
        <div class="button-mob">
            <a href="<?= $link ? esc_attr($link['url']) : '' ?>" class="button purple-outline-button"><?= $link ? esc_html($link['title']) : '' ?>
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/>
            </a>
        </div>
    </div>
</div>
