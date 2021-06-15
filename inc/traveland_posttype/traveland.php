<?php

/* Our Team */
function my_traveland_cpt() {
    register_post_type( 'traveland',
        array(
            'label'               => ("Traveland Post"),
            'singular_label'      => ("traveland"),
            '_builtin'            => false,
            'capability_type'     => 'page',
            'public'              => true,
            'show_ui'             => true,
            'show_in_nav_menus'   => false,
            'menu_position'       => 5,
            'show_in_rest' => true,
            'menu_icon'           => ( version_compare( $GLOBALS['wp_version'], '3.8', '>=' ) ) ? 'dashicons-airplane' : '',
            'rewrite'             => array(
                                        'slug'       => 'traveland-view',
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
    }
    add_action('init', 'my_traveland_cpt');


    //Travel  Destination Meta Box

    function wpse_add_travel_destination_box() {
        add_meta_box(
            'cpt_travel_destination_id',       // $id
            'Travel Destination',                  // $title
            'cpt_travel_destination_callfun',  // $callback
            'traveland',                 // $page
            'side',                  // $context
            'default'                     // $priority
        );
     }
     add_action('add_meta_boxes', 'wpse_add_travel_destination_box');

     if(!function_exists('cpt_travel_destination_callfun')){
         function cpt_travel_destination_callfun(){
            global $post;
            wp_nonce_field( basename( __FILE__ ), 'travel_destination' );
            $get_travel_destination_value = get_post_meta( $post->ID, 'cpt_travel_destination_metaval', true );
            echo '<input type="text" name="travel_destination" value="'.$get_travel_destination_value. '" class="">';
             
         }

     }
     function wp_save_travel_destination_value( $post_id, $post ) {
        if ( 'revision' === $post->post_type ) {
            return;
        }
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return $post_id;
        }
        if ( ! isset( $_POST['travel_destination'] ) || ! wp_verify_nonce( $_POST['travel_destination'], basename(__FILE__) ) ) {
            return $post_id;
        }
        
        if ( get_post_meta( $post_id, 'cpt_travel_destination_metaval', true ) ) {
            $like_value = get_post_meta( $post_id, 'cpt_travel_destination_metaval', true );
        }
        $like_value = $_POST['travel_destination'];
        update_post_meta( $post_id, 'cpt_travel_destination_metaval', $like_value );
    
    
    
    }
    add_action( 'save_post', 'wp_save_travel_destination_value', 1, 2 );



    //Travel  The Spot Meta Box

    function wpse_add_travel_the_spot_box() {
        add_meta_box(
            'cpt_travel_the_spot_id',       // $id
            'The Spot',                  // $title
            'cpt_travel_the_spot_callfun',  // $callback
            'traveland',                 // $page
            'side',                  // $context
            'default'                     // $priority
        );
     }
     add_action('add_meta_boxes', 'wpse_add_travel_the_spot_box');

     if(!function_exists('cpt_travel_the_spot_callfun')){
        function cpt_travel_the_spot_callfun(){
            global $post;
            wp_nonce_field( basename( __FILE__ ), 'travel_the_spot' );
            $get_travel_the_spot_value = get_post_meta( $post->ID, 'cpt_travel_thespot_metaval', true );
            echo '<input type="text" name="travel_the_spot" value="'.$get_travel_the_spot_value. '" class="wp_the_spot">';

        }
    }

    if(!function_exists('wp_save_travel_the_spot_value')){
        function wp_save_travel_the_spot_value( $post_id, $post ) {
            if ( 'revision' === $post->post_type ) {
                return;
            }
            if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }
            if ( ! isset( $_POST['travel_the_spot'] ) || ! wp_verify_nonce( $_POST['travel_the_spot'], basename(__FILE__) ) ) {
                return $post_id;
            }
            
            if ( get_post_meta( $post_id, 'cpt_travel_thespot_metaval', true ) ) {
                $like_value = get_post_meta( $post_id, 'cpt_travel_thespot_metaval', true );
            }
            $like_value = $_POST['travel_the_spot'];
            update_post_meta( $post_id, 'cpt_travel_thespot_metaval', $like_value );
        }
       

    }
    add_action( 'save_post', 'wp_save_travel_the_spot_value', 1, 2 );

    //Travel  Experience Meta Box


    function wpse_add_travel_experience_box() {
        add_meta_box(
            'cpt_travel_experience_id',       // $id
            'Experience',                  // $title
            'cpt_travel_experience_callfun',  // $callback
            'traveland',                 // $page
            'side',                  // $context
            'default'                     // $priority
        );
     }
     add_action('add_meta_boxes', 'wpse_add_travel_experience_box');


     if(!function_exists('cpt_travel_experience_callfun')){
        function cpt_travel_experience_callfun(){
            global $post;
            $get_experience = array(
                "couple"=>"Couple",
                "family"=>"Family", 
                "friends"=>"Friends",
                "solo"=>"Solo",
                "business"=>"Business"
            );


            wp_nonce_field( basename( __FILE__ ), 'event_fields' );
            $get_travel_experience_value = get_post_meta( $post->ID, 'cpt_travel_experience_metaval', true );
               
               
            ?>
                <select name="travel_experience" id="wporg_field">
                    <option value="">Select Experience...</option>
                <?php
                if($get_experience){
                    foreach($get_experience as $x => $x_value) {
                        $selected = null;
                        if($get_travel_experience_value == $x){
                            $selected = 'selected';
                        }
                       ?><option value="<?php echo $x;?>"<?php  echo $selected; ?>><?php echo $x_value;?></option><?php
                      }
                }
                
                ?>
                </select>
            <?php
            

        }
    }

    function wp_save_travel_experience_value( $post_id, $post )
{

    if ( 'revision' === $post->post_type ) {
        return;
    }
    
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }
    if ( ! isset( $_POST['travel_experience'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
        return $post_id;
    }
    if( !current_user_can( 'edit_post' ) ) return;
    
    if( isset( $_POST['travel_experience'] ) )
        update_post_meta( $post_id, 'cpt_travel_experience_metaval', esc_attr( $_POST['travel_experience'] ) );
}
add_action( 'save_post', 'wp_save_travel_experience_value' ,10, 2 );



//Travel  Accomodation Meta Box




function wpse_add_travel_accomodation_box() {
    add_meta_box(
        'cpt_travel_accomodation_id',       // $id
        'Accomodation',                  // $title
        'cpt_travel_accomodation_callfun',  // $callback
        'traveland',                 // $page
        'side',                  // $context
        'default'                     // $priority
    );
 }
 add_action('add_meta_boxes', 'wpse_add_travel_accomodation_box');


 if(!function_exists('cpt_travel_accomodation_callfun')){
    function cpt_travel_accomodation_callfun(){
        global $post;
        $get_accomodation = array(
            "affordable"=>"Affordable",
            "mid-range"=>"Mid-Range", 
            "above-average"=>"Above Average",
            "lux"=>"Lux",
        );
        wp_nonce_field( basename( __FILE__ ), 'event_fields' );
        $get_travel_eaccomodation_value = get_post_meta( $post->ID, 'cpt_travel_accomodation_metaval', true );
        // echo $get_travel_eaccomodation_value;
        ?>
            <select name="travel_accomodation" id="wporg_field">
                    <option value="">Select Accomodation...</option>
                <?php
                if($get_accomodation){
                    foreach($get_accomodation as $x => $x_value) {
                        $selected_one = null;
                        if($get_travel_eaccomodation_value == $x){
                            $selected_one = 'selected';
                        }
                       ?><option value="<?php echo $x;?>"<?php  echo $selected_one; ?>><?php echo $x_value;?></option><?php
                      }
                }
                
                ?>
                </select>
        <?php


    }
}


function wp_save_travel_accomodation_value(  $post_id, $post )
{

    if ( 'revision' === $post->post_type ) {
        return;
    }
    
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }
    if ( ! isset( $_POST['travel_accomodation'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
        return $post_id;
    }
    if( !current_user_can( 'edit_post' ) ) return;
    
    if( isset( $_POST['travel_accomodation'] ) )
        update_post_meta( $post_id, 'cpt_travel_accomodation_metaval', esc_attr( $_POST['travel_accomodation'] ) );
}
add_action( 'save_post', 'wp_save_travel_accomodation_value' ,10, 2 );





// travel Show Reports

function wpt_show_travel_report() {
	add_meta_box(
		'wp_travel_report_id',
		'Post Reports',
		'wp_travel_report_callback',
		'traveland',
		'advanced',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wpt_show_travel_report' );

function wp_travel_report_callback ( $post_id) {

    $travel_post_report = get_post_meta($post_id->ID, 'travel_repost_val', true);
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
    if(!empty($travel_post_report)){
        foreach($travel_post_report as $result){
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


