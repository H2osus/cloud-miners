<?php
get_header('dark');
$term = get_queried_object();

$id = $term->term_id;
$i = 1;

$title_1 = get_field('title_1','category' . '_' . $id) ?? 0;
$text_1 = get_field('text_1','category' . '_' . $id) ?? 0;
$title_2 = get_field('title_2','category' . '_' . $id) ?? 0;
$text_2 = get_field('text_2','category' . '_' . $id) ?? 0;
$title_3 = get_field('title_3','category' . '_' . $id) ?? 0;
$text_3 = get_field('text_3','category' . '_' . $id) ?? 0;
$text_4 = get_field('text_4', 'category' . '_' . $id) ?? 0;

$i = 0;
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
        <div class="article-category  container-with-sidebar">

            <div class="article-category__left">
                <h2> <?= esc_html($term->name) ?> </h2>
                <p><?= esc_html($term->description) ?></p>

                <h3><?= ($title_1 !== 0) ? esc_html($title_1) : '' ?></h3>
                <p><?= ($text_1 !== 0) ? esc_html($text_1) : '' ?></p>
                <div class="article-category__three-item">
                    <?php
                    if (have_posts()) {
                        while (have_posts() && $i < 3) {
                            the_post();
                            $article = get_the_ID();
                            require get_template_directory() . "/template-parts/items/article-item.php";
                            $i++;
                        }
                    }
                    ?>
                </div>


                <h3><?= ($title_2 !== 0) ? esc_html($title_2) : '' ?></h3>
                <p><?= ($text_2  !== 0) ? esc_html($text_2) : '' ?></p>
                <div class="article-category__three-item">
                    <?php
                    if (have_posts()) {
                        while (have_posts() && $i < 6) {
                            the_post();
                            $article = get_the_ID();
                            require get_template_directory() . "/template-parts/items/article-item.php";
                            $i++;
                        }
                    }
                    ?>
                </div>

                <h3><?= ($title_3 !== 0) ? esc_html($title_3) : '' ?></h3>
                <p><?= ($text_3  !== 0) ? esc_html($text_3) : '' ?></p>
                <div class="article-category__three-item">
                    <?php
                    if (have_posts()) {
                        while (have_posts() && $i < 12) {
                            the_post();
                            $article = get_the_ID();
                            require get_template_directory() . "/template-parts/items/article-item.php";
                            $i++;
                        }
                    }
                    ?>
                </div>
                <p><?= ($text_4 !== 0) ? esc_html($text_4) : '' ?></p>
            </div>

            <div>
                <?php
                require get_template_directory() . "/template-parts/static-blocks/sidebar.php";
                require get_template_directory() . "/template-parts/static-blocks/popular-articles.php";
                ?>
            </div>
        </div>
    </div>
    <div class="mob-sidebar container">
        <?php
        require get_template_directory() . "/template-parts/static-blocks/sidebar.php";
        require get_template_directory() . "/template-parts/static-blocks/popular-articles.php";
        ?>
    </div>
</main>

<?php get_footer(); ?>
