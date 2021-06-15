<?php

/**

 * Template Name: New Home

 * Template Post Type: post, page

 */

get_header();

?>

<section class="al_mainbg">

<div class="container al_Hbannersec_new">

    <div class="row">

        <div class="col-md-6 col-sm-12 my-auto">

            <div class="al_findbustit">

                <h1>Search Certified BOC</h1>

            </div>

        </div>

        <div class="col-md-6 col-sm-12">

            <div class="al_hmainicon text-right">

                <ul>

                    <li>

                        <a href="https://www.instagram.com/certifiedboc/
">

                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/instragram.png" class="img-fluid">

                        </a>

                    </li>

                    <li>

                        <a href="https://www.youtube.com/channel/UCI63C_QpA_i0uiwZE6v4CUw?view_as=subscriber
">

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

                <form autocomplete="off">

                    <div class="row no-gutterss">

                        <div class="col-lg-12 col-md-12 col-12 text-center">

                        <input type="text" class="form-control al_honebusinput" placeholder="WHAT ARE YOU LOOKING FOR">

                        </div>

                        

                    </div>

                </form>

            </div>

        </div>

    </div>


    <div class="container">

  <div class="row">

      <div class="col-md-12">
      <!-- <h1 class="my-city" id="get_my_city">Las Vegas, Nevada</h1> -->

</div>
</div>

<!-- <div class="row">
      <div class="col-md-12">
      <h1 class="my-city-sub" id="click_forcity">Click To Refresh  My City</h1>
</div> -->
</div>
</div> 

<div class="container">

<div class="row">

    <div class="col-md-12">
    <h3 class="advertisement"> Advertisement</h3>
    <?php
      $top_ads_codeone = get_theme_mod("home_top_ads_code");
      if(!empty($top_ads_codeone)){
        echo $top_ads_codeone;
      }else{
          ?>
            <a href="<?php echo get_theme_mod("home_top_ads_link");?>">
                <img src="<?php echo get_theme_mod("home_top_ads");?>" alt="" class="img-fluid pb-3">
            </a>
          <?php
      }
    ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="advertisement_banner"></div>
    </div>
</div>
</div> 


<!-- <div class="container mb-20">

    <div class="row">

        <div class="col-md-12">

            <div class="al_cfmainslider">

                <div class="">

                    <img src="https://picsum.photos/1200/300" alt="">

                </div>

                <div class="" >

                    <img src="https://picsum.photos/id/237/1200/300" alt="">

                </div>

                <div class="">

                    <img src="https://picsum.photos/1200/300?grayscale" alt="">

                </div>

                <div class="">

                    <img src="https://picsum.photos/seed/picsum/1200/300" alt="">

                </div>

            </div>

        </div>

    </div>

</div> -->
<?php echo do_shortcode('[al_home_shortcodeaa]');?>

<!-- End Slider -->


<div class="container">

  <div class="row">

      <div class="col-md-12">
      <h1 class="join-convo"> TAP IN</h1>

</div>
</div>
</div>      



<div class="container">

  <div class="row">

      <div class="col-md-6">

        <div class="al_cfpoday text-left mb-20">
              <a href="javascript:void(0)" class="d-block">
                Fire Convo
                </a>
          </div>

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
                <a href="javascript:void(0);" class="d-block">
                    Trending Topics
                </a>
            </div>
            <?php

            global $wpdb;
            $table_name = $wpdb->prefix . "trending_hash_tags";
            $table_name2 = $wpdb->prefix . "trending_tags_relaction";
            $results = $wpdb->get_results( "SELECT * FROM $table_name ORDER BY counter DESC"); 

            $trending_titles = array();
            // $thisposttype = 'community';


            if(!empty($results)) {
                foreach($results as $show_data){ 
                    $trending_ids[]= $show_data->id;

                    $results2 = $wpdb->get_results( "SELECT * FROM $table_name2 WHERE keyword_id=$show_data->id"); 
                    // echo '<pre>';
                    // print_r($results2);
                    // echo '</pre>';
                    if(!empty($results2)){
                        foreach($results2 as $show_data2){
                            $trending_id= $show_data2->post_id;

                            // if(get_post_field('post_type', $trending_id)== $thisposttype){
                                $trending_titles[]= $show_data->keyword;
                            // }

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

            

      </div>



  </div>

</div>

<div class="container">

<div class="row">

    <div class="col-md-12">
    <h3 class="advertisement"> Advertisement</h3>
    <?php
     $top_ads_codetwo = get_theme_mod("home_bottom_ads_code");
     if(!empty($top_ads_codetwo)){
        echo $top_ads_codetwo;
     }else{
         ?>
            <a href="<?php echo get_theme_mod("bottom_ads_link");?>">
                <img src="<?php echo get_theme_mod("home_bottom_ads");?>" alt="" class="img-fluid">
            </a>
         <?php
     }
    ?>
</div>
</div>
<div class="row">

    <div class="col-md-12">
    <div class="advertisement_banner"> </div>

</div>
</div>
</div> 


  <!-- Single post community add  review -->

  <div class="modal fade" id="homereview_pop" tabindex="-1" role="dialog" aria-labelledby="homereview_popLabel"
        aria-hidden="true">
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