<?php
/*
* Js and Css
*/
if ( ! defined('ABSPATH')) :
	exit();
endif;
/**
 * Register jQuery
 */
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', false, '3.5.1', false );
	wp_enqueue_script( 'jquery' );
}
/** 
 * CSS files
 */
add_action( 'wp_enqueue_scripts', 'alfaoil_styles' );
function alfaoil_styles() {
    wp_enqueue_style( 'bundle-alfaoil', get_template_directory_uri() . '/assets/css/bundle.css', array(), '1.0.1' );
    wp_enqueue_style( 'fonts-alfaoil', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&amp;subset=cyrillic', array(), '' );
    wp_enqueue_style( 'slick-alfaoil', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1' );
	//wp_enqueue_style( 'slick-theme-alfaoil', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1' );
    //wp_enqueue_style( 'slick-theme-alfaoil', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css', array(), '1.9.0' );
    wp_enqueue_style( 'customize-alfaoil', get_template_directory_uri() . '/assets/css/customize.css', array(), '1.0.1' );
	 wp_enqueue_style( 'animate-alfaoil', '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
}
/**
 * JS files
 */
add_action( 'wp_enqueue_scripts', 'alfaoil_scripts' );
function alfaoil_scripts() {
    wp_enqueue_script( 'bundle-alfaoil', get_template_directory_uri() . '/assets/js/min/bundle.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slick-alfaoil', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );
    wp_enqueue_script( 'slider-alfaoil', get_template_directory_uri() . '/assets/js/src/common/slider.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'mobileMenu-alfaoil', get_template_directory_uri() . '/assets/js/src/common/mobileMenu.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'promo-alfaoil', get_template_directory_uri() . '/assets/js/src/common/middle-promo-scroll.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'map-alfaoil', get_template_directory_uri() . '/assets/js/src/common/map.js', array('jquery'), '1.0.0', true );
    //wp_enqueue_script( 'phone-alfaoil', get_template_directory_uri() . '/assets/js/src/common/phone.js', array('jquery'), '1.0.0', true );
}

/*
 * Remove CSS
 */
function alfaoil_dequeue_style() {
    wp_dequeue_style( 'wp-block-library' );
    /**
     * WP Multilang
     */
    wp_dequeue_style( 'wpm-main' );
    /*
     * Otcher
     */
    wp_dequeue_style( 'jquery-selectBox' );
    wp_dequeue_style( 'mfcf7_zl_button_style' );
    /*
     * Contact Form
     */
    wp_dequeue_style( 'contact-form-7' );
	/*
	 * JS
	 */
    wp_deregister_script( 'wp-embed' );
    wp_dequeue_script( 'wp-embed-js' );
	wp_dequeue_script( 'wc_price_slider' );
	wp_dequeue_script( 'wc-chosen' );
	wp_dequeue_script( 'prettyPhoto' );
	wp_dequeue_script( 'prettyPhoto-init' );
	wp_dequeue_script( 'jquery-blockui' );
	wp_dequeue_script( 'jquery-placeholder' );
	wp_dequeue_script( 'fancybox' );
	wp_dequeue_script( 'jqueryui' );
	wp_dequeue_script( 'flexslider' );
	wp_dequeue_script( 'zoom' );
	wp_dequeue_script( 'photoswipe' );
    wp_dequeue_style( 'dashicons' );
    wp_dequeue_style( 'tawcvs-frontend' );
    wp_dequeue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'alfaoil_dequeue_style' );