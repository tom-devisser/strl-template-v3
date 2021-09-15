<?php
/**
 * Template part for no content
 *
 * Displays a message when there are no posts found.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package strl
 */

?>

<section class="no-results">
	<h2><?php esc_html_e( 'Nothing found', 'strl' ); ?></h2>

	<div class="page-content">
		<?php
		if ( is_search() ) {
			?>
			<p><?php esc_html_e( 'Sorry, nothing matched your search terms. Please try again with some different keywords.', 'strl' ); ?></p>
			<?php
			get_search_form();
		} else {
			?>
			<p><?php esc_html_e( "It seems we can't find what you're looking for. Perhaps searching can help.", 'strl' ); ?></p>
			<?php
			get_search_form();
		}
		?>
	</div><!-- .post-content -->
</section>
