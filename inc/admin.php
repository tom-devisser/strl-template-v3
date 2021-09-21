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
