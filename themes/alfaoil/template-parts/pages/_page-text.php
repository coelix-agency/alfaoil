<?php 
/*
 * Page: Text
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;
?>
<!-- Text -->
<section class="text text__single">
    <!-- container -->
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                <!-- text -->
                <div class="text__style">
                    <?= the_content() ?>
                </div>
                <!-- end text -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- End Text -->
<?php
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
