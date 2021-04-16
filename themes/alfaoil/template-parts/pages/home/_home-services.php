<?php 
/*
 * Home: Services
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;
?>

<?php if( ! get_field( 'home-services-hide', get_the_ID() ) ) : ?>
    <!-- Services Section -->
    <section class="services-section" id="services-section">

        <!-- Container -->
        <div class="container-m">

            <!-- Title -->
            <div class="services-section-title text-uppercase">
                <?= get_field( 'home-services-title', get_the_ID() ) ?>
            </div>
            <!-- End Title -->

            <?php
            $list = get_field( 'home-services-list', get_the_ID() );
            $list_arr = array_column($list, 'home-services-list-service');
            if($list_arr) :
                global $post;
                $tmp_post = $post;
                $list = get_posts( array(
                        'post_type' => 'post_services',
                        'include'       => $list_arr,
                ) );
                if($list) :
                    ?>

                    <!-- Wrapper -->
                    <div class="service-wrapper animate__faster">
                        <?php foreach( $list as $post ) : setup_postdata($post); ?>
                            <!-- article -->
                            <article class="service service-left">
                                <?php if( has_post_thumbnail( get_the_ID() ) ) : ?>
                                    <img
                                            src="<?= get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?>"
                                            alt="<?= get_the_title() ?>"
                                            title="<?= get_the_title() ?>"
                                            class="svg"
                                    >
                                <?php endif; ?>
                                <!-- text -->
                                <div class="service-text">
                                    <h2 class="service-title">
                                        <?= get_the_title() ?>
                                    </h2>
                                    <div class="service-subtitle">
                                        <?= the_content() ?>
                                    </div>
                                </div>
                                <!-- end text -->
                            </article>
                            <!-- end article -->
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                    <!-- End Wrapper -->
                <?php endif; $post = $tmp_post; ?>
            <?php endif; ?>

            <!-- Title -->
            <div class="services-section-bottom-title text-uppercase animate__faster">
                <?= get_field( 'home-services-subtitle', get_the_ID() ) ?>
            </div>
            <!-- End Title -->

        </div>
        <!-- End Container -->

    </section>
    <!-- End Services Section -->
<?php endif; ?>





