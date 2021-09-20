<?php
/**
 * Functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package strl
 * @since 1.0.0
 */

// Includes helper functions.
require_once get_template_directory() . '/inc/helpers.php';

// Bootstraps the theme.
require_once get_template_directory() . '/inc/bootstrap.php';

// Adds user roles.
require_once get_template_directory() . '/inc/user-roles.php';

// Registers the navigation menus.
require_once get_template_directory() . '/inc/navigation.php';

// Configures custom ACF settings.
require_once get_template_directory() . '/inc/acf.php';
