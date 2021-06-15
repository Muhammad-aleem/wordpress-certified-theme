<?php

/* Our Team */
function my_post_type_team() {
    register_post_type( 'community',
        array(
            'label'               => ("Community Post"),
            'singular_label'      => ("Community"),
            '_builtin'            => false,
            'capability_type'     => 'page',
            'public'              => true,
            'show_ui'             => true,
            'show_in_rest' => true,
            'show_in_nav_menus'   => false,
            'menu_position'       => 5,
            'menu_icon'           => ( version_compare( $GLOBALS['wp_version'], '3.8', '>=' ) ) ? 'dashicons-businessman' : '',
            'rewrite'             => array(
                                        'slug'       => 'community-view',
                                        'with_front' => FALSE,
                                    ),
            'supports' => array(
                            'title',
                            'editor',
                        'thumbnail',
                        'excerpt',
                        'comments'
                        )
        )
    );
    register_taxonomy(
        'team_tag',
        'community',
        array(
            'hierarchical'  => false,
            'label'         => ("tags"),
            'singular_name' => ("tag"),
            'rewrite'       => true,
            'query_var'     => true,
            'show_in_rest' => true,
        )
    );
    }
    add_action('init', 'my_post_type_team');


add_filter( 'the_content', 'wti_remove_autop_for_image', 0 );

function wti_remove_autop_for_image( $content )
{
     global $post;

     // Check for single page and image post type and remove
     if ( is_single() && $post->post_type == 'community' )
          remove_filter('the_content', 'wpautop');

     return $content;
}




function wpt_add_comm_like_metaboxes() {
	add_meta_box(
		'wp_comm_like_id',
		'Like Post ',
		'wp_comm_like_callback',
		'community',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wpt_add_comm_like_metaboxes' );

function wp_comm_like_callback() {
	global $post;
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    $get_comm_the_like_value = get_post_meta( $post->ID, 'wp_comm_count_like_value', true );
    $likeCount = '';
    if(!empty($get_comm_the_like_value)){
        $likeCount = count($get_comm_the_like_value);
    }else{
        $likeCount = "0";
    }
    // echo '<span>'. $likeCount.'<span>';

	// echo ''.$get_comm_the_like_value. '';
}

function wp_save_comm_like_save_value( $post_id, $post ) {
	if ( 'revision' === $post->post_type ) {
        return;
    }
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['wp_conn_like_value'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
    $like_value = array();

    if ( get_post_meta( $post_id, 'wp_comm_count_like_value', true ) ) {
        $like_value = get_post_meta( $post_id, 'wp_comm_count_like_value', true );
    }
    $like_value[] = $_POST['wp_conn_like_value'];
    update_post_meta( $post_id, 'wp_comm_count_like_value', $like_value );

}
add_action( 'save_post', 'wp_save_comm_like_save_value', 1, 2 );



// Community Show Reports

function wpt_show_comm_report() {
	add_meta_box(
		'wp_comm_report_id',
		'Post Reports',
		'wp_comm_report_callback',
		'community',
		'advanced',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wpt_show_comm_report' );

function wp_comm_report_callback ( $post_id) {

    $comm_post_report = get_post_meta($post_id->ID, 'comm_repost_val', true);
    ?>
     <table class="table">
    <thead>
      <tr>
        <th>Reporter</th>
        <th>Reason</th>
      </tr>
    </thead>
    <tbody>
    
    <?php
    if(!empty($comm_post_report)){
        foreach($comm_post_report as $result){
            $userid = $result['reporterid'];
            $author_name = get_the_author_meta('user_nicename', $userid);
            ?>
            <tr>
            <td><?=  $author_name;?></td>
            <td><?= $result['reason']?></td>
            </tr>
            <?php
        }
    }
    ?>
     
    </tbody>
  </table>
    <?php
}
