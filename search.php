<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cloud_miners
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
    <div class="container">
        <div class="container-with-sidebar">
            <div class="search-content">

                <span><?= esc_html__( 'Результат поиска', 'cloud_miners' ) ?> <b>“<?= get_search_query() ?>”</b></span>

                <?php
                // Переменная для отслеживания типа поста
                $post_type = '';
                /* Start the Loop */
                echo '<h4>'.esc_html__('Сервисы', 'cloud_miners').'</h4>';
                $have_services = false;

                while ( have_posts() ) : the_post();
                        $current_post_type = get_post_type();
                        $post_type = $current_post_type;
                        if ($post_type == 'services') {
                            require get_template_directory() . "/template-parts/items/services-long.php";
                            $have_services = true;
                        }
                endwhile;

                if (!$have_services) {
                    echo '<p>'.esc_html__('Поиск не дал результатов', 'cloud_miners').'</p>';
                }

                /* Start the Loop */
                echo '<h4>'.esc_html__('Статьи', 'cloud_miners').'</h4>';
                $have_articles = false;

                while (have_posts()) : the_post();
                    $current_post_type = get_post_type();
                    $post_type = $current_post_type;

                    if ($post_type == 'articles') {
                        require get_template_directory() . "/template-parts/items/author-article.php";
                        $have_articles = true;
                    }

                endwhile;

                if (!$have_articles) {
                    echo '<p>'.esc_html__('Поиск не дал результатов', 'cloud_miners').'</p>';
                }
                ?>
            </div>
            <?php require get_template_directory() . "/template-parts/static-blocks/sidebar.php"; ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>
