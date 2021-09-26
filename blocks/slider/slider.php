<?php
/**
 * The markup for the Slider block.
 *
 * @package strl
 * @since 1.0.0
 */

$blockname = basename( __FILE__, '.php' );
$prefix    = $blockname . '-';

// Block Field Values.
$slider_title = get_sub_field( $prefix . 'title' );
$text_color   = get_sub_field( $prefix . 'text-color' );
$slides       = 'slider-slides';
$full_width   = get_sub_field( $prefix . 'full-width' );
?>
<!-- <?php echo esc_textarea( $blockname ); ?> -->
<div class="grid-container <?php echo esc_textarea( $blockname ); ?>-section<?php echo ( 'yes' === $full_width ? ' full' : '' ); ?>">
	<?php
	if ( $slider_title > 0 ) {
		?>
		<div class="grid-x grid-padding-y<?php echo ( 'yes' === $full_width ? '' : 'grid-padding-x' ); ?>">
			<div class="cell">
				<h2 class="slider-title"><?php echo esc_textarea( $slider_title ); ?></h2>
			</div>
		</div>
		<?php
	}

	if ( have_rows( $slides ) ) {
		echo '<div class="slider-block">';
		while ( have_rows( $slides ) ) {
			the_row();
			$slide_image      = get_sub_field( 'slider-background-image' );
			$slide_content    = get_sub_field( 'slider-content' );
			$slide_background = 'test';
			if ( $slide_image ) {
				$slide_background = 'background-image: url(' . esc_url( $slide_image['url'] ) . ')';
			} else {
				$slide_background = 'background-color: #afbdc0;';
			}
			?>
				<div class="slider-wrapper<?php echo ( 'dark' === $text_color ? ' dark-text' : ' light-text' ); ?>" style="<?php echo esc_html( $slide_background ); ?>"">
					<div class="slider-content">
						<?php echo wp_kses_post( $slide_content ); ?>
					</div>
				</div>
			<?php
		}
		echo '</div>';
	}
	?>
</div>
<!-- <?php echo 'end of ' . esc_textarea( $blockname ); ?> -->
