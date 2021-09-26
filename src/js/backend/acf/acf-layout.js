( function( $ ) {
	$( document ).ready( function() {
		// Move the inside of standard WP boxes to ACF fields.
		$( '.acf-field-strl-service-content .acf-input' ).append( $( '#postdivrich' ) ); // Content Editor
		$( '.acf-field-strl-service-featured-image .acf-input' ).append( $( '#postimagediv .inside p' ) ); // Featured Image
		$( '.acf-field-strl-service-excerpt .acf-input' ).append( $( '#postexcerpt textarea' ) ); // Excerpt
		$( '.acf-field-strl-service-excerpt .acf-input' ).append( $( '#postexcerpt p' ) ); // Excerpt instructions
		$( '.acf-field-strl-service-categories .acf-input' ).append( $( '#taxonomy-service_category' ) ); // Service Category Taxonomy
		$( '.acf-field-strl-service-tags .acf-input' ).append( $( '#tagsdiv-service_tags .tagsdiv' ) ); // Service Tags Taxonomy
		$( '.acf-field-strl-page-attributes .acf-input' ).append( $( '#pageparentdiv .inside' ).contents() ); // Page Attributes

		// Remove the leftover wrapper of the standard WP boxes.
		$( '#postimagediv' ).hide(); // Featured Image
		$( '#postexcerpt' ).hide(); // Excerpt
		$( '#service_categorydiv' ).hide(); // Service Category Taxonomy
		$( '#tagsdiv-service_tags' ).hide(); // Service Tags Taxonomy
		$( '#pageparentdiv' ).hide(); // Page Attributes
	} );
}( jQuery ) );
