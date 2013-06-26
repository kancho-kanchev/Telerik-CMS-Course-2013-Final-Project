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
	if(isset($options['sidebar_right_cat'])&&($options['sidebar_right_cat']!='')&&($options['sidebar_right_num'])&&($options['sidebar_right_num']>0)) :
		query_posts( 'category_name='.$options['sidebar_right_cat'] );
		if(have_posts()) :
?>
			<h3><?php if(isset($options['sidebar_right_title'])&&($options['sidebar_right_title']!='')){ echo esc_attr( $options['sidebar_right_title'] );} ?></h3>
			<ul>
<?php
			while (have_posts() && ($count < $options['sidebar_right_num'])) :
				the_post();
				$count++;
?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php
			endwhile;
?>
			</ul>
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