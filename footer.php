		<footer>
			<div class="wrap cf">
				<div class="footer-top cf">
					<div class="footer-top-box1">
						<?php
						if ( get_theme_mod( 'denta_lite_general_topfooter_logo', get_template_directory_uri() . '/images/footer-logo.png' ) ) {
							echo '<div class="footer-box1-logo">';
							echo '<img src="'. esc_url( get_theme_mod( 'denta_lite_general_topfooter_logo', get_template_directory_uri() . '/images/footer-logo.png' ) ) .'" title="'. esc_attr( get_bloginfo( 'name' ) ) .'" alt="'. esc_attr( get_bloginfo( 'name' ) ) .'" />';
							echo '</div><!--/.footer-box1-logo-->';
						}

						if ( get_theme_mod( 'denta_lite_general_topfooter_entry1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' ) ) {
							echo '<div class="footer-box1-entry">';
							echo esc_textarea( get_theme_mod( 'denta_lite_general_topfooter_entry1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' ) );
							echo '</div><!--/.footer-box1-entry-->';
						}
						?>
					</div><!--/.footer-top-box1-->
					<div class="footer-top-box2">
						<div class="footer-title">
							<?php _e( 'Menu', 'denta_lite' ); ?>
						</div><!--/.footer-title-->
						<?php
						wp_nav_menu( array(
								'theme_location'	=> 'footer_navigation',
								'container'			=> '',
								'container_class'	=> ''
							)
						);
						?>
					</div><!--/.footer-top-box2-->
					<div class="footer-top-box3">
						<div class="footer-box3-entry">
							<?php
							echo get_theme_mod( 'denta_lite_general_topfooter_entry2', '<p>Denta Theme Ltd</p><p>7th Avenue</p><p>123 45 Oklahoma</p><p>contact@yourwebsite.com</p><p>+1 123 7798 33</p>' );
							?>
						</div><!--/.footer-box3-entry-->
						<?php
						if ( get_theme_mod( 'denta_lite_general_topfooter_facebooklink', '#' ) ) {
							echo '<a href="'. esc_url( get_theme_mod( 'denta_lite_general_topfooter_facebooklink', '#' ) ) .'" title="'. __( 'Facebook', 'denta_lite' ) .'" target="_blank" class="facebook-icon"></a>';
						}

						if ( get_theme_mod( 'denta_lite_general_topfooter_twitterlink', '#' ) ) {
							echo '<a href="'. esc_url( get_theme_mod( 'denta_lite_general_topfooter_twitterlink', '#' ) ) .'" title="'. __( 'Twitter', 'denta_lite' ) .'" target="_blank" class="twitter-icon"></a>';
						}

						if ( get_theme_mod( 'denta_lite_general_topfooter_youtubelink', '#' ) ) {
							echo '<a href="'. esc_url( get_theme_mod( 'denta_lite_general_topfooter_youtubelink', '#' ) ) .'" title="'. __( 'YouTube', 'denta_lite' ) .'" target="_blank" class="youtube-icon"></a>';
						}

						if ( get_theme_mod( 'denta_lite_general_topfooter_linkedinlink', '#' ) ) {
							echo '<a href="'. esc_url( get_theme_mod( 'denta_lite_general_topfooter_linkedinlink', '#' ) ) .'" title="'. __( 'LinkedIn', 'denta_lite' ) .'" target="_blank" class="linkedin-icon"></a>';
						}
						?>
					</div><!--/.footer-top-box3-->
				</div><!--/.footer-top.cf-->
				<div class="footer-left">
					<?php echo get_theme_mod( 'denta_lite_footer_entry', 'Copyright &copy; ThemeIsle.' ); ?>
				</div><!--/.footer-left-->
				<div class="footer-right">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="nofollow"><?php bloginfo( 'name' ); ?></a> | Proudly powered by <a href="http://www.wordpress.org" title="WordPress" target="_blank" rel="nofollow">WordPress</a>.
				</div><!--/.footer-right-->
			</div><!--/.wrap.cf-->
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>