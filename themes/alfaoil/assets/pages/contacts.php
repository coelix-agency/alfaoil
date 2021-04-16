<main id="page-contacts" class="page page-contacts-container">
    <div class="container-xl">
        <section class="contacts-top-section">
            <div class="contacts-top-section-container">
                <p class="page-address-over-title"><a href="<?= $site_url ?>main">Главная</a> > Контакты</p>
                <h2 class="page-contacts-title">КОНТАКТЫ</h2>
            </div>
        </section>
    </div>
    <div class="container-xl">
        <section class="contacts-bottom-section">
            <div class="contacts-bottom-section-left">
                <h3>Как с нами связаться:</h3>
                <div class="contact-section">
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
                            <img src="includes/images/icons-svg/letter.svg" alt="" class="svg letter">
                            <a href="mailto:support@alfaoil.ua">support@alfaoil.ua</a>
                        </li>
                        <li class="phones-adress">
                            <img src="includes/images/icons-svg/mark.svg" alt="" class="svg mark">
                            <span>Ул. Василия Стуса&nbsp;2б (Бизнес&nbsp;Центр)</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contacts-bottom-section-right">
                <h3>ОБРАТНАЯ СВЯЗЬ</h3>
                <p>Оставьте свои контактные данные и мы свяжемся с вами для уточнения деталей</p>
                <form action="" class="contacts-form">
                    <div class="contacts-form-top">
                        <input type="text" placeholder="Ваше имя*">
                        <input type="text" placeholder="Фамилия">
                    </div>
                    <div class="contacts-form-middle">
                        <input type="tel" id="phone" placeholder="Контактный телефон*">
                        <input type="email" placeholder="E-mail">
                    </div>
                    <textarea name="" placeholder="Комментарий"></textarea>
                    <p class="mandatory-comment">*обязательные поля ввода</p>
                    <div class="agree-container">
                        <input type="checkbox" id="agreeCheckbox" class="agree-checkbox">
                        <label for="agreeCheckbox">Даю согласие на обработку персональных данных согласно <br> <a href="#">политике конфиденциальности</a></label>
                    </div>
                    <input type="submit" value="Отправить" class="submit-but">
                </form>
            </div>
        </section>
    </div>
</main>