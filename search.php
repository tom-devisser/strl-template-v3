<?php
/**
 * The template for displaying search results.
 *
 * This is the template that displays all search results for the default search form.
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
		// Checks if there are search results.
		if ( have_posts() ) {
			?>
			<h2>
				<?php
				/* translators: %s: search query */
				printf( esc_html__( "Search results for '%s'", 'strl' ), get_search_query() );
				?>
			</h2>
			<?php
			while ( have_posts() ) {
				the_post();
				// Shows the template for the search results.
				get_template_part( 'template-parts/content', 'search' );
			}
			// Shows pagination for the results.
			the_posts_navigation();
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
