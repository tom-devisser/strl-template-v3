<?php
/**
 * Customizes the admin area.
 *
 * @package strl
 * @since 1.0.0
 */

/**
 * Adds the button keys that you'll provide when calling editor.addButton() in the JavaScript plugin file.
 *
 * @since 1.0.0
 * @package strl
 *
 * @param array $mce_buttons First-row list of buttons.
 */
function strl_create_custom_tinymce_buttons( $mce_buttons ) {
	$mce_buttons[] = 'strl_shortcodes';
	return $mce_buttons;
}
add_filter( 'mce_buttons', 'strl_create_custom_tinymce_buttons' );

/**
 * Provides TinyMCE with the JavaScript plugin file where you actually create and add the button.
 *
 * @since 1.0.0
 * @package strl
 *
 * @param array $external_plugins An array of external TinyMCE plugins.
 */
function strl_add_custom_tinymce_buttons( $external_plugins ) {
	$external_plugins['mce_editor_js'] = get_stylesheet_directory_uri() . '/assets/tinymce-plugins.min.js';
	return $external_plugins;
}
add_filter( 'mce_external_plugins', 'strl_add_custom_tinymce_buttons' );

/**
 * Hides menu items on the Dashboard.
 *
 * @since 1.0.0
 * @package strl
 */
function strl_remove_menus() {
	// ACF Settings.
	remove_menu_page( 'edit.php?post_type=acf-field-group' );

	// Comments.
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_head', 'strl_remove_menus' );

/**
 * Cleans the <head> tag.
 *
 * @since 1.0.0
 * @package strl
 */
function strl_clean_head() {
	// Removes Emoji support.
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wpP_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}
add_action( 'init', 'strl_clean_head' );

/**
 * Cleans up the Dashboard.
 *
 * @since 1.0.0
 * @package strl
 */
function strl_clean_dashboard() {
	global $wp_meta_boxes;
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
	update_user_meta( get_current_user_id(), 'show_welcome_panel', false );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
}
add_action( 'wp_dashboard_setup', 'strl_clean_dashboard' );
