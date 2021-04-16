<?php
if ( ! defined('ABSPATH')) :
	exit();
endif;
/*
 * @alfaoil_header_TagHeaderOpen
*/
add_action( 'header_parts', 'alfaoil_header_TagHeaderOpen', 10 );
function alfaoil_header_TagHeaderOpen() {
	?>
  	<!-- HEADER -->
    <header class="header">
	<?php
};
/*
 * @alfaoil_header_TagHeaderInner
*/
add_action( 'header_parts', 'alfaoil_header_TagHeaderInner', 20 );
function alfaoil_header_TagHeaderInner() {
	?>
    <!-- container -->
    <div class="container-xl">

        <!-- logo -->
        <?php
        $logo_url = get_theme_mod( 'logo_header' );
        ?>
        <a
                href="<?= home_url() ?>"
                class="logo-wrapper my-show-animate-down"
        >
            <img
                    src="<?= $logo_url ?>"
                    alt="<?= get_bloginfo('name') ?>"
                    title="<?= get_bloginfo('name') ?>"
                    class="svg logo"
            >
        </a>
        <!-- end logo -->

        <!-- nav -->
        <?php
        /*
         * Args Nav Menu
         */
        $args = array(
            'theme_location'    => 'header-menu',
            'container'         => 'nav',
            'container_class'   => 'nav text-uppercase',
            'menu_class'        => 'my-show-animate-down',
            'items_wrap'        => '<ul class="%2$s">%3$s</ul>'
        );
        wp_nav_menu($args);
        ?>
        <!-- end nav -->

        <!-- Navigation -->
        <div class="user-navigation my-show-animate-down">

            <!-- Auth -->
            <a
                    class="privat"
                    title="<?= defaultLangText( 'Личный кабинет' ) ?>"
            >
                <svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.75 5.15385C13.75 7.44795 11.8472 9.30769 9.5 9.30769C7.15279 9.30769 5.25 7.44795 5.25 5.15385C5.25 2.85974 7.15279 1 9.5 1C11.8472 1 13.75 2.85974 13.75 5.15385Z" fill="#FC8B00"/>
                    <path d="M9.5 20.5C13.71 20.5 16.1355 19.4386 17.2606 18.7555C17.7871 18.4358 18.0466 17.8473 17.9931 17.2375C17.9055 16.24 17.4957 15.244 17.1403 14.5434C16.825 13.9217 16.157 13.5769 15.4471 13.5769H3.55288C2.84296 13.5769 2.17496 13.9217 1.85967 14.5434C1.50431 15.244 1.09449 16.24 1.0069 17.2375C0.953353 17.8473 1.21285 18.4358 1.73935 18.7555C2.86451 19.4386 5.29004 20.5 9.5 20.5Z" fill="#FC8B00"/>
                    <path d="M17.2606 18.7555L17.7796 19.6103L17.2606 18.7555ZM1.73935 18.7555L2.25834 17.9007H2.25834L1.73935 18.7555ZM1.0069 17.2375L0.0107317 17.15L1.0069 17.2375ZM17.9931 17.2375L16.9969 17.325V17.325L17.9931 17.2375ZM17.1403 14.5434L18.0322 14.0911L18.0322 14.091L17.1403 14.5434ZM1.85967 14.5434L2.75152 14.9957L1.85967 14.5434ZM12.75 5.15385C12.75 6.87422 11.3166 8.30769 9.5 8.30769V10.3077C12.3778 10.3077 14.75 8.02169 14.75 5.15385H12.75ZM9.5 8.30769C7.68338 8.30769 6.25 6.87422 6.25 5.15385H4.25C4.25 8.02169 6.6222 10.3077 9.5 10.3077V8.30769ZM6.25 5.15385C6.25 3.43347 7.68338 2 9.5 2V0C6.6222 0 4.25 2.28601 4.25 5.15385H6.25ZM9.5 2C11.3166 2 12.75 3.43347 12.75 5.15385H14.75C14.75 2.28601 12.3778 0 9.5 0V2ZM16.7417 17.9007C15.7777 18.486 13.5326 19.5 9.5 19.5V21.5C13.8873 21.5 16.4933 20.3913 17.7796 19.6103L16.7417 17.9007ZM9.5 19.5C5.46743 19.5 3.22231 18.486 2.25834 17.9007L1.22037 19.6103C2.50672 20.3913 5.11265 21.5 9.5 21.5V19.5ZM0.0107317 17.15C-0.0720938 18.0932 0.330782 19.0702 1.22037 19.6103L2.25834 17.9007C2.09492 17.8015 1.9788 17.6013 2.00306 17.325L0.0107317 17.15ZM16.9969 17.325C17.0212 17.6013 16.9051 17.8015 16.7417 17.9007L17.7796 19.6103C18.6692 19.0702 19.0721 18.0932 18.9893 17.15L16.9969 17.325ZM16.2485 14.9957C16.5817 15.6527 16.9258 16.5147 16.9969 17.325L18.9893 17.15C18.8852 15.9654 18.4097 14.8354 18.0322 14.0911L16.2485 14.9957ZM2.00306 17.325C2.07422 16.5147 2.41831 15.6527 2.75152 14.9957L0.967812 14.091C0.590305 14.8354 0.114766 15.9654 0.0107317 17.15L2.00306 17.325ZM15.4471 12.5769H3.55288V14.5769H15.4471V12.5769ZM2.75152 14.9957C2.86654 14.7689 3.14872 14.5769 3.55288 14.5769V12.5769C2.5372 12.5769 1.48338 13.0745 0.967812 14.091L2.75152 14.9957ZM18.0322 14.091C17.5166 13.0745 16.4628 12.5769 15.4471 12.5769V14.5769C15.8513 14.5769 16.1335 14.7689 16.2485 14.9957L18.0322 14.091Z" fill="#FC8B00"/>
                </svg>
                <span class="text-uppercase">
                    <?= defaultLangText( 'Личный кабинет' ) ?>
                </span>
            </a>
            <!-- End Auth -->

            <!-- Social -->
            <div class="text-uppercase social">
                <?= do_shortcode( '[contacts type="socials" view="list"]' ) ?>
            </div>
            <!-- End Social -->

            <!-- Lang -->
            <?php
            $translations   = wpm_get_languages();
            $currentLang    = wpm_get_language();
            ?>
            <div class="lang text-uppercase">
                <a href="#">
                    <?= $currentLang ?>
                </a>
                <img
                        src="<?= get_template_directory_uri() ?>/assets/includes/images/icons-svg/lang-arrow.svg"
                        alt=""
                        title=""
                        class="svg lang-arrow"
                >
                <ul>
                    <?php foreach ($translations as $code => $translation) : ?>
                    <li class="<?= ($translation['locale'] == $currentLang) ? 'lang_active' : '' ?>">
                        <a href="<?= esc_url(wpm_translate_current_url($code)) ?>">
                            <?= $translation['locale'] ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- End Lang -->

        </div>
        <!-- End Navigation -->

        <!-- Mobile Menu -->
        <div class="burger" id="open-mobile-menu">
            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="20" height="2" fill="#FC8B00"/>
                <rect y="7" width="20" height="2" fill="#FC8B00"/>
                <rect y="14" width="20" height="2" fill="#FC8B00"/>
            </svg>
        </div>
        <!-- End Mobile Menu -->

        <!-- Mobile Menu Wrapper -->
        <nav class="nav-mobile-menu-wrap" id="nav-mobile-menu-wrap">

            <!-- nav -->
            <div class="nav-mobile-menu">
                <!-- nav > top -->
                <div class="nav-mobile-menu-top">

                    <!-- Auth -->
                    <a class="privat text-uppercase">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/includes/images/icons-svg/user.svg"
                                alt=""
                                title=""
                                class="svg user-logo"
                        >
                        <?= defaultLangText( 'Личный кабинет' ) ?>
                    </a>
                    <!-- End Auth -->

                    <!-- exit -->
                    <div id="close-mobile-menu" class="exit">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/includes/images/icons-svg/exit.svg"
                                alt=""
                                title=""
                                class="svg"
                        >
                    </div>
                    <!-- end exit -->

                </div>
                <!-- end nav > top -->
                <!-- nav > list -->
                <?php
                /*
                 * Args Nav Menu
                 */
                $args = array(
                    'theme_location'    => 'header-menu',
                    'container'         => '',
                    'container_class'   => '',
                    'menu_class'        => 'nav-mobile-menu-list',
                    'items_wrap'        => '<ul class="%2$s">%3$s</ul>'
                );
                wp_nav_menu($args);
                ?>
                <!-- end nav > list -->

                <!-- title -->
                <h2 class="text-uppercase">
                    <?= defaultLangText( 'Контакты' ) ?>
                </h2>
                <!-- end title -->

                <!-- list -->
                <ul class="">
                    <li class="mobile-link-item"><a href="tel:380933456789">+38 (093) 345-67-89</a></li>
                    <li class="mobile-link-item mobile-link-item-bottom"><a href="tel:380933456789">+38 (093) 345-67-89</a></li>
                    <li class="mobile-link-item mobile-link-item-bottom"><a href="mailto:support@alfaoil.ua">support@alfaoil.ua</a></li>
                    <li class="mobile-link-item ">Ул. Василия Стуса&nbsp;2б (Бизнес&nbsp;Центр)</li>
                </ul>
                <!-- end list -->

                <!-- mapTitle -->
                <a class="button button-map-mobile text-uppercase" href="#mapTitle" id="mobile-map">
                    <?= defaultLangText( 'Карта АЗС' ) ?>
                </a>
                <!-- end mapTitle -->

            </div>
            <!-- end nav -->

        </nav>
        <!-- End Mobile Menu Wrapper -->

    </div>
    <!-- end container -->
	<?php
};
/*
 * @alfaoil_header_TagHeaderClose
*/
add_action( 'header_parts', 'alfaoil_header_TagHeaderClose', 30 );
function alfaoil_header_TagHeaderClose() {
	?>
  	</header>
  	<!-- END HEADER -->
	<?php
};