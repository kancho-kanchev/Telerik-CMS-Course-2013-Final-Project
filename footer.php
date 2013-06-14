<?php 
/**
 * The template for displaying the front page.
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */
?>

				<section class="entries">
					<div class="entry">
<?php get_sidebar('footer-left'); ?>
<!-- 
						<h3>Latest Blog Posts</h3>
						<div class="entry-inner">
							<div class="date">
								<strong>01</strong>
								<span>2012</span>
								<em>feb</em>
							</div>
							<div class="cnt">
								<p><a href="#">Lorem ipsum dolor sit<br /> amet, consectetur dor</a></p>
								<p class="meta"><a href="#">by John Doe </a> /  <a href="#">Category Name</a></p>
							</div>
						</div>
						<div class="entry-inner">
							<div class="date">
								<strong>28</strong>
								<span>2012</span>
								<em>jan</em>
							</div>
							<div class="cnt">
								<p><a href="#">Lorem ipsum dolor sit<br /> amet, consectetur dor</a></p>
								<p class="meta"><a href="#">by John Doe </a> /  <a href="#">Category Name</a></p>
							</div>
						</div>
						<div class="entry-inner">
							<div class="date">
								<strong>11</strong>
								<span>2012</span>
								<em>feb</em>
							</div>
							<div class="cnt">
								<p><a href="#">Lorem ipsum dolor sit<br /> amet, consectetur dor</a></p>
								<p class="meta"><a href="#">by John Doe </a> /  <a href="#">Category Name</a></p>
							</div>
						</div>
-->
					</div>
					<div class="entry">
<?php get_sidebar('footer-center'); ?>					
					</div>
					<div class="entry">
						<h3>Testimonials</h3>

						<div class="testimonials">					
							<p><strong>“</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis.”</p>
							<p class="author">John Doe, <strong>Company Name</strong></p>
						</div>
						
						<div class="partners">
							<h3>Our Partners</h3>
							<img src="<?php echo get_template_directory_uri() ?>/images/partners-img.png" alt="" />
						</div>
					</div>
					<div class="cl">&nbsp;</div>
				</section>
			</div>
			<!-- end of main -->
			<div class="cl">&nbsp;</div>
			
			<!-- footer -->
			<div id="footer">
				<div class="footer-nav">
				<?php wp_nav_menu(array (
					'theme_location'  => 'footer-menu',
					'container'       => '',
					'menu_class'      => ''
					)
				);?>
					<div class="cl">&nbsp;</div>
				</div>
				<p class="copy">&copy; Copyright 2012<span>|</span>Telerik CMS Course. Design by <a href="http://academy.telerik.com" target="_blank">Telerik Software Academy</a></p>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end of footer -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of shell -->
</div>
<!-- end of wrapper -->
<?php wp_footer(); ?>
</body>
</html>