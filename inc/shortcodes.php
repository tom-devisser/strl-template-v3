<?php
/**
 * Registers custom shortcodes.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package strl
 * @since 1.0.0
 */

/**
 * Registers the button shortcode.
 *
 * @package strl
 * @since 1.0.0
 *
 * @param array  $atts    User defined attributes in shortcode tag.
 * @param string $content The string placed between the shortcode tags, if any.
 */
function strl_button_shortcode( $atts, $content ) {
	// Replace the default values with the $atts if there are any.
	$args = shortcode_atts(
		array(
			'url'    => '',
			'type'   => '',
			'target' => '',
		),
		$atts
	);

	$url    = $args['url'];
	$type   = $args['type'];
	$target = $args['target'];

	ob_start();
	?>
	<a
		href="<?php echo esc_url( $url, array( 'tel', 'mailto', 'https' ) ); ?>"
		class="btn-<?php echo esc_textarea( $type ); ?>"
		target="<?php echo ( 'blank' === $target ) ? '_blank' : '_self'; ?>"
	>
		<?php echo esc_textarea( $content ); ?>
	</a>
	<?php

	return ob_get_clean();
}
add_shortcode( 'button', 'strl_button_shortcode' );