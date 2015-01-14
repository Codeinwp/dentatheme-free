<?php
if ( get_theme_mod( 'denta_lite_featuredarticle_image' ) || get_theme_mod( 'denta_lite_featuredarticle_title' ) || get_theme_mod( 'denta_lite_featuredarticle_entry' ) ) { ?>

	<section id="featured-article">
		<div class="wrap cf">
			<?php
			if ( get_theme_mod( 'denta_lite_featuredarticle_image' ) ) {
				echo '<div class="featured-article-image"><img src="'. get_theme_mod( 'denta_lite_featuredarticle_image' ) .'" alt="'. get_theme_mod( 'denta_lite_featuredarticle_title' ) .'" title="'. get_theme_mod( 'denta_lite_featuredarticle_title' ) .'" /></div>';
			}
			?>
			<div class="featured-article-content">
				<?php
				if ( get_theme_mod( 'denta_lite_featuredarticle_title' ) ) {
					echo '<h3>'. get_theme_mod( 'denta_lite_featuredarticle_title' ) .'</h3>';
				}

				if ( get_theme_mod( 'denta_lite_featuredarticle_entry' ) ) {
					echo '<div class="featured-article-content-entry">'. htmlspecialchars_decode( get_theme_mod( 'denta_lite_featuredarticle_entry' ) ) .'</div>';
				}
				?>
			</div><!--/.featured-article-content-->
		</div><!--/.wrap.cf-->
	</section><!--/#featured-article-->

<?php }
?>