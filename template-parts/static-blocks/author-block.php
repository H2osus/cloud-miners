<?php
    $authorID = get_post_field( 'post_author', get_the_ID() );
    $niceName = get_the_author_meta( 'nicename', $authorID );
    $telegram = get_field('telegram', 'user_' . $authorID) ?? 0;
    $avatar = get_field('avatar', 'user_' . $authorID) ?? 0;
    $desc = get_the_author_meta('description', $authorID);
    $fName = get_the_author_meta('first_name', $authorID);
    $lName = get_the_author_meta('last_name', $authorID);

    $url = get_author_posts_url($authorID, $niceName);

    if (is_author()) {
        $url = '';
    }
?>
<div class="author">
    <?php if($avatar && $avatar !== 0): ?>
        <a class="author__img" href="<?= esc_attr($url) ?><?= (!is_archive()) ? esc_html('?b='.get_the_ID().'') : '' ?>">
            <img src="<?= ($avatar !== 0) ? $avatar['url'] : '' ?>" alt="Author"/>
        </a>
    <?php else: ?>
        <a class="author__img" href="<?= esc_attr($url) ?><?= (!is_archive()) ? esc_html('?b='.get_the_ID().'') : '' ?>">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/user-avatar.svg'?>" alt="Author"/>
        </a>
    <?php endif; ?>
    <div>
        <p class="author__aut"><?= esc_html__('Автор', 'cloud_miners') ?></p>
        <?php if(!is_author()): ?>
        <div class="author-titles">
            <a class="author__name" href="<?= esc_attr($url) ?><?= (!is_archive()) ? esc_html('?b='.get_the_ID().'') : '' ?>"><?= esc_html($lName . ' ' . $fName);?></a>
            <a target="_blank" href="<?= ($telegram !== 0) ? esc_attr($telegram) : '#' ?>" rel=”nofollow” class="button telegram-button-1">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/telegram-1.svg'?>" alt="Author"/>
            </a>
        </div>
        <?php else: ?>
            <a class="author__name" href="<?= esc_attr($url) ?><?= (!is_archive()) ? esc_html('?b='.get_the_ID().'') : '' ?>"><?= esc_html($lName . ' ' . $fName);?></a>
        <?php endif; ?>
        <p class="author__descr"><?= esc_html($desc); ?></p>
        <?php if(is_author()): ?>
        <div class="author__button">
            <a target="_blank" href="<?= ($telegram !== 0) ? esc_attr($telegram) : '#' ?>" rel=”nofollow” class="button telegram-button">
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/telegram.svg'?>" alt="Author"/>
                <?= esc_html__('Telegram', 'cloud_miners') ?>
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>

