<?php
$title = get_field('title');
$link = get_field('link');
$articles = get_field('articles');
?>

<div class="important-articles">
    <div class="container">
        <div class="important-articles__titles">
            <h2><?= $title ? esc_html($title) : '' ?></h2>
            <a href="<?= $link ? esc_attr($link['url']) : '' ?>" class="button white-contain-button"><?= $link ? esc_html($link['title']) : '' ?> <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/></a>
        </div>
        <div class="important-articles__content">
            <?php
            if (!empty($articles)) :
                $article_id = array_shift($articles);
                require get_template_directory() . "/template-parts/items/big-article-item.php"; ?>

            <div class="important-articles__vertical">
            <?php
                foreach ($articles as $article) :
                    require get_template_directory() . "/template-parts/items/horizontal-article-item.php";
                endforeach;
                ?>
            </div>
                <?php endif; ?>
            </div>
        <div class="button-mob">
            <a href="<?= $link ? esc_attr($link['url']) : '' ?>" class="button white-contain-button"><?= $link ? esc_html($link['title']) : '' ?> <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/></a>
        </div>
    </div>
</div>