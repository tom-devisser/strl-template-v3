<?php
/**
 * Registers fields for the Header block.
 *
 * @package strl
 * @since 1.0.0
 */

$block_name = 'header';

$blocks[ $block_name ] = array(
	'key'        => 'block-' . $block_name,
	'name'       => $block_name,
	'label'      => __( 'Header', 'strl' ),
	'display'    => 'block',
	'sub_fields' => array(
		array(
			'key'      => $block_name . '-title',
			'label'    => __( 'Title', 'strl' ),
			'name'     => $block_name . '-title',
			'type'     => 'text',
			'required' => 1,
		),
		array(
			'key'      => $block_name . '-subtitle',
			'label'    => __( 'Subtitle', 'strl' ),
			'name'     => $block_name . '-subtitle',
			'type'     => 'text',
			'required' => 0,
		),
	),
);
