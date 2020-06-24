<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);

// указываем адрес отправителя, можно указать адрес на домене Вашего сайта
$fromMail = 'admin@yousite.ru';
$fromName = 'yousite.ru Форма';

// Сюда введите Ваш email
$emailTo = 'wvenator@ya.ru';
$subject = 'Форма обратной связи на php';
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

// тело письма
$body = "Получено письмо с сайта testsite.ru \n Имя: $name\nТелефон: $phone \n E-mail: $email\nСообщение: $message";

// сообщение будет отправлено в случае, если поле с номером телефона не пустое
if (strlen($phone) > 0) {
    $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Калинкин</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
	<div class="topbar">
		<a href="/"><div class="logo">
		</div></a>
		<div class="menu">
		<ul>
			<li><a href="#">Компания</a></li>
			<li><a href="#">Карты водителей</a></li>
			<li><a href="#">Отзывы</a></li>
			<li><a href="#">Контакты</a></li>
			<li><a href="#">Блог</a></li>
		</ul>
		</div>
		<div class="fon_tel"><div class="tel">
		<p>+7 (962) 449-29-26</p>
		<a href="#" class="md-trigger" data-modal="modal-1">заказать звонок</a>
		</div></div>
    </div>
	<div class="content">
		<div class="video">
		<iframe width="410" height="250" src="https://www.youtube.com/embed/videoseries?list=PL-QXPTHVI31NwIGf9XtUbUOEAZv9BQQwv" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="form">
		<h1>Оформление карт<br>водителя для тахографа</h1>
		Получите бесплатную консультацию менеджера заполнив форму<br>
		<input type="text" name="name" placeholder="Ваше имя" maxlength="64" autocomplete="off"><br>
		<input type="tel" name="tel" placeholder="Ваш номер телефона" maxlength="64" autocomplete="off"><br>
		<button type="submit">получить консультацию</button><br>
		<p>Нажимая на кнопку, вы принимаете <a href="#">Положение</a> и <a href="#">Согласие</a><br>на обработку персональных данных.</p>
		</div>
		<div class="soc">
		<a href="#"><div class="soc_whatsapp"></div></a>
		<a href="#"><div class="soc_viber"></div></a>
		<a href="#"><div class="soc_vk"></div></a>
		</div>
	</div>
	<div class="cont">
		<div class="h_card">
			<h1>Виды карт</h1>
			<p>В настоящий момент с помощью нашего сервиса можно<br>оформить следующие карты тахографа:</p>
		</div>
		<div class="info_card">
			<div class="block_card">
				<div class="card">
				КАРТА<br>ПРЕДПРИЯТИЯ<br>СКЗИ
				<p>3799 <a>₽</a></p>
				</div>
				<div class="i_card">
				Действует 3 года<br>Оплата от юридического лица<br>Минимум документов
				</div>
				<div class="b_card md-trigger" data-modal="modal-1">
				заказать карту
				</div>
			</div>
			<div class="block_card">
				<div class="card">
				КАРТА<br>ПРЕДПРИЯТИЯ<br>ЕСТР
				<p>3799 <a>₽</a></p>
				</div>
				<div class="i_card">
				Действует 3 года<br>Оплата онлайн<br>Минимум документов
				</div>
				<div class="b_card md-trigger" data-modal="modal-1">
				заказать карту
				</div>
			</div>
			<div class="block_card">
				<div class="card">
				КАРТА<br>ВОДИТЕЛЯ<br>СКЗИ
				<p>3799 <a>₽</a></p>
				</div>
				<div class="i_card">
				Действует 3 года<br>Оплата онлайн<br>Без ходатайства
				</div>
				<div class="b_card md-trigger" data-modal="modal-1">
				заказать карту
				</div>
			</div>
			<div class="block_card">
				<div class="card">
				КАРТА<br>ВОДИТЕЛЯ<br>ЕСТР
				<p>3799 <a>₽</a></p>
				</div>
				<div class="i_card">
				Действует 3 года<br>Оплата онлайн<br>Не нужно ходатайство
				</div>
				<div class="b_card md-trigger" data-modal="modal-1">
				заказать карту
				</div>
			</div>
		</div>
	</div>
	<article id="slider">
		<input checked type="radio" name="slider" id="slide1"/>
		<input type="radio" name="slider" id="slide2"/>
		<input type="radio" name="slider" id="slide3"/>
		<div id="slides">
			<div id="container">
				<div class="inner">
					<article>
						<div class="info_s">
						<h2>Изготовим карту за 30 дней<br>или вернем деньги</h2>
						<p>Описание акции (текст о том, что водители получают по три<br>сотки за каждого приведённоого клиента). Кол-во символов<br>подобрать таким образом, чтоб получилось 3-4 строки<br>описания этой акции.</p>
						</div>
						<div class="s1_fon">
						</div>
					</article>
					<article>
						<div class="info_s">
						<h2>Изготовим карту за 30 дней<br>или вернем деньги</h2>
						<p>Описание акции (текст о том, что водители получают по три<br>сотки за каждого приведённоого клиента). Кол-во символов<br>подобрать таким образом, чтоб получилось 3-4 строки<br>описания этой акции.</p>
						</div>
						<div class="s2_fon">
						</div>
					</article>
					<article>
						<div class="info_s">
						<h2>Изготовим карту за 30 дней<br>или вернем деньги</h2>
						<p>Описание акции (текст о том, что водители получают по три<br>сотки за каждого приведённоого клиента). Кол-во символов<br>подобрать таким образом, чтоб получилось 3-4 строки<br>описания этой акции.</p>
						</div>
						<div class="s3_fon">
						</div>
					</article>
				</div>
			</div>
		</div>
		<div id="commands">
			<label for="slide1"></label>
			<label for="slide2"></label>
			<label for="slide3"></label>
		</div>
		<div id="active">
			<label for="slide1"></label>
			<label for="slide2"></label>
			<label for="slide3"></label>
		</div>
	</article>
	<div class="docs">
		<h1>Список документов, необходимых<br>для оформления карты водителя</h1>
		<div class="doc_img">
			<div class="doc1">
			</div>
			<div class="doc2">
			</div>
			<div class="doc3">
			</div>
			<div class="doc4">
			</div>
			<div class="doc5">
			</div>
		</div>
		<div class="doc_text">
			<div class="doc1">
			Паспорт
			</div>
			<div class="doc2">
			Водительское<br>удостоверение
			</div>
			<div class="doc3">
			СНИЛС
			</div>
			<div class="doc4">
			ИНН
			</div>
			<div class="doc5">
			Фото
			</div>
		</div>
		<div class="doc_fon">
		</div>
	</div>
	<div class="work">
		<h1>Этапы работы</h1>
		<p>Среднее время изготовления карты – 11 дней</p>
		<div class="work_img">
			<div class="work1">
			</div>
			<div class="work2">
			</div>
			<div class="work3">
			</div>
			<div class="work4">
			</div>
			<div class="work5">
			</div>
		</div>
		<div class="work_text">
			<div class="work1">
			Документы
			</div>
			<div class="work2">
			Выбор доставки
			</div>
			<div class="work3">
			Оплата
			</div>
			<div class="work4">
			Изготовление
			</div>
			<div class="work5">
			Получение
			</div>
		</div>
		<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" data-youtube-id="dQw4w9WgXcQ" class="button js-trigger-video-modal">
		<div class="play_video">посмотреть видео</div></a>
		<div class="b_work md-trigger" data-modal="modal-1">
		заказать карту
		</div>
	</div>
	<div class="feedback_top">
	<div><h1>Отзывы клиентов</h1></div>
	<div><a href="#">оставить отзыв</a></div>
	</div>
	<article id="feedback">
		<input checked type="radio" name="feedback" id="fb1"/>
		<input type="radio" name="feedback" id="fb2"/>
		<input type="radio" name="feedback" id="fb3"/>
		<div id="feedbacks">
			<div id="cont_fb">
				<div class="inner_fb">
					<article>
						<div class="fb_fon">
							<div class="fb_f1">
							</div>
							<div class="fb_f">
							</div>
							<div class="fb_info">
								<div class="fb_text">
									Равным образом постоянный количественный рост и сфера нашей активности обеспечивает актуальность соответствующих условий активизации? Значимость этих проблем настолько очевидна, что социально-экономическое развитие требует определения и уточнения новых предложений.
								</div>
								<div class="fb_name">
									Сергей Прищенко
								</div>
								<div class="fb_prof">
								водитель такси
								</div>
							</div>
						</div>
					</article>
					<article>
						<div class="fb_fon">
							<div class="fb_f2">
							</div>
							<div class="fb_f">
							</div>
							<div class="fb_info">
								<div class="fb_text">
									Равным образом постоянный количественный рост и сфера нашей активности обеспечивает актуальность соответствующих условий активизации? Значимость этих проблем настолько очевидна, что социально-экономическое развитие требует определения и уточнения новых предложений.
								</div>
								<div class="fb_name">
									Сергей Прищенко
								</div>
								<div class="fb_prof">
								водитель такси
								</div>
							</div>
						</div>
					</article>
					<article>
						<div class="fb_fon">
							<div class="fb_f3">
							</div>
							<div class="fb_f">
							</div>
							<div class="fb_info">
								<div class="fb_text">
									Равным образом постоянный количественный рост и сфера нашей активности обеспечивает актуальность соответствующих условий активизации? Значимость этих проблем настолько очевидна, что социально-экономическое развитие требует определения и уточнения новых предложений.
								</div>
								<div class="fb_name">
									Сергей Прищенко
								</div>
								<div class="fb_prof">
								водитель такси
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
		<div id="commands_fb">
			<label for="fb1"></label>
			<label for="fb2"></label>
			<label for="fb3"></label>
		</div>
	</article>
	<div class="faq">
		<h1>Часто задаваемые вопросы</h1>
		<p>Ответы на популярные вопросы по картам тахографа</p>
		<div class="faq_line">
		<div class="info">
			<div class="info_border">
				<input id="info__body1" class="info__switch" type="checkbox">
				<label for="info__body1" class="info__headline">
					Какая карта мне нужна? СКЗИ или ЕСТР?
				</label>
				<div class="info__body">
					Text<br>text<br>text...
				</div>
			</div>
			<div class="info_border">
				<input id="info__body2" class="info__switch" type="checkbox">
				<label for="info__body2" class="info__headline">
					Обязан ли работодатель обеспечить меня картой водителя?
				</label>
				<div class="info__body">
					Text<br>text<br>text...
				</div>
			</div>
			<div class="info_border">
				<input id="info__body3" class="info__switch" type="checkbox">
				<label for="info__body3" class="info__headline">
					Может ли работодатель отказать мне при приеме на работу,<br>если у меня отсутствует действующая карта водителя?
				</label>
				<div class="info__body">
					Text<br>text<br>text...
				</div>
			</div>
			<div class="info_border">
				<input id="info__body4" class="info__switch" type="checkbox">
				<label for="info__body4" class="info__headline">
					Что делать если карта водителя утеряна?
				</label>
				<div class="info__body">
					Text<br>text<br>text...
				</div>
			</div>
		</div>
		<div class="faq_call">
			Не нашли ответа на интересующий<br>вас вопрос — <a href="#">задайте его нам</a>,<br>мы оперативно ответим!
			<div class="b_call md-trigger" data-modal="modal-1">
			задать вопрос
			</div>
		</div>
		</div>
	</div>
	<div class="bio_card">
		<h1>Карта водителя СКЗИ и ЕСТР</h1>
		<div class="bio_card_line">
		<div class="bio_card1">
			Есть два основных вида карт — первая дает возможность<br>использовать тахограф НКМ (некорректируемый криптографический модуль) и СКЗИ (средство криптографической защит информации). Тахограф может быть встроенный или сменный, но данные, записанные им, нельзя изменить (если попытаться, тахограф зафиксирует<br>это и контролирующим специалистам станет известно о попытке вмешательства в работу прибора).<br>
			<br>Карты, упомянутые раннее, не связаны друг с другом. Карта СКЗИ<br>не будет распознана прибором для ЕСТР, так же как прибор для СКЗИ<br>не опознает карту ЕСТР. Связано это с тем, что:
		</div>
		<div class="bio_card2">
			<ul>
				<li>
				карты имеют различия в шрифтах и водяных знаках
				</li>
				<li>
				защита с применением PIN-кода имеется на карте СКЗИ
				</li>
				<li>
				чипы содержат разную информацию
				</li>
				<li>
				разные цены, ЕСТР дешевле СКЗИ
				</li>
				<li>
				изготовление карты водителя происходит в разные сроки<br>(как правило, ЕСТР дольше выпускается)
				</li>
				<li>
				в сравнении с СКЗИ, ЕСТР защищена лучше, ее не взломать,<br>но иногда кому-то удается подтасовать данные
				</li>
				<li>
				СКЗИ применяется на территории РФ, а для международных<br>поставок необходимо пользоваться ЕСТР.
				</li>
			</ul>
		</div>
		</div>
	</div>
	<div class="faq_com">
		<div class="faq_text">
			<div>
				<h1>7800+</h1>
				КАРТ ВЫПУЩЕНО
			</div>
			<div>
				<h1>2-3</h1>
				НЕДЕЛИ ДО ПОЛУЧЕНИЯ
			</div>
			<div>
				<h1>9 лет</h1>
				НА РЫНКЕ ТАХОГРАФИИ
			</div>
		</div>
	</div>
	<a href="#"><div class="b_faq">
		о компании
	</div></a>
	<div class="spons">
		<h1>Нам доверяют</h1>
		Ведущие компании России, с которыми мы сотрудничаем на регулярной основе
		<div class="spons_list">
			<div class="spon1">
			</div>
			<div class="spon2">
			</div>
			<div class="spon3">
			</div>
			<div class="spon4">
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="foot_line">
			<div class="foot1">
				<div class="foot_logo">
				</div>
				<p>Лицензия ФСБ №0015832,<br>клеймо РФ 1226</p>
				ИНН 2130100923<br>ОГРН 1122130003467
			</div>
			<div class="foot2">
				<div>
				<a href="#">Компания<br></a>
				<a href="#">Документы<br></a>
				<a href="#">Сотрудничество<br></a>
				<a href="#">VIP-клиентам</a>
				</div>
				<div>
				<a href="#">Карты СКЗИ<br></a>
				<a href="#">Карты предприятия<br></a>
				<a href="#">Карты ЕСТР</a>
				</div>
				<div>
				<a href="#">Отзывы<br></a>
				<a href="#">Контакты<br></a>
				<a href="#">Блог</a>
				</div>
			</div>
			<div class="foot3">
				+7 (962) 449-29-26
				<div class="b_foot md-trigger" data-modal="modal-1">
				заказать звонок
				</div>
				<div class="foot_soc">
					<a href="#"><div class="foot_whatsapp">
					</div></a>
					<a href="#"><div class="foot_viber">
					</div></a>
					<a href="#"><div class="foot_vk">
					</div></a>
				</div>
			</div>
		</div>
	</div>
	<div class="botline">
		<div class="botflex">
			<div class="botflex1">2009-<?php echo date ( 'Y' ) ; ?> © ИП Калинкин</div>
			<div class="botflex2"><a href="#">Политика хранения и обработки персональных данных</a></div>
			<div class="botflex3"><a href="#">Оферта</a></div>
		</div>
	</div>
<!-- video modal -->
<section class="video-modal">
	<div id="video-modal-content" class="video-modal-content">
		<iframe id="youtube" width="100%" height="100%" frameborder="0" allow="autoplay" allowfullscreen src=></iframe>
		<a href="#" class="close-video-modal">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" width="24" height="24">
				<g id="icon-x-close">
					<path fill="#ffffff" d="M30.3448276,31.4576271 C29.9059965,31.4572473 29.4852797,31.2855701 29.1751724,30.980339 L0.485517241,2.77694915 C-0.122171278,2.13584324 -0.104240278,1.13679247 0.52607603,0.517159487 C1.15639234,-0.102473494 2.17266813,-0.120100579 2.82482759,0.477288136 L31.5144828,28.680678 C31.9872448,29.1460053 32.1285698,29.8453523 31.8726333,30.4529866 C31.6166968,31.0606209 31.0138299,31.4570487 30.3448276,31.4576271 Z" id="Shape"></path>
					<path fill="#ffffff" d="M1.65517241,31.4576271 C0.986170142,31.4570487 0.383303157,31.0606209 0.127366673,30.4529866 C-0.12856981,29.8453523 0.0127551942,29.1460053 0.485517241,28.680678 L29.1751724,0.477288136 C29.8273319,-0.120100579 30.8436077,-0.102473494 31.473924,0.517159487 C32.1042403,1.13679247 32.1221713,2.13584324 31.5144828,2.77694915 L2.82482759,30.980339 C2.51472031,31.2855701 2.09400353,31.4572473 1.65517241,31.4576271 Z" id="Shape"></path>
				</g>
			</svg>
		</a>
	</div>
	<div class="overlay"></div>
</section>
<!-- end video modal -->
<!-- window modal -->
<div class="md-modal md-effect" id="modal-1">
	<div class="md-content">
		<div class="md-close"></div>
		<h1>Заказать карту водителя</h1>
		<p>Заполните форму и ждите звонка нашего сотрудника.<br>Совсем скоро с вами свяжутся.</p>
		<div class="form_w1">
		<input type="text" name="name" placeholder="Ваше имя" maxlength="64" autocomplete="off"><br>
		<input type="tel" name="tel" placeholder="Ваш номер телефона" maxlength="64" autocomplete="off"><br>
		<button type="submit">получить консультацию</button><br>
		<p>Нажимая на кнопку, вы принимаете <a href="#">Положение</a> и <a href="#">Согласие</a><br>на обработку персональных данных.</p>
		</div>
	</div>
</div>
<div class="md-overlay"></div>
<!-- end window modal -->
<!--Данные введенные пользователем обрабатываются кодом в mail.php-->
<form action="index.php" method="post">
    <!--Тег используется для группировки связанных элементов в форме-->
    <fieldset>
        <!--Тег задает заголовок для групповых элементов-->
        <legend>Оставьте сообщение:</legend>
        Ваше имя:
        <!--Устанавливает однострочное текстовое поле ввода:-->
        <input type="text" name="name">
        <!--Используется для полей ввода, которые должны содержать адрес электронной почты.-->
        E-mail:
        <input type="text" name="email">
        Номер телефона:
        <input type="text" name="phone">
        Сообщение:
        <!--Тег разрешает многострочный ввод текста.-->
        Текстовая область может содержать неограниченное количество символов-->
        <textarea rows="10" cols="45" name="message"></textarea>
        <!--Устанавливает кнопку для отправки данных формы в обработчик формы.-->
        <input type="submit" value="Отправить сообщение">
    </fieldset>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/video.js"></script>
<script src="js/classie.js"></script>
<script src="js/modalEffects.js"></script>
<script>
	var polyfilter_scriptpath = '/js/';
</script>
<script src="js/cssParser.js"></script>
<script src="js/css-filters-polyfill.js"></script>
</body>
</html>