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
                Telegram
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
        <p>Лучшей системой, которая позволит каждому желающему получать криптовалюту без внушительных вложений фиатных средств, является сервис BitMine. По сравнению с другими проектами, этот ресурс выглядит очень перспективно. Развивается он стабильно и платить хорошие деньги всем пользователям. Уровень доходности в этом проекте составляет больше 100%, то есть можно сказать, что за полгода пользователь может увеличить сумму Биткоинов примерно в два раза.</p>
        <div class="service-navigation" id="service-navigation">
            <div class="open-navigation" id="open-navigation">
                <div class="open-navigation__left">
                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/nav.svg'?>" alt="" />
                    <p>Навигация</p>
                </div>
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/arrow-small.svg'?>" alt="" class="open-navigation__arrow"/>
            </div>
            <ul class="list-bordered">
                <li><a href="id1">Обзор сервиса облачного майнинга BitMiner</a></li>
                <li><a href="id2">О проэкте</a></li>
                <li><a href="id3">Видео обзоры</a></li>
                <li><a>Реферальная программа</a></li>
                <li><a>Вывод криптовалюты на кошелек</a></li>
                <li><a>Выводы</a></li>
                <li><a>Отзывы</a></li>
            </ul>
        </div>

        <h3 id="id1">Обзор сервиса облачного майнинга BitMiner</h3>
        <p>Данный проект является довольно востребованным среди пользователей. Он отличается удобным интерфейсом
            и позволяет майнить достаточное количество альткоинов.</p>

        <div class="advantages">
            <h4>Преимущества</h4>
            <ul>
                <li>Возможность открытия депозита. Все заработанные деньги можно в любой момент.</li>
                <li>Статус майнинга. Во вкладке «майнинг» можно увидеть статусы всех вычислений и новые блоки.</li>
                <li>Возможность открытия депозита. Все заработанные деньги можно в любой момент.</li>
                <li>Статус майнинга. Во вкладке «майнинг» можно увидеть статусы всех вычислений и новые блоки.</li>
            </ul>
        </div>

        <div class="flaws">
            <h4>Недостатки</h4>
            <ul>
                <li>Возможность открытия депозита. Все заработанные деньги можно в любой момент.</li>
                <li>Статус майнинга. Во вкладке «майнинг» можно увидеть статусы всех вычислений и новые блоки.</li>
            </ul>
        </div>

        <div class="note">
            <p>Выделенный текст. Fermentum tincidunt sagittis sapien, facilisi congue non fringilla sit. Est proin adipiscing neque, at est tincidunt a sollicitudin. Ipsum quis sapien iaculis blandit. Urna egestas nam quisque at mattis. Aliquet netus ac, ut ultrices pellentesque. Sed ullamcorper.</p>
        </div>

        <h3 id="id3">О проекте</h3>
        <p>Данный проект является довольно востребованным среди пользователей. Он отличается удобным интерфейсом и позволяет майнить достаточное количество альткоинов.</p>
        <h4>Стоит ли инвестировать в проект?</h4>
        <p>Ответ однозначный – нужно. Но делать это рекомендуется пользователям, которые уже используют другие программы для добычи монет. Возможность зарабатывать деньги пассивно выпадает не так часто. Сегодня благодаря возможности заниматься майнингом криптовалюты каждый может зарабатывать высокие суммы денег без каких-либо усилий.</p>
        <p>Возможность зарабатывать деньги пассивно выпадает не так часто. Сегодня благодаря возможности заниматься майнингом криптовалюты:</p>
        <ul>
            <li>Ежедневно количество монет на счету увеличивается;</li>
            <li>Используется дополнительный уровень мощности;</li>
            <li>Возможность открыть депозит с партнером проекта;</li>
            <li>Присутствие реферальной программы.</li>
        </ul>

        <h3  id="id2">Видео обзоры</h3>
        <p>Одним из преимуществ проекта является договоренность с сервисом, который каждому пользователю предоставляется возможность размещения всех денег на депозит под 1% в месяц. Это достаточно хорошая функция, которая позволяет дополнительно увеличить уровень дохода без особых усилий.</p>
        <div class="video-block">
            <div class="video-block__show">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/play.svg'?>" alt="look" class="video-block__show-icon"/>
                <img src="<?= get_template_directory_uri() . '/src/img/images/video.png'?>" alt="Image" class="video-block__image"/>
            </div>
            <div class="video-block__show">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/play.svg'?>" alt="look" class="video-block__show-icon"/>
                <img src="<?= get_template_directory_uri() . '/src/img/images/video.png'?>" alt="Image" class="video-block__image"/>
            </div>
        </div>

        <h3>Реферальная программа</h3>
        <p>На сервисе, конечно, же есть реферальная программа. Как и в многих подобных проектах сюда также можно приглашать неограниченное количество пользователей, что принесет на счет реферала дополнительные средства за каждого нового участника.</p>
        <p>Представим, что человек пригласил одного пользователя и тот прошел успешную регистрацию на сервисе, а затем пополнил свой счет на 5 долларов. Такие действия принесут вам уровень мощности для майнинга в размере 1 Gh/s. Если пользователь пригласил 100 человек и все они зарегистрировались и внесли по 5 долларов, то его уровень мощности майнинга таким образом увеличится на 1001 Gh/s. Хорошо, не правда ли? Приглашая других людей по реферальной программе, вы не только дарите им возможность зарабатывать пассивно без высоких вложений, но и сами получаете весомую прибыль.</p>
        <div class="quote">
            <p>Выделенный коментарий/цитата. Fermentum tincidunt sagittis sapien, facilisi congue non fringilla sit. Est proin adipiscing neque, at est tincidunt a sollicitudin. Ipsum quis sapien iaculis blandit. Urna egestas nam quisque at mattis. Aliquet netus ac, ut ultrices pellentesque. Sed ullamcorper.   <a href="#">Перейти к отзыву</a></p>
            <div>
                <p>Андрей Иванов</p>
                <p>29.04.2023</p>
            </div>
        </div>


        <h4>Работа сервиса</h4>
        <p>Программа BitMine имеет следующие характеристики:</p>
        <ol>
            <li>Возможность открытия депозита. Все заработанные деньги можно в любой момент положить на выгодный депозит, которые предлагает партнер проекта Vault Interest. Не многие сервисы способны похвастаться такими возможностями.</li>
            <li>Уровень цены на единицу мощности майнинга (1 Gh/s) составляет примерно 0,0007 биткоина (это вполне разумный показатель).</li>
            <li>Для начала работы необходимо купить минимум 1 Gh/s. Покупку мощности для майнинга можно проводить неограниченное число раз. В других проектах облачного майнинга такой возможности нет, как правило, устанавливается ограничение.</li>
            <li>Статус майнинга. Во вкладке «майнинг» можно увидеть статусы всех вычислений и новые блоки.</li>
            <li>Покупка асиков. Чтобы приобрести асики, больше не нужно переходить на другие сайты, которые требуют обязательную регистрацию.</li>
        </ol>

        <a href="#">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/notifications.svg'?>" alt="look"/>
            Ссылка на новость, которая относится по тематике
        </a>

        <h3>Вывод криптовалюты на кошелек</h3>
        <p>Одним из преимуществ проекта является договоренность с сервисом, который каждому пользователю предоставляется возможность размещения всех денег на депозит под 1% в месяц. Это достаточно хорошая функция, которая позволяет дополнительно увеличить уровень дохода без особых усилий.</p>
        <div class="img-block">
            <a href="#" class="img-block__show" data-lightbox="roadtrip">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/search-show.svg'?>" alt="look" class="img-block__show-icon"/>
                <img src="<?= get_template_directory_uri() . '/src/img/images/one-service.png'?>" alt="Image" class="img-block__image"/>
            </a>
            <a href="#" class="img-block__show" data-lightbox="roadtrip">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/search-show.svg'?>" alt="look" class="img-block__show-icon"/>
                <img src="<?= get_template_directory_uri() . '/src/img/images/one-service.png'?>" alt="Image" class="img-block__image"/>
            </a>
            <a href="#" class="img-block__show" data-lightbox="roadtrip">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/search-show.svg'?>" alt="look" class="img-block__show-icon"/>
                <img src="<?= get_template_directory_uri() . '/src/img/images/one-service.png'?>" alt="Image" class="img-block__image"/>
            </a>
            <a href="#" class="img-block__show" data-lightbox="roadtrip">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/search-show.svg'?>" alt="look" class="img-block__show-icon"/>
                <img src="<?= get_template_directory_uri() . '/src/img/images/one-service.png'?>" alt="Image" class="img-block__image"/>
            </a>
        </div>

        <h3>Выводы</h3>
        <p>Одним из преимуществ проекта является договоренность с сервисом, который каждому пользователю предоставляется возможность размещения всех денег на депозит под 1% в месяц. Это достаточно хорошая функция, которая позволяет дополнительно увеличить уровень дохода без особых усилий.</p>
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
