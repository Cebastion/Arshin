

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="./css/header.css" type='text/css'>
	<link rel="stylesheet" href="./css/footer.css" type='text/css'>
	<link rel="stylesheet" href="./css/global.css" type='text/css'>
	<link rel="stylesheet" href="./css/question.css" type='text/css'>
	<link rel="stylesheet" href="./css/license.css" type='text/css'>
	<link rel="stylesheet" href="./css/thanks.css" type='text/css'>
	<link rel="stylesheet" href="./css/service.css" type='text/css'>
	<link rel="stylesheet" href="./css/index.css" type='text/css'>
	<link rel="stylesheet" href="./css/our_office.css" type='text/css'>
	<link rel="stylesheet" href="./css/contact.css" type='text/css'>
	<link rel="stylesheet" href="./css/popOrder.css" type='text/css'>
	<link rel="stylesheet" href="./css/PrivacyPolicy.css" type='text/css'>
	<link rel="stylesheet" href="./css/map.css" type='text/css'> 
	<?php include('MetaTagsSEO.php')?>
	<script src="./js/burger.js" defer></script>
	<script src="./js/calendar.js" defer></script>
	<script src="./js/popOrder.js" defer></script>
	<script src="./js/ResetForm.js" defer></script>
	<script src="./js/Validation.js" defer></script>
	<script src="./js/Validation2.js" defer></script>
	<script src="https://api-maps.yandex.ru/2.1/?apikey=0fdf7089-fb34-47f1-a217-c211364257e6&lang=ru_RU" type="text/javascript"></script>
	<script src="./js/map1.js" defer></script>
	<script src="./js/map2.js" defer></script>
	<title><?php echo $title ?></title>
</head>

<body>
	<div class="walleper">
		<div class="header">
			<div class="header__top">
				<div class="header__container">
					<div class="header__logo">
						<div class="logo__img">
							<a href="./">
								<img src='./image/logo.webp' alt='logo' />
							</a>
						</div>
						<div class="logo__text">
							<span>Официальная метрологическая служба России.</span>
						</div>
					</div>
					<div class="header__location">
						<span><?php echo $site_city.', <br> '.$site_ofice; ?></span>
					</div>
					<div class="header__time">
						<span>Ежедневно<br> с 9:00 до 21:00</span>
					</div>
					<div class="header__contact">
						<div class="laptop__contact">
							<div class="contact__phone">
				                <a href="tel:<?php echo $site_tel_short;?>">	<span><?php echo $site_tel;?></span></a>
							</div>
							<div class="contact__mail">
								<span><?php echo $site_email;?></span>
							</div>
						</div>
						<div class="mobile__contact">
							<div class="mobile__left">
								<div class="contact__phone">
				                    <a href="tel:<?php echo $site_tel_short;?>">	<span><?php echo $site_tel;?></span></a>
								</div>
								<div class="contact__mail">
									<span><?php echo $site_email;?></span>
								</div>
							</div>
							<div class="mobile__right">
								<div class="burger">
									<span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mobile-xl__contact">
					<div class="contact__phone">
				            <a href="tel:<?php echo $site_tel_short;?>">	<span><?php echo $site_tel;?></span></a>
					</div>
					<div class="contact__mail">
						<span>info@arshen.ru</span>
					</div>
				</div>
			</div>
			<div class="header__bottom">
				<div class="header__container">
					<ul class="header__menu">
					   <li>
					    <span>
					        <a href='./service.php'>Услуги и стоимость</a>
					   </span>
						</li>
						<li>
							<span>
								<a href="./our_office.php">Наши офисы</a>
							</span>
						</li>
						<li class='menu__more'>
							<span>О компании</span>
							<ul class="menu__drop-down">
								<li>
									<a href='./contact.php'>Контакты</a>
								</li>
								<li>
									<a href='./license.php'>Лицензии</a>
								</li>

							</ul>
						</li>
					
					</ul>
					<div class='laptop'>
						<div class="header__location">
							<span><?php echo $site_adres;?></span>
						</div>
						<div class="header__time">
							<span>Ежедневно с 9:00 до 21:00</span>
						</div>
					</div>
					<div class="burger">
						<span></span>
					</div>
				</div>
			</div>
		</div>