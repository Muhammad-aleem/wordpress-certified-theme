<?php

if(!function_exists('alert_custompost_type')){
    function alert_custompost_type() {
        register_post_type( 'wp_comm_alert',
        array(
            'labels' => array(
                'name' => __( 'Alerts' ),
                'singular_name' => __( 'wp_postalerts' ),
                'all_items'           => __( 'All Posts Alerts'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'wp_alert_postreview_url'),
            'show_in_rest' => true,
            'supports'    => array('title','editor',)
        )
	);
    }
}
add_action( 'init', 'alert_custompost_type' );







