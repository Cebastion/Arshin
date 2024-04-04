<?php
include("./components/var.php");
$title = 'Аршин - официальная поверка счетчиков воды за '.$site_poverka_price.' руб. в Москве.'; //ТУТ ПИШИТЕ ОПИСАНИЕ
$Description = 'Аршин - Аккредитованная поверка счетчиков воды в Москве цены. Поверка водосчетчиков без снятия официально. Поверим водосчетчики холодной и горячей воды на дому в день обращения. Сертифицированные мастера метрологи работают без выходных.'; //ТУТ ПИШИТЕ ОПИСАНИЕ
$KeyWords = ''; //ТУТ ПИШИТЕ КЛЮЧЕВЫЕ СЛОВА
$Robots = ''; // УКАЗАТЬ, КАКИЕ ДЕЙСТВИЯ РОБОТЫ ДОЛЖНЫ ПРЕДПРИНИМАТЬ В ОТНОШЕНИИ ВАШЕЙ СТРАНИЦЫ
include("./components/header.php")
?>
<?php include("./components/header__info.php") ?>
<main class="content">
	<div class="content__container">
		<div class="content__service-home">
			<div class="service-home__title">
				<h2>Единый тариф на все услуги метрологии</h2>
			</div>
			<div class="service-home__row-blocks">
				<div class="service-home__block">
					<div class="service-home__row">
						<div class="service-home__info">
							<div class="service-home__name">
								<h2>Поверка счетчика</h2>
							</div>
							<ul class="service-home__points">
								<li>Проверка исправности водомера</li>
								<li>Выдача официальной документации</li>
								<li>Регистрация во ФГИС Аршин</li>
							</ul>
							<div class="service-home__price-button">
								<div class="service-home__price">
									<span> <?php echo $site_poverka_price; ?> руб.</span>
								</div>
								<button class="service-home__button buy">
									Заказать проверку
								</button>
							</div>
						</div>
						<div class="service-home__image">
							<img src="./image/service-1.webp" alt="">
						</div>
					</div>
				</div>
				<div class="service-home__block">
					<div class="service-home__row">
						<div class="service-home__info">
							<div class="service-home__name">
								<h2>Замена счетчика ХВС/ГВС</h2>
							</div>
							<ul class="service-home__points">
								<li>Замена или установка счетчика</li>
								<li>Пломбировка</li>
								<li>Фильтр грубой очистки</li>
								<li>Пакет документов</li>
							</ul>
							<div class="service-home__price-button">
								<div class="service-home__price">
									<span> <?php echo $site_cena_zamena ?> руб.</span>
								</div>
								<button class="service-home__button buy">
									Заказать проверку
								</button>
							</div>
						</div>
						<div class="service-home__image">
							<img src="./image/service-2.webp" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content__phishing">
			<div class="phishing__block">
				<div class="phishing__title">
					<h2>Срочно проверьте следующую дату поверки Ваших счетчиков бесплатно</h2>
				</div>
				<div class="phishing__text">
					<span>Чтобы избежать лишних начислений</span>
				</div>
				<form action='../server/server.php' method="post" class="phishing__form form validate-form" onsubmit="return validateFormMeterNumber(this)">
					<input type="text" class='lead_client_meter_number' name='lead_client_meter_number' id='lead_client_meter_number' placeholder="Введите номер счетчика">
					<input class='lead_phone' type="tel" name='lead_phone' id='lead_phone' placeholder="Номер телефона">
					<button class="phishing__button button">
						Проверить
					</button>
				</form>
			</div>
		</div>
	</div>
	<div class="content__advantages">
		<div class="advantages__block">
			<div class="advantages__row">
				<div class="advantages__image">
					<img src="./image/advantages.webp" alt="advantages">
				</div>
				<div class="advantages__info">
					<div class="advantages__line">
						<div class="line__block">
							<div class="line__image">
								<img src="./image/svg/gas-meter.svg" alt="gas-meter">
							</div>
							<div class="line__title">
								<span>Без снятия счетчиков</span>
								<p>Происходит поверка</p>
							</div>
						</div>
					</div>
					<div class="advantages__line">
						<div class="line__block">
							<div class="line__image">
								<img src="./image/svg/time-2.png" alt="time">
							</div>
							<div class="line__title">
								<span>30 минут</span>
								<p>Занимает проверка счетчиков</p>
							</div>
						</div>
						<div class="line__block">
							<div class="line__image">
								<img src="./image/svg/panel.svg" alt="panel">
							</div>
							<div class="line__title">
								<span>При клиенте</span>
								<p>Внесение в ГосРеестр Аршин</p>
							</div>
						</div>
					</div>
					<div class="advantages__line">
						<div class="line__block">
							<div class="line__image">
								<img src="./image/svg/file.svg" alt="file">
							</div>
							<div class="line__title">
								<span>Сразу же</span>
								<p>Заполнение и выдача документов</p>
							</div>
						</div>
						<div class="line__block">
							<div class="line__image">
								<img src="./image/svg/worker.svg" alt="worker">
							</div>
							<div class="line__title">
								<span>Выезд метролога</span>
								<p>В день обращения</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content__container">
		<div class="content__order">
			<div class="order__block">
				<div class="order__title">
					<h2>Заказать поверку счетчика воды</h2>
				</div>
				<div class="order__row">
					<div class="order__calendar">
						<div class="calendar-header">
							<h1 id="currentMonthYear"></h1>
							<div class="calendar__navigation">
								<button id="prevMonth">
									<svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
										<path d="M0 9C0 9.3418 0.126953 9.63477 0.400391 9.88867L7.99805 17.3301C8.21289 17.5449 8.48633 17.6621 8.80859 17.6621C9.45312 17.6621 9.9707 17.1543 9.9707 16.5C9.9707 16.1777 9.83398 15.8945 9.61914 15.6699L2.77344 9L9.61914 2.33008C9.83398 2.10547 9.9707 1.8125 9.9707 1.5C9.9707 0.845703 9.45312 0.337891 8.80859 0.337891C8.48633 0.337891 8.21289 0.455078 7.99805 0.669922L0.400391 8.10156C0.126953 8.36523 0 8.6582 0 9Z" fill="#31718E" />
									</svg>
								</button>
								<button id="nextMonth">
									<svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
										<path d="M10 9C9.99023 8.6582 9.86328 8.36523 9.59961 8.10156L2.00195 0.669922C1.77734 0.455078 1.51367 0.337891 1.19141 0.337891C0.537109 0.337891 0.0292969 0.845703 0.0292969 1.5C0.0292969 1.8125 0.15625 2.10547 0.380859 2.33008L7.2168 9L0.380859 15.6699C0.15625 15.8945 0.0292969 16.1777 0.0292969 16.5C0.0292969 17.1543 0.537109 17.6621 1.19141 17.6621C1.50391 17.6621 1.77734 17.5449 2.00195 17.3301L9.59961 9.88867C9.87305 9.63477 10 9.3418 10 9Z" fill="#31718E" />
									</svg>
								</button>
							</div>
						</div>
						<div class="calendar-weekdays">
							<div>Вс</div>
							<div>Пн</div>
							<div>Вт</div>
							<div>Ср</div>
							<div>Чт</div>
							<div>Пт</div>
							<div>Сб</div>
						</div>
						<div class="calendar-days" id="calendarDays"></div>
					</div>
					<div class="order__form">
						<!--<input type="text" class='order__name' name='lead_client_name' id='lead_client_name' placeholder="Ваше имя">-->
						<input type="tel" class='order__phone' name='lead_phone' id='lead_phone' placeholder="Номер телефона">
						<div class="checkbox">
							<input type="checkbox" id="customCheckboxCalendar" class="custom-checkbox">
							<label for="customCheckboxCalendar" class="checkbox-label">Я принимаю <a href='./PrivacyPolicy.php'>условия политики конфиденциальности</a></label>
						</div>
						<button class="order__button">
							Заказать
						</button>
					</div>
				</div>
			</div>
		</div>
		<?php include("./components/question.php") ?>
	</div>
</main>
<?php include("./components/footer.php") ?>