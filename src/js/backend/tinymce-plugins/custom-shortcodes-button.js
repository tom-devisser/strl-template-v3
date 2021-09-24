/* globals tinymce */

// Creates shortcode button and adds button objects to it.
( function() {
	tinymce.create( 'tinymce.plugins.strl_buttons', {
		init( editor, url ) {
			url = url.replace( '/js', '' );

			// The Button Object to add to the STRL Shortcodes menu.
			const buttonObject = {
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
			};

			// The Accordion Object to add to the STRL Shortcodes menu.
			const accordionObject = {
				text: 'Accordion',
				onclick() {
					editor.windowManager.open( {
						width: 700,
						height: 400,
						title: 'Accordion',
						body: [ {
							type: 'textbox',
							id: 'accordion-title',
							name: 'title',
							label: 'Title',
							value: '',
						}, {
							type: 'textbox',
							id: 'accordion-text',
							name: 'text',
							label: 'Text',
							value: '',
						} ],
						onsubmit( window ) {
							editor.insertContent( '[accordion title="' + window.data.title + '"]' + window.data.text + '[/accordion]' );
						},
					} );
				},
			};

			// The Accordion Object to add to the STRL Shortcodes menu.
			const tooltipObject = {
				text: 'Tooltip',
				onclick() {
					editor.windowManager.open( {
						width: 700,
						height: 400,
						title: 'Trigger Text',
						body: [ {
							type: 'textbox',
							id: 'tooltip-trigger-text',
							name: 'trigger',
							label: 'Trigger Text',
							value: '',
						}, {
							type: 'textbox',
							id: 'tooltip-tooltip-text',
							name: 'tooltip',
							label: 'Tooltip Text',
							value: '',
						} ],
						onsubmit( window ) {
							editor.insertContent( '[tooltip tooltip="' + window.data.tooltip + '"]' + window.data.trigger + '[/tooltip]' );
						},
					} );
				},
			};

			// Creates and adds custom buttons to TinyMCE Editor
			editor.addButton( 'strl_shortcodes', {
				title: 'STRL',
				image: url + '/img/icon-STRL-blauw.svg',
				type: 'menubutton',
				menu: [ buttonObject, accordionObject, tooltipObject ],
			} );
		},
	} );
	tinymce.PluginManager.add( 'mce_editor_js', tinymce.plugins.strl_buttons );
}() );
