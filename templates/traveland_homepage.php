<?php
/**
 * Template Name: traveland_homepage
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
            <div class="al_findbustit cf_tral_tit ">
                <h1>Search Discussions</h1>
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
                                <input type="text" name="s" class="form-control al_honebusinput" placeholder="WHAT ARE YOU LOOKING FOR" required>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row trv_mb_20">
        <div class="col-mg-8 col-md-8 col-sm-12">
            <div class="al_cfsubheading cf_subheading cf_mob_center">
                <h1><span class="al_cfsubcolo">Search DIscussions</span></h1>
            </div>
        </div>
        <div class="col-mg-4 col-md-4 col-sm-12 my-auto cf_mob_center">
            <div class="cf_trv_post_sec">
                <a href="<?= $traveland_alert_page;?>">
                    <span>
                        <img src="<?php echo $dir_path; ?>/public/image/edit_post.png" class="img-fluid">
                        <span class="cf_trv_post_secredic mr-0 pl-0">
                        post
                        </span>
                    </span>
                </a>
                <a href="<?= $traveland_alert;?>">
                    <span> 
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
<div class="container mb-50 mb_mob_0">
    <!-- <div class="row">
        <div class="col-md-12">
            <div class="al_cfmainslider cf_tral_slider">
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
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="cfslid_b_titi">
                <h2>Exchange. Discuss. & Learn from Others</h2>
            </div>
        </div>

    </div> -->
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
                                    <p><?= get_the_content();?></p> 
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
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="cf_trv_review_tit">
                <h2>View Travel and Experience 
                    Post by Popular Destinations
                </h2>
            </div>
            <div class="row">
            <?php 
                // the query
                $the_query = new WP_Query( array(
                    'post_type' => 'traveland',
                    'posts_per_page' => -1,
                )); 
            if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post();
                 $get_post_destination = get_post_meta(get_the_ID(), 'cpt_travel_destination_metaval',true);

            ?>
            
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cf_trv_review_list">
                        <ul>
                            <li>
                                <a href="<?= get_the_permalink();?>"><?= $get_post_destination;?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                 endwhile;
                 wp_reset_postdata();
                 endif;
                ?>
            </div>
        </div>

        <div class="offset-lg-2 offset-md-2 col-lg-5 col-md-5 col-sm-12">
            <div class="cf_trv_review_tit">
                <h2>
                    View Travel and Experience 
                    Post by Popular Themes
                </h2>
            </div>

            <div class="row">
            <?php 
                // the query
                $the_query = new WP_Query( array(
                    'post_type' => 'traveland',
                    'posts_per_page' => -1,
                )); 
            if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cf_trv_review_list">
                        <ul>
                            <li>
                                <a href="<?= get_the_permalink();?>"><?= get_the_title();?></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <?php
                 endwhile;
                 wp_reset_postdata();
                 endif;
                ?>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mx-auto text-center">
            <div class="cf_join_heading">
                <h2>TAP IN</h2>
                <span>Popular Destination Forums</span>
            </div>
        </div>
    </div>
    <div class="row mb-40 mb_mob_0" id="ajax-posts">
    <?php 
        // the query
        $the_query = new WP_Query( array(
            'post_type' => 'traveland',
            'posts_per_page' => 3,
        )); 
            if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post();
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

    ?>
        <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
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
                <h3>Discussed <?= $post_review_count?> Time</h3>

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
            <div class="goto_downicn travelread_more">
                <a href="#">
                    <img src="<?php echo $dir_path; ?>/public/image/downicn.png" class="img-fluid">
                </a>
            </div>
        </div>
    </div>

</div>
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
</section>



<?php get_footer();?>