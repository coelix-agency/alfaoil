<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alfaoil
 */

get_header();
/*
 * Page Headpanel
 */
get_template_part( 'template-parts/partials/partial', 'breadcrumbs' );

/*
 * Page Headpanel
 */
get_template_part( 'template-parts/partials/partial', 'pagehead', ['post_type' => get_post_type()] );
?>
    <!-- Section -->
    <section>
        <!-- container -->
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">
                    <?php
                    $class = '';
                    if(get_post_type() == 'post_news') {
                        $class = 'news__list';
                    }
                    ?>
                    <?php if ( have_posts() ) : ?>
                        <?php
                        echo '<ul class="' . $class . '">';
                        while ( have_posts() ) : the_post();
                            echo '<li>';
                            get_template_part( 'template-parts/content', get_post_type() . '_list' );
                            echo '</li>';
                        endwhile;
                        echo '</ul>';
                        the_posts_navigation();
                    else:
                        get_template_part( 'template-parts/content', 'none' );
                    endif;
                    ?>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- End Section -->
<?php
get_footer();
