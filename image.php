<?php
/**
 * The template for displaying image attachments.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
			<!-- main -->
			<div class="main">
				<section class="cols">
					<div class="col-span-2">
		<div id="primary" class="image-attachment">
			<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<nav id="nav-single" >
					<h3 class="assistive-text"><?php _e( 'Image navigation' ); ?></h3>
					<span class="nav-previous blue-btn"><?php previous_image_link( false, __( '&larr; Previous' ) ); ?></span>
					<span class="nav-next blue-btn"><?php next_image_link( false, __( 'Next &rarr;' ) ); ?></span>
					<div class="cl"></div>
				</nav><!-- #nav-single -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
							<div class="entry-meta">
								<?php
									$metadata = wp_get_attachment_metadata();
									printf( __( '<span class="meta-prep meta-prep-entry-date">Published </span> <span class="entry-date"><abbr class="published" title="%1$s">%2$s</abbr></span> at <a href="%3$s" title="Link to full-size image">%4$s &times; %5$s</a> in <a href="%6$s" title="Return to %7$s" rel="gallery">%8$s</a>' ),
										esc_attr( get_the_time() ),
										get_the_date(),
										esc_url( wp_get_attachment_url() ),
										$metadata['width'],
										$metadata['height'],
										esc_url( get_permalink( $post->post_parent ) ),
										esc_attr( strip_tags( get_the_title( $post->post_parent ) ) ),
										get_the_title( $post->post_parent )
									);
								?>
								<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
							</div><!-- .entry-meta -->

						</header><!-- .entry-header -->

						<div class="entry-content">

							<div class="entry-attachment">
								<div class="attachment">
<?php
	/**
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL of the next adjacent image in a gallery,
	 * or the first image (if we're looking at the last image in a gallery), or, in a gallery of one, just the link to that image file
	 */
	$attachments = array_values( get_children( array( 'post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) );
	foreach ( $attachments as $k => $attachment ) {
		if ( $attachment->ID == $post->ID )
			break;
	}
	$k++;
	// If there is more than 1 attachment in a gallery
	if ( count( $attachments ) > 1 ) {
		if ( isset( $attachments[ $k ] ) )
			// get the URL of the next image attachment
			$next_attachment_url = get_attachment_link( $attachments[ $k ]->ID );
		else
			// or get the URL of the first image attachment
			$next_attachment_url = get_attachment_link( $attachments[ 0 ]->ID );
	} else {
		// or, if there's only 1 image, get the URL of the image
		$next_attachment_url = wp_get_attachment_url();
	}
?>
									<?php echo wp_get_attachment_image( $post->ID, array( 848, 1024 ) ); ?>

									<?php if ( ! empty( $post->post_excerpt ) ) : ?>
									<div class="entry-caption">
										<?php the_excerpt(); ?>
									</div>
									<?php endif; ?>
								</div><!-- .attachment -->

							</div><!-- .entry-attachment -->

							<div class="entry-description">
								<?php the_content(); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:' ) . '</span>', 'after' => '</div>' ) ); ?>
							</div><!-- .entry-description -->

						</div><!-- .entry-content -->

					</article><!-- #post-<?php the_ID(); ?> -->

					<?php comments_template(); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
					</div>					
					<div class="col">
<?php get_sidebar('sidebar-right'); ?>
					</div>
					<div class="cl"></div>
				</section>
<?php get_footer(); ?>