<?php
/**
 * alfaoil Theme Customizer
 *
 * @package alfaoil
 */

/**
 * Customizer
 */
add_action('customize_register', function($wp_customize){
    $wp_customize->add_section(
        'my_parameters',
        array(
            'title' => 'Логотипы',
            'description' => 'Загрузить логотип',
            'priority' => 11,
        )
    );


    $wp_customize->add_setting('logo_header');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_header',
            array(
                'label' => 'Логотип: Header',
                'section' => 'my_parameters',
                'settings' => 'logo_header'
            )
        )
    );

    $wp_customize->add_setting('logo_footer');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_footer',
            array(
                'label' => 'Логотип: Footer',
                'section' => 'my_parameters',
                'settings' => 'logo_footer'
            )
        )
    );

});
