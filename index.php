<?php
/**
 * The main template file
 *
 * Used to display a page when nothing more specific matches a query.
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
				// Shows content-{post-type}.php from /template-parts.
				get_template_part( 'template-parts/content', get_post_type() );
			}
		} else {
			// Shows the template for no posts found.
			get_template_part( 'template-parts/content', 'none' );
		}
		?>
		</div><!-- .grid-container -->
	</div><!-- .grid-x -->
</main><!-- #primary -->

<?php
get_footer();
