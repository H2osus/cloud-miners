<?php
    $postId = $serviceId ?? get_the_ID();
    $status = get_field('status', $postId);
    $checkedStatus = $status[0] ?? 0;

    $rating = get_field('rating', $postId) ?? 0;
    $count_grade = get_field('count_grade', $postId) ?? 0;
    $profitability = get_field('profitability', $postId) ?? 0;
?>
<!--add class favorite to add crown and styles-->
<div class="service-item <?= ($checkedStatus !== 0) ? 'favorite' : '' ?>">
    <div class="service-item_top">
        <div class="service-item__image">
            <img src="<?=get_the_post_thumbnail_url($postId)?>" alt="banner mask" crossorigin="main-img"/>
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/crown.svg'?>" alt="crown" class="crown"/>
        </div>
        <div>
            <div class="service-item_top__all-rate">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/star.svg'?>" alt="banner mask" crossorigin="main-img"/>
                <p class="service-item_top__all-rate_graduate"><?= esc_html($rating) ?></p>
                <p class="service-item_top__all-rate_count">(<?= esc_html($count_grade) ?> <?= esc_html__('оценок', 'cloud_miners') ?>)</p>
            </div>
            <p class="service-item_title"><?= get_the_title($postId); ?></p>
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
                <a href="<?php echo esc_url($linkedin_net); ?>" target="_blank" class="social-button">
                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/linkedin.svg'?>" alt="LinkedIn" />
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
