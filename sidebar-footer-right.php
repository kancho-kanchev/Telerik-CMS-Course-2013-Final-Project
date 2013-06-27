<?php
/**
 * The template for displaying the sidebar with testimonials (or else).
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */
?>
<!-- ******** sidebar services ******** -->
<?php if (! dynamic_sidebar('sidebar-footer-right')):
	//get theme options
	$options = get_option( 'theme_settings' );
	if(isset($options['sidebar_footer_right_cat1'])&&($options['sidebar_footer_right_cat1']!='')) :
		query_posts( 'category_name='.$options['sidebar_footer_right_cat1'] );
		if(have_posts()) :
			the_post(); ?>
			<h3><?php if(isset($options['sidebar_footer_right_title1'])&&($options['sidebar_footer_right_title1']!='')){ echo esc_attr( $options['sidebar_footer_right_title1'] );} ?></h3>
			<div class="testimonials">
<?php the_content('view more'); ?>
				<p class="author"><?php the_author();
				if ( get_the_author_meta( 'company_name' ) ) {?>
					, <strong><?php the_author_meta( 'company_name' );?></strong><?php
				}?></p>
			</div>
<?php
		else :
			// put echo message here
			_e('<br />');
		endif;
		wp_reset_query();
	else :
		// put echo message here
		_e('<br />');
	endif;
	if(isset($options['sidebar_footer_right_cat2'])&&($options['sidebar_footer_right_cat2']!='')) :
		query_posts( 'category_name='.$options['sidebar_footer_right_cat2'] );
		if(have_posts()) :
			the_post(); ?>
			<h3><?php if(isset($options['sidebar_footer_right_title2'])&&($options['sidebar_footer_right_title2']!='')){ echo esc_attr( $options['sidebar_footer_right_title2'] );} ?></h3>
			<div class="partners">
<?php the_content('view more'); ?>
			</div>
<?php
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
