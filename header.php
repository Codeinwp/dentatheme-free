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
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>

			<?php
			if ( get_theme_mod( 'denta_lite_leftheader_title', 'Opening Hours:' ) || get_theme_mod( 'denta_lite_leftheader_entry', 'Monday to Saturday: 8am - 6pm' ) || get_theme_mod( 'denta_lite_rightheader_title', 'Contact Us:' ) || get_theme_mod( 'denta_lite_rightheader_telephonenumber', '+1 123 7798 33' ) ) { ?>

				<div class="top-header">
					<div class="wrap cf">
						<div class="top-header-left">
							<?php
							if ( get_theme_mod( 'denta_lite_leftheader_title', 'Opening Hours:' ) ) {
								echo esc_attr( get_theme_mod( 'denta_lite_leftheader_title', 'Opening Hours:' ) ) . '<br />';
							}

							if ( get_theme_mod( 'denta_lite_leftheader_entry', 'Monday to Saturday: 8am - 6pm' ) ) {
								echo '<span>'. esc_textarea( get_theme_mod( 'denta_lite_leftheader_entry', 'Monday to Saturday: 8am - 6pm' ) ) .'</span>';
							}
							?>
						</div><!--/.top-header-left-->
						<div class="top-header-right">
							<?php
							if ( get_theme_mod( 'denta_lite_rightheader_title', 'Contact Us:' ) ) {
								echo esc_attr( get_theme_mod( 'denta_lite_rightheader_title', 'Contact Us:' ) ) . '<br />';
							}

							if ( get_theme_mod( 'denta_lite_rightheader_telephonenumber', '+1 123 7798 33' ) ) {
								echo '<span><a href="tel:'. esc_attr( get_theme_mod( 'denta_lite_rightheader_telephonenumber', '+1 123 7798 33' ) ) .'" title="'. esc_attr( get_theme_mod( 'denta_lite_rightheader_telephonenumber', '+1 123 7798 33' ) ) .'">'. esc_attr( get_theme_mod( 'denta_lite_rightheader_telephonenumber', '+1 123 7798 33' ) ) .'</a></span>';
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