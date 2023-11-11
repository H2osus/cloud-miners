<?php
get_header('dark');
$term = get_queried_object();

$id = $term->term_id;
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
                <p>Лучшей системой, которая позволит каждому желающему получать криптовалюту без внушительных вложений фиатных средств, является сервис BitMine. По сравнению с другими проектами, этот ресурс выглядит очень перспективно. Развивается он стабильно и платить хорошие деньги всем пользователям.</p>
                <p>Лучшей системой, которая позволит каждому желающему получать криптовалюту без внушительных вложений фиатных средств, является сервис BitMine. По сравнению с другими проектами, этот ресурс выглядит очень перспективно. Развивается он стабильно и платить хорошие деньги всем пользователям.</p>

                <h3>Реферальная программа обучения</h3>
                <p>На сервисе, конечно, же есть реферальная программа. Как и в многих подобных проектах сюда также можно приглашать неограниченное количество пользователей, что принесет на счет реферала дополнительные средства за каждого нового участника.</p>
                <div class="article-category__three-item">
                    @@include("../items/article-item/article-item.html")
                    @@include("../items/article-item/article-item.html")
                    @@include("../items/article-item/article-item.html")
                </div>

                <h3>О проекте</h3>
                <p>Данный проект является довольно востребованным среди пользователей. Он отличается удобным интерфейсом и позволяет майнить достаточное количество альткоинов.</p>
                <div class="article-category__three-item">
                    @@include("../items/article-item/article-item.html")
                    @@include("../items/article-item/article-item.html")
                    @@include("../items/article-item/article-item.html")
                </div>

                <h3>Реферальная программа обучения</h3>
                <p>На сервисе, конечно, же есть реферальная программа. Как и в многих подобных проектах сюда также можно приглашать неограниченное количество пользователей, что принесет на счет реферала дополнительные средства за каждого нового участника.</p>
                <p>Лучшей системой, которая позволит каждому желающему получать криптовалюту без внушительных вложений фиатных средств, является сервис BitMine. По сравнению с другими проектами, этот ресурс выглядит очень перспективно. Развивается он стабильно и платить хорошие деньги всем пользователям.</p>
                <div class="article-category__three-item">
                    @@include("../items/article-item/article-item.html")
                    @@include("../items/article-item/article-item.html")
                    @@include("../items/article-item/article-item.html")
                    @@include("../items/article-item/article-item.html")
                    @@include("../items/article-item/article-item.html")
                    @@include("../items/article-item/article-item.html")
                </div>
                <p>На сервисе, конечно, же есть реферальная программа. Как и в многих подобных проектах сюда также можно приглашать неограниченное количество пользователей, что принесет на счет реферала дополнительные средства за каждого нового участника.</p>
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
