<?php
if (!isset($inicio)) {
	$inicio = false;
}
?>


<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Avante - <?php echo $nombre_pagina ?? '';  ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta http-equiv="Content-Type" content="text/html"> -->
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="90x90" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/images/fav-icon/logo_favicon.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/bootstrap.min.css" type="text/css" media="all" />
	<!-- Jquery UI Tab css -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/jquery-ui.min.css" type="text/css" media="all">
	<!-- Uikit  CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/uikit.min.css" type="text/css" media="all" />
	<!-- Mobile-Menu -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/mobile-menu.css" type="text/css" media="all" />
	<!-- carousel CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/owl.carousel.min.css" type="text/css" media="all" />
	<!-- nivo-slider CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/nivo-slider.css" type="text/css" media="all" />
	<!-- animate CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/animate.css" type="text/css" media="all" />
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/animated-text.css" type="text/css" media="all" />
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/all.min.css" type="text/css" media="all" />
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/flaticon.css" type="text/css" media="all" />
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/theme-default.css" type="text/css" media="all" />
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/meanmenu.min.css" type="text/css" media="all" />
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/app.css" type="text/css" media="all" />
	<!-- transitions CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/owl.transitions.css" type="text/css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/venobox/venobox.css" type="text/css" media="all" />
	<!-- widget CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/widget.css" type="text/css" media="all" />
	<!-- Swiper Slider -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/swiper.min.css" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/responsive.css" type="text/css" media="all" />
	<!--Animated Headline-->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/jquery.animatedheadline.css" type="text/css" media="all">
	<!--Simple Line Icon-->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/simple-icons.min.css" type="text/css" media="all">
	<!--Styles for Categories-->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/categories.css" type="text/css" media="all">
	<!--Styles for Products Section-->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/products.css" type="text/css" media="all">
	<!--Styles for Single Product Section-->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/product.css" type="text/css" media="all">
	<!--Styles for Single Product Section-->
	<link rel="stylesheet" href="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/css/index.css" type="text/css" media="all">

	<!-- modernizr js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/vendor/modernizr-3.5.0.min.js"></script>

</head>

<body>
	<!-- Loder Start -->
	<div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>
	<!-- Loder End -->


	<?php if ($inicio) : ?>
		<!-----START HEADER TOP SECTION----->
		<div class="header-top-area d-sm-none d-md-none d-lg-block">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-8">
						<div class="header-top-left-items">
							<div class="header-top-left-single-item">
								<a href="#">
									<div class="header-top-left-icon">
										<span>
											<i class="far fa-envelope"></i>
											ventas@avantesolucionestec.com.co
										</span>
									</div>
								</a>
							</div>
							<div class="header-top-left-single-item">
								<a href="#">
									<div class="header-top-left-icon">
										<span>
											<i class="fa fa-map-marker-alt"></i>
											Carrera 97 #24 - 32 / Bogota
										</span>
									</div>
								</a>
							</div>
							<div class="header-top-left-single-item">
								<a href="#">
									<div class="header-top-left-icon">
										<span>
											<i class="fas fa-phone"></i>
											+57 310 337 9636
										</span>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="header-top-right-items text-right">
							<div class="header-top-right-icon-area">
								<ul>
									<li>
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-linkedin-in"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<!-----START NAV SECTION----->
	<div class="mobile-menu-top-logo">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="top-logo d-lg-none">
						<a href="/"><img src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/images/logo-1.png" alt="logo"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header id="sticky-header">
		<div class="container">
			<div class="menu-wrapper align-items-center">
				<div class="mobile-logo">
					<a href="/"><span class="logo-txt"></span></a>
				</div>
				<div class="logo">
					<a href="/">
						<img src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/images/logo-1.png" alt="logo">
						<img src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/images/logo-2.png" alt="logo">
					</a>
				</div>
				<nav>
					<ul>
						<li>
							<a href="/">Inicio<?php echo $inicio ? '<i class="fas fa-angle-down"></i><span><i class="fas fa-angle-right"></i></span>' : ''; ?></a>

							<?php if ($inicio) : ?>
								<ul class="sub-menu">
									<li><a href="#quienes-somos">Quienes Somos</a></li>
									<li><a href="#servicios">Servicios</a></li>
									<li><a href="#productos">Productos</a></li>
									<li><a href="#aliados">Nuestros Aliados</a></li>
									<!-- <li><a href="#testimoniales">Testimoniales</a></li> -->
									<li><a href="#blog">Blog</a></li>
								</ul>
							<?php endif; ?>
						</li>
						<li>
							<a href="/Quienes-somos">Quiénes Somos</a>
							<!-- <ul class="sub-menu">
							</ul> -->
						</li>
						<li>
							<a href="/Productos">Productos<i class="fas fa-angle-down"></i><span><i class="fas fa-angle-right"></i></span></a>
							<ul class="sub-menu">
								<?php foreach ($categorias as $categoria) : ?>
									<li>
										<a href="/Productos-categoria?id=<?php echo $categoria->id; ?>">
											<?php echo $categoria->nombre; ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</li>
						<li>
							<!-- <a href="/Blog">Blog</a> -->
						</li>
						<li><a href="/Contacto">Contacto</a></li>
					</ul>
					<div class="header-src-btn">
						<div class="search-btn search-box-outer"><i class="fas fa-search"></i></div>
					</div>
					<div class="btn-common btn-about btn-quote">
						<a href="/Cotizar"> Cotizar <i class="fas fa-angle-right"></i></a>
					</div>
			</div>
			<div class="mm-social-icon d-lg-none mt-40">
				<span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
				<span><a href="#"><i class="fab fa-twitter"></i></a></span>
				<span><a href="#"><i class="fab fa-pinterest"></i></a></span>
				<span><a href="#"><i class="fab fa-linkedin-in"></i></a></span>
			</div>
			</nav>
		</div>
		</div>
	</header>
	<!-- ============================================================== -->
	<!-- Start - Mobile-Menu- Section -->
	<!-- ============================================================= -->
	<div class="mobile-menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="logo-container">
						<div class="header-logo">
							<a class="mobile-logo" href="/"><img src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/images/logo-2.png" alt=""></a>
						</div>
						<div class="menu-toggle">
							<div class="mobile-icon">
								<i class="fas fa-bars"></i>
								<i class="fas fa-times"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-12">
					<div class="header-menu2">
						<ul>
							<li class="expand">
								<a class="menu_hide8" href="<?php echo !$inicio ? '/' : '#'; ?>">Home
									<?php if ($inicio) : ?>
										<div class="menu-toggle2">
											<div class="icon2">
												<span class="plus">+</span>
												<span class="minus">-</span>
											</div>
										</div>
								</a>
								<ul class="menu_open8 sub-menu2">
									<li><a href="#quienes-somos">Quienes Somos</a></li>
									<li><a href="#servicios">Servicios</a></li>
									<li><a href="#productos">Productos</a></li>
									<li><a href="#aliados">Nuestros Aliados</a></li>
									<li><a href="#testimoniales">Testimoniales</a></li>
									<li><a href="#blog">Blog</a></li>
								</ul>
							<?php endif; ?>
							</li>
							<li class="expand"><a class="menu_hide9" href="/Quienes-somos">Quiénes Somos</li>
							<li class="expand">
								<a class="menu_hide10" href="#">Productos
									<?php if ($categorias) : ?>
										<div class="menu-toggle2">
											<div class="icon2">
												<span class="plus">+</span>
												<span class="minus">-</span>
											</div>
										</div>
								</a>
								<?php foreach ($categorias as $categoria) : ?>
									<ul class="menu_open10 sub-menu2">
										<li>
											<a href="/Productos-categoria?id=<?php echo $categoria->id; ?>">
												<?php echo $categoria->nombre; ?>
											</a>
										</li>
									</ul>
								<?php endforeach; ?>
							<?php endif; ?>
							</li>
							<!-- <li class="expand"><a class="menu_hide11" href="/Blog">Blog</li> -->
							<li class="expand"><a class="menu_hide11" href="/Contacto">Contacto</a></li>
							<li class="expand"><a class="menu_hide11" href="/Cotizar">Cotizar</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php echo $contenido; ?>

	<!-----START FOOTER SECTION----->
	<div class="footer pt-60 pb-70">
		<div class="container">
			<div class="row align-items-center footer-beetween">
				<div class="col-md-6 col-lg-3">
					<div class="widget">
						<div class="about-company">
							<div class="footer-logo mb-10">
								<img src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/images/logo-1.png" alt="Footer-logo">
								<!-- <h2>Avante</h2> -->
							</div>
							<p>Comprometidos con la calidad, innovación y excelencia, en Avante trabajamos para ofrecer soluciones confiables en fibra óptica y redes. Nos impulsa la pasión por conectar personas, negocios e ideas, con un enfoque en integridad y servicio al cliente.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="widget">
						<div class="footer-quick-link">
							<div class="footer-widget-title">
								<h5>Listado de Links</h5>
							</div>
							<div class="footer-helpful-links">
								<ul>
									<li><a href="/">Home</a></li>
									<li><a href="/Contacto">Contacto</a></li>
									<li><a href="/Quienes-somos">¿Quienes Somos?</a></li>
									<li><a href="/Productos">Productos</a></li>
									<!-- <li><a href="/Blog">Blog</a></li> -->
									<li><a href="/Cotizar">Cotizar</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="widget">
						<div class="footer-contact">
							<div class="footer-widget-title">
								<h5>Nuestra Oficina</h5>
							</div>
							<p><b>Dirección: </b>Cra. 97 #24 32, Bogotá</p>
							<p><b>Teléfono: </b> +57 310 337 9636</p>
							<p><b>Email: </b> ventas@avantesolucionestec.com.co</p>
							<div class="footer-social-icon d-flex">
								<a href="#"><span>Síguenos en:</span></a>
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-----START FOOTER COPYRIGNT SECTION----->
	<div class="footer-copyright-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="footer-copyright-text">
						<p>Copyright &copy; Avante S.A.S 2025 </p>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="footer-copyright-link">
						<ul>
							<!-- <li><a href="#">Terms & Condition</a></li> -->
							<!-- <li><a href="#">Privacy Policy</a></li> -->
							<li><a href="/Contacto">Contacto</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!----- Start Search Popup Area ----->
	<!--==================================================-->
	<div class="search-popup">
		<button class="close-search style-two"><i class="fas fa-times"></i></button>
		<button class="close-search"><i class="fas fa-arrow-up"></i></button>
		<form method="post" action="#">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button type="submit"><i class="fas fa-search"></i></button>
			</div>
		</form>
	</div>
	<!--==================================================-->
	<!----- Start Search Popup Area ----->
	<!--==================================================-->

	<!-----TO-TOP BUTTON ----->
	<!--===================================================-->
	<button id="to-top">
		<i class="fa fa-angle-up"></i>
	</button>

	<!-- jquery js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/vendor/jquery-3.2.1.min.js"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/bootstrap.min.js"></script>
	<!-- carousel js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/owl.carousel.min.js"></script>
	<!-- counterup js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/jquery.counterup.min.js"></script>
	<!-- circle progress js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/circle-progress.min.js"></script>
	<!-- waypoints js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/waypoints.min.js"></script>
	<!-- appear js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/jquery.appear.js"></script>
	<!-- wow js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/wow.min.js"></script>
	<!-- Mobile-Menu -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/mobile-menu.js"></script>
	<!-- imagesloaded js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/imagesloaded.pkgd.min.js"></script>
	<!-- venobox js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/venobox/venobox.js"></script>
	<!-- ajax mail js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/ajax-mail.js"></script>
	<!--  animated-text js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/animated-text.js"></script>
	<!-- venobox min js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/venobox/venobox.min.js"></script>
	<!-- isotope js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/isotope.pkgd.min.js"></script>
	<!-- jquery nivo slider pack js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/jquery.nivo.slider.pack.js"></script>
	<!-- jquery meanmenu js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/jquery.meanmenu.js"></script>
	<!-- jquery scrollup js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/jquery.scrollUp.js"></script>
	<!-- uikit js -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build//js/uikit.min.js"></script>
	<!-- Jquery UI Tab JS -->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/jquery-ui.min.js"></script>
	<!--Swiper Slider-->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/swiper.min.js"></script>
	<!--Animated Headline-->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/jquery.animatedheadline.min.js"></script>
	<!--theme js-->
	<script type="text/javascript" src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/js/theme.js"></script>
	<!--jquery js-->
</body>

</html>