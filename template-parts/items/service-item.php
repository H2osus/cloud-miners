<?php
    $postId = $serviceId ?? get_the_ID();
    $status = get_field('status', $postId);
    $checkedStatus = $status[0] ?? 0;

    $profitability = get_field('profitability', $postId) ?? 0;
?>
<!--add class favorite to add crown and styles-->
<div class="service-item <?= ($checkedStatus !== 0) ? 'favorite' : '' ?>">
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
        <div>
            <div class="service-item_top__all-rate">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/star.svg'?>" alt="banner mask" crossorigin="main-img"/>
                <?= do_shortcode('[ratemypost-result id="'.$postId.'"]') ?>
            </div>
            <a class="title-link" href="<?= get_the_permalink($postId) ?>">
                <?php
                $trimmedTitle = mb_substr(get_the_title($postId), 0, 29, 'UTF-8');
                if (mb_strlen(get_the_title($postId), 'UTF-8') > 29) {
                    $trimmedTitle .= '...';
                }
                ?>
                <p class="service-item_title"><?= esc_html($trimmedTitle) ?></p>
            </a>
            <p class="service-item_percent"><?= ($profitability !== 0) ? esc_html($profitability['percent'] . '%') : '0%' ?> / <?= ($profitability !== 0) ? esc_html($profitability['term']) : esc_html__('Год', 'cloud_miners') ?></p>
        </div>
    </div>
    <p class="service-item__text"><?= get_the_excerpt($postId); ?></p>
    <div class="service-item__buttons">
        <a href="<?= get_the_permalink($postId) ?>" class="button purple-contain-button"><?= esc_html__('Обзор', 'cloud_miners') ?></a>
        <div class="social-buttons">
            <?php
                $facebook_net = get_field('facebook_net', $postId) ?? 0;
                $instagram_net = get_field('instagram_net', $postId) ?? 0;
                $linkedin_net = get_field('linkedin_net', $postId) ?? 0;
            ?>
            <?php if ($facebook_net !== 0) : ?>
                <a href="<?php echo esc_url($facebook_net); ?>" target="_blank" class="social-button" rel="nofollow">
                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/facebook.svg'?>" alt="Facebook" />
                </a>
            <?php endif; ?>

            <?php if ($instagram_net !== 0) : ?>
                <a href="<?php echo esc_url($instagram_net); ?>" target="_blank" class="social-button" rel="nofollow">
                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/instagram.svg'?>" alt="Instagram" />
                </a>
            <?php endif; ?>

            <?php if ($linkedin_net !== 0) : ?>
                <a href="<?php echo esc_url($linkedin_net); ?>" target="_blank" class="social-button" rel="nofollow">
                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/linkedin.svg'?>" alt="LinkedIn" />
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
