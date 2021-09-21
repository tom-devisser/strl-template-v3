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
							}, {
								type: 'textbox',
								id: 'button-url',
								name: 'url',
								label: 'Link',
								value: '',
							}, {
								type: 'listbox',
								id: 'button-target',
								name: 'target',
								label: 'Target',
								values: [
									{ value: 'self', text: 'Current window (recommended for internal links)' },
									{ value: 'blank', text: 'Open in a new tab (recommended for external links)' },
								],
							}, {
								type: 'listbox',
								id: 'button-type',
								name: 'type',
								label: 'Type',
								values: [
									{ value: 'primary', text: 'Primary' },
									{ value: 'secondary', text: 'Secondary' },
								],
							} ],
							onsubmit( window ) {
								editor.insertContent( '[button url="' + window.data.url + '" target="' + window.data.target + '" type="' + window.data.type + '"]' + window.data.text + '[/button]' );
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
