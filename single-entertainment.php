<?php

get_header();
$dir_path = get_template_directory_uri(); 
?>
<section class="usersett_tem_1_bg">
    <div class="container">
        <div class="row">
            <div class="offset-lg-6 col-lg-6 offset-md-6 col-md-6 col-sm-12">
                <div class="al_hmainicon text-right ent_mr">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="<?php echo $dir_path?>/public/image/instragram.png" class="img-fluid">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo $dir_path?>/public/image/youtube.png"
                                    class="img-fluid al_Hcfyoutube">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo $dir_path?>/public/image/twitter.png"
                                    class="img-fluid al_Hcftitter">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
          $get_value = get_post_meta( get_the_ID(), 'purchase_meta_val', true );
          $purchase_text = get_post_meta(get_the_ID(), 'purchase_textmeta_val', true );
          $rent_meta_link = get_post_meta( get_the_ID(), 'rent_meta_val', true );
          $rent_text = get_post_meta( get_the_ID(), 'rent_textmeta_val', true );
          $strFile = get_post_meta( get_the_ID(),'entertainment_video', true);
         
        ?>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="cf_ent_movies_tit">
                    <a href="#" class="text-decoration-none">
                        Go Back to Movies and Shows
                    </a>
                </div>
                <div class="cf_movies_show_tit">
                    <h3><?php the_title();?></h3>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="cf_ent_moves_mt">
                    <div class="cf_ent_moves_tit_des">
                        <a href="<?= (!empty($get_value)) ? ($get_value) :'#';?>" class="text-decoration-none">
                            <?php
                          if(!empty($purchase_text)){
                              echo $purchase_text;
                          }
                          ?>
                        </a>
                    </div>
                    <div class="cf_ent_moves_tit_des">
                        <a href="<?= (!empty($rent_meta_link)) ? ($rent_meta_link) :'#';?>"
                            class="text-decoration-none">
                            <?php
                            if(!empty($rent_text)){
                                echo $rent_text;
                            }
                           ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="cf_movies_show_tit">
                    <h4>Rating</h4>
                </div>
                <div class="cf_infoimg movis_ratingimg movis_mob_ratingimg">
                    <span class="ratingimg_icn"><img src="<?php echo $dir_path;?>/public/image/Certified Icons1.png"
                            alt=""></span>
                    <span class="cf_infoimg2"><img src="<?php echo $dir_path;?>/public/image/Certified Icons2.png"
                            alt="" class="img-fluid"></span>
                    <span class="cf_infoimg2"><img src="<?php echo $dir_path;?>/public/image/Certified Icons3.png"
                            alt="" class="img-fluid"></span>
                    <span class="cf_infoimg2"><img src="<?php echo $dir_path;?>/public/image/Certified Icons1.png"
                            alt="" class="img-fluid"></span>
                    <span class="cf_infoimg2"><img src="<?php echo $dir_path;?>/public/image/Certified Icons2.png"
                            alt="" class="img-fluid"></span>
                    <span class="cf_mov_ratecount">(4.7)</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mt-auto">
                <div class="cf_movies_buss_tit">
                    <h3>Business Name</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mt-auto">
                <div class="cf_movies_ptoject_tit">
                    <h3>Project Credits</h3>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="cf_movies_showimg single_enterment_video">
                    <?php
                 if(!empty($strFile)){
                     ?>
                    <video controls width="100%">
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

                </div>
            </div>
        </div>
        <div class="row mb-40">
            <div class="col-lg-2 col-md-12 col-sm-12">
                <div class="cf_whatch_epi_tit">
                    <a href="#" class="text-decoration-none">Watch This Episode</a>
                </div>
            </div>
            <div class="col-lg-1 col-md-12 col-sm-12">
                <div class="cf_whatch_shar_img">
                    <a href="#" class="text-decoration-none">
                        <img src="<?php echo $dir_path;?>/public/image/sharebtn.png" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-3 col-md-12 col-sm-12">
                <div class="cf_whatch_chose_rat cf_mt_emt">
                    <h3>Choose Your Rating</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="row cf_movies_rat_icn">
                    <div class="col cf_pr_pop_">
                        <span>
                            <a href="#">
                                <img src="<?php echo $dir_path;?>/public/image/Certified Icons1.png" alt=""
                                    class="img-fluid ">
                            </a>
                        </span>
                        <h6>1-Weak</h6>
                    </div>
                    <div class="col cf_pr_pop_ cf_pl_pop_">
                        <span>
                            <a href="#">
                                <img src="<?php echo $dir_path;?>/public/image/Certified Icons2.png" alt=""
                                    class="img-fluid">
                            </a>
                        </span>
                        <h6>2-Aight</h6>
                    </div>
                    <div class="col cf_pr_pop_ cf_pl_pop_">
                        <span>
                            <a href="#">
                                <img src="<?php echo $dir_path;?>/public/image/Certified Icons3.png" alt=""
                                    class="img-fluid">
                            </a>
                        </span>
                        <h6>3-So So</h6>
                    </div>
                    <div class="col cf_pr_pop_ cf_pl_pop_">
                        <span>
                            <a href="#">
                                <img src="<?php echo $dir_path;?>/public/image/Certified Icons1.png" alt=""
                                    class="img-fluid">
                            </a>
                        </span>
                        <h6>4-Legit</h6>
                    </div>
                    <div class="col  cf_pl_pop_">
                        <span>
                            <a href="#">
                                <img src="<?php echo $dir_path;?>/public/image/Certified Icons2.png" alt=""
                                    class="img-fluid">
                            </a>
                        </span>
                        <h6>4-Certified</h6>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts.' ); ?></p>
        <?php endif; ?>


        <div class="row">
            <div class=" mx-auto col-lg-6  col-md-6 col-sm-12">
                <div class="other_movie_tit">
                    <h3>Other Movies You Might Like</h3>
                </div>
            </div>
        </div>

        <?php

        function get_cats_related_post() {

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
                 $strFile = get_post_meta( get_the_ID(),'entertainment_video', true);
                 
                 ?>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="ent_show_episode">
                <span class="ent_show_episodetit">
                    Movie: <?php the_title()?>
                </span>
                <span class="ent_show_episodetime " >
                </span>
                <div class="">
                    <a href="<?= get_the_permalink()?>">
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

            </div>
        </div>
        <?php endwhile;
        
                // Restore original Post Data
                wp_reset_postdata();
             endif;
        
        }
       
       
        ?>
        <div class="row">
            <?php  get_cats_related_post();?>
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
                            <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="ent_show_episode">
                    <span class="ent_show_episodetit">
                        Movie: Movie Title Here
                    </span>
                    <span class="ent_show_episodetime">
                        Duration: 00:00
                    </span>
                    <div class="">
                        <a href="#">
                            <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                        </a>
                    </div>

                </div>
            </div> -->

        </div>
    </div>
</section>




<?php get_footer();?>