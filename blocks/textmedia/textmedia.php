<?php
/**
 * The markup for the Columns block.
 *
 * @package strl
 * @since 1.0.0
 */

$blockname = basename( __FILE__, '.php' );
$prefix    = $blockname . '-';

// Block Field Values.
$text          = get_sub_field( $prefix . 'text' );
$text_position = get_sub_field( $prefix . 'text-position' );
$image         = get_sub_field( $prefix . 'image' );
$full_width    = get_sub_field( $prefix . 'full-width' );

?>
<!-- <?php echo esc_textarea( $blockname ); ?> -->
<div class="grid-container <?php echo esc_textarea( $blockname ); ?>-section<?php echo ( 'yes' === $full_width ? ' full' : '' ); ?>">
	<div class="grid-x grid-padding-y grid-padding-x"<?php echo ( 'right' === $text_position ? 'style="flex-direction: row-reverse;"' : '' ); ?>>
		<div class="cell small-12 medium-6">
			<div class="text-column">
				<?php echo wp_kses_post( apply_filters( 'the_content', $text ) ); ?>
			</div>
		</div>
		<div class="cell small-12 medium-6">
			<div class="media-column">
				<div class="image" style="background-image: url('<?php echo esc_url( $image['url'] ); ?>')">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <?php echo 'end of ' . esc_textarea( $blockname ); ?> -->
