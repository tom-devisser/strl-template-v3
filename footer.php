<?php
/**
 * The footer for this theme.
 *
 * Displays the <footer> section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package strl
 * @since 1.0.0
 */

?>

	<footer class="site-footer">
		<div class="grid-container">
			<div class="grid-x grid-padding-x grid-padding-y">
				<div class="cell medium-6 large-3">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
				<div class="cell medium-6 large-3">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<div class="cell medium-6 large-3">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
				<div class="cell medium-6 large-3">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div>
			</div>

			<div class="grid-x site-footer-inner">
				<div class="cell">
					<p class="copyright">&copy; Stuurlui 2021</p>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page .site -->
<?php wp_footer(); ?>
</body>
</html>
