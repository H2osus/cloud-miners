<div class="big-article-item">
    <p class="tag-purple"><?= esc_html__('Новая', 'cloud_miners') ?></p>
    <img src="<?=get_the_post_thumbnail_url($article_id)?>" alt="" class="big-article-item__img"/>
    <div class="big-article-item__content">
        <?php $term = wp_get_post_terms($article_id, 'category-articles'); ?>
        <p class="green-badge"><?= $term ? esc_html($term[0]->name) : '' ?></p>
        <div class="big-article-item__content--text">
            <h5><?= get_the_title($article_id); ?></h5>
            <p><?= get_the_excerpt($article_id); ?></p>
            <div class="big-article-item__content-bot">
                <div class="article-data">
                    <div class="article-data">
                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/calendar.svg'?>" alt=""/>
                        <p><?= get_the_date('d.m.Y', $article_id) ?></p>
                    </div>
                    <div class="article-data">
                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/message.svg'?>" alt=""/>
                        <p><?= get_comments_number($article_id) ?></p>
                    </div>
                </div>
                <a href="<?= get_the_permalink($article_id); ?>" class="button purple-contain-button">
                    <?= esc_html__('Читать', 'cloud_miners') ?><img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-white.svg'?>" alt=""/></a>
            </div>
        </div>
    </div>
</div>
