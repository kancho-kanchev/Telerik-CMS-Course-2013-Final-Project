<?php
/**
 * The template for displaying the sidebar with about us (or else).
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */
?>
<!-- ******** sidebar services ******** -->
<?php if (! dynamic_sidebar('sidebar-about-us')):
	//get theme options
	$options = get_option( 'theme_settings' );
	if(isset($options['sidebar_left_cat'])&&($options['sidebar_left_cat']!='')) :
		query_posts( 'category_name='.$options['sidebar_left_cat'] );
		if(have_posts()) :
			the_post(); ?>
			<h3><?php if(isset($options['sidebar_left_title'])&&($options['sidebar_left_title']!='')){ echo esc_attr( $options['sidebar_left_title'] );} ?></h3>
			<h5><?php the_title();?></h5>
			<?php the_content('view more');
		else :
			// put echo message here
			_e('<br />');
		endif;
		wp_reset_query();
	else :
		// put echo message here
		_e('<br />');
	endif;
endif;
?>