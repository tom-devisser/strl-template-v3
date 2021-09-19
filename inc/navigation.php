<?php
/**
 * Registers the navigation for the site.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package strl
 * @since 1.0.0
 */

/**
 * Registers the nav menus.
 *
 * @package strl
 * @since 1.0.0
 */
function strl_navigation() {
	register_nav_menus(
		array(
			'primary'   => esc_html__( 'Primary Menu', 'strl' ),
			'secondary' => esc_html__( 'Secondary Menu', 'strl' ),
		)
	);
}
add_action( 'after_setup_theme', 'strl_navigation' );
