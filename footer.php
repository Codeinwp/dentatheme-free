		<footer>
			<div class="wrap">
				<div class="footer-copyright">
					<?php
					if ( get_theme_mod( 'ti_copyright_entry' ) ) {
						echo htmlspecialchars_decode( get_theme_mod( 'ti_copyright_entry' ) );
					} else {
						echo __( 'Copyright &copy; ', 'denta_lite' ) . '<a href="" title="'. __( 'DentaTheme', 'denta_lite' ) .'">'. __( 'DentaTheme', 'denta_lite' ) .'</a>. '. __( 'All rights reserved.', 'denta_lite' ) .'';
					}
					?>
				</div><!--/.footer-copyright-->
			</div><!--/.wrap-->
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>