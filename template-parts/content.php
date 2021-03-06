<?php
/**
 * Template part for displaying posts
 *
 * Displays content for post types unless there's a content-{post-type}.php file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package strl
 * @since 1.0.0
 */

?>

<article <?php post_class( 'cell' ); ?>>
	<header class="post-header">
		<?php
		if ( is_singular() ) {
			the_title( '<h1 class="post-title">', '</h1>' );
		} else {
			the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		}
		?>
	</header>

	<div class="post-content">
		<?php the_content(); ?>
	</div><!-- .post-content -->
</article>
