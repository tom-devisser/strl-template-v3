/* globals YT */
/* eslint-disable no-console, no-unused-vars */

let player;

// The API will call this when the page has downloaded the JavaScript for the API
function onYouTubeIframeAPIReady() {
	// Loop over all divs with the video class
	$( '.video' ).each( function( key, videoDiv ) {
		// Retrieve the part of the link of the video after "watch?v="
		const videoId = $( videoDiv ).data( 'video-id' );

		player = new YT.Player( 'video-' + videoId, {
			width: '100%', // This is a fallback for the video popup
			videoId, // This is the part of the link of the video after "watch?v="
			playerVars: {
				controls: 0, // Turns of the control bar
				fs: 0, // Turns off the fullscreen option
			},
			events: {
				onReady: onPlayerReady,
				onStateChange: onPlayerStateChange,
				onError: onPlayerError,
			},
		} );
	} );
}

// Called when the Player's State is 5 (cued)
function onPlayerReady( event ) {
	console.log( 'The player is ready.' );
}

// Called when the Player's State changes
function onPlayerStateChange( event ) {
	console.log( 'The player\'s state changed.' );
}

// Called when an error occurs
function onPlayerError( event ) {
	// This logs an error code, find the explanation of error codes here: https://developers.google.com/youtube/iframe_api_reference?hl=en#Events
	console.log( event.data );
}
