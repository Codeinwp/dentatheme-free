<?php
/**
 *	The template for displaying Sidebar.
 *
 *	@package 9Pixels.
 */
?>
<aside id="sidebar">
	<?php
	if ( is_dynamic_sidebar( 'general_sidebar' ) ) {
		dynamic_sidebar( 'general_sidebar' );
	} else {
		echo '<div class="widget">';
		_e( 'The widget is not active.', 'denta_lite' );
		echo '</div>';
	}
	?>
</aside><!--/#sidebar-->