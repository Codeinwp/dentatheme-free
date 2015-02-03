		<footer>
			<div class="wrap">
				<div class="footer-copyright">
					<?php echo esc_textarea( get_theme_mod( 'denta_lite_footer_entry', 'denta_lite' ) ) ?> &copy; <a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a> | Proudly powered by <a href="http://www.wordpress.com" title="WordPress" target="_blank" rel="nofollow">WordPress</a>.
				</div><!--/.footer-copyright-->
			</div><!--/.wrap-->
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>