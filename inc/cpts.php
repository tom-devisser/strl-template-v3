<?php
/**
 * Registers custom post types.
 *
 * @package strl
 * @since 1.0.0
 */

/**
 * Registers the Services post type.
 *
 * @package strl
 * @since 1.0.0
 */
function strl_register_services_cpt() {
	$singular_label = __( 'service', 'strl' );
	$plural_label   = __( 'services', 'strl' );

	$labels = strl_generate_labels( $singular_label, $plural_label );

	$args = array(
		'labels'             => $labels,
		'menu_icon'          => 'dashicons-admin-tools',
		'description'        => __( 'All services you offer.', 'strl' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		'taxonomies'         => array( 'category', 'post_tag' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'services', $args );
}
add_action( 'init', 'strl_register_services_cpt' );
