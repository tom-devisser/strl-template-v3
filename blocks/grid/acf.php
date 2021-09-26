<?php
/**
 * Registers fields for the Grid block.
 *
 * @package strl
 * @since 1.0.0
 */

$block_name = 'grid';

$blocks[ $block_name ] = array(
	'key'        => 'block-' . $block_name,
	'name'       => $block_name,
	'label'      => __( 'Grid', 'strl' ),
	'display'    => 'block',
	'sub_fields' => array(
		array(
			'key'   => $block_name . '-content-tab',
			'label' => __( 'Grid Content', 'strl' ),
			'name'  => $block_name . '-content-tab',
			'type'  => 'tab',
		),
		array(
			'key'      => $block_name . '-title',
			'label'    => __( 'Title', 'strl' ),
			'name'     => $block_name . '-title',
			'type'     => 'text',
			'required' => 1,
		),
		array(
			'key'   => $block_name . '-settings-tab',
			'label' => __( 'Grid Settings', 'strl' ),
			'name'  => $block_name . '-settings-tab',
			'type'  => 'tab',
		),
		array(
			'key'           => $block_name . '-full-width',
			'label'         => __( 'Full Width', 'strl' ),
			'name'          => $block_name . '-full-width',
			'type'          => 'radio',
			'choices'       => array(
				'yes' => __( 'Yes, I want this row full width', 'strl' ),
				'no'  => __( 'No, I want this row within the container', 'strl' ),
			),
			'required'      => 1,
			'default_value' => 'no',
		),
	),
);
