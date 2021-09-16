<?php
/**
 * Template part for displaying search results
 *
 * Displays a horizontal card for a search results.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package strl
 * @since 1.0.0
 */

?>

<article <?php post_class( 'search-card' ); ?>>
	<header class="post-header">
		<?php the_title( '<h2 class="post-title">', '</h2>' ); ?>
	</header>

	<div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- .post-excerpt -->
</article>
