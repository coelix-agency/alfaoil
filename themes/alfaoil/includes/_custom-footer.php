<?php
/*
 * Footer
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;
/*
 * @alfaoil_footer_TagFooterOpen
*/
add_action( 'footer_parts', 'alfaoil_footer_TagFooterOpen', 20 );
function alfaoil_footer_TagFooterOpen() {
	?>
  	<!-- FOOTER -->
  	<footer class="footer">
	<?php
};
/*
 * @alfaoil_footer_TagFooterInner
*/
add_action( 'footer_parts', 'alfaoil_footer_TagFooterInner', 30 );
function alfaoil_footer_TagFooterInner() {
	?>

    <div class="container-m">
        <?php
        $logo_url = get_theme_mod( 'logo_footer' );
        ?>
        
        <div class="footer-top">

            <!-- Contacts -->
            <div class="footer-contacts">

                <?php if ( is_active_sidebar( 'footer-menu' ) ) : ?>
                    <!-- Menu -->
                    <div class="footer-contacts-item footer-site-map">
                        <?php dynamic_sidebar( 'footer-menu' ); ?>
                    </div>
                    <!-- End Menu -->
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-phone' ) ) : ?>
                    <!-- Phone List -->
                    <div class="footer-contacts-item phones-wrapper">
                        <?php dynamic_sidebar( 'footer-phone' ); ?>
                    </div>
                    <!-- End Phone List -->
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-address' ) ) : ?>
                    <!-- Address -->
                    <div class="footer-contacts-item footer-address">
                        <?php dynamic_sidebar( 'footer-address' ); ?>
                    </div>
                    <!-- End Address -->
                <?php endif; ?>

            </div>
            <!-- End Contacts -->

            <!-- Form Wrapper -->
            <div class="connection-form-wrap">

                <!-- Connection -->
                <div class="connection-form">
                    <!-- Form -->
                    <?= do_shortcode( '[contact-form-7 id="5" title="" html_class=""]' ) ?>
                    <!-- End Form -->

                    <!-- Social -->
                    <div class="text-uppercase social">
                        <?= do_shortcode( '[contacts type="socials" view="list"]' ) ?>
                    </div>
                    <!-- End Social -->

                    <?php if ( is_active_sidebar( 'footer-developer' ) ) : ?>
                        <!-- Developer -->
                        <?php dynamic_sidebar( 'footer-developer' ); ?>
                        <!-- End Developer -->
                    <?php endif; ?>
                </div>
                <!-- End Connection -->

            </div>
            <!-- End Form Wrapper -->

        </div>

        <div class="footer-bottom">

            <?php if ( is_active_sidebar( 'footer-seo' ) ) : ?>
                <?php dynamic_sidebar( 'footer-seo' ); ?>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-developer' ) ) : ?>
                <?php dynamic_sidebar( 'footer-developer' ); ?>
            <?php endif; ?>

        </div>

    </div>

	<?php
};
/*
 * @alfaoil_footer_TagFooterClose
*/
add_action( 'footer_parts', 'alfaoil_footer_TagFooterClose', 100 );
function alfaoil_footer_TagFooterClose() {
	?>
  	</footer>
  	<!-- END FOOTER -->
	<?php
};