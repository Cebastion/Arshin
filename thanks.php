<?php 
$Description = ''; //ТУТ ПИШИТЕ ОПИСАНИЕ
$KeyWords = ''; //ТУТ ПИШИТЕ КЛЮЧЕВЫЕ СЛОВА
$Robots = ''; // УКАЗАТЬ, КАКИЕ ДЕЙСТВИЯ РОБОТЫ ДОЛЖНЫ ПРЕДПРИНИМАТЬ В ОТНОШЕНИИ ВАШЕЙ СТРАНИЦЫ
include("./components/header.php")
?>
	<main class="content">
		<div class="content__container">
			<div class="content__thanks">
				<div class="thanks__block">
					<div class="thanks__image">
						<img src="./image/thanks.webp" alt="thanks">
					</div>
					<div class="thanks__title">
						<h2>Спасибо! Ваша заявка принята</h2>
					</div>
					<button class="thanks__button">
						Вернуться на главную страницу
					</button>
				</div>
			</div>
		</div>
	</main>
<?php include("./components/footer.php")?>