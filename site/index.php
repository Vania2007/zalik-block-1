<?php include "header.php";
include "action.php";
include "db.php";
$is_logged_in = false;
$current_user = '';
$error_message = '';

if (isset($_POST['login']) && isset($_POST['pass'])) {
    $login = test_input($_POST['login']);
    $password = test_input($_POST['pass']);

    if (check_authorize($login, $password)) {
        $is_logged_in = true;
        $current_user = $login;
    } else {
        $error_message = "Логін або пароль вказані не вірно";
    }
}
if (isset($_GET['logout']) && $_GET['logout'] == 'success') {
    $error_message = "Ви вийшли з системи";
}
$tours_display = $tours;

?>
<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="intro-wrap">
						<h1 class="mb-5" style="font-size: 44px;"><span class="d-block">У нас є</span> Поїздки до <span class="typed-words"></span></h1>
						<div class="row">
							<div class="col-12">
							<form action="tours.php" method="get" class="form">
    							<div class="row mb-2">
        							<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
            							<select name="country" class="form-control custom-select">
                							<option value="">Оберіть країну</option>
                							<option value="Франція">Франція</option>
                							<option value="Італія">Італія</option>
                							<option value="Норвегія">Норвегія</option>
                							<option value="Швейцарія">Швейцарія</option>
                							<option value="Японія">Японія</option>
                							<option value="Канада">Канада</option>
                							<option value="Греція">Греція</option>
            							</select>
        							</div>
        							<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
            							<input type="text" class="form-control" name="daterange">
        							</div>
    							</div>
    							<div class="row align-items-center">
        							<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
            							<input type="submit" class="btn btn-primary btn-block mt-3" value="Пошук">
        							</div>
    							</div>
							</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="slides">
						<img src="./assets/images/hero-slider-1.jpg" alt="Image" class="img-fluid active">
						<img src="./assets/images/hero-slider-2.jpg" alt="Image" class="img-fluid">
						<img src="./assets/images/hero-slider-3.jpg" alt="Image" class="img-fluid">
						<img src="./assets/images/hero-slider-4.jpg" alt="Image" class="img-fluid">
						<img src="./assets/images/hero-slider-5.jpg" alt="Image" class="img-fluid">
						<img src="./assets/images/hero-slider-6.jpg" alt="Image" class="img-fluid">
						<img src="" alt="Image" class="img-fluid">
						<img src="./assets/images/hero-slider-8.jpg" alt="Image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="untree_co-section">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">Наші послуги</h2>
					<p>Ми пропонуємо тури на будь-який смак: від сімейного відпочинку до ексклюзивних подорожей. Обирайте свій ідеальний маршрут та довірте організацію вашої мрії професіоналам!</p>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-lg-4 order-lg-1">
					<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('./assets/images/hero-slider-5.jpg');"></div></div></div>
				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-house display-4 text-primary"></span>
							<h3>Прекрасні готелі</h3>
							<p class="mb-0">Ми підбираємо для вас комфортні та перевірені готелі, щоб ваша подорож була ідеальною.</p>
						</div>
					</div>

					<div class="feature-1 ">
						<div class="align-self-center">
							<span class="flaticon-restaurant display-4 text-primary"></span>
							<h3>Перевірені Ресторани & Кафе</h3>
							<p class="mb-0">Ми рекомендуємо лише ті заклади, які гарантовано подарують вам незабутні смаки.</p>
						</div>
					</div>

				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-mail display-4 text-primary"></span>
							<h3>Надійне страхування</h3>
							<p class="mb-0">Забезпечте себе та своїх близьких завдяки нашому надійному туристичному страхуванню.</p>
						</div>
					</div>

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-phone-call display-4 text-primary"></span>
							<h3>24/7 Підтримка</h3>
							<p class="mb-0">Наша команда завжди на зв’язку, щоб допомогти вам у будь-який час і будь-де.</p>
						</div>
					</div>				</div>

			</div>
		</div>
	</div>

	<div class="untree_co-section count-numbers py-5">
		<div class="container">
			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="9313">0</span>
						</div>
						<span class="caption">Кількість подорожей</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="8492">0</span>
						</div>
						<span class="caption">Кількість клієнтів</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="100">0</span>
						</div>
						<span class="caption">Кількість працівників</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="120">0</span>
						</div>
						<span class="caption">Кількість країн</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="untree_co-section">
		<div class="container">
			<div class="row text-center justify-content-center mb-5">
				<div class="col-lg-7"><h2 class="section-title text-center">Популярні місця подорожей</h2></div>
			</div>

			<div class="owl-carousel owl-3-slider">

				<div class="item">
					<a class="media-thumb" href="./assets/images/hero-slider-1.jpg" data-fancybox="gallery">
						<div class="media-text">
						</div>
						<img src="./assets/images/hero-slider-1.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb" href="./assets/images/hero-slider-2.jpg" data-fancybox="gallery">
						<div class="media-text">
						</div>
						<img src="./assets/images/hero-slider-2.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb" href="./assets/images/hero-slider-3.jpg" data-fancybox="gallery">
						<div class="media-text">
						</div>
						<img src="./assets/images/hero-slider-3.jpg" alt="Image" class="img-fluid">
					</a>
				</div>


				<div class="item">
					<a class="media-thumb" href="./assets/images/hero-slider-4.jpg" data-fancybox="gallery">
						<div class="media-text">
						</div>
						<img src="./assets/images/hero-slider-4.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb" href="./assets/images/hero-slider-5.jpg" data-fancybox="gallery">
						<div class="media-text">
						</div>
						<img src="./assets/images/hero-slider-5.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb" href="./assets/images/hero-slider-6.jpg" data-fancybox="gallery">
						<div class="media-text">
						</div>
						<img src="./assets/images/hero-slider-6.jpg" alt="Image" class="img-fluid">
					</a>
				</div>
				<div class="item">
					<a class="media-thumb" href="./assets/images/hero-slider-7.jpg" data-fancybox="gallery">
						<div class="media-text">
						</div>
						<img src="./assets/images/hero-slider-7.jpg" alt="Image" class="img-fluid">
					</a>
				</div>
				<div class="item">
					<a class="media-thumb" href="./assets/images/hero-slider-8.jpg" data-fancybox="gallery">
						<div class="media-text">
						</div>
						<img src="./assets/images/hero-slider-8.jpg" alt="Image" class="img-fluid">
					</a>
				</div>
			</div>

		</div>
	</div>
	<div class="py-5 cta-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h2 class="mb-2 text-white">Давайте досліджувати найкраще. Зв'яжіться з нами зараз</h2>
					<p class="mb-0 mt-4"><a href="./contacts.php" class="btn btn-outline-white text-white btn-md font-weight-bold">Зв'яжіться з нами</a></p>
				</div>
			</div>
		</div>
	</div>
<?php include "footer.php";?>