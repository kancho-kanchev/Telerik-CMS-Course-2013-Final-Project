<?php
/**
 * The template for displaying the sidebar with latest project (or else).
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */
?>
<!-- ******** sidebar services ******** -->
<?php if (! dynamic_sidebar('sidebar-footer-center')):?>
	<?php
	global $more;
	$more = 0;
	query_posts('cat=9');
	if(have_posts()) :
		the_post(); ?>
		<h3>Latest Project</h3>
		<h5><?php the_title();?></h5>
		<?php the_content('view more');
	else : ?>
<!--
						<h3>No posts!</h3>
						<ul>
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Sit atmet, consectetur lorem </a></li>
							<li><a href="#">Consectetur adispicing dolor</a></li>
							<li><a href="#">Lipsuim dolor amet adpispicing</a></li>
							<li><a href="#">Lipsuim dolor amet adpispicing</a></li>
						</ul>
 -->
	<?php endif;
	wp_reset_query(); ?>
<?php endif;?>
