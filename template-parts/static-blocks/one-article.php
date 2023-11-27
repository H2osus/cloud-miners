<div class="one-article">
    <?php if(get_the_post_thumbnail_url(get_the_ID())): ?>
        <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="look"/>
    <?php else: ?>
        <img src="<?= get_template_directory_uri() . '/src/img/images/img-3.png'?>" alt="look"/>
    <?php endif; ?>
    <h2><?= the_title() ?></h2>
    <div class="one-article__date-time">
        <?php $term = wp_get_post_terms(get_the_ID(), 'category-articles'); ?>
        <p class="green-badge bg-light-bg"><?= $term ? esc_html($term[0]->name) : '' ?></p>
        <div class="article-data">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/calendar.svg'?>" alt="look"/>
            <p><?= get_the_date('d.m.Y', get_the_ID()) ?></p>
        </div>
        <div class="article-data">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/eye.svg'?>" alt="look"/>
            <?php
                $views = get_field('views');
            ?>
            <p><?= $views ? esc_html($views) : '0' ?> <?= esc_html__('Просмотров', 'cloud_miners') ?></p>
        </div>
        <div class="article-data">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/coment.svg'?>" alt="look"/>
            <p><?= get_comments_number(get_the_ID()) ?></p>
        </div>
        <div class="article-data">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/like.svg'?>" alt="look"/>
            <?php
                $likes = get_field('likes');
            ?>
            <p><?= esc_html__('Нравится', 'cloud_miners') ?> (<?= $likes ? esc_html($likes) : '0' ?>)</p>
        </div>
    </div>



    <?= the_content(); ?>




</div>