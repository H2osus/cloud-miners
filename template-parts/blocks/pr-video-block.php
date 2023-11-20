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
        <?php
            if($video['preiview']) : ?>
                <img src="<?= esc_attr($video['preiview']['url']) ?>" alt="<?= esc_attr($video['preiview']['alt']) ?>" class="video-block__image">
            <?php else :
                preg_match('/src="(.+?)"/', $video['video'], $matches_url );
                $src = $matches_url[1];
                preg_match('/embed(.*?)?feature/', $src, $matches_id );
                $id = $matches_id[1];
                $id = str_replace( str_split( '?/' ), '', $id );
                ?>
        <img class="video-block__image" src="http://img.youtube.com/vi/<?php echo $id; ?>/maxresdefault.jpg">
            <?php endif; ?>

        <img src="<?= get_template_directory_uri() . '/src/img/images/svg/play.svg'?>" alt="look" class="video-block__show-icon">

        <?= $video['video'] ?>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>