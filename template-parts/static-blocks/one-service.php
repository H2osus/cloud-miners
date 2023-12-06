<div class="one-service">
    <div class="one-service__title">
        <div class="one-service__title-left">
            <span><?= get_the_title() ?></span>
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
                    <a href="<?php echo esc_url($linkedin_net); ?>" target="_blank" class="social-button" rel="nofollow">
                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/linkedin.svg'?>" alt="LinkedIn" />
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="one-service__title-red" id="left-complaint">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.43799 12.2027C8.43799 11.8922 8.68999 11.6357 9.00049 11.6357C9.31099 11.6357 9.56299 11.884 9.56299 12.1945V12.2027C9.56299 12.5132 9.31099 12.7652 9.00049 12.7652C8.68999 12.7652 8.43799 12.5132 8.43799 12.2027Z" fill="#F07171"/>
                <path d="M3.597 15.3135H14.4585C15.3188 15.2685 15.9803 14.5357 15.936 13.6755C15.9263 13.5015 15.8888 13.3297 15.8228 13.1692L10.365 3.61723C9.948 2.86348 8.99925 2.59048 8.2455 3.00823C7.989 3.14923 7.7775 3.36073 7.63575 3.61723L2.178 13.1692C1.854 13.9672 2.238 14.8762 3.03525 15.201C3.19725 15.2662 3.36825 15.3037 3.54225 15.3135" stroke="#F07171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.99268 10.0467V7.72168" stroke="#F07171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

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
<?php $char = get_field('word_char') ?? ''; ?>
        <div class="one-service__info-graduate">
            <?= do_shortcode('[ratemypost-result id="'.get_the_ID().'"]') ?>
            <style>
                .one-service__info-graduate .rmp-results-widget__vote-count::before {
                 content: '<?= esc_attr($char) ?>';
                    color: #151515;
                    font-size: 10px;
                    font-family: 'Commissioner', sans-serif;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 16px;
                }
            </style>
            <?php $tLink = get_field('telegram_net', get_the_ID()) ?? 0; ?>
            <a target="_blank" href="<?= ($tLink && $tLink !== 0) ? $tLink : '#' ?>" rel=”nofollow” class="button telegram-button">
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
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.43799 12.2027C8.43799 11.8922 8.68999 11.6357 9.00049 11.6357C9.31099 11.6357 9.56299 11.884 9.56299 12.1945V12.2027C9.56299 12.5132 9.31099 12.7652 9.00049 12.7652C8.68999 12.7652 8.43799 12.5132 8.43799 12.2027Z" fill="#F07171"/>
                <path d="M3.597 15.3135H14.4585C15.3188 15.2685 15.9803 14.5357 15.936 13.6755C15.9263 13.5015 15.8888 13.3297 15.8228 13.1692L10.365 3.61723C9.948 2.86348 8.99925 2.59048 8.2455 3.00823C7.989 3.14923 7.7775 3.36073 7.63575 3.61723L2.178 13.1692C1.854 13.9672 2.238 14.8762 3.03525 15.201C3.19725 15.2662 3.36825 15.3037 3.54225 15.3135" stroke="#F07171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.99268 10.0467V7.72168" stroke="#F07171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p><?= esc_html__('Оставить жалобу', 'cloud_miners') ?></p>
        </div>
    </div>

    <div class="one-service__content">
        <?= the_content() ?>
        <div class="sharing">
            <div class="sharing__share">
                <p><?= esc_html__('Поделиться', 'cloud_miners') ?></p>
                <div class="social-buttons">
                    <?php
                    $links = get_field('sharing', 'option') ?? 0;

                    if ($links && $links !== 0 && !empty($links)) :
                        foreach ($links['items'] as $item) :
                            switch ($item):
                                case 'facebook': ?>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= esc_attr(get_permalink()) ?>" target="_blank" class="social-button" rel=”nofollow”>
                                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/facebook.svg'?>" alt="facebook" />
                                    </a>
                                    <?php break;
                                case 'telegram': ?>
                                    <a href="https://t.me/share/url?url=<?= esc_attr(get_permalink())?>" target="_blank" class="social-button" rel=”nofollow”>
                                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/telegram-1.svg'?>" alt="telegram" />
                                    </a>
                                    <?php break;
                                case 'twitter': ?>
                                    <a href="https://twitter.com/intent/tweet?url=<?= esc_attr(get_permalink())?>&text=Отличная статья!" target="_blank" class="social-button" rel=”nofollow”>
                                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/twitter-1.svg'?>" alt="twitter" />
                                    </a>
                                    <?php break;
                                case 'gmail': ?>
                                    <a href="mailto:?subject=Новая статья!&body=<?= esc_attr(get_permalink())?>" target="_blank" class="social-button" rel=”nofollow”>
                                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/gmail-1.svg'?>" alt="gmail" />
                                    </a>
                                    <?php break;
                                case 'linkedin': ?>
                                    <a href="https://www.linkedin.com/shareArticle?url=<?= esc_attr(get_permalink()) ?>" target="_blank" class="social-button" rel=”nofollow”>
                                        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/linkedin.svg'?>" alt="linkedin" />
                                    </a>
                                    <?php break;
                            endswitch;
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
            <a href="https://t.me/share/url?url=<?= esc_attr(get_permalink()) ?>" target="_blank" rel=”nofollow” class="button telegram-button"> <img src="<?= get_template_directory_uri() . '/src/img/images/svg/telegram.svg'?>" alt="facebook" /> Telegram</a>
        </div>
    </div>
</div>
