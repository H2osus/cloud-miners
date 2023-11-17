<?php
    wp_enqueue_script( 'video-scripts', get_template_directory_uri() . '/src/js/helper/video.js', '', 1.0, true );
?>

<?php
    $videos = get_field('videos') ?? 0;
?>

<?php if($videos && $videos !== 0): ?>
<div class="video-block">
    <?php foreach ($videos as $video): ?>
    <div class="video-block__show">
        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/play.svg'?>" alt="look" class="video-block__show-icon">
        <img src="<?= esc_attr($video['preiview']['url']) ?>" alt="<?= esc_attr($video['preiview']['alt']) ?>" class="video-block__image">
        <?= $video['video'] ?>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>