<?php
get_header();
$dir_path = get_template_directory_uri(); 
?>
<section class="usersett_tem_1_bg">
    <div class="container">
        <div class="row">
            <div class="offset-lg-8 col-lg-4 offset-md-6 col-md-6 col-sm-12">
                <div class="al_hmainicon text-center">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="<?php echo $dir_path?>/public/image/instragram.png" class="img-fluid">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo $dir_path?>/public/image/youtube.png" class="img-fluid al_Hcfyoutube">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo $dir_path?>/public/image/twitter.png" class="img-fluid al_Hcftitter">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row ent_p1mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="purchmovi_tit mb-20">
                    <h3>Go Back to All Events</h3>
                </div>
            </div>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            $start_date = get_post_meta( get_the_ID(), 'event_start_date_meta_val', true );
            $event_end_date = get_post_meta( get_the_ID(), 'event_end_date_meta_val', true );
            $event_start_time = get_post_meta( get_the_ID(), 'event_start_time_meta_val', true );
            $event_end_time = get_post_meta( get_the_ID(), 'event_end_time_meta_val', true );
            $event_location = get_post_meta( get_the_ID(), 'event_location_meta_val', true );
            $event_calendar_link = get_post_meta( get_the_ID(), 'event_calendar_meta_val', true );
            if(!empty($event_start_time)){
                $echo_event_start_time = strtotime($event_start_time);
              }
            if(!empty($event_end_time)){
                $echo_event_end_time = strtotime($event_start_time);
            }
            $thumbtop_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($thumbtop_id, 'thumbnail-size', true);
        ?>



        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="evnt_eventpage">
                    <img src="<?= ($image_url != '') ? ($image_url[0]) : $dir_path.'/public/image/tickespage.png'?>" class="img-fluid">
                    <a href="#" class="text-decoration-none mt-auto">BUY TICKETS</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="cf_evenytdatetime">
                    <h6>Date And Time</h6>
                    <h6 class="mb_cf_evnt_10"><?= ($start_date != '') ? date("l j F Y", strtotime($start_date)) : '' ?>, <?= date("h.i A", $echo_event_start_time);?>-</h6>
                    <h6><?= ($event_end_date != '') ? date("l j F Y", strtotime($event_end_date)) : '' ?>, <?= date("h.i A", $echo_event_end_time);?> PDT</h6>
                    <a href="<?= ($event_calendar_link != '') ? ($event_calendar_link) : '' ?>">Add to Calendar</a>
                </div>
            </div>
            <div class="col-lg-1 col-md-12 col-sm-12">
                <div class="cf_whatch_shar_img">
                    <a href="#" class="text-decoration-none">
                         <img src="<?php echo $dir_path?>/public/image/sharebtn.png" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="cf_evenytlocation">
                    <h6><?= ($event_location != '') ? ($event_location) : '' ?></h6>
                    <h6>Online Event</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="cf_evenybname">
                    <h6>Business Name</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="cf_evntpage_tit">
                    <h3><?php the_title();?></h3>
                    <?php $content = get_the_content();$content = preg_replace("/<img[^>]+\>/i", " ", $content); $content = preg_replace("/\[caption.*\[\/caption\]/", '', $content);$content = apply_filters('the_content', $content);$content = str_replace(']]>', ']]>', $content);echo $content;?>
                </div>
            </div>
         </div>
         <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts.' ); ?></p>
        <?php endif; ?> 
         <div class="row">   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="cf_refund_sec mb-2">
                    <a href="javascript:void(0)" class="text-decoration-none">Refund Policy</a>
                </div>
                <!-- <div class="cf_refund_sec mb-3">
                    <a href="#" class="text-decoration-none">Contact the organizer to request a refund.</a>
                </div> -->
                <div class="cf_refund_sec cf_refund_sec_mb">
                    <a href="javascript:void(0)" class="text-decoration-none"><?php echo get_theme_mod('eventy_refund_policy_text');?></a>
                </div>
            </div>
        </div>


        <?php
        function getevent__cats_related_post() {

            $post_id = get_the_ID();
            $cat_ids = array();
            $categories = get_the_category( $post_id );
        
            if(!empty($categories) && is_wp_error($categories)):
                foreach ($categories as $category):
                    array_push($cat_ids, $category->term_id);
                endforeach;
            endif;
        
            $current_post_type = get_post_type($post_id);
            $query_args = array( 
        
                'category__in'   => $cat_ids,
                'post_type'      => $current_post_type,
                'post__not_in'    => array($post_id),
                'posts_per_page'  => '3'
             );
        
            $related_cats_post = new WP_Query( $query_args );
        
            if($related_cats_post->have_posts()):
                 while($related_cats_post->have_posts()): $related_cats_post->the_post(); 
                 $thumbtop_id = get_post_thumbnail_id();
                 $related_image_url = wp_get_attachment_image_src($thumbtop_id, 'thumbnail-size', true);
                 $start_date = get_post_meta( get_the_ID(), 'event_start_date_meta_val', true );

                 $event_end_time = get_post_meta( get_the_ID(), 'event_end_time_meta_val', true );
                 $event_start_time = get_post_meta( get_the_ID(), 'event_start_time_meta_val', true );
                 if(!empty($event_start_time)){
                    $echo_event_start_time = strtotime($event_start_time);
                  }
                 $show_related_post_image = null;
                 if(!empty($related_image_url)){
                    $show_related_post_image = $related_image_url[0];
                 }else{
                    $related_image_url =  $dir_path.'/public/image/event_img.png';
                 }


                 ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="cf_events">
                            <div class="cf_eventimg">
                                <a href="<?php get_the_permalink();?>">
                                    <img src="<?= $show_related_post_image;?>" class="img-fluid">
                                </a>
                            </div>
                            <div class="cf_event_details">
                                <h4><?= ($start_date != '') ? date("l j F Y", strtotime($start_date)) : '' ?> at <?= date("h.i A", $echo_event_start_time);?></h4>
                                <p>
                                <?php 
                                  echo wp_trim_words( get_the_content(), 7 );
                                ?>
                                </p>
                            </div>
                            <div class="cf_event_viewbtn"> <a href="<?= get_the_permalink();?>" class="text-decoration-none">View More</a></div>
                        </div>
                    </div>
                <?php endwhile;
        
                // Restore original Post Data
                wp_reset_postdata();
             endif;
        
        }
        
        
        ?>


        <div class="row mb-40">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="cf_morevnt_tit">
                    <h3>More Events You Might Be Instrest in..........</h3>
                </div>
            </div>
            <?php getevent__cats_related_post();?>
        </div>
        <div class="row">
            <div class="col-lg-12  col-md-12 col-sm-12">
                <div class="other_movieshow_tit">
                    <h3>Movies and Shows You Might be Interested in......</h3>
                </div>
            </div>
        </div>
        <div class="row">

        <?php
            $query_args = array(  
                'post_type' => 'entertainment',
                'post_status' => 'publish',
                'posts_per_page' => 3, 
                'orderby' => 'title', 
                'order' => 'ASC', 
            );
            $related_cats_post = new WP_Query( $query_args );

            if($related_cats_post->have_posts()):
                while($related_cats_post->have_posts()): $related_cats_post->the_post(); 
                $strFile = get_post_meta( get_the_ID(),'entertainment_video', true);
                ?>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="ent_show_episode">
                            <span class="ent_show_episodetit">
                                Movie: <?php the_title();?>
                            </span>
                            <span class="ent_show_episodetime">
                            </span>
                            <div class="">
                                <a href="<?= get_the_permalink();?>">
                                <?php
                                if(!empty($strFile)){
                                    ?>
                                    <video controls width="100%" id="ent_related_videos">
                                        <source src="<?= $strFile;?>" type="video/webm">
                                        <source src="<?= $strFile;?>" type="video/mp4">
                                        Sorry, your browser doesn't support embedded videos.
                                    </video>
                                    <?php
                                    }else{
                                        ?>
                                            <img src="<?php echo $dir_path?>/public/image/movies_show_image.png" class="img-fluid">
                                        <?php
                                    }
                                ?>
                                </a>
                            </div>
                            <!-- <span class="cf_rentl_price">Rental $ 4.99</span> -->
                    </div>
                </div>
                <?php


               endwhile;
                    wp_reset_postdata();
             endif;    

        ?>

            <!-- <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="ent_show_episode">
                    <span class="ent_show_episodetit">
                        Movie: Movie Title Here
                    </span>
                    <span class="ent_show_episodetime">
                        Duration: 00:00
                    </span>
                    <div class="">
                        <a href="#">
                            <img src="<?php echo $dir_path?>/public/image/episode.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <span class="cf_rentl_price">Rental $ 4.99</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="ent_show_episode">
                    <span class="ent_show_episodetit">
                    Show: Show Title
                    </span>
                    <span class="ent_show_episodetime">
                        Duration: 00:00
                    </span>
                    <div class="">
                        <a href="#">
                            <img src="<?php echo $dir_path?>/public/image/episode.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <span class="cf_rentl_price">Rental $ 4.99</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="ent_show_episode">
                    <span class="ent_show_episodetit">
                    Show: Show Title
                    </span>
                    <span class="ent_show_episodetime">
                        Duration: 00:00
                    </span>
                    <div class="">
                        <a href="#">
                            <img src="<?php echo $dir_path?>/public/image/episode.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <span class="cf_rentl_price">Rental $ 4.99</span>
                </div>
            </div> -->

        </div>

    </div>
</section>




<?php get_footer();?> 