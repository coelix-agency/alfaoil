<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alfaoil
 */

if(is_page('map')) :
    /*
     * Page: Map
     */
    get_template_part( 'template-parts/pages/_page', 'map' );
elseif(is_page('contacts')) :
    /*
     * Page: Contacts
     */
    get_template_part( 'template-parts/pages/_page', 'contacts' );
elseif(is_page('about')) :
    /*
     * Page: About
     */
    get_template_part( 'template-parts/pages/_page', 'about' );
else:
    /*
     * Page: Text
     */
    get_template_part( 'template-parts/pages/_page', 'text' );
endif;
?>
