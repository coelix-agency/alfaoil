<?php
/*
* Theme Settings
*/
if ( ! defined('ABSPATH')) :
    exit();
endif;
/*-- Theme Settings --*/
if ( ! function_exists( 'alfaoil_setup' ) ) :
    function alfaoil_setup() {
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );

        add_theme_support( 'post-thumbnails' );

        remove_image_size( 'thumbnail-100x100' );
        remove_image_size( 'thumbnail-150x150' );
        remove_image_size( 'thumbnail-300x300' );
    }
    alfaoil_setup();
endif;

/**
 * REMOVE EMOJI ICONS
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
/**
 * Enable shortcodes in text widgets
 */
add_filter('widget_text','do_shortcode');
/*
 * Max Width Wb Block
 */
function titan_custom_admin_css() {
    echo '<style type="text/css">
    .wp-block { max-width: 1300px; }
    </style>';
}
add_action('admin_head', 'titan_custom_admin_css');
/*
 * Enable Except Text All Page
 */
add_post_type_support( 'page', array('excerpt') );
/*
 * SVG Upload
 *
 */
add_filter('upload_mimes', 'my_myme_types', 1, 1);
function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
    return $mime_types;
}
/*
 * ACF Google API KEY
 */
function alfaoil_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyCSqQeiH6f0iSnHMZ0-WMAcZKkS3dKjEqQ');
}
add_action('acf/init', 'alfaoil_acf_init');
/*
 * Page 404
 *
*/
function alfaoil_404_template_redirect(){
    if( is_404() && $_SERVER["REQUEST_URI"] != '/404/' || 'draft' == get_post_status() ) {
        wp_redirect( home_url( '/404/' ) );
        exit();
    }
}
add_action( 'template_redirect', 'alfaoil_404_template_redirect' );


/**
 * Filter to change breadcrumb args.
 *
 * @param  array $args Breadcrumb args.
 * @return array $args.
 */
add_filter( 'rank_math/frontend/breadcrumb/args', function( $args ) {

    $args = array(
        'delimiter'   => '',
        'wrap_before' => '',
        'wrap_after'  => '',
        'before'      => '',
        'after'       => ''
    );
    return $args;
});
/**
 * Filter to change breadcrumb html.
 *
 * @param  html  $html Breadcrumb html.
 * @param  array $crumbs Breadcrumb items
 * @param  class $class Breadcrumb class
 * @return html  $html.
 */
add_filter( 'rank_math/frontend/breadcrumb/html', function( $html, $crumbs, $class ) {
    $html = str_replace('<span class="separator"> - </span>', ' > ', $html);
    return $html;
}, 10, 3);


/**
 * Change the Home URL in breadcrumbs according to the current language in Polylang
 *
 * @param array       $crumbs The crumbs array.
 * @param Breadcrumbs $this   Current breadcrumb object.
 */
add_filter( 'rank_math/frontend/breadcrumb/items', function( $crumbs, $class ) {

    $currentLang = wpm_get_language();
    $home_link = esc_url(wpm_translate_url(home_url(), $currentLang));
    $crumbs[0][1] = $home_link;

    if($currentLang == 'ru') $crumbs[0][0] = 'Главная';
    if($currentLang == 'ua') $crumbs[0][0] = 'Головна';
    if($currentLang == 'en') $crumbs[0][0] = 'Home';

    return $crumbs;
}, 10, 2);




/**
 * Shortcodes Contacts
 */
function alfaoil_shortcodes_contacts( $arr ){
    $html = null;

    /**
     *
     */
    if(array_key_exists('view', $arr)) :
        if($arr['view'] == 'list') :
            if( have_rows( 'contacts-' . $arr['type'], 'options' ) ) :
                $html .= '<ul>';
                while ( have_rows( 'contacts-'.$arr['type'], 'options' ) ) : the_row();
                    $html .= '<li>';
                    $html .= '<a href="' . get_sub_field('contacts-' . $arr['type'] . '-url') . '" target="_blank">';
                    $html .= '<img src="' . get_sub_field('contacts-' . $arr['type'] . '-icon') . '" alt="" class="svg">';
                    $html .= '<span>' . get_sub_field('contacts-' . $arr['type'] . '-value') . '</span>';
                    $html .= '</a>';
                    $html .= '</li>';
                endwhile;
                $html .= '</ul>';
            endif;
            return $html;
        endif;
    endif;


    return get_field('contacts-'.$arr['type'], 'options');
}
add_shortcode('contacts', 'alfaoil_shortcodes_contacts');


/**
 * Assign the tag for our shortcode and identify the function that will run.
 */
add_shortcode( 'template_directory_uri', 'alfaoil_template_directory_uri' );
function alfaoil_template_directory_uri() {
    return get_template_directory_uri();
}


/*
 * ADMIN PANEL: Hide Menu
 */
add_action('admin_menu', 'alfaoil_remove_admin_menu_links', 999);
function alfaoil_remove_admin_menu_links() {
    $user = wp_get_current_user();
    //  echo '<pre>' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';
    //echo '<pre>' . print_r( $GLOBALS['submenu'], TRUE) . '</pre>';

    if ( 'remstroyod@gmail.com' != $user->user_email ) {
        remove_menu_page('cptui_main_menu');
        remove_menu_page('edit.php?post_type=acf-options-page');
        remove_menu_page('edit.php?post_type=acf-field-group');
        remove_menu_page('edit.php?post_type=shop_order');

        remove_menu_page('admin.php?page=wc-settings&tab=checkout&section=liqpay-webplus');

        remove_menu_page('wc-admin&path=/analytics/revenue');
        remove_menu_page('wpcf7');

        remove_menu_page('options-general.php');
        remove_menu_page('edit-comments.php');
        remove_menu_page('rank-math');

        remove_menu_page('smush');
        remove_menu_page('aiowpsec');
        remove_menu_page('yith_plugin_panel');
        remove_menu_page('plugins.php');
        remove_menu_page('tinvwl');
        remove_menu_page('wpfront-user-role-editor-all-roles');

        remove_submenu_page('woocommerce', 'checkout_form_designer');
        remove_submenu_page('woocommerce', 'wt-woocommerce-related-products');

        remove_submenu_page('users.php', 'wpfront-user-role-editor-assign-roles');
        remove_submenu_page('edit.php?post_type=product', 'wt-woocommerce-related-products');

    }
}

/**
 * Disable Auto Update Plugins
 */
if( is_admin() ){
    remove_action( 'admin_init', '_maybe_update_core' );
    remove_action( 'admin_init', '_maybe_update_plugins' );
    remove_action( 'admin_init', '_maybe_update_themes' );
    remove_action( 'load-plugins.php', 'wp_update_plugins' );
    remove_action( 'load-themes.php', 'wp_update_themes' );

    add_filter( 'pre_site_transient_browser_'. md5( $_SERVER['HTTP_USER_AGENT'] ), '__return_true' );
}



/*
function id_WPSE_114111() {
    echo "<pre>";
    var_dump(get_current_screen());
    echo "</pre>";
}

add_action( 'admin_notices', 'id_WPSE_114111' );*/
