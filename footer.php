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
				<?php wp_nav_menu(array (
					'theme_location'  => 'footer-menu',
					'container'       => 'div',
					'container_class' => 'footer-nav'
					)
				);?>
					<div class="cl">&nbsp;</div>
<?php
//get theme options
$options = get_option( 'theme_settings' );
?>
				<p class="copy"><?php
				 
if((isset($options['copyright_year'])&&($options['copyright_year']!='')||(isset($options['copyright_owner'])&&($options['copyright_owner']!='')))) :
	_e( '&copy; Copyright ' );
	if((isset($options['copyright_year'])&&($options['copyright_year']!='')&&(isset($options['copyright_owner'])&&($options['copyright_owner']!='')))){
		_e( $options['copyright_year'].'<span>|</span>'.$options['copyright_owner'].'. ' );
	}
	else {
		if(isset($options['copyright_year'])&&($options['copyright_year']!='')){
			_e( $options['copyright_year'].'. ' );
		}
		else {
			_e( $options['copyright_owner'].'. ' );
		}
	}
endif;
if((isset($options['design_name'])&&($options['design_name']!='')||(isset($options['design_link'])&&($options['design_link']!='')))) :
	_e( 'Design by ' );
	if((isset($options['design_name'])&&($options['design_name']!='')&&(isset($options['design_link'])&&($options['design_link']!='')))) {
		_e( '<a href="'.$options['design_link'].'" target="_blank">'.$options['design_name'].'</a>' );
	}
	else {
		if (isset($options['design_name'])&&($options['design_name']!='')) {
			_e( $options['design_name'] );
		}
		else {
			_e( '<a href="'.$options['design_link'].'" target="_blank">'.$options['design_link'].'</a>' );
		}
	}
endif;

					?></p>
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