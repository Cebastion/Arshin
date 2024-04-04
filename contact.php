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
		<div class="content__contact">
			<div class="contact__title">
				<h2>Контакты</h2>
			</div>
			<ul class="contact__block">
				<li class="contact__name">
					<img src="./image/svg/orange-place.svg" alt="">
					<span>Москва</span>
				</li>
				<li class="contact__name">
					<img src="./image/svg/orange-phone.svg" alt="">
				    <a href="tel:+74951913074">	<span>+7(495) 191-30-74</span></a>
				</li>
				<li class="contact__name">
					<img src="./image/svg/orange-time.svg" alt="">
					<span>Ежедневно с 9:00 до 21:00</span>
				</li>
				<li class="contact__name">
					<img src="./image/svg/orange-place-2.svg" alt="">
					<span>1-я Тверская-Ямская улица, 29с1</span>
				</li>
			</ul>
		</div>
		<div id="map2" class='map'></div>
		<?php include("./components/question.php") ?>
	</div>
</main>
<?php include("./components/footer.php") ?>