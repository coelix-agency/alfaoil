<?php
/**
 * The header for our theme
 * @package alfaoil
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?= get_template_directory_uri() ?>/images/favicon.ico"/>
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri() ?>/images/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri() ?>/images/favicon-16x16.png" sizes="16x16"/>
</head>
<body>
    <?php
    /**
     * header_parts hook
     *
     * @hooked alfaoil_header_TagHeaderOpen - 10
     * @hooked alfaoil_header_TagHeaderInner - 20
     * @hooked alfaoil_header_TagHeaderClose - 30
     *
     */
    do_action('header_parts');
    ?>
    <!-- CONTENT -->
    <main class="page <?php if(is_home() || is_front_page()) : echo 'page-main-container'; elseif (is_page('map')) : echo 'page-map-container'; elseif (is_page('contacts')) : echo 'page-contacts-container'; elseif (is_page('about')) : echo 'about-company-container'; endif; ?>">
