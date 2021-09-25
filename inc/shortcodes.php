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
	><?php echo esc_textarea( $content ); ?></a>
	<?php
	return ob_get_clean();
}
add_shortcode( 'button', 'strl_button_shortcode' );

/**
 * Registers the accordion shortcode.
 *
 * @package strl
 * @since 1.0.0
 *
 * @param array  $atts    User defined attributes in shortcode tag.
 * @param string $content The string placed between the shortcode tags, if any.
 */
function strl_accordion_shortcode( $atts, $content ) {
	// Replace the default values with the $atts if there are any.
	$args = shortcode_atts(
		array(
			'title' => '',
			'inner' => '',
		),
		$atts
	);

	$title = $args['title'];

	ob_start();
	?>
	<ul class="accordion" data-accordion data-allow-all-closed="true">
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title"><?php echo esc_textarea( $title ); ?></a>
			<div class="accordion-content" data-tab-content>
				<p><?php echo wp_kses_post( $content ); ?></p>
			</div>
		</li>
	</ul>
	<?php
	return ob_get_clean();
}
add_shortcode( 'accordion', 'strl_accordion_shortcode' );

/**
 * Registers the tooltip shortcode.
 *
 * @package strl
 * @since 1.0.0
 *
 * @param array  $atts    User defined attributes in shortcode tag.
 * @param string $content The string placed between the shortcode tags, if any.
 */
function strl_tooltip_shortcode( $atts, $content ) {
	// Replace the default values with the $atts if there are any.
	$args = shortcode_atts(
		array(
			'tooltip' => '',
		),
		$atts
	);

	$tooltip = $args['tooltip'];

	ob_start();
	echo '<span class="top" data-tooltip tabindex="1" title="' . esc_textarea( $tooltip ) . '">' . esc_textarea( $content ) . '</span>';
	return ob_get_clean();
}
add_shortcode( 'tooltip', 'strl_tooltip_shortcode' );

/**
 * Registers the socials shortcode.
 *
 * @package strl
 * @since 1.0.0
 */
function strl_socials_shortcode() {
	if ( have_rows( 'strl-socials', 'option' ) ) {
		while ( have_rows( 'strl-socials', 'options' ) ) {
			the_row();
			$facebook  = get_sub_field( 'strl-socials-facebook', 'option' );
			$instagram = get_sub_field( 'strl-socials-instagram', 'option' );

			ob_start();
			?>
			<div class="social-icons">
			<?php
			if ( $facebook ) {
				?>
				<a href="https://www.facebook.com/<?php echo esc_textarea( $facebook ); ?>" target="_blank"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Go to Facebook', 'strl' ); ?></span></a>
				<?php
			}
			if ( $instagram ) {
				?>
				<a href="https://www.instagram.com/<?php echo esc_textarea( $instagram ); ?>" target="_blank"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Go to Instagram', 'strl' ); ?></span></a>
				<?php
			}
			?>
			</div>
			<?php
			return ob_get_clean();
		}
	}
}
add_shortcode( 'socials', 'strl_socials_shortcode' );
