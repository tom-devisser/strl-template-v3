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
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'services', $args );
}
add_action( 'init', 'strl_register_services_cpt' );
