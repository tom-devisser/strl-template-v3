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
				?>
				<div class="cell">
					<?php the_sub_field( $prefix . 'text' ); ?>
				</div>
				<?php
			}
		}
		?>
	</div>
</div>
<!-- <?php echo 'end of ' . esc_textarea( $blockname ); ?> -->
