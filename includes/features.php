<?php
/**
 *	The template for displaying Features.
 *
 *	@package ThemeIsle.
 */
?>
<div class="wrap">
	<section id="features" class="cf">

		<div class="features-box">
			<?php
			if ( get_theme_mod( 'ti_features_box1iconclass' ) ) {
				echo '<i class="features-box-icon fa '. get_theme_mod( 'ti_features_box1iconclass' ) .'"></i>';
			} else {
				echo '<i class="features-box-icon fa fa-phone"></i>';
			}

			if ( get_theme_mod( 'ti_features_box1title' ) ) {
				echo '<h5>'. get_theme_mod( 'ti_features_box1title' ) .'</h5>';
			} else {
				echo '<h5>'. __( 'Title 1', 'ti' ) .'</h5>';
			}

			if ( get_theme_mod( 'ti_features_box1entry' ) ) {
				echo '<p>'. get_theme_mod( 'ti_features_box1entry' ) .'</p>';
			} else {
				echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'ti' ) .'</p>';
			}
			?>
		</div><!--/.features-box-->

		<div class="features-box">
			<?php
			if ( get_theme_mod( 'ti_features_box2iconclass' ) ) {
				echo '<i class="features-box-icon fa '. get_theme_mod( 'ti_features_box2iconclass' ) .'"></i>';
			} else {
				echo '<i class="features-box-icon fa fa-heart"></i>';
			}

			if ( get_theme_mod( 'ti_features_box2title' ) ) {
				echo '<h5>'. get_theme_mod( 'ti_features_box2title' ) .'</h5>';
			} else {
				echo '<h5>'. __( 'Title 2', 'ti' ) .'</h5>';
			}

			if ( get_theme_mod( 'ti_features_box2entry' ) ) {
				echo '<p>'. get_theme_mod( 'ti_features_box2entry' ) .'</p>';
			} else {
				echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'ti' ) .'</p>';
			}
			?>
		</div><!--/.features-box-->
		<div class="features-box">
			<?php
			if ( get_theme_mod( 'ti_features_box3iconclass' ) ) {
				echo '<i class="features-box-icon fa '. get_theme_mod( 'ti_features_box3iconclass' ) .'"></i>';
			} else {
				echo '<i class="features-box-icon fa fa-users"></i>';
			}

			if ( get_theme_mod( 'ti_features_box3title' ) ) {
				echo '<h5>'. get_theme_mod( 'ti_features_box3title' ) .'</h5>';
			} else {
				echo '<h5>'. __( 'Title 3', 'ti' ) .'</h5>';
			}

			if ( get_theme_mod( 'ti_features_box3entry' ) ) {
				echo '<p>'. get_theme_mod( 'ti_features_box3entry' ) .'</p>';
			} else {
				echo '<p>'. __( 'Go to Appearance - Customize, to add content.', 'ti' ) .'</p>';
			}
			?>
		</div><!--/.features-box-->
	</section><!--/#features .cf-->
</div><!--/.wrap-->