<?php
if ( get_theme_mod( 'denta_lite_featuredarticle_image', get_template_directory_uri() . '/images/featured-article-image.jpg' ) || get_theme_mod( 'denta_lite_featuredarticle_title', 'Welcome to Our Center' ) || get_theme_mod( 'denta_lite_featuredarticle_entry' ) ) { ?>

	<section id="featured-article">
		<div class="wrap cf">
			<?php
			if ( get_theme_mod( 'denta_lite_featuredarticle_image', get_template_directory_uri() . '/images/featured-article-image.jpg' ) ) {
				echo '<div class="featured-article-image"><img src="'. esc_url( get_theme_mod( 'denta_lite_featuredarticle_image', get_template_directory_uri() . '/images/featured-article-image.jpg' ) ) .'" alt="'. esc_attr( get_theme_mod( 'denta_lite_featuredarticle_title', 'Welcome to Our Center' ) ) .'" title="'. esc_attr( get_theme_mod( 'denta_lite_featuredarticle_title', 'Welcome to Our Center' ) ) .'" /></div>';
			}
			?>
			<div class="featured-article-content">
				<?php
				if ( get_theme_mod( 'denta_lite_featuredarticle_title', 'Welcome to Our Center' ) ) {
					echo '<h3>'. esc_attr( get_theme_mod( 'denta_lite_featuredarticle_title', 'Welcome to Our Center' ) ) .'</h3>';
				}

				if ( get_theme_mod( 'denta_lite_featuredarticle_entry', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut.' ) ) {
					echo '<div class="featured-article-content-entry">'. esc_textarea( get_theme_mod( 'denta_lite_featuredarticle_entry', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut.' ) ) .'</div>';
				}
				?>
			</div><!--/.featured-article-content-->
		</div><!--/.wrap.cf-->
	</section><!--/#featured-article-->

<?php }
?>