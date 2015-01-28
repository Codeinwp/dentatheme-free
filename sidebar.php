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
	} else if ( is_user_logged_in() ) {
		echo '<div class="widget">';
		_e( 'The widget is not active.', 'denta_lite' );
		echo '</div>';
	} else {

		$widget_args = array(
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div><!--/.widget-->',
			'before_title'	=> '<div class="title-widget">',
			'after_title'	=> '</div><!--/.title-widget-->'
		);
		the_widget( 'WP_Widget_Recent_Posts', '', $widget_args );
		the_widget( 'WP_Widget_Pages', '', $widget_args );
		the_widget( 'WP_Widget_Categories', '', $widget_args );
		the_widget( 'WP_Widget_Meta', '', $widget_args );

	}
	?>
</aside><!--/#sidebar-->