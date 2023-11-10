<?php
    $authorID = get_post_field( 'post_author', get_the_ID() );
    $niceName = get_the_author_meta( 'nicename', $authorID );
    $telegram = get_field('telegram', 'user_' . $authorID) ?? 0;
    $avatar = get_field('avatar', 'user_' . $authorID) ?? 0;
    $desc = get_the_author_meta('description', $authorID);
    $fName = get_the_author_meta('first_name', $authorID);
    $lName = get_the_author_meta('last_name', $authorID);
?>
<div class="author">
    <a class="author__img" href="<?= get_author_posts_url($authorID, $niceName) ?>">
        <img src="<?= ($avatar !== 0) ? $avatar['url'] : '' ?>" alt="Author"/>
    </a>
    <div>
        <p class="author__aut"><?= esc_html__('Автор', 'cloud_miners') ?></p>
        <a class="author__name" href="<?= get_author_posts_url($authorID, $niceName) ?>"><?= esc_html($lName . ' ' . $fName);?></a>
        <p class="author__descr"><?= esc_html($desc); ?></p>
        <div class="author__button">
            <a target="_blank" href="<?= ($telegram !== 0) ? esc_attr($telegram) : '#' ?>" rel=”nofollow” class="button telegram-button">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/telegram.svg'?>" alt="Author"/>
                Telegram
            </a>
        </div>
    </div>
</div>

