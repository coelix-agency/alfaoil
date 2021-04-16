<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16"/>
    <base href="<?= SITE_URL; ?>">
    <meta property="og:image" content="/images/logo-full.png"/>
    <meta property="og:image:type" content="image/png"/>
    <meta property="og:image:width" content="299"/>
    <meta property="og:image:height" content="59"/>
    <link rel="stylesheet" href="css/bundle.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css"/>	
</head>
<body>

<header class="header">
    <div class="container-xl">
        <a href="<?= $site_url ?>main" class="logo-wrapper">
            <img src="includes/images/icons-svg/logo.svg" alt="" class="svg logo">
        </a>
        <nav class="nav">
            <ul>
                <li>
                    <a href="<?= $site_url ?>main">ГЛАВНАЯ</a>
                </li>
                <li>
                    <a href="#services-section">УСЛУГИ</a>
                </li>
                <li>
                    <a href="<?= $site_url ?>about-company">О КОМПАНИИ</a>
                </li>
                <li>
                    <a href="<?= $site_url ?>contacts">КОНТАКТЫ</a>
                </li>
                <li>
                    <a href="<?= $site_url ?>map">КАРТА АЗС</a>
                </li>
            </ul>
        </nav>
        <div class="user-navigation">
            <a class="privat" title="Личный кабинет">
                <?php include 'includes/images/icons-svg/user.svg'; ?>
                <span>ЛИЧНЫЙ КАБИНЕТ</span>
            </a>      
            <div class="social">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/alfaoildiesel" target="_blank" title="Facebook">
                            <img src="includes/images/icons-svg/facebook.svg" alt="" class="svg">
                            <span>фейсбук</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="lang">
                <a href="#">Ru</a>
                <img src="includes/images/icons-svg/lang-arrow.svg" alt="" class="svg lang-arrow">
                <ul>
                    <li class="lang_active"><a href="#">Ru</a></li>
                    <li><a href="#">Ua</a></li>
                </ul>
            </div>
        </div>
        <div class="burger" id="open-mobile-menu">
            <?php include 'includes/images/icons-svg/burger.svg'; ?>
        </div>
        <nav class="nav-mobile-menu-wrap" id="nav-mobile-menu-wrap">
            <div class="nav-mobile-menu">
                <div class="nav-mobile-menu-top">
                    <a class="privat">
                        <img src="includes/images/icons-svg/user.svg" alt="" class="svg user-logo">
                        ЛИЧНЫЙ КАБИНЕТ
                    </a>
                    <div id="close-mobile-menu" class="exit">
                        <img src="includes/images/icons-svg/exit.svg" alt="" class="svg">
                    </div>
                </div>
                <ul class="nav-mobile-menu-list">
                    <li>
                        <a href="#services-section" id="mobile-services">УСЛУГИ</a>
                    </li>
                    <li>
                        <a href="<?= $site_url ?>about-company">О КОМПАНИИ</a>
                    </li>
                    <li>
                        <a href="<?= $site_url ?>contacts">КОНТАКТЫ</a>
                    </li>
                    <li>
                        <a href="<?= $site_url ?>map">КАРТА АЗС</a>
                    </li>
                </ul>
                <h2>КОНТАКТЫ</h2>
                <ul class="phones">
                    <li>
                        <a href="tel:+380635280111" class="phones-link">
                            <span class="phones-right"><img src="includes/images/icons-svg/lifecell.svg" alt="" class="svg"></span>
                            <span>+38 (063) 528-01-11</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:+380975280111" class="phones-link">
                            <span class="phones-right"><img src="includes/images/icons-svg/kievstar.svg" alt="" class="svg"></span>
                            <span>+38 (097) 528-01-11</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:+380685280111" class="phones-link">
                            <span class="phones-right"><img src="includes/images/icons-svg/mts.svg" alt="" class="svg"></span>
                            <span>+38 (068) 528-01-11</span>
                        </a>
                    </li>
                    <li class="phones-link">
                        <a href="mailto:support@alfaoil.ua">support@alfaoil.ua</a>
                    </li>
                    <li class="phones-adress">Ул. Василия Стуса&nbsp;2б (Бизнес&nbsp;Центр)</li>
                </ul>
                <a class="button button-map-mobile" href="#mapTitle" id="mobile-map">КАРТА АЗС</a>
            </div>
        </nav>
    </div>
</header>
