<?php 
/*
 * Page: About
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;
?>
<!-- container -->
<div class="container-xl">

    <!-- title -->
    <section class="about-company-top-section">
        <!-- section -->
        <div class="about-company-title-container my-show-animate-up">
            <?= get_template_part( 'template-parts/partials/_partial', 'pagehead', array('class' => 'page-about-company-title') ) ?>
        </div>
        <!-- end section -->
    </section>
    <!-- end title -->

</div>
<!-- end container -->

<?= the_content() ?>