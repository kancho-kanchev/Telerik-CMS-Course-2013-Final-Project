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
					</div>
					<div class="entry">
<?php get_sidebar('footer-center'); ?>
					</div>
					<div class="entry">
<?php get_sidebar('footer-right'); ?>
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