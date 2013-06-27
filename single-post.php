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
<!-- ******** single post ******** -->
			<!-- main -->
			<div class="main">
				<section class="cols">
					<div class="col-span-2">
						<article>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
							<header>
								<h1><?php the_title(); ?></h1>
							</header>
							<p class="meta"><strong>by: <?php the_author_posts_link(); ?> /  <?php the_category(', ') ?></strong></p>
							<br />
		<?php the_content(); ?>
				<br />
		<?php the_tags( '<p class="meta"><strong>Tags: ', ', ', '</strong></p>'); ?>
				<hr>
	<?php endwhile; ?>
				<div class="navigation">
					<div class="alignleft">
						<?php next_posts_link('&laquo; Older Entries') ?>
					</div>
					<div class="alignright">
						<?php previous_posts_link('Newer Entries &raquo;') ?>
					</div>
				</div>
	<?php else : ?>
				<h1>Not Found!</h1>
				<p>Sorry, but you are looking for something that isn't here.</p>
	<?php //include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
						</article>
					</div>
					<div class="col">
<?php get_sidebar('sidebar-right'); ?>
					</div>
					<div class="cl"></div>
				</section>

			
<!-- ******** end single post ******** -->
<?php get_footer(); ?>