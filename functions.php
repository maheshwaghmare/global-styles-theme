<?php

function global_styles_experimental_after_setup_theme() {
	add_theme_support('editor-styles');
	add_editor_style('style.css');
}
add_action( 'after_setup_theme', 'global_styles_experimental_after_setup_theme' );

function global_styles_experimental_wp_enqueue_scripts() {
	wp_enqueue_style(
		'global-styles-theme-style-resets',
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
			'color' => '#0073AA',
		),
		array(
			'name'  => __( 'Secondary', 'global-styles' ),
			'slug'  => 'secondary',
			'color' => '#005177',
		),
	) );

	add_theme_support( 'editor-gradient-presets', array(
		array(
			'name'     => __( 'Vivid cyan blue to vivid purple', 'global-styles' ),
			'gradient' => 'linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)',
			'slug'     => 'vivid-cyan-blue-to-vivid-purple'
		),
		array(
			'name'     => __( 'Vivid green cyan to vivid cyan blue', 'global-styles' ),
			'gradient' => 'linear-gradient(135deg,rgba(0,208,132,1) 0%,rgba(6,147,227,1) 100%)',
			'slug'     =>  'vivid-green-cyan-to-vivid-cyan-blue',
		),
	) );

	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => __( 'Small', 'global-styles' ),
			'size' => 12,
			'slug' => 'small'
		),
		array(
			'name' => __( 'Huge', 'global-styles' ),
			'size' => 50,
			'slug' => 'huge'
		)
	) );
}
add_action( 'after_setup_theme', 'global_styles_theme_after_setup' );
