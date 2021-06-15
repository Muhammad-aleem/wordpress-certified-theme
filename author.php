<?php


        if ( !is_user_logged_in() ) {
            wp_redirect(site_url());
            exit();
        }

        get_header();
        $get_path = get_template_directory_uri();
        $author = get_user_by( 'slug', get_query_var( 'author_name' ) );
        $authorid = $author->ID;

        $current_user_id = get_current_user_id();

       

    

      
        // Community Post Count 
        $args = array(
            'post_type' => 'community',
            'author' => $authorid,
            'post_status'    => 'publish',
            'posts_per_page' => 3, 
        );

        $community_post = new WP_Query($args);

        $community_post_count = $community_post->found_posts;

        // traveland Post Count 
        $args = array(
            'post_type' => 'traveland',
            'author' => $authorid,
            'post_status'    => 'publish',
            'posts_per_page' => -1
        );

        $travel = new WP_Query($args);

        $travel_post_count = $travel->found_posts;
       


        // User name and user image 

        $avatar_url = get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450));
        $user_image = get_user_meta($authorid , 'user_image', true);
        $scr = wp_get_attachment_image_src($user_image, 'full');


        $user_firstname = get_user_meta($authorid , 'first_name', true );

        // get the last name of the user as a string
        $user_lastname = get_user_meta($authorid , 'last_name', true );
        $comm_get_user_id = get_current_user_id();

        $comm_user_followers = get_user_meta($comm_get_user_id , "comm_user_followers", true );
        $comm_user_following = get_user_meta($comm_get_user_id, "comm_user_following", true );
        $comm_user_following_count = 0;
        if(!empty($comm_user_following)){
            $comm_user_following_count = count($comm_user_following);
        }
        $comm_user_followers_count = 0;
        if(!empty($comm_user_followers)){
            $comm_user_followers_count = count($comm_user_followers);
        }

        // total_author_thumbs_up
        $total_author_thumbs_up = get_user_meta( $authorid, "total_author_thumbs_up", true );
        $total_thumbs_up = 0;

        if(!empty($total_author_thumbs_up)){
            $total_thumbs_up =  $total_author_thumbs_up;
        }



        $author = get_user_by( 'slug', get_query_var( 'author_name' ) );
        $authorid = $author->ID;
       


        // get the user profile background image
            $user_image = get_user_meta($authorid , 'user_background_image', true);
            $user_background_image = wp_get_attachment_image_src($user_image, 'full');


        $redic_community_url =  home_url().'/author-public-community?uid='.$authorid;
        $redic_props_and_call =  home_url().'/author-props-and-call?uid='.$authorid;
        $redic_travel =  home_url().'/author-public-traveland?uid='.$authorid;
        $user_profile =  home_url().'/user-profile';



        // Get the User Business 
        function get_the_user_business (){
            $author = get_user_by( 'slug', get_query_var( 'author_name' ) );
            $authorid = $author->ID;
            $args = array(
                'author' => $authorid,
                'post_type' => 'wp_business_listing',
                'post_status'    => 'publish',
                'posts_per_page' => 1, 
            );
    
            $user_business_post = new WP_Query($args);

            if ( $user_business_post->have_posts() ) : 
                while ( $user_business_post->have_posts() ) : $user_business_post->the_post();
                ?>
                    <div class="user_thumb_up">
                        <a href="<?= get_the_permalink();?>" class="text-decoration-none">
                            <span>See Business</span>
                        </a>
                    </div>
                    <?php
                            endwhile;
                            else:
                                ?>
                                    <div class="user_thumb_up">
                                        <a href="javascript:void(0)" class="text-decoration-none">
                                            <span>User Have No Business</span>
                                        </a>
                                    </div>
                                <?php
        endif;
        wp_reset_postdata();
  
        }
       

?>
<section class="usersett_tem_1_bg">
    <div class="container">
        <div class="public_community_bg">

            <style>
            .public_community_bg {
                background-image: url(<?php
 if($user_background_image) {
                    echo $user_background_image[0];
                }

                else {
                    echo "NO Image";
                }

                ?>);
                background-repeat: no-repeat;
                background-size: cover;
            }
            </style>
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="user_community_profile">
                        <?php
                    if($scr){
                        ?>
                        <img src="<?= $scr[0];?>" class="img-fluid">
                        <?php
                    }else{
                        ?>
                        <img src="<?= $avatar_url;?>" class="img-fluid">
                        <?php
                    }
                    
                    ?>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="cf_user_setting_heading">
                        <h2><?= $user_firstname; ?> <?= $user_lastname;?>.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-md-10 col-sm-12">
                <div class="user_living_text">
                    <h3>Vegas Living and Pushing Forward </h3>
                </div>
            </div>
            <?php
             if($authorid ==  $current_user_id){
                 ?>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="user_comm_follow">
                    <a href="<?=  $user_profile;?>" class="text-decoration-none">
                        Edit Profile
                        <img src="<?php echo $get_path?>/public/image/edit_post.png" class="img-fluid">
                    </a>
                </div>
            </div>
            <?php            
            }else{
                ?>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="user_comm_follow user_subsc_icn">
                    <?php
                        $user_followers = get_user_meta( $authorid , "user_followers", true );
                       
                       
                        $remKey = array_search( $current_user_id, $user_followers);
                        

                        if($remKey!==false){
                            ?>
                    <a href="#" class="text-decoration-none user_prfile_Follow">
                        UnFollow
                        <img src="<?php echo $get_path?>/public/image/subsc_icn.png" class="img-fluid">
                        <input type="hidden" class="user_profileid" value="<?= $authorid?>">
                    </a>
                    <?php
                        }else{
                            ?>
                    <a href="#" class="text-decoration-none user_prfile_Follow">
                        Follow
                        <img src="<?php echo $get_path?>/public/image/subsc_icn.png" class="img-fluid">
                        <input type="hidden" class="user_profileid" value="<?= $authorid?>">
                    </a>
                    <?php
                        }


                        ?>

                </div>
            </div>
            <?php 
            }

            ?>

        </div>
        <!-- On Like and Dislike Preloder  -->
        <div class="comm_like_dislikeloder">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="25 25 50 50">
                <circle cx="50" cy="50" r="20" fill="none" stroke-width="5" stroke="#45d6b5" stroke-linecap="round"
                    stroke-dashoffset="0" stroke-dasharray="100, 200">
                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" from="0 50 50"
                        to="360 50 50" dur="2.5s" repeatCount="indefinite" />
                    <animate attributeName="stroke-dashoffset" values="0;-30;-124" dur="1.25s"
                        repeatCount="indefinite" />
                    <animate attributeName="stroke-dasharray" values="0,200;110,200;110,200" dur="1.25s"
                        repeatCount="indefinite" />
                </circle>
            </svg>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="user_liveicn">
                    <a href="javascript:void(0)">
                        <img src="<?php echo $get_path?>/public/image/cf_live.png"
                            class="img-fluid user_community_live">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <!-- <div class="user_thumb_up">
                    <a href="#" class="text-decoration-none">
                        <span>See Business</span>
                    </a>
                </div> -->
                <?php
                 get_the_user_business ();
                ?>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="user_thumb_up">
                    <span class="user_thumb_number"><?= $total_thumbs_up;?></span>
                    <span>Thumbs Up</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="user_follow_up">
                    <span class="user_follow_up_number"><?= $comm_user_following_count;?></span>
                    <span>Following</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="user_followes_up">
                    <span class="user_followes_number"><?= $comm_user_followers_count;?></span>
                    <span>Followers</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="cf_user_props">
                    <a href="<?= $redic_props_and_call;?>" class="text-decoration-none">
                        <h2>Props and Call Outs <span class="text_color">0</span></h2>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="cf_user_travel_post">
                    <a href="<?= $redic_travel;?>" class="text-decoration-none">
                        <h2>Travel and Experience Post <span class="text_color"><?= $travel_post_count; ?></span></h2>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="cf_user_comm_post">
                    <a href="<?= $redic_community_url;?>" class="text-decoration-none">
                        <h2>Community Post <span class="text_color"><?= $community_post_count; ?></span></h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 mx-auto text-center">
                <div class="cf_user_line"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="user_post_text text-left mb-20">
                    <h2>Community Post</h2>
                </div>
                <?php

          
            if ( $community_post->have_posts() ) : 
                while ( $community_post->have_posts() ) : $community_post->the_post();

                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

                $get_the_post_id =  get_the_ID();
                $get_the_likeval = get_post_meta(get_the_ID(), "wp_comm_count_like_value".get_current_user_id(), true );
          ?>
                <div class="al_redate">
                    <span class="al_dtit">
                        Review Date:
                    </span>
                    <span class="al_cfdate">
                        <?php  $post_date= get_the_time('d/m/Y');
                   echo date_i18n( get_option( 'date_format' ),strtotime($post_date));?>
                    </span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="al_reviewimg">
                            <?php
                  if(!empty($featured_img_url)){
                    ?>
                            <a href="<?php echo get_the_permalink();?>">
                                <img src="<?php echo $featured_img_url; ?>" alt="" class="img-fluid">
                            </a>
                            <?php
                    }else{
                        ?>
                            <a href="<?php echo get_the_permalink();?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/reviewimg.png"
                                    class="img-fluid">
                            </a>
                            <?php
                    }
                  
                  ?>
                        </div>
                        <div class="al_revicnlils comm_shareicn cf_comm_usermb">
                            <ul>
                                <li class="al_revshare">
                                    <a href="javascript:void(0)" class="d-block ">
                                        <img src="<?php echo get_template_directory_uri(); ?>/public/image/shareicn.png"
                                            class="img-fluid comm_show_sincbtn">
                                    </a>
                                </li>
                                <li class="al_revthumbicn">
                                    <a href="#" class="wp_comm_thumb">
                                        <?php
                              $like_img = null;

                              if(empty($get_the_likeval)){
                                  $like_img .='<img src="'.get_template_directory_uri().'/public/image/thumbicn.png" class="img-fluid">';
                              }else{
                                  $like_img .='<img src="'.get_template_directory_uri().'/public/image/likeimg.png" class="img-fluid">';
                              }
                            ?>
                                        <?= $like_img;?>
                                        <input type="hidden" class="comm_like_postval"
                                            value="<?php echo $get_the_post_id;?>">
                                        <input type="hidden" class="comm_like_currentuser"
                                            value="<?php echo  $comm_get_user_id;?>">
                                    </a>
                                </li>
                                <li class="al_revmessageicn">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/public/image/messageicn.png"
                                            class="img-fluid">
                                    </a>
                                </li>
                                <?php
                         if($current_user_id == $authorid){
                             ?>
                                <li class="al_revflagicn">
                                    <a href="#" class="user_comm_delpost">
                                        <img src="<?php echo get_template_directory_uri(); ?>/public/image/trash.png"
                                            class="img-fluid">
                                        <input type="hidden" class="comm_delete_postid" value="<?= $get_the_post_id;?>">
                                    </a>
                                </li>
                                <?php
                          }
                        ?>

                            </ul>
                            <!-- share links  -->
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

                            <!--  Preloder  -->
                            <div class="comm_like_dislikeloder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="25 25 50 50">
                                    <circle cx="50" cy="50" r="20" fill="none" stroke-width="5" stroke="#45d6b5"
                                        stroke-linecap="round" stroke-dashoffset="0" stroke-dasharray="100, 200">
                                        <animateTransform attributeName="transform" attributeType="XML" type="rotate"
                                            from="0 50 50" to="360 50 50" dur="2.5s" repeatCount="indefinite" />
                                        <animate attributeName="stroke-dashoffset" values="0;-30;-124" dur="1.25s"
                                            repeatCount="indefinite" />
                                        <animate attributeName="stroke-dasharray" values="0,200;110,200;110,200"
                                            dur="1.25s" repeatCount="indefinite" />
                                    </circle>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="al_revidetails">
                            <p class="pb-3">
                                <?php
                   echo wp_trim_words( get_the_content(),20);
                  ?>
                                <a href="<?php echo get_the_permalink();?>" class="al_cfrmpost d-block">Read More...</a>
                        </div>
                    </div>
                </div>

                <?php
            endwhile;
            else:
                ?>
                <div class="user_post_text text-left mb-20 mt-5">
                    <h2 class="text-danger">Oops There is No Posts Yet</h2>
                </div>
                <?php
            endif;
            wp_reset_postdata();
          ?>

            </div>
            <div class="offset-lg-3 col-lg-3 offset-md-3 col-md-3 col-sm-12">
                <div class="cf_adver_text  mb-20">
                    <h2>Advertisement</h2>
                </div>
            </div>

        </div>
    </div>
    </sectiuon>





    <?php get_footer();?>