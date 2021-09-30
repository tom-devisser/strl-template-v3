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
$header_title    = get_sub_field( $prefix . 'title' );
$grid_template   = '[facetwp template="services"]';
$grid_pagination = '[facetwp facet="services_pagination"]';
$full_width      = get_sub_field( $prefix . 'full-width' );
?>
<!-- <?php echo esc_textarea( $blockname ); ?> -->
<section class="grid-container <?php echo esc_textarea( $blockname); ?>-section<?php echo ( 'yes' === $full_width ? ' full' : '' ); ?>">
	<header>
		<h2 class="section-title"><?php echo esc_textarea( $header_title ); ?></h2>
	</header>
	<?php echo do_shortcode( $grid_template); ?>
	<?php echo do_shortcode( $grid_pagination ); ?>
</section>
<!-- <?php echo 'end of ' . esc_textarea( $blockname ); ?> -->
