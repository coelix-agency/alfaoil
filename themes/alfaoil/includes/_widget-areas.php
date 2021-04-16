<?php
/*
* Widgets
*/
if ( ! defined('ABSPATH')) :
	exit();
endif;
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
add_action( 'widgets_init', 'alfaoil_widgets_init' );
function alfaoil_widgets_init() {

    /*
     * Footer: Menu
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Footer: Карта сайта', 'alfaoil' ),
        'id'            => 'footer-menu',
        'class'         => '',
        'description'   => esc_html__( 'Add widgets here.', 'alfaoil' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    /*
     * Footer: Phone
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Footer: Телефоны', 'alfaoil' ),
        'id'            => 'footer-phone',
        'class'         => '',
        'description'   => esc_html__( 'Add widgets here.', 'alfaoil' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    /*
     * Footer: Address
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Footer: Адрес', 'alfaoil' ),
        'id'            => 'footer-address',
        'class'         => '',
        'description'   => esc_html__( 'Add widgets here.', 'alfaoil' ),
        'before_widget' => '<div class="footer-address-wrap">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    /*
     * Footer: Seo Text
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Footer: SEO Text', 'alfaoil' ),
        'id'            => 'footer-seo',
        'class'         => '',
        'description'   => esc_html__( 'Add widgets here.', 'alfaoil' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    /*
     * Footer: Web Developer
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Footer: Web Developer', 'alfaoil' ),
        'id'            => 'footer-developer',
        'class'         => '',
        'description'   => esc_html__( 'Add widgets here.', 'alfaoil' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}

