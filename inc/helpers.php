<?php
/**
 * Various helper functions to make your life easier.
 *
 * @package strl
 * @since 1.0.0
 */

/**
 * A preformatted version of var_dump().
 *
 * @package strl
 * @since 1.0.0
 *
 * @param mixed $variable The variable you'd like to dump.
 */
function strl_dump( $variable ) {
	echo '<pre>';
	var_dump( $variable ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_var_dump
	echo '</pre>';
}

/**
 * Returns an array with labels for a CPT.
 *
 * @package strl
 * @since 1.0.0
 *
 * @param string $singular_label The singular CPT name.
 * @param string $plural_label   The plural CPT name.
 * @return array<string>         An array of strings containing all the labels for a CPT.
 */
function strl_generate_cpt_labels( $singular_label, $plural_label ) {
	$pretty_singular = ucwords( $singular_label );
	$pretty_plural   = ucwords( $plural_label );

	return array(
		'name'                  => $pretty_plural,
		'singular_name'         => $pretty_singular,
		'menu_name'             => $pretty_plural,
		'name_admin_bar'        => $pretty_singular,
		'add_new'               => __( 'Add New', 'strl' ),
		// translators: %s is the singular label of a post type.
		'add_new_item'          => sprintf( __( 'Add New %s', 'strl' ), $pretty_singular ),
		// translators: %s is the singular label of a post type.
		'new_item'              => sprintf( __( 'New %s', 'strl' ), $pretty_singular ),
		// translators: %s is the singular label of a post type.
		'edit_item'             => sprintf( __( 'Edit %s', 'strl' ), $pretty_singular ),
		// translators: %s is the singular label of a post type.
		'view_item'             => sprintf( __( 'View %s', 'strl' ), $pretty_singular ),
		// translators: %s is the plural label of a post type.
		'all_items'             => sprintf( __( 'All %s', 'strl' ), $pretty_plural ),
		// translators: %s is the plural label of a post type.
		'search_items'          => sprintf( __( 'Search %s', 'strl' ), $pretty_plural ),
		// translators: %s is the plural label of a post type.
		'parent_item_colon'     => sprintf( __( 'Parent %s:', 'strl' ), $pretty_plural ),
		// translators: %s is the plural label of a post type.
		'not_found'             => sprintf( __( 'No %s found', 'strl' ), $pretty_plural ),
		// translators: %s is the plural label of a post type.
		'not_found_in_trash'    => sprintf( __( 'No %s found in Trash', 'strl' ), $pretty_plural ),
		// translators: %s is the singular label of a post type.
		'featured_image'        => sprintf( __( '%s Cover Image', 'strl' ), $pretty_singular ),
		'set_featured_image'    => __( 'Set cover image', 'strl' ),
		'remove_featured_image' => __( 'Remove cover image', 'strl' ),
		'use_featured_image'    => __( 'Use as cover image', 'strl' ),
		// translators: %s is the singular label of a post type.
		'archives'              => sprintf( __( '%s Archives', 'strl' ), $pretty_singular ),
		// translators: %s is the singular label of a post type.
		'insert_into_item'      => sprintf( __( 'Inset into %s', 'strl' ), $pretty_singular ),
		// translators: %s is the singular label of a post type.
		'uploaded_to_this_item' => sprintf( __( 'Uploaded to this %s', 'strl' ), $pretty_singular ),
		// translators: %s is the plural label of a post type.
		'filter_items_list'     => sprintf( __( 'Filter %s list', 'strl' ), $pretty_plural ),
		// translators: %s is the plural label of a post type.
		'items_list_navigation' => sprintf( __( '%s list navigation', 'strl' ), $pretty_plural ),
		// translators: %s is the plural label of a post type.
		'items_list'            => sprintf( __( '%s list', 'strl' ), $pretty_plural ),
	);
}

/**
 * Returns an array with labels for a taxonomy.
 *
 * @package strl
 * @since 1.0.0
 *
 * @param string $singular_label The singular taxonomy name.
 * @param string $plural_label   The plural taxonomy name.
 * @return array<string>         An array of strings containing all the labels for a taxonomy.
 */
function strl_generate_taxonomy_labels( $singular_label, $plural_label ) {
	$pretty_singular = ucwords( $singular_label );
	$pretty_plural   = ucwords( $plural_label );

	return array(
		'name'              => $pretty_plural,
		'singular_name'     => $pretty_singular,
		// translators: %s is the plural label of a post type.
		'search_items'      => sprintf( __( 'Search %s', 'strl' ), $pretty_plural ),
		// translators: %s is the plural label of a post type.
		'all_items'         => sprintf( __( 'All %s', 'strl' ), $pretty_plural ),
		// translators: %s is the singular label of a post type.
		'view_item'         => sprintf( __( 'View %s', 'strl' ), $pretty_singular ),
		// translators: %s is the plural label of a post type.
		'parent_item'       => sprintf( __( 'Parent %s', 'strl' ), $pretty_plural ),
		// translators: %s is the plural label of a post type.
		'parent_item_colon' => sprintf( __( 'Parent %s:', 'strl' ), $pretty_plural ),
		// translators: %s is the singular label of a post type.
		'edit_item'         => sprintf( __( 'Edit %s', 'strl' ), $pretty_singular ),
		// translators: %s is the singular label of a post type.
		'update_item'       => sprintf( __( 'Update %s', 'strl' ), $pretty_singular ),
		// translators: %s is the singular label of a post type.
		'add_new_item'      => sprintf( __( 'Add New %s', 'strl' ), $pretty_singular ),
		// translators: %s is the singular label of a post type.
		'new_item_name'     => sprintf( __( 'New %s name', 'strl' ), $pretty_singular ),
		// translators: %s is the plural label of a post type.
		'not_found'         => sprintf( __( 'No %s found', 'strl' ), $pretty_plural ),
		// translators: %s is the plural label of a post type.
		'back_to_items'     => sprintf( __( 'Back to %s', 'strl' ), $pretty_plural ),
		'menu_name'         => $pretty_plural,
	);
}

/**
 * Get a user's last login.
 *
 * @package strl
 * @since 1.0.0
 *
 * @param int $user_id        The ID of the user you want to retrieve the last login for.
 * @return string $login_time The last login time for a user.
 */
function strl_get_user_last_login( $user_id ) {
	$last_login = get_user_meta( $user_id, 'last_login', true );
	$login_time = ( empty( $last_login ) ) ? 'Never logged in' : human_time_diff( $last_login );

	return $login_time;
}

/**
 * Get a list of all post types.
 *
 * @since 1.0.0
 * @package strl
 *
 * @param array<string> $exclude     A list of post types you want to exclude.
 * @return array<string> $post_types A list of all custom post types.
 */
function strl_get_all_cpts( $exclude = array() ) {
	$post_types = get_post_types( array( 'public' => true ), 'names' );
	$excluded   = array( 'post', 'page', 'attachment' );
	$excluded   = array_merge( $excluded, $exclude );

	foreach ( $excluded as $post_type ) {
		unset( $post_types[ $post_type ] );
	}

	return $post_types;
}
