<?php
/**
 * The template for displaying contacts pages.
 *
 *
 * @package The 2013 Final Project for CMS course
 * @subpackage kanchev-bgdotcom
 * @since Project 2 v.1.0
 */
?>
<?php get_header();
//get theme options
$options = get_option( 'theme_settings' );
?>
<!-- ******** contacts page ******** -->
			<!-- main -->
			<div class="main">
				<section class="cols">
					<div class="col-span-2">
						<article>









<div id="site_content">
	<div id="contactus" class="content">
<!-- 		<h1>Contact Us</h1>
		<p>Say hello, using this contact form.</p> -->
		<?php
			// Set-up these 3 parameters
			// 1. Enter the email address you would like the enquiry sent to
			// 2. Enter the subject of the email you will receive, when someone contacts you
			// 3. Enter the text that you would like the user to see once they submit the contact form
			$to = 'kancho_k@abv.bg';
			$subject = 'From CMS HomeWork Site';
			$contact_submitted = 'Your message has been sent.';
			
			// Do not amend anything below here, unless you know PHP
			function email_is_valid($email) {
				return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
			}
			if (!email_is_valid($to)) {
				echo '<p style="color: red;">You must set-up a valid (to) email address before this contact page will work.</p>';
			}
			if (isset($_POST['contact_submitted'])) {
				$return = "\r";
				$youremail = trim(htmlspecialchars($_POST['your_email']));
				$yourname = stripslashes(strip_tags($_POST['your_name']));
				$yourmessage = stripslashes(strip_tags($_POST['your_message']));
				$contact_name = "Name: ".$yourname;
				$message_text = "Message: ".$yourmessage;
				$user_answer = trim(htmlspecialchars($_POST['user_answer']));
				$answer = trim(htmlspecialchars($_POST['answer']));
				$message = $contact_name . $return . $message_text;
				$headers = "From: ".$youremail;
				if (email_is_valid($youremail) && !eregi("\r",$youremail) && !eregi("\n",$youremail) && $yourname != "" && $yourmessage != "" && substr(md5($user_answer),5,10) === $answer) {
					mail($to,$subject,$message,$headers);
					$yourname = '';
					$youremail = '';
					$yourmessage = '';
					echo '<p style="color: blue;">'.$contact_submitted.'</p>';
				}
				else echo '<p style="color: red;">Please enter your name, a valid email address, your message and the answer to the simple maths question before sending your message.</p>';
			}
			$number_1 = rand(1, 9);
			$number_2 = rand(1, 9);
			$answer = substr(md5($number_1+$number_2),5,10);
		?>
		<form id="contact" action="contact.php" method="post">
			<div class="form_settings">
<!-- 			<p><span>Name</span><input class="contact" type="text" name="your_name" value="<?php //echo $yourname; ?>" /></p>
			<p><span>Email Address</span><input class="contact" type="text" name="your_email" value="<?php //echo $youremail; ?>" /></p>
			<p><span>Message</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"><?php //echo $yourmessage; ?></textarea></p>
			<p style="line-height: 1.7em;">To help prevent spam, please enter the answer to this question:</p>
			<p><span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ?</span><input type="text" name="user_answer" /><input type="hidden" name="answer" value="<?php echo $answer; ?>" /></p> -->
			<!-- <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p> -->
			
			
			
			
			<?php //if(isset($options['ads'])) {  esc_attr_e ( $options['ads'] ); } ?>
<pre>
<?php
if(isset($options['contact_text_one'])&&($options['contact_text_one']!='')) echo $options['contact_text_one']."\n";
if(isset($options['contact_email'])&&($options['contact_email']!='')) echo 'e-mail: '.$options['contact_email']."\n";
?>			
</pre>			
			
			
			
			
				<noscript>
					<p><input type="hidden" name="nojs" id="nojs" /></p>
				</noscript>
				<br />
				<p>
					<input type="text" name="name" id="name" value="<?php //get_data("name"); ?>" size="35" />
					<label for="name">name (required)</label>
				</p>
				<p>
					<input type="text" name="email" id="email" value="<?php //get_data("email"); ?>" size="35" />
					<label for="email">e-mail (required)</label>
				</p>
				<p>
					<input type="text" name="url" id="url" value="<?php //get_data("url"); ?>" size="35" />
					<label for="url">website</label>
				</p>
				<p>
					<input type="text" name="phone" id="phone" value="<?php //get_data("phone"); ?>" size="35" />
					<label for="phone">phone</label>
				</p>
				<p>
					<label for="comments" >message (required)</label>
					<textarea name="comments" id="comments" rows="10" cols="80"><?php //get_data("comments"); ?></textarea>
				</p>
				<p>To help prevent spam, please enter the answer to this question:</p>
				<p>
					<span><?php echo $number_1; ?> + <?php echo $number_2; ?> = </span>
					<input type="text" name="user_answer" size="3" />
					<input type="hidden" name="answer" value="<?php //echo $answer; ?>" size="11" /></p>
				<p>
					<input name="submit" type="submit" id="submit" value="send form"
						<?php if (isset($disable) && $disable === true) echo ' disabled="disabled"'; ?> />&nbsp;
					<input name="reset" type="reset" id="reset" tabindex="5" value="reset form" />
				</p>
			</div>
		</form>
	</div>
</div>
















						</article>
					</div>					
					<div class="col">
<?php get_sidebar('sidebar-right');
echo '<div width="286">';
echo '<pre>';
if(isset($options['contact_text_two'])&&($options['contact_text_two']!='')) echo $options['contact_text_two']."\n";
echo '</pre>';
echo '</div>';
?>
					</div>
					<div class="cl"></div>
				</section>
<?php get_footer(); ?>