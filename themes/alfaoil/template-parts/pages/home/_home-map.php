<?php 
/*
 * Home: Map
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;
?>

<?php if( ! get_field( 'home-facts-hide', get_the_ID() ) ) : ?>
    <!-- Section Map -->
    <section class="map-section">

        <!-- container -->
        <div class="container-xl">

            <!-- Title -->
            <h2 class="map-title text-uppercase" id="mapTitle">
                <?= get_field( 'home-map-title', get_the_ID() ) ?>
            </h2>
            <!-- End Title -->

            <!-- Map -->
            <div class="map-container">
                <?= get_field( 'home-map-map', get_the_ID() ) ?>
            </div>
            <!-- End Map -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Section Map -->
<?php endif; ?>





