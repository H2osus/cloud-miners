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

                <h2><?= esc_html__( 'Результат поиска', 'cloud_miners' ) ?> <b>“<?= get_search_query() ?>”</b></h2>

                <?php
                // Переменная для отслеживания типа поста
                $post_type = '';

                /* Start the Loop */
                while ( have_posts() ) : the_post();

                    // Определите тип поста текущей записи
                    $current_post_type = get_post_type();

                    // Если тип поста изменился, выведите заголовок
                    if ($current_post_type != $post_type) {
                        $post_type = $current_post_type;

                        if ($post_type == 'services') {
                            // Включите файл services-long.php
                            require get_template_directory() . "/template-parts/items/services-long.php";
                        } elseif ($post_type == 'articles') {
                            echo '<h4>'.esc_html__('Статьи', 'cloud_miners').'</h4>';
                            // Включите файл author-article.php
                            require get_template_directory() . "/template-parts/items/author-article.php";
                        }
                    }

                endwhile;
                ?>
            </div>
            <?php require get_template_directory() . "/template-parts/static-blocks/sidebar.php"; ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>
