<?php
/**
 * The footer for our theme
 * @package alfaoil
 */
?>
        </main>
        <!-- END CONTENT-->

            <?php if( ! get_field( 'home-footer-hide', 2 ) ) : ?>
            <?php
            /**
             * footer_parts hook
             *
             * @hooked alfaoil_footer_TagFooterForm - 10
             * @hooked alfaoil_footer_TagFooterOpen - 20
             * @hooked alfaoil_footer_TagFooterInner - 30
             * @hooked alfaoil_footer_TagFooterClose - 100
             *
             */
            do_action('footer_parts');
            ?>
            <?php wp_footer(); ?>
            <?php endif; ?>
    </div>
    <!-- end container -->
</body>
</html>