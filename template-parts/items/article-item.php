<div class="article-item">
    <div class="article-item_img">
        <img src="<?=get_the_post_thumbnail_url($article)?>" alt="news item"/>
    </div>
    <!--    use class - purple-badge - for badge with purple circle-->
    <?php $term = wp_get_post_terms($article, 'category-articles'); ?>
    <p class="green-badge bg-light-bg"><?= $term ? esc_html($term[0]->name) : '' ?></p>
    <p class="article-title"><?= get_the_title($article); ?></p>
    <div class="horizontal-article-item__content-bot">
        <div class="article-data">
            <div class="article-data">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/calendar.svg'?>" alt=""/>
                <p><?= get_the_date('d.m.Y', $article) ?></p>
            </div>
            <div class="article-data">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/message.svg'?>" alt=""/>
                <!-- Временно -->
                <p>8</p>
            </div>
        </div>
        <a href="<?= get_the_permalink($article); ?>" class="button purple-outline-button"><?= esc_html__('Читать', 'cloud_miners') ?>
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/>
        </a>
    </div>
</div>
