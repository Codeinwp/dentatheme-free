		<footer>
			<div class="wrap cf">
				<div class="footer-left">
					<?php echo get_theme_mod( 'denta_lite_footer_entry', 'Copyright &copy; ThemeIsle.' ); ?>
				</div><!--/.footer-left-->
				<div class="footer-right">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="nofollow"><?php bloginfo( 'name' ); ?></a> <?php _e( '| Proudly powered by', 'denta_lite' ); ?> <a href="http://www.wordpress.org" title="<?php _e( 'WordPress', 'denta_lite' ); ?>" target="_blank" rel="nofollow"><?php _e( 'WordPress', 'denta_lite' ); ?></a>.
				</div><!--/.footer-right-->
			</div><!--/.wrap.cf-->
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>