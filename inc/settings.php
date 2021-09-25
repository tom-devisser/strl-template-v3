<?php
/**
 * Sets up a Theme Options page called STRL Global.
 *
 * @package strl
 * @since 1.0.0
 */

/**
 * Adds the settings page STRL Global.
 *
 * @package strl
 * @since 1.0.0
 */
function strl_add_settings_page() {
	$strl_icon_svg = file_get_contents( get_template_directory() . '/assets/img/icon-STRL-wit.svg' );

	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page(
			array(
				'page_title' => __( 'STRL Global', 'strl' ),
				'menu_title' => __( 'STRL Global', 'strl' ),
				'menu_slug'  => 'strl-general-settings',
				'capability' => 'edit_posts',
				'redirect'   => false,
				'icon_url'   => 'data:image/svg+xml;base64,' . base64_encode( $strl_icon_svg ), // phpcs:disable
			)
		);
	}

	// Set up the layout fields for the blocks area.
	$strl_settings_fields = array(
		// General Settings.
		array(
			'key'       => 'strl-general-tab',
			'label'     => __( 'General', 'strl' ),
			'name'      => 'strl-general-tab',
			'type'      => 'tab',
			'placement' => 'left',
		),
		array(
			'key'       => 'strl-general',
			'label'     => __( 'General', 'strl' ),
			'name'      => 'strl-general',
			'type'      => 'group',
		),
		// Standard Pages.
		array(
			'key'       => 'strl-standard-pages-tab',
			'label'     => __( 'Standard Pages', 'strl' ),
			'name'      => 'strl-standard-pages-tab',
			'type'      => 'tab',
			'placement' => 'left',
		),
		array(
			'key'        => 'strl-standard-pages',
			'label'      => __( 'Standard Pages', 'strl' ),
			'name'       => 'strl-standard-pages',
			'type'       => 'group',
			'placement'  => 'left',
			'sub_fields' => array(
				array(
					'key'       => 'strl-standard-404',
					'label'     => __( '404', 'strl' ),
					'instructions' => __( 'This is the page visitors will see when they visit a link that doesn\'t exist (anymore).', 'strl' ),
					'name'      => 'strl-standard-404',
					'type'      => 'relationship',
					'post_type' => array(
						0 => 'page',
					),
					'filters' => array(
						0 => 'search',
					),
				),
				array(
					'key'       => 'strl-standard-search',
					'label'     => __( 'Search', 'strl' ),
					'name'      => 'strl-standard-search',
					'type'      => 'relationship',
					'post_type' => array(
						0 => 'page',
					),
					'filters' => array(
						0 => 'search',
					),
				)
			)
		),
		// Social Media Accounts.
		array(
			'key'       => 'strl-socials-tab',
			'label'     => __( 'Social Accounts', 'strl' ),
			'name'      => 'strl-socials-tab',
			'type'      => 'tab',
			'placement' => 'left',
		),
		array(
			'key'        => 'strl-socials',
			'label'      => __( 'Socials', 'strl' ),
			'name'       => 'strl-socials',
			'instructions' => __( 'If you enter a valid username to your social account, an icon of the corresponding social media platform will show on your website.', 'strl' ),
			'type'       => 'group',
			'placement'  => 'left',
			'sub_fields' => array(
				array(
					'key'       => 'strl-socials-instagram',
					'label'     => __( 'Instagram', 'strl' ),
					'name'      => 'strl-socials-instagram',
					'type'      => 'text',
				),
				array(
					'key'       => 'strl-socials-facebook',
					'label'     => __( 'Facebook', 'strl' ),
					'name'      => 'strl-socials-facebook',
					'type'      => 'text',
				),
			)
		),
		// Footer Settings.
		array(
			'key'       => 'strl-footer-tab',
			'label'     => __( 'Footer', 'strl' ),
			'name'      => 'strl-footer-tab',
			'type'      => 'tab',
			'placement' => 'left',
		),
		array(
			'key'        => 'strl-footer-icons',
			'label'      => __( 'Footer Icons', 'strl' ),
			'name'       => 'strl-footer-icons',
			'type'       => 'group',
			'sub_fields' => array (
				array(
					'key'      => 'strl-footer-toggle-socials',
					'label'    => __( 'Show Socials', 'strl' ),
					'name'     => 'strl-footer-toggle-socials',
					'required' => 1,
					'type'     => 'radio',
					'choices'  => array(
						'show' => __( 'Yes, show social icons in the footer.', 'strl' ),
						'hide' => __( 'No, don\'t show social icons in the footer.', 'strl' ),
					)
				),
				array(
					'key'          => 'strl-footer-toggle-contact-icons',
					'label'        => __( 'Show Contact Icons', 'strl' ),
					'name'         => 'strl-footer-toggle-contact-icons',
					'instructions' => __( 'Decide if you want to show the contact icons (phone and email) in the footer.', 'strl' ),
					'required'     => 1,
					'type'         => 'radio',
					'choices'      => array(
						'show' => __( 'Yes, show contact icons in the footer.', 'strl' ),
						'hide' => __( 'No, don\'t show contact icons in the footer.', 'strl' ),
					)
				),
			),
		),
	);

	// Adds ACF blocks to the Edit Page screen.
	acf_add_local_field_group(
		array(
			'key'            => 'strl-settings-area',
			'title'          => __( 'STRL Settings', 'strl' ),
			'fields'         => $strl_settings_fields,
			'location'       => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '===',
						'value'    => 'strl-general-settings',
					),
				),
			),
			'position'       => 'normal',
		)
	);
}
add_action( 'admin_menu', 'strl_add_settings_page', 98 );
