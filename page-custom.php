<?php
/**
 *	Template Name: Custom
 *
 *	The template for displaying 404.
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
			$informations_title = get_post_meta($post->ID, 'ti_informations_title', true);
			$informations_email = get_post_meta($post->ID, 'ti_informations_email', true);
			$informations_telephone = get_post_meta($post->ID, 'ti_informations_telephone', true);
			$informations_url = get_post_meta($post->ID, 'ti_informations_url', true); ?>

			<div id="custom-page">
				<div class="fullwidth-page-title">
					<h3><?php the_title(); ?></h3>
				</div><!--/.fullwidth-page-title-->
				<div class="custom-page-content">
					<?php the_content(); ?>
				</div><!--/.custom-page-content-->

				<?php
				if ( $informations_title || $informations_email || $informations_telephone || $informations_url ) { ?>

					<div class="custom-page-info">
						<?php
						if ( $informations_title ) {
							echo '<h2>'. $informations_title .'</h2>';
						}

						if ( $informations_email || $informations_telephone || $informations_url ) { ?>

							<ul>
								<?php
								if ( $informations_email ) {
									echo '<li><i class="fa fa-envelope"></i><a href="mailto:'. $informations_email .'" title="'. $informations_email .'">'. $informations_email .'</a></li>';
								}

								if ( $informations_telephone ) {
									echo '<li><i class="fa fa-phone"></i><a href="tel:'. $informations_telephone .'" title="'. $informations_telephone .'">'. $informations_telephone .'</a></li>';
								}

								if ( $informations_url ) {
									echo '<li><i class="fa fa-home"></i><a href="'. $informations_url .'" title="'. $informations_url .'">'. $informations_url .'</a></li>';
								}
								?>
							</ul>

						<?php }
						?>

					</div><!--/.custom-page-info-->

				<?php }
				?>

			</div><!--/#custom-page-->

		<?php }
	}
	wp_reset_postdata();
	?>

</div><!--/.wrap-->
<?php get_footer(); ?>