<div class="service-rating">
    <div class="service-rating__title">
        <span><?= esc_html__('Рейтинг Сервисов', 'cloud_miners') ?></span>
        <p><?= esc_html__('Лучшей системой, которая позволит каждому желающему получать криптовалюту без внушительных вложений фиатных средств, является сервис BitMine. По сравнению с другими проектами, этот ресурс выглядит очень перспективно. Развивается он стабильно и платить хорошие деньги всем пользователям.', 'cloud_miners') ?></p>
    </div>
    <div class="select-group__container" id="select-group__container">
        <div class="select-group__mobile" id="open-filter">
            <div>
                <img src="<?= get_template_directory_uri() . '/src/img/images/svg/filter.svg'?>" alt=""/>
                <p><?= esc_html__('Фильтр рейтинга', 'cloud_miners') ?></p>
            </div>

            <img src="<?= get_template_directory_uri() . '/src/img/images/svg/arrow-small.svg'?>" alt="" class="arrow"/>
        </div>
        <div class="select-group" id="select-group">
            <?php echo facetwp_display('facet','services_status');  ?>
            <?php echo facetwp_display('facet','services_dostup');  ?>
            <?php echo facetwp_display('facet','rating');  ?>
            <?php echo facetwp_display('facet','min_sum');  ?>
            <button onclick="FWP.refresh()" class="button-select-approve">Применить</button>
        </div>
    </div>
    <div class="facetwp-template">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            require get_template_directory() . "/template-parts/items/services-long.php";
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No services found.';
    endif;
    ?>


    <?php
//    add_filter('posts_orderby', 'edit_posts_orderby');
//    add_filter('posts_join_paged','edit_posts_join_paged');
//    add_filter( 'posts_groupby', 'edit_posts_groupby' );
//
//    function edit_posts_groupby($groupby) {
//        global $wpdb;
//        $analytics = $wpdb->prefix . "rmp_analytics";
//        $groupby = "$analytics.post";
//        return $groupby;
//    }
//
//    function edit_posts_join_paged($join_paged_statement) {
//        global $wpdb;
//        $analytics = $wpdb->prefix . "rmp_analytics";
//        $join_paged_statement .= "LEFT JOIN $analytics ON $analytics.post = " . $wpdb->prefix . "posts.ID";
//        return $join_paged_statement;
//    }
//
//    function edit_posts_orderby($orderby_statement) {
//        global $wpdb;
//        $analytics = $wpdb->prefix . "rmp_analytics";
//        $orderby_statement = "(SUM($analytics.value)/COUNT($analytics.votes)) DESC";
//        return $orderby_statement;
//    }
//
//    $args = array(
//        'post_type' => 'services',
//        'post_status' => 'publish',
//        'posts_per_page' => 10,
//    );
//
//    $query = new WP_Query($args);
//
////    echo "<br />Records returned: " . $query->found_posts . "<br />";
////    echo "<br />Post Count: " . $query->post_count . "<br />";
//    //echo "Last Error: " . $wpdb->last_error . "<br />";
//    //echo "Last Query: " . $wpdb->last_query . "<br />";
//    ?>
<?php
//    if ($query->have_posts()) :
//        while ($query->have_posts()) :
//            $query->the_post();
//
//            require get_template_directory() . "/template-parts/items/services-long.php";
//
//        endwhile;
//
//    endif;
//    wp_reset_postdata();
    ?>




    </div>
    <?php echo facetwp_display('facet','services_pager');  ?>
</div>