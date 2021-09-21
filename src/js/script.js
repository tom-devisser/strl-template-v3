// Initializes Foundation
jQuery( document ).foundation();

jQuery( document ).ready( function() {
	// Removes empty <p> after an accordion.
	jQuery( '.accordion p:empty, .orbit p:empty' ).remove();
} );
