<!DOCTYPE html>
<?php 
  ob_start();
  include_once 'autoloader.php';
?>
<html lang="en">
<head>
<title>About Us | Srilanka Railway </title>
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

<link rel="stylesheet" type="text/css" href="styles/Header.css">
<link rel="stylesheet" type="text/css" href="styles/Header_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">

</head>
<body>

	<div class="super_container">
	<!------------------------------------------------------ Header ---------------------------------->

	<?php
		include "Header.php";
	?>

	<!------------------------------------------------------- About ---------------------------------->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title"><h2>About us</h2></div>
					<div class="text_highlight">Sri Lankan Railway Station</div>
				</div>
			</div>

			
			<div class="row about_row">
				<div class="col-lg-6">
					<div class="about_content">
						<div class="about_text">
							<p align="justify">Rail was introduced in Sri Lanka in 1864 to transport coffee from plantations in the hill country district of Kandy to the port city of Colombo on its way to Europe and the world market. 
											   The coffee blight of 1871 destroyed many a fine plantation and tea replaced coffee. With the development of tea plantations in the 1880s, the joint stock companies swallowed up the former individual proprietorship of the coffee era.
											   Under corporate ownership and management control by companies, the process of production of tea became more sophisticated and needed more and more railways built to the Kandyan highlands. 
											   To send tea to Colombo and to transport labour, machinery, manure, rice and foodstuff, etc to Kandy, another 100 miles of railways were constructed in the tea planting districts to serve the expanding tea domain.To serve the coconut plantations flourishing in the west, south west and north west coastal areas of the country, and the wet inland rubber plantations below the tea belt, railway lines were built in the wake of these agricultural developments.
											    Thereafter, the need for cheap and safe travel in order to open up the hinterland of the country led to the expansion of the railway.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_image"><img src="images/Cover/aboutIntro.jpg" alt="Intro Picture here"  class = "col-md-12"></div>
				</div>
				<p align="justify" class="col-lg-12" style="margin-top:17px;">An extension of the Main Line to Kandy was made north to the ancient city of Anuradhapura, going further north to Kankesanturai and west to Talaimannar to connect the island with South India by ferry, to bring Indian labour for the tea and rubber plantations, and also import rice and other food stuffs not indigenously produced in sufficient quantities.
										Towards the east, there was little economic justification to lay a line to the dry zone in that direction, but it became strategically worthwhile to lay a line to the natural harbour of Trincomalee and also connect it to the provincial capital of Batticaloa. These lines were laid with light (21 kg) section rails, as was the narrow gauge section to serve the rubber plantations east of Colombo, known as the Kelani Valley Line. Up country, a similar branch line was laid from Nanu Oya on the Main Line through very difficult terrain to serve the tea plantations around Nuwara Eliya. Track alignment was defined in this section about 140 years ago, when economic considerations were vastly different. The railways achieved modal superiority with speeds of 25 to 40 kmph in the hill country and 65 to 80 in the low country and civil engineering criteria was influenced by the economic need to minimize cuts and fills, permitting gradients to 2 to 3 % and minimizing bridge lengths. As a result, the alignment here is winding with very sharp curves.
										In the early days of the railways, the bulk of the freight was carried to the port of Colombo and as the port expanded, rail lines were laid to serve every pier.</p>
			</div>
		</div>
	</div>

	<!-- Why Choose Us -->

	<div class="why">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/Cover/MV.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row why_row">
				
				<!-- Why item -->
				<div class="col-lg-6 why_col">
					<div class="why_item">
						<div class="why_image">
							<img src="images/Cover/mission.jpg" alt="Mission icon">
							<div class="why_icon d-flex flex-column align-items-center justify-content-center">
								<i class="fa fa-line-chart" aria-hidden="true" ></i>
							</div>
						</div>
						<div class="why_content text-center">
							<div class="why_title">Mission</div>
							<div class="why_text">
								<p>Provision of safe, reliable and punctual rail transport service for both passenger and freight traffic, economically and efficiently.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Why item -->
				<div class="col-lg-6 why_col">
					<div class="why_item">
						<div class="why_image">
							<img src="images/Cover/vision.jpg" alt="Vision Icon">
							<div class="why_icon d-flex flex-column align-items-center justify-content-center">
								<i class="fa fa-eye"  aria-hidden="true"></i>
							</div>
						</div>
						<div class="why_content text-center">
							<div class="why_title">Vision</div>
							<div class="why_text">
								<p>To be the most sought after land transport provider in Sri Lanka, providing unsurpassed value to our stakeholders.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<div class="col-lg-4 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/icons/train.svg" alt="track icon here" class="lightOpacity"></div>
						<div class="milestone_counter" data-end-value="396">0</div>
						<div class="milestone_text">Trains</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-4 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/icons/track.svg" alt="track icon here"  class="lightOpacity"></div>
						<div class="milestone_counter" data-end-value="1561">0</div>
						<div class="milestone_text">Track(km)</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-4 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/icons/group.svg" alt="Work Force icon here"  class="lightOpacity"></div>
						<div class="milestone_counter" data-end-value="17634">0</div>
						<div class="milestone_text">Work Force</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<!---------------------------------------------------- Footer ---------------------------------------------------------------------->

	<?php
		include 'footer.php';
	?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about.js"></script>
<script src="js/common.js"></script>
</body>
</html>