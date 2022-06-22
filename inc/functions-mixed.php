<?php

defined( 'ABSPATH' ) || die();

function zdinrw_body_class_force_show( $classes ) {
	if( isset( $_GET['force_show'] ) && 'nav' == $_GET['force_show'] )
		$classes[] = 'header-menu--visible';
	if( isset( $_GET['force_show'] ) && 'search' == $_GET['force_show'] )
		$classes[] = 'header-search--visible';
	return $classes;
}
add_filter( 'body_class', 'zdinrw_body_class_force_show' );

function get_blog_title() {
	$page_for_posts = get_option( 'page_for_posts', true );
	if( ! empty( $page_for_posts ) )
		return get_the_title( $page_for_posts );
	return 'Blog';
}

function get_flexible_title() {
	if( is_category() ) {
		return single_term_title( 'Kategorie: ', false );
	} else if( is_tag() ) {
		return single_tag_title( 'Schlagwort: ', false );
	} else if( is_day() ) {
		return 'Archiv: ' . get_the_date( get_option( 'date_format' ) );
	} else if( is_month() ) {
		return 'Archiv: ' . get_the_date( 'F Y' );
	} else if( is_year() ) {
		return 'Archiv: ' . get_the_date( 'Y' );
	} else if( is_archive() ) {
		return post_type_archive_title( '', false );
	} else if( is_404() ) {
		return '404 &ndash; Seite nicht gefunden';
	} else if( is_search() && empty( get_search_query() ) ) {
		return 'Suche';
	} else if( is_search() && ! empty( get_search_query() ) ) {
		return 'Suchergebnisse für "' . get_search_query() . '"';
	} else if( is_home() ) {
		return get_blog_title();
	} else {
		return get_the_title( get_queried_object_id() );
	}
}
function the_flexible_title() {
	echo get_flexible_title();
}

function the_breadcrumb_navigation() {
	global $post;
	$breadcrumbs = array();
	$breadcrumbs[] = array(
		'url' => home_url(),
		'label' => 'Startseite'
	);
	if( is_singular( 'post' ) || is_category() || is_tag() ) {
		$breadcrumbs[] = array(
			'url' => get_post_type_archive_link( 'post' ),
			'label' => get_blog_title()
		);
	}
	if( is_page() && $post->post_parent ) {
		$parent = get_post_parent( $post );
		$parents = array();
		while( $parent ) {
			$parents[] = array(
				'url' => get_permalink( $parent ),
				'label' => get_the_title( $parent )
			);
			$parent = get_post_parent( $parent );
		}
		$parents = array_reverse( $parents );
		$breadcrumbs = array_merge( $breadcrumbs, $parents );
	}
	$breadcrumbs[] = array(
		'label' => get_flexible_title() . ( is_paged() ? ' (Seite ' . get_query_var( 'paged' ) . ')' : '' )
	);
	if( ! empty( $breadcrumbs ) ) {
		?>
		<p class="breadcrumb-navigation">
			<?php
			foreach( $breadcrumbs as $el ) {
			?>
			<span class="breadcrumb-navigation__element">
				<?php if( empty( $el['url'] ) ) { ?>
				<span><?php echo $el['label']; ?></span>
				<?php } else { ?>
				<a href="<?php echo $el['url']; ?>"><?php echo $el['label']; ?></a>
				<?php } ?>
			</span>
			<?php
			}
			?>
		</p>
		<?php
	}
}

function zdinrw_fourohfour_content( $content ) {
	if( is_404() )
		return '<p>Der angeforderte Inhalt konnte nicht gefunden werden. Bitte benutzen Sie das Hauptmenü oder die Suche, um zum gewünschten Inhalt zu gelangen.</p>';
	return $content;
}
add_filter( 'the_content', 'zdinrw_fourohfour_content' );
