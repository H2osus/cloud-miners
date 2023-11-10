<?php
    $title = get_field('popular_art_w_title', 'option') ?? '';
    $articles = get_field('popular_art_w_articles', 'option') ?? 0;
    $link = get_field('popular_art_w_link', 'option') ?? '';
?>

<div class="sidebar popular-articles">
    <h4><?= esc_html($title); ?></h4>

    <?php
        if($articles !== 0) :
            foreach ($articles as $articleId):
                require get_template_directory() . "/template-parts/items/popular-article.php";
            endforeach;
        endif;
    ?>
    <div class="sidebar__button">
        <a href="<?= esc_attr($link['url']) ?>" class="button purple-outline-button"><?= esc_html($link['title']); ?>
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/>
        </a>
    </div>
</div>