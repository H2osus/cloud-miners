<?php
$postId = get_the_ID();
$status = get_field('status', $postId);
$checkedStatus = $status[0] ?? 0;

$profitability = get_field('profitability', $postId) ?? 0;
?>
<!--add class 'service-long__favorite' to do block with crown-->
<div class="service-item service-long <?= ($checkedStatus !== 0) ? 'favorite' : '' ?>">
    <div class="service-long__info">
        <div class="service-item_top">
            <div class="service-item__image">
                <?php if(get_the_post_thumbnail_url($postId)): ?>
                    <a href="<?= get_the_permalink($postId) ?>" style="margin-bottom:0;">
                        <img src="<?=get_the_post_thumbnail_url($postId)?>" alt="banner mask" crossorigin="main-img"/>
                    </a>
                <?php else: ?>
                    <a href="<?= get_the_permalink($postId) ?>" style="margin-bottom:0;"></a>
                <?php endif; ?>
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/crown.svg'?>" alt="crown" class="crown"/>
            </div>
            <div  class="service-item__right">
                <a class="title-link" href="<?= get_the_permalink($postId) ?>">
                    <?php
                    $trimmedTitle = mb_substr(get_the_title($postId), 0, 38, 'UTF-8');
                    if (mb_strlen(get_the_title($postId), 'UTF-8') > 38) {
                        $trimmedTitle .= '...';
                    }
                    ?>
                    <p class="service-item_title"><?= esc_html($trimmedTitle) ?></p>
                </a>
                <div class="service-item_top__all-rate">
                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/star.svg'?>" alt="banner mask" crossorigin="main-img"/>
                    <?= do_shortcode('[ratemypost-result id="'.$postId.'"]') ?>
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
