<?php

defined( 'ABSPATH' ) || die();

define( 'ZDINRW_THEME_VERSION', '1.0.2' );

function zdinrw_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	remove_theme_support( 'core-block-patterns' );
	remove_theme_support( 'block-templates' );
	
	register_nav_menus( array(
		'main' => 'Hauptmenü'
	) );
	
	register_sidebar( array(
		'id' => 'footer',
		'name' => 'Footer',
		'before_sidebar' => '<ul class="widgets">',
		'after_sidebar' => '</ul>'
	) );
	
	register_block_pattern_category( 'zdinrw', array( 'label' => 'zdi.NRW' ) );
}
add_action( 'after_setup_theme', 'zdinrw_setup' );

function zdinrw_editor_styles_scripts() {
	wp_enqueue_style( 'zdinrw-editor-style', get_template_directory_uri() . '/css/editor.min.css', array(), ZDINRW_THEME_VERSION );
	wp_enqueue_script( 'zdinrw-editor-script', get_template_directory_uri() . '/js/editor.min.js', array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ), ZDINRW_THEME_VERSION, true );
}
add_action( 'enqueue_block_editor_assets', 'zdinrw_editor_styles_scripts' );

function zdinrw_frontend_styles_scripts() {
	wp_enqueue_style( 'zdinrw-style', get_template_directory_uri() . '/css/style.min.css', array(), ZDINRW_THEME_VERSION );
	wp_enqueue_script( 'zdinrw-script', get_template_directory_uri() . '/js/script.min.js', array(), ZDINRW_THEME_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'zdinrw_frontend_styles_scripts' );
