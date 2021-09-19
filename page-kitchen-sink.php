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
			<div class="cell medium-6">
				<h2>Heading</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="#" class="btn-primary">Buy now</a>
				<a href="#" class="btn-secondary">Contact Us</a>
			</div>

			<div class="cell medium-6">
				<h2>Heading</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div><!-- .grid-x -->

		<div class="grid-x grid-padding-x grid-padding-y">
			<div class="cell medium-6">
				<ul class="accordion" data-accordion data-allow-all-closed="true">
					<li class="accordion-item is-active" data-accordion-item>
						<a href="#" class="accordion-title">Accordion 1</a>
						<div class="accordion-content" data-tab-content>
							<p>Panel 1. Lorem ipsum dolor</p>
							<a href="#">Nowhere to go</a>
						</div>
					</li>
					<li class="accordion-item" data-accordion-item>
						<a href="#" class="accordion-title">Accordion 2</a>
						<div class="accordion-content" data-tab-content>
							<p>Panel 2. Lorem ipsum dolor</p>
							<a href="#">Nowhere to go</a>
						</div>
					</li>
					<li class="accordion-item" data-accordion-item>
						<a href="#" class="accordion-title">Accordion 3</a>
						<div class="accordion-content" data-tab-content>
							<p>Panel 3. Lorem ipsum dolor</p>
							<a href="#">Nowhere to go</a>
						</div>
					</li>
					<li class="accordion-item" data-accordion-item>
						<a href="#" class="accordion-title">Accordion 4</a>
						<div class="accordion-content" data-tab-content>
							<p>Panel 4. Lorem ipsum dolor</p>
							<a href="#">Nowhere to go</a>
						</div>
					</li>
				</ul>
			</div>

			<div class="cell medium-6">
				<table>
					<thead>
						<tr>
							<th width="200">Table Header</th>
							<th>Table Header</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Content Goes Here</td>
							<td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
						</tr>
						<tr>
							<td>Content Goes Here</td>
							<td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
						</tr>
						<tr>
							<td>Content Goes Here</td>
							<td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div><!-- .grid-x -->

		<div class="grid-x grid-padding-x grid-padding-y">
			<div class="cell">
				<ul class="tabs" data-tabs id="strl-tabs" role="tablist">
					<li class="tabs-title is-active"><a href="#panel-1" aria-selected="true">Tab 1</a></li>
					<li class="tabs-title"><a data-tabs-target="panel-2" href="#panel-2">Tab 2</a></li>
					<li class="tabs-title"><a data-tabs-target="panel-3" href="#panel-3">Tab 3</a></li>
					<li class="tabs-title"><a data-tabs-target="panel-4" href="#panel-4">Tab 4</a></li>
				</ul>
				<div class="tabs-content" data-tabs-content="strl-tabs">
					<div class="tabs-panel is-active" id="panel-1">
						<p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
					</div><!-- .tabs-panel -->
					<div class="tabs-panel" id="panel-2">
						<p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
					</div><!-- .tabs-panel -->
					<div class="tabs-panel" id="panel-3">
						<p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
					</div><!-- .tabs-panel -->
					<div class="tabs-panel" id="panel-4">
						<p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
					</div><!-- .tabs-panel -->
				</div><!-- .tabs-content -->
			</div>
		</div><!-- .grid-x -->
	</div><!-- .grid-container -->
</main><!-- #primary -->

<?php
get_footer();
