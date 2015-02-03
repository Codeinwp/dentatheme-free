<?php
/**
 *	The template for displaying Features.
 *
 *	@package ThemeIsle.
 */
?>

<?php
if ( get_theme_mod( 'denta_lite_featuresboxes_box1iconclass', 'fa-phone' ) || get_theme_mod( 'denta_lite_featuresboxes_box1title', 'Emergy Case' ) || get_theme_mod( 'denta_lite_featuresboxes_box1entry', 'Per ad persius epicuri accusamus, ea usu semper.' ) || get_theme_mod( 'denta_lite_featuresboxes_box2iconclass', 'fa-heart' ) || get_theme_mod( 'denta_lite_featuresboxes_box2title', 'Free Consultation' ) || get_theme_mod( 'denta_lite_featuresboxes_box2entry', 'Per ad persius epicuri accusamus, ea usu semper.' ) || get_theme_mod( 'denta_lite_featuresboxes_box3iconclass', 'fa-users' ) || get_theme_mod( 'denta_lite_featuresboxes_box3title', 'Qualified Doctors' ) || get_theme_mod( 'denta_lite_featuresboxes_box3entry', 'Per ad persius epicuri accusamus, ea usu semper.' ) ) {

	echo '<div class="wrap">';
	echo '<section id="features" class="cf">';

		if ( get_theme_mod( 'denta_lite_featuresboxes_box1iconclass', 'fa-phone' ) || get_theme_mod( 'denta_lite_featuresboxes_box1title', 'Emergy Case' ) || get_theme_mod( 'denta_lite_featuresboxes_box1entry', 'Per ad persius epicuri accusamus, ea usu semper.' ) ) {

			echo '<div class="features-box">';

				if ( get_theme_mod( 'denta_lite_featuresboxes_box1iconclass', 'fa-phone' ) ) {
					echo '<i class="features-box-icon fa '. esc_attr( get_theme_mod( 'denta_lite_featuresboxes_box1iconclass', 'fa-phone' ) ) .'"></i>';
				}

				if ( get_theme_mod( 'denta_lite_featuresboxes_box1title', 'Emergy Case' ) ) {
					echo '<h5>'. esc_attr( get_theme_mod( 'denta_lite_featuresboxes_box1title', 'Emergy Case' ) ) .'</h5>';
				}

				if ( get_theme_mod( 'denta_lite_featuresboxes_box1entry', 'Per ad persius epicuri accusamus, ea usu semper.' ) ) {
					echo '<p>'. esc_textarea( get_theme_mod( 'denta_lite_featuresboxes_box1entry', 'Per ad persius epicuri accusamus, ea usu semper.' ) ) .'</p>';
				}

			echo '</div><!--/.features-box-->';

		}

		if ( get_theme_mod( 'denta_lite_featuresboxes_box2iconclass', 'fa-heart' ) || get_theme_mod( 'denta_lite_featuresboxes_box2title', 'Free Consultation' ) || get_theme_mod( 'denta_lite_featuresboxes_box2entry', 'Per ad persius epicuri accusamus, ea usu semper.' ) ) {

			echo '<div class="features-box">';

				if ( get_theme_mod( 'denta_lite_featuresboxes_box2iconclass', 'fa-heart' ) ) {
					echo '<i class="features-box-icon fa '. esc_attr( get_theme_mod( 'denta_lite_featuresboxes_box2iconclass', 'fa-heart' ) ) .'"></i>';
				}

				if ( get_theme_mod( 'denta_lite_featuresboxes_box2title', 'Free Consultation' ) ) {
					echo '<h5>'. esc_attr( get_theme_mod( 'denta_lite_featuresboxes_box2title', 'Free Consultation' ) ) .'</h5>';
				}

				if ( get_theme_mod( 'denta_lite_featuresboxes_box2entry', 'Per ad persius epicuri accusamus, ea usu semper.' ) ) {
					echo '<p>'. esc_textarea( get_theme_mod( 'denta_lite_featuresboxes_box2entry', 'Per ad persius epicuri accusamus, ea usu semper.' ) ) .'</p>';
				}

			echo '</div><!--/.features-box-->';

		}

		if ( get_theme_mod( 'denta_lite_featuresboxes_box3iconclass', 'fa-users' ) || get_theme_mod( 'denta_lite_featuresboxes_box3title', 'Qualified Doctors' ) || get_theme_mod( 'denta_lite_featuresboxes_box3entry', 'Per ad persius epicuri accusamus, ea usu semper.' ) ) {

			echo '<div class="features-box">';

				if ( get_theme_mod( 'denta_lite_featuresboxes_box3iconclass', 'fa-users' ) ) {
					echo '<i class="features-box-icon fa '. esc_attr( get_theme_mod( 'denta_lite_featuresboxes_box3iconclass', 'fa-users' ) ) .'"></i>';
				}

				if ( get_theme_mod( 'denta_lite_featuresboxes_box3title', 'Qualified Doctors' ) ) {
					echo '<h5>'. esc_attr( get_theme_mod( 'denta_lite_featuresboxes_box3title', 'Qualified Doctors' ) ) .'</h5>';
				}

				if ( get_theme_mod( 'denta_lite_featuresboxes_box3entry', 'Per ad persius epicuri accusamus, ea usu semper.' ) ) {
					echo '<p>'. esc_textarea( get_theme_mod( 'denta_lite_featuresboxes_box3entry', 'Per ad persius epicuri accusamus, ea usu semper.' ) ) .'</p>';
				}

			echo '</div><!--/.features-box-->';

		}

	echo '</section><!--/#features.cf-->';
	echo '</div><!--/.wrap-->';

}
?>