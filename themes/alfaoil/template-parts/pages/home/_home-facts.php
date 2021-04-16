<?php 
/*
 * Home: Facts
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;
?>

<?php if( ! get_field( 'home-facts-hide', get_the_ID() ) ) : ?>
    <!-- Section Facts -->
    <section class="facts-section">

        <!-- Container -->
        <div class="container-m">

            <!-- Title -->
            <div class="facts-title text-uppercase">
                <?= get_field( 'home-facts-title', get_the_ID() ) ?>
            </div>
            <!-- End Title -->

            <div class="facts-wrapper">

                <?php if( have_rows( 'home-facts-list', get_the_ID() ) ) : ?>
                    <!-- Left -->
                    <div class="facts-left">
                        <!-- list -->
                        <ul class="facts-list">
                            <?php while ( have_rows( 'home-facts-list', get_the_ID() ) ) : the_row(); ?>
                                <li class="animate__faster">
                                    <h2>
                                        <div class="round-dot"></div>
                                        <?= get_sub_field('home-facts-list-title') ?>
                                    </h2>
                                    <p>
                                        <?= get_sub_field('home-facts-list-text') ?>
                                    </p>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                        <!-- end list -->
                    </div>
                    <!-- End Left -->
                <?php endif; ?>

                <!-- Right -->
                <div class="facts-right">

                    <!-- Image -->
                    <div class="facts-right-top">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/includes/images/icons-svg/logo-clear.svg"
                                alt=""
                                title=""
                                class="svg logo-clear"
                        >
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/includes/images/round.png"
                                alt=""
                                title=""
                                class="rotate-round round-middle"
                        >

                        <?php if( !empty( get_field( 'home-facts-image', get_the_ID() ) ) ) : ?>
                        <img
                                src="<?= kama_thumb_src('w=378 &h=410 &q=75 &crop=false &attach_id='.get_field( 'home-facts-image', get_the_ID() )) ?>"
                                alt="refueling"
                                class="refueling"
                        >
                        <?php endif; ?>
                    </div>
                    <!-- End Image -->

                    <!-- Text -->
                    <div class="facts-right-content animate__faster">
                        <?= get_field( 'home-facts-text', get_the_ID() ) ?>
                    </div>
                    <!-- End Text -->

                </div>
                <!-- End Right -->

                <a
                        href="<?= the_permalink(9) ?>"
                        class="button button-facts text-uppercase animate__faster"
                >
                    <?= defaultLangText( 'Подробнее о компании' ) ?>
                </a>

            </div>
        </div>
        <!-- End Container -->

    </section>
    <!-- End Facts Section -->
<?php endif; ?>





