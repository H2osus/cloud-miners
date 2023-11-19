<?php get_header('dark'); ?>

<main class="main">
    <?php
    require  get_template_directory() . "/template-parts/modal/modal-bg.php";
    require  get_template_directory() . "/template-parts/modal/modal-add-service.php";
    require  get_template_directory() . "/template-parts/modal/modal-add-complaint.php";
    require  get_template_directory() . "/template-parts/modal/modal-complaint-success.php";
    require  get_template_directory() . "/template-parts/modal/modal-thank-comment-success.php";
    require  get_template_directory() . "/template-parts/modal/modal-thank-service-success.php";
    require get_template_directory() . "/template-parts/static-blocks/breadcrumbs.php";
    ?>
    <div class="container">
        <div class="author__container container-with-sidebar">
            <div>
                <?php  require get_template_directory() . "/template-parts/static-blocks/author-block.php";  ?>
                <h3><?= facetwp_display('counts'); ?></h3>
                <p><?= esc_html__('Данный проект является довольно востребованным среди пользователей. Он отличается удобным интерфейсом
                    и позволяет майнить достаточное количество альткоинов.', 'cloud_miners') ?></p>
                <div class="facetwp-template">
                    <?php if (have_posts() ) : ?>
                        <?php while (have_posts() ) : the_post(); ?>
                            <?php require get_template_directory() . "/template-parts/items/author-article.php"; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="author__button">
                    <?= facetwp_display('facet','articles_pager_author'); ?>
                </div>
            </div>
            <?php require get_template_directory() . "/template-parts/static-blocks/sidebar.php"; ?>
        </div>
    </div>
    <div class="mob-sidebar container">
        <?php require get_template_directory() . "/template-parts/static-blocks/sidebar.php"; ?>
    </div>
</main>

<?php get_footer(); ?>