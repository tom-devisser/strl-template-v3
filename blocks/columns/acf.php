<?php
/**
 * Registers fields for the Columns block.
 *
 * @package strl
 * @since 1.0.0
 */

$block_name = 'columns';

$blocks[ $block_name ] = array(
	'label'      => __( 'Columns', 'strl' ),
	'key'        => 'block-' . $block_name,
	'name'       => $block_name,
	'display'    => 'block',
	'sub_fields' => array(
		array(
			'label'        => __( 'Title', 'strl' ),
			'key'          => $block_name . '-repeater',
			'name'         => $block_name . '-repeater',
			'type'         => 'repeater',
			'required'     => 1,
			'min'          => 1,
			'max'          => 4,
			'button_label' => __( 'Add column', 'strl' ),
			'sub_fields'   => array(
				array(
					'label'        => __( 'Columns', 'strl' ),
					'key'          => $block_name . '-text',
					'name'         => $block_name . '-text',
					'type'         => 'wysiwyg',
					'tabs'         => 'visual',
					'toolbar'      => '',
					'media_upload' => 0,
					'delay'        => 1,
				),
			),
		),
	),
);
