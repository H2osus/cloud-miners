<div class="service-rating">
    <div class="service-rating__title">
        <h2><?= esc_html__('Рейтинг Сервисов', 'cloud_miners') ?></h2>
        <p><?= esc_html__('Лучшей системой, которая позволит каждому желающему получать криптовалюту без внушительных вложений фиатных средств, является сервис BitMine. По сравнению с другими проектами, этот ресурс выглядит очень перспективно. Развивается он стабильно и платить хорошие деньги всем пользователям.', 'cloud_miners') ?></p>
    </div>
    <div class="select-group__container" id="select-group__container">
        <div class="select-group__mobile" id="open-filter">
            <div>
                <img src="img/images/svg/filter.svg" alt=""/>
                <p>Фильтр рейтинга</p>
            </div>

            <img src="img/images/svg/arrow-small.svg" alt="" class="arrow"/>
        </div>
        <div class="select-group" id="select-group">
            <?php echo facetwp_display('facet','services_status');  ?>
            <?php echo facetwp_display('facet','services_dostup');  ?>
            <?php echo facetwp_display('facet','rating');  ?>
            <?php echo facetwp_display('facet','min_sum');  ?>
            <button class="button-select-approve">Применить</button>
        </div>
    </div>

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
    <?php echo facetwp_display('facet','services_pager');  ?>
</div>