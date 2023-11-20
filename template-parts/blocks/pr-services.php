<?php
    $title = get_field('title');
?>
<div class="services" id="services">
    <div class="container">
        <div>
            <h2><?= $title ? esc_html($title) : '' ?></h2>
            <div class="services_content facetwp-template">
                <?php

                $args = array(
                    'post_type'      => 'services',
                    'posts_per_page' => 16,
                    'meta_query'     => array(
                        'relation' => 'OR',
                        array(
                            'key'   => 'status',
                            'value' => 'a:1:{i:0;s:3:"fav";}',
                        ),
                        array(
                            'key'     => 'status',
                            'compare' => 'NOT EXISTS',
                        ),
                    ),
                    'orderby'        => array(
                        'meta_value' => 'DESC',
                        'title'      => 'ASC',
                    ),
                );


                $custom_query = new WP_Query($args);

                if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                        require get_template_directory() . "/template-parts/items/service-item.php";
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo 'No services found.';
                endif;
                ?>
            </div>
            <div class="services_pagination">
                <?php echo facetwp_display('facet','services_');  ?>
            </div>
        </div>
    </div>
</div>