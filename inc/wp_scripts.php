<?php
/**
 * Add Styles & scripts Template
 * 
 * @package Certified Theme
 */


function custom_cf_style_scripts() {
	wp_enqueue_style( 'bebas-font', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
	wp_enqueue_style( 'montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap');
	wp_enqueue_style( 'slick_slider.css', get_template_directory_uri(). '/public/css/lib/slick.css');
	wp_enqueue_style( 'slick_slider.theme_css', get_template_directory_uri(). '/public/css/lib/slick-theme.css');
	wp_enqueue_style( 'slick_slider.theme.min.css', get_template_directory_uri(). '/public/css/lib/slick-theme.min.css');
	wp_enqueue_style( 'custom-login-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap.min.css',get_template_directory_uri()."/public/css/lib/bootstrap.min.css");
	wp_enqueue_style( 'home.css',get_template_directory_uri()."/public/css/homestyle.css");
	wp_enqueue_style( 'tagsinput.css',get_template_directory_uri()."/public/css/lib/tagsinput.css");
	wp_enqueue_style( 'font-awesome.min',get_template_directory_uri()."/public/css/lib/fontawesome-free-5.14.0-web/css/all.css");
	wp_style_add_data( 'custom-login-style', 'rtl', 'replace' );

	wp_enqueue_script( 'custom-login-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'));
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/public/js/lib/bootstrap.min.js', array('jquery'));
	wp_enqueue_script( 'popper.min.js', get_template_directory_uri() . '/public/js/lib/popper.min.js', array('jquery'));
	wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/public/js/lib/jquery.min.js', array('jquery'));
	// wp_enqueue_script( 'jquery.min.js','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array('jquery'));
	wp_enqueue_script( 'tagsinput.js', get_template_directory_uri() . '/public/js/lib/tagsinput.js', array('jquery'));
	wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/public/js/lib/slick.min.js', array('jquery'));
	// wp_enqueue_script( 'slick.min.js','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'));
	wp_enqueue_script( 'script.js', get_template_directory_uri() . '/public/js/script.js', array('jquery'));
	// wp_enqueue_script( 'google_name_api','https://maps.google.com/maps/api/js?key=AIzaSyDd7dz6c0tSTTTUxPSoZXiItYkn19R1LXQ', array('jquery'));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	//  Delete the Alert 
	wp_register_script( "wp_alertdel_script", get_template_directory_uri().'/public/js/script_ajax.js', array('jquery') );
   	wp_localize_script( 'wp_alertdel_script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'wp_alertdel_script' );

}
add_action( 'init', 'custom_cf_style_scripts' );


function aw_include_script() {
    if ( ! did_action( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }
    wp_enqueue_script( 'awscript', get_stylesheet_directory_uri() . '/public/js/awscript.js', array('jquery'), null, false );
}
add_action( 'admin_enqueue_scripts', 'aw_include_script' );






function my_user_vote() {

	$current_user_id =  $current_user->ID;

	$check_usermeta = $_POST['get_setecte_data'];
	
	$get_all_user_meta =  get_user_meta($current_user_id, 'user_alerts', true);
	// print_r($get_all_user_meta);
	if(!empty($get_all_user_meta))
	{
		foreach ($get_all_user_meta as $key => $value) {
			if($value == $check_usermeta){
				unset($get_all_user_meta[$key]);
			break;
			}
		}
	}
	update_user_meta( $current_user_id, 'user_alerts', $get_all_user_meta);
    wp_die();
}


add_action("wp_ajax_my_user_vote", "my_user_vote");
add_action("wp_ajax_nopriv_my_user_vote", "my_user_vote");


// Community Post  like and dislike 

function comm_likepost_action() {

	$post_id = $_POST['send_the_post_id'];
	$user_id = $_POST['send_the_current_uid'];
	
		 if( !empty( $post_id ) ) {

			$post_author_id = get_post_field( 'post_author', $post_id );

			$count = get_post_meta( $post_id, "wp_comm_count_like_value".$user_id, true );
			
			$total_count = get_post_meta( $post_id, "wp_comm_count_total_count", true );
			$total_author_thumbs_up = get_user_meta( $post_author_id, "total_author_thumbs_up", true );

			if(empty($count)) {
				update_post_meta( $post_id, "wp_comm_count_like_value".$user_id, 1 );
				$total_count++;
				update_post_meta( $post_id, "wp_comm_count_total_count", $total_count );

				if(empty($total_author_thumbs_up)){
					update_user_meta( $post_author_id, "total_author_thumbs_up", 1 );
				}else{
					$total_author_thumbs_up++;
					update_user_meta( $post_author_id, "total_author_thumbs_up", $total_author_thumbs_up );
				}

			} else{
				delete_post_meta( $post_id,"wp_comm_count_like_value".$user_id);
				$total_count--;
				update_post_meta( $post_id, "wp_comm_count_total_count", $total_count );

				if(empty($total_author_thumbs_up)){}else{
					$total_author_thumbs_up--;
					update_user_meta( $post_author_id, "total_author_thumbs_up", $total_author_thumbs_up );
				}
			}	
		 }
	wp_die();	
}
add_action("wp_ajax_comm_likepost_action", "comm_likepost_action");
add_action("wp_ajax_nopriv_comm_likepost_action", "comm_likepost_action");

// Travland Post  like and dislike 

function trald_likepost_action() {

	$post_id = $_POST['send_the_post_id'];
	$user_id = $_POST['send_the_current_uid'];

	
		 if( !empty( $post_id ) ) {
			$post_author_id = get_post_field( 'post_author', $post_id );
			
			$count = get_post_meta( $post_id, "wp_travland_count_like_value".$user_id, true );
			$total_count = get_post_meta( $post_id, "wp_travland_count_total_count", true );
			$travel_total_author_thumbs_up = get_user_meta( $post_author_id, "travel_total_author_thumbs_up", true );

			if(empty($count)) {
				update_post_meta( $post_id, "wp_travland_count_like_value".$user_id, 1 );
				$total_count++;
				update_post_meta( $post_id, "wp_travland_count_total_count", $total_count );

				if(empty($travel_total_author_thumbs_up)){
					update_user_meta( $post_author_id, "travel_total_author_thumbs_up", 1 );
				}else{
					$travel_total_author_thumbs_up++;
					update_user_meta( $post_author_id, "travel_total_author_thumbs_up", $travel_total_author_thumbs_up );
				}

			} else{
				delete_post_meta( $post_id,"wp_travland_count_like_value".$user_id);
				$total_count--;
				update_post_meta( $post_id, "wp_travland_count_total_count", $total_count );

				if(empty($travel_total_author_thumbs_up)){}else{
					$travel_total_author_thumbs_up--;
					update_user_meta( $post_author_id, "travel_total_author_thumbs_up", $travel_total_author_thumbs_up );
				}
			}
			
		 }
	wp_die();	
}
add_action("wp_ajax_trald_likepost_action", "trald_likepost_action");
add_action("wp_ajax_nopriv_trald_likepost_action", "trald_likepost_action");




// Get the single community review post data 

function comm_review_post_id_action() {





	$get_post_id = $_POST['comm_review_post_id'];
	$the_query  = new WP_Query(
		array(
			'post_type' => 'wp_cfpost_review',
			'p' => $get_post_id,
		)
	);
	if ($the_query->have_posts()) {
        while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$get_the_post_id =  get_the_ID();
			$author_id = get_post_field( 'post_author', $get_the_post_id );
			$get_the_img = get_avatar( get_the_author_meta($author_id) );
			$user_image = get_user_meta( $author_id , 'user_image', true);
            $img_scr = wp_get_attachment_image_src($user_image, 'full');

			$show_the_image = '';
			if($img_scr){
				$show_the_image  ='<img src="'.$img_scr[0].'" class="img-fluid">';
				
			}else{
				$show_the_image = $get_the_img;
			}

			// Creative
			$author_id = get_post_field( 'post_author', $get_the_post_id );
			$author_name = get_the_author_meta('user_nicename', $author_id);
			
			// logedin user name 
			$dir_path = get_template_directory_uri(); 
			$current_user = wp_get_current_user();
			$logedin_user = $current_user->display_name;

			$post_date = get_the_time('F j, Y');


			// get the user image 
			$user_ID = get_current_user_id();
			$avatar_url = get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450));

			$user_image = get_user_meta($user_ID, 'user_image', true);
			$user_image_src = wp_get_attachment_image_src($user_image, 'full');

			$display_user_image = '';
			if($user_image_src){
				$display_user_image = "<img src='".$user_image_src[0]."' class='img-fluid'>";
			}else{
				$display_user_image = "<img src='".$avatar_url."' class='img-fluid'>";
			}

			$get_the_current_post_id =  get_the_ID();

			$data = '
					<div class="col-lg-2 col-md-2 col-sm-12 ">
							<div class="cf_repli_pop_img">'.$show_the_image.'</div>
					</div>
		<div class="col-lg-10 col-md-10 col-sm-12">
			<div class="cf_replies_pop_des">
				<div class="al_redate">
					<span class="al_dtit">
						Reply Date:
					</span>
					<span class="al_cfdate">
						'.$post_date.'
					</span>
				</div>
				<span class="cf_comm_pop_username ml-0">
					'.$author_name.'
				</span>
				<p>' . get_the_content() . '</p>
				<div class="al_revicnlils cf_comm_usermb comm_shareicn comm_reviewshareicn">
					<ul>
						<li class="al_revshare pl-0">
							<a href="javascript:void(0)"  onclick="showpop_shareIcon(this)">
								<img src="'.$dir_path.'/public/image/shareicn.png"
									class="img-fluid">
							</a>
						</li>
						<li class="al_revthumbicn">
							<a href="javascript:void(0)" onclick="showpop_thumbicn(this)">
								<img src="'.$dir_path.'/public/image/thumbicn.png"
									class="img-fluid">
									<input type="hidden" class="comm_like_postval"
                                            value="'.$get_the_current_post_id.'">
                                        <input type="hidden" class="comm_like_currentuser"
                                            value="'.$user_ID.'">
							</a>
						</li>
						<li class="al_revmessageicn">
							<a href="#">
								<img src="'.$dir_path.'/public/image/messageicn.png"
									class="img-fluid">
							</a>
						</li>
						<li class="al_revfollow">
							<a href="#">
								<img src="'.$dir_path.'/public/image/follow.png"
									class="img-fluid">
							</a>
						</li>
						<li class="al_revflagicn">
							<a href="#">
								<img src="'.$dir_path.'/public/image/flagicn.png"
									class="img-fluid">
							</a>
						</li>
					</ul>
					<div class="comm_smedia commreview_smedia">
							<ul class="mb-0">
								<li class="comm_fb"><a
										href="http://www.facebook.com/sharer.php?u='.get_the_permalink().'&t='.get_the_title().'"
										target="blank"><i class="fab fa-facebook-f"></i></a></li>
								<li class="comm_twitter"><a
										href="http://twitter.com/share?url='.get_the_permalink().'&text='.get_the_title().'"
										target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li class="comm_email"><a
										href="mailto:?Subject=certified Share Post&Body=I%20saw%20this%20and%20thought%20of%20you!%20 '.get_the_title().'&text='.get_the_title().'"><i
											class="fas fa-envelope"></i></a></li>
							</ul>
                    </div>
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-12 pr-0">
			<div class="cf_repli_pop_img">
				'.$display_user_image.'
			</div>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-12 pl-0">
			<div class="cf_pop_des">
				<span class="cf_comm_pop_username ml-0">
				   '.$logedin_user.'
				</span>
				<span class="cf_comm_pop_userreply">
					Your Reply
				</span>

			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
			<form method="POST" autocomplete="off">
				<div class="cf_pop_des">
					<div class="form-group">
						<textarea class="form-control" rows="5" name="comm_review_replay" placeholder="Your Reply..." required=""></textarea>
					<input type="hidden" name="community_post_review_id" value="'.$get_the_post_id.'">
					</div>
					<div class="form-group">
						<input type="submit" name="comm_postreview_reply"
							class="form-control pop_submitbtn w-25 ml-auto" value="Reply">
					</div>
				</div>
			</form>
		</div>';
        }
    }
    else {
        $data = '<div id="postdata">'.__('Didnt find anything').'</div>';
	}
	wp_reset_postdata();

	wp_send_json_success( $data );
	 
	wp_die();	
}
add_action("wp_ajax_comm_review_post_id_action", "comm_review_post_id_action");
add_action("wp_ajax_nopriv_comm_review_post_id_action", "comm_review_post_id_action");






// community post Following

function comm_user_following() {
	$post_author_uid = $_POST['post_author_uid'];
	$curent_login_uid = $_POST['curent_login_uid'];




    // user  followers
	$comm_user_followers = get_user_meta( $post_author_uid , "comm_user_followers", true );

	if(!empty($comm_user_followers)){
		$remKey = array_search($curent_login_uid, $comm_user_followers);
			if($remKey!==false){
				unset($comm_user_followers[$remKey]);
				update_user_meta($post_author_uid ,'comm_user_followers', $comm_user_followers);
			}else{
				$user_followers[]= $curent_login_uid;
				update_user_meta($post_author_uid ,'comm_user_followers', $comm_user_followers);
			}
	}
	else{
		$comm_user_followers = array($curent_login_uid);
		update_user_meta( $post_author_uid, 'comm_user_followers',$comm_user_followers);
	}


	// user following

	$comm_user_following = get_user_meta( $curent_login_uid , "comm_user_following", true );

	if(!empty($comm_user_following)){
		$remKey = array_search($post_author_uid, $comm_user_following);
			if($remKey!==false){
				unset($comm_user_following[$remKey]);
				update_user_meta($curent_login_uid ,'comm_user_following', $comm_user_following);
			}else{
				$comm_user_following[]= $curent_login_uid;
				update_user_meta( $curent_login_uid, 'user_followers',$comm_user_following);
			} 
	}
	else{
		$comm_user_following = array($post_author_uid);
		update_user_meta($curent_login_uid, 'comm_user_following',$comm_user_following);
	}
	wp_die();
}

add_action("wp_ajax_comm_user_following", "comm_user_following");
add_action("wp_ajax_nopriv_comm_user_following", "comm_user_following");

// community post Following End




// Travel post Following



function lravel_user_following() {
	$post_author_uid = $_POST['post_author_uid'];
	$curent_login_uid = $_POST['curent_login_uid'];

    // user  followers
	$travel_user_followers = get_user_meta( $post_author_uid , "travel_user_followers", true );


	

	if(!empty($travel_user_followers)){
		$remKey = array_search($curent_login_uid, $travel_user_followers);
		if($remKey!==false){
			unset($travel_user_followers[$remKey]);
			update_user_meta($post_author_uid,'travel_user_followers', $travel_user_followers);
		}else{
			$travel_user_followers[]=$curent_login_uid;
			update_user_meta($post_author_uid,'travel_user_followers', $travel_user_followers);
		}
	}
	else{
		$travel_user_followers = array($curent_login_uid);
		update_user_meta( $post_author_uid, 'travel_user_followers',$travel_user_followers);
	}


	// user following

	$travel_user_following = get_user_meta( $curent_login_uid , "travel_user_following", true );

	if(!empty($travel_user_following)){
		$remKey = array_search($post_author_uid, $travel_user_following);
			if($remKey!==false){
				unset($travel_user_following[$remKey]);
				update_user_meta($curent_login_uid ,'travel_user_following', $travel_user_following);
			}else{
				$travel_user_following[] = $post_author_uid;
				update_user_meta($curent_login_uid ,'travel_user_following', $travel_user_following);
			}
	}
	else{
		$travel_user_following = array($post_author_uid);
		update_user_meta($curent_login_uid, 'travel_user_following',$travel_user_following);
	}
	wp_die();
}

add_action("wp_ajax_travel_user_following", "lravel_user_following");
add_action("wp_ajax_nopriv_travel_user_following", "lravel_user_following");



// Community delete post 

function community_delete_post_by_user() {

	$comm_delete_post_id = $_POST['comm_delete_post_id'];
	if(!empty($comm_delete_post_id)){
		wp_delete_post($comm_delete_post_id );
	}
	wp_die();
}

add_action("wp_ajax_comm_user_delete_post", "community_delete_post_by_user");
add_action("wp_ajax_nopriv_comm_user_delete_post", "community_delete_post_by_user");

// Get the single community review post data 

function travel_review_post_id_action() {

	$get_post_id = $_POST['travel_review_post_id'];
	$the_query  = new WP_Query(
		array(
			'post_type' => 'wp_traveland_review',
			'p' => $get_post_id,
		)
	);
	if ($the_query->have_posts()) {
        while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$the_post_id =  get_the_ID();
			$author_id = get_post_field( 'post_author', $post_id );
			$get_the_img = get_avatar( get_the_author_meta($author_id) );

			$user_image = get_user_meta( $author_id , 'user_image', true);
			$img_scr = wp_get_attachment_image_src($user_image, 'full');

			$show_the_image = '';
			if($img_scr){
				$show_the_image  ='<img src="'.$img_scr[0].'" class="img-fluid">';
			
			}else{
				$show_the_image = $get_the_img;
			}

			// Creative
			$author_id = get_post_field( 'post_author', $post_id );
			$author_name = get_the_author_meta('user_nicename', $author_id);
			
			// logedin user name 
			$dir_path = get_template_directory_uri(); 
			$current_user = wp_get_current_user();
			$logedin_user = $current_user->display_name;

			$post_date = get_the_time('F j, Y');


			// get the user image 
			$user_ID = get_current_user_id();
			$avatar_url = get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450));

			$user_image = get_user_meta($user_ID, 'user_image', true);
			$user_image_src = wp_get_attachment_image_src($user_image, 'full');

			$display_user_image = '';
			if($user_image_src){
				$display_user_image = "<img src='".$user_image_src[0]."' class='img-fluid'>";
			}else{
				$display_user_image = "<img src='".$avatar_url."' class='img-fluid'>";
			}

			$get_the_current_post_id =  get_the_ID();

			$data = '
					<div class="col-lg-2 col-md-2 col-sm-12 ">
							<div class="cf_repli_pop_img">'.$show_the_image.'</div>
					</div>
		<div class="col-lg-10 col-md-10 col-sm-12">
			<div class="cf_replies_pop_des">
				<div class="al_redate">
					<span class="al_dtit">
						Reply Date:
					</span>
					<span class="al_cfdate">
						'.$post_date.'
					</span>
				</div>
				<span class="cf_comm_pop_username ml-0">
					'.$author_name.'
				</span>
				<p>' . get_the_content() . '</p>
				<div class="al_revicnlils cf_comm_usermb comm_shareicn comm_reviewshareicn">
					<ul>
						<li class="al_revshare pl-0">
							<a href="javascript:void(0)"  onclick="showpop_shareIcon(this)">
								<img src="'.$dir_path.'/public/image/shareicn.png"
									class="img-fluid">
							</a>
						</li>
						<li class="al_revthumbicn">
							<a href="javascript:void(0)" onclick="travel_showpop_thumbicn(this)">
								<img src="'.$dir_path.'/public/image/thumbicn.png"
									class="img-fluid">
									<input type="hidden" class="trald_like_postval"
                                            value="'.$get_the_current_post_id.'">
                                        <input type="hidden" class="trald_like_cuser"
                                            value="'.$user_ID.'">
							</a>
						</li>
						<li class="al_revmessageicn">
							<a href="#">
								<img src="'.$dir_path.'/public/image/messageicn.png"
									class="img-fluid">
							</a>
						</li>
						<li class="al_revfollow">
							<a href="#">
								<img src="'.$dir_path.'/public/image/follow.png"
									class="img-fluid">
							</a>
						</li>
						<li class="al_revflagicn">
							<a href="#">
								<img src="'.$dir_path.'/public/image/flagicn.png"
									class="img-fluid">
							</a>
						</li>
					</ul>
					<div class="comm_smedia commreview_smedia">
							<ul class="mb-0">
								<li class="comm_fb"><a
										href="http://www.facebook.com/sharer.php?u='.get_the_permalink().'&t='.get_the_title().'"
										target="blank"><i class="fab fa-facebook-f"></i></a></li>
								<li class="comm_twitter"><a
										href="http://twitter.com/share?url='.get_the_permalink().'&text='.get_the_title().'"
										target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li class="comm_email"><a
										href="mailto:?Subject=certified Share Post&Body=I%20saw%20this%20and%20thought%20of%20you!%20 '.get_the_title().'&text='.get_the_title().'"><i
											class="fas fa-envelope"></i></a></li>
							</ul>
                    </div>
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-12 pr-0">
			<div class="cf_repli_pop_img">
				'.$display_user_image.'
			</div>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-12 pl-0">
			<div class="cf_pop_des">
				<span class="cf_comm_pop_username ml-0">
				   '.$logedin_user.'
				</span>
				<span class="cf_comm_pop_userreply">
					Your Reply
				</span>

			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
			<form method="POST" autocomplete="off">
				<div class="cf_pop_des">
					<div class="form-group">
						<textarea class="form-control" rows="5" name="travel_review_replay" placeholder="Your Reply..." required=""></textarea>
					<input type="hidden" name="travel_post_review_id" value="'.$the_post_id.'">
					</div>
					<div class="form-group">
						<input type="submit" name="comm_postreview_reply"
							class="form-control pop_submitbtn w-25 ml-auto" value="Reply">
					</div>
				</div>
			</form>
		</div>';
        }
    }
    else {
        $data = '<div id="postdata">'.__('Didnt find anything').'</div>';
	}
	wp_reset_postdata();

	wp_send_json_success( $data );
	 
	wp_die();	
}
add_action("wp_ajax_travel_review_post_id_action", "travel_review_post_id_action");
add_action("wp_ajax_nopriv_travel_review_post_id_action", "travel_review_post_id_action");




function user_followers_callback(){

	$userprofile_id = $_POST['userprofile_id'];
	$current_userid = get_current_user_id();
	
	 // user  followers
	 $user_followers = get_user_meta( $userprofile_id , "user_followers", true );
	 $remKey = array_search($current_userid, $user_followers);
	 if(!empty($user_followers)){
		 $remKey = array_search($current_userid, $user_followers);
		 if($remKey!==false){
			unset($user_followers[$remKey]);
			update_user_meta($userprofile_id,'user_followers', $user_followers);
		 }else{
			 $user_followers[]= $current_userid;
			 update_user_meta( $userprofile_id, 'user_followers',$user_followers);
		 }
	 }
	 else{
		 $user_followers = array($current_userid);
		 update_user_meta( $userprofile_id, 'user_followers',$user_followers);
	 }



	 // user following

	$user_following = get_user_meta( $current_userid , "user_following", true );

	if(!empty($user_following)){
		$remKey = array_search($userprofile_id, $user_following);
		if($remKey!==false){
			unset($user_following[$remKey]);
			update_user_meta($current_userid ,'user_following', $user_following);
		}else{
			$user_following[] = $userprofile_id;
			update_user_meta( $current_userid, 'user_following',$user_following);
		}
	}
	else{
		$user_following = array($userprofile_id);
		update_user_meta($current_userid, 'user_following',$user_following);
	}
	print_r($user_followers);
	wp_die();	
}

add_action("wp_ajax_profile_followers_action", "user_followers_callback");
add_action("wp_ajax_nopriv_profile_followers_action", "user_followers_callback");



// Get the User followres

function get_all_user_followres(){
	$current_user_id = $_POST['current_user_id'];
	$user_followers_id = get_user_meta( $current_user_id,"user_followers", true );
	// print_r($user_followers_id);

    if($user_followers_id){
		
		foreach($user_followers_id as $user_followers_sid){
			
			$user_image = get_user_meta($user_followers_sid, 'user_image', true);
			$user_image_src = wp_get_attachment_image_src($user_image, 'full');
			$avatar_url = get_avatar_url($user_followers_sid, array('size' => 450));

			$followers_user_image = '';
			if($user_image_src){
				$followers_user_image = "<img src='".$user_image_src[0]."' class='img-fluid'>";
			}else{
				$followers_user_image = "<img src='".$avatar_url."' class='img-fluid'>";
			}
			$user_displayname = get_user_by( 'id', $user_followers_sid )->display_name;
			
			$data .= '<div class="row no-gutters mb-3">
					<div class="col-lg-2">
						<div class="follower_user_image">
							'.$followers_user_image.'
						</div>
					</div>
					<div class="col-lg-5 my-auto">
						<div class="follower_user_name">
							<h6>'.$user_displayname.'</h6>
						</div>
					</div>
					<div class="col-lg-5 my-auto text-right">
						<div class="follower_remove_btn">
							<div class="cf_user_savebtn">
								<ul>
									<li>
										<a href="javascript:void(0);" id="'.$user_followers_sid.'" class="btn_active user_savebtn" onclick="remove_followers(this)" name="save_usermet">Remove</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
			</div>
			';
		}	
	}else{
		$data .='<h5 class="user_follower_tit">No Followers</h5>';
	}
	wp_send_json_success( $data );
	wp_die();
	
}

add_action("wp_ajax_get_user_follower_action", "get_all_user_followres");
add_action("wp_ajax_nopriv_get_user_follower_action", "get_all_user_followres");



// Remove the user follower 

function Remove_user_follower(){
	$remove_user_id = $_POST['remove_user_id'];
	$current_userid = get_current_user_id();


	// user  followers
	$user_followers = get_user_meta($current_userid, "user_followers", true );
	$remKey = array_search($remove_user_id, $user_followers);
	if(!empty($user_followers)){
		$remKey = array_search($remove_user_id, $user_followers);
		if($remKey!==false){
		   unset($user_followers[$remKey]);
		   update_user_meta($current_userid,'user_followers', $user_followers);
		}
	}
	wp_send_json_success( $remove_user_id);
	wp_die();

}
add_action("wp_ajax_remove_user_followers_action", "Remove_user_follower");
add_action("wp_ajax_nopriv_remove_user_followers_action", "Remove_user_follower");



// Show the Following on user profile

function get_all_user_following(){

	$current_user_id = $_POST['current_user_id'];
	$user_following = get_user_meta( $current_user_id ,"user_following", true );

	if($user_following){
		
		foreach($user_following as $user_following_sid){
			
			$user_image = get_user_meta($user_following_sid, 'user_image', true);
			$user_image_src = wp_get_attachment_image_src($user_image, 'full');
			$avatar_url = get_avatar_url($user_following_sid, array('size' => 450));

			$followers_user_image = '';
			if($user_image_src){
				$followers_user_image = "<img src='".$user_image_src[0]."' class='img-fluid'>";
			}else{
				$followers_user_image = "<img src='".$avatar_url."' class='img-fluid'>";
			}
			$user_displayname = get_user_by( 'id', $user_following_sid )->display_name;
			
			$data .= '<div class="row no-gutters mb-3">
					<div class="col-lg-2">
						<div class="follower_user_image">
							'.$followers_user_image.'
						</div>
					</div>
					<div class="col-lg-5 my-auto">
						<div class="follower_user_name">
							<h6>'.$user_displayname.'</h6>
						</div>
					</div>
					<div class="col-lg-5 my-auto text-right">
						<div class="follower_remove_btn">
							<div class="cf_user_savebtn">
								<ul>
									<li>
										<a href="javascript:void(0);" id="'.$user_following_sid.'" class="btn_active user_savebtn" onclick="user_Unfollow(this)" name="save_usermet">Unfollow</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
			</div>
			';
		}	
	}else{
		$data .='<h5 class="user_follower_tit">No Following</h5>';
	}


	wp_send_json_success( $data );
	wp_die();

}
add_action("wp_ajax_get_user_following_action", "get_all_user_following");
add_action("wp_ajax_nopriv_get_user_following_action", "get_all_user_following");


// unfollow the user follower 

function wp_cf_unfollow_user(){

	$unfollow_user_id = $_POST['unfollow_user_id'];
	$current_userid = get_current_user_id();

	$user_following = get_user_meta( $current_userid , "user_following", true );

	if(!empty($user_following)){
		$remKey = array_search($unfollow_user_id, $user_following);
		if($remKey!==false){
			unset($user_following[$remKey]);
			update_user_meta($current_userid ,'user_following', $user_following);
		}
	}

}

add_action("wp_ajax_unfollow_wp_user_action", "wp_cf_unfollow_user");
add_action("wp_ajax_nopriv_unfollow_wp_user_action", "wp_cf_unfollow_user");


function send_verify_email_fun(){
	$verify_email = $_POST['verify_email'];
	$get_the_ramnum = $_POST['get_the_ramnum'];
	$user_id    = get_current_user_id();
	$userUrl    = get_user_meta( $user_id, 'email_verify_number', true ); 
	update_user_meta($user_id, 'email_verify_number', $get_the_ramnum);
	$subject = "Your Email verify Code ";
	$message = "Please Save This Code  ".$get_the_ramnum; 
	wp_mail($verify_email, $subject, $message);
	wp_die();
}

add_action("wp_ajax_send_verify_email_action", "send_verify_email_fun");
add_action("wp_ajax_nopriv_send_verify_email_action", "send_verify_email_fun");

function check_verify_emailcode_fun(){
	$chk_pass_value = $_POST['chk_pass_value'];
	$email_vcode = get_user_meta(get_current_user_id(), 'email_verify_number', true ); 
	$error_message = '';

	if( $chk_pass_value == $email_vcode){  
		$error_message ="WoW"; 
		}else{
			$error_message ="Not Match";
		}
		wp_send_json( $error_message );
		wp_die();
}

add_action("wp_ajax_verify_email_code_action", "check_verify_emailcode_fun");
add_action("wp_ajax_nopriv_verify_email_code_action", "check_verify_emailcode_fun");


// Business Post meta 

function add_business_posttype_meta_function () {
	$business_cat_name = $_POST['business_cat_name'];
	$business_phn_number = $_POST['business_phn_number'];
	$business_website = $_POST['business_website'];
	$business_adress = $_POST['business_adress'];

	$post_type="wp_business_listing";
	$bus_add_post = array(
		'post_title'    => $business_cat_name,
		'post_status'   => 'publish',     
		'post_type'     => $post_type
	  );
	$insert_post = wp_insert_post($bus_add_post);
	
	// add_post_meta($insert_post, 'wp_business_cat_name', $business_cat_name, true);
	update_post_meta($insert_post, 'wp_business_phome_number', $business_phn_number, true);
	update_post_meta($insert_post, 'wp_business_website', $business_website, true);
	update_post_meta($insert_post, 'wp_business_address', $business_adress, true);
	$user_id    = get_current_user_id();
	$userUrl    = update_user_meta( $user_id, 'wp_business_post_id', $insert_post ); 
	$response = array( 'messages' => 'success' );
	wp_send_json($response);
	wp_die();

}
add_action("wp_ajax_add_business_cpt_meta", "add_business_posttype_meta_function");
add_action("wp_ajax_nopriv_add_business_cpt_meta", "add_business_posttype_meta_function");



// Community Lode More Post Data




function more_post_ajax(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    // header("Content-Type: text/html");

    $args = array(
        // 'suppress_filters' => true,
        'post_type' => 'community',
        'posts_per_page' => $ppp,
        'paged'    => $page,
    );

    $loop = new WP_Query($args);



    $out = '';
    if ($loop-> have_posts()) :  while ($loop-> have_posts()) : $loop-> the_post();

	$get_the_image_link = get_the_post_thumbnail_url(get_the_ID() , 'full');
	$getprev_review = get_post_meta(get_the_ID(), 'community_post_reviews', true);
	if($getprev_review){
		$get_the_review = array(  
			'post_type' => 'wp_cfpost_review',
			'post_status' => 'publish',
			'post__in' => $getprev_review,
		);
		$get_review_in_loop = new WP_Query( $get_the_review);
		$post_review_count =  $get_review_in_loop->post_count;

	}else{
		$post_review_count = 0;
	}


        $out .= '<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
		<div class="cf_tev_join_content">';
		if(!empty($get_the_image_link)){
			
			$out .= '<div class="tap_in_img">
					<a href="'.get_the_permalink().'">
						<img src="'.$get_the_image_link.'" class="img-fluid">
					</a>
				</div>';
		}else{
			$out .= '<div class="tap_in_img">
				<a href="'.get_the_permalink().'">
					<img src="'.get_template_directory_uri().'/public/image/fimg.png" class="img-fluid">
				</a>
			</div>';
		}
		$out .= '<a href="'.get_the_permalink().'">
			'.wp_trim_words(get_the_title(),4).'
		</a>
		<h3>Discussed '.$post_review_count.' Time</h3>
		</div>
	</div>';
	
    endwhile;
    endif;
	$isLast = false;
	if ( $page == $loop->max_num_pages ) {
		// You are on the last page
		$isLast = true;
	}
    wp_reset_postdata();
	$data = array(
		'responseData' => $out, 'islast' => $isLast,
	);
	wp_send_json($data);
    die();
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');



// Travel On Click  Read more on post


function travel_more_post_ajax(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;


    $args = array(
        'post_type' => 'traveland',
        'posts_per_page' => $ppp,
        'paged'    => $page,
    );

    $loop = new WP_Query($args);



    $out = '';
    if ($loop-> have_posts()) :  while ($loop-> have_posts()) : $loop-> the_post();

	$get_the_image_link = get_the_post_thumbnail_url(get_the_ID(),'full');
	$getprev_review = get_post_meta(get_the_ID(), 'traveland_post_reviews', true);
	if($getprev_review){
		$get_the_review = array(  
			'post_type' => 'wp_traveland_review',
			'post_status' => 'publish',
			'post__in' => $getprev_review,
		);
		$get_review_in_loop = new WP_Query( $get_the_review);
		$post_review_count =  $get_review_in_loop->post_count;

	}else{
		$post_review_count = 0;
	}


        $out .= '<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
		<div class="cf_tev_join_content">';
		if(!empty($get_the_image_link)){
			
			$out .= '<div class="tap_in_img">
					<a href="'.get_the_permalink().'">
						<img src="'.$get_the_image_link.'" class="img-fluid">
					</a>
				</div>';
		}else{
			$out .= '<div class="tap_in_img">
				<a href="'.get_the_permalink().'">
					<img src="'.get_template_directory_uri().'/public/image/fimg.png" class="img-fluid">
				</a>
			</div>';
		}
		$out .= '<a href="'.get_the_permalink().'">
			'.wp_trim_words(get_the_title(),4).'
		</a>
		<h3>Discussed '.$post_review_count.' Time</h3>
		</div>
	</div>';
	
    endwhile;
    endif;
	$isLast = false;
	if ( $page == $loop->max_num_pages ) {
		$isLast = true;
	}
    wp_reset_postdata();
	$data = array(
		'responseData' => $out, 'islast' => $isLast,
	);
	wp_send_json($data);
    die();
}

add_action('wp_ajax_nopriv_travel_more_post_ajax', 'travel_more_post_ajax');
add_action('wp_ajax_travel_more_post_ajax', 'travel_more_post_ajax');