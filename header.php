<?php
/**
 * The template for displaying the header.
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title><?php bloginfo('description'); ?> - <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>" />
<?php if( !(is_home()) ) { ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/css/front-style.css" />
<?php } ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri() ?>/js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="<?php echo get_template_directory_uri() ?>/js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/functions.js" type="text/javascript"></script>
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" />
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
	<!-- shell -->
	<div class="shell">
		<!-- container -->
		<div class="container">
			<!-- header -->
			<header id="header">
				<h1 id="logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<!-- search -->
				<div class="search">
					<form action="" method="post">
						<input type="text" class="field" value="keywords here ..." title="keywords here ..." />
						<input type="submit" class="search-btn" value="" />
						<div class="cl">&nbsp;</div>
					</form>
				</div>
				<!-- end of search -->
				<div class="cl">&nbsp;</div>
			</header>
			<!-- end of header -->
			<!-- navigaation -->
			<nav id="navigation">
				<?php wp_nav_menu(array (
					'theme_location'  => 'top-side-menu',
					'container'       => 'nav',
					'menu_class'      => 'nav'
					)
				);?>
				<a href="#" class="nav-btn">HOME<span></span></a>
				<ul>
					<li class="active"><a href="#">home</a></li>
					<li><a href="#">about us</a></li>
					<li><a href="#">services</a></li>
					<li><a href="#">projects</a></li>
					<li><a href="#">solutions</a></li>
					<li><a href="#">jobs</a></li>
					<li><a href="#">blog</a></li>
					<li><a href="#">contacts</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
