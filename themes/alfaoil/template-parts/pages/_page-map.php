<?php 
/*
 * Page: Map
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;
?>
<!-- container -->
<div class="container-xl">

    <!-- title -->
    <div class="map-title-container">
        <?= get_template_part( 'template-parts/partials/_partial', 'pagehead' ) ?>
    </div>
    <!-- end title -->

</div>
<!-- end container -->
<!-- container -->
<div class="map-container">
    <?= get_field( 'home-map-map', 2 ) ?>
</div>
<!-- End container -->
