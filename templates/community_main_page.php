<?php
/**
 * Template Name: community_main_page
 * Template Post Type: post, page
 */
get_header();
$dir_path = get_template_directory_uri(); 

$submitpost = home_url().'/community-submit-your-post';
$alertpost = home_url().'/community-create-an-alert';
?>
<section class="al_mainbg">
<div class="container al_Hbannersec_new">
    <div class="row">
        <div class="col-md-6 col-sm-12 my-auto">
            <div class="al_findbustit cf_tral_tit">
                <h1>Search DIscussions</h1>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="al_hmainicon text-right">
                <ul>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/instragram.png" class="img-fluid">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/youtube.png" class="img-fluid al_Hcfyoutube">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/twitter.png" class="img-fluid al_Hcftitter">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
                <div class="al_cfhomesearch">
                    <form autocomplete="off" role="search" method="get"  action="<?php echo home_url( '/' ); ?>">
                            <div class="row no-gutterss">
                                <div class="col-lg-12 col-md-12 col-12 text-center">
                                    <input type="text" name="s" class="form-control al_honebusinput" placeholder="WHAT ARE YOU LOOKING FOR">
                                </div>
                            </div>
                    </form>
                </div>
        </div>
    </div>
    <div class="row trv_mb_20">
        <div class="col-mg-8 col-md-8 col-sm-12">
            <div class="al_cfsubheading cf_subheading cf_mob_center">
                <h1><span class="al_cfsubcolo">Community</span></h1>
            </div>
        </div>
        <div class="col-mg-4 col-md-4 col-sm-12 my-auto cf_mob_center">
            <div class="cf_trv_post_sec">
                <a href="<?php echo $submitpost?>">
                    <span>
                            <img src="<?php echo $dir_path; ?>/public/image/edit_post.png" class="img-fluid">
                            <span  class="cf_trv_post_secredic mr-0 pl-0"> 
                            post
                            </span>
                    </span>
                </a>
                <a href="<?php echo $alertpost?>">
                    <span class="cf_alerticn">
                        <img src="<?php echo $dir_path; ?>/public/image/alert.png" class="img-fluid alert_icn">
                        <span class="cf_trv_post_secredic mr-0 pl-0">
                        Alerts 
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php

            $args = array(  
                'post_type' => 'community',
                'post_status' => 'publish',
                'posts_per_page' => 6, 
                'order' => 'ASC',
            );
            $loop = new WP_Query( $args );
            
            ?>
            <div class="al_cfmainslider cf_tral_slider">
                <?php
                    if ( have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post();
                            ?>
                                <div class="cf_comm_main_slider">
                                    <h3>
                                        <?php the_title()?>
                                    </h3>
                                    <?php the_excerpt()?>
                                    <div class="comm_goto_lik">
                                        <a href="<?php the_permalink();?>">TAP IN THE CONVO</a>
                                    </div>
                                </div>

                            <?php
                        endwhile;
                    endif;    
                ?>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="cfslid_b_titi comm_mb_0">
                <h2>Exchange. Discuss. & Learn from Others</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
        <div class="row">


          <div class="col-md-6">

          <?php// echo do_shortcode('[al_review_shortcode]');?>


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

                    $get_the_post_id =  get_the_ID();
                    $comm_get_user_id = get_current_user_id();
                    $get_the_likeval = get_post_meta(get_the_ID(), "wp_comm_count_like_value".$comm_get_user_id, true );
                
                    ?>
                    <div class="al_redate">
                        <span class="al_dtit">
                            Post Date:
                        </span>
                        <span class="al_cfdate">

                            <?php
                                $post_date= get_the_time('d/m/Y');
                            echo date_i18n( get_option( 'date_format' ),strtotime($post_date));
                            ?>
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
                                ?> <a href="<?= $home_sigle_url;?>">
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
                            <div class="al_revicnlils comm_shareicn">
                                <ul>
                                    <?php 
                                        if (is_user_logged_in() ) {
                                            ?>
                                                <li class="al_revshare">
                                                    <a href="#" class="d-block">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/public/image/shareicn.png"  class="img-fluid comm_show_sincbtn"> 
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
                                                    <a href="#" class="comm_pop_review_reply">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/public/image/messageicn.png"
                                                        class="img-fluid"  data-toggle="modal" data-target="#homereview_pop"> 
                                                        <input type="hidden" class="comm_single_review_id"
                                                            value="<?php  the_ID();?>">
                                                    </a>
                                                </li>
                                                <li class="al_revfollow">
                                                    <a href="#" >
                                                        <img src="<?php echo get_template_directory_uri(); ?>/public/image/follow.png" 
                                                        class="img-fluid"> 
                                                    </a>
                                                </li>
                                                <li class="al_revflagicn">
                                                    <a href="#" class="comm_report_btn">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/public/image/flagicn.png" class="img-fluid"> 
                                                    </a>
                                                </li>
                                            <?php 
                                        }else{
                                            ?>
                                            <li class="al_revshare">
                                                <a href="#" class="d-block">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/public/image/shareicn.png" onclick="login_check(event)" class="img-fluid"> 
                                                </a>
                                            </li> 
                                            <li class="al_revthumbicn">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/public/image/thumbicn.png" onclick="login_check(event)" class="img-fluid"> 
                                                </a>
                                            </li>
                                            <li class="al_revmessageicn">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/public/image/messageicn.png" onclick="login_check(event)" class="img-fluid"> 
                                                </a>
                                            </li>
                                            <li class="al_revfollow">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/public/image/follow.png" onclick="login_check(event)" class="img-fluid"> 
                                                </a>
                                            </li>
                                            <li class="al_revflagicn">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/public/image/flagicn.png" onclick="login_check(event)" class="img-fluid"> 
                                                </a>
                                            </li>
                                        <?php 
                                        }
                                    ?>
                                </ul>
                                <!-- share icon -->
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
                                <!-- share icon End -->
                                <!-- On Like and Dislike Preloder  -->
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
                                    <!-- report the post reviews -->
                                        <div class="row mb-4 comm_repost_post">
                                            <div class="col-md-12 cf_tevl_ptwo_fm">
                                                <form method="POST" autocomplete="off">
                                                    <textarea class="form-control mb-3 rounded" id="" name="report_on_post_review" rows="6"
                                                        placeholder="Please Define The Reason" required=""></textarea>
                                                        <input type="hidden" name="review_post_id"
                                                            value="<?php echo $get_the_post_id;?>">
                                                        <input type="hidden" name="login_current_ui"
                                                            value="<?php echo  $comm_get_user_id;?>">
                                                    <div class="cf_user_savebtn">
                                                        <ul>
                                                            <li class="pl-0">
                                                                <button type="submit" class="btn_active user_savebtn"
                                                                    name="submit_report_onreview">Submit Report</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--End report the post reviews -->

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
            ?>

      </div>


            <div class="col-md-6 col-sm-12">

                <div class="al_cfshop text-center mb-20">
                    <a href="javascript:void(0)" class="d-block">
                        Trending Topics
                    </a>
                </div>
                <?php

                global $wpdb;
                $table_name = $wpdb->prefix . "trending_hash_tags";
                $table_name2 = $wpdb->prefix . "trending_tags_relaction";
                $results = $wpdb->get_results( "SELECT * FROM $table_name ORDER BY counter DESC"); 

                $trending_titles = array();
                $thisposttype = 'community';
    
                
                if(!empty($results)) {
                    foreach($results as $show_data){ 
                        $trending_ids[]= $show_data->id;

                        $results2 = $wpdb->get_results( "SELECT * FROM $table_name2 WHERE keyword_id=$show_data->id"); 
                        if(!empty($results2)){
                            foreach($results2 as $show_data2){
                                $trending_id= $show_data2->post_id;

                                if(get_post_field('post_type', $trending_id) == $thisposttype){
                                    $trending_titles[]= $show_data->keyword;
                                }

                            }
                        }
                    }
                    if(!empty($trending_titles)){
                        $trending_titles = array_unique($trending_titles);
                    }
                    $basurl = home_url().'/community-all-topic';
                    foreach($trending_titles as $strentitle){

                        ?>
                            <div class="row mb-20">
                                   <div class="col-md-4  offset-md-4">
                                       <div class="al_cdfeaturetex">
                                           <a class="trending-topics-home" href="<?php echo $basurl.'?topic='.$strentitle;?>">
                                               <?= $strentitle;?>
                                           </a>
       
                                       </div>
                                   </div>
                               </div>
                        <?php

                    }
                        
                }
            ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mx-auto text-center">
            <div class="cf_join_heading mt_mob_mt_10">
                <h2>TAP IN</h2>
                <!-- <span>Popular Community Topics</span> -->
            </div>
        </div>
    </div>
    <div class="row mb-40 mb_mob_0" id="ajax-posts">
    <?php 
        // the query
        $the_query = new WP_Query( array(
            'post_type' => 'community',
            'posts_per_page' => 3,
        )); 
            if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post();
            $get_the_image_link = get_the_post_thumbnail_url(get_the_ID(),'full');

            // Show the review post count
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

    ?>
        <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
            <div class="cf_tev_join_content">
            <?php
            if(!empty($get_the_image_link)){
                ?>
                    <div class="tap_in_img">
                        <a href="<?= get_the_permalink();?>">
                            <img src="<?= $get_the_image_link ?>" class="img-fluid">
                        </a>
                    </div>
                <?php

            }else{
                ?>
                 <div class="tap_in_img">
                    <a href="<?= get_the_permalink();?>">
                        <img src="<?php echo $dir_path; ?>/public/image/fimg.png" class="img-fluid">
                    </a>
                </div>
                <?php
            }
            ?>
            <a href="<?= get_the_permalink();?>">
                <?php echo wp_trim_words(get_the_title(),4);?>
            </a>
            <h3>Discussed <?= $post_review_count;?> Time</h3>

            </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>
    
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto ">
            <div class="goto_downicn text-center comm_readmore">
                <a href="#">
                    <img src="<?php echo $dir_path; ?>/public/image/downicn.png" class="img-fluid">
                </a>
            </div>
        </div>
    </div>

</div>




</section>



<?php get_footer();?>