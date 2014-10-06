		<footer>
			<div class="wrap">
				<div class="footer-copyright">
					<?php
					if ( get_theme_mod( 'ti_copyright_entry' ) ) {
						echo htmlspecialchars_decode( get_theme_mod( 'ti_copyright_entry' ) );
					} else {
						echo __( 'Copyright &copy; ', 'ti' ) . '<a href="" title="'. __( 'DentaTheme', 'ti' ) .'">'. __( 'DentaTheme', 'ti' ) .'</a>. '. __( 'All rights reserved.', 'ti' ) .'';
					}
					?>
				</div><!--/.footer-copyright-->
			</div><!--/.wrap-->
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>