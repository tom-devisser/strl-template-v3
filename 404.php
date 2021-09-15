<?php
/**
 * The 404 template file
 *
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package strl
 * @since 1.0
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="error-404">
		<h1><?php esc_html_e( "Oops! That page can't be found.", 'strl' ); ?></h1>
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'strl' ); ?></p>
		<?php get_search_form(); ?>
	</section><!-- .error-404 -->
</main><!-- #primary -->

<?php
get_footer();
