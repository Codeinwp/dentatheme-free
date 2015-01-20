<?php
/**
 *	The template for displaying Header.
 *
 *	@package ThemeIsle.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>

			<?php
			if ( get_theme_mod( 'denta_lite_topheader_title1' ) || get_theme_mod( 'denta_lite_topheader_content1' ) || get_theme_mod( 'denta_lite_topheader_title2' ) || get_theme_mod( 'denta_lite_topheader_content2' ) ) { ?>

				<div class="top-header">
					<div class="wrap cf">
						<div class="top-header-left">
							<?php
							if ( get_theme_mod( 'denta_lite_topheader_title1' ) ) {
								echo get_theme_mod( 'denta_lite_topheader_title1' ) . '<br />';
							}

							if ( get_theme_mod( 'denta_lite_topheader_content1' ) ) {
								echo '<span>'. get_theme_mod( 'denta_lite_topheader_content1' ) .'</span>';
							}
							?>
						</div><!--/.top-header-left-->
						<div class="top-header-right">
							<?php
							if ( get_theme_mod( 'denta_lite_topheader_title2' ) ) {
								echo get_theme_mod( 'denta_lite_topheader_title2' ) . '<br />';
							}

							if ( get_theme_mod( 'denta_lite_topheader_content2' ) ) {
								echo '<span><a href="tel:'. get_theme_mod( 'denta_lite_topheader_content2' ) .'" title="'. get_theme_mod( 'denta_lite_topheader_content2' ) .'">'. get_theme_mod( 'denta_lite_topheader_content2' ) .'</a></span>';
							}
							?>
						</div><!--/.top-header-right-->
					</div><!--/.wrap.cf-->
				</div><!--/.top-header-->

			<?php }
			?>

			<div class="center-header">
				<div class="wrap cf">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo('name'); ?>" class="center-header-logo">
						<?php
						if ( !display_header_text() ) {
							echo '<img src="'. get_header_image() .'" alt="'. get_bloginfo( 'name' ) .'" title="'. get_bloginfo( 'name' ) .'" width="'. get_custom_header()->width .'" height="'. get_custom_header()->height .'" />';
						} else {

							$header_textcolor = get_header_textcolor();
							if ( empty( $header_textcolor ) ) {
								$header_logo_style = '';
							} else {
								$header_textcolor = ' style="color: #'. $header_textcolor .';"';
							}

							echo '<div class="header-logo-title"'. $header_textcolor .'>';
							echo bloginfo( 'name' );
							echo '</div>';
							echo '<div class="header-logo-description"'. $header_textcolor .'>';
							echo bloginfo( 'description' );
							echo '</div>';

						}
						?>
					</a><!--/.center-header-logo-->
					<div class="openresponsivemenu">
					</div><!--/.openresponsivemenu-->
					<nav class="navigation">
						<?php
						wp_nav_menu( array(
								'theme_location'	=> 'header_navigation',
								'container'			=> '',
								'container_class'	=> ''
							)
						);
						?>
					</nav><!--/.navigation-->
				</div><!--/.wrap.cf-->
			</div><!--/.center-header-->
		</header>