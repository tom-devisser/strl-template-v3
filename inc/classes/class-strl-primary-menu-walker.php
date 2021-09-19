<?php
/**
 * Custom Walkers to make menus compatible with Foundation 6.
 *
 * @package strl
 * @since 1.0.0
 */

/**
 * The Walker for the primary menu.
 *
 * @package strl
 * @since 1.0.0
 */
class STRL_Primary_Menu_Walker extends Walker_Nav_Menu {
	/**
	 * Starts the list before the elements are added.
	 *
	 * @package strl
	 * @since 1.0.0
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"vertical menu\">";
	}
}
