<?php
/**
 *	The template for displaying 404.
 *
 *	@package 9Pixels.
 */
get_header();
?>
<div class="wrap">
	<div id="custom-page">
		<div class="fullwidth-page-title">
			<?php
			if ( get_theme_mod( 'ti_404page_title1' ) ) {
				echo '<h3>'. get_theme_mod( 'ti_404page_title1' ) .'</h3>';
			} else {
				echo '<h3>'. __( 'Error', 'ti' ) .'</h3>';
			}
			?>
		</div><!--/.fullwidth-page-title-->
		<div class="custom-page-content">
			<?php
			if ( get_theme_mod( 'ti_404page_title2' ) ) {
				echo '<h2>'. get_theme_mod( 'ti_404page_title2' ) .'</h2>';
			} else {
				echo '<h2>'. __( 'The page you were looking for was not found.', 'ti' ) .'</h2>';
			}
			?>
			<div class="page-content-entry">
				<?php
				if ( get_theme_mod( 'ti_404page_entry' ) ) {
					echo htmlspecialchars_decode( get_theme_mod( 'ti_404page_entry' ) );
				} else {
					echo '<p>'. __( 'The page you are looking for does not exist, I can take you to the ', 'ti' ) .'<a href="'. home_url() .'" title="'. __( 'home page.', 'ti' ) .'">'. __( 'home page.', 'ti' ) .'</a></p>';
				}
				?>
			</div><!--/.page-content-entry-->
		</div><!--/.custom-page-content-->

		<?php
		if ( get_theme_mod( 'ti_404page_subtitle' ) || get_theme_mod( 'ti_404page_email' ) || get_theme_mod( 'ti_404page_telephone' ) || get_theme_mod( 'ti_404page_url' ) ) { ?>

			<div class="custom-page-info">
				<?php
				if ( get_theme_mod( 'ti_404page_subtitle' ) ) {
					echo '<h2>'. get_theme_mod( 'ti_404page_subtitle' ) .'</h2>';
				}

				if ( get_theme_mod( 'ti_404page_email' ) || get_theme_mod( 'ti_404page_telephone' ) || get_theme_mod( 'ti_404page_url' ) ) { ?>

					<ul>
						<?php
						if ( get_theme_mod( 'ti_404page_email' ) ) {
							echo '<li><i class="fa fa-envelope"></i><a href="mailto:'. get_theme_mod( 'ti_404page_email' ) .'" title="'. get_theme_mod( 'ti_404page_email' ) .'">'. get_theme_mod( 'ti_404page_email' ) .'</a></li>';
						}

						if ( get_theme_mod( 'ti_404page_telephone' ) ) {
							echo '<li><i class="fa fa-phone"></i>'. get_theme_mod( 'ti_404page_telephone' ) .'</li>';
						}

						if ( get_theme_mod( 'ti_404page_url' ) ) {
							echo '<li><i class="fa fa-home"></i><a href="'. get_theme_mod( 'ti_404page_url' ) .'" title="'. get_theme_mod( 'ti_404page_url' ) .'">'. get_theme_mod( 'ti_404page_url' ) .'</a></li>';
						}
						?>
					</ul>

				<?php }
				?>
			</div><!--/.custom-page-info-->

		<?php }
		?>

	</div><!--/#custom-page-->
</div><!--/.wrap-->
<?php get_footer(); ?>