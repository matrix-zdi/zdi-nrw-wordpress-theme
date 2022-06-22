document.addEventListener( 'DOMContentLoaded', function() {
		
	var header_nav_link = document.getElementById( 'header__nav-link' );
	if( header_nav_link ) {
		header_nav_link.addEventListener( 'click', function( e ) {
			e.preventDefault();
			document.body.classList.toggle( 'header-menu--visible' );
		});
	}
	
	var header_menu = document.getElementById( 'header-menu__container' );
	if( header_menu ) {
		header_menu.addEventListener( 'click', function( e ) {
			if( e.target.id == 'header-menu__container' ) {
				document.body.classList.toggle( 'header-menu--visible' );
			}
		});
	}
	
	var header_search_link = document.getElementById( 'header__search-link' );
	if( header_search_link ) {
		header_search_link.addEventListener( 'click', function( e ) {
			e.preventDefault();
			document.body.classList.toggle( 'header-search--visible' );
		});
	}
	
	document.addEventListener( 'keydown', function( e ) {
		if( e.keyCode == 27 ) {
			document.body.classList.remove( 'header-menu--visible' );
			document.body.classList.remove( 'header-search--visible' );
		}
	} );
	
});