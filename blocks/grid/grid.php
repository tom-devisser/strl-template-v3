<?php
/**
 * The markup for the Grid block.
 *
 * @package strl
 * @since 1.0.0
 */

$blockname = basename( __FILE__, '.php' );
$prefix    = $blockname . '-';

// Block Field Values.
$header_title = get_sub_field( $prefix . 'title' );
$grid_facet   = '[facetwp template="services"]';

?>
<!-- <?php echo esc_textarea( $blockname ); ?> -->
<div class="grid-container <?php echo esc_textarea( $blockname ); ?>-section">
	<?php echo do_shortcode( $grid_facet ); ?>
</div>
<!-- <?php echo 'end of ' . esc_textarea( $blockname ); ?> -->
