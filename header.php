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
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri() ?>/js/modernizr.custom.js"></script>
	<![endif]-->
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
