<?php

if(!function_exists('business_listing_cpt')){
    function business_listing_cpt() {
        register_post_type( 'wp_business_listing',
        array(
            'labels' => array(
                'name' => __( 'Business listing' ),
                'singular_name' => __( 'business_listing' ),
                'all_items'           => __( 'All Business listing'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'business_listing_url'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor','thumbnail', 'excerpt') 
        )
	);
    }
}
add_action( 'init', 'business_listing_cpt' );

// Business Services
function wp_business_services() {
	add_meta_box(
		'wp_business_servicesid',
		'Services',
		'wp_business_servicescallback',
		'wp_business_listing',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wp_business_services' );

if(!function_exists('wp_business_servicescallback')){
    function wp_business_servicescallback(){
        global $post;
	    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
        $services_value = get_post_meta( $post->ID, 'wp_business_services_value', true );
        echo '<input type="text" name="wp_business_services" value="' .$services_value. '">';
    }
}
function wp_business_services_save_value( $post_id, $post ) {
    
    if ( 'revision' === $post->post_type ) {
			return;
        }
        
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['wp_business_services'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
    $bus_services = array();
    if ( get_post_meta( $post_id, 'wp_business_services_value', true ) ) {
        $bus_services = get_post_meta( $post_id, 'wp_business_services_value', true ) ;
    }
    $bus_services[] = $_POST['wp_business_services'];
    update_post_meta( $post_id, 'wp_business_services_value', $bus_services );

}
add_action( 'save_post', 'wp_business_services_save_value', 1, 2 );

// End Business Services

// business_call_action_text
function wp_business_call_action_text() {
	add_meta_box(
		'wp_business_call_action_textid',
		'Call To Action Text',
		'wp_business_call_action_textcallback',
		'wp_business_listing',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wp_business_call_action_text' );


    function wp_business_call_action_textcallback(){
        global $post;
	    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
        $call_action_text_value = get_post_meta( $post->ID, 'bus_call_action_text_value', true );
        echo '<input type="text" name="call_action_text" value="' .$call_action_text_value. '">';
    }


function wp_business_call_action_text_save_value( $post_id, $post ) {
    
    if ( 'revision' === $post->post_type ) {
			return;
        }
        
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['call_action_text'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
  
    $call_action_text = $_POST['call_action_text'];
    update_post_meta( $post_id, 'bus_call_action_text_value', $call_action_text );

}
add_action( 'save_post', 'wp_business_call_action_text_save_value', 1, 2 );

// End business_call_action_text

// business_call_action_Link 


function wp_business_call_action_link() {
	add_meta_box(
		'wp_business_call_action_linkid',
		'Call To Action link',
		'wp_business_call_action_linkcallback',
		'wp_business_listing',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wp_business_call_action_link' );


function wp_business_call_action_linkcallback(){
    global $post;
    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    $call_action_link_value = get_post_meta( $post->ID, 'bus_call_action_link_value', true );
    echo '<input type="text" name="call_action_link" value="' .$call_action_link_value. '">';
}

function wp_business_call_action_link_save_value( $post_id, $post ) {
    
    if ( 'revision' === $post->post_type ) {
			return;
        }
        
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['call_action_link'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
  
    $call_action_link = $_POST['call_action_link'];
    update_post_meta( $post_id, 'bus_call_action_link_value', $call_action_link );

}
add_action( 'save_post', 'wp_business_call_action_link_save_value', 1, 2 );


// 


// wp_business_phome_number

function wp_business_phone_number() {
	add_meta_box(
		'wp_business_business_phone_numberid',
		'Business Phone Number',
		'wp_business_business_phone_number_callback',
		'wp_business_listing',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wp_business_phone_number' );

function wp_business_business_phone_number_callback(){
    global $post;
    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    $business_phome_number_value = get_post_meta( $post->ID, 'wp_business_phome_number', true );
    echo '<input type="text" name="business_phome_number" value="' .$business_phome_number_value. '">';
}

function business_phome_number_save_value( $post_id, $post ) {
    
    if ( 'revision' === $post->post_type ) {
			return;
        }
        
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['business_phome_number'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
  
    $business_phome_number = $_POST['business_phome_number'];
    update_post_meta( $post_id, 'wp_business_phome_number', $business_phome_number );

}
add_action( 'save_post', 'business_phome_number_save_value', 1, 2 );


// wp_business  website

function wp_business_website_function() {
	add_meta_box(
		'wp_business_websiteid',
		'Business Website',
		'wp_business_website_callback',
		'wp_business_listing',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wp_business_website_function' );

function wp_business_website_callback(){
    global $post;
    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    $business_website_value = get_post_meta( $post->ID, 'wp_business_website', true );
    echo '<input type="text" name="business_website_val" value="' .$business_website_value. '">';
}


function business_website_save_value( $post_id, $post ) {
    
    if ( 'revision' === $post->post_type ) {
			return;
        }
        
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['business_website_val'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
  
    $business_website = $_POST['business_website_val'];
    update_post_meta( $post_id, 'wp_business_website', $business_website );

}
add_action( 'save_post', 'business_website_save_value', 1, 2 );



// wp_business Address

function wp_business_address_function() {
	add_meta_box(
		'wp_business_addressid',
		'Business Address',
		'wp_business_address_callback',
		'wp_business_listing',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wp_business_address_function' );

function wp_business_address_callback(){
    global $post;
    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    $business_address_value = get_post_meta( $post->ID, 'wp_business_address', true );
    echo '<input type="text" name="business_address_val" value="' .$business_address_value. '">';
}

function business_address_save_value( $post_id, $post ) {
    
    if ( 'revision' === $post->post_type ) {
			return;
        }
        
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['business_address_val'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
  
    $business_address = $_POST['business_address_val'];
    update_post_meta( $post_id, 'wp_business_address', $business_address);

}
add_action( 'save_post', 'business_address_save_value', 1, 2 );

