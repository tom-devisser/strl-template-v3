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

	/**
	 * Prints the main navigation made compatible with Foundation 6.
	 *
	 * @package strl
	 * @since 1.0.0
	 */
	function strl_main_navigation() {
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'vertical medium-horizontal menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
				'theme_location' => 'primary',
				'fallback_cb'    => false,
				'walker'         => '',
			)
		);
	}
}
add_action( 'after_setup_theme', 'strl_navigation' );