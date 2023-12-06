<div class="author-article">
    <div class="author-article__img">
        <?php if(get_the_post_thumbnail_url(get_the_ID())): ?>
            <a href="<?= the_permalink(get_the_ID()) ?>">
                <img src="<?=get_the_post_thumbnail_url(get_the_ID())?>" alt="news item"/>
            </a>
        <?php else: ?>
            <a href="<?= the_permalink(get_the_ID()) ?>">
                <img src="<?= get_template_directory_uri() . '/src/img/images/img-3.png'?>" alt="news item"/>
            </a>
        <?php endif; ?>
    </div>
    <div class="author-article__content">
        <?php $term = wp_get_post_terms(get_the_ID(), 'category-articles'); ?>
        <a href="<?= $term ? get_term_link($term[0]->term_id) : '#'; ?>" style="text-decoration: unset;" class="green-badge"><?= $term ? esc_html($term[0]->name) : '' ?></a>
        <a class="author-article-title" href="<?= get_the_permalink(get_the_ID()); ?>" style="text-decoration: unset;">
            <h5 class="author-article__title"><?= get_the_title(get_the_ID()); ?></h5>
        </a>
        <p class="author-article__descr"><?= get_the_excerpt(get_the_ID()); ?></p>
        <div class="big-article-item__content-bot">
            <div class="article-data">
                <div class="article-data">
                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/calendar.svg'?>" alt=""/>
                    <p><?= get_the_date('d.m.Y', get_the_ID()) ?></p>
                </div>
                <div class="article-data">
                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/message.svg'?>" alt=""/>
                    <p><?= get_comments_number(get_the_ID()) ?></p>
                </div>
            </div>
            <a href="<?= the_permalink(get_the_ID()) ?>" class="button purple-outline-button"><?= esc_html__('Читать', 'cloud_miners') ?> <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/></a>
        </div>
    </div>
</div>