<?php 
/*
 * Page: Contacts
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;
?>
<!-- container -->
<div class="container-xl">

    <!-- title -->
    <section class="contacts-top-section">
        <!-- section -->
        <div class="contacts-top-section-container animate__animated animate__fadeInUp animate__faster">
            <?= get_template_part( 'template-parts/partials/_partial', 'pagehead' ) ?>
        </div>
        <!-- end section -->
    </section>
    <!-- end title -->

</div>
<!-- end container -->
<!-- container -->
<div class="container-xl">

    <!-- section -->
    <section class="contacts-bottom-section">

        <!-- Left -->
        <div class="contacts-bottom-section-left animate__animated animate__fadeInUp animate__faster">
            <!-- h -->
            <h3>
                <?= defaultLangText( 'Как с нами связаться' ) ?>:
            </h3>
            <!-- end h -->
            <!-- contact -->
            <div class="contact-section">

                <!-- list -->
                <div class="phones">
                    <?= do_shortcode( '[contacts type="phonelist" view="list"]' ) ?>
                </div>
                <!-- end list -->

                <!-- list -->
                <ul class="phones">
                    <li class="phones-link">
                        <a href="mailto:<?= do_shortcode( '[contacts type="email"]' ) ?>">
                            <img
                                    src="<?= get_template_directory_uri() ?>/assets/includes/images/icons-svg/letter.svg"
                                    alt=""
                                    title=""
                                    class="svg letter"
                            >
                            <?= do_shortcode( '[contacts type="email"]' ) ?>
                        </a>
                    </li>
                    <li class="phones-adress">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/includes/images/icons-svg/mark.svg"
                                alt=""
                                title=""
                                class="svg mark"
                        >
                            <?= do_shortcode( '[contacts type="address"]' ) ?>

                    </li>
                </ul>
                <!-- end list -->

            </div>
            <!-- end contact -->
        </div>
        <!-- End Left -->

        <!-- Right -->
        <div class="contacts-bottom-section-right animate__animated animate__fadeInUp">

            <!-- h -->
            <h3>
                <?= defaultLangText( 'Обратная связь' ) ?>
            </h3>
            <!-- end h -->

            <!-- text -->
            <p>
                <?= defaultLangText( 'Оставьте свои контактные данные и мы свяжемся с вами для уточнения деталей' ) ?>
            </p>
            <!-- end text -->

            <!-- form -->
            <?= do_shortcode( '[contact-form-7 id="96" title="" html_class="contacts-form"]' ) ?>
            <!-- end form -->

        </div>
        <!-- End Right -->

    </section>
    <!-- end section -->

</div>
<!-- End container -->
