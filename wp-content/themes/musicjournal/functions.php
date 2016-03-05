<?php

function theme_styles() {
	wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600|Fredericka+the+Great|Mr+De+Haviland|Forum' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

//Enable custom menus
add_theme_support( 'menus' );

add_action('init', 'project_add_default_boxes');

function project_add_default_boxes() {
	register_taxonomy_for_object_type('category', 'project');
	register_taxonomy_for_object_type('post_tag', 'project');
}

function post_type_tags_fix($request) {
    if ( isset($request['tag']) && !isset($request['post_type']) )
    $request['post_type'] = 'any';
    return $request;
}
add_filter('request', 'post_type_tags_fix');

?>