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
	<div class="container">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content', 'page' );
		}
	}
	?>
	<!-- Kitchen Sink -->
	<a href="#" class="btn-primary">Primary</a>
	<a href="#" class="btn-secondary">Secondary</a>
</main><!-- #primary -->

<?php
get_footer();
