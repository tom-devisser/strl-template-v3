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
			'key'   => $block_name . '-content-tab',
			'label' => __( 'Video Content', 'strl' ),
			'name'  => $block_name . '-content-tab',
			'type'  => 'tab',
		),
		array(
			'key'          => $block_name . '-video-id',
			'name'         => $block_name . '-video-id',
			'label'        => __( 'Video ID', 'strl' ),
			'instructions' => __( 'The part of the YouTube url after https://www.youtube.com/watch?v=', 'strl' ),
			'type'         => 'text',
			'required'     => 1,
		),
		array(
			'key'               => $block_name . '-video-thumbnail',
			'name'              => $block_name . '-video-thumbnail',
			'label'             => __( 'Video Thumbnail', 'strl' ),
			'instructions'      => __( 'The image that shows before you click the play button. This only shows up when you\'ve selected pop-up in Video Settings.', 'strl' ),
			'type'              => 'image',
			'conditional_logic' => array(
				array(
					array(
						'field'    => $block_name . '-pop-up',
						'operator' => '==',
						'value'    => 'yes',
					),
				),
			),
		),
		array(
			'key'   => $block_name . '-settings-tab',
			'label' => __( 'Video Settings', 'strl' ),
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
		array(
			'key'           => $block_name . '-pop-up',
			'label'         => __( 'Video Pop-Up', 'strl' ),
			'name'          => $block_name . '-pop-up',
			'type'          => 'radio',
			'choices'       => array(
				'yes' => __( 'Yes, I want this video in a pop-up', 'strl' ),
				'no'  => __( 'No, I want this video directly on the page', 'strl' ),
			),
			'required'      => 1,
			'default_value' => 'no',
		),
	),
);
