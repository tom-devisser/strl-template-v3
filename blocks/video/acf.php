<?php
/**
 * Registers fields for the Video block.
 *
 * @package strl
 * @since 1.0.0
 */

$block_name = 'video';

$blocks[ $block_name ] = array(
	'key'        => 'block-' . $block_name,
	'name'       => $block_name,
	'label'      => __( 'Video', 'strl' ),
	'display'    => 'block',
	'sub_fields' => array(
		array(
			'key'          => $block_name . '-video-id',
			'name'         => $block_name . '-video-id',
			'label'        => __( 'Video ID', 'strl' ),
			'instructions' => __( 'The part of the YouTube url after https://www.youtube.com/watch?v=', 'strl' ),
			'type'         => 'text',
			'required'     => 1,
		),
	),
);
