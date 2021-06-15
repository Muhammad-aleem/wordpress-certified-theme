<?php

function my_event_post_type() {
    register_post_type( 'event',
        array(
            'label'               => ("Event"),
            'singular_label'      => ("Event"),
            'capability_type'     => 'page',
            'public'              => true,
            'show_ui'             => true,
            'show_in_rest' => true,
            'hierarchical'      => true,
            'rewrite'             => array(
                                        'slug'       => 'event-view',
                                    ),
            'supports' => array(
                            'title',
                            'editor',
                        'thumbnail',
                        'excerpt',
                        )
        )
    );
    register_taxonomy(
        'event_cat',
        'event',
        array(
            'hierarchical'  => true,
            'label'         => ("Category"),
            'singular_name' => ("Category"),
            'has_archive'           => true,
            'show_in_rest'          => true,
            'hierarchical'          => true,
            'public'                => true,
            'capability_type'       => 'post'
        )
    );
    }
    add_action('init', 'my_event_post_type');


    //Start Date Custom meta  box

       function event_date_meta() {
        add_meta_box(
            'event_date_metaid',       
            'Start Date',                 
            'event_date_meta_callback', 
            'event',                 
            'normal',
            'high'
        );
     }
     add_action('add_meta_boxes', 'event_date_meta');
    
     function event_date_meta_callback(){
        global $post;
        wp_nonce_field( basename( __FILE__ ), 'event_fields' );
        $get_value = get_post_meta( $post->ID, 'event_start_date_meta_val', true );
        echo '<input type="date" name="eventdate_name" value="'.$get_value. '" style="width:100%">';
     }
    
     function wp_save_event_date_meta_callback( $post_id, $post ) {
        if ( 'revision' === $post->post_type ) {
            return;
        }
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return $post_id;
        }
        if ( ! isset( $_POST['eventdate_name'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
            return $post_id;
        }
        $value = $_POST['eventdate_name'];
        update_post_meta( $post_id, 'event_start_date_meta_val', $value );
    
    
    
    }
    add_action( 'save_post', 'wp_save_event_date_meta_callback', 1, 2 );


    // Event End Date

    function event_end_date_meta() {
        add_meta_box(
            'event_enddate_metaid',       
            'End Date',                 
            'event_enddate_meta_callback', 
            'event',                 
            'normal',
            'high'
        );
     }
     add_action('add_meta_boxes', 'event_end_date_meta');
     function event_enddate_meta_callback(){
        global $post;
        wp_nonce_field( basename( __FILE__ ), 'event_fields' );
        $get_value = get_post_meta( $post->ID, 'event_end_date_meta_val', true );
        echo '<input type="date" name="eventenddate_name" value="'.$get_value. '" style="width:100%">';
     }
     function wp_save_event_enddate_meta_callback( $post_id, $post ) {
        if ( 'revision' === $post->post_type ) {
            return;
        }
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return $post_id;
        }
        if ( ! isset( $_POST['eventenddate_name'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
            return $post_id;
        }
        $value = $_POST['eventenddate_name'];
        update_post_meta( $post_id, 'event_end_date_meta_val', $value );    
    }
    add_action( 'save_post', 'wp_save_event_enddate_meta_callback', 1, 2 );


    // Event Start Time
    function event_start_time_meta() {
        add_meta_box(
            'event_starttime_metaid',       
            'Start Time',                 
            'event_starttime_meta_callback', 
            'event',                 
            'normal',
            'high'
        );
     }
     add_action('add_meta_boxes', 'event_start_time_meta');

     function event_starttime_meta_callback(){
        global $post;
        wp_nonce_field( basename( __FILE__ ), 'event_fields' );
        $get_value = get_post_meta( $post->ID, 'event_start_time_meta_val', true );
        echo '<input type="time" name="eventstart_time_name" value="'.$get_value. '" style="width:100%">';
     }
     function wp_save_event_starttime_meta_callback( $post_id, $post ) {
        if ( 'revision' === $post->post_type ) {
            return;
        }
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return $post_id;
        }
        if ( ! isset( $_POST['eventstart_time_name'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
            return $post_id;
        }
        $value = $_POST['eventstart_time_name'];
        update_post_meta( $post_id, 'event_start_time_meta_val', $value );    
    }
    add_action( 'save_post', 'wp_save_event_starttime_meta_callback', 1, 2 );

// Event End Time

function event_end_time_meta() {
    add_meta_box(
        'event_endtime_metaid',       
        'End Time',                 
        'event_endtime_meta_callback', 
        'event',                 
        'normal',
        'high'
    );
 }
 add_action('add_meta_boxes', 'event_end_time_meta');

 function event_endtime_meta_callback(){
    global $post;
    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    $get_value = get_post_meta( $post->ID, 'event_end_time_meta_val', true );
    echo '<input type="time" name="eventend_time_name" value="'.$get_value. '" style="width:100%">';
 }
 function wp_save_event_endtime_meta_callback( $post_id, $post ) {
    if ( 'revision' === $post->post_type ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }
    if ( ! isset( $_POST['eventend_time_name'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
        return $post_id;
    }
    $value = $_POST['eventend_time_name'];
    update_post_meta( $post_id, 'event_end_time_meta_val', $value );    
}
add_action( 'save_post', 'wp_save_event_endtime_meta_callback', 1, 2 );


    // Location 
    function location_date_meta() {
        add_meta_box(
            'event_location_metaid',       
            'Add Location',                 
            'event_location_meta_callback', 
            'event',                 
            'normal',
            'high'
        );
     }
     add_action('add_meta_boxes', 'location_date_meta');

 function event_location_meta_callback(){
        global $post;
        wp_nonce_field( basename( __FILE__ ), 'event_fields' );
        $get_value = get_post_meta( $post->ID, 'event_location_meta_val', true );
        echo '<input type="text" name="eventlocation_name" value="'.$get_value. '" style="width:100%">';
     }

     function wp_save_event_location_meta_callback( $post_id, $post ) {
        if ( 'revision' === $post->post_type ) {
            return;
        }
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return $post_id;
        }
        if ( ! isset( $_POST['eventlocation_name'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
            return $post_id;
        }
        $value = $_POST['eventlocation_name'];
        update_post_meta( $post_id, 'event_location_meta_val', $value );
    }
    add_action( 'save_post', 'wp_save_event_location_meta_callback', 1, 2 );


    // Add to Calendar Link 

    function event_calendar_date_meta() {
        add_meta_box(
            'event_calendar_metaid',       
            'Add Calendar Link',                 
            'event_calendar_meta_callback', 
            'event',                 
            'normal',
            'high'
        );
     }
     add_action('add_meta_boxes', 'event_calendar_date_meta');

     function event_calendar_meta_callback(){
        global $post;
        wp_nonce_field( basename( __FILE__ ), 'event_fields' );
        $get_value = get_post_meta( $post->ID, 'event_calendar_meta_val', true );
        echo '<input type="text" name="eventcalendar_name" value="'.$get_value. '" style="width:100%">';
     }

     function wp_save_event_calendar_meta_callback( $post_id, $post ) {
        if ( 'revision' === $post->post_type ) {
            return;
        }
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return $post_id;
        }
        if ( ! isset( $_POST['eventcalendar_name'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
            return $post_id;
        }
        $value = $_POST['eventcalendar_name'];
        update_post_meta( $post_id, 'event_calendar_meta_val', $value );
    }
    add_action( 'save_post', 'wp_save_event_calendar_meta_callback', 1, 2 );