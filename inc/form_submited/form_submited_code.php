<?php

/*=====================
community form Submit  Code
=======================*/


function submit_the_form_data(){

// community add the custom post type 
    if(isset($_POST['submitcommpost']) && !empty($_POST['submitcommpost'])){


        $post_tit = $_POST['comunty_ptit'];
        $post_cont = $_POST['comunty_pcontent'];
        // $post_excerpt = $_POST['comunty_pexcerpt'];
        $post_tag = $_POST['comunty_tag'];
        $post_type = 'community';

        $add_post = array(
            'post_title'    => $post_tit,
            'post_content'  => $post_cont,
            // 'post_excerpt'      =>  $post_excerpt,
            'post_status'   => 'publish',
            // 'post_category' => array($_POST['team_tag']),    
            // 'tags_input'  => array($post_tag),      
            'post_type'     => $post_type
            );
            $post_id = wp_insert_post($add_post);

            // wp_set_post_terms($post_id,$post_tag );

            // Get the Hash Tag Value 
            $this_insert = null;
            preg_match_all('/#(\w+)/', $post_cont, $matches);
            $get_the_hash_tag = $matches[1];

            global $wpdb;
            $table_name = $wpdb->prefix . "trending_hash_tags";
            $table_name_relaction = $wpdb->prefix . "trending_tags_relaction";

            if($get_the_hash_tag)
            {
                foreach($get_the_hash_tag as $hash_tag_value){
                $datum = $wpdb->get_results("SELECT * FROM $table_name  WHERE keyword = '$hash_tag_value'");
                    if($wpdb->num_rows > 0) {
                        $counter = $datum[0]->counter;
                        $counter++;
                        $rowid = $datum[0]->id;
                        $this_insert = $rowid;
                        $wpdb->query(" UPDATE $table_name SET counter = $counter WHERE id = '$rowid'");
                        }else{
                        $wpdb->insert( $table_name, array(
                            'keyword' => $hash_tag_value,
                            'counter' => 1,
                        )
                        );
                        $this_insert = $wpdb->insert_id;
                    }
                    // relactionship of table 
                    $wpdb->insert( $table_name_relaction, array(
                        'keyword_id' => $this_insert,
                        'post_id' =>$post_id,
                    ) );

                }

            }

            $tag_arry = explode( "\n", str_replace( "\r", "", $_POST['comunty_tag'] ) );
            wp_set_post_terms( $post_id,$tag_arry,'team_tag',false);

            $uploaddir = wp_upload_dir();
            $file = $_FILES["comunty_image"]["name"];
            $uploadfile = $uploaddir['path'] . '/' . basename( $file );
            move_uploaded_file( $_FILES["comunty_image"]["tmp_name"] , $uploadfile );
            $filename = basename( $uploadfile );
            $wp_filetype = wp_check_filetype(basename($filename), null );
            $attachment = array(
                'post_mime_type' => $wp_filetype['type'],
                'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
                'post_content' => '',
                'post_status' => 'inherit',
                'menu_order' => $_i + 1000
            );
            $attach_id = wp_insert_attachment( $attachment, $uploadfile );
            set_post_thumbnail( $post_id, $attach_id ); 

            $get_link = get_the_permalink($post_id);
            wp_redirect($get_link);
            exit;
    }

// End community add the custom post type 

// community create an alert

$current_user_id = get_current_user_id();

if(isset($_POST['submit_comm_alert']) && !empty($_POST['submit_comm_alert'])){
        $comm_alert_destails =     sanitize_text_field($_POST['comm_alert_detsls']);
        
        $comm_user_meta = get_user_meta($current_user_id, 'community_crt_alert', true);
        if(!empty( $comm_user_meta)){
            $comm_user_meta[] = $comm_alert_destails;
            update_user_meta($current_user_id,'community_crt_alert',$comm_user_meta);
        }else{
        update_user_meta($current_user_id,'community_crt_alert',array($comm_alert_destails));
        }

        $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        wp_redirect($this_page_link);
    }

// End community create an alert


/*=====================
community form Submit  Code
=======================*/

/*=====================
Traveland form Submit  Code
=======================*/

// Traveland add the custom post type 

if(isset($_POST['submit_trv_post'])){
    
    $travel_destination =     sanitize_text_field($_POST['travel_destination']);
    $travel_the_spot    =     sanitize_text_field($_POST['travel_the_spot']);
    $travel_post_tit    =     sanitize_text_field($_POST['travel_post_tit']);
    $travel_post_detsils =    sanitize_text_field($_POST['travel_post_detsils']);
    $trv_experience      =    sanitize_text_field($_POST['trv_experience']);
    $trv_accomodatio    =     sanitize_text_field($_POST['accomodationname']);
    $travel_exp_community =   sanitize_text_field($_POST['travel_exp_community']);
    $travel_image        =   $_POST['travel_image'];

    $post_type="traveland";
    $add_post = array(
      'post_title'    => $travel_post_tit,
      'post_content'  => $travel_post_detsils,
      'post_excerpt'      =>  $travel_exp_community,
      'post_status'   => 'publish',     
      'post_type'     => $post_type
    );
    $insert_post = wp_insert_post($add_post);

    // Get the Hash Tag Value 
    $this_insert = null;
    preg_match_all('/#(\w+)/', $travel_post_detsils, $matches);
    $get_the_hash_tag = $matches[1];

    global $wpdb;
    $table_name = $wpdb->prefix . "trending_hash_tags";
    $table_name_relaction = $wpdb->prefix . "trending_tags_relaction";

    if($get_the_hash_tag)
    {
        foreach($get_the_hash_tag as $hash_tag_value){
        $datum = $wpdb->get_results("SELECT * FROM $table_name  WHERE keyword = '$hash_tag_value'");
            if($wpdb->num_rows > 0) {
                $counter = $datum[0]->counter;
                $counter++;
                $rowid = $datum[0]->id;
                $this_insert = $rowid;
                $wpdb->query(" UPDATE $table_name SET counter = $counter WHERE id = '$rowid'");
                }else{
                $wpdb->insert( $table_name, array(
                    'keyword' => $hash_tag_value,
                    'counter' => 1,
                )
                );
                $this_insert = $wpdb->insert_id;
            }
            // relactionship of table 
            $wpdb->insert( $table_name_relaction, array(
                'keyword_id' => $this_insert,
                'post_id' =>$insert_post,
            ) );

        }

    }

    


    // End Get the Hash Tag Value 

   
    add_post_meta($insert_post, 'cpt_travel_destination_metaval', $travel_destination, true);
    add_post_meta($insert_post, 'cpt_travel_thespot_metaval',     $travel_the_spot , true);
    add_post_meta($insert_post, 'cpt_travel_experience_metaval',  $trv_experience, true);
    add_post_meta($insert_post, 'cpt_travel_accomodation_metaval', $trv_accomodatio, true);

  // add Image

    $uploaddir = wp_upload_dir();
    $file = $_FILES["travel_image"]["name"];
    $uploadfile = $uploaddir['path'] . '/' . basename( $file );
    move_uploaded_file( $_FILES["travel_image"]["tmp_name"] , $uploadfile );
    $filename = basename( $uploadfile );
    $wp_filetype = wp_check_filetype(basename($filename), null );
    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
        'post_content' => '',
        'post_status' => 'inherit',
        'menu_order' => $_i + 1000
    );
    $attach_id = wp_insert_attachment( $attachment, $uploadfile );
    set_post_thumbnail( $insert_post , $attach_id ); 

    $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    wp_redirect($this_page_link);

  }
// end Traveland add the custom post type 

//  Traveland create an alert


if(isset($_POST['trald_alert_detsls']) && !empty($_POST['trald_alert_detsls'])){
    $traveld_alert_destails =     sanitize_text_field($_POST['trald_alert_detsls']);
    
    $traveld_user_meta = get_user_meta($current_user_id, 'traveland_crt_alert', true);
    if(!empty( $traveld_user_meta)){
        $traveld_user_meta[] = $traveld_alert_destails;
        update_user_meta($current_user_id,'traveland_crt_alert',$traveld_user_meta);
    }else{
    update_user_meta($current_user_id,'traveland_crt_alert',array($traveld_alert_destails));
    }
    $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    wp_redirect($this_page_link);
}

// End Traveland create an alert

/*=====================
End Traveland form Submit  Code
=======================*/


/*=====================
User change the password  form Submit  Code
=======================*/
global $pass_success;
global $pass_error;
   
    if(isset($_POST['user_crr_passwd']) && !empty($_POST['user_crr_passwd'])){

        $current_user_pass =  $_POST['user_crr_passwd'];
        $new_password      =  $_POST['user_newpasswd'];
        $confirm_password  =  $_POST['user_verifiy_password'];

        $user = get_user_by( 'id', $current_user_id  );
       
        if ( $user && wp_check_password( $current_user_pass, $user->data->user_pass, $user->ID ) ) {
            if ( $new_password == $confirm_password ) {
                        $user = wp_get_current_user();
                        // Change password.
                        wp_set_password( $new_password, $current_user_id );
                        // Log-in again.
                        wp_set_auth_cookie($user->ID);
                        wp_set_current_user($user->ID);
                        do_action('wp_login', $user->user_login, $user);
                        $pass_success = 'Your new password is changed.';
                    } else {
                        $pass_error =  'Your current password is correct, but the new and confirm passwords do not match.';
                    }
        } else {
            $pass_error =  "current password is not correct";
        }
    
       }


/*=====================
End User change the password  form Submit  Code
=======================*/

/*=====================
 change the user profile   form Submit  Code
=======================*/

if(isset($_POST['save_usermet'])){

    $user_fname =sanitize_text_field( $_POST['first_name'] );
    $user_lname =sanitize_text_field( $_POST['last_name'] );
    $user_gender =sanitize_text_field( $_POST['user_gender'] );
    $user_city_location =sanitize_text_field( $_POST['user_city_location'] );
    $user_love_food =sanitize_text_field( $_POST['user_food_love'] );
    $user_hometown =sanitize_text_field( $_POST['user_hometown'] );
    $user_birthday =sanitize_text_field( $_POST['user_birthday'] );

     // if(get_user_meta($current_user_id, 'first_name', true)) {
         update_user_meta($current_user_id,'first_name',$user_fname);
     // }
     // if(get_user_meta($current_user_id, 'last_name', true)) {
         update_user_meta($current_user_id,'last_name',$user_lname);
     // }
     // if(get_user_meta($current_user_id, 'user_gender', true)) {
         update_user_meta($current_user_id,'user_gender',$user_gender);
     // } 
     // if(get_user_meta($current_user_id, 'user_city_location', true)) {
         update_user_meta($current_user_id,'user_city_location',$user_city_location);
     // }
     // if(get_user_meta($current_user_id, 'user_love_food', true)) {
         update_user_meta($current_user_id,'user_love_food',$user_love_food);
     // } 
         update_user_meta($current_user_id,'user_hometown',$user_hometown);
  
         update_user_meta($current_user_id,'user_birthday',$user_birthday);
    
     
     if(isset($_FILES["user_image"]["name"])){
         if(!empty($_FILES["user_image"]["name"])){
             $uploaddir = wp_upload_dir();
             $file = $_FILES["user_image"]["name"];
             $uploadfile = $uploaddir['path'] . '/' . basename( $file );
             move_uploaded_file( $_FILES["user_image"]["tmp_name"] , $uploadfile );
             $filename = basename( $uploadfile );
             $wp_filetype = wp_check_filetype(basename($filename), null );
             $attachment = array(
                 'post_mime_type' => $wp_filetype['type'],
                 'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
                 'post_content' => '',
                 'post_status' => 'inherit',
                 'menu_order' => $_i + 1000
             );
             $attach_id = wp_insert_attachment( $attachment, $uploadfile );
             set_post_thumbnail( $current_user_id, $attach_id ); 

             update_user_meta($current_user_id,'user_image',$attach_id);
         }
     } 
    //  user Profile background

     if(isset($_FILES["user_profile_bd"]["name"])){
         if(!empty($_FILES["user_profile_bd"]["name"])){
             $uploaddir = wp_upload_dir();
             $file = $_FILES["user_profile_bd"]["name"];
             $uploadfile = $uploaddir['path'] . '/' . basename( $file );
             move_uploaded_file( $_FILES["user_profile_bd"]["tmp_name"] , $uploadfile );
             $filename = basename( $uploadfile );
             $wp_filetype = wp_check_filetype(basename($filename), null );
             $attachment = array(
                 'post_mime_type' => $wp_filetype['type'],
                 'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
                 'post_content' => '',
                 'post_status' => 'inherit',
                 'menu_order' => $_i + 1000
             );
             $attach_id = wp_insert_attachment( $attachment, $uploadfile );
             set_post_thumbnail( $current_user_id, $attach_id ); 

             update_user_meta($current_user_id,'user_background_image',$attach_id);
         }
     }

$this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
wp_redirect($this_page_link);
exit();
}
/*=====================
End change the user profile   form Submit  Code
=======================*/


/*=====================
// Community Submit the Report On POST report
=======================*/



// Submit the Report On POST report

// if(isset($_POST['submit_review_report'])){
    


//         $current_post_id = $_POST['review_post_id'];
//         $comm_get_user_id = $_POST['login_current_ui'];
//         $submit_the_post_report = $_POST['post_review_report'];



//             $comm_post_report = get_post_meta($current_post_id, 'comm_repost_on_post_val', true);
//             $has_error = false;
//             if(!empty($comm_post_report)){
//                 if(array_key_exists($comm_get_user_id, $comm_post_report)){
//                     $has_error = true;
//                    
//                 }else{

//                     $comm_post_report[$comm_get_user_id]= array('reporterid'=>$comm_get_user_id, 'reason'=>$submit_the_post_report); 
//                 }

//             }else{
//                 $comm_post_report = array();
//                 $comm_post_report[$comm_get_user_id]= array('reporterid'=>$comm_get_user_id, 'reason'=>$submit_the_post_report);
//             }
//             update_post_meta($current_post_id, 'comm_repost_on_post_val', $comm_post_report);
//             $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//             if(empty($has_error)){
//                 wp_redirect($this_page_link);
//                 exit();
//             }

// }

if(isset($_POST['submit_report_onreview'])){
    


    $current_post_id = $_POST['review_post_id'];
    $comm_get_user_id = $_POST['login_current_ui'];
    $submit_the_post_report = $_POST['report_on_post_review'];



        $comm_post_report = get_post_meta($current_post_id, 'comm_repost_on_post_val', true);
        $has_error = false;
        if(!empty($comm_post_report)){
            if(array_key_exists($comm_get_user_id, $comm_post_report)){
                $has_error = true;
                ?>
                    <script>
                    alert('You Already Reported !');
                    </script>
                <?php
            }else{

                $comm_post_report[$comm_get_user_id]= array('reporterid'=>$comm_get_user_id, 'reason'=>$submit_the_post_report); 
            }

        }else{
            $comm_post_report = array();
            $comm_post_report[$comm_get_user_id]= array('reporterid'=>$comm_get_user_id, 'reason'=>$submit_the_post_report);
        }
        update_post_meta($current_post_id, 'comm_repost_on_post_val', $comm_post_report);
        $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(empty($has_error)){
            wp_redirect($this_page_link);
            exit();
        }

}




/*=====================
// Community End Submit the Report On POST report
=======================*/

/*=====================
//  travel Submit the Report On POST report
=======================*/
if(isset($_POST['submit_travl_review_report'])){
    


    $current_post_id = $_POST['review_post_id'];
    $comm_get_user_id = $_POST['login_current_ui'];
    $submit_the_post_report = $_POST['post_review_report_input'];



        $comm_post_report = get_post_meta($current_post_id, 'travel_repost_on_post_val', true);
        $has_error = false;
        if(!empty($comm_post_report)){
            if(array_key_exists($comm_get_user_id, $comm_post_report)){
                $has_error = true;
                ?>
                    <script>
                    alert('You Already Reported !');
                    </script>
                <?php
            }else{

                $comm_post_report[$comm_get_user_id]= array('reporterid'=>$comm_get_user_id, 'reason'=>$submit_the_post_report); 
            }

        }else{
            $comm_post_report = array();
            $comm_post_report[$comm_get_user_id]= array('reporterid'=>$comm_get_user_id, 'reason'=>$submit_the_post_report);
        }
        update_post_meta($current_post_id, 'travel_repost_on_post_val', $comm_post_report);
        $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(empty($has_error)){
            wp_redirect($this_page_link);
            exit();
        }

}





/*=====================
// End travel Submit the Report On POST report
=======================*/


/*=====================
// replay on community review post
=======================*/

if(isset($_POST['comm_postreview_reply'])){
    $comm_get_user_id = get_current_user_id();
    $comm_reply_rivew = $_POST['comm_review_replay'];
    $submit_post_review_id = $_POST['community_post_review_id'];

    // $get_comm_reply_on_review = get_post_meta(get_the_ID(), 'comm_reply_on_review', true);
    $get_comm_reply_on_review = get_post_meta($submit_post_review_id, 'comm_reply_on_review', true);
    if(!empty($get_comm_reply_on_review)){
        $get_comm_reply_on_review[$comm_get_user_id][] = array('replyuid'=>$comm_get_user_id, 'reply'=>$comm_reply_rivew); 
        update_post_meta($submit_post_review_id, 'comm_reply_on_review', $get_comm_reply_on_review);
    }
    else{
        $get_comm_reply_on_review = array();
        $get_comm_reply_on_review[$comm_get_user_id][]= array('replyuid'=>$comm_get_user_id, 'reply'=>$comm_reply_rivew);
        update_post_meta($submit_post_review_id, 'comm_reply_on_review', $get_comm_reply_on_review);
    }
    $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    wp_redirect($this_page_link);
    exit();
}


/*=====================
// End replay on community review post
=======================*/

// ============
// user register form
// ============
if(isset($_POST['user_regiserbtn'])){
    global $wpdb, $register_error;
    $username= $wpdb->escape($_POST['userfname']);
    $useremail= $wpdb->escape($_POST['useremail']);
    $userapassword= $wpdb->escape($_POST['userpassword']);
    $confirm_Password= $wpdb->escape($_POST['usconfirmpassword']);

    $userlname= $_POST['userlname'];
    $userzcode= $_POST['userzcode'];
    $user_db_month = $_POST['user_db_month'];
    $user_db_useryear = $_POST['user_db_useryear'];
    $user_db_day = $_POST['user_db_day'];

    if(strpos($username, ' ') !== false){
       $register_error .= "user name has Space";
    } 
    if(empty($username)){
       $register_error .= "Needed user name must";
    }
    if(username_exists($username)){
       $register_error .=" user name  already exists";
    }
    if(!is_email($useremail)){
       $register_error  .="Email have no valid value";
    }
    if(email_exists($useremail)){
       $register_error .="user Email  already exists";
    }
    if(strcmp($userapassword, $confirm_Password) !==0 ){
       $register_error .=" user Password didn,t match";
    }
    if(empty($userapassword)){
        $register_error .= "Needed user password must";
     }
     if(empty($confirm_Password)){
        $register_error .= "Needed user confirm  password must";
     }

    if(empty($register_error)){
       $get_user_id = wp_create_user($username,$userapassword, $useremail); 
       update_user_meta( $get_user_id , 'first_name' , $username );
       update_user_meta( $get_user_id , 'last_name' , $userlname );
       update_user_meta( $get_user_id , 'user_zip_code' , $userzcode );
       update_user_meta( $get_user_id , 'user_db_month' , $user_db_month );
       update_user_meta( $get_user_id , 'user_db_useryear' , $user_db_useryear );
       update_user_meta( $get_user_id , 'user_db_useryear' , $user_db_useryear );
       update_user_meta( $get_user_id , 'user_db_day' , $user_db_day );
       $gotobasurl = home_url().'/login';
       
       $message .= "Welcome \r\n";
       $message .= "". $username." ".$userlname . "\r\n";
       $message .= "Thanks So Much For Signed Up Please Login \r\n";
       $message .= "Please Click To Login  ".$gotobasurl."\r\n";
       $subject  = "Certified User Registration !";
       
       $success_message = wp_mail($useremail, $subject, $message);

       wp_redirect($gotobasurl);
       exit();
    }else{
       $register_error;
    }
}


// ============
// End user register form
// ============



}
add_action('init', 'submit_the_form_data');
