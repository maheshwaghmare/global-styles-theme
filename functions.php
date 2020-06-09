<?php

function global_styles_experimental_wp_enqueue_scripts() {
	wp_enqueue_style(
		'global-styles-theme-style',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		filemtime( dirname( __FILE__ ) . '/style.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'global_styles_experimental_wp_enqueue_scripts' );


function global_styles_theme_after_setup() {
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Primary', 'global-styles' ),
			'slug'  => 'primary',
			'color' => 'rgb(131, 12, 8)',
		),
		array(
			'name'  => __( 'Secondary', 'global-styles' ),
			'slug'  => 'secondary',
			'color' => 'rgb(60, 12, 15)',
		),
		array(
			'name'  => __( 'Tertiary', 'global-styles' ),
			'slug'  => 'tertiary',
			'color' => 'rgb(209, 207, 203)',
		),
		array(
			'name'  => __( 'Quaternary', 'global-styles' ),
			'slug'  => 'quaternary',
			'color' => 'rgb(30, 30, 30)',
		),
	) );

	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => __( 'Normal', 'global-styles' ),
			'size' => 16,
			'slug' => 'normal'
		),
		array(
			'name' => __( 'Big', 'global-styles' ),
			'size' => 32,
			'slug' => 'big'
		),
		array(
			'name' => __( 'Huge', 'global-styles' ),
			'size' => 60,
			'slug' => 'huge'
		)
	) );

	add_theme_support('editor-styles');
	add_editor_style('style.css');
}
add_action( 'after_setup_theme', 'global_styles_theme_after_setup' );
