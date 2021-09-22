<?php
/**
 * Configures custom FacetWP settings.
 *
 * @package strl
 * @since 1.0.0
 */

/**
 * Adds some classes to the FacetWP template div.
 *
 * @package strl
 * @since 1.0.0
 *
 * @param string $output The output HTML.
 * @param array  $atts   The array of shortcode attributes.
 */
function strl_customize_facetwp_classes( $output, $atts ) {
	// Checks if we're using the template attribute in the shortcode.
	if ( isset( $atts['template'] ) ) {
		// Checks what the attribute value for template is.
		switch ( $atts['template'] ) {
			case 'services':
				$output = str_replace( 'facetwp-template', 'grid-x grid-margin-x grid-margin-y medium-up-2 large-up-3', $output );
				break;
			default:
				$output = str_replace( 'facetwp-template', 'grid-x medium-up-2 large-up-3', $output );
				break;
		}
	}
	return $output;
}
add_filter( 'facetwp_shortcode_html', 'strl_customize_facetwp_classes', 10, 2 );
