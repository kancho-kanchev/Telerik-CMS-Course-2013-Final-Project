<?php 
/**
 * Functions and definitions.
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */

/**
 * Sets up the menu.
 */
register_nav_menu('top-side-menu', "Top menu");
register_nav_menu('footer-menu', "Footer menu");

/**
 * Add Scripts and styles.
 */

		// add script and style calls the WP way
		add_action( 'wp_enqueue_scripts', 'add_JS' );
		add_action( 'wp_enqueue_scripts', 'add_CSS' );

		/**
		 *
		 * Adding JavaScript scripts
		 *
		 * Loading existing scripts from wp-includes or adding custom ones
		 *
		 */
		function add_JS() {
			wp_register_script( 'my_jquery', get_template_directory_uri() . '/js/jquery-1.8.0.min.js' );
			wp_register_script( 'jqueryCarouFredSel', get_template_directory_uri() . '/js/jquery.carouFredSel-5.5.0-packed.js', array('my_jquery') );
			wp_register_script( 'functions', get_template_directory_uri() . '/js/functions.js', array('jqueryCarouFredSel') );
			global $wp_scripts;
			wp_register_script('lt-ie-9', get_template_directory_uri() . '/js/modernizr.custom.js' );
			$wp_scripts->add_data('lt-ie-9', 'conditional', 'lt IE 9');
			wp_enqueue_script( 'my_jquery' );
			wp_enqueue_script( 'jqueryCarouFredSel' );
			wp_enqueue_script( 'functions' );
			wp_enqueue_script('lt-ie-9');
			wp_enqueue_script( 'jquery' );			
		}
		

		/**
		 *
		 * Add CSS styles
		 *
		 */
		function add_CSS() {
			wp_register_style( 'font-style', 'http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' );
			wp_enqueue_style( 'font-style' );
			if( !(is_home()) ) {
				wp_register_style('page-style', get_template_directory_uri() . '/css/front-style.css' );
				wp_enqueue_style('page-style');
			}
		}
		

	?>