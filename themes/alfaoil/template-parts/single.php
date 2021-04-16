<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alfaoil
 */

get_header();
/*
 * Page Headpanel
 */
get_template_part( 'template-parts/partials/partial', 'breadcrumbs' );

/*
 * Page Headpanel
 */

while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/partials/partial', 'pagehead', array('post_type' => 'single', 'title' => get_the_title()) );
    get_template_part( 'template-parts/content', get_post_type() . '_single' );
endwhile;

/*
 * Home: Partners
 */
get_template_part('template-parts/pages/home/home', 'partners');

/*
 * News Slider
 */
get_template_part('template-parts/partials/partial', 'slider-news');

/*
 * Form Conversion
 */
get_template_part('template-parts/forms/form', 'conversion');


get_footer();
