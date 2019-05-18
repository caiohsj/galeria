<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Photo Gallery HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Photo Gallery HTML Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="views/res/site/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="application/views/res/site/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="application/views/res/site/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="application/views/res/site/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="application/views/res/site/css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="application/views/res/site/css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Top right elements -->
	<div class="spacial-controls">
		<div class="search-switch"><img src="application/views/res/site/img/search-icon.png" alt=""></div>
		<div class="nav-switch-warp">
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
		</div>
	</div>
	<!-- Top right elements end -->

	<div class="main-warp">
		<!-- header section -->
		<header class="header-section">
			<div class="header-close">
				<i class="fa fa-times"></i>
			</div>
			<div class="header-warp">
				<a href="" class="site-logo">
					<img src="<?php echo $configs["logo"]; ?>" alt="">
				</a>
				<img src="application/views/res/site/img/menu-icon.png" alt="" class="menu-icon">
				<ul class="main-menu">
					<?php if(isset($page_active) && $page_active === "home"){?>
					<li class="active"><a href="/">Home</a></li>
					<?php } else { ?>

					<li class=""><a href="/">Home</a></li>

					<?php }?>

					<?php if(isset($page_active) && $page_active === "photos"){?>
					<li class="active"><a href="/photos">Gallery</a></li>
					<?php } else {?>
					<li class=""><a href="/photos">Gallery</a></li>
				<?php }?>
					<li><a href="./gallery-single.html">Single gallery</a></li>
					<li><a href="./blog.html">Blog</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
				<div class="social-links-warp">
					<div class="social-links">
						<a href=""><i class="fa fa-behance"></i></a>
						<a href=""><i class="fa fa-dribbble"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
					</div>
					<div class="social-text">Find us on</div>
				</div>
			</div>
			<div class="copyright">Colorlib 2018  @ All rights reserved</div>
		</header>
		<!-- header section end -->
		<!-- Search model -->
		<div class="search-model">
			<div class="h-100 d-flex align-items-center justify-content-center">
				<div class="search-close-switch">x</div>
				<form class="search-moderl-form">
					<input type="text" id="search-input" placeholder="Search here.....">
				</form>
			</div>
		</div>
		<!-- Search model end -->