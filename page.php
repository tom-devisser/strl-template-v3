<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package strl
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x grid-padding-y">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', 'page' );
			}
		}
		?>
		</div><!-- .grid-container -->
	</div><!-- .grid-x -->
</main><!-- #primary -->

<?php
get_footer();
