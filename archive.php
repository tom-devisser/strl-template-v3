<?php
/**
 * The archive template file. This is used as a fallback, and we don't really use this.
 *
 * Used to display a page when nothing more specific matches a query.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package strl
 * @since 1.0.0
 */

get_header();
$grid_pagination = '[facetwp facet="services_pagination"]';
?>

<main id="primary" class="site-main">
	<?php get_template_part( 'blocks/header/header', '', array( 'title' => get_the_archive_title() ) ); ?>
	<div class="grid-container">
		<div class="grid-x grid-padding-x grid-padding-y medium-up-2 large-up-3">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				// Shows grid-{post-type}.php from /blocks/partials.
				$post_type_label = strtolower( get_post_type_object( get_post_type() )->labels->singular_name );
				get_template_part( 'blocks/partials/grid', $post_type_label );
			}
		} else {
			// Shows the template for no posts found.
			get_template_part( 'template-parts/content', 'none' );
		}
		?>
		</div><!-- .grid-x -->
	</div><!-- .grid-container -->
</main><!-- #primary -->

<?php
get_footer();
