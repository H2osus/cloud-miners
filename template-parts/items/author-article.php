<div class="author-article">
    <div class="author-article__img">
        <img src="<?=get_the_post_thumbnail_url(get_the_ID())?>" alt="news item"/>
    </div>
    <div class="author-article__content">
        <?php $term = wp_get_post_terms(get_the_ID(), 'category-articles'); ?>
        <p class="green-badge"><?= $term ? esc_html($term[0]->name) : '' ?></p>
        <h5 class="author-article__title"><?= get_the_title(get_the_ID()); ?></h5>
        <p class="author-article__descr"><?= get_the_excerpt(get_the_ID()); ?></p>
        <div class="big-article-item__content-bot">
            <div class="article-data">
                <div class="article-data">
                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/calendar.svg'?>" alt=""/>
                    <p><?= get_the_date('d.m.Y', get_the_ID()) ?></p>
                </div>
                <div class="article-data">
                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/message.svg'?>" alt=""/>
                    <!-- Временно -->
                    <p>8</p>
                </div>
            </div>
            <a href="<?= the_permalink(get_the_ID()) ?>" class="button purple-outline-button"><?= esc_html__('Читать', 'cloud_miners') ?> <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/></a>
        </div>
    </div>
</div>