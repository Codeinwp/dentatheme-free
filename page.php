<?php
/**
 *	The template for displaying Single.
 *
 *	@package 9Pixels.
 */
get_header();
?>
<div class="wrap">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

			<article id="single-article">

				<?php
				if ( $featured_image ) {
					echo '<div class="single-article-featured" style="background-image: url('. $featured_image[0] .');"></div>';
				}
				?>

				<h1><?php the_title(); ?></h1>
				<div class="single-article-entry">
					<?php the_content(); ?>
				</div><!--/.single-article-entry-->
			</article><!--/#single-article-->

		<?php }
	}

	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();

			comments_template();

		}
	}
	wp_reset_postdata();
	?>

	<div class="single-grap">
	</div><!--/.single-grap-->

</div><!--/.wrap-->
<?php get_footer(); ?>