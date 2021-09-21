/* globals tinymce */

// Creates shortcode button and adds button objects to it.
( function createShortcodesButton() {
	tinymce.create( 'tinymce.plugins.strl_buttons', {
		init( editor ) {
			// Creates and adds custom buttons to TinyMCE Editor
			editor.addButton( 'strl_shortcodes', {
				title: 'STRL',
				text: 'STRL',
				type: 'menubutton',
				menu: [ {
					text: 'Button',
					onclick() {
						editor.windowManager.open( {
							width: 700,
							height: 400,
							title: 'Button',
							body: [ {
								type: 'textbox',
								id: 'button-text',
								name: 'text',
								label: 'Text',
								value: '',
							} ],
							onsubmit( window ) {
								editor.insertContent( '[button]' + window.data.text + '[/button]' );
							},
						} );
					},
				}, {
					text: 'Accordion',
					onclick() {
						editor.windowManager.open( {
							width: 700,
							height: 400,
							title: 'Accordion',
							body: [ {
								type: 'textbox',
								id: 'accordion-text',
								name: 'text',
								label: 'Text',
								value: '',
							} ],
							onsubmit( window ) {
								editor.insertContent( '[accordion]' + window.data.text + '[/accordion]' );
							},
						} );
					},
				} ],
			} );
		},
	} );
	tinymce.PluginManager.add( 'mce_editor_js', tinymce.plugins.strl_buttons );
}() );
