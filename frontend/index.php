<?php 
include_once('includes/modal.php');
include_once('..\backend\conecta.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Loop</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/tooplate-style.css">
	<link rel="icon" type="image/x-icon" href="img/favicon/favicon-32x32.svg">
	<?php include_once('includes/musica.php')?>
	<script>
		var renderPage = true;

	if(navigator.userAgent.indexOf('MSIE')!==-1
		|| navigator.appVersion.indexOf('Trident/') > 0){
   		/* Microsoft Internet Explorer detected in. */
   		alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   		renderPage = false;
	}
	</script>
</head>

<body>
	<!-- Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	
	<!-- Page Content -->
	<div class="container-fluid tm-main">
		<div class="row tm-main-row">

			<!-- Sidebar -->
			<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

				<button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

				<div class="inner">
					<nav id="tmMainNav" class="tm-main-nav">
						<ul>
							<li>
								<a href="#intro" id="tmNavLink1" class="scrolly active" data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-1" data-page-type="carousel">
									<i class="fas fa-home tm-nav-fa-icon"></i>
									<span>Início</span>
								</a>
							</li>
							<li>
								<a href="#products" id="tmNavLink2" class="scrolly" data-bg-img="constructive_bg_02.jpg" data-page="#tm-section-2" data-page-type="carousel">
									<i class="fas fa-music tm-nav-fa-icon"></i>
									<span>Playlists</span>
								</a>
							</li>							
							<li>
							<a href="#company" class="scrolly" data-bg-img="constructive_bg_03.jpg" data-page="#tm-section-3">
									<i class="fas fa-search tm-nav-fa-icon"></i>
									<span>Pesquisa</span>
								</a>
							</li>
<<<<<<< HEAD
							<li>
							<a href="#contact" class="scrolly" data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-4">
=======
							<?php 
							$banco = new Banco;
							if (isset($_SESSION["usuario_id"])){
								$id=$_SESSION['usuario_id'];
								$query = "SELECT nome from usuario where usuario_id = $id";
								$result = mysqli_query($conn ,$query)or die(mysql_error());
								$row = mysqli_fetch_assoc($result);
								echo('<li>
								<a data-toggle="modal" data-target="#modal-perfil" class="scrolly" data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-4">
									<i class="fas fa-user tm-nav-fa-icon"></i>
									<span>Olá ' .$row['nome']. '</span>
								</a>
							</li>');
							}else{
								echo('<li>
								<a data-toggle="modal" data-target="#modal-perfil" class="scrolly" data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-4">
>>>>>>> 81a6f3dd129a0ca12bbc4080e069b9e0d20cd97d
									<i class="fas fa-user tm-nav-fa-icon"></i>
									<span>Perfil</span>
								</a>
							</li>');
							}
							?>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">

					<!-- section 1 -->
					<section id="tm-section-1" class="tm-section">						
						<div class="row mb-4">
							<header class="col-xl-12"><h2 class="tm-text-shadow">As mais tocadas</h2></header>	
							<div class="tm-img-container">
								<div class="tm-img-slider">
									<?php listar('maistocadas') ?>
								</div>
							</div>		
							<header class="col-xl-12"><h2 class="tm-text-shadow">Lançamentos</h2></header>
							<div class="tm-img-container">
								<div class="tm-img-slider">
									<?php listar('lancamentos') ?>
								</div>
							</div>		          		
						</div>						               
					</section>

					<!-- section 2 -->
					<section id="tm-section-2" class="tm-section tm-section-carousel">
						<div>
							<header class="mb-4"><h2 class="tm-text-shadow">Playlists</h2></header>		            
							<div class="tm-img-container">
								<div class="tm-img-slider">
									<a class="tm-slider-img"><img height="480" width="480" src="img/gallery-img-01.png" alt="Image" class="img-fluid"></a>
									<a class="tm-slider-img"><img height="480" width="480" src="img/gallery-img-02-tn.jpg" alt="Image" class="img-fluid"></a>
									<a class="tm-slider-img"><img height="480" width="480" src="img/gallery-img-03-tn.jpg" alt="Image" class="img-fluid"></a>
									<a class="tm-slider-img"><img height="480" width="480" src="img/gallery-img-04-tn.jpg" alt="Image" class="img-fluid"></a>
									<a class="tm-slider-img"><img height="480" width="480" src="img/gallery-img-05-tn.jpg" alt="Image" class="img-fluid"></a>
									<a class="tm-slider-img"><img height="480" width="480" src="img/gallery-img-06-tn.jpg" alt="Image" class="img-fluid"></a>
								</div>
							</div>		            		          
						</div>       		          	
					</section>

					<!-- section 3 -->
					<section id="tm-section-3" class="tm-section">						
						<div class="row mb-4">
							<header class="col-xl-12"><h2 class="tm-text-shadow">Pesquisa</h2></header>		
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">
									<i class="fab fa-apple tm-icon-circled tm-icon-media"></i>
									<div class="media-body">
										<h3>HTML Templates</h3>
										<p>We provide a variety of templates for you at no cost. Please spread a word about <a href="https://plus.google.com/+tooplate" target="_parent">Tooplate</a> website. Thank you.</p>	
									</div>
								</div>
							</div>	
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">
									<i class="fas fa-map-pin mr-4 tm-icon-circled tm-icon-media"></i>	
									<div class="media-body">
										<h3>Free Images</h3>
										<p>Photos by <a href="https://unsplash.com" target="_blank">Unsplash.com</a> website, ac ornare arcu finibus sed. Aenean ultrices nisi sit amet facilisis viverra.</p>	
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">
									<i class="fab fa-fly mr-4 tm-icon-circled tm-icon-media"></i>
									<div class="media-body">
										<h3>Phasellus eleifend</h3>
										<p>Phasellus feugiat scelerisque sapien, ac ornare arcu finibus sed. Aenean ultrices nisi sit amet facilisis viverra.</p>		
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">
									<i class="fab fa-linode mr-4 tm-icon-circled tm-icon-media"></i>
									<div class="media-body">
										<h3>Phasellus eleifend</h3>
										<p>Phasellus feugiat scelerisque sapien, ac ornare arcu finibus sed. Aenean ultrices nisi sit amet facilisis viverra.</p>	
									</div>
								</div>
							</div>			          		
						</div>						               
					</section>

					<!-- section 4 -->
					<section id="tm-section-4" class="tm-section">
						<div class="tm-bg-transparent-black tm-contact-box-pad">
							<div class="row mb-4">
								<div class="col-sm-12">
									<header><h2 class="tm-text-shadow">Contact Us</h2></header>
								</div>
							</div>
							<div class="row tm-page-4-content">
								<div class="col-md-6 col-sm-12 tm-contact-col">
									<div class="contact_message">
										<form action="#contact" method="post" class="contact-form">
											<div class="form-group">
												<input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required="">
											</div>
											<div class="form-group">
												<input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required="">
											</div>
											<div class="form-group">
												<textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required=""></textarea>
											</div>
											<button type="submit" class="btn tm-btn-submit tm-btn ml-auto">Submit</button>
										</form>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 tm-contact-col">
									<div class="tm-address-box">
										<p>Aliquam interdum, nisl sedd faucibus tempor, massa velit laoreet ipsum, et faucibus sapien magna at enim. Suspendisse a dictum tortor.</p>
										<p>Curabitur venenatis leo in augue convallis, vulputate sollicitudin ex maximus.</p>
										<address>
											120-240 Aliquam nec neque augue<br>
											Suspendisse tincidunt nunc,<br>
											vitae sagis justo 11000
										</address>
									</div>
								</div>
							</div>
						</div>
					</section>		
					<?php layoutmusica(); ?>			
				</div>	<!-- .tm-content -->
										
				<footer class="footer-link">
					<p class="tm-copyright-text">Copyright &copy; 2022 Loop Co. Ltd.</p>
				</footer>
			</div>	<!-- row -->			
		</div>
		<div id="preload-01"></div>
		<div id="preload-02"></div>
		<div id="preload-03"></div>
		<div id="preload-04"></div>

		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script> <!-- Slick Carousel -->
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/setupCarousel.js"></script>
</body>
</html>