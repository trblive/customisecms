<?php

// enqueue stylesheet in front end
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style('theme_styles',  get_template_directory_uri() . '/style.css');
});

// enqueue stylesheet in block editor
add_action('after_setup_theme', function () {
	add_theme_support('editor_styles');
	add_editor_style('style.css');
});

// register sidebar template part area
add_filter('default_wp_template_part_areas', function(array $areas) {
	$areas[] = array(
		'area'        => 'sidebar',
		'area_tag'    => 'div',
		'label'       => __( 'Sidebar', 'customisecms' ),
		'description' => __( 'Template area for sidebar.', 'customisecms' ),
		'icon'        => 'sidebar'
	);

	return $areas;
});

add_action('init', function () {
	register_block_pattern_category(
		'customisecms_page',
		array(
			'label'       => _x( 'Pages', 'Block pattern category', 'customisecms' ),
			'description' => __( 'A collection of full page layouts.', 'customisecms' ),
		)
	);
});