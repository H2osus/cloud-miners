<?php
$postId = get_the_ID();
$status = get_field('status', $postId);
$checkedStatus = $status[0] ?? 0;

$rating = get_field('rating', $postId) ?? 0;
$count_grade = get_field('count_grade', $postId) ?? 0;

$rating = $rating ?: 0;
$count_grade = $count_grade ?: 0;

$profitability = get_field('profitability', $postId) ?? 0;
?>
<!--add class 'service-long__favorite' to do block with crown-->
<div class="service-item service-long <?= ($checkedStatus !== 0) ? 'favorite' : '' ?>">
    <div class="service-long__info">
        <div class="service-item_top">
            <div class="service-item__image">
                <img src="<?=get_the_post_thumbnail_url($postId)?>" alt="banner mask" crossorigin="main-img"/>
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/crown.svg'?>" alt="crown" class="crown"/>
            </div>
            <div  class="service-item__right">
                <p class="service-item_title"><?= get_the_title($postId); ?></p>
                <div class="service-item_top__all-rate">
                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/star.svg'?>" alt="banner mask" crossorigin="main-img"/>
                    <p class="service-item_top__all-rate_graduate"><?= esc_html($rating) ?></p>
                    <p class="service-item_top__all-rate_count">(<?= esc_html($count_grade) ?> <?= esc_html__('оценок', 'cloud_miners') ?>)</p>
                    <p class="service-item_percent"><?= ($profitability !== 0) ? esc_html($profitability['percent'] . '%') : '0%' ?> / <?= ($profitability !== 0) ? esc_html($profitability['term']) : esc_html__('Год', 'cloud_miners') ?></p>
                </div>
                <p class="service-item__text"><?= get_the_excerpt($postId); ?></p>
            </div>
        </div>
        <p class="service-item__text"><?= get_the_excerpt($postId); ?></p>
    </div>

    <div class="service-long__price">
        <img src="<?= get_template_directory_uri() . '/src/img/images/breadcrumbs.png'?>" alt="banner mask" class="decoration"/>
        <div class="service-long__price-info">
            <div>
                <p class="service-long__p-gray"><?= esc_html__('Доходность', 'cloud_miners'); ?></p>
                <?php $countSum = get_field('count_sum') ?? 0;
                $countSum = $countSum ?: 0; ?>
                <p class="service-long__p-black">$ <?= ($countSum !== 0) ? esc_html($countSum) : '0' ?></p>
            </div>
            <div>
                <p class="service-long__p-gray"><?= esc_html__('Мин.выплата', 'cloud_miners'); ?></p>
                <?php $min_payout = get_field('min_payout') ?? 0;
                $min_payout = $min_payout ?: 0; ?>
                <p class="service-long__p-black">$ <?= ($min_payout !== 0) ? esc_html($min_payout) : '0' ?></p>
            </div>
        </div>
        <a href="<?= the_permalink() ?>" class="button purple-contain-button"><?= esc_html__('Обзор', 'cloud_miners') ?></a>
    </div>
</div>
