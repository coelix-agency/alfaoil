<?php 
/*
 * Home: Clients
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;
?>

<?php if( ! get_field( 'home-clients-hide', get_the_ID() ) ) : ?>
    <!-- Section Clients -->
    <section class="partners-section">

        <!-- container -->
        <div class="container-xl">

            <!-- left -->
            <img
                    src="<?= get_template_directory_uri() ?>/assets/includes/images/icons-svg/arrow-left.svg"
                    alt=""
                    title=""
                    class="svg arrow-left"
            >
            <!-- end left -->

            <!-- carousel -->
            <div class="partners-carousel">

                <!-- Title -->
                <div class="choice">
                    <?= get_field( 'home-clients-title', get_the_ID() ) ?>
                </div>
                <!-- End Title -->

                <?php
                global $post;
                $tmp_post = $post;
                $clients = get_posts( array(
                    'numberposts' => -1,
                    'post_type'   => 'post_clients',
                ) );
                if($clients) :
                    ?>
                    <!-- wrapper -->
                    <div class="partners-slider-wrapper">
                        <!-- slider -->
                        <div class="partners-slider">
                            <?php foreach( $clients as $post ) : setup_postdata($post); ?>
                                <!-- slide -->
                                <div class="partners-slider-item">
                                    <?php if( has_post_thumbnail() ) : ?>
                                    <img
                                            src="<?= get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?>"
                                            alt=""
                                            title=""
                                            class="svg"
                                    >
                                    <?php endif; ?>
                                    <p>
                                        <?= the_title() ?>
                                    </p>
                                </div>
                                <!-- end slide -->
                            <?php endforeach; wp_reset_postdata(); ?>
                        </div>
                        <!-- end slider -->
                    </div>
                    <!-- end wrapper -->
                <?php endif; $post = $tmp_post; ?>

            </div>
            <!-- end carousel -->

            <!-- right -->
            <img
                    src="<?= get_template_directory_uri() ?>/assets/includes/images/icons-svg/arrow-right.svg"
                    alt=""
                    title=""
                    class="svg arrow-right"
            >
            <!-- end right -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Section Clients -->
<?php endif; ?>





