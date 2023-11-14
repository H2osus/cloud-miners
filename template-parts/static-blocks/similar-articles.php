<?php
//    $similarArticles = get_field('similar_articles') ?? 0;

$current_post_id = get_the_ID();

// Получаем тип текущего поста
$current_post_type = get_post_type($current_post_id);

// Получаем все ID постов того же типа
$all_post_ids = get_posts(array(
    'fields' => 'ids',
    'numberposts' => -1,
    'post_type' => $current_post_type,
    'order' => 'ASC',
));

// Находим индекс текущего поста в массиве всех ID постов
$current_post_index = array_search($current_post_id, $all_post_ids);

// Если текущий пост последний по ID или не существует, получаем три первых ID постов
if ($current_post_index === false || $current_post_index === count($all_post_ids) - 1) {
    $similarArticles = array_slice($all_post_ids, 0, 3);
} else {
    // Получаем три следующих ID постов, включая текущий
    $similarArticles = array_slice($all_post_ids, $current_post_index, 4);

    // Удаляем текущий пост из массива
    array_shift($similarArticles);

    // Если не хватает следующих постов, дополним из начала списка
    $remaining = 3 - count($similarArticles);
    if ($remaining > 0) {
        $additionalPosts = array_slice($all_post_ids, 0, $remaining);
        $similarArticles = array_merge($similarArticles, $additionalPosts);
    }
}

$link = get_field('similar_articles_link');
$title = get_field('similar_articles_title') ?? '';
$status = get_field('enable');

if ($status) : ?>
    <div class="similar-articles">
        <div class="useful-articles__container">
            <div class="important-articles__titles">
                <h2><?= esc_attr($title); ?></h2>
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
<?php endif; ?>
