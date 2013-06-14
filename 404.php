<?php
/**
 * The template for displaying the error 404 page.
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
<div id="site_content">
	<div class="content">
		<h1 class="center"><strong>404</strong></h1>
		<h2 class="center">Error Four Oh Four - Page Not Found</h2>
		<h4>Wooah you have tried to access a page which doesn't exist or has been moved. You have a few options:</h4>
		<h4>* Send me an e-mail and I will look into the error.</h4>
		<h4>* Go back to the homepage and take a look at my portfolio.</h4>
		<p></p>
		<h3>Press any link to continue...</h3>
		<h4><a href="<?php echo home_url(); ?>">Home</a>, <a href="http://kanchev-bg.com">Contact Me</a></h4>
	</div>
</div>
<?php get_footer(); ?>
