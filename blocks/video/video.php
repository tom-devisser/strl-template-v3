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
$video_id   = get_sub_field( $prefix . 'video-id' );
$full_width = get_sub_field( $prefix . 'full-width' );
$pop_up     = get_sub_field( $prefix . 'pop-up' );
?>
<!-- <?php echo esc_textarea( $blockname ); ?> -->
<div class="grid-container <?php echo esc_textarea( $blockname ); ?>-section<?php echo ( 'yes' === $full_width ? ' full' : '' ); ?>">
	<div class="grid-x grid-padding-y<?php echo ( 'yes' === $full_width ? '' : 'grid-padding-x' ); ?>">
		<div class="cell <?php echo esc_textarea( $prefix ) . 'column'; ?>">
			<?php
			if ( 'no' === $pop_up ) {
				?>
				<div class="video-container">
					<div class="video" id="video-<?php echo esc_textarea( $video_id ); ?>" data-video-id="<?php echo esc_textarea( $video_id ); ?>"></div>
				</div>
				<?php
			} elseif ( 'yes' === $pop_up ) {
				$thumbnail = get_sub_field( $prefix . 'video-thumbnail' );
				?>
				<div class="video-preview" style="background-image: url('<?php echo esc_url( $thumbnail['url'] ); ?>')">
					<button class="play-button" data-open="reveal-video-<?php echo esc_textarea( $video_id ); ?>">
						<i class="fas fa-play"></i>
						<span class="screen-reader-text"><?php esc_html_e( 'Open video pop-up.', 'strl' ); ?></span>
					</button>
				</div>

				<!-- Video Pop-Up -->
				<div class="reveal small" id="reveal-video-<?php echo esc_textarea( $video_id ); ?>" data-reveal>
					<div class="video-container">
						<div class="video" id="video-<?php echo esc_textarea( $video_id ); ?>" data-video-id="<?php echo esc_textarea( $video_id ); ?>"></div>
					</div>

					<!-- Close reveal -->
					<button class="close-button" data-close aria-label="Close modal" type="button">
						<span aria-hidden="true">&times
							<span class="screen-reader-text"><?php esc_html_e( 'Close video pop-up.', 'strl' ); ?></span>
						</span>
					</button>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
<!-- <?php echo 'end of ' . esc_textarea( $blockname ); ?> -->
