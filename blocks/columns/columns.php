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
$columns = get_sub_field( $prefix . 'repeater' );

?>
<!-- <?php echo esc_textarea( $blockname ); ?> -->
<div class="grid-container <?php echo esc_textarea( $blockname ); ?>-section">
	<div class="grid-x grid-padding-y grid-padding-x large-up-<?php echo count( $columns ); ?>">
		<?php
		if ( have_rows( $prefix . 'repeater' ) ) {
			while ( have_rows( $prefix . 'repeater' ) ) {
				the_row();

				// Column Field Values.
				$image   = get_sub_field( $prefix . 'image' );
				$content = get_sub_field( $prefix . 'content' );
				if ( $image ) {
					$image_url = $image['sizes']['large'];
					$image_alt = $image['alt'];
				}

				?>
				<div class="cell <?php echo esc_textarea( $prefix ) . 'column'; ?>">
					<?php
					if ( $image ) {
						?>
						<img class="<?php echo esc_textarea( $prefix ) . 'thumbnail'; ?>" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_textarea( $image_alt ); ?>">
						<?php
					}
					?>
					<?php echo wp_kses_post( apply_filters( 'the_content', $content ) ); ?>
				</div>
				<?php
			}
		}
		?>
	</div>
</div>
<!-- <?php echo 'end of ' . esc_textarea( $blockname ); ?> -->
