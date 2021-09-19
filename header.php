<?php
/**
 * The header for this theme
 *
 * Displays the <head> section and everything up until </header>.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package strl
 * @since 1.0.0
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'strl' ); ?></a>

	<header class="site-header">
		<div class="container">
			<div class="site-branding">
				<?php
				if ( is_front_page() && is_home() ) {
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> <i class="fab fa-wordpress-simple"></i></a></h1>
					<?php
				} else {
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				}

				$site_description = get_bloginfo( 'description', 'display' );
				if ( $site_description ) {
					?>
					<p class="site-description"><?php echo $site_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php
				}
				?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation">
				<?php wp_nav_menu( 'primary-menu' ); ?>
			</nav>
		</div>
	</header>
