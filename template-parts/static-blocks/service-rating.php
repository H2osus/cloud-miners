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
        <div class="hidden-sort">
            <!-- ?_rs=1 -->
            <?php echo facetwp_display('facet','rs'); ?>
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

    </div>
    <?php echo facetwp_display('facet','services_pager');  ?>
</div>
