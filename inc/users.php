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

/**
 * Adds and updates the User Meta with their last login time.
 *
 * @package strl
 * @since 1.0.0
 *
 * @param string  $user_login The user's username.
 * @param WP_User $user       WP_User object of the logged-in user.
 */
function strl_user_last_login( $user_login, $user ) {
	update_user_meta( $user->ID, 'last_login', time() );
}
add_action( 'wp_login', 'strl_user_last_login', 10, 2 );

/**
 * Adds the last login column to the Users columns.
 *
 * @package strl
 * @since 1.0.0
 *
 * @param array<string> $columns The column header labels keyed by column ID.
 */
function strl_user_last_login_column( $columns ) {
	$columns['last_login'] = __( 'Last Login', 'strl' );
	return $columns;
}
add_filter( 'manage_users_columns', 'strl_user_last_login_column' );

/**
 * Adds the last login value to the Last Login column.
 *
 * @package strl
 * @since 1.0.0
 *
 * @param string $output      Custom column output. Default empty.
 * @param string $column_name Column name.
 * @param int    $user_id     ID of the currently-listed user.
 */
function strl_last_login_column_value( $output, $column_name, $user_id ) {
	// Change the output to the last login, only if the column name is last_login.
	$output = 'last_login' !== $column_name ? $output : strl_get_user_last_login( $user_id );
	return $output;
}
add_filter( 'manage_users_custom_column', 'strl_last_login_column_value', 10, 3 );


/**
 * Adds the Last Login column to sortable columns.
 *
 * @package strl
 * @since 1.0.0
 *
 * @param array<string> $sortable_columns An array of sortable column names.
 */
function strl_make_last_login_sortable( $sortable_columns ) {
	$sortable_columns['last_login'] = 'last_login';
	return $sortable_columns;
}
add_filter( 'manage_users_sortable_columns', 'strl_make_last_login_sortable' );

/**
 * Sets the last login time as the order value.
 *
 * @package strl
 * @since 1.0.0
 *
 * @param WP_User_Query $user_query The WP_User_Query instance.
 */
function strl_set_last_login_order_value( $user_query ) {
	$current_screen = get_current_screen();

	// Checks to see if we're an admin and on the users screen.
	if ( ! is_admin() || 'users' !== $current_screen->id ) {
		return;
	}

	if ( 'last_login' === $user_query->get( 'orderby' ) ) {
		$user_query->set( 'orderby', 'meta_value' );
		$user_query->set( 'meta_key', 'last_login' );
	}
}
add_filter( 'pre_get_users', 'strl_set_last_login_order_value' );
