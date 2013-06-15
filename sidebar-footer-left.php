<?php
/**
 * The template for displaying the sidebar with latest blog posts (or else).
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */
?>
<!-- ******** sidebar services ******** -->
<?php
if (! dynamic_sidebar('sidebar-footer-left')):
	//get theme options
	$options = get_option( 'theme_settings' );
	$count = 0;
	$my_date = '';
	if(isset($options['sidebar_right_cat'])&&($options['sidebar_right_cat']!='')) :
		query_posts( 'category_name='.$options['sidebar_footer_left'] );
		if(have_posts()) :
?>
			<h3><?php echo esc_attr( $options['sidebar_footer_left_title'] ); ?></h3>
<?php
			while (have_posts() && ($count < 3)) :
				the_post();
				$count++;
				$my_date = get_the_date('dMY');
?>
						<div class="entry-inner">
							<div class="date">
								<strong><?php echo $my_date[0];echo $my_date[1]; ?></strong>
								<span><?php echo $my_date[5];echo $my_date[6];echo $my_date[7];echo $my_date[8]; ?></span>
								<em><?php echo $my_date[2];echo $my_date[3];echo $my_date[4]; ?></em>
							</div>
							<div class="cnt">
								<p><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
								<p class="meta">by: <?php the_author_posts_link(); ?> /  <?php the_category(', ') ?></p>
							</div>
						</div>
<?php 
			endwhile;
		else :
?>
<!-- If not dynamic sidebar and not posts to display. Put some code here to run it -->
<?php
		endif;
		wp_reset_query();
	endif;
endif;
?>
