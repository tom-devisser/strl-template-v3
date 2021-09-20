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

// Adds user roles.
require_once THEME_DIR . '/inc/user-roles.php';

// Registers the navigation menus.
require_once THEME_DIR . '/inc/navigation.php';

// Configures custom ACF settings.
require_once THEME_DIR . '/inc/acf.php';
