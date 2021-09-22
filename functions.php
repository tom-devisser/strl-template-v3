<?php
/**
 * Functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package strl
 * @since 1.0.0
 */

define( 'THEME_DIR', get_stylesheet_directory() );

// Includes helper functions.
require_once THEME_DIR . '/inc/helpers.php';

// Bootstraps the theme.
require_once THEME_DIR . '/inc/bootstrap.php';

// Registers custom post types.
require_once THEME_DIR . '/inc/cpts.php';

// Registers custom taxonomies.
require_once THEME_DIR . '/inc/taxonomies.php';

// Adds shortcodes.
require_once THEME_DIR . '/inc/shortcodes.php';

// Customizes the admin area.
require_once THEME_DIR . '/inc/admin.php';

// Adds user roles.
require_once THEME_DIR . '/inc/user-roles.php';

// Registers the navigation menus.
require_once THEME_DIR . '/inc/navigation.php';

// Configures custom ACF settings.
if ( class_exists( 'acf' ) ) {
	require_once THEME_DIR . '/inc/acf.php';
}

// Configures custom FacetWP settings.
require_once THEME_DIR . '/inc/facetwp.php';
