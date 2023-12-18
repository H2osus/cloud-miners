<?php //if (!is_author()): ?>
<div class="breadcrumbs">
    <img src="<?= get_template_directory_uri() . '/src/img/images/breadcrumbs.png'?>" alt="banner mask" class="decoration"/>
    <div class="container">
        <?php if (function_exists('yoast_breadcrumb')) :
            yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumbs-content">', '</p>');
        endif; ?>
    </div>
</div>

<?php //endif; ?>

<?php //if (is_author() && isset($_GET['b'])):
//    $postType = 'articles';
//    $term = wp_get_post_terms($_GET['b'], 'category-articles'); ?>
<!--    <div class="breadcrumbs">-->
<!--        <img src="--><?php //= get_template_directory_uri() . '/src/img/images/breadcrumbs.png'?><!--" alt="banner mask" class="decoration"/>-->
<!--        <div class="container">-->
<!--            <p id="breadcrumbs" class="breadcrumbs-content">-->
<!--                <span>-->
<!--                    <span>-->
<!--                        <a href="--><?php //= home_url('/') ?><!--">--><?php //= esc_html__('Главная', 'cloud_miners') ?><!--</a>-->
<!--                    </span>-->
<!--                    /-->
<!--                    <span>-->
<!--                        <a href="--><?php //= get_post_type_archive_link($postType) ?><!--">--><?php //= esc_html__('Статьи','cloud_miners') ?><!--</a>-->
<!--                    </span>-->
<!--                    /-->
<!--                    --><?php //if($term): ?>
<!--                    <span>-->
<!--                        <a href="--><?php //= get_term_link($term[0]) ?><!--">--><?php //= esc_html($term[0]->name)?><!--</a>-->
<!--                    </span>-->
<!--                    /-->
<!--                    --><?php //endif; ?>
<!--                    <span>-->
<!--                        <a href="--><?php //= get_permalink($_GET['b']) ?><!--">--><?php //= get_the_title($_GET['b'])?><!--</a>-->
<!--                    </span>-->
<!--                    /-->
<!--                    <span class="breadcrumb_last" aria-current="page">admin</span>-->
<!--                </span>-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<?php //endif; ?>


