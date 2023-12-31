<div class="big-article-item">
    <p class="tag-purple"><?= esc_html__('Новая', 'cloud_miners') ?></p>
    <?php if(get_the_post_thumbnail_url($article_id)): ?>
        <a href="<?= get_the_permalink($article_id); ?>">
            <img src="<?= get_the_post_thumbnail_url($article_id); ?>" alt="" class="big-article-item__img"/>
        </a>
    <?php else: ?>
        <a href="<?= get_the_permalink($article_id); ?>">
            <img src="<?= get_template_directory_uri() . '/src/img/images/img-3.png'?>" alt="" class="big-article-item__img"/>
        </a>
    <?php endif; ?>
    <div class="big-article-item__content">
        <?php $term = wp_get_post_terms($article_id, 'category-articles'); ?>
        <a href="<?= $term ? get_term_link($term[0]->term_id) : '#' ?>" style="text-decoration: unset" class="green-badge"><?= $term ? esc_html($term[0]->name) : '' ?></a>
        <div class="big-article-item__content--text">
            <a class="big-title-link" href="<?= get_the_permalink($article_id); ?>" style="text-decoration: unset;">
                <h5><?= get_the_title($article_id); ?></h5>
            </a>
            <p><?= get_the_excerpt($article_id); ?></p>
            <div class="big-article-item__content-bot">
                <div class="article-data">
                    <div class="article-data">
                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/calendar-white.svg'?>" alt=""/>
                        <p><?= get_the_date('d.m.Y', $article_id) ?></p>
                    </div>
                    <div class="article-data">
                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/message-white.svg'?>" alt=""/>
                        <p><?= get_comments_number($article_id) ?></p>
                    </div>
                </div>
                <a href="<?= get_the_permalink($article_id); ?>" class="button purple-contain-button">
                    <?= esc_html__('Читать', 'cloud_miners') ?><img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-white.svg'?>" alt=""/></a>
            </div>
        </div>
    </div>
</div>
