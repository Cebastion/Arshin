<?php include("./components/header.php")?>
<?php include("./components/header__info.php") ?>
<main class="content">
	<div class="content__container">
		<div class="content__information">
			<div class="information__title">
				<h2>Поверка счетчиков воды в Москве</h2>
			</div>

		</div>
		<div class="content__data">
			<div class="data__block">
				<div class="data__image">
					<img src="./image/svg/phone.svg" alt="">
				</div>
				<div class="data__text">
				    <a href="tel:+74951913074">	<span>+7(495) 191-30-74</span></a>
				</div>
			</div>
			<div class="data__block">
				<div class="data__image">
					<img src="./image/svg/place.svg" alt="">
				</div>
				<div class="data__text">
					<span>Москва</span>
				</div>
			</div>
			<div class="data__block">
				<div class="data__image">
					<img src="./image/svg/place-2.svg" alt="">
				</div>
				<div class="data__text">
					<span>1-я Тверская-Ямская улица, 29с1</span>
				</div>
			</div>
		</div>
		<button class="button__order buy">
			Заказать поверку
		</button>
		<div class="content__companies">
			<ul class="companies__block">
				<li class="companies__name" data-lat="55.7539" data-lng="37.6208"><a href="./CAO.php">ЦАО</a></li>
				<li class="companies__name" data-lat="55.8445" data-lng="37.6042"><a href="./CAO2.php">САО</a></li>
				<li class="companies__name" data-lat="55.8783" data-lng="37.7072"><a href="./SVAO.php">СВАО</a></li>
				<li class="companies__name" data-lat="55.7517" data-lng="37.7870"><a href="./VAO.php">ВАО</a></li>
				<li class="companies__name" data-lat="55.6499" data-lng="37.6762"><a href="./SouthVAO.php">ЮВАО</a></li>
				<li class="companies__name" data-lat="55.6215" data-lng="37.6060"><a href="./SouthAO.php">ЮАО</a></li>
				<li class="companies__name" data-lat="55.6603" data-lng="37.5549"><a href="./SouthZAO.php">ЮЗАО</a></li>
				<li class="companies__name" data-lat="55.7302" data-lng="37.4245"><a href="./ZAO.php">ЗАО</a></li>
				<li class="companies__name" data-lat="55.7934" data-lng="37.4515"><a href="./NorthZAO.php">СЗАО</a></li>
				<li class="companies__name" data-lat="55.7727" data-lng="37.6923"><a href="./ZelAO.php">ЗелАО</a></li>
			</ul>
		</div>
		<div id="map" class='map'></div>
    <script>
			ymaps.ready(init);

			function init() {
				let point = [55.8783, 37.7072]
				var map = new ymaps.Map("map", {
					center: point,
					zoom: 15
				});

				var myPlacemark = new ymaps.Placemark(point, {
					hintContent: 'СВАО',
					balloonContent: 'СВАО'
				}, {
					iconLayout: 'default#image',
					iconImageHref: './image/svg/point.svg',
					iconImageSize: [50, 50], // Adjust the size based on your SVG
					iconImageOffset: [-25, -50]
				});

				map.geoObjects.add(myPlacemark);
			}
		</script>
			<div class="information__text">
				<p>А ещё независимые государства представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть ограничены исключительно образом мышления.</p>
				<p>Есть над чем задуматься: реплицированные с зарубежных источников, современные исследования представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть объединены в целые кластеры себе подобных. Ясность нашей позиции очевидна: начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.</p>
				<p>Задача организации, в особенности же высококачественный прототип будущего проекта способствует подготовке и реализации глубокомысленных рассуждений. Для современного мира начало повседневной работы по формированию позиции влечёт за собой процесс внедрения и модернизации системы массового участия. А ещё действия представителей оппозиции освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется.</p>
			</div>
		<?php 
		$Description = ''; //ТУТ ПИШИТЕ ОПИСАНИЕ
		$KeyWords = ''; //ТУТ ПИШИТЕ КЛЮЧЕВЫЕ СЛОВА
		$Robots = ''; // УКАЗАТЬ, КАКИЕ ДЕЙСТВИЯ РОБОТЫ ДОЛЖНЫ ПРЕДПРИНИМАТЬ В ОТНОШЕНИИ ВАШЕЙ СТРАНИЦЫ
		include('./components/MetaTagsSEO.php')
		?>
		<?php include("./components/question.php") ?>
	</div>
</main>
<?php include("./components/footer.php") ?>