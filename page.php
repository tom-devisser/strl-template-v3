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
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			if ( class_exists( 'acf' ) ) {
				if ( have_rows( 'strl-blocks' ) ) {
					while ( have_rows( 'strl-blocks' ) ) {
						the_row();
						get_template_part( 'blocks/' . get_row_layout() . '/' . get_row_layout() );
					}
				}
			}
		}
	}
	?>
</main><!-- #primary -->

<?php
get_footer();
