<div class="one-service">
    <div class="one-service__title">
        <div class="one-service__title-left">
            <h2><?= get_the_title() ?></h2>
            <div class="social-buttons">
                <?php
                $facebook_net = get_field('facebook_net', get_the_ID()) ?? 0;
                $instagram_net = get_field('instagram_net', get_the_ID()) ?? 0;
                $linkedin_net = get_field('linkedin_net', get_the_ID()) ?? 0;
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
        <div class="one-service__title-red" id="left-complaint">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/alert.svg'?>" alt="alert" />
            <p><?= esc_html__('Оставить жалобу', 'cloud_miners') ?></p>
        </div>
    </div>

    <div class="one-service__info">
        <div class="one-service__info-img">
            <?php echo the_post_thumbnail() ?>
        </div>

        <div class="one-service__info-date-price mob-none">
            <div class="one-service__info-date-price__item">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/profitability.svg'?>" alt="profitability" />
                <p class="one-service__info-date-price__item-title"><?= esc_html__('Доходность', 'cloud_miners'); ?></p>
                <?php $countSum = get_field('count_sum') ?? 0; ?>
                <p class="one-service__info-date-price__item-value">$ <?= ($countSum !== 0) ? esc_html($countSum) : '0' ?></p>
            </div>
            <div class="one-service__info-date-price__item">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/calendar-2.svg'?>" alt="calendar" />
                <p class="one-service__info-date-price__item-title"><?= esc_html__('Дата старта', 'cloud_miners'); ?></p>
                <?php $start_date = get_field('start_date') ?? 0; ?>
                <p class="one-service__info-date-price__item-value"><?= ($start_date !== 0) ? esc_html($start_date) : '0' ?></p>
            </div>
            <div class="one-service__info-date-price__item">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/wallet.svg'?>" alt="wallet" />
                <p class="one-service__info-date-price__item-title"><?= esc_html__('Мин.выплата', 'cloud_miners'); ?></p>
                <?php $min_payout = get_field('min_payout') ?? 0; ?>
                <p class="one-service__info-date-price__item-value">$ <?= ($min_payout !== 0) ? esc_html($min_payout) : '0' ?></p>
            </div>
        </div>

        <div class="one-service__info-graduate">
            <?php $rating = get_field('rating', get_the_ID()) ?? 0; ?>
            <p class="one-service__info-graduate--total"><?= ($rating !== 0) ? esc_html($rating) : '0' ?></p>
            <div class="one-service__info-graduate--stars">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/star.svg'?>" alt="star" />
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/star.svg'?>" alt="star" />
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/star.svg'?>" alt="star" />
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/star-grey.svg'?>" alt="star" />
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/star-grey.svg'?>" alt="star" />
            </div>
            <?php
                $countGrade = get_field('count_grade', get_the_ID()) ?? 0;
                $wordChar = get_field('word_char', get_the_ID()) ?? '';
            ?>
            <p class="one-service__info-graduate--text"><?= esc_html($wordChar); ?> <span>(<?= esc_html($countGrade) ?> <?= esc_html__('оценок', 'cloud_miners') ?>)</span></p>
            <a target="_blank" href="#" rel=”nofollow” class="button telegram-button">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/telegram.svg'?>" alt="Author"/>
                <?= esc_html__('Telegram', 'cloud_miners') ?>
            </a>
        </div>
    </div>

    <div class="one-service__info-date-price desk-none">
        <div class="one-service__info-date-price__item">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/profitability.svg'?>" alt="profitability" />
            <p class="one-service__info-date-price__item-title"><?= esc_html__('Доходность', 'cloud_miners'); ?></p>
            <p class="one-service__info-date-price__item-value">$ <?= ($countSum !== 0) ? esc_html($countSum) : '0' ?></p>
        </div>
        <div class="one-service__info-date-price__item">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/calendar-2.svg'?>" alt="calendar" />
            <p class="one-service__info-date-price__item-title"><?= esc_html__('Дата старта', 'cloud_miners'); ?></p>
            <p class="one-service__info-date-price__item-value"><?= ($start_date !== 0) ? esc_html($start_date) : '0' ?></p>
        </div>
        <div class="one-service__info-date-price__item">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/wallet.svg'?>" alt="wallet" />
            <p class="one-service__info-date-price__item-title"><?= esc_html__('Мин.выплата', 'cloud_miners'); ?></p>
            <p class="one-service__info-date-price__item-value">$ <?= ($min_payout !== 0) ? esc_html($min_payout) : '0' ?></p>
        </div>
    </div>

    <div class="one-service__container-mob">
        <div class="social-buttons">
            <a href="/" target="_blank" class="social-button" rel=”nofollow”>
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/facebook.svg'?>" alt="facebook" />
            </a>
            <a href="/" target="_blank" class="social-button" rel=”nofollow”>
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/instagram.svg'?>" alt="facebook" />
            </a>
            <a href="/" target="_blank" class="social-button" rel=”nofollow”>
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/linkedin.svg'?>" alt="facebook" />
            </a>
        </div>
        <div class="one-service__title-red-mob" id="left-complaint-mob">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/alert.svg'?>" alt="alert" />
            <p><?= esc_html__('Оставить жалобу', 'cloud_miners') ?></p>
        </div>
    </div>

    <div class="one-service__content">
        <?= the_content() ?>
        <div class="sharing">
            <div class="sharing__share">
                <p>Поделиться</p>
                <div class="social-buttons">
                    <a href="/" target="_blank" class="social-button" rel=”nofollow”>
                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/facebook.svg'?>" alt="facebook" />
                    </a>
                    <a href="/" target="_blank" class="social-button" rel=”nofollow”>
                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/instagram.svg'?>" alt="facebook" />
                    </a>
                    <a href="/" target="_blank" class="social-button" rel=”nofollow”>
                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/instagram.svg'?>" alt="facebook" />
                    </a>
                </div>
            </div>
            <a href="#" target="_blank" rel=”nofollow” class="button telegram-button"> <img src="<?= get_template_directory_uri() . '/src/img/images/svg/telegram.svg'?>" alt="facebook" /> Telegram</a>
        </div>
    </div>
</div>