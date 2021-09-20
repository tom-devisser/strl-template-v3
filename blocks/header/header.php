<?php
/**
 * The markup for the Header block.
 *
 * @package strl
 * @since 1.0.0
 */

$blockname = basename( __FILE__, '.php' );
$prefix    = $blockname . '-';

// Block Field Values.
$header_title    = get_sub_field( $prefix . 'title' );
$header_subtitle = get_sub_field( $prefix . 'subtitle' );

?>
<!-- <?php echo esc_textarea( $blockname ); ?> -->
<div class="grid-container full <?php echo esc_textarea( $blockname ); ?>-section">
	<div class="grid-x grid-padding-y">
		<div class="cell">
			<h1><?php echo esc_textarea( $header_title ); ?></h1>
		<?php
		if ( isset( $header_subtitle ) ) {
			?>
				<p class="subtitle"><?php echo esc_textarea( $header_subtitle ); ?></p>
			</div>
			<?php
		}
		?>
	</div>
</div>
<!-- <?php echo 'end of ' . esc_textarea( $blockname ); ?> -->
