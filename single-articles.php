<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package proacto
 */

get_header();
?>
    <main class="main">
        <?php
        require  get_template_directory() . "/template-parts/modal/modal-bg.php";
        require  get_template_directory() . "/template-parts/modal/modal-add-service.php";
        require  get_template_directory() . "/template-parts/modal/modal-add-complaint.php";
        require  get_template_directory() . "/template-parts/modal/modal-complaint-success.php";
        require  get_template_directory() . "/template-parts/modal/modal-thank-comment-success.php";
        require  get_template_directory() . "/template-parts/modal/modal-thank-service-success.php";
        require  get_template_directory() . "/template-parts/static-blocks/breadcrumbs.php";
        ?>
        <div class="container container-article">
            <div class="container-with-sidebar">
                <div>
                    <?php  require get_template_directory() . "/template-parts/static-blocks/one-article.php";  ?>
                    <div class="container-with-sidebar__author">
                        <?php  require get_template_directory() . "/template-parts/static-blocks/author-block.php";  ?>
                    </div>
                    <div class="sharing__share">
                        <p><?= esc_html__('Поделиться', 'cloud_miners') ?></p>
                        <div class="social-buttons">
                            <?php
                                $links = get_field('sharing', 'option') ?? 0;

                                if ($links && $links !== 0 && !empty($links)) :
                                    foreach ($links['items'] as $item) :
                                        switch ($item):
                                        case 'facebook': ?>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= esc_attr(get_permalink()) ?>" target="_blank" class="social-button" rel=”nofollow”>
                                                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/facebook.svg'?>" alt="facebook" />
                                            </a>
                                           <?php break;
                                           case 'telegram': ?>
                                               <a href="https://t.me/share/url?url=<?= esc_attr(get_permalink())?>" target="_blank" class="social-button" rel=”nofollow”>
                                                   <img src="<?= get_template_directory_uri() . '/src/img/images/svg/telegram-1.svg'?>" alt="telegram" />
                                               </a>
                                               <?php break;
                                            case 'twitter': ?>
                                                <a href="https://twitter.com/intent/tweet?url=<?= esc_attr(get_permalink())?>&text=Отличная статья!" target="_blank" class="social-button" rel=”nofollow”>
                                                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/twitter-1.svg'?>" alt="twitter" />
                                                </a>
                                                <?php break;
                                            case 'gmail': ?>
                                                <a href="mailto:?subject=Новая статья!&body=<?= esc_attr(get_permalink())?>" target="_blank" class="social-button" rel=”nofollow”>
                                                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/gmail-1.svg'?>" alt="gmail" />
                                                </a>
                                                <?php break;
                                            case 'linkedin': ?>
                                                <a href="https://www.linkedin.com/shareArticle?url=<?= esc_attr(get_permalink()) ?>" target="_blank" class="social-button" rel=”nofollow”>
                                                    <img src="<?= get_template_directory_uri() . '/src/img/images/svg/linkedin.svg'?>" alt="linkedin" />
                                                </a>
                                                <?php break;
                                        endswitch;
                                    endforeach;
                                endif;
                            ?>
                        </div>
                    </div>
                    <?php require get_template_directory() . '/template-parts/static-blocks/similar-articles.php'; ?>

                    <?php comments_template(); ?>

<!--                    @@include("../blocks/modules/comment/comment-title.html")-->
<!--                    @@include("../blocks/modules/comment/comment-with-img.html")-->
<!--                    @@include("../blocks/modules/comment/comment-steps.html")-->
<!--                    @@include("../blocks/modules/comment/comment-one.html")-->
<!--                    @@include("../blocks/modules/comment/show-more-comment.html")-->
<!--                    @@include("../blocks/modules/comment/comment-authorize.html")-->
<!--                    @@include("../blocks/modules/leave-comment/leave-comment.html")-->
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
