<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package proacto
 */

get_header('dark');
?>

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

    <div class="one-service__container">
        <div class="container container-with-sidebar">
            <div>
                <?php require get_template_directory() . '/template-parts/static-blocks/one-service.php'?>
                <?php comments_template(); ?>
<!--                @@include("../blocks/modules/comment/comment-title.html")-->
<!--                @@include("../blocks/modules/comment/comment-with-img.html")-->
<!--                @@include("../blocks/modules/comment/comment-steps.html")-->
<!--                @@include("../blocks/modules/comment/comment-one.html")-->
<!--                @@include("../blocks/modules/comment/show-more-comment.html")-->
<!--                @@include("../blocks/modules/comment/comment-authorize.html")-->
<!--                @@include("../blocks/modules/leave-comment/leave-comment.html")-->
            </div>
            <?php require get_template_directory() . '/template-parts/static-blocks/sidebar.php'; ?>
        </div>
    </div>

    <?php require get_template_directory() . '/template-parts/static-blocks/best-services.php'; ?>

    <div class="mob-sidebar container">
        <?php require get_template_directory() . '/template-parts/static-blocks/sidebar.php'; ?>
    </div>
</main>

<?php get_footer(); ?>