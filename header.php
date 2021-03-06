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
	<meta charset = "<?php bloginfo( 'charset' ); ?>" />
	<title><?php bloginfo('description'); ?> - <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>" />
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
				<span id="logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></span>
				<!-- search -->
				<span class="search">
					<?php get_search_form(); ?>
				</span>
				<!-- end of search -->
				<div class="cl">&nbsp;</div>
			</header>
			<!-- end of header -->
			<!-- navigaation -->
				<?php wp_nav_menu(array (
					'theme_location'  => 'top-side-menu',
					'container'       => 'nav',
					'menu_class'      => 'nav',
					'container_id'	  => 'navigation'
					)
				);?>
				<div class="cl">&nbsp;</div>
			<!-- end of navigation -->