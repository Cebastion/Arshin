<?php include("./components/var.php") ?>
<?php 
$Description = ''; //ТУТ ПИШИТЕ ОПИСАНИЕ
$KeyWords = ''; //ТУТ ПИШИТЕ КЛЮЧЕВЫЕ СЛОВА
$Robots = ''; // УКАЗАТЬ, КАКИЕ ДЕЙСТВИЯ РОБОТЫ ДОЛЖНЫ ПРЕДПРИНИМАТЬ В ОТНОШЕНИИ ВАШЕЙ СТРАНИЦЫ
include("./components/header.php")
?>
<?php include("./components/header__info.php") ?>
<main class="content">
	<div class="content__container">
		<div class="content__service">
			<div class="service__title">
				<h2>Единый тариф на все услуги метрологии</h2>
			</div>
			<div class="service__block">
				<div class="service__row">
					<div class="service__info">
						<div class="service__name">
							<h2>Поверка счетчика</h2>
						</div>
						<ul class="service__points">
							<li>Проверка исправности водомера</li>
							<li>Выдача официальной документации</li>
							<li>Регистрация во ФГИС Аршин</li>
						</ul>
						<div class="service__price-button">
							<div class="service__price">
								<span><?php echo $site_poverka_price?> руб.</span>
							</div>
							<button class="service__button buy">
								Заказать проверку
							</button>
						</div>
					</div>
					<div class="service__image">
						<img src="./image/service-1.webp" alt="">
					</div>
				</div>
			</div>
			<div class="service__block">
				<div class="service__row">
					<div class="service__info">
						<div class="service__name">
							<h2>Замена счетчика ХВС/ГВС</h2>
						</div>
						<ul class="service__points">
							<li>Замена или установка счетчика</li>
							<li>Пломбировка</li>
							<li>Фильтр грубой очистки</li>
							<li>Пакет документов</li>
						</ul>
						<div class="service__price-button">
							<div class="service__price">
								<span><?php echo $site_cena_zamena?> руб.</span>
							</div>
							<button class="service__button buy">
								Заказать проверку
							</button>
						</div>
					</div>
					<div class="service__image">
						<img src="./image/service-2.webp" alt="">
					</div>
				</div>
			</div>
		</div>
		<?php include("./components/question.php") ?>
	</div>
</main>
<?php include("./components/footer.php") ?>