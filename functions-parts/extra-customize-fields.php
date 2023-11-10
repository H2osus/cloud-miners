<?php 
    function second_logo_customizer_options($wp_customize){
     
        $wp_customize->add_setting( 'second_logo', array(
            'sanitize_callback' => 'esc_url_raw'
        ));
     
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'diwp_logo_control', array(
            'label' => 'Текстовий Логотип',
            'priority' => 9,
            'settings' => 'second_logo',
            'button_labels' => array(
                'select' => 'Вибрати Логотип',
                'remove' => 'Уснути Логотип',
                'change' => 'Замінити Логотип',
                )
        )));
     
    }
     
    add_action( 'customize_register', 'second_logo_customizer_options' );
?>