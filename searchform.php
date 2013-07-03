<?php
/**
 * The template for displaying search forms.
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */
?>
<!-- ******** search form ******** -->
					<form id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
						<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'keywords here ...'); ?>" value="keywords here ..." title="keywords here ..." />
						<input type="submit" class="search-btn" id="searchsubmit" value="" />
						<div class="cl">&nbsp;</div>
					</form>
