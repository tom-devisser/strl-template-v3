<?php
/**
 * The markup for the Service grid card.
 *
 * @package strl
 * @since 1.0.0
 */

$post_tags = get_the_terms( get_the_ID(), 'post_tag' );

?>
<div class="cell medium-4">
	<div class="grid-service-card">
		<div class="image">
			<img src="<?php echo esc_url( the_post_thumbnail_url() ); ?>" alt="">
		</div>
		<div class="content">
			<div class="categories"><?php the_category( ', ' ); ?></div>
			<h2><?php the_title(); ?></h2>
			<?php
			if ( $post_tags ) {
				foreach ( $post_tags as $post_tag ) {
					echo '<span class="tag-badge">' . esc_textarea( $post_tag->name ) . '</span>';
				}
			}
			?>
			<p><?php the_excerpt(); ?></p>
		</div>
	</div>
</div>
