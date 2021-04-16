<?php
/*
* Navigations
*/
if ( ! defined('ABSPATH')) :
	exit();
endif;
// Register our menu.
register_nav_menus( array(
	'header-menu' 				    => esc_html__( 'Header: Основное меню', 'alfaoil' ),
    'footer-menu' 				    => esc_html__( 'Footer: Основное меню', 'alfaoil' ),
));