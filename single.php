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
				<div class="article-meta cf">
					<div class="article-meta-left">
						<?php _e( 'Posted by', 'denta_lite' ); ?> <?php the_author_posts_link(); ?> <?php _e( 'on', 'denta_lite' ); ?> <?php echo get_the_date(); ?>
					</div><!--/.article-meta-left-->
					<a href="#comments-template" title="<?php comments_number( 'No responses', 'One comment', '% comments' ); ?>" class="article-meta-right"><?php comments_number( 'No responses', 'One comment', '% comments' ); ?>
					</a><!--/.article-meta-right-->
				</div><!--/.article-meta.cf-->
				<div class="single-article-entry">
					<?php the_content(); ?>
				</div><!--/.single-article-entry-->
				<?php
				wp_link_pages( array(
					'before'      => '<div class="single-article-pagination"><span class="article-pagination-title">' . __( 'Pages:', 'denta_lite' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );

				if ( has_tag() ) {
					echo '<div class="single-article-tags">';
					the_tags('<span>Tags:</span> ');
					echo '</div>';
				}
				?>
			</article><!--/#single-article-->

		<?php }
	}
	?>

	<?php
	$categories = get_the_category($post->ID);

	if ($categories) {
	 	$category_ids = array();
	 	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

		$args=array(
			'category__in'		=> $category_ids,
			'post__not_in'		=> array($post->ID),
			'caller_get_posts'	=> 1
		);

	 	$my_query = new wp_query($args);

		if( $my_query->have_posts() ) {

		 	echo '<div id="similar-articles">';
		 	echo '<div class="fullwidth-single-title"><h4>'. __( 'Similar Articles', 'denta_lite' ) .'</h4></div>';
		 	echo '<div class="similar-articles-carousel">';
		 	echo '<div id="similar-article-carousel">';

		 	while ($my_query->have_posts()) {
		 	$my_query->the_post();
		 	$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

		 		<div class="similar-article">
		 			<?php
		 			if ( $featured_image ) {
		 				echo '<div class="similar-article-image" style="background-image: url('. $featured_image[0] .');"></div>';
		 			}
		 			?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
					<div class="similar-article-entry">
						<?php echo limitwords( get_the_excerpt(), 30 ); ?>
					</div><!--/.similar-article-entry-->
				</div><!--/.similar-article-->

		 	<?php }

		 	echo '</div>';
			echo '</div>';
			echo '</div>';
		}
	}
	?>

	<?php
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