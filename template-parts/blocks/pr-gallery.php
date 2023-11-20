<?php
    $gallery = get_field('images') ?? 0;
?>

<?php if ($gallery && $gallery !== 0) :
    $unicID = uniqid(); ?>
<div class="img-block">
    <?php foreach ($gallery as $image) : ?>
        <a href="<?= esc_attr($image['url']) ?>" class="img-block__show" data-lightbox="gallery-<?= esc_attr($unicID) ?>">
            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/search-show.svg'?>" alt="look" class="img-block__show-icon">
            <img src="<?= esc_attr($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>" class="img-block__image">
        </a>
    <?php endforeach; ?>
</div>
<?php endif; ?>