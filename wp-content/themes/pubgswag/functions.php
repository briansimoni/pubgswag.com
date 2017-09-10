<?php

function add_theme_scripts() {
	// styles
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'pubgswag-style', get_stylesheet_uri(), array('bootstrap') );

	// scripts
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
	wp_enqueue_script('tether', get_template_directory_uri() . '/js/tether.min.js', array('jquery'));
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array ( 'jquery', 'tether' ), true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function special_nav_class($classes, $item){
	$classes[] = 'nav-item';
	return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// I want to add a nav class directly to the <a> tags in the header menu
// WordPress doesn't really support this well, so I'm using this work-around
// https://wordpress.stackexchange.com/questions/108092/adding-different-classes-to-anchor-in-navigation-menu
function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
	array_push($item->classes, 'nav-link');
	$classes = implode(' ', $item->classes);
	$item_output = preg_replace('/<a /', '<a class="'.$classes.'"', $item_output, 1);
	return $item_output;
}
add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);


