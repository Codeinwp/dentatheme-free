<?php
$testimonials_numberofarticles = get_theme_mod( 'ti_testimonials_numberofarticles' );
$args = array (
	'post_type'              => 'testimonials',
	'posts_per_page'         => $testimonials_numberofarticles,
	'ignore_sticky_posts'    => true,
);
$wp_query = new WP_Query( $args ); ?>

<?php
if ( $wp_query->have_posts() ) { ?>

	<section id="testimonials">
		<div class="wrap">
			<?php
			if ( get_theme_mod( 'ti_testimonials_title' ) ) {
				echo '<div class="fullwidth-title">'. get_theme_mod( 'ti_testimonials_title' ) .'</div>';
			}

			if ( get_theme_mod( 'ti_testimonials_entry' ) ) {
				echo '<div class="fullwidth-description">'. get_theme_mod( 'ti_testimonials_entry' ) .'</div>';
			}
			?>
			<div class="testimonials-carousel">

				<a id="testimonials-slide-prev" class="testimonials-slide-prev" href="#"></a>
				<a id="testimonials-slide-next" class="testimonials-slide-next" href="#"></a>

				<ul id="testimonials-slides">

					<?php
					if ( $wp_query->have_posts() ) {
						while ( $wp_query->have_posts() ) {
							$wp_query->the_post();
							$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							$testimonial_position = get_post_meta($post->ID, 'ti_testimonial_position', true);
							$testimonial_companyname = get_post_meta($post->ID, 'ti_testimonial_companyname', true);
							$testimonial_companylink = get_post_meta($post->ID, 'ti_testimonial_companylink', true); ?>

							<div class="testimonial-slide">
								<div class="testimonial-slide-box">
									<?php
									if ( $featured_image ) {
										echo '<div class="slide-box-image" style="background-image: url('. $featured_image[0] .');"></div>';
									} else {
										echo '<div class="no-slide-box-image">'. __( 'No image', 'ti' ) .'</div>';
									}
									?>
									<div class="slide-box-title">
										<h6><?php the_title(); ?></h6>
									</div><!--/.slide-box-title-->
									<div class="slide-box-meta">
										<?php
										if ( $testimonial_position ) {
											echo $testimonial_position . __( ' at ', 'ti' );
										}

										if ( $testimonial_companylink ) {
											echo '<span><a href="'. $testimonial_companylink .'" title="'. $testimonial_companyname .'" target="_blank">'. $testimonial_companyname .'</a></span>';
										} else {
											echo '<span>'. $testimonial_companyname .'</span>';
										}
										?>
									</div><!--/.slide-box-meta-->
								</div><!--/.testimonial-slide-box-->
								<div class="testimonial-slide-entry">
									<span><?php _e( '"', 'ti' ); ?></span>
									<?php the_content(); ?>
									<span><?php _e( '"', 'ti' ); ?></span>
								</div><!--/.testimonial-slide-entry-->
							</div><!--/.testimonial-slide-->

						<?php }
					} else {
						_e( 'No posts found.', 'ti' );
					}
					?>

				</ul><!--/#testimonials-slides-->
				<div class="clearfix"></div>

			</div><!--/.testimonials-carousel-->
		</div><!--/.wrap-->
	</section><!--/#testimonials-->

<?php }
?>


<?php wp_reset_postdata(); ?>