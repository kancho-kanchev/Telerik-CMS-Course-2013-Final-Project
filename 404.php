<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */
?>
<?php get_header(); ?>
<!-- ******** error 404 ******** -->
			<!-- main -->
			<div class="main">
				<section class="cols">
					<div class="col-span-2">
						<article>
							<div id="site_content">
								<div class="featured">
									<h4 align="center"><strong>404</strong></h4>
									<a href="<?php echo home_url(); ?>" class="blue-btn">Go to home page</a>
									<p>Error Four Oh Four - Page Not Found</p>
									<hr>
									<p>Wooah you have tried to access a page which doesn't exist or has been moved.</p>
									<p>Please check the spelling of the address bar, and if you think there is an error on the site please let us know</p>
									<a href="<?php echo home_url().'/contacts/'; ?>" class="more-link">contacts us</a>
								</div>
							</div>
						</article>
					</div>
					<div class="col">
<?php get_sidebar('sidebar-right'); ?>
					</div>
					<div class="cl"></div>
				</section>
<?php get_footer(); ?>