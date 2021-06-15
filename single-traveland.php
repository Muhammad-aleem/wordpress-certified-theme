<?php
/**
 * single -traveland post
 */


$dir_path = get_template_directory_uri(); 

if ( !is_user_logged_in() ) {
    wp_redirect(site_url());
    exit();
}

$current_post_id = get_the_ID();

$trald_get_user_id = get_current_user_id();


$get_the_current_tit = get_the_title();
// echo

if(isset($_POST['teavelnd_postreview'])){
    $teavelnd_post_rivew = $_POST['teavelnd_submitpostreview'];

    $add_review = array(
        'post_title'    => 'Review of '.$get_the_current_tit,
        'post_content'  =>$teavelnd_post_rivew,
        'post_status'   => 'publish',      
        'post_type'     => 'wp_traveland_review'
        );
    $review_id = wp_insert_post($add_review);

    if(!empty($review_id)){
        update_post_meta($review_id , 'traveland_post_custom_select', $current_post_id); 
        $prev_review = get_post_meta($current_post_id, 'traveland_post_reviews', true);
        if(!empty($prev_review)){
            $prev_review[] = $review_id;
        }else{
            $prev_review = array($review_id);
        }
        update_post_meta($current_post_id , 'traveland_post_reviews', $prev_review); 
    }
    $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    wp_redirect($this_page_link);
    exit();

}


// Show the review post count

$getprev_review = get_post_meta($current_post_id, 'traveland_post_reviews', true);
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



// Submit the post report 


// Submit the Report On POST

if(isset($_POST['submit_travel_postreport'])){
    $current_post_id = get_the_ID();
    $comm_get_user_id = get_current_user_id();

   
    $submit_the_post_report = $_POST['travel_postreport'];
    

    $comm_post_report = get_post_meta(get_the_ID(), 'travel_repost_val', true);
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
    update_post_meta($current_post_id, 'travel_repost_val', $comm_post_report);
    $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(empty($has_error)){
        wp_redirect($this_page_link);
        exit();
    }
}


// replay on review

if(isset($_POST['comm_postreview_reply'])){
    $comm_get_user_id = get_current_user_id();
    $comm_reply_rivew = $_POST['travel_review_replay'];
    $submit_post_review_id = $_POST['travel_post_review_id'];

    $get_travel_reply_on_review = get_post_meta(get_the_ID(), 'travel_reply_on_review', true);
    if(!empty($get_travel_reply_on_review)){
        $get_travel_reply_on_review[$comm_get_user_id][]= array('replyuid'=>$comm_get_user_id, 'reply'=>$comm_reply_rivew); 
    }else{
        $get_travel_reply_on_review = array();
        $get_travel_reply_on_review[$comm_get_user_id][]= array('replyuid'=>$comm_get_user_id, 'reply'=>$comm_reply_rivew);
    }
    update_post_meta($submit_post_review_id, 'travel_reply_on_review', $get_travel_reply_on_review);
    $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(empty($has_error)){
        wp_redirect($this_page_link);
        exit();
    } 
    $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    wp_redirect($this_page_link);
    exit();
}

get_header();
?>
<section class="al_mainbg">
<div class="container al_Hbannersec_new">
    <div class="row">
        <div class="offset-lg-6 offset-md-6 col-lg-6 col-md-6 col-sm-12">
            <div class="al_hmainicon text-right">
                <ul>
                    <li>
                        <a href="#">
                            <img src="<?php echo $dir_path; ?>/public/image/instragram.png" class="img-fluid">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $dir_path; ?>/public/image/youtube.png" class="img-fluid al_Hcfyoutube">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $dir_path; ?>/public/image/twitter.png" class="img-fluid al_Hcftitter">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="al_cfmainslider cf_tral_slider">
                <div class="">
                    <img src="<?php echo $dir_path; ?>/public/image/single_travl/trv1.png" alt="">
                </div>
                <div class="" >
                    <img src="<?php echo $dir_path; ?>/public/image/single_travl/trv2.png" alt="">
                </div>
                <div class="">
                    <img src="<?php echo $dir_path; ?>/public/image/single_travl/trv3.png" alt="">
                </div>
                <div class="">
                    <img src="<?php echo $dir_path; ?>/public/image/single_travl/trv4.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="row  flex-column-reverse flex-sm-row">
        <div class="col-lg-3 col-md-3 col-sm-12">
        <?php
              $get_imageone =  get_theme_mod("travel_top_image");
              $get_image_two = get_theme_mod("travel_bottom_image");
              $get_imageone_link = get_theme_mod("travel_top_ads_link");
              $get_image_two_link = get_theme_mod("travel_bottom_ads_link");
              $top_ads_codeone = get_theme_mod("travel_top_ads_code");
              $top_ads_codetwo = get_theme_mod("travel_bottom_ads_code");
              if(!empty($top_ads_codeone)){
                  echo $top_ads_codeone;
              }else{
                  ?>
                   <a href="<?= (!empty($get_imageone_link) ? $get_imageone_link : '#')?>">
                        <img src="<?= (!empty($get_imageone) ? $get_imageone : $dir_path.'/public/image/add_image.png')?>" class="img-fluid mb-5">
                    </a>
                  <?php
              }
              if(!empty($top_ads_codetwo)){
                  echo  $top_ads_codetwo;
              }else{
                  ?>
                    <a href="<?= (!empty($get_image_two_link) ? $get_image_two_link : '#')?>">
                        <img src="<?= (!empty($get_image_two) ? $get_image_two : $dir_path.'/public/image/add_image.png')?>" class="img-fluid">
                    </a>
                  <?php
              }
            ?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="cf_search_post_tit">
                <h3>Travel and Experiences > <q>Destination</q> Post</h3>
            </div>
            <form autocomplete="off" role="search" method="get"  action="<?php echo home_url( '/' ); ?>">
                <div class="cf_search_input">
                    <div class="form-group">
                        <input type="text" name="s" class="form-control cf_search-post" placeholder="Type Here to Search Post" required>
                        <input type="hidden" name="post_type" value="traveland"/>
                    </div>
                </div>
                <div class="row mb-20">
                    <div class="col-lg-12 col-md-3 col-sm-12 text-right">
                        <input type="submit" class="cf_sech_submitbtn" name="submit" value="Go">
                    </div>
                </div>
            </form>
            <!-- <div class="cf_view_compost">
                <h3>Back to <q>Destination</q> List</h3>
            </div> -->
            
            <?php

            if ( have_posts() ) : 
                // Start the Loop 
                while ( have_posts() ) : the_post();

                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                $current_post_id = get_the_ID();
                ?>

            <div class="row pt-3">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="cf_comm_spot_tit">
                        <h4>Topic</h4>
                        <h2 class="pb-2"><?php echo the_title();?></h2>
                        <!-- <h3 class="tevl_mb_5"></h3> -->
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-2 col-md-4 col-sm-12">
                <div class="cf_comm_replies_tit">
                        <h4>Replies	</h4>
                        <span><?= $post_review_count;?></span>
                    </div>
                </div>
            </div>

            <div class="cf_comm_usersec">
                <span class="cf_comm_userimg">
                    <?php
                    $author_id = get_post_field( 'post_author', $current_post_id );
                    $get_the_img = get_avatar( get_the_author_meta($author_id) );
                    $user_image = get_user_meta($author_id, 'user_image', true);
                    $scr = wp_get_attachment_image_src($user_image, 'full'); 

                    if($scr){
                        ?>
                        <a href="<?= get_author_posts_url($author_id)?>" class="text-decoration-none">
                            <img src="<?= $scr[0];?>" class="img-fluid">
                        </a>
                        <?php
                    }else{
                        
                        ?> <a href="<?= get_author_posts_url($author_id)?>" class="text-decoration-none">
                        <?php   echo $get_the_img ;?>
                        </a><?php
                    }

                    ?>
                </span>
                <span class="cf_comm_username">
                            <?php 
                                $author_id = get_post_field( 'post_author', $current_post_id );
                                 $author_name = get_the_author_meta('user_nicename', $author_id);
                            ?>
                             <a href="<?= get_author_posts_url($author_id)?>" class="text-decoration-none">
                                <?php  echo $author_name; ?>
                            </a>
                </span>
            </div>
            <div class="cf_comm_usercount text-right">
                <!-- <span class="cf_comm_usershare">
                    450 Shares
                </span> -->
                <span class="cf_comm_userliks"> 
                <?php
                        $get_the_likeval = get_post_meta(get_the_ID(), "wp_travland_count_like_value".$trald_get_user_id, true );
                       $total_count = get_post_meta( get_the_ID(  ), "wp_travland_count_total_count", true );
                       if($total_count){
                        $shareValue =  $total_count;
                        function convertShares($shareValue){
                         if($shareValue < 1000){
                         return $shareValue;
                         }elseif($shareValue > 100000 ){
                               return number_format($shareValue/100000,2) . "M";
                         }else{
                             return number_format($shareValue/1000,2) . "k";
                         }
                       } 
                        echo convertShares($shareValue).' Likes';

                       }else{
                           echo 0 .' Likes';
                       }
                       ?>
                </span>
                <p><?php $post_date= get_the_time('F j, Y g:i a');
                             echo date_i18n(get_option( 'date_format' ),strtotime($post_date)); ?></p>
            </div>
            <div class="cf_comm_userpostimg sigle_communityimg">
                <?php
                    if(!empty($featured_img_url)){
                            ?> <img src="<?php echo $featured_img_url; ?>" alt="<?php echo $dir_path; ?>/public/image/post_image.png" class="img-fluid"><?php
                    }else{
                        ?> <img src="<?php echo $dir_path; ?>/public/image/post_image.png" class="img-fluid"><?php
                    }
                ?>
            </div>
            <div class="row">
                <div class="col-lg-11 col-md-12 col-sm-12">
                    <div class="cf_comm_userpostimg">
                        <p>
                        <?php the_content();?>
                        </p>
                    </div>
                    <div class="al_revicnlils cf_comm_usermb comm_shareicn">
                        <ul>
                            <li class="al_revshare pl-0">
                                <a href="javascript:void(0)" class="comm_show_sincbtn">
                                    <img src="<?php echo $dir_path;?>/public/image/shareicn.png" class="img-fluid"> 
                                </a>
                            </li>
                            <li class="al_revthumbicn">
                                <a href="#" class="wp_trald_thumb">
                                <?php
                                $like_img = null;
                                if(empty($get_the_likeval)){
                                    $like_img .='<img src="'.$dir_path.'/public/image/thumbicn.png" class="img-fluid">';
                                }else{
                                    $like_img .='<img src="'.$dir_path.'/public/image/likeimg.png" class="img-fluid">';
                                }
                                ?>
                                    <?= $like_img;?>
                                    <input type="hidden" class="trald_like_postval" value="<?php echo $current_post_id;?>">
                                    <input type="hidden" class="trald_like_cuser" value="<?php echo $trald_get_user_id;?>"> 
                                </a>
                            </li>
                            <li class="al_revmessageicn">
                                <a href="javascript:void(0);" class="travelnd_showreviewinp">
                                    <img src="<?php echo $dir_path;?>/public/image/messageicn.png" class="img-fluid">

                                </a>
                            </li>
                            <li class="al_revfollow">
                                <a href="#" class="user_trald_main_flow">
                                <?php   
                                        $comm_user_following = get_user_meta( get_current_user_id() , "travel_user_following", true );
                                        if(!empty($comm_user_following)){
                                            ?>
                                            <img src="<?php echo $dir_path;?>/public/image/follow.png" class="img-fluid">
                                            <?php
                                        }else{
                                            ?>
                                            <img src="<?php echo $dir_path;?>/public/image/follow_success.png" class="img-fluid">
                                            <?php
                                        } 
                                        ?>
                                    <?php 
                                        $post_author_id = get_post_field ('post_author', $current_post_id);
                                    ?>
                                        <input type="hidden" class="post_author_uid" value="<?php echo  $post_author_id;?>">
                                        <input type="hidden" class="curent_login_uid" value="<?php echo  $trald_get_user_id;?>">
                                </a>
                            </li>
                            <li class="al_revflagicn">
                                <a href="#" class="travel_report_btn">
                                    <img src="<?php echo $dir_path;?>/public/image/flagicn.png" class="img-fluid"> 
                                </a>
                            </li>
                        </ul>
                         <!-- On Like and Dislike Preloder  -->
                                <div class="comm_like_dislikeloder">
                                        <svg version="1.1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="25 25 50 50">
                                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="5" stroke="#45d6b5" stroke-linecap="round" stroke-dashoffset="0" stroke-dasharray="100, 200">
                                            <animateTransform attributeName="transform" attributeType="XML" type="rotate" from="0 50 50" to="360 50 50" dur="2.5s" repeatCount="indefinite"/>
                                            <animate attributeName="stroke-dashoffset" values="0;-30;-124" dur="1.25s" repeatCount="indefinite"/>
                                            <animate attributeName="stroke-dasharray" values="0,200;110,200;110,200" dur="1.25s" repeatCount="indefinite"/>
                                        </circle>
                                        </svg>
                                </div>
                                <!-- report the post -->
                            <div class="row mb-4 comm_repost_post">
                                <div class="col-md-12 cf_tevl_ptwo_fm">
                                    <form method="POST" autocomplete="off">
                                        <textarea class="form-control mb-3" name="travel_postreport" rows="6"
                                            placeholder="Please Define The Reason" required=""></textarea>
                                            <div class="cf_user_savebtn">
                                                <ul>
                                                    <li class="pl-0">
                                                        <button type="submit" class="btn_active user_savebtn"
                                                            name="submit_travel_postreport">Submit Report</button>
                                                    </li>
                                                </ul>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        <!-- Share on scoil media Link! -->
                            <div class="comm_smedia comm_smedianone">
                                    <ul class="mb-0">
                                        <li class="comm_fb"><a
                                                href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title();?>"
                                                target="blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="comm_twitter"><a
                                                href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"
                                                target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li class="comm_email"><a
                                                href="mailto:?Subject=certified Share Post&Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php the_permalink(); ?>&text=<?php the_title(); ?>"><i
                                                class="fas fa-envelope"></i></a>
                                        </li>
                                    </ul>
                            </div>
                    </div>
                </div>
            </div>

            <?php   
                endwhile; 
                endif; 
                wp_reset_postdata();           
            ?>

            <div class="row mb-4" id="teavelnd_comt_sec">
                <div class="col-md-12 cf_tevl_ptwo_fm">
                    <form method="POST" autocomplete="off">
                        <textarea class="form-control mb-3" id="" name="teavelnd_submitpostreview" rows="6" placeholder="Write a Reply..." required=""></textarea>
                        <div class="cf_user_savebtn">
                                <ul>
                                    <li>
                                        <button type="submit" class="btn_active user_savebtn" name="teavelnd_postreview" id="traveld_submitreview">Post a Reply</button>
                                    </li>
                                </ul>
                        </div>
                    </form>
                </div>
            </div>
            <?php

                $prev_review = get_post_meta($current_post_id, 'traveland_post_reviews', true);

                if(!empty($prev_review )){
                    ?>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="cf_repli_tit">
                                <h2>Replies</h2>
                            </div>
                        </div>
            <?php
                    $get_the_review = array(  
                        'post_type' => 'wp_traveland_review',
                        'post_status' => 'publish',
                        'post__in' => $prev_review,
                    );
                $review_in_loop = new WP_Query( $get_the_review);

            if ( $review_in_loop->have_posts() ) : 
                while ( $review_in_loop->have_posts() ) : $review_in_loop->the_post();

                $current_post_id = get_the_ID();
                $get_current_userid = get_current_user_id();
                $get_the_likeval = get_post_meta(get_the_ID(), "wp_travland_count_like_value".$trald_get_user_id, true );
                
                ?>
                <div class="col-lg-2 col-md-2 col-sm-12 pr-0">
                <div class="cf_repli_img mt-0">
                <?php
                        $author_id = get_post_field( 'post_author', $current_post_id );
                        $get_the_img = get_avatar( get_the_author_meta($author_id) ); 

                        $user_image = get_user_meta( $author_id , 'user_image', true);
                        $img_scr = wp_get_attachment_image_src($user_image, 'full');

                        if($img_scr){
                            ?>
                                <img src="<?= $img_scr[0]?>" class="img-fluid">
                            <?php
                            
                        }else{
                            echo $get_the_img ;
                        }
                ?>
    </div>
</div>
<div class="col-lg-10 col-md-10 col-sm-12 pl-0">
    <div class="cf_replies_des">
        <div class="al_redate">
            <span class="al_dtit">
                Review Date:
            </span>
            <span class="al_cfdate">
                <?php  $post_date= get_the_time('d/m/Y');
                   echo date_i18n( get_option( 'date_format' ),strtotime($post_date)); ?>
            </span>
        </div>
        <span class="cf_comm_username ml-0">
            <?php 
                $author_id = get_post_field( 'post_author', $current_post_id );
                 $author_name = get_the_author_meta('user_nicename', $author_id);
                 echo $author_name;
            ?>
        </span>
        <p>
        <?php the_content();?>
        </p>
        <div class="al_revicnlils cf_comm_usermb  comm_shareicn comm_reviewshareicn">
            <ul>
                <li class="al_revshare pl-0">
                    <a href="#" class="comm_show_reviewsincbtn">
                        <img src="<?php echo $dir_path;?>/public/image/shareicn.png" class="img-fluid"> 
                    </a>
                </li>
                <li class="al_revthumbicn">
                    <a href="#" class="wp_trald_thumb">
                    <?php
                    $like_img = null;

                    if(empty($get_the_likeval)){
                        $like_img .='<img src="'.$dir_path.'/public/image/thumbicn.png" class="img-fluid">';
                    }else{
                        $like_img .='<img src="'.$dir_path.'/public/image/likeimg.png" class="img-fluid">';
                    }
                    ?>
                            <?= $like_img;?>
                            <input type="hidden" class="trald_like_postval" value="<?php echo $current_post_id;?>">
                            <input type="hidden" class="trald_like_cuser" value="<?php echo $trald_get_user_id;?>">
                    </a>
                </li>
                <li class="al_revmessageicn">
                    <a href="#"  data-toggle="modal" data-target="#cf_replypop_modal" class="travel_pop_review_reply">
                        <img src="<?php echo $dir_path;?>/public/image/messageicn.png" class="img-fluid">
                        <input type="hidden" class="travel_single_review_id" value="<?php  the_ID();?>"> 
                    </a>
                </li>
                <li class="al_revfollow">
                    
                    <a href="#">
                        <img src="<?php echo $dir_path;?>/public/image/follow.png" class="img-fluid"> 
                    </a>
                </li>
                <li class="al_revflagicn">
                    <a href="#" class="travel_report_btn">
                        <img src="<?php echo $dir_path;?>/public/image/flagicn.png" class="img-fluid"> 
                    </a>
                </li>
            </ul>
            <div class="comm_smedia commreview_smedia">
                    <ul class="mb-0">
                        <li class="comm_fb"><a
                                href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title();?>"
                                target="blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="comm_twitter"><a
                                href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"
                                target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li class="comm_email"><a
                                href="mailto:?Subject=certified Share Post&Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php the_permalink(); ?>&text=<?php the_title(); ?>"><i
                                    class="fas fa-envelope"></i></a></li>
                    </ul>
            </div>
            <!-- report the post reviews -->
                <div class="row mb-4 comm_repost_post">
                    <div class="col-md-12 cf_tevl_ptwo_fm">
                        <form method="POST" autocomplete="off">
                            <textarea class="form-control mb-3 rounded" id="" name="post_review_report_input" rows="6"
                                placeholder="Please Define The Reason" required=""></textarea>
                                <input type="hidden" name="review_post_id"
                                    value="<?php echo $current_post_id;?>">
                                <input type="hidden" name="login_current_ui"
                                    value="<?php echo  $get_current_userid;?>">
                            <div class="cf_user_savebtn">
                                <ul>
                                    <li class="pl-0">
                                        <button type="submit" class="btn_active user_savebtn"
                                            name="submit_travl_review_report">Submit Report</button>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            <!--End report the post reviews -->

        </div>
    </div>
</div>
<?php  
    endwhile;
    endif;
    wp_reset_postdata();

}
?>


               

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cf_replypop_modal" tabindex="-1" role="dialog" aria-labelledby="cf_replypop_modalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content cf_relies_popbg">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="cf_replypop_modalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row show_single_post">
               

            </div>
      </div>
    </div>
  </div>
</div>

</section>



<?php get_footer();?> 
