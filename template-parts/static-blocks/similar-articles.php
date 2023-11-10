<?php
    $similarArticles = get_field('similar_articles') ?? 0;
    $link = get_field('similar_articles_link');
?>
<div class="similar-articles">
    <div class="useful-articles__container">
        <div class="important-articles__titles">
            <h2><?= esc_html__('Похожие статьи', 'cloud_miners'); ?></h2>
            <a href="<?= $link ? esc_attr($link['url']) : '' ?>" class="button purple-outline-button"><?= $link ? esc_attr($link['title']) : '' ?> <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/></a>
        </div>
        <div class="similar-articles_content">
            <?php if ($similarArticles !== 0) :
                foreach ($similarArticles as $article):
                    require get_template_directory() . "/template-parts/items/article-item.php";
                endforeach;
            endif; ?>
        </div>
        <div class="button-mob">
            <a href="<?= $link ? esc_attr($link['url']) : '' ?>" class="button purple-outline-button"><?= $link ? esc_attr($link['title']) : '' ?>
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/>
            </a>
        </div>
    </div>
</div>
