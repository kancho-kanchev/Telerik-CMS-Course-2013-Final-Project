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
<?php get_header(); ?>
<!-- ******** front page ******** -->
			<!-- slider-holder -->
			<div class="slider-holder">
				
				<!-- slider -->
				<div class="slider">
					<div class="socials">
						<a href="#" class="facebook-ico">facebook-ico</a>
						<a href="#" class="twitter-ico">twitter-ico</a>
						<a href="#" class="skype-ico">skype-ico</a>
						<a href="#" class="rss-ico">rss-ico</a>
						<div class="cl">&nbsp;</div>
					</div>

					<div class="arrs">
						<a href="#" class="prev-arr"></a>
						<a href="#" class="next-arr"></a>
					</div>

					<ul>
						<li id="img1">
							<div class="slide-cnt">
								<h4>Heading Title Goes</h4>
								<h2>Just Like That</h2>
								<p>Acor porta mi, non venenatis augue imperdiet quis. Nam faucibus, felis ut suscipit vulputate, tortor quam ultricies neque, eget dignissim elit urna a metus. Aliquam sed quam dui, id lacinia nunc. <a href="#">read more</a></p>
							</div>
							<img src="<?php echo get_template_directory_uri() ?>/images/slider-header.png" alt="" />
						</li>

						<li id="img2">
							<div class="slide-cnt">
								<h4>Heading Title Goes</h4>
								<h2>Just Like That</h2>
								<p>Acor porta mi, non venenatis augue imperdiet quis. Nam faucibus, felis ut suscipit vulputate, tortor quam ultricies neque, eget dignissim elit urna a metus. Aliquam sed quam dui, id lacinia nunc. <a href="#">read more</a></p>
							</div>
							<img src="<?php echo get_template_directory_uri() ?>/images/slider-header.png" alt="" />
						</li>

						<li id="img3">
							<div class="slide-cnt">
								<h4>Heading Title Goes</h4>
								<h2>Just Like That</h2>
								<p>Acor porta mi, non venenatis augue imperdiet quis. Nam faucibus, felis ut suscipit vulputate, tortor quam ultricies neque, eget dignissim elit urna a metus. Aliquam sed quam dui, id lacinia nunc. <a href="#">read more</a></p>
							</div>
							<img src="<?php echo get_template_directory_uri() ?>/images/slider-header.png" alt="" />
						</li>

						<li id="img4">
							<div class="slide-cnt">
								<h4>Heading Title Goes</h4>
								<h2>Just Like That</h2>
								<p>Acor porta mi, non venenatis augue imperdiet quis. Nam faucibus, felis ut suscipit vulputate, tortor quam ultricies neque, eget dignissim elit urna a metus. Aliquam sed quam dui, id lacinia nunc. <a href="#">read more</a></p>
							</div>
							<img src="<?php echo get_template_directory_uri() ?>/images/slider-header.png" alt="" />
						</li>

						<li id="img5">
							<div class="slide-cnt">
								<h4>Heading Title Goes</h4>
								<h2>Just Like That</h2>
								<p>Acor porta mi, non venenatis augue imperdiet quis. Nam faucibus, felis ut suscipit vulputate, tortor quam ultricies neque, eget dignissim elit urna a metus. Aliquam sed quam dui, id lacinia nunc. <a href="#">read more</a></p>
							</div>
							<img src="<?php echo get_template_directory_uri() ?>/images/slider-header.png" alt="" />
						</li>

						<li id="img6">
							<div class="slide-cnt">
								<h4>Heading Title Goes</h4>
								<h2>Just Like That</h2>
								<p>Acor porta mi, non venenatis augue imperdiet quis. Nam faucibus, felis ut suscipit vulputate, tortor quam ultricies neque, eget dignissim elit urna a metus. Aliquam sed quam dui, id lacinia nunc. <a href="#">read more</a></p>
							</div>
							<img src="<?php echo get_template_directory_uri() ?>/images/slider-header.png" alt="" />
						</li>

						<li id="img7">
							<div class="slide-cnt">
								<h4>Heading Title Goes</h4>
								<h2>Just Like That</h2>
								<p>Acor porta mi, non venenatis augue imperdiet quis. Nam faucibus, felis ut suscipit vulputate, tortor quam ultricies neque, eget dignissim elit urna a metus. Aliquam sed quam dui, id lacinia nunc. <a href="#">read more</a></p>
							</div>
							<img src="<?php echo get_template_directory_uri() ?>/images/slider-header.png" alt="" />
						</li>

						<li id="img8">
							<div class="slide-cnt">
								<h4>Heading Title Goes</h4>
								<h2>Just Like That</h2>
								<p>Acor porta mi, non venenatis augue imperdiet quis. Nam faucibus, felis ut suscipit vulputate, tortor quam ultricies neque, eget dignissim elit urna a metus. Aliquam sed quam dui, id lacinia nunc. <a href="#">read more</a></p>
							</div>
							<img src="<?php echo get_template_directory_uri() ?>/images/javascript-ninja.png" alt="" />
						</li>
					</ul>
				</div>
				<!-- end of slider -->

				<!-- thumbs -->
				<div id="thumbs-wrapper">
					<div id="thumbs">
						<a href="#img1" class="selected"><img src="<?php echo get_template_directory_uri() ?>/images/javascript-ninja.png"/></a>
						<a href="#img2"><img src="<?php echo get_template_directory_uri() ?>/images/javascript-ninja.png" /></a>
						<a href="#img3"><img src="<?php echo get_template_directory_uri() ?>/images/javascript-ninja.png" /></a>
						<a href="#img4"><img src="<?php echo get_template_directory_uri() ?>/images/javascript-ninja.png" /></a>
						<a href="#img5"><img src="<?php echo get_template_directory_uri() ?>/images/javascript-ninja.png" /></a>
						<a href="#img6"><img src="<?php echo get_template_directory_uri() ?>/images/javascript-ninja.png" /></a>
						<a href="#img7"><img src="<?php echo get_template_directory_uri() ?>/images/javascript-ninja.png" /></a>
						<a href="#img8"><img src="<?php echo get_template_directory_uri() ?>/images/javascript-ninja.png" /></a>
					</div>
					<a id="prev" href="#"></a>
					<a id="next" href="#"></a>
				</div>
				<!-- end of thumbs -->
			</div>

			<!-- main -->
			<div class="main">

				<div class="featured">
					<h4>Welcome to <strong>Company Name.</strong> Start Creating Your Website Today completely for <strong>FREE!</strong></h4>
					<a href="#" class="blue-btn">GET IN TOUCH</a>
				</div>

				<section class="cols">
					<div class="col">
						
						<?php //if(!dynamic_sidebar('about_us')): endif; ?>
						<h3>About Us</h3>
						<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis. Ut ultricies rutrum lorem, in blandit tortor congue pulvinar lorem ipsum dolor sit amet, consectetur adipiscing elit. <br /><a href="#" class="more">view more</a></p>
					</div>

					<div class="col">
						<h3>We’re Hiring</h3>
						<img src="<?php echo get_template_directory_uri() ?>/images/col-img.png" alt="" class="left"/>
						<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h5>
						<div class="cl">&nbsp;</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis adispicing amet sit. <br /><a href="#" class="more">view more</a></p>
					</div>

					<div class="col">
						<h3>Our Services</h3>
						<ul>
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Sit atmet, consectetur lorem </a></li>
							<li><a href="#">Consectetur adispicing dolor</a></li>
							<li><a href="#">Lipsuim dolor amet adpispicing</a></li>
							<li><a href="#">Lipsuim dolor amet adpispicing</a></li>
						</ul>
					</div>
					<div class="cl">&nbsp;</div>
				</section>

<!-- ******** end front page ******** -->
<?php get_footer(); ?>