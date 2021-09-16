<?php
/**
 * Template part for displaying pages
 *
 * Displays content for pages in page.php.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package strl
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?>>
	<header class="post-header">
		<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
	</header>

	<div class="post-content">
		<?php the_content(); ?>
	</div><!-- .post-content -->
</article>
