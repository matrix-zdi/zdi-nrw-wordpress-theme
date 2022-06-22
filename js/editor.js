document.getElementsByTagName( "html" )[0].style.fontSize = "62.5%";

wp.domReady( () => {
	
	// Register List block styles
	wp.blocks.registerBlockStyle( 'core/list', {
		name: 'checkbox',
		label: 'Checkbox'
	} );
	
	// Register Heading block styles
	wp.blocks.registerBlockStyle( 'core/heading', {
		name: 'underline',
		label: 'Unterstrich'
	} );
	wp.blocks.registerBlockStyle( 'core/heading', {
		name: 'pill-shape',
		label: 'Pillen-Form'
	} );
	
} );

