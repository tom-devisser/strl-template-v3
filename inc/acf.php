<?php
/**
 * Configures custom ACF settings.
 *
 * @package strl
 * @since 1.0.0
 */

/**
 * Sets up ACF blocks we use for building pages.
 *
 * @return void
 * @since 1.0.0
 */
function strl_register_blocks() {
	// An array that will contain all the fields for the blocks when we require the path in the loop below.
	$blocks = array();

	// The path to the blocks directory.
	$blocks_dir = get_stylesheet_directory() . '/blocks/';

	// Gets all the folder names in /blocks except . and .., and puts them in an array.
	$block_names = array_diff( scandir( $blocks_dir ), array( '..', '.' ) );

	// Requires all the files that register the fields for the blocks.
	foreach ( $block_names as $block_name ) {
		// Checks if there's a folder with a corresponding block name.
		if ( is_dir( $blocks_dir . $block_name ) ) {
			// The path to the file that contains the fields for this block.
			$path = $blocks_dir . $block_name . '/acf.php';

			if ( file_exists( $path ) ) {
				require_once $path;
			}
		}
	}

	// Set up the layout fields for the blocks area.
	$strl_blocks_fields = array(
		array(
			'key'       => 'strl-blocks-area-tab',
			'label'     => __( 'STRL Blocks', 'strl' ),
			'name'      => 'strl-blocks-area-tab',
			'type'      => 'tab',
			'placement' => 'top',
		),
		array(
			'key'          => 'strl-blocks',
			'label'        => __( 'STRL Blocks', 'strl' ),
			'name'         => 'strl-blocks',
			'type'         => 'flexible_content',
			'layouts'      => $blocks,
			'button_label' => __( 'Add new block', 'strl' ),
		),
	);

	// Adds ACF blocks to the Edit Page screen.
	acf_add_local_field_group(
		array(
			'key'            => 'strl-blocks-area',
			'title'          => __( 'STRL Blocks', 'strl' ),
			'fields'         => $strl_blocks_fields,
			'location'       => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '===',
						'value'    => 'page',
					),
				),
			),
			'position'       => 'normal',
			'hide_on_screen' => array(
				0 => 'the_content',
			),
		)
	);
}
add_action( 'init', 'strl_register_blocks', 10 );
