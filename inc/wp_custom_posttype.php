<?php
/**
 * Custom post type
 * 
 * @package Certified Theme
 */




 
function cf_Listing_custom_post_type() {
	$labels = array(
		'name'                => __( 'Listing' ),
		'singular_name'       => __( 'Listing'),
		'menu_name'           => __( 'Listing'),
		'all_items'           => __( 'All Listing'),
		'view_item'           => __( 'View Listing'),
		'add_new_item'        => __( 'Add New List'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit List'),
		'update_item'         => __( 'Update List'),
		'search_items'        => __( 'Search List'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Listing'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'listing', $args );
}
add_action( 'init', 'cf_Listing_custom_post_type', 0 );

// Let us create Taxonomy for Custom Post Type

 
//create a custom taxonomy name it "type" for your posts
function cf_category_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Listing_category', 'taxonomy general name' ),
    'singular_name' => _x( 'listing_category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'edit_item' => __( 'Edit category' ), 
    'update_item' => __( 'Update category' ),
    'add_new_item' => __( 'Add New category' ),
    'new_item_name' => __( 'New category Name' ),
    'menu_name' => __( 'category' ),
  ); 	
 
  register_taxonomy('listing_category',array('listing'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'listing_category' ),
  ));
}

add_action( 'init', 'cf_category_custom_taxonomy', 0 );

// Location

function cf_location_custom_taxonomy() {
 
	$labels = array(
	  'name' => _x( 'Listing Locations', 'taxonomy general name' ),
	  'singular_name' => _x( 'location', 'taxonomy singular name' ),
	  'all_items' => __( 'All location' ),
	  'edit_item' => __( 'Edit Location' ), 
	  'update_item' => __( 'Update location' ),
	  'add_new_item' => __( 'Add New location' ),
	  'new_item_name' => __( 'New location Name' ),
	  'menu_name' => __( 'Location' ),
	); 	
   
	register_taxonomy('listing_location',array('listing'), array(
	  'hierarchical' => true,
	  'labels' => $labels,
	  'show_ui' => true,
	  'show_admin_column' => true,
	  'query_var' => true,
	  'rewrite' => array( 'slug' => 'location' ),
	));
  }
  add_action( 'init', 'cf_location_custom_taxonomy', 0 );
//End  Custom post type 


// Custom image size

function cf_home_liting_image_size() {
	add_theme_support( 'post-thumbnails' );
    add_image_size('homepage_cpt_img_size', 250, 200, true);
}
add_action( 'after_setup_theme', 'cf_home_liting_image_size' );



// End 





?>