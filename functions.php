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
 * Sets up the sidebars.
 */
register_sidebar(array(
'name' => __( 'About Us' ),
'id' => 'about_us',
'description' => __( 'Front Page About Sidebar' ),
'before_title' => '<h3>',
'after_title' => '</h3>',
'before_widget' => '<div class="block subnav">',
'after_widget' => '</div>'
));

register_sidebar(array(
'name' => __( 'Home Center Sidebar' ),
'id' => 'home-center-sidebar',
'description' => __( 'Home Page Center Sidebar' ),
'before_title' => '<h2>',
'after_title' => '</h2>',
'before_widget' => '<div class="block subnav">',
'after_widget' => '</div>'
));

register_sidebar(array(
'name' => __( 'Home Right Sidebar' ),
'id' => 'home-right-sidebar',
'description' => __( 'Home Page Right Sidebar' ),
'before_title' => '<h2>',
'after_title' => '</h2>',
'before_widget' => '<div class="block last subnav">',
'after_widget' => '</div>'
));

register_sidebar(array(
'name' => __( 'Footer Left Sidebar' ),
'id' => 'footer-left-sidebar',
'description' => __( 'Footer Left Sidebar' ),
'before_title' => '<h2>',
'after_title' => '</h2>',
'before_widget' => '<article class="footbox">',
'after_widget' => '</article>'
));

register_sidebar(array(
'name' => __( 'Footer Center Sidebar' ),
'id' => 'footer-center-sidebar',
'description' => __( 'Footer Center Sidebar' ),
'before_title' => '<h2>',
'after_title' => '</h2>',
'before_widget' => '<article class="footbox last">',
'after_widget' => '</article>'
));

register_sidebar(array(
'name' => __( 'Footer Right Sidebar' ),
'id' => 'footer-right-sidebar',
'description' => __( 'Footer Right Sidebar' ),
'before_title' => '<h2>',
'after_title' => '</h2>',
'before_widget' => '<div id="%1$s" class="widget subnav %2$s">',
'after_widget' => '</div>'
));

register_sidebar(array(
'name' => __( 'Contacts Right Sidebar' ),
'id' => 'contacts-right-sidebar',
'description' => __( 'Contacts Page Right Sidebar' ),
'before_title' => '<h5>',
'after_title' => '</h5>',
'before_widget' => '<div id="%1$s" class="widget subnav %2$s">',
'after_widget' => '</div>'
));

$sidebar_args = array(
		'id' => 'right-sidebar-links',
		'name' => 'Main Sidebar Links',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div class="subnav">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>'
);
register_sidebar($sidebar_args);

$sidebar_args = array(
		'id' => 'right-sidebar-tags',
		'name' => 'Main Sidebar Tags',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="featured">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>'
);
register_sidebar($sidebar_args);

/**
 * Sets up the menu.
 */
register_nav_menu('top-side-menu', "Top menu");
register_nav_menu('footer-menu', "Footer menu");

/**
 * Add Scripts.
 */
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function theme_enqueue_scripts () {
	wp_enqueue_script( 'jQuery' );
	//wp_enqueue_script( 'scripts',	get_template_directory_uri() . '/js/jquery-1.8.0.min.js', array('jquery') );
	//wp_enqueue_script( 'jqueryCarouFredSel',	get_template_directory_uri() . '/js/jquery.carouFredSel-5.5.0-packed.js' );
	//wp_enqueue_script( 'functions',	get_template_directory_uri() . '/js/functions.js' );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts');

function wpb_add_google_fonts() {
	echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100">';
}

/*************************** theme options page ***************************/

/**
 * Tell WordPress to run twentyeleven_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'fb_setup' );

if ( ! function_exists( 'fb_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override twentyeleven_setup() in a child theme, add your own twentyeleven_setup to your child theme's
 * functions.php file.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To style the visual editor.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links, custom headers
 * 	and backgrounds, and post formats.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Eleven 1.0
 */
function fb_setup() {

	/* Make Twenty Eleven available for translation.
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Eleven, use a find and replace
	 * to change 'twentyeleven' to the name of your theme in all the template files.
	 */

	// Load up our theme options page and related code.
	require( get_template_directory() . '/inc/theme-options.php' );
}
endif; // twentyeleven_setup