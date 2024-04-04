<?php include("./components/var.php") ?>
<?php 
$Description = ''; //ТУТ ПИШИТЕ ОПИСАНИЕ
$KeyWords = ''; //ТУТ ПИШИТЕ КЛЮЧЕВЫЕ СЛОВА
$Robots = ''; // УКАЗАТЬ, КАКИЕ ДЕЙСТВИЯ РОБОТЫ ДОЛЖНЫ ПРЕДПРИНИМАТЬ В ОТНОШЕНИИ ВАШЕЙ СТРАНИЦЫ
include("./components/header.php")
?>
<?php include("./components/header__info.php")?>
	<main class="content">
		<div class="content__container">
			<div class="content__license">
				<div class="license__title">
					<h2>Аттестат аккредитации</h2>
				</div>
				<div class="license__image">
					<img src="./image/license.webp" alt="">
				</div>
			</div>
			<?php include("./components/question.php")?>
		</div>
	</main>
<?php include("./components/footer.php")?>