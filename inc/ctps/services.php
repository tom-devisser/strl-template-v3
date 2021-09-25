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
	$labels         = strl_generate_cpt_labels( $singular_label, $plural_label );

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
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'taxonomies'         => array( 'service_category' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'services', $args );

	// Set up the layout fields for the Services CPT.
	$strl_service_fields = array(
		array(
			'key'       => 'strl-service-content-tab',
			'label'     => __( 'Service Content', 'strl' ),
			'name'      => 'strl-service-content-tab',
			'type'      => 'tab',
			'placement' => 'top',
		),
		array(
			'key'   => 'strl-service-content',
			'label' => __( 'Content', 'strl' ),
			'name'  => 'strl-service-content',
			'type'  => 'message',
		),
		array(
			'key'   => 'strl-service-featured-image',
			'label' => __( 'Featured Image', 'strl' ),
			'name'  => 'strl-service-featured-image',
			'type'  => 'message',
		),
		array(
			'key'       => 'strl-service-settings-tab',
			'label'     => __( 'Service Settings', 'strl' ),
			'name'      => 'strl-service-settings-tab',
			'type'      => 'tab',
			'placement' => 'top',
		),
		array(
			'key'   => 'strl-service-excerpt',
			'label' => __( 'Search Content', 'strl' ),
			'name'  => 'strl-service-excerpt',
			'type'  => 'message',
		),
		array(
			'key'   => 'strl-service-categories',
			'label' => __( 'Service Categories', 'strl' ),
			'name'  => 'strl-service-categories',
			'type'  => 'message',
		),
		array(
			'key'   => 'strl-service-tags',
			'label' => __( 'Service Tags', 'strl' ),
			'name'  => 'strl-service-tags',
			'type'  => 'message',
		),
	);

	// Adds ACF blocks to the Edit Service screen.
	acf_add_local_field_group(
		array(
			'key'      => 'strl-service-area',
			'title'    => __( 'Service Fields', 'strl' ),
			'fields'   => $strl_service_fields,
			'location' => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '===',
						'value'    => 'services',
					),
				),
			),
			'position' => 'normal',
		)
	);
}
add_action( 'init', 'strl_register_services_cpt' );

/**
 * Moves standard WP boxes within the ACF area.
 *
 * @package strl
 * @since 1.0.0
 */
