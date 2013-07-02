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
 * Edit read more link in excerpt
 */
//function new_excerpt_more( $more ) {
//	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
//}
//add_filter( 'excerpt_more', 'new_excerpt_more' );

/**
 * Get URL of first image in a post
 */
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	if(isset($matches [1] [0])){
		$first_img = $matches [1] [0];
		// no image found display default image instead
		if(empty($first_img)){
			//$first_img = "/images/default.jpg";
			$first_img = '';
		}
	}
	else {
		$first_img = '';
	}
	return $first_img;
}

/**
 * Enable featured image.
 */
add_theme_support( 'post-thumbnails');

/**
 * Sets up the sidebars.
 */
$sidebar_args = array(
		'id' => 'sidebar-right',
		'name' => 'Right Sidebar',
		'description'   => 'Choose category from template options page',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
);
register_sidebar($sidebar_args);

$sidebar_args = array(
		'id' => 'sidebar-footer-center',
		'name' => 'Footer Center Sidebar',
		'description'   => 'Choose category from template options page',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
);
register_sidebar($sidebar_args);

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
/*************************** add fields to user profile *******************/
	add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
	add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );
	
	function my_show_extra_profile_fields( $user ) { ?>
	
		<h3>Extra profile information</h3>
		<table class="form-table">
			<tr>
				<th><label for="company_name">Company Name</label></th>
				<td>
					<input type="text" name="company_name" id="company_name" value="<?php echo esc_attr( get_the_author_meta( 'company_name', $user->ID ) ); ?>" class="regular-text" /><br />
					<span class="description">Please enter your company name.</span>
				</td>
			</tr>
		</table>
	<?php }

	add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
	add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );
	
	function my_save_extra_profile_fields( $user_id ) {
		if ( !current_user_can( 'edit_user', $user_id ) )
			return false;
		update_usermeta( $user_id, 'company_name', $_POST['company_name'] );
	}
	
/*************************** theme options page ***************************/
		
/**
 * Tell WordPress to run telerik_setup() when the 'after_setup_theme' hook is run.
 */
	add_action( 'after_setup_theme', 'telerik_setup' );
	if ( ! function_exists( 'telerik_setup' ) ):
		function telerik_setup() {	
			// Load up our theme options page and related code.
			require( get_template_directory() . '/inc/theme-options.php' );
		}
	endif; // telerik_setup

?>