<?php

/**
 * Theme Support
 */

 function linkyouca_theme_support(){
	// Add dynamic title tag support
	add_theme_support('title-tag');
	// Add featured image support
	add_theme_support('post-thumbnails');
 }

 add_action('after_setup_theme', 'linkyouca_theme_support');




/**
 * Register styles.
 */


 function linkyouca_register_styles(){
	wp_enqueue_style( 'linkyouca-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
	wp_enqueue_style( 'linkyouca-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.3.1' , 'all' );
	wp_enqueue_style('linkyouca-responsive' , get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
 }

 add_action('wp_enqueue_scripts', 'linkyouca_register_styles');


/**
 * Register scripts.
 */

function linkyouca_register_scripts(){

	wp_enqueue_script( 'linkyouca-jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), '3.4.1', true );
	wp_enqueue_script( 'linkyouca-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '4.3.1', true );
	wp_enqueue_script( 'linkyouca-main', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get( 'Version' ), true );
}

add_action('wp_enqueue_scripts', 'linkyouca_register_scripts');


/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'  => _x( 'Jobs', 'Post Type General Name'),
        'singular_name'       => _x( 'Job', 'Post Type Singular Name'),
        'menu_name'           => __( 'Jobs'),
        'all_items'           => __( 'All Jobs'),
        'view_item'           => __( 'View Job'),
        'add_new_item'        => __( 'Add New Job'),
        'add_new'             => __( 'Add New'),
        'edit_item'           => __( 'Edit Job'),
        'update_item'         => __( 'Update Job'),
        'search_items'        => __( 'Search Job'),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash'),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label' => __( 'Jobs'),
        'description'=> __( 'current job openings'),
        'supports'=> array( 'title', 'editor', 'excerpt', 'author', 'thumbnail'),
        'hierarchical'        => false,
        'public'=> true,
				'menu_icon' => 'dashicons-businessman',
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'jobs', $args );
 
}
 
 
add_action( 'init', 'custom_post_type', 0 );