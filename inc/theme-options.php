<?php
/**
 * Future Building Theme Options
 *
 * @package Future Building 1
 * @subpackage kanchev-bgdotcom
 * @since FB1 v.3.0
 */

/**
 * Register the form setting for our fb_options array.
 *
 * This function is attached to the admin_init action hook.
 *
 * This call to register_setting() registers a validation callback, fb_theme_options_validate(),
 * which is used when the option is saved, to ensure that our option values are complete, properly
 * formatted, and safe.
 *
 */
function fb_theme_options_init() {

	register_setting(
		'theme_settings',       // Options group, see settings_fields() call in fb_theme_options_render_page()
		'theme_settings' // Database option, see fb_get_theme_options()
	);
}
add_action( 'admin_init', 'fb_theme_options_init' );

/**
 * Change the capability required to save the 'fb_options' options group.
 *
 * @see fb_theme_options_init() First parameter to register_setting() is the name of the options group.
 * @see fb_theme_options_add_page() The edit_theme_options capability is used for viewing the page.
 *
 * By default, the options groups for all registered settings require the manage_options capability.
 * This filter is required to change our theme options page to edit_theme_options instead.
 * By default, only administrators have either of these capabilities, but the desire here is
 * to allow for finer-grained control for roles and users.
 *
 * @param string $capability The capability used for the page, which is manage_options by default.
 * @return string The capability to actually use.
 */
function fb_option_page_capability( $capability ) {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_fb_options', 'fb_option_page_capability' );

/**
 * Add our theme options page to the admin menu.
 *
 * This function is attached to the admin_menu action hook.
 *
 */
function fb_theme_options_add_page() {
	$theme_page = add_menu_page(
		__( 'FB1 Theme Options', 'fb' ),   // Name of page
		__( 'FB1 Options', 'fb' ),   // Label in menu
		'edit_theme_options',                    // Capability required
		'theme_options',                         // Menu slug, used to uniquely identify the page
		'fb_theme_options_render_page' // Function that renders the options page
	);

	if ( ! $theme_page )
		return;
}
add_action( 'admin_menu', 'fb_theme_options_add_page' );

/**
 * Returns the options array for Twenty Eleven.
 *
 */
function fb_theme_options_render_page() {
	?>
	<div class="wrap">
		
		<?php $theme_name = function_exists( 'wp_get_theme' ) ? wp_get_theme() : get_current_theme(); ?>
		<h2><?php printf( __( '%s Theme Options', 'fb' ), $theme_name ); ?></h2>
		<?php settings_errors(); ?>
		<hr />
	<form method="post" action="options.php">

<?php settings_fields( 'theme_settings' ); ?>
<?php $options = get_option( 'theme_settings' ); ?>
		<h3>Начална страница</h3>
		<h4 style="color: blue">Първи слайдер</h4>
		<table>
<!-- Option 1: slide1 -->
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Картинка' ); ?></th>
				<td>
					<input id="theme_settings[slider1]" type="text" size="100" name="theme_settings[slider1]" value="<?php esc_attr_e( $options['slider1'] ); ?>" />
					<label for="theme_settings[slider1]"><?php _e( 'пълния път до картинка за слайдер.' ); ?></label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Заглавие: ' ); ?></th>
				<td>
					<input id="theme_settings[slider1title]" type="text" size="50" name="theme_settings[slider1title]" value="<?php esc_attr_e( $options['slider1title'] ); ?>" />
					<label for="theme_settings[slider1title]"><?php _e( 'Ако няма заглавие няма да се показва никакъв текст.' ); ?></label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Текст' ); ?></th>
				<td>
					<label for="theme_settings[slider1text]"><?php _e( 'Въведете част от статията.' ); ?></label>
					<br />
					<textarea id="theme_settings[slider1text]" name="theme_settings[slider1text]" rows="5" cols="50"><?php esc_attr_e( $options['slider1text'] ); ?></textarea>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Връзка към темата: ' ); ?></th>
				<td>
					<input id="theme_settings[slider1link]" type="text" size="100" name="theme_settings[slider1link]" value="<?php esc_attr_e( $options['slider1link'] ); ?>" />
					<label for="theme_settings[slider1link]"><?php _e( 'Въведете връзка към темата/статията.' ); ?></label>
				</td>
			</tr>
		</table>
		<h4 style="color: blue">Втори слайдер</h4>
		<table>
<!-- Option 2: slide2 -->
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Картинка' ); ?></th>
				<td>
					<input id="theme_settings[slider2]" type="text" size="100" name="theme_settings[slider2]" value="<?php esc_attr_e( $options['slider2'] ); ?>" />
					<label for="theme_settings[slider2]"><?php _e( 'пълния път до картинка за слайдер.' ); ?></label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Заглавие: ' ); ?></th>
				<td>
					<input id="theme_settings[slider2title]" type="text" size="50" name="theme_settings[slider2title]" value="<?php esc_attr_e( $options['slider2title'] ); ?>" />
					<label for="theme_settings[slider2title]"><?php _e( 'Ако няма заглавие няма да се показва никакъв текст.' ); ?></label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Текст' ); ?></th>
				<td>
					<label for="theme_settings[slider2text]"><?php _e( 'Въведете част от статията.' ); ?></label>
					<br />
					<textarea id="theme_settings[slider2text]" name="theme_settings[slider2text]" rows="5" cols="50"><?php esc_attr_e( $options['slider2text'] ); ?></textarea>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Връзка към темата: ' ); ?></th>
				<td>
					<input id="theme_settings[slider2link]" type="text" size="100" name="theme_settings[slider2link]" value="<?php esc_attr_e( $options['slider2link'] ); ?>" />
					<label for="theme_settings[slider2link]"><?php _e( 'Въведете връзка към темата/статията.' ); ?></label>
				</td>
			</tr>
		</table>
		<h4 style="color: blue">Трети слайдер</h4>
		<table>
<!-- Option 3: slide3 -->
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Картинка' ); ?></th>
				<td>
					<input id="theme_settings[slider3]" type="text" size="100" name="theme_settings[slider3]" value="<?php esc_attr_e( $options['slider3'] ); ?>" />
					<label for="theme_settings[slider3]"><?php _e( 'пълния път до картинка за слайдер.' ); ?></label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Заглавие: ' ); ?></th>
				<td>
					<input id="theme_settings[slider3title]" type="text" size="50" name="theme_settings[slider3title]" value="<?php esc_attr_e( $options['slider3title'] ); ?>" />
					<label for="theme_settings[slider3title]"><?php _e( 'Ако няма заглавие няма да се показва никакъв текст.' ); ?></label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Текст' ); ?></th>
				<td>
					<label for="theme_settings[slider3text]"><?php _e( 'Въведете част от статията.' ); ?></label>
					<br />
					<textarea id="theme_settings[slider3text]" name="theme_settings[slider3text]" rows="5" cols="50"><?php esc_attr_e( $options['slider3text'] ); ?></textarea>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Връзка към темата: ' ); ?></th>
				<td>
					<input id="theme_settings[slider3link]" type="text" size="100" name="theme_settings[slider3link]" value="<?php esc_attr_e( $options['slider3link'] ); ?>" />
					<label for="theme_settings[slider3link]"><?php _e( 'Въведете връзка към темата/статията.' ); ?></label>
				</td>
			</tr>
		</table>
		<hr />
		<h4 style="color: blue">Първи препоръчан текст</h4>
		<table>
<!-- Option 1: text1 -->
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Картинка' ); ?></th>
				<td>
					<input id="theme_settings[text1]" type="text" size="100" name="theme_settings[text1]" value="<?php esc_attr_e( $options['text1'] ); ?>" />
					<label for="theme_settings[text1]"><?php _e( 'пълния път до картинка към текста.' ); ?></label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Заглавие: ' ); ?></th>
				<td>
					<input id="theme_settings[text1title]" type="text" size="50" name="theme_settings[text1title]" value="<?php esc_attr_e( $options['text1title'] ); ?>" />
					<label for="theme_settings[text1title]"><?php _e( 'Ако няма заглавие няма да се показва никакъв текст.' ); ?></label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Текст' ); ?></th>
				<td>
					<label for="theme_settings[text1text]"><?php _e( 'Въведете текста от статията.' ); ?></label>
					<br />
					<textarea id="theme_settings[text1text]" name="theme_settings[text1text]" rows="5" cols="50"><?php esc_attr_e( $options['text1text'] ); ?></textarea>
				</td>
			</tr>
		</table>
		<h4 style="color: blue">Втори препоръчан текст</h4>
		<table>
<!-- Option 2: text2 -->
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Картинка' ); ?></th>
				<td>
					<input id="theme_settings[text2]" type="text" size="100" name="theme_settings[text2]" value="<?php esc_attr_e( $options['text2'] ); ?>" />
					<label for="theme_settings[text2]"><?php _e( 'пълния път до картинка към текста.' ); ?></label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Заглавие: ' ); ?></th>
				<td>
					<input id="theme_settings[text2title]" type="text" size="50" name="theme_settings[text2title]" value="<?php esc_attr_e( $options['text2title'] ); ?>" />
					<label for="theme_settings[text2title]"><?php _e( 'Ако няма заглавие няма да се показва никакъв текст.' ); ?></label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Текст' ); ?></th>
				<td>
					<label for="theme_settings[text2text]"><?php _e( 'Въведете текста от статията.' ); ?></label>
					<br />
					<textarea id="theme_settings[text2text]" name="theme_settings[text2text]" rows="5" cols="50"><?php esc_attr_e( $options['text2text'] ); ?></textarea>
				</td>
			</tr>
		</table>
		<h4 style="color: blue">Трети препоръчан текст</h4>
		<table>
<!-- Option 3: text3 -->
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Картинка' ); ?></th>
				<td>
					<input id="theme_settings[text3]" type="text" size="100" name="theme_settings[text3]" value="<?php esc_attr_e( $options['text3'] ); ?>" />
					<label for="theme_settings[text3]"><?php _e( 'пълния път до картинка към текста.' ); ?></label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Заглавие: ' ); ?></th>
				<td>
					<input id="theme_settings[text3title]" type="text" size="50" name="theme_settings[text3title]" value="<?php esc_attr_e( $options['text3title'] ); ?>" />
					<label for="theme_settings[text3title]"><?php _e( 'Ако няма заглавие няма да се показва никакъв текст.' ); ?></label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Текст' ); ?></th>
				<td>
					<label for="theme_settings[text3text]"><?php _e( 'Въведете текста от статията.' ); ?></label>
					<br />
					<textarea id="theme_settings[text3text]" name="theme_settings[text3text]" rows="5" cols="50"><?php esc_attr_e( $options['text3text'] ); ?></textarea>
				</td>
			</tr>
		</table>
		<hr />
		<h3>Footer</h3>
		<table>
<!-- Option 1: title1 -->
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Заглавие: ' ); ?></th>
				<td>
					<input id="theme_settings[footer1title]" type="text" size="50" name="theme_settings[footer1title]" value="<?php esc_attr_e( $options['footer1title'] ); ?>" />
					<label for="theme_settings[footer1title]"><?php _e( 'Напишете заглавието на рубриката.' ); ?></label>
				</td>
			</tr>			

			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Картинка 1' ); ?></th>
				<td>
					<input id="theme_settings[pic1]" type="text" size="100" name="theme_settings[pic1]" value="<?php esc_attr_e( $options['pic1'] ); ?>" />
					<label for="theme_settings[pic1]"><?php _e( 'пълния път до картинка.' ); ?></label>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Коментар: ' ); ?></th>
				<td>
					<input id="theme_settings[footer1alt]" type="text" size="50" name="theme_settings[footer1alt]" value="<?php esc_attr_e( $options['footer1alt'] ); ?>" />
					<label for="theme_settings[footer1alt]"><?php _e( 'Кратък коментар към картинката.' ); ?></label>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Картинка 2' ); ?></th>
				<td>
					<input id="theme_settings[pic2]" type="text" size="100" name="theme_settings[pic2]" value="<?php esc_attr_e( $options['pic2'] ); ?>" />
					<label for="theme_settings[pic2]"><?php _e( 'пълния път до картинка.' ); ?></label>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Коментар: ' ); ?></th>
				<td>
					<input id="theme_settings[footer2alt]" type="text" size="50" name="theme_settings[footer2alt]" value="<?php esc_attr_e( $options['footer2alt'] ); ?>" />
					<label for="theme_settings[footer2alt]"><?php _e( 'Кратък коментар към картинката.' ); ?></label>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Картинка 3' ); ?></th>
				<td>
					<input id="theme_settings[pic3]" type="text" size="100" name="theme_settings[pic3]" value="<?php esc_attr_e( $options['pic3'] ); ?>" />
					<label for="theme_settings[pic3]"><?php _e( 'пълния път до картинка.' ); ?></label>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Коментар: ' ); ?></th>
				<td>
					<input id="theme_settings[footer3alt]" type="text" size="50" name="theme_settings[footer3alt]" value="<?php esc_attr_e( $options['footer3alt'] ); ?>" />
					<label for="theme_settings[footer3alt]"><?php _e( 'Кратък коментар към картинката.' ); ?></label>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Картинка 4' ); ?></th>
				<td>
					<input id="theme_settings[pic4]" type="text" size="100" name="theme_settings[pic4]" value="<?php esc_attr_e( $options['pic4'] ); ?>" />
					<label for="theme_settings[pic4]"><?php _e( 'пълния път до картинка.' ); ?></label>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Коментар: ' ); ?></th>
				<td>
					<input id="theme_settings[footer4alt]" type="text" size="50" name="theme_settings[footer4alt]" value="<?php esc_attr_e( $options['footer4alt'] ); ?>" />
					<label for="theme_settings[footer4alt]"><?php _e( 'Кратък коментар към картинката.' ); ?></label>
				</td>
			</tr>
		</table>
		<hr />
		<h3>Данни за контакти:</h3>
		<table>

<!-- Option 1: Owner -->
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Лице за контакти/управител' ); ?></th>
				<td>
					<input id="theme_settings[contacts_owner]" type="text" size="36" name="theme_settings[contacts_owner]" value="<?php esc_attr_e( $options['contacts_owner'] ); ?>" />
					<label for="theme_settings[contacts_owner]"><?php _e( 'ще се показва в страницата за контакти.' ); ?></label>
				</td>
			</tr>

<!-- Option 2: Phone -->
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Телефон за контакти' ); ?></th>
				<td>
					<input id="theme_settings[contacts_phone]" type="text" size="36" name="theme_settings[contacts_phone]" value="<?php esc_attr_e( $options['contacts_phone'] ); ?>" />
					<label for="theme_settings[contacts_phone]"><?php _e( ' телефон който ще се показва на всяка страница, както и в страницата за контакти.' ); ?></label>
				</td>
			</tr>

<!-- Option 3: e-mail -->
			<tr valign="top">
				<th scope="row" align="left"><?php _e( 'Мейл за контакти' ); ?></th>
				<td>
					<input id="theme_settings[contacts_email]" type="text" size="36" name="theme_settings[contacts_email]" value="<?php esc_attr_e( $options['contacts_email'] ); ?>" />
					<label for="theme_settings[contacts_email]"><?php _e( 'e-mail който ще се показва на всяка страница, както и в страницата за контакти.' ); ?></label>
				</td>
			</tr>
		</table>
		<hr />
		<?php submit_button(); ?>
	</form>
</div><!-- END wrap -->
	<?php
}

