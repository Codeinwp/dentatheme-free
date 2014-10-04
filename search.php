<?php
/**
 *	The template for displaying Archive.
 *
 *	@package ThemeIsle.
 */
get_header();
?>
<div class="wrap cf">
	<div class="fullwidth-page-title">
		<h3>
			<?php the_search_query(); ?>
		</h3>
	</div><!--/.fullwidth-page-title-->
	<section id="articles">

		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php
					if ( $featured_image ) {
						echo '<div class="article-featured-image" style="background-image: url('. $featured_image[0] .');"></div>';
					}
					?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="article-title">
						<?php the_title(); ?>
					</a><!--/.article-title-->
					<div class="article-meta cf">
						<div class="article-meta-left">
							<?php _e( 'Posted by', 'ti' ); ?> <?php the_author_posts_link(); ?> <?php _e( 'on', 'ti' ); ?> <?php echo get_the_date(); ?>
						</div><!--/.article-meta-left-->
						<a href="<?php the_permalink(); ?>#comments-template" title="<?php comments_number( 'No responses', 'One comment', '% comments' ); ?>" class="article-meta-right"><?php comments_number( 'No responses', 'One comment', '% comments' ); ?>
						</a><!--/.article-meta-right-->
					</div><!--/.article-meta.cf-->
					<div class="article-entry">
						<?php the_excerpt(); ?>
					</div><!--/.article-entry-->
					<a href="<?php the_permalink(); ?>" title="<?php _e( 'Read More', 'ti' ); ?>" class="article-read-more">
						<?php _e( 'Read More', 'ti' ); ?>
					</a><!--/.article-read-more-->
				</article>

			<?php }
		} else {
			_e( 'No posts found.', 'ti' );
		}

		ti_pagination();
		?>

	</section><!--/#articles-->
	<?php get_sidebar(); ?>
</div><!--/.wrap.cf-->
<?php get_footer(); ?>