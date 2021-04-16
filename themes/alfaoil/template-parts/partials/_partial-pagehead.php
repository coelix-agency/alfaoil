<?php
/*
 * Partial: Page Head
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;
?>
<!-- Breadcrumb -->
<p class="page-address-over-title">
    <?= rank_math_the_breadcrumbs() ?>
</p>
<!-- End Breadcrumb -->

<!-- Title -->
<h2 class="text-uppercase page-map-title <?= ($args['class']) ? $args['class'] : '' ?>">
    <?= the_title() ?>
</h2>
<!-- End Title -->

<?php if( has_excerpt( get_the_ID() ) ) : ?>
    <!-- Excerpt -->
    <p class="under-title"><?= get_the_excerpt() ?></p>
    <!-- End Excerpt -->
<?php endif; ?>