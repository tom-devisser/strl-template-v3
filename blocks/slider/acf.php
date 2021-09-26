<?php
/**
 * Registers fields for the Slider block.
 *
 * @package strl
 * @since 1.0.0
 */

$block_name = 'slider';

$blocks[ $block_name ] = array(
	'key'        => 'block-' . $block_name,
	'name'       => $block_name,
	'label'      => __( 'Slider', 'strl' ),
	'display'    => 'block',
	'sub_fields' => array(
		array(
			'key'   => $block_name . '-content-tab',
			'label' => __( 'Slider Content', 'strl' ),
			'name'  => $block_name . '-content-tab',
			'type'  => 'tab',
		),
		array(
			'key'      => $block_name . '-title',
			'label'    => __( 'Title', 'strl' ),
			'name'     => $block_name . '-title',
			'type'     => 'text',
			'required' => 0,
		),
		array(
			'key'        => $block_name . '-slides',
			'label'      => __( 'Slides', 'strl' ),
			'name'       => $block_name . '-slides',
			'type'       => 'repeater',
			'required'   => 1,
			'sub_fields' => array(
				array(
					'key'          => $block_name . '-background-image',
					'label'        => __( 'Background Image', 'strl' ),
					'name'         => $block_name . '-background-image',
					'instructions' => __( 'If you don\'t provide a background image, the slider will use the default secondary color as it\'s background color.', 'strl' ),
					'type'         => 'image',
					'required'     => 0,
				),
				array(
					'key'      => $block_name . '-content',
					'label'    => __( 'Content', 'strl' ),
					'name'     => $block_name . '-content',
					'type'     => 'wysiwyg',
					'required' => 0,
				),
			),
			'max'        => 5,
			'layout'     => 'row',
		),
		array(
			'key'   => $block_name . '-settings-tab',
			'label' => __( 'Slider Settings', 'strl' ),
			'name'  => $block_name . '-settings-tab',
			'type'  => 'tab',
		),
		array(
			'key'      => $block_name . '-text-color',
			'label'    => __( 'Text Color', 'strl' ),
			'name'     => $block_name . '-text-color',
			'type'     => 'radio',
			'required' => 1,
			'choices'  => array(
				'dark'  => __( 'Dark', 'strl' ),
				'light' => __( 'Light', 'strl' ),
			),
		),
	),
);
