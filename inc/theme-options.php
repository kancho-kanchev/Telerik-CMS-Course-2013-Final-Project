<?php
/**
 * Project 2 Theme Options
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */

/**
 * Register the form setting for our telerik_options array.
 *
 * This function is attached to the admin_init action hook.
 *
 * This call to register_setting() registers a validation callback, fb_theme_options_validate(),
 * which is used when the option is saved, to ensure that our option values are complete, properly
 * formatted, and safe.
 *
 */
function telerik_theme_options_init() {

	register_setting(
		'theme_settings',// Options group, see settings_fields() call in telerik_theme_options_render_page()
		'theme_settings' // Database option, see telerik_get_theme_options()
	);
}
add_action( 'admin_init', 'telerik_theme_options_init' );

/**
 * Change the capability required to save the 'telerik_options' options group.
 *
 * @see telerik_theme_options_init() First parameter to register_setting() is the name of the options group.
 * @see telerik_theme_options_add_page() The edit_theme_options capability is used for viewing the page.
 *
 * By default, the options groups for all registered settings require the manage_options capability.
 * This filter is required to change our theme options page to edit_theme_options instead.
 * By default, only administrators have either of these capabilities, but the desire here is
 * to allow for finer-grained control for roles and users.
 *
 * @param string $capability The capability used for the page, which is manage_options by default.
 * @return string The capability to actually use.
 */
function telerik_option_page_capability( $capability ) {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_telerik_options', 'telerik_option_page_capability' );

/**
 * Add our theme options page to the admin menu.
 *
 * This function is attached to the admin_menu action hook.
 *
 */
function telerik_theme_options_add_page() {
	$theme_page = add_theme_page(
		__( 'Project 2 Theme Options', 'P2' ),	// Name of page
		__( 'Project 2 Options', 'P2' ),		// Label in menu
		'edit_theme_options',					// Capability required
		'theme_options',						// Menu slug, used to uniquely identify the page
		'telerik_theme_options_render_page'		// Function that renders the options page
	);

	if ( ! $theme_page )
		return;
}
add_action( 'admin_menu', 'telerik_theme_options_add_page' );

/**
 * Returns the options array for theme.
 *
 */
function telerik_theme_options_render_page() {
	?>
	<div class="wrap">
		
		<?php $theme_name = function_exists( 'wp_get_theme' ) ? wp_get_theme() : get_current_theme(); ?>
		<h2><?php printf( __( '%s Theme Options', 'P2' ), $theme_name ); ?></h2>
		<?php settings_errors(); ?>
		<hr />
	<form method="post" action="options.php">

<?php settings_fields( 'theme_settings' ); ?>
<?php $options = get_option( 'theme_settings' ); ?>
		<h3>Front page</h3>
		<table>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[ads]"><?php _e( 'Advertisement' ); ?></label></td>
				<td>
					<textarea id="theme_settings[ads]" rows="4" cols="50" name="theme_settings[ads]"><?php if(isset($options['ads'])) {  esc_attr_e ( $options['ads'] ); } ?></textarea>
				</td>
				<td scope="row" align="left">(for strong words use html "strong" tag)</td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[ads_button]"><?php _e( 'Text in button' ); ?></label></td>
				<td><input id="theme_settings[ads_button]" type="text" size="25" name="theme_settings[ads_button]"
					value="<?php if(isset($options['ads_button'])) { esc_attr_e ( $options['ads_button'] );} ?>" /></td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[ads_button_link]"><?php _e( 'Link' ); ?></label></td>
				<td><input id="theme_settings[ads_button_link]" type="text" size="25" name="theme_settings[ads_button_link]"
					value="<?php if(isset($options['ads_button_link'])) { esc_attr_e ( $options['ads_button_link'] );} ?>" /></td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_left_cat]"><?php _e( 'Left sidebar category' ); ?></label></td>
				<td><input id="theme_settings[sidebar_left_cat]" type="text" size="25" name="theme_settings[sidebar_left_cat]" 
					value="<?php if(isset($options['sidebar_left_cat'])) {  esc_attr_e ( $options['sidebar_left_cat'] );} ?>" /></td>
				<td scope="row" align="left">(about us category)</td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_left_title]"><?php _e( 'Title' ); ?></label></td>
				<td><input id="theme_settings[sidebar_left_title]" type="text" size="25" name="theme_settings[sidebar_left_title]"
					value="<?php if(isset($options['sidebar_left_title'])) { esc_attr_e ( $options['sidebar_left_title'] );} ?>" /></td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_center_cat]"><?php _e( 'Center sidebar category' ); ?></label></td>
				<td><input id="theme_settings[sidebar_center_cat]" type="text" size="25" name="theme_settings[sidebar_center_cat]"
					value="<?php if(isset($options['sidebar_center_cat'])) { esc_attr_e ( $options['sidebar_center_cat'] );} ?>" /></td>
				<td scope="row" align="left">(we’re hiring category)</td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_center_title]"><?php _e( 'Title' ); ?></label></td>
				<td><input id="theme_settings[sidebar_center_title]" type="text" size="25" name="theme_settings[sidebar_center_title]"
					value="<?php if(isset($options['sidebar_center_title'])) { esc_attr_e( $options['sidebar_center_title'] );} ?>" /></td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_right_cat]"><?php _e( 'Right sidebar category' ); ?></label></td>
				<td><input id="theme_settings[sidebar_right_cat]" type="text" size="25" name="theme_settings[sidebar_right_cat]"
					value="<?php if(isset($options['sidebar_right_cat'])) { esc_attr_e( $options['sidebar_right_cat'] );} ?>" /></td>
				<td scope="row" align="left">(our services category)</td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_right_title]"><?php _e( 'Title' ); ?></label></td>
				<td><input id="theme_settings[sidebar_right_title]" type="text" size="25" name="theme_settings[sidebar_right_title]"
					value="<?php if(isset($options['sidebar_right_title'])) { esc_attr_e( $options['sidebar_right_title'] );} ?>" /></td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_right_num]"><?php _e( 'Number posts' ); ?></label></td>
				<td><input id="theme_settings[sidebar_right_num]" type="text" size="25" name="theme_settings[sidebar_right_num]"
					value="<?php if(isset($options['sidebar_right_num'])) { esc_attr_e( $options['sidebar_right_num'] );} ?>" /></td>
			</tr>
		</table>
		<hr />
		<h3>Footer</h3>
		<table>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_footer_left_cat]"><?php _e( 'Left sidebar category' ); ?></label></td>
				<td><input id="theme_settings[sidebar_footer_left_cat]" type="text" size="25" name="theme_settings[sidebar_footer_left_cat]"
					value="<?php if(isset($options['sidebar_footer_left_cat'])) { esc_attr_e( $options['sidebar_footer_left_cat'] );} ?>" /></td>
				<td scope="row" align="left">(blog category)</td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_footer_left_title]"><?php _e( 'Title' ); ?></label></td>
				<td><input id="theme_settings[sidebar_footer_left_title]" type="text" size="25" name="theme_settings[sidebar_footer_left_title]"
					value="<?php if(isset($options['sidebar_footer_left_title'])) { esc_attr_e( $options['sidebar_footer_left_title'] );} ?>" /></td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_footer_left_num]"><?php _e( 'Number posts' ); ?></label></td>
				<td><input id="theme_settings[sidebar_footer_left_num]" type="text" size="25" name="theme_settings[sidebar_footer_left_num]"
					value="<?php if(isset($options['sidebar_footer_left_num'])) { esc_attr_e( $options['sidebar_footer_left_num'] );} ?>" /></td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_footer_center_cat]"><?php _e( 'Center sidebar category' ); ?></label></td>
				<td><input id="theme_settings[sidebar_footer_center_cat]" type="text" size="25" name="theme_settings[sidebar_footer_center_cat]"
					value="<?php if(isset($options['sidebar_footer_center_cat'])) { esc_attr_e( $options['sidebar_footer_center_cat'] );} ?>" /></td>
				<td scope="row" align="left">(projects category)</td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_footer_center_title]"><?php _e( 'Title' ); ?></label></td>
				<td><input id="theme_settings[sidebar_footer_center_title]" type="text" size="25" name="theme_settings[sidebar_footer_center_title]"
					value="<?php if(isset($options['sidebar_footer_center_title'])) { esc_attr_e( $options['sidebar_footer_center_title'] );} ?>" /></td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_footer_right_cat1]"><?php _e( 'Right sidebar category one' ); ?></label></td>
				<td><input id="theme_settings[sidebar_footer_right_cat1]" type="text" size="25" name="theme_settings[sidebar_footer_right_cat1]"
					value="<?php if(isset($options['sidebar_footer_right_cat1'])) { esc_attr_e( $options['sidebar_footer_right_cat1'] );} ?>" /></td>
				<td scope="row" align="left">(testimonials category)</td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_footer_right_title1]"><?php _e( 'Title' ); ?></label></td>
				<td><input id="theme_settings[sidebar_footer_right_title1]" type="text" size="25" name="theme_settings[sidebar_footer_right_title1]"
					value="<?php if(isset($options['sidebar_footer_right_title1'])) { esc_attr_e( $options['sidebar_footer_right_title1'] );} ?>" /></td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_footer_right_cat2]"><?php _e( 'Right sidebar category two' ); ?></label></td>
				<td><input id="theme_settings[sidebar_footer_right_cat2]" type="text" size="25" name="theme_settings[sidebar_footer_right_cat2]"
					value="<?php if(isset($options['sidebar_footer_right_cat2'])) { esc_attr_e( $options['sidebar_footer_right_cat2'] );} ?>" /></td>
				<td scope="row" align="left">(our partners category)</td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sidebar_footer_right_title2]"><?php _e( 'Title' ); ?></label></td>
				<td><input id="theme_settings[sidebar_footer_right_title2]" type="text" size="25" name="theme_settings[sidebar_footer_right_title2]"
					value="<?php if(isset($options['sidebar_footer_right_title2'])) { esc_attr_e( $options['sidebar_footer_right_title2'] );} ?>" /></td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[copyright_year]"><?php _e( 'copyright year' ); ?></label></td>
				<td><input id="theme_settings[copyright_year]" type="text" size="25" name="theme_settings[copyright_year]"
					value="<?php if(isset($options['copyright_year'])) { esc_attr_e( $options['copyright_year'] );} ?>" /></td>
				<td scope="row" align="left">(example "2012" or 2012-2013")</td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[copyright_owner]"><?php _e( 'copyright owner' ); ?></label></td>
				<td><input id="theme_settings[copyright_owner]" type="text" size="25" name="theme_settings[copyright_owner]"
					value="<?php if(isset($options['copyright_owner'])) { esc_attr_e( $options['copyright_owner'] );} ?>" /></td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[design_name]"><?php _e( 'Design by' ); ?></label></td>
				<td><input id="theme_settings[design_name]" type="text" size="25" name="theme_settings[design_name]"
					value="<?php if(isset($options['design_name'])) { esc_attr_e( $options['design_name'] );} ?>" /></td>
				<td scope="row" align="left">(name)</td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[design_link]"><?php _e( 'link' ); ?></label></td>
				<td><input id="theme_settings[design_link]" type="text" size="25" name="theme_settings[design_link]"
					value="<?php if(isset($options['design_link'])) { esc_attr_e( $options['design_link'] );} ?>" /></td>
			</tr>
		</table>
		<hr />
		<h3>Данни за контакти:</h3>
		<table>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[fb]"><?php _e( 'Facebook' ); ?></label></td>
				<td><input id="theme_settings[fb]" type="text" size="25" name="theme_settings[fb]"
					value="<?php if(isset($options['fb'])) { esc_attr_e( $options['fb'] );} ?>" /></td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[tw]"><?php _e( 'Twitter' ); ?></label></td>
				<td><input id="theme_settings[tw]" type="text" size="25" name="theme_settings[tw]"
					value="<?php if(isset($options['tw'])) { esc_attr_e( $options['tw'] );} ?>" /></td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[go]"><?php _e( 'Google +' ); ?></label></td>
				<td><input id="theme_settings[go]" type="text" size="25" name="theme_settings[go]"
					value="<?php if(isset($options['go'])) { esc_attr_e( $options['go'] );} ?>" /></td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[sk]"><?php _e( 'Skype' ); ?></label></td>
				<td><input id="theme_settings[sk]" type="text" size="25" name="theme_settings[sk]"
					value="<?php if(isset($options['sk'])) { esc_attr_e( $options['sk'] );} ?>" /></td>
			</tr>
			<tr>
				<td scope="row" align="left"><label for="theme_settings[rss]"><?php _e( 'rss' ); ?></label></td>
				<td><input id="theme_settings[rss]" type="text" size="25" name="theme_settings[rss]"
					value="<?php if(isset($options['rss'])) { esc_attr_e( $options['rss'] );} ?>" /></td>
			</tr>
		</table>
		<hr />
		<?php submit_button(); ?>
	</form>
</div><!-- END wrap -->
	<?php
}
?>
