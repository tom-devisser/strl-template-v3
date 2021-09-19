<?php
/**
 * Adds custom user roles.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package strl
 * @since 1.0.0
 */

/**
 * Adds the user role for the client.
 *
 * @package strl
 * @since 1.0.0
 */
function strl_user_roles() {
	add_role(
		'strl-client',
		__( 'Website Owner', 'strl' ),
		array(
			'switch_themes'          => false,
			'edit_themes'            => false,
			'edit_theme_options'     => true,
			'install_themes'         => false,
			'activate_plugins'       => false,
			'edit_plugins'           => false,
			'install_plugins'        => false,
			'edit_users'             => true,
			'manage_options'         => false,
			'moderate_comments'      => false,
			'manage_categories'      => true,
			'manage_links'           => false,
			'upload_files'           => true,
			'import'                 => false,
			'unfiltered_html'        => false,
			'edit_posts'             => true,
			'edit_others_posts'      => true,
			'edit_published_posts'   => true,
			'publish_posts'          => true,
			'edit_pages'             => true,
			'read'                   => true,
			'publish_pages'          => true,
			'edit_others_pages'      => true,
			'edit_published_pages'   => true,
			'delete_pages'           => true,
			'delete_others_pages'    => true,
			'delete_published_pages' => true,
			'delete_posts'           => true,
			'delete_others_posts'    => true,
			'delete_published_posts' => true,
			'delete_private_posts'   => true,
			'edit_private_posts'     => true,
			'read_private_posts'     => true,
			'delete_private_pages'   => true,
			'edit_private_pages'     => true,
			'read_private_pages'     => true,
			'delete_users'           => true,
			'create_users'           => true,
			'unfiltered_upload'      => false,
			'edit_dashboard'         => false,
			'customize'              => false,
			'delete_site'            => false,
			'update_plugins'         => false,
			'delete_plugins'         => false,
			'update_themes'          => false,
			'update_core'            => false,
			'list_users'             => true,
			'remove_users'           => false,
			'add_users'              => false,
			'promote_users'          => false,
			'delete_themes'          => false,
			'export'                 => false,
			'edit_comment'           => false,
			'create_sites'           => false,
			'delete_sites'           => false,
			'manage_network'         => false,
			'manage_sites'           => true,
			'manage_network_users'   => false,
			'manage_network_themes'  => false,
			'manage_network_options' => false,
			'manage_network_plugins' => false,
			'upload_plugins'         => false,
			'upload_themes'          => false,
			'upgrade_network'        => false,
			'setup_network'          => false,
		)
	);
}
add_action( 'init', 'strl_user_roles' );
