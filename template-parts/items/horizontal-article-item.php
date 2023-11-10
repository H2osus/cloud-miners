<div class="horizontal-article-item">
    <img src="<?=get_the_post_thumbnail_url($article)?>" alt="" class="horizontal-article-item__img"/>
    <div class="horizontal-article-item__content">
        <?php $term = wp_get_post_terms($article, 'category-articles'); ?>
        <p class="green-badge bg-light-bg"><?= $term ? esc_html($term[0]->name) : '' ?></p>
        <h5><?= get_the_title($article); ?></h5>
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
            <a href="<?= get_the_permalink($article); ?>" class="button white-contain-button"><?= esc_html__('Читать', 'cloud_miners') ?>
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/>
            </a>
        </div>
    </div>
</div>
