<footer class="footer">

	<div class="container-m">
		<a href="<?= $site_url ?>main" class="footer-top-logo">
			<img src="includes/images/icons-svg/logo-footer.svg" alt="" class="svg">
		</a>
		<div class="footer-top">
			<div class="footer-contacts">
				<div class="footer-contacts-item footer-site-map">
					<h2>Карта сайта:</h2>
					<ul>
						<li>
							<a href="<?= $site_url ?>main#services-section">Услуги</a>
						</li>
						<li>
							<a href="<?= $site_url ?>about-company">О нас</a>
						</li>
						<li>
							<a href="<?= $site_url ?>map">Карта АЗС</a>
						</li>
						<li>
							<a href="<?= $site_url ?>contacts">Контакты</a>
						</li>
					</ul>
				</div>

				<div class="footer-contacts-item phones-wrapper">
					<h2>Как с нами связаться:</h2>
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
					</ul>
				</div>

				<!-- <div class="footer-contacts-item footer-phones-wrapper">
					<h2>Как с нами связаться:</h2>
					<ul class="footer-phones">
						<li>
							<a href="tel:+380635280111" class="footer-phones-link">
								<span class="footer-phones-right"><img src="includes/images/icons-svg/lifecell.svg" alt="" class="svg"></span>
								<span>+38 (063) 528-01-11</span>
							</a>
						</li>
						<li>
							<a href="tel:+380975280111" class="footer-phones-link">
								<span class="footer-phones-right"><img src="includes/images/icons-svg/kievstar.svg" alt="" class="svg"></span>
								<span>+38 (097) 528-01-11</span>
							</a>
						</li>
						<li>
							<a href="tel:+380685280111" class="footer-phones-link">
								<span class="footer-phones-right"><img src="includes/images/icons-svg/mts.svg" alt="" class="svg"></span>
								<span>+38 (068) 528-01-11</span>
							</a>
						</li>
					</ul>
				</div> -->

				<div class="footer-contacts-item footer-address">
					<h2>Как с нами связаться:</h2>
					<div class="footer-address-wrap">
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
						<div class="footer-mail">
							<img src="includes/images/icons-svg/letter.svg" alt="" class="svg letter">
							<a href="mailto:support@alfaoil.ua">support@alfaoil.ua</a>
						</div>
						<div class="footer-street">
							<img src="includes/images/icons-svg/mark.svg" alt="" class="svg mark">
							<div class="footer-address-street">Ул. Василия Стуса 2б (Бизнес Центр)</div>
						</div>
					</div>
				</div>
			</div>
			<div class="connection-form-wrap">
				<form action="" class="connection-form">
					<label for="#email" class="email-label">Хотите начать сотрудничество?</label>
					<p class="email-wrapper">
						<input type="email" id="email" placeholder="Введите Ваш эл.адрес">
						<button class="connection-form-submit">
							<?php include 'includes/images/icons-svg/button-arrow.svg'; ?>
						</button>
					</p>

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
					<a href="https://mart.com.ua/" class="mart" target="_blank">Сайт создан студией —
						<img src="includes/images/icons-svg/mart-logo.svg" alt="" class="svg">
					</a>
				</form>
			</div>
		</div>
		<div class="footer-bottom">
			<p class="ceo-text"><strong>Текст для сео продвижения</strong> Ресурс нашей компании сосредоточен на
				предоставление сервиса для транспортных
				компаний. У нас Вы сможете заправить свой автопарк качественным ДТ стандарта
				ЕВРО-5 по привлекательной цене. Мы развиваем свою сеть АЗС на максимально удобных локациях и стараемся
				закрыть ними потребность в ДТ на основных товаро-транспортных магистралях нашей страны!
				<a href="<?= $site_url ?>about-company" class="read-more">Читать дальше</a>
			</p>
			<a href="https://mart.com.ua/" class="mart" target="_blank">Сайт создан студией —
				<img src="includes/images/icons-svg/mart-logo.svg" alt="" class="svg">
			</a>
		</div>
	</div>

</footer>

<script src="js/min/bundle.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/src/common/slider.js"></script>
<script src="js/src/common/mobileMenu.js"></script>
<script src="js/src/common/middle-promo-scroll.js"></script>
<script src="js/src/common/map.js"></script>
<script src="js/src/common/phone.js"></script>

</body>
</html>
