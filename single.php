<?php
/**
 * The template for displaying all single posts.
 *
 * This is the template that displays all posts and custom post types,
 * unless there's a single-{post-type}.php file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package strl
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php get_template_part( 'blocks/header/header', '', array( 'title' => get_the_title() ) ); ?>
	<div class="grid-container">
		<div class="grid-x grid-padding-x grid-padding-y">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				// Shows content-{post-type}.php from /template-parts.
				get_template_part( 'template-parts/content', get_post_type() );
			}
		}
		?>
		</div><!-- .grid-x -->
	</div><!-- .grid-container -->
</main><!-- #primary -->

<?php
get_footer();
