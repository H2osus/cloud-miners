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
        <div class="articles__container container-with-sidebar">
            <div>
                <div class="articles-page">
                    <div class="articles-page__titles">
                        <span><?= esc_html__('Статьи', 'cloud_miners') ?></span>
                    </div>
                    <div class="filter">
                        <ul>
                            <?php
                            $archive_link = get_post_type_archive_link('articles');
                            ?>
                            <li class="filter-item filter-active"><a href="<?= esc_attr($archive_link); ?>"><?= esc_html__('Все новости', 'cloud_miners'); ?></a></li>
                            <?php
                            $terms = get_terms(array(
                                'taxonomy' => 'category-articles',
                                'hide_empty' => true,
                            ));

                            if (!empty($terms)) {
                                foreach ($terms as $term) {
                                    echo '<li class="filter-item"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                                }
                            }
                            ?>

                        </ul>
                    </div>


                </div>
               <div class="facetwp-template">
                   <div class="articles-page__content">
                       <?php
                       for ($i = 0; $i < 1; $i++) {
                           if (isset($posts[$i])) {
                               $article_id = $posts[$i]->ID;
                               require get_template_directory() . "/template-parts/items/big-article-item.php";
//                                @@include("../items/big-article-item/big-article-item.html")
                           }
                       }
                       ?>
                       <div class="articles-page__vertical">
                           <?php
                           for ($i = 1; $i < 2; $i++) {
                               if (isset($posts[$i])) {
                                   $article = $posts[$i]->ID;
                                   require get_template_directory() . "/template-parts/items/article-item.php";
//                                    @@include("../items/article-item/article-item.html")
                               }
                           }
                           ?>
                       </div>
                   </div>
                   <div class="articles__container-medium">
                       <?php
                       for ($i = 2; $i < 4; $i++) {
                           if (isset($posts[$i])) {
                               $article = $posts[$i]->ID;
                               require get_template_directory() . "/template-parts/items/article-item.php";
//                            @@include("../blocks/modules/items/article-item/article-item.html")
                           }
                       }
                       ?>

                   </div>

                   <div class="articles__container-min">
                       <?php
                       for ($i = 4; $i < 10; $i++) {
                           if (isset($posts[$i])) {
                               $article = $posts[$i]->ID;
                               require get_template_directory() . "/template-parts/items/horizontal-article-item.php";
//                            @@include("../blocks/modules/items/horizontal-article-item/horizontal-article-item.html")
                           }
                       }
                       ?>
                   </div>

                   <div class="articles__container-medium">
                       <?php
                       for ($i = 10; $i < 12; $i++) {
                           if (isset($posts[$i])) {
                               $article = $posts[$i]->ID;
                               require get_template_directory() . "/template-parts/items/article-item.php";
//                            @@include("../blocks/modules/items/article-item/article-item.html")
                           }
                       }
                       ?>
                   </div>
               </div>
                <div class="articles__container-pagination">
                    <?= facetwp_display('facet','articles_pager_archive'); ?>
                </div>
            </div>
            <div>
                <?php
                require get_template_directory() . "/template-parts/static-blocks/sidebar.php";
                require get_template_directory() . "/template-parts/static-blocks/popular-articles.php";
                ?>
            </div>
        </div>
    </div>

    <?php $seo = get_field('articles_seo', 'option'); ?>

    <div class="text seo-text">
        <div class="container">
            <?= $seo; ?>
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