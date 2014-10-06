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
		<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>

			<?php
			if ( get_theme_mod( 'ti_topheader_title1' ) || get_theme_mod( 'ti_topheader_content1' ) || get_theme_mod( 'ti_topheader_title2' ) || get_theme_mod( 'ti_topheader_content2' ) ) { ?>

				<div class="top-header">
					<div class="wrap cf">
						<div class="top-header-left">
							<?php
							if ( get_theme_mod( 'ti_topheader_title1' ) ) {
								echo get_theme_mod( 'ti_topheader_title1' ) . '<br />';
							}

							if ( get_theme_mod( 'ti_topheader_content1' ) ) {
								echo '<span>'. get_theme_mod( 'ti_topheader_content1' ) .'</span>';
							}
							?>
						</div><!--/.top-header-left-->
						<div class="top-header-right">
							<?php
							if ( get_theme_mod( 'ti_topheader_title2' ) ) {
								echo get_theme_mod( 'ti_topheader_title2' ) . '<br />';
							}

							if ( get_theme_mod( 'ti_topheader_content2' ) ) {
								echo '<span><a href="tel:'. get_theme_mod( 'ti_topheader_content2' ) .'" title="'. get_theme_mod( 'ti_topheader_content2' ) .'">'. get_theme_mod( 'ti_topheader_content2' ) .'</a></span>';
							}
							?>
						</div><!--/.top-header-right-->
					</div><!--/.wrap.cf-->
				</div><!--/.top-header-->

			<?php }
			?>

			<div class="center-header">
				<div class="wrap cf">
					<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" class="center-header-logo">
						<?php
						if ( get_theme_mod( 'ti_centerheader_logo' ) ) {
							echo '<img src="'. get_theme_mod( 'ti_centerheader_logo' ) .'" alt="'. get_bloginfo('name') .'" title="'. get_bloginfo('name') .'" />';
						} else {
							echo '<img src="'. get_template_directory_uri() .'/images/logo.png" alt="'. get_bloginfo('name') .'" title="'. get_bloginfo('name') .'" />';
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