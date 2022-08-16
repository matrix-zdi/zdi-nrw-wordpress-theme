<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class( 'no-js' ); ?> onload="document.body.classList.replace( 'no-js', 'js' );">
		<?php wp_body_open(); ?>
		<header id="header" class="content-container">
			
			<div id="header__content">
				
				<?php
				if( has_custom_logo() ) {
					the_custom_logo();
				} else if( ! empty( get_bloginfo( 'name' ) ) || ! empty( get_bloginfo( 'description' ) ) ) {
				?>
				<a id="header__logo-link" href="<?php echo home_url(); ?>">
					<?php if( ! empty( get_bloginfo( 'name' ) ) ) { ?>
					<h2 id="header__site-title"><?php bloginfo( 'name' ); ?></h2>
					<?php } ?>
					<?php if( ! empty( get_bloginfo( 'description' ) ) ) { ?>
					<p id="header__site-tagline"><?php echo bloginfo( 'description' ); ?></p>
					<?php } ?>
				</a>
				<?php
				}
				?>
				
				<?php $menu_locations = get_nav_menu_locations(); ?>
				<?php if( ! empty( $menu_locations['main'] ) ) { ?>
				<nav id="header-menu__container" role="navigation" aria-label="Hauptmenü">
					<div id="header-menu__inner-container" class="header-menu__inner-container">
					<?php wp_nav_menu( array(
						'theme_location' => 'main',
						'depth' => '2',
						'container' => false,
						'menu_class' => 'header-menu',
						'menu_id' => 'header-menu',
					)); ?>
					</div>
				</nav>
				<?php } ?>
				
				<a id="header__search-link" role="button" type="button" href="<?php echo add_query_arg( 's', '', home_url() ); ?>"><span></span><span></span><span></span>Suche</a>
				<div id="header__search-form">
					<?php get_search_form(); ?>
				</div>
				
				<?php if( ! empty( $menu_locations['main'] ) ) { ?>
				<a id="header__nav-link" role="button" type="button" href="<?php echo isset( $_GET['force_show'] ) ? get_permalink() : add_query_arg( 'force_show', 'nav', get_permalink() ); ?>"><span></span><span></span><span></span>Menü</a>
				<?php } ?>
				
			</div>
		</header>