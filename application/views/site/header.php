<!DOCTYPE html >
<!--
Template Name: News Magazine
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<?php $settings = $this->adminModel->getsettings(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $settings->sitename; ?></title>
<meta name="description" content="<?php echo $settings->description; ?>">
<meta name="keywords" content="<?php echo $settings->keywords; ?>">
<meta name="copyright" content="<?php echo $settings->copyright; ?>">
<meta name="web_author" content="<?php echo $settings->author; ?>"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-widht,initial-scale=1" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url(); ?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">

<?php if(isset($categorypage) && $categorypage) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/category.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/category_responsive.css">
<?php } else if(isset($newspage) && $newspage) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/post.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/post_responsive.css">
<?php } else { ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/responsive.css">
<?php } ?>

</head>
<body>
<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo"><a href="/"><img alt="sarkaree" src="<?php echo base_url(); ?>assets/logo.png"></a></div>
						<nav class="main_nav">
							<ul>
								<li class="active"><a href="/">Feeds</a></li>
								<li><a href="/page/1">Trending</a></li>
								<li><a href="/page/2">Handpicked</a></li>
								<li><a href="/page/3">Videos</a></li>
								<li><a href="/page/4">Articles</a></li>
								<li><a href="/page/5">More</a></li>
							
							</ul>
						</nav>
						<div class="search_container ml-auto">
							<div class="weather">
								<!--img class="weather_icon" src="<?php echo base_url(); ?>assets/images/cloud.png" alt=""-->
								<div class="temperature">Login</div>
								
							</div>
							<form action="#">
								<input type="search" class="header_search_input" required="required" placeholder="Type to Search...">
								<img class="header_search_icon" src="<?php echo base_url(); ?>assets/images/search.png" alt="">
							</form>
							
						</div>
						<div class="hamburger ml-auto menu_mm">
							<i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">g.magz</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
				<img class="header_search_icon menu_mm" src="<?php echo base_url(); ?>assets/images/search_2.png" alt="">
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="/">Feeds</a></li>
				<li><a href="/page/1">Trending</a></li>
				<li><a href="/page/2">Handpicked</a></li>
				<li><a href="/page/3">Videos</a></li>
				<li><a href="/page/4">Articles</a></li>
				<li><a href="/page/5">More</a></li>
			</ul>
		</nav>
	</div>

