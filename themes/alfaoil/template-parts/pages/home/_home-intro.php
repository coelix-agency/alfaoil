<?php 
/*
 * Home: Intro
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;
?>

<?php if( ! get_field( 'home-promo-hide', get_the_ID() ) ) : ?>
<!-- Promo Section -->
<section class="promo-section">

    <!-- container -->
    <div class="container-xl">

        <?php if( !empty( get_field( 'home-promo-image', get_the_ID() ) ) ) : ?>
            <!-- image -->
            <div class="promo-bg">
                <img
						class=""
                        src="<?= get_field( 'home-promo-image', get_the_ID() ) ?>"
                        alt=""
                        title=""
                >
            </div>
            <!-- end image -->
        <?php endif; ?>

        <!-- promo -->
        <div class="promo">

            <!-- sub title -->
            <p class="promo-section-subtitle text-uppercase my-show-animate-up">
                <?= get_field( 'home-promo-subtitle', get_the_ID() ) ?>
            </p>
            <!-- end sub title -->

            <!-- title -->
            <h1 class="promo-section-title my-show-animate-up">
                <?= get_field( 'home-promo-title', get_the_ID() ) ?>
                <img
                        src="<?= get_template_directory_uri() ?>/assets/includes/images/round.png"
                        alt=""
                        title=""
                        class="round-top rotate-round"
                >
            </h1>
            <!-- end title -->

            <?php if( !empty( get_field( 'home-promo-image', get_the_ID() ) ) ) : ?>
                <!-- image -->
                <div class="promo-bg-mobile">
                    <img
                            src="<?= get_field( 'home-promo-image', get_the_ID() ) ?>"
                            alt=""
                            title=""
                    >
                </div>
                <!-- end image -->
            <?php endif; ?>

            <!-- text -->
            <p class="promo-section-text my-show-animate-up">
                <?= get_field( 'home-promo-text', get_the_ID() ) ?>
            </p>
            <!-- end text -->

            <!-- btn -->
            <div class="promo-btn-wrap my-show-animate-up">

                <!-- btn > map -->
                <a class="button button-map text-uppercase" href="#mapTitle">
                    <?= defaultLangText( '?????????? ??????' ) ?>
                </a>
                <!-- end btn > map -->

                <!-- btn > price -->
                <div class="promo-btn-price">
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/includes/images/icons-svg/fueling-icon.svg"
                            alt=""
                            title=""
                    >
                    <div class="promo-btn-text">
                        <div class="promo-btn-header"><?= defaultLangText( '???????? ???? ????????' ) ?>:</div>
                        <div class="promo-btn-title"><?= get_field( 'home-promo-price', get_the_ID() ) ?></div>
                    </div>
                </div>
                <!-- end btn > price -->

            </div>
            <!-- end btn -->

        </div>
        <!-- end promo -->

    </div>
    <!-- end container -->

    <!-- Car -->
    <a href="#services-section" class="go-to-next-section">
        <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
<path d="M16.1333 15.4736L16.8239 22.7243L30.1806 22.7997L30.9492 15.5564C31.0384 14.7261 30.6596 13.9147 29.9655 13.4503L29.7772 13.324C26.0222 10.7922 21.1137 10.7645 17.3304 13.2538L17.1399 13.3787C16.4408 13.8353 16.053 14.6424 16.1333 15.4736ZM17.9655 14.6339L18.156 14.509C21.4354 12.3512 25.6902 12.3752 28.945 14.5698L29.1333 14.6962C29.3636 14.8514 29.4894 15.121 29.4602 15.3972L28.835 21.2917L18.1864 21.2316L17.6278 15.3297C17.603 15.0531 17.7329 14.7855 17.9655 14.6339Z" fill="black"/>
<path d="M17.2251 38.1407L18.6751 38.9568C21.6084 40.62 25.1949 40.6402 28.1468 39.0103L29.6074 38.2105C30.4406 37.7514 30.8961 36.8188 30.7458 35.8794L30.09 31.7916L16.8165 31.7168L16.1131 35.7961C15.9519 36.7339 16.3968 37.6721 17.2251 38.1407ZM17.5918 36.0512L18.0788 33.2243L28.8107 33.2848L29.2666 36.1178C29.3172 36.4313 29.1648 36.7426 28.8864 36.8951L27.4272 37.6949C24.9294 39.0739 21.8946 39.0568 19.4125 37.6497L17.9624 36.8335C17.6868 36.6766 17.5387 36.3641 17.5918 36.0512Z" fill="black"/>
<path d="M29.6998 11.2047L30.9528 10.3795L27.9775 5.86192L26.7245 6.68712L29.6998 11.2047Z" fill="black"/>
<path d="M17.4354 11.1186L20.4628 6.63489L19.2192 5.7952L16.1918 10.279L17.4354 11.1186Z" fill="black"/>
<path d="M9.59364 20.2942C9.79924 20.4351 10.0614 20.4647 10.2931 20.3731L13.4096 19.1469L13.7477 23.4474L12.6011 36.2692C12.2907 39.6263 14.0724 42.8296 17.0882 44.3366L17.6792 44.6347C21.2623 46.4321 25.4786 46.4558 29.0818 44.6991L29.6753 44.4076C32.709 42.9356 34.5281 39.7523 34.2562 36.3914L33.252 23.5574L33.6364 19.258L36.7388 20.5193C37.122 20.6768 37.5603 20.4939 37.7179 20.1107C37.7543 20.0222 37.7734 19.9276 37.7742 19.832L37.7854 17.847C37.7935 16.9257 37.2369 16.0935 36.3824 15.7491L34.0374 14.7959L34.3728 11.0633C34.6884 7.53242 32.7012 4.19805 29.4456 2.7954L26.8743 1.68037C24.8026 0.786458 22.4564 0.773225 20.3748 1.64371L17.791 2.72967C14.5186 4.09447 12.4927 7.40648 12.7679 10.9414L13.0597 14.6775L10.7041 15.6042C9.84635 15.9394 9.28111 16.7653 9.27901 17.6862L9.26782 19.6712C9.26642 19.9201 9.38841 20.1534 9.59364 20.2942ZM34.0425 16.4178L35.8171 17.1397C36.1021 17.2542 36.2878 17.5315 36.2851 17.8386L36.2801 18.7155L34.0347 17.8026L34.0425 16.4178ZM14.0947 36.4059L15.248 23.4559L14.263 10.8216C14.0403 7.93275 15.6969 5.22724 18.3714 4.11254L20.9552 3.02733C22.659 2.31451 24.5796 2.32534 26.2753 3.05734L28.8467 4.17163C31.5074 5.31886 33.1311 8.04437 32.8731 10.9303L31.7517 23.549L32.7596 36.5112C32.9807 39.2571 31.4944 41.8574 29.016 43.0603L28.4217 43.3517C25.2408 44.9033 21.5183 44.8823 18.3552 43.295L17.765 42.9968C15.3001 41.7663 13.8428 39.1494 14.0947 36.4059ZM10.7793 17.6947C10.78 17.3876 10.9689 17.1123 11.2551 17.0012L13.0378 16.2993L13.03 17.6841L10.7744 18.5716L10.7793 17.6947Z" fill="black"/>
</g>
<defs>
<clipPath id="clip0">
<rect width="45" height="45" fill="white" transform="translate(45.8727 46.1266) rotate(-179.677)"/>
</clipPath>
</defs>
</svg>

        <?= defaultLangText( '??????????????' ) ?>
    </a>
    <!-- End Car -->
    <!-- Tel -->
    <a
            href="tel:<?= do_shortcode( '[contacts type="tel"]' ) ?>"
            class="promo-section-phone"
    >
        <img
                src="<?= get_template_directory_uri() ?>/assets/includes/images/icons-svg/phone.svg"
                alt=""
                title=""
                class="svg"
        >
        <span>
            <?= do_shortcode( '[contacts type="tel"]' ) ?>
        </span>
    </a>
    <!-- End Tel -->
</section>
<!-- End Promo Section -->
<?php endif; ?>





