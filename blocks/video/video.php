<?php
/**
 * The markup for the Video block.
 *
 * @package strl
 * @since 1.0.0
 */

$blockname = basename( __FILE__, '.php' );
$prefix    = $blockname . '-';

// Block Field Values.
$video_id = get_sub_field( $prefix . 'video-id' );
?>
<!-- <?php echo esc_textarea( $blockname ); ?> -->
<div class="grid-container <?php echo esc_textarea( $blockname ); ?>-section">
	<div class="grid-x grid-padding-y grid-padding-x">
		<div class="cell <?php echo esc_textarea( $prefix ) . 'column'; ?>">
			<div class="video-container">
				<div class="video" id="video-<?php echo esc_textarea( $video_id ); ?>" data-video-id="<?php echo esc_textarea( $video_id ); ?>"></div>
			</div>
		</div>
	</div>
</div>
<!-- <?php echo 'end of ' . esc_textarea( $blockname ); ?> -->
