<?php
if(!function_exists('reviw_custompost_type')){
    function reviw_custompost_type() {
        register_post_type( 'wp_cfpost_review',
        array(
            'labels' => array(
                'name' => __( 'Community Post Review' ),
                'singular_name' => __( 'wp_postreview' ),
                'all_items'           => __( 'All Posts Review'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'wp_cf_postreview_url'),
            'show_in_rest' => true,
            'menu_icon'           => ( version_compare( $GLOBALS['wp_version'], '3.8', '>=' ) ) ? 'dashicons-visibility' : '',
            'supports'    => array('title','editor', 'thumbnail','excerpt',)
        )
	);
    }
}
add_action( 'init', 'reviw_custompost_type' );


if(!function_exists('show_all_postreview')){
    function show_all_postreview(){
        ob_start();
        ?>
        <?php
        $args = array(  
            'post_type' => 'wp_cfpost_review',
            'post_status' => 'publish',
            'posts_per_page' => 3, 
            'meta_query' => array(
                array(
                    'key' => 'comm_review_post_select', 
                    'compare' => 'EXISTS'   
                )
            ),
        );
    $loop = new WP_Query( $args );
    
    if ( $loop->have_posts() ) : 
        while ( $loop->have_posts() ) : $loop->the_post();

        $review_on_post_id = get_post_meta( get_the_ID(), 'comm_review_post_select', true );
        $parent_of_review_img = get_the_post_thumbnail_url($review_on_post_id,'post-thumbnail');


      
        ?>
          <div class="al_redate">
              <span class="al_dtit">
                Post Date:
              </span>
              <span class="al_cfdate">
                <?php $post_date= get_the_time('F j, Y g:i a');
                             echo date_i18n(get_option( 'date_format' ),strtotime($post_date));?>
              </span>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="al_reviewimg cf_evirepimg">
                  <?php
                   if(!empty($parent_of_review_img)){
                    $home_sigle_url = null ;
                    if(is_user_logged_in()){
                        $home_sigle_url =  get_the_permalink($review_on_post_id);;
                       }else{
                        $home_sigle_url = "javascript:void(0)";
                       }

                    ?> 
                       <a href="<?= $home_sigle_url;?>">
                            <img src="<?php echo $parent_of_review_img;?>" alt="missing image" class="img-fluid">
                       </a>
                    <?php
                    }else{
                        ?>
                        <a href="<?= $home_sigle_url;?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/reviewimg.png" class="img-fluid">
                        </a>
                    <?php
                    }
                  ?>

                  </div>
                  <div class="al_revicnlils">
                    <ul>
                        <li class="al_revshare">
                            <a href="#" class="d-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/shareicn.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revthumbicn">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/thumbicn.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revmessageicn">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/messageicn.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revfollow">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/follow.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revflagicn">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/flagicn.png" class="img-fluid"> 
                            </a>
                        </li>

                    </ul>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="al_revidetails">
                        <p><?php echo wp_trim_words( get_the_content(),12);?>
                        </p>
                        <?php
                        if (is_user_logged_in() ) {

                            ?>
                                <a href="<?php echo get_the_permalink($review_on_post_id);?>" class="al_cfrmpost">Read More...</a>
                            <?php
                        }else{
                            $login_url = site_url().'/login';
                            ?>
                                <a href="<?= $login_url ;?>" class="al_cfrmpost">Please Login...</a>
                            <?php
                        }
                        
                        ?>
                  </div>

              </div>

          </div>
        <?php
    endwhile;
    endif;    
    wp_reset_postdata();    

    $htmlRetu = ob_get_contents();
    ob_end_clean();
    return $htmlRetu;
    }

}

add_shortcode('al_review_shortcode', 'show_all_postreview');








// Add Custom Like meta Box 

function wpt_add_like_metaboxes() {
	add_meta_box(
		'wp_review_like_id',
		'Like Post ',
		'wp_review_like_callback',
		'wp_cfpost_review',
		'side',
		'default'
	);
}

add_action( 'add_meta_boxes', 'wpt_add_like_metaboxes' );
function wp_review_like_callback() {
	global $post;
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    $get_the_like_value = get_post_meta( $post->ID, 'wp_like_value', true );
    $likeCount = '';
    if(!empty($get_the_like_value)){
        $likeCount = count($get_the_like_value);
    }else{
        $likeCount = "0";
    }
    // echo '<span>'. $likeCount.'<span>';

    
	echo '<input type="text" name="wp_like_value" value="'.$get_the_like_value. '" class="wp_al_likepost">';
}
function wp_save_like_save_value( $post_id, $post ) {
	if ( 'revision' === $post->post_type ) {
        return;
    }
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['wp_like_value'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
    $like_value = array();

    if ( get_post_meta( $post_id, 'wp_like_value', true ) ) {
        $like_value = get_post_meta( $post_id, 'wp_like_value', true );
    }
    $like_value[] = $_POST['wp_like_value'];
    update_post_meta( $post_id, 'wp_like_value', $like_value );



}
add_action( 'save_post', 'wp_save_like_save_value', 1, 2 );


// Add Custom Like meta Box End !



// Add Custom DisLike meta Box 

function wpt_add_dislike_metaboxes() {
	add_meta_box(
		'wp_review_dislike_id',
		'DisLike Post ',
		'wp_review_dislike_callback',
		'wp_cfpost_review',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wpt_add_dislike_metaboxes' );

function wp_review_dislike_callback() {
	global $post;
	wp_nonce_field( basename( __FILE__ ), 'dislike_nonce' );
    $get_the_dislike_value = get_post_meta( $post->ID, 'wp_dislike_value', true );
    $dislikeCount = '';
    if(!empty($get_the_dislike_value)){
        $dislikeCount = count($get_the_dislike_value);
    }else{
        $dislikeCount = "0";
    }
    // echo '<span>'. $dislikeCount.'<span>';
	echo '<input type="text" name="wp_dislike_value" value="' .$get_the_dislike_value. '" class="wp_al_likepost">';
}
function wp_save_dislike_save_value( $post_id, $post ) {
    
    if ( 'revision' === $post->post_type ) {
			return;
        }
        
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['wp_dislike_value'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
    $prev_dislikes = array();
    if ( get_post_meta( $post_id, 'wp_dislike_value', true ) ) {
        $prev_dislikes = get_post_meta( $post_id, 'wp_dislike_value', true ) ;
    }
    $prev_dislikes[] = $_POST['wp_dislike_value'];
    update_post_meta( $post_id, 'wp_dislike_value', $prev_dislikes );

}
add_action( 'save_post', 'wp_save_dislike_save_value', 1, 2 );


// Add Custom DisLike meta Box  End

// Add Custom review meta Box  

// function wpt_add_report_metaboxes() {
// 	add_meta_box(
// 		'wp_review_report_id',
// 		'Review Report',
// 		'wp_review_report_callback',
// 		'wp_cfpost_review',
// 		'side',
// 		'default'
// 	);
// }
// add_action( 'add_meta_boxes', 'wpt_add_report_metaboxes' );

// if(!function_exists('wp_review_report_callback')){
//     function  wp_review_report_callback (){
//         global $post;
// 	    wp_nonce_field( basename( __FILE__ ), 'dislike_nonce' );
//         $get_the_repot_value = get_post_meta( $post->ID, 'wp_report', true );
//         $reportCount= '';
//         if(!empty($get_the_repot_value)){
//             $reportCount = count($get_the_repot_value);
//         }else{
//             $reportCount = "0";
//         }
        

//         // echo $postsCount;


//         // if(!empty($get_the_repot_value)){
//         //     foreach($get_the_repot_value  as $x => $repostval) {
//         //         $repostval;
//         //     }

//         // }
        
//     echo '<input type="text" name="wp_report_value" value="' .$get_the_repot_value. '" class="wp_al_likepost">';
    
//     // echo '<span>'. $reportCount.'<span>';
//     }

// }

// function wp_save_repost_save_value( $post_id, $post ) {
    
//     if ( 'revision' === $post->post_type ) {
// 			return;
//         }
        
// 	if ( ! current_user_can( 'edit_post', $post_id ) ) {
// 		return $post_id;
// 	}
// 	if ( ! isset( $_POST['wp_report_value'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
// 		return $post_id;
//     }
//     $prev_dislikes = array();
//     if ( get_post_meta( $post_id, 'wp_report', true ) ) {
//         $prev_dislikes = get_post_meta( $post_id, 'wp_report', true ) ;
//     }
//     $prev_dislikes[] = $_POST['wp_report_value'];
//     update_post_meta( $post_id, 'wp_report', $prev_dislikes );

// }
// add_action( 'save_post', 'wp_save_repost_save_value', 1, 2 );



// Add Rating meta 

function wpt_add_rating_metaboxes() {
	add_meta_box(
		'wp_review_reting_id',
		'Review Rating',
		'wp_review_rating_callback',
		'wp_cfpost_review',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wpt_add_rating_metaboxes' );


if(!function_exists('wp_review_rating_callback')){
    function wp_review_rating_callback(){
        global $post;
	    wp_nonce_field( basename( __FILE__ ), 'rating_nonce' );
        $get_the_rating_value = get_post_meta( $post->ID, 'wp_report_rating', true );
        $ratingCount= '';
        if(!empty($get_the_rating_value)){
            $ratingCount = count($get_the_rating_value);
        }else{
            $ratingCount = "0";
        }
        echo '<input type="text" name="wp_report_rating" value="' .$get_the_rating_value. '" class="wp_reviewrat">';
        // echo '<span>'. $ratingCount.'<span>';
        
    }

}


function wp_save_reting_save_value( $post_id, $post ) {
    
    if ( 'revision' === $post->post_type ) {
			return;
        }
        
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['wp_report_rating'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
    $prev_rating = array();
    if ( get_post_meta( $post_id, 'wp_report_rating', true ) ) {
        $prev_rating = get_post_meta( $post_id, 'wp_report_rating', true ) ;
    }
    $prev_rating[] = $_POST['wp_report_rating'];
    update_post_meta( $post_id, 'wp_report_rating', $prev_rating );

}
add_action( 'save_post', 'wp_save_reting_save_value', 1, 2 );




// Get the All post 


function wp_get_post_metaboxes() {
	add_meta_box(
		'wp_get_all_post_id',
		'Community Potes',
		'wp_all_comm_callback',
		'wp_cfpost_review',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wp_get_post_metaboxes');

if(!function_exists('wp_all_comm_callback')){
    function wp_all_comm_callback($post){
        $get_comm_review_post_select = get_post_meta( $post->ID, 'comm_review_post_select', true );
        $comm_post = ( array(
            'post_type'      => 'community',
            'post_status'    => 'publish',
        ) );
        $myposts = get_posts($comm_post);
        ?>

    <p>
    <input type="hidden" name="meta_box_nonce">
        <label for="comm_review_post_select">Select Post:</label>
        <select id="comm_review_post_select" name="comm_review_post_select">
            <option value="">Selecht an Post</option>
            <?php if($myposts): ?>

            
            <?php foreach ( $myposts as $get_commpost ) : ?>
            <?php
                $selected = null;
                if($get_comm_review_post_select==$get_commpost->ID){
                    $selected = 'selected';
                }
            ?>
                <option value="<?php echo $get_commpost->ID ?>" <?php  echo $selected; ?>><?php echo esc_html( $get_commpost->post_title ); ?></option>
            <?php endforeach; ?>
            <?php endif;?>
        </select>
    </p>

    <?php
    }

}


function comm_post_select_save( $post_id )
{


    if ( 'revision' === $post->post_type ) {
        return;
    }
    
if ( ! current_user_can( 'edit_post', $post_id ) ) {
    return $post_id;
}
if ( ! isset( $_POST['comm_review_post_select'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
    return $post_id;
}

    // Stop If Unauthorized User
    if( !current_user_can( 'edit_post' ) ) return;

    // Make Sure Data Is Set Then Save      
    if( isset( $_POST['comm_review_post_select'] ) )
        update_post_meta( $post_id, 'comm_review_post_select', esc_attr( $_POST['comm_review_post_select'] ) );
}
add_action( 'save_post', 'comm_post_select_save' ,10, 2 );