<?php
/**
 * The template for displaying the sidebar with services (or else).
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */
?>
<!-- ******** sidebar services ******** -->
<?php if (! dynamic_sidebar('sidebar-right')):
	//get theme options
	$options = get_option( 'theme_settings' );
	$count = 0;
	if(isset($options['sidebar_right_cat'])&&($options['sidebar_right_cat']!='')) :
		query_posts('category_name='.$options['sidebar_right_cat']);
		if(have_posts()) :
			the_post(); ?>
			<h3><?php the_title();?></h3>
<?php the_content('view more');
		else :
?>
<!-- If not dynamic sidebar and not posts to display. Put some code here to run it -->
<?php
		endif;
		wp_reset_query();
	endif;
endif;
?>