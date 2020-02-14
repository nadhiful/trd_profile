<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Kontak | PT Tri Ratna Diesel Indonesia</title>
	<meta charset="UTF-8">
	<!-- Favicon -->
	<link href="<?php site_url();?>../assets/user/img/download.png" rel="shortcut icon"/>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php site_url();?>../assets/user/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php site_url();?>../assets/user/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php site_url();?>../assets/user/css/slicknav.min.css"/>
	<link rel="stylesheet" href="<?php site_url();?>../assets/user/css/owl.carousel.min.css"/>
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?php site_url();?>../assets/user/css/style.css"/>
</head>
<body>
	<!-- Header section  -->
	<header class="header-section clearfix">
		<div class="site-navbar">
			<!-- Logo -->
			<a href="index.html" class="site-logo">
				<img src="<?php site_url();?>../assets/user/img/logo-trd.jpg" alt="">
			</a>
			<div class="header-right">
				<div class="header-info-box">
					<div class="hib-icon">
						<img src="<?php site_url();?>../assets/user/img/icons/phone.png" alt="" class="">
					</div>
					<div class="hib-text">
						<h6>(031) 7508550</h6>
						<p>info@triratnadiesel.co.id</p>
					</div>
				</div>
				<div class="header-info-box">
					<div class="hib-icon">
						<img src="<?php site_url();?>../assets/user/img/icons/map-marker.png" alt="" class="">
					</div>
					<div class="hib-text">
						<h6>Jl. Raya Bambe KM. 19,3, Bambe</h6>
						<p>Kabupaten Gresik 23589</p>
					</div>
				</div>
			</div>
			<!-- Menu -->
			<nav class="site-nav-menu">
				<ul>
					<li><a href="<?php site_url();?>../Home">Beranda</a></li>
					<li><a href="<?php site_url();?>../Home/profil">Profil</a></li>
					<li ><a>Unit</a>
						<ul class="sub-menu">
							<li><a href="<?php site_url();?>../Home/unit_dem">Diesel Engine</a></li>
							<li><a href="<?php site_url();?>../Home/unit_mc">Machining Center</a></li>
							<li><a href="<?php site_url();?>../Home/unit_sm">Shipyard</a></li>
						</ul>
					</li>
					<li><a href="<?php site_url();?>../Home/galery">Event</a></li>
					<li><a href="<?php site_url();?>../Home/karir">Karir</a></li>
					<li  class="active"><a href="<?php site_url();?>">Kontak</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end  -->
	
	<!-- Page top section  -->
	<section class="page-top-section set-bg" data-setbg="<?php site_url();?>../assets/user/img/page-top-bg/4.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h2>Kontak</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- Map section end  -->

	<!-- Contact section   -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-text">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.9839470179245!2d112.64909501432169!3d-7.355695174413057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e2cdef1f5183%3A0x8ab4928ba4f2cb86!2sPT.%20Tri%20Ratna%20Diesel%20Indonesia!5e0!3m2!1sid!2sid!4v1580803803014!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						<br><br>
						<h6>Head Office</h6><br>
						<div class="header-info-box">
							<div class="hib-icon">
								<img src="<?php site_url();?>../assets/user/img/icons/map-marker.png" alt="" class="">
							</div>
							<div class="hib-text">
								<h6>Jl. Raya Bambe KM. 19,3, Bambe</h6>
								<p>Kabupaten Gresik 23589</p>
							</div>
						</div>
						<div class="header-info-box">
							<div class="hib-icon">
								<img src="<?php site_url();?>../assets/user/img/icons/phone.png" alt="" class="">
							</div>
							<div class="hib-text">
								<h6>(031) 7508550</h6>
								<p>info@triratnadiesel.co.id</p>
							</div>
						</div>
						<h6>Galangan Kapal (Shipyard)</h6><br>
						<div class="header-info-box">
							<div class="hib-icon">
								<img src="<?php site_url();?>../assets/user/img/icons/pollution.png" alt="" class="" height="70%" width="70%">
							</div>
							<div class="hib-text">
								<h6>Dusun Genting Timur, Tanggul Paciran</h6>
								<p>Lamongan, Jawa Timur</p>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<div class="container" id="notif">
					<form class="contact-form" method="post" action="<?php echo site_url(); ?>Home/insert">
						<div class="row">
							<div class="col-lg-6">
								<input type="text" placeholder="Your Name" name="input_name" oninvalid="" required>
							</div>
							<div class="col-lg-6">
								<input type="email" placeholder="Your Email" name="input_email" oninvalid="" required>
							</div>
							<div class="col-lg-4">
							</div>
							<div class="col-lg-12">
								<input type="text" placeholder="Subject" name="input_subject" oninvalid="" required>
								<textarea class="text-msg" placeholder="Message" name="input_message" oninvalid="" required></textarea>
								<button class="site-btn" type="submit" name="submit">send message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end  -->
	<!-- Call to action section end  -->

	<!-- Footer section -->
	<footer class="footer-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-6">
					<div class="footer-widget about-widget">
						<img src="<?php site_url();?>../assets/user/img/download.png" width="110px" heigh="110px" align="left"><br>
						<h2 style="color: #DAA520; font-family: Calibri">PT TRI RATNA DIESEL</h2>
						<h4 style="color: white; font-family: Calibri; margin-left: 5cm;">I N D O N E S I A </h4>

						<br><br>
						<div class="footer-social">
							<a href="https://www.facebook.com/triratnadieselindonesia/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/triratnadiesel/"><i class="fa fa-instagram"></i></a>
							<a href=""><i class="fa fa-dribbble"></i></a>
							<a href="https://www.youtube.com/channel/UClgr02PamnphOU2YYUOhKJQ"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-7">
					<div class="footer-widget">
						<h2 class="fw-title">Hubungi Kami</h2>
						<div class="footer-info-box">
							<div class="fib-icon">
								<img src="<?php site_url();?>../assets/user/img/icons/map-marker.png" alt="" class="">
							</div>
							<div class="fib-text">
								<p>Jl. Raya Bambe KM. 19,3, Bambe, Driyorejo, Sarirejo, Bangkingan, Kec. Lakarsantri, Kabupaten Gresik, Jawa Timur 61177</p>
							</div>
						</div>
						<div class="footer-info-box">
							<div class="fib-icon">
								<img src="<?php site_url();?>../assets/user/img/icons/phone.png" alt="" class="">
							</div>
							<div class="fib-text">
								<p>(031) 7508550<br>info@triratnadiesel.co.id</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-buttom">
			<div class="container">
			<div class="row">
				<div class="col-lg-12 order-2 order-lg-1 p-0">
					<div class="copyright" align="Center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> PT Tri Ratna Diesel Indonesia
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>
			</div>
		</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->	
	
	<!--====== Javascripts & Jquery ======-->
	<script src="<?php site_url();?>../assets/user/js/jquery-3.2.1.min.js"></script>
	<script src="<?php site_url();?>../assets/user/js/bootstrap.min.js"></script>
	<script src="<?php site_url();?>../assets/user/js/jquery.slicknav.min.js"></script>
	<script src="<?php site_url();?>../assets/user/js/owl.carousel.min.js"></script>
	<script src="<?php site_url();?>../assets/user/js/circle-progress.min.js"></script>
	<script src="<?php site_url();?>../assets/user/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php site_url();?>../assets/user/js/main.js"></script>

	</body>
</html>
