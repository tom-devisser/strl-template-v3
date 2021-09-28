<?php
/**
 * Registers fields for the Text/Media block.
 *
 * @package strl
 * @since 1.0.0
 */

$block_name = 'textmedia';

$blocks[ $block_name ] = array(
	'key'        => 'block-' . $block_name,
	'name'       => $block_name,
	'label'      => __( 'Text/Media', 'strl' ),
	'display'    => 'block',
	'sub_fields' => array(
		array(
			'key'   => $block_name . '-content-tab',
			'label' => __( 'Text/Media Content', 'strl' ),
			'name'  => $block_name . '-content-tab',
			'type'  => 'tab',
		),
		array(
			'key'      => $block_name . '-text',
			'label'    => __( 'Text', 'strl' ),
			'name'     => $block_name . '-title',
			'type'     => 'wysiwyg',
			'required' => 1,
		),
		array(
			'key'      => $block_name . '-image',
			'label'    => __( 'Image', 'strl' ),
			'name'     => $block_name . '-image',
			'type'     => 'image',
			'required' => 1,
		),
		array(
			'key'   => $block_name . '-settings-tab',
			'label' => __( 'Slider Settings', 'strl' ),
			'name'  => $block_name . '-settings-tab',
			'type'  => 'tab',
		),
		array(
			'key'           => $block_name . '-text-position',
			'label'         => __( 'Text Position', 'strl' ),
			'name'          => $block_name . '-text-position',
			'type'          => 'radio',
			'choices'       => array(
				'left'  => __( 'I want the text column on the left side', 'strl' ),
				'right' => __( 'I want the text column on the right side', 'strl' ),
			),
			'required'      => 1,
			'default_value' => 'no',
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
