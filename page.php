<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cloud_miners
 */

get_header();
require  get_template_directory() . "/template-parts/modal/modal-bg.php";
require  get_template_directory() . "/template-parts/modal/modal-add-service.php";
require  get_template_directory() . "/template-parts/modal/modal-add-complaint.php";
require  get_template_directory() . "/template-parts/modal/modal-complaint-success.php";
require  get_template_directory() . "/template-parts/modal/modal-thank-comment-success.php";
require  get_template_directory() . "/template-parts/modal/modal-thank-service-success.php";
?>

<main class="page-template">
    <?php the_content(); ?>
</main>

<?php get_footer(); ?>
