<?php
/**
 * Registers custom taxonomies.
 *
 * @package strl
 * @since 1.0.0
 */

/**
 * Registers the Services Category taxonomy.
 *
 * @package strl
 * @since 1.0.0
 */
function strl_services_category_taxonomy() {
	$singular_label = __( 'service category', 'strl' );
	$plural_label   = __( 'service categories', 'strl' );
	$labels         = strl_generate_taxonomy_labels( $singular_label, $plural_label );

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	);

	register_taxonomy( 'service_category', 'services', $args );
}
add_action( 'init', 'strl_services_category_taxonomy' );

/**
 * Registers the Services Tags taxonomy.
 *
 * @package strl
 * @since 1.0.0
 */
function strl_services_tags_taxonomy() {
	$singular_label = __( 'service tag', 'strl' );
	$plural_label   = __( 'service tags', 'strl' );
	$labels         = strl_generate_taxonomy_labels( $singular_label, $plural_label );

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	);

	register_taxonomy( 'service_tags', 'services', $args );
}
add_action( 'init', 'strl_services_tags_taxonomy' );
