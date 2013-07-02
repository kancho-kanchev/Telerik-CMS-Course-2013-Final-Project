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
<?php 
//get theme options
$options = get_option( 'theme_settings' );
if(isset($options['fb'])&&($options['fb']!='')) echo '						<a href="'.$options['fb'].'" class="facebook-ico">facebook-ico</a>'."\n";
if(isset($options['tw'])&&($options['tw']!='')) echo '						<a href="'.$options['tw'].'" class="twitter-ico">twitter-ico</a>'."\n";
if(isset($options['go'])&&($options['go']!='')) echo '						<a href="'.$options['go'].'" class="google-ico">google-ico</a>'."\n";
if(isset($options['sk'])&&($options['sk']!='')) echo '						<a href="'.$options['sk'].'" class="skype-ico">skype-ico</a>'."\n";
if(isset($options['rss'])&&($options['rss']!='')) echo '						<a href="'.$options['rss'].'" class="rss-ico">rss-ico</a>'."\n";
?>
						<div class="cl">&nbsp;</div>
					</div>

					<div class="arrs">
						<a href="#" class="prev-arr"></a>
						<a href="#" class="next-arr"></a>
					</div>

					<ul>
	
<?php
$args = array(
		'posts_per_page' => 8,
		'post__in'  => get_option( 'sticky_posts' ),
		'ignore_sticky_posts' => 1
);
query_posts( $args );

if (have_posts()) :
	$count=0;
	while (have_posts()) :
		the_post();
		$count++;
		echo ('						<li id="img'.$count.'">'."\n");
?>
							<div class="slide-cnt">
								<h4></h4>
								<h2><?php the_title(); ?></h2>
								<p><?php
		$myExcerpt = get_the_excerpt();
		$tags = array("<p>", "</p>", "[...]");
		$myExcerpt = str_replace($tags, "", $myExcerpt);
		echo $myExcerpt."\n";
		echo '								<a href="';
		echo the_permalink();
		echo '">read more</a></p>'."\n";
		echo '							</div>'."\n";
		if (catch_that_image() != '') {
			echo '							<img src="'.catch_that_image().'" alt="'.get_the_title().'" />'."\n";
		}
		echo '						</li>'."\n";

		switch ($count) {
			case 1:
				if ( has_post_thumbnail() ) {
					$img1 = get_the_post_thumbnail();
				}
				else {
					$img1 = '<img src="'.catch_that_image().'" alt="'.get_the_title().'" />';
				}
				break;
			case 2:
				if ( has_post_thumbnail() ) {
					$img2 = get_the_post_thumbnail();
				}
				else {
					$img2 = '<img src="'.catch_that_image().'" alt="'.get_the_title().'" />';
				}
				break;
			case 3:
				if ( has_post_thumbnail() ) {
					$img3 = get_the_post_thumbnail();
				}
				else {
					$img3 = '<img src="'.catch_that_image().'" alt="'.get_the_title().'" />';
				}
				break;
			case 4:
				if ( has_post_thumbnail() ) {
					$img4 = get_the_post_thumbnail();
				}
				else {
					$img4 = '<img src="'.catch_that_image().'" alt="'.get_the_title().'" />';
				}
				break;
			case 5:
						if ( has_post_thumbnail() ) {
					$img5 = get_the_post_thumbnail();
				}
				else {
					$img5 = '<img src="'.catch_that_image().'" alt="'.get_the_title().'" />';
				}
				break;
			case 6:
						if ( has_post_thumbnail() ) {
					$img6 = get_the_post_thumbnail();
				}
				else {
					$img6 = '<img src="'.catch_that_image().'" alt="'.get_the_title().'" />';
				}
				break;
			case 7:
						if ( has_post_thumbnail() ) {
					$img7 = get_the_post_thumbnail();
				}
				else {
					$img7 = '<img src="'.catch_that_image().'" alt="'.get_the_title().'" />';
				}
				break;
			case 8:
						if ( has_post_thumbnail() ) {
					$img8 = get_the_post_thumbnail();
				}
				else {
					$img8 = '<img src="'.catch_that_image().'" alt="'.get_the_title().'" />';
				}
				break;
		}
	endwhile;
endif;
?>
					</ul>
				</div>
				<!-- end of slider -->

				<!-- thumbs -->
				<div id="thumbs-wrapper">
					<div id="thumbs">
<?php
if (isset($img1)) echo '						<a href="#img1" class="selected">'.$img1.'</a>'."\n";
if (isset($img2)) echo '						<a href="#img2">'.$img2.'</a>'."\n";
if (isset($img3)) echo '						<a href="#img3">'.$img3.'</a>'."\n";
if (isset($img4)) echo '						<a href="#img4">'.$img4.'</a>'."\n";
if (isset($img5)) echo '						<a href="#img5">'.$img5.'</a>'."\n";
if (isset($img6)) echo '						<a href="#img6">'.$img6.'</a>'."\n";
if (isset($img7)) echo '						<a href="#img7">'.$img7.'</a>'."\n";
if (isset($img8)) echo '						<a href="#img8">'.$img8.'</a>'."\n";
?>
					</div>
					<a id="prev" href="#"></a>
					<a id="next" href="#"></a>
				</div>
				<!-- end of thumbs -->
			</div>

			<!-- main -->
			<div class="main">
				<div class="featured">
<?php
_e( '<h4>' );
if(isset($options['ads'])&&($options['ads']!='')){
	_e( $options['ads'] );
}
_e( '</h4>' );
if((isset($options['ads_button'])&&($options['ads_button']!='')||(isset($options['ads_button_link'])&&($options['ads_button_link']!='')))) :
	if((isset($options['ads_button'])&&($options['ads_button']!='')&&(isset($options['ads_button_link'])&&($options['ads_button_link']!='')))) {
		_e( '<a href="'.$options['ads_button_link'].'" class="blue-btn">'.$options['ads_button'].'</a>' );
	}
	else {
		if (isset($options['ads_button'])&&($options['ads_button']!='')) {
			_e( '<a href="#" class="blue-btn">'.$options['ads_button'].'</a>' );
		}
		else {
			_e( '<a href="'.$options['ads_button_link'].'" class="blue-btn">'.$options['ads_button_link'].'</a>' );
		}
	}
endif;
?>			
				</div>

				<section class="cols">
					<div class="col">
<?php get_sidebar('about-us'); ?>
					</div>
					<div class="col">
<?php get_sidebar('hiring'); ?>
					</div>
					<div class="col">
<?php get_sidebar('sidebar-right'); ?>
					</div>
					<div class="cl">&nbsp;</div>
				</section>

<!-- ******** end front page ******** -->
<?php get_footer(); ?>