<?php



if(!function_exists('traveland_reviw_custompost_type')){
    function traveland_reviw_custompost_type() {
        register_post_type( 'wp_traveland_review',
        array(
            'labels' => array(
                'name' => __( 'Traveland Post Review' ),
                'singular_name' => __( 'wp_traveland_postreview' ),
                'all_items'           => __( 'All Traveland Posts Review'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'wp_cf_postreview_url'),
            'show_in_rest' => true,
            'menu_icon'           => ( version_compare( $GLOBALS['wp_version'], '3.8', '>=' ) ) ? 'dashicons-visibility' : '',
            'supports'    => array('title','editor')
        )
	);
    }
}
add_action( 'init', 'traveland_reviw_custompost_type' );

// Add Custom Like meta Box 

function wpt_add_travelandlike_metaboxes() {
	add_meta_box(
		'wp_traveland_review_like_id',
		'Like Post ',
		'wp_traveland_review_like_callback',
		'wp_traveland_review',
		'side',
		'default'
	);
}

add_action( 'add_meta_boxes', 'wpt_add_travelandlike_metaboxes' );

function wp_traveland_review_like_callback (){
    global $post;
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    $get_the_traveland_like_value = get_post_meta( $post->ID, 'wp_traveland_like_value', true );
    $likeCount = '';
    if(!empty($get_the_traveland_like_value)){
        $likeCount = count($get_the_traveland_like_value);
    }else{
        $likeCount = "0";
    }
    // echo '<span>'. $likeCount.'<span>';
    echo '<input type="text" name="wp_traveland_like_value" value="'.$get_the_traveland_like_value. '">';

}
function wp_save_traveland_like_save_value( $post_id, $post ) {
	if ( 'revision' === $post->post_type ) {
        return;
    }
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['wp_traveland_like_value'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
    $like_traveland_value = array();

    if ( get_post_meta( $post_id, 'wp_traveland_like_value', true ) ) {
        $like_traveland_value = get_post_meta( $post_id, 'wp_traveland_like_value', true );
    }
    $like_traveland_value[] = $_POST['wp_traveland_like_value'];
    update_post_meta( $post_id, 'wp_traveland_like_value', $like_traveland_value );



}
add_action( 'save_post', 'wp_save_traveland_like_save_value', 1, 2 );



// Add Custom DisLike meta Box 


function wpt_add_traveland_dislike_metaboxes() {
	add_meta_box(
		'wp_review_traveland_dislike_id',
		'DisLike Post',
		'wp_review_traveland_dislike_callback',
		'wp_traveland_review',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wpt_add_traveland_dislike_metaboxes' );

function wp_review_traveland_dislike_callback (){
    global $post;
	wp_nonce_field( basename( __FILE__ ), 'dislike_nonce' );
    $get_the_traveland_dislike_value = get_post_meta( $post->ID, 'wp_traveland_dislike_value', true );
    $dislikeCount = '';
    if(!empty($get_the_traveland_dislike_value)){
        $dislikeCount = count($get_the_traveland_dislike_value);
    }else{
        $dislikeCount = "0";
    }
    // echo '<span>'. $dislikeCount.'<span>';
	echo '<input type="text" name="wp_traveland_dislike_value" value="' .$get_the_traveland_dislike_value. '" class="wp_al_likepost">';

}
function wp_save_traveland_dislike_save_value( $post_id, $post ) {
    
    if ( 'revision' === $post->post_type ) {
			return;
        }
        
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['wp_traveland_dislike_value'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
    $prev_traveland_dislikes = array();
    if ( get_post_meta( $post_id, 'wp_traveland_dislike_value', true ) ) {
        $prev_traveland_dislikes = get_post_meta( $post_id, 'wp_traveland_dislike_value', true ) ;
    }
    $prev_traveland_dislikes[] = $_POST['wp_traveland_dislike_value'];
    update_post_meta( $post_id, 'wp_traveland_dislike_value', $prev_traveland_dislikes );

}
add_action( 'save_post', 'wp_save_traveland_dislike_save_value', 1, 2 );


// Add Rating meta 

function wpt_add_traveland_rating_metaboxes() {
	add_meta_box(
		'wp_review_traveland_reting_id',
		'Review Rating',
		'wp_review_traveland_rating_callback',
		'wp_traveland_review',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wpt_add_traveland_rating_metaboxes' );

if(!function_exists('wp_review_traveland_rating_callback')){
    function wp_review_traveland_rating_callback(){
        global $post;
	    wp_nonce_field( basename( __FILE__ ), 'rating_nonce' );
        $get_the_traveland_rating_value = get_post_meta( $post->ID, 'wp_traveland_rating_val', true );
        $ratingCount= '';
        if(!empty($get_the_traveland_rating_value)){
            $ratingCount = count($get_the_traveland_rating_value);
        }else{
            $ratingCount = "0";
        }
        echo '<input type="text" name="wp_traveland_rating_val" value="' .$get_the_traveland_rating_value. '">';
        // echo '<span>'. $ratingCount.'<span>';
        
    }

}

function wp_save_traveland_reting_save_value( $post_id, $post ) {
    
    if ( 'revision' === $post->post_type ) {
			return;
        }
        
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['wp_traveland_rating_val'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
    $prev_rating = array();
    if ( get_post_meta( $post_id, 'wp_traveland_rating_val', true ) ) {
        $prev_rating = get_post_meta( $post_id, 'wp_traveland_rating_val', true ) ;
    }
    $prev_rating[] = $_POST['wp_traveland_rating_val'];
    update_post_meta( $post_id, 'wp_traveland_rating_val', $prev_rating );

}
add_action( 'save_post', 'wp_save_traveland_reting_save_value', 1, 2 );


// Get the All Traveland post  


function wp_get_traveland_post_metaboxes() {
	add_meta_box(
		'wp_get_all_traveland_post_id',
		'Traveland Potes',
		'wp_all_travelandpost_callback',
		'wp_traveland_review',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wp_get_traveland_post_metaboxes');


if(!function_exists('wp_all_travelandpost_callback')){
    function wp_all_travelandpost_callback($post){
        $get_travelandpost_custom_select = get_post_meta( $post->ID, 'traveland_post_custom_select', true );
        $traveland_post = ( array(
            'post_type'      => 'traveland',
            'post_status'    => 'publish',
        ) );
        $myposts = get_posts($traveland_post);
        ?>

    <p>
    <input type="hidden" name="meta_box_nonce">
        <label for="custom_select">Select Post:</label>
        <select id="traveland_post_custom_select" name="traveland_post_custom_select">
            <option value="">Selecht an Post</option>
            <?php if($myposts): ?>
            <?php foreach ( $myposts as $get_traveland_post ) : ?>
            <?php
                $selected = null;
                if($get_travelandpost_custom_select == $get_traveland_post->ID){
                    $selected = 'selected';
                }
            ?>
                <option value="<?php echo $get_traveland_post->ID ?>" <?php  echo $selected; ?>><?php echo esc_html( $get_traveland_post->post_title ); ?></option>
            <?php endforeach; ?>
            <?php endif;?>
        </select>
    </p>

    <?php
    }

}



function traveland_post_select_save($post_id, $post )
{


    if ( 'revision' === $post->post_type ) {
        return;
    }
    
if ( ! current_user_can( 'edit_post', $post_id ) ) {
    return $post_id;
}
if ( ! isset( $_POST['traveland_post_custom_select'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
    return $post_id;
}
    // Stop If Unauthorized User
    if( !current_user_can( 'edit_post' ) ) return;
    // Make Sure Data Is Set Then Save      
    if( isset( $_POST['traveland_post_custom_select'] ) )
        update_post_meta( $post_id, 'traveland_post_custom_select', esc_attr( $_POST['traveland_post_custom_select'] ) );
}
add_action( 'save_post', 'traveland_post_select_save' ,10, 2 );


// travel_repost_on_post_val




// travel Show Reports

function wpt_show_travel_review_report() {
	add_meta_box(
		'wp_travel_reportreply_id',
		'Post Reports',
		'wp_travel_reportreply_callback',
		'wp_traveland_review',
		'advanced',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wpt_show_travel_review_report' );

function wp_travel_reportreply_callback ( $post_id) {

    $travel_post_report = get_post_meta($post_id->ID, 'travel_repost_on_post_val', true);
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