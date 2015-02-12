<?php
/**
 *	Template name: Home
 *
 *	The template for displaying Front Page.
 *
 *	@package ThemeIsle.
 */
get_header();
get_template_part( 'includes/subheader' );
get_template_part( 'includes/features' );
get_template_part( 'includes/featured-article' );
?>
<section id="latest-news">
	<div class="wrap cf">
		<?php
		if ( get_theme_mod( 'denta_lite_latestnews_title' ) ) {
			echo '<div class="fullwidth-title">'. esc_attr( get_theme_mod( 'denta_lite_latestnews_title', 'Latest News' ) ) .'</div>';
		}
		?>
		<div class="latest-news-articles cf">

			<?php
			$args = array (
				'post_type'              => 'post',
			);
			$wp_query = new WP_Query( $args );

			if ( $wp_query->have_posts() ) {
				while ( $wp_query->have_posts() ) {
					$wp_query->the_post();
					$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php
						if ( $featured_image ) { ?>
							<a href="<?php the_permalink(); ?>" class="article-featured-image" style="background-image: url(<?php echo $featured_image[0]; ?>);">
								<div class="article-featured-background-hover">
								</div><!--/.article-featured-background-hover-->
								<div class="article-featured-image-hover">
									<?php _e( 'Read More', 'denta_lite' ); ?>
								</div><!--/.article-featured-image-hover-->
							</a><!--/.article-featured-image-->
						<?php } else { ?>
							<a href="<?php the_permalink(); ?>" class="article-featured-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/latest-news-blank-image.png);">
								<div class="article-featured-background-hover">
								</div><!--/.article-featured-background-hover-->
								<div class="article-featured-image-hover">
									<?php _e( 'Read More', 'denta_lite' ); ?>
								</div><!--/.article-featured-image-hover-->
							</a><!--/.article-featured-image-->
						<?php }
						?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="article-title">
							<?php the_title(); ?>
						</a><!--/.article-title-->
						<div class="article-entry">
							<?php echo substr(get_the_excerpt(), 0,170); ?>
						</div><!--/.article-entry-->
					</article>

				<?php }
			} else {
				echo __( 'No posts found.', 'denta_lite' );
			}
			wp_reset_postdata();
			?>

		</div><!--/.latest-news-articles.cf-->
	</div><!--/.wrap.cf-->
</section><!--/#latest-news-->
<?php get_footer(); ?>