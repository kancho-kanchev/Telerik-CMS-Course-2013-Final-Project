<?php
/**
 * The template for displaying the content.
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */
?>
<?php get_header(); ?>
<!-- ******** content ******** -->
			<!-- main -->
			<div class="main">
				<section class="cols">
					<div class="col-span-2">
						<article>
						<!-- Добавих anchor към заглавието за да може да се отваря статията в нов прозорец.
							По този начин се променя цвета на заглавието спрямо темплейта, но е много по функционално. -->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
							<header>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							</header>
		<?php the_content('view more'); ?>
		<?php //wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<br />
				<div class="cl"></div>
				<hr>
	<?php endwhile; ?>
				<div class="navigation">
<?php if ( $wp_query->max_num_pages >1) : ?>
					<br/>
					<div class="alignleft blue-btn">
						<?php next_posts_link('&laquo; Older Entries') ?>
					</div>
					<div class="alignright blue-btn">
						<?php previous_posts_link('Newer Entries &raquo;') ?>
					</div>
<?php else: ?>  
					<!-- <p>No newer/older posts</p> -->  
<?php endif; ?>  
				</div>
				
	<?php else : ?>
				<h1>Not Found!</h1>
				<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
						</article>
					</div>					
					<div class="col">
<?php get_sidebar('sidebar-right'); ?>
					</div>
					<div class="cl"></div>
				</section>
<!-- ******** end content ******** -->
<?php get_footer(); ?>