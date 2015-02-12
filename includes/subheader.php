<?php
if ( get_theme_mod( 'denta_lite_frontpage_subheader_title', 'Dental Services That You Can Trust' ) || get_theme_mod( 'denta_lite_frontpage_subheader_entry', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.' ) || get_theme_mod( 'denta_lite_frontpage_subheader_buttontitle', 'Read more' ) || get_theme_mod( 'denta_lite_frontpage_subheader_buttonlink', '#' ) ) { ?>

	<section id="subheader">
		<div class="wrap">
			<div class="subheader-content">
				<?php
				if ( get_theme_mod( 'denta_lite_frontpage_subheader_title', 'Dental Services That You Can Trust' ) ) {
					echo '<h3>'. esc_attr( get_theme_mod( 'denta_lite_frontpage_subheader_title', 'Dental Services That You Can Trust' ) ) .'</h3>';
				}

				if ( get_theme_mod( 'denta_lite_frontpage_subheader_entry', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.' ) ) {
					echo '<p>'. esc_textarea( get_theme_mod( 'denta_lite_frontpage_subheader_entry', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.' ) ) .'</p>';
				}

				if ( get_theme_mod( 'denta_lite_frontpage_subheader_buttontitle', 'Read more' ) || get_theme_mod( 'denta_lite_frontpage_subheader_buttonlink', '#' ) ) {
					echo '<a href="'. esc_url( get_theme_mod( 'denta_lite_frontpage_subheader_buttonlink', '#' ) ) .'" title="'. esc_attr( get_theme_mod( 'denta_lite_frontpage_subheader_buttontitle', 'Read more' ) ) .'" class="subheader-content-more">'. esc_attr( get_theme_mod( 'denta_lite_frontpage_subheader_buttontitle', 'Read more' ) ) .'</a>';
				}
				?>
			</div><!--/.subheader-content-->
		</div><!--/.wrap-->
	</section><!--/#subheader-->

<?php }
?>