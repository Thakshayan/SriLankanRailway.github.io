<!DOCTYPE html>
<?php 
  ob_start();
  session_start();
  include_once 'autoloader.php';
?>
<html lang="en">
<head>
<title>Welcome to | Srilanka Railway </title>
<link link="icon" href="images/logo_title.png" type="image/png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/logo_title.png">

<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link rel="stylesheet" type="text/css" href="styles/search.css">

</head>
<body>
<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div style="display:flex">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
								<div class="logo"><a href="index.php">Srilanka Railway</a></div>
								<nav class="main_nav">
									<ul class="d-flex flex-row align-items-start justify-content-start">
										<li class="active"><a href="index.php">Home</a></li>
										<li><a href="about.php">About us</a></li>
										<li><a href="services.php">Location</a></li>
										<li><a href="complains.php">Complains</a></li>
									</ul>
								</nav>
								<div class="header_phone ml-auto">Call us:  11 4 600 111</div>

								<!-- Hamburger -->

								<div class="hamburger ml-auto">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<?php
				// check already sign 
				$passengerUser = @unserialize($_SESSION['passenger']);
				if ($passengerUser instanceof Passenger) {
					# code...
					echo "<div style='margin:auto;'>
							<div class='button'><a href='profile/'>Hi! &nbsp;&nbsp;".$passengerUser->getName()."</a></div>
				  		</div>";
				} else {
					echo "<div style='margin:auto;'>
							<div class='button button_2'><a href='signup/'> Sign in</a></div>
						  </div>";
				}
				
			?>		
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href="index.php">Srilanka Railway</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="services.php">Location</a></li>
				<li><a href="complains.php">Complains</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<div class="menu_phone ml-auto">Call us : 11 4 600 111</div>
			<?php
				// check already sign 
				$passengerUser = @unserialize($_SESSION['passenger']);
				if ($passengerUser instanceof Passenger) {
					# code...
					echo "<div class='button'><a href='profile/'>Hi! &nbsp;&nbsp;".$passengerUser->getName()."</a></div>";
				} else {
					echo "<div class='button button_2'><a href='signup/'> Sign in</a></div>";
				}
				
			?>	
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/Cover/Home.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Let us start our journey !...</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/Cover/About.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Let us start our journey !...</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/Cover/Complain.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Let us start our journey !...</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="home_page_nav">
				<ul class="d-flex flex-column align-items-end justify-content-end">
					<li><a href="#" data-scroll-to="#testimonials">Quote<span>01</span></a></li>
					<li><a href="#" data-scroll-to="#destinations">Destinations<span>02</span></a></li>
					<li><a href="#" data-scroll-to="#suggestionID">Suggestion<span>03</span></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Search -->

	<?php
		include "search.php";
	?>

	<!-- Intro -->

	<div class="intro">

		<div class="intro_background"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_container">
						<div class="row">

							<!-- Intro Item -->
							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="images/beach.svg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">Top Destinations</div>
									</div>
								</div>
							</div>

							<!-- Intro Item -->
							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="images/wallet.svg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">The Best Prices</div>
									</div>
								</div>
							</div>

							<!-- Intro Item -->
							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="images/suitcase.svg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">Amazing Services</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials" id="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/Cover/quote.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">Simple Quoye from</div>
					<div class="section_title"><h2>Agatha Christie</h2></div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="testimonials_slider_container">
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">Trains are wonderful... to travel by train is to see nature and human beings, towns and churches and rivers, in fact, to see life.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Destinations -->

	<div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">simply amazing places</div>
					<div class="section_title"><h2>Popular Destinations</h2></div>
				</div>
			</div>
			<div class="row destinations_row">
				<div class="col">
					<div class="destinations_container item_grid">

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination/destination_1.jpg" alt="">
								
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="javascript:void(0)">KANDY TO ELLA</a></div>
								<div class="destination_subtitle"><p> MOST SCENIC TRAIN RIDE IN SRI LANKA</p></div>
								<div class="destination_price"></div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination/destination_2.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="javascript:void(0)">Coastal line induruwa</a></div>
								<div class="destination_subtitle"><p>Induruwa Beach,Turtle Conservation...</p></div>
								<div class="destination_price"></div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination/destination_3.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="javascript:void(0)">Nuwara Eliya from Kandy</a></div>
								<div class="destination_subtitle"><p>Tour Ramboda Falls, Field Tea Factory</p></div>
								<div class="destination_price"></div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination/destination_4.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="javascript:void(0)">Negombo to Pinnawala</a></div>
								<div class="destination_subtitle"><p>Watch the elephants bathe in the lake</p></div>
								<div class="destination_price"></div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination/destination_5.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="javascript:void(0)">North to the Centre</a></div>
								<div class="destination_subtitle"><p> long one and traverses all types of terrain</p></div>
								<div class="destination_price"></div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination/destination_6.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="javascript:void(0)">Talawakelle</a></div>
								<div class="destination_subtitle"><p>Waterfalls: Devon Falls, St. Claire Falls</p></div>
								<div class="destination_price"></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="suggestionID"></div>
	<!--------------------------------------------------------------------------------------------------------- Footer -------------------------------------------------------->
	<?php
	 	include 'footer.php';
	?>

	
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/common.js"></script>
</body>
</html>