<?php

function my_entertainment_post_type() {
    register_post_type( 'entertainment',
        array(
            'label'               => ("Entertainment"),
            'singular_label'      => ("Entertainment"),
            'capability_type'     => 'page',
            'public'              => true,
            'show_ui'             => true,
            'show_in_rest' => true,
            'hierarchical'      => true,
            'menu_position'       => 5,
            'menu_icon'           => ( version_compare( $GLOBALS['wp_version'], '3.8', '>=' ) ) ? 'dashicons-format-video' : '',
            'rewrite'             => array(
                                        'slug'       => 'entertainment-view',
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
        'entertainment_cat',
        'entertainment',
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
    add_action('init', 'my_entertainment_post_type');


    // Purchase meta
    function purchase_the_movies() {
        add_meta_box(
            'purchase_metaid',       
            'Purchase Link',                 
            'purchase_meta_callback', 
            'entertainment',                 
            'normal',
            'high'
        );
     }
     add_action('add_meta_boxes', 'purchase_the_movies');
    
     function purchase_meta_callback(){
        global $post;
        wp_nonce_field( basename( __FILE__ ), 'event_fields' );
        $get_value = get_post_meta( $post->ID, 'purchase_meta_val', true );
        echo '<input type="text" name="purchase_name" value="'.$get_value. '" style="width:100%">';
     }
    
     function wp_save_purchase_meta_callback( $post_id, $post ) {
        if ( 'revision' === $post->post_type ) {
            return;
        }
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return $post_id;
        }
        if ( ! isset( $_POST['purchase_name'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
            return $post_id;
        }
        $value = $_POST['purchase_name'];
        update_post_meta( $post_id, 'purchase_meta_val', $value );
    
    
    
    }
    add_action( 'save_post', 'wp_save_purchase_meta_callback', 1, 2 );

// // Purchase meta
function purchase_the_movies_text() {
    add_meta_box(
        'purchase_metatextid',       
        'Purchase Text',                 
        'purchase_meta_textcallback', 
        'entertainment',                 
        'normal',
        'high'
    );
 }
 add_action('add_meta_boxes', 'purchase_the_movies_text');
 function purchase_meta_textcallback(){
    global $post;
    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    $get_value = get_post_meta( $post->ID, 'purchase_textmeta_val', true );
    echo '<input type="text" name="purchasetext_name" value="'.$get_value. '" style="width:100%">';
 }
 function wp_save_purchasetext_meta_callback( $post_id, $post ) {
    if ( 'revision' === $post->post_type ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }
    if ( ! isset( $_POST['purchasetext_name'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
        return $post_id;
    }
    $value = $_POST['purchasetext_name'];
    update_post_meta( $post_id, 'purchase_textmeta_val', $value );
}
add_action( 'save_post', 'wp_save_purchasetext_meta_callback', 1, 2 );




// Rent meta

function rent_the_movies() {
    add_meta_box(
        'rent_metaid',       
        'Rent Link',                 
        'rent_meta_callback', 
        'entertainment',                 
        'normal',
        'high'
    );
 }
 add_action('add_meta_boxes', 'rent_the_movies');

 function rent_meta_callback(){
    global $post;
    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    $get_value = get_post_meta( $post->ID, 'rent_meta_val', true );
    echo '<input type="text" name="rent_name" value="'.$get_value. '" style="width:100%">';
 }

 function wp_save_ment_meta_callback( $post_id, $post ) {
    if ( 'revision' === $post->post_type ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }
    if ( ! isset( $_POST['rent_name'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
        return $post_id;
    }
    $value = $_POST['rent_name'];
    update_post_meta( $post_id,'rent_meta_val', $value );



}
add_action( 'save_post', 'wp_save_ment_meta_callback', 1, 2 );

// rate Text


function rent_thetext_movies() {
    add_meta_box(
        'rent_metatextid',       
        'Rent Text',                 
        'rent_metatext_callback', 
        'entertainment',                 
        'normal',
        'high'
    );
 }
 add_action('add_meta_boxes', 'rent_thetext_movies');
 function rent_metatext_callback(){
    global $post;
    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    $get_value = get_post_meta( $post->ID, 'rent_textmeta_val', true );
    echo '<input type="text" name="renttext_name" value="'.$get_value. '" style="width:100%">';
 }
 function wp_save_metatext_meta_callback( $post_id, $post ) {
    if ( 'revision' === $post->post_type ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }
    if ( ! isset( $_POST['renttext_name'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
        return $post_id;
    }
    $value = $_POST['renttext_name'];
    update_post_meta( $post_id,'rent_textmeta_val', $value );
}
add_action( 'save_post', 'wp_save_metatext_meta_callback', 1, 2 );


//Add Metabox Video
add_action('add_meta_boxes', 'add_upload_file_metaboxes');

function add_upload_file_metaboxes() {
    add_meta_box('swp_file_upload', 'Video Upload', 'swp_file_upload', 'entertainment', 'normal', 'default');
}


function swp_file_upload() {
    global $post;
    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="podcastmeta_noncename" id="podcastmeta_noncename" value="'.
    wp_create_nonce(plugin_basename(__FILE__)).
    '" />';
    global $wpdb;
    $strFile = get_post_meta($post -> ID, $key = 'entertainment_video', true);
    $media_file = get_post_meta($post -> ID, $key = '_wp_attached_file', true);
    if (!empty($media_file)) {
        $strFile = $media_file;
    } ?>

    <div>

        <table>
        <tr valign = "top">
        <td>
        <input type = "text"
            name = "podcast_file"
            id = "podcast_file"
            size = "70"
            value = "<?php echo $strFile; ?>" />
                <input id = "upload_image_button"
            type = "button"
            value = "Upload">
                </td> </tr> </table> <input type = "hidden"
            name = "img_txt_id"
            id = "img_txt_id"
            value = "" />
        </div>



         <script type = "text/javascript">

        // Uploading files
        var file_frame;
    jQuery('#upload_image_button').on('click', function(podcast) {

        podcast.preventDefault();

        // If the media frame already exists, reopen it.
        if (file_frame) {
            file_frame.open();
            return;
        }

        // Create the media frame.
        file_frame = wp.media.frames.file_frame = wp.media({
            title: jQuery(this).data('uploader_title'),
            button: {
                text: jQuery(this).data('uploader_button_text'),
            },
            multiple: false // Set to true to allow multiple files to be selected
        });

        file_frame.on('select', function(){
            attachment = file_frame.state().get('selection').first().toJSON();

            var url = attachment.url;

            var field = document.getElementById("podcast_file");

            field.value = url; //set which variable you want the field to have
        });

        // Finally, open the modal
        file_frame.open();
    });

    </script>   
        
        
        
          <?php
    function admin_scripts() {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }

    function admin_styles() {
        wp_enqueue_style('thickbox');
    }
    add_action('admin_enqueue_scripts', 'admin_scripts');
    add_action('admin_enqueue_styles', 'admin_styles');
}


//Saving the file
function save_podcasts_meta($post_id, $post) {
  
    if (!wp_verify_nonce($_POST['podcastmeta_noncename'], plugin_basename(__FILE__))) {
        return $post -> ID;
    }
    if (!current_user_can('edit_post', $post -> ID))
        return $post -> ID;
    $podcasts_meta['entertainment_video'] = $_POST['podcast_file'];


    foreach($podcasts_meta as $key => $value) {
        if ($post -> post_type == 'revision') return;
        $value = implode(',', (array) $value);
        if (get_post_meta($post -> ID, $key, FALSE)) { // If the custom field already has a value it will update
            update_post_meta($post -> ID, $key, $value);
        } else { // If the custom field doesn't have a value it will add
            add_post_meta($post -> ID, $key, $value);
        }
        if (!$value) delete_post_meta($post -> ID, $key); // Delete if blank value
    }
}
add_action('save_post', 'save_podcasts_meta', 1, 2); // save the custom fields