<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Test</title>
	<script src="jquery-1.12.4.js"></script>
	<script src="jquery-ui.js"></script>
	<script src="slider.js"></script>
	<link rel="stylesheet" type="text/css" href="jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="slider.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 999,
      values: [ 99, 499 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
	</script>
</head>
<body>
<div class="topbar">
	<div class="logo"></div>
	<div class="menu"></div>
</div>
<div class="concept">
	<div class="content">
	<h1>МЫ<br>СОЗДАЕМ<br>КОНЦЕПЦИЮ</h1>
	<p>Мы верим в то, что удобный и комфортный<br>для понимания пользователя дизайн,<br>помогает продавать больше</p>
	<div class="button">Больше информации<div class="arrow"></div></div>
	</div>
</div>
<div class="project">
	<h1>ПРОЕКТЫ</h1>
	<div class="projects">
		<div class="pro1"></div>
		<div class="pro2"></div>
		<div class="pro3"></div>
		<div class="pro4"></div>
		<div class="pro5"></div>
		<div class="pro6"></div>
		<div class="pro7"></div>
		<div class="pro8"></div>
		<div class="pro9"></div>
		<div class="pro10"></div>
		<div class="pro11"></div>
		<div class="pro12"></div>
	</div>
</div>
<div class="reward">
	<div class="content">
	<div class="arm"></div>
	<h1>НАШИ<br>НАГРАДЫ</h1>
	<div class="rewards">
		<div class="rewmin">1 место в категории "Дизайн" на Youdo</div>
		<div class="rewmin">ТОП 20 среди Digital Community lnk за 2019 год по версии Gubol Recklam LA</div>
		<div class="rewmin">С 2018 года входим в золотую сотню Digital Community Russia</div>
		<div class="rewmin">ТОП рейтинга influence по версии MadRed design</div>
	</div>
	</div>
</div>
<div class="read">
	<div class="content">
	<h1>ЧИТАЙТЕ<br>НАС</h1>
	<div>
		<div class="reads">
			<div class="readen">
				<div class="read_f1">
					<div class="button">Читать статью<div class="arrow"></div></div>
				</div>
				<h2>Lorem ipsum dolor sit amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus tellus arcu quis nisl, in.<br>Ipsum nullam orci.</p>
				<h3>25 сентября 2020</h3>
			</div>
			<div class="readen">
				<div class="read_f2">
					<div class="button">Читать статью<div class="arrow"></div></div>
				</div>
				<h2>Lorem ipsum dolor sit amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus tellus arcu quis nisl, in.<br>Ipsum nullam orci.</p>
				<h3>20 сентября 2020</h3>
			</div>
		</div>
	</div>
	<div class="button_b">Все статьи</div>
	</div>
</div>
<div class="case">
	<div class="content">
		<h1>КЕЙСЫ</h1>
		<div class="cases">
			<div class="owl-carousel owl-theme">
				<div class="case1">
					<div class="case_data">
					<h2>Бренд “Littlechamp”</h2>
					<p>Концепция<br>Сайт<br>Аккаунт в инстаграм<br><br>Итог: Новый обьлик и новые клиенты</p>
					</div>
				</div>
				<div class="case1">
					<div class="case_data">
					<h2>Бренд “Littlechamp”</h2>
					<p>Концепция<br>Сайт<br>Аккаунт в инстаграм<br><br>Итог: Новый обьлик и новые клиенты</p>
					</div>
				</div>
				<div class="case1">
					<div class="case_data">
					<h2>Бренд “Littlechamp”</h2>
					<p>Концепция<br>Сайт<br>Аккаунт в инстаграм<br><br>Итог: Новый обьлик и новые клиенты</p>
					</div>
				</div>
				<div class="case1">
					<div class="case_data">
					<h2>Бренд “Littlechamp”</h2>
					<p>Концепция<br>Сайт<br>Аккаунт в инстаграм<br><br>Итог: Новый обьлик и новые клиенты</p>
					</div>
				</div>
				<div class="case1">
					<div class="case_data">
					<h2>Бренд “Littlechamp”</h2>
					<p>Концепция<br>Сайт<br>Аккаунт в инстаграм<br><br>Итог: Новый обьлик и новые клиенты</p>
					</div>
				</div>
			</div>
		</div>
		<div class="button_c">Все работы</div>
	</div>
</div>
<div class="order">
	<div class="content">
	<h1>ЗАКАЗАТЬ<br>ПРОЕКТ</h1>
		<form class="form">
		<label>Меня зовут:</label><input type="pattern" placeholder="Иван Иванов"></input><br>
		<label>Я хочу заказать:</label><input readonly><select name="work">
			<option value="1">Разработку сайта</option>
			<option value="2">Разработку сайта</option>
			<option value="3">Разработку сайта</option>
			<option value="4">Разработку сайта</option>
		</select><br>
		<label>Мой бюджет:</label><div id="slider-range"></div><input id="amount" readonly><br>
		<label>Напишите мне на:</label><input type="email" placeholder="Email"></input><br>
		<label>Или наберите по номеру:</label><input type="tel" placeholder="+7 (          )       -    -"></input><br>
		<button>Отправить</button>
		</form>
	</div>
</div>
<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 246,
                nav: false,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  900: {
                    items: 3
                  },
                  3035: {
                    items: 5
                  }
                }
              })
            })
</script>
</body>
</html>