<?php
/**
 * The template for displaying Search Results pages.
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */
?>
<?php get_header(); ?>
<!-- ******** search results ******** -->
			<!-- main -->
			<div class="main">
				<section class="cols">
					<div class="col-span-2">
						<article>
						<!-- Добавих anchor към заглавието за да може да се отваря статията в нов прозорец.
							По този начин се променя цвета на заглавието спрямо темплейта, но е много по функционално. -->
<?php if (have_posts()) : ?>

							<h1 class="page-title"><?php printf( __( 'Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
							<hr>
	<?php while (have_posts()) : the_post(); ?>
						<header>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a><?php
									$category = get_the_category(); 
									if(isset($category[0])&&($category[0]!='')) {
										echo " / ";
										echo the_category(', ');
									} ?></h1>
							</header>
							<p><?php
		$myExcerpt = get_the_excerpt();
		$tags = array("<p>", "</p>", "[...]");
		$myExcerpt = str_replace($tags, "", $myExcerpt);
		echo $myExcerpt." ";
		echo '<a href="';
		echo the_permalink();
		echo '">read more</a></p>'."\n";

		//wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							<br />
							<hr>
	<?php endwhile; ?>
	
							<div class="navigation">
								<div class="alignleft">
									<?php next_posts_link('&laquo; Older Entries') ?>
									<?php echo "\n"?>
								</div>
								<div class="alignright">
									<?php previous_posts_link('Newer Entries &raquo;') ?>
									<?php echo "\n"?>
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
<?php get_footer(); ?>