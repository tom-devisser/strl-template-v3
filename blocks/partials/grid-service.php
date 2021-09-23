<?php
/**
 * The markup for the Service grid card.
 *
 * @package strl
 * @since 1.0.0
 */

$service_tags       = get_the_terms( get_the_ID(), 'service_tags' );
$service_categories = get_the_terms( get_the_ID(), 'service_category' );
?>
<div class="cell medium-4">
	<div class="grid-service-card">
		<div class="image-box">
			<img class="zoom-on-hover" src="<?php echo esc_url( the_post_thumbnail_url() ); ?>" alt="">
		</div>
		<div class="content">
			<?php
			if ( $service_categories ) {
				echo '<p class="categories">';
				foreach ( $service_categories as $service_category ) {
					echo '<span class="category">' . esc_textarea( $service_category->name ) . '</span>';
				}
				echo '</p>';
			}
			?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php
			if ( ! empty( $service_tags ) ) {
				echo '<div class="tag-badges">';
				foreach ( $service_tags as $service_tag ) {
					echo '<span class="tag-badge">' . esc_textarea( $service_tag->name ) . '</span>';
				}
				echo '</div>';
			}
			?>
			<p><?php the_excerpt(); ?></p>
		</div>
	</div>
</div>
