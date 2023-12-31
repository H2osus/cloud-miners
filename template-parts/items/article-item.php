<div class="article-item">
    <div class="article-item_img">
        <?php if(get_the_post_thumbnail_url($article)): ?>
            <a href="<?= get_the_permalink($article); ?>" style="margin-bottom: 0;">
                <img src="<?=get_the_post_thumbnail_url($article)?>" alt="news item"/>
            </a>
        <?php else: ?>
            <a href="<?= get_the_permalink($article); ?>" style="margin-bottom: 0;">
                <img src="<?= get_template_directory_uri() . '/src/img/images/img-3.png'?>" alt="news item"/>
            </a>
        <?php endif; ?>
    </div>
    <!--    use class - purple-badge - for badge with purple circle-->
    <?php $term = wp_get_post_terms($article, 'category-articles'); ?>
    <?php
    if(is_front_page()){
        $style = 'background-color: #fff;';
    } else {
        $style = '';
    }
    ?>
    <a href="<?= $term ? get_term_link($term[0]->term_id) : '#' ?>" class="green-badge bg-light-bg" style="<?= esc_attr($style) ?>; text-decoration: unset;"><?= $term ? esc_html($term[0]->name) : '' ?></a>
    <a href="<?= get_the_permalink($article); ?>" style="margin-bottom: 0; text-decoration: unset;" class="title-link">
        <p class="article-title"><?= get_the_title($article); ?></p>
    </a>
    <div class="horizontal-article-item__content-bot">
        <div class="article-data">
            <div class="article-data">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/calendar.svg'?>" alt=""/>
                <p><?= get_the_date('d.m.Y', $article) ?></p>
            </div>
            <div class="article-data">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/message.svg'?>" alt=""/>
                <p><?= get_comments_number($article) ?></p>
            </div>
        </div>
        <a href="<?= get_the_permalink($article); ?>" class="button purple-outline-button"><?= esc_html__('Читать', 'cloud_miners') ?>
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/button-arrow-purple.svg'?>" alt=""/>
        </a>
    </div>
</div>
