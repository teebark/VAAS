<?php
// Bring in child style sheet
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
// Column 1 class
function col1_func( $atts ){
	return '<div class="col1">';
}
add_shortcode( 'col1', 'col1_func' );
// Column 2 classs
function col2_func( $atts ){
	return '</div><div class="col2">';
}
add_shortcode( 'col2', 'col2_func' );
// Column 3 classs
function col3_func( $atts ){
	return '</div><div class="col3">';
}
add_shortcode( 'col3', 'col3_func' );
// End div
function x_func( $atts ){
	return '</div>';
}
add_shortcode( 'x', 'x_func' );
// Set up for 2 column grid
function table2_func( $atts ){
	return '<div class="table2";>';
}
add_shortcode( 'table2', 'table2_func' );
// Set up for 3 column grid
function table3_func( $atts ){
	return '<div class="table3";>';
}
add_shortcode( 'table3', 'table3_func' );
?>