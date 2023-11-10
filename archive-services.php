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
        <div class="service-rating__container container-with-sidebar">
            <?php require get_template_directory() . "/template-parts/static-blocks/service-rating.php"; ?>
            <?php require get_template_directory() . "/template-parts/static-blocks/sidebar.php"; ?>
        </div>
    </div>
    <?php $seo = get_field('services_seo', 'option'); ?>

    <div class="text">
        <div class="container">
            <?= $seo; ?>
        </div>
    </div>

    <div class="mob-sidebar container">
        <?php require get_template_directory() . "/template-parts/static-blocks/sidebar.php"; ?>
    </div>
</main>

<?php get_footer(); ?>
