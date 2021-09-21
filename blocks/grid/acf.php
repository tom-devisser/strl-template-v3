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
			'key'      => $block_name . '-title',
			'label'    => __( 'Title', 'strl' ),
			'name'     => $block_name . '-title',
			'type'     => 'text',
			'required' => 1,
		),
	),
);
