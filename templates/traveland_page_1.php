<?php
/**
 * Template Name: Traveland page 01
 * Template Post Type: post, page
 */
get_header();
$dir_path = get_template_directory_uri(); 
$traveland_alert =  home_url().'/traveland-create-an-alert';
$traveland_alert_page =  home_url().'/traveland-submit-a-post';
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
    <div class="row trv_mb_20">
        <div class="col-mg-8 col-md-8 col-sm-12">
            <div class="al_cfsubheading cf_subheading cf_mob_center">
                <h1><span class="al_cfsubcolo">travel and experiences</span></h1>
            </div>
        </div>
        <div class="col-mg-4 col-md-4 col-sm-12 my-auto cf_mob_center">
            <div class="cf_trv_post_sec">
                <a href="<?php echo $traveland_alert_page?>">
                    <span>
                        <img src="<?php echo $dir_path; ?>/public/image/edit_post.png" class="img-fluid">
                        <span class="cf_trv_post_secredic mr-0 pl-0">
                        post
                        </span>
                    </span>
                </a>
                <a href="<?php echo $traveland_alert?>">
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
                'post_type' => 'traveland',
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
                                    <?php the_content();?>
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
            <div class="col-lg-6 col-md-6 col-sm-12">
            <?php
        $args = array(  
            'post_type' => 'wp_traveland_review',
            'post_status' => 'publish',
            'posts_per_page' => 3, 
            'meta_query' => array(
                array(
                    'key' => 'traveland_post_custom_select', 
                    'compare' => 'EXISTS'   
                )
            ),
        );
    $loop = new WP_Query( $args );
    
    if ( $loop->have_posts() ) : 
        while ( $loop->have_posts() ) : $loop->the_post();

        $review_on_post_id = get_post_meta( get_the_ID(), 'traveland_post_custom_select', true );


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
                    ?> <img src="<?php echo $parent_of_review_img;?>" alt="missing image" class="img-fluid"><?php
                    }else{
                        ?><img src="<?php echo get_template_directory_uri(); ?>/public/image/reviewimg.png" class="img-fluid">
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
    ?>
    


            </div>
            <div class="col-md-6 col-sm-12">

                <!-- <div class="al_cfshop text-center mb-20">
                    <a href="javascript:void(0)" class="d-block">
                        Trending Topics
                    </a>
                </div> -->

            <?php
            /*
            $custom_terms = get_terms('team_tag');

                foreach($custom_terms as $custom_term) {
                    wp_reset_query();
                    $args = array('post_type' => 'community',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'team_tag',
                                'field' => 'slug',
                                'terms' => $custom_term->slug,
                            ),
                        ),
                    );

                    $loop = new WP_Query($args);
                    if($loop->have_posts()) {            
                        while($loop->have_posts()) : $loop->the_post();
                        ?>
                            <div class="row  mb-20">
                                <div class="col-md-4  offset-md-4">
                                    <div class="al_cdfeaturetex">
                                        <a class="trending-topics-home"href="<?= get_permalink();?>">
                                            <?= $custom_term->name;?>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    }
                }
                */
            ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mx-auto text-center">
            <div class="cf_join_heading mt_mob_mt_10">
                <h2>TAP IN</h2>
                <span>Popular Travel And Experiences Topics</span>
            </div>
        </div>
    </div>
    <div class="row mb-40 mb_mob_0 ">
    <?php 
        // the query
        $the_query = new WP_Query( array(
            'post_type' => 'traveland',
            'posts_per_page' => 3,
        )); 
            if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post();
            $get_the_image_link = get_the_post_thumbnail_url(get_the_ID(),'full');
    ?>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_tev_join_content">
            <?php
            if(!empty($get_the_image_link)){
                ?>
                    <div class="tap_in_img">
                        <img src="<?= $get_the_image_link ?>" class="img-fluid">
                    </div>
                <?php

            }else{
                ?>
                 <div class="tap_in_img">
                  <img src="<?php echo $dir_path; ?>/public/image/fimg.png" class="img-fluid">
                </div>
                <?php
            }
            ?>
              
                <a href="<?= get_the_permalink();?>">
                    <?php the_title()?>
                </a>
                <!-- <h3>Number of Topics Discussed</h3> -->

            </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php __('No News'); ?></p>
        <?php endif; ?>
    
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
            <div class="goto_downicn">
                <a href="#">
                    <img src="<?php echo $dir_path; ?>/public/image/downicn.png" class="img-fluid">
                </a>
            </div>
        </div>
    </div>

</div>
</section>



<?php get_footer();?>