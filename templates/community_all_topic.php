<?php
/**
 * Template Name: Community All Topic
 * Template Post Type: post, page
 */
get_header();
$dir_path = get_template_directory_uri(); 
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
                        <img src="<?php echo $dir_path; ?>/public/image/single_comm/comm1.png" alt="">
                    </div>
                    <div class="">
                        <img src="<?php echo $dir_path; ?>/public/image/single_comm/comm2.png" alt="">
                    </div>
                    <div class="">
                        <img src="<?php echo $dir_path; ?>/public/image/single_comm/comm3.png" alt="">
                    </div>
                    <div class="">
                        <img src="<?php echo $dir_path; ?>/public/image/single_comm/comm4.png" alt="">
                    </div>
                </div>
        </div>
    </div>
    <div class="row flex-column-reverse flex-sm-row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <img src="<?php echo $dir_path; ?>/public/image/add_image.png" class="img-fluid">
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="cf_search_post_tit">
                <h3>Community > <q>Topic/Keyword</q> Post</h3>
            </div>
            <form autocomplete="off" role="search" method="get"  action="<?php echo home_url( '/' ); ?>">
                <div class="cf_search_input">
                    <div class="form-group">
                        <input type="text" name="s" class="form-control cf_search-post" placeholder="Type Here to Search Post" required>
                        <input type="hidden" name="post_type" value="community" />
                    </div>
                </div>
                <div class="row mb-20">
                    <div class="col-lg-12 col-md-3 col-sm-12 text-right">
                        <input type="submit" class="cf_sech_submitbtn" name="submit" value="Go">
                    </div>
                </div>
            </form>
            <?php

                global $wpdb;
                $thiskeyword = $_GET['topic'];
                $table_name = $wpdb->prefix . "trending_hash_tags";
                $table_name2 = $wpdb->prefix . "trending_tags_relaction";
                $results = $wpdb->get_results( "SELECT * FROM $table_name WHERE keyword='$thiskeyword'");
                $keyword_id = $results[0]->id;
                $trending_post_ids = array();
                $results2 = $wpdb->get_results( "SELECT * FROM $table_name2 WHERE keyword_id=$keyword_id"); 
                if(!empty($results2)){
                    foreach($results2 as $dataPosts){
                        $trending_post_ids[]=$dataPosts->post_id;
                    }
                    $trending_post_ids = array_unique($trending_post_ids);
                }
                //print_r($trending_post_ids);

                  $get_value = '';
                    if(isset($_GET['topic'])){
                        if(!empty($_GET['topic'])){
                            $topic_value = $_GET['topic']; 
                        }
                        $args = array(  
                            'post_type' => array('community','traveland'),
                            'post__in'  => $trending_post_ids
                        );
                       
                    }
                    if(!empty($args)):
                        $loop = new WP_Query( $args ); 
                        $count = $loop->post_count;
                ?>

            <div class="cf_view_compost">
                <h3><?=  $count;?>  topic Post</h3>
            </div>

            <!-- Table -->
            <table class="table ">
                <thead>
                    <tr>
                        <th class="cf_view_folder mb-20 border-0">
                            <h2>Keyword</h2>
                        </th>
                        <th class="cf_view_folder mb-20 border-0">
                            <h2>Topics</h2>
                        </th>
                        </th><th class="cf_view_folder mb-20 border-0">
                            <h2>Replies</h2>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     if ( $loop->have_posts() ) :
                     while ( $loop->have_posts() ) : $loop->the_post();
                      // Show the review post count
                      $post_type = get_post_field('post_type', get_the_ID());
                      
                        $getprev_review = get_post_meta(get_the_ID(), 'community_post_reviews', true);


                        
                        if($post_type == 'traveland'){
                            $getprev_review = get_post_meta(get_the_ID(), 'traveland_post_reviews', true);
                        }
                        if(!empty($getprev_review)){
                            $post_review_count = count($getprev_review);
                        }
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
                    <tr>
                        <td class="border-0">
                            <h3 class="cf_spot_tit">
                            <?= $topic_value;?>
                            </h3>
                        </td>
                        <td class="border-0 w-50 cf_topc_details">
                        <a href="<?=  get_the_permalink();?>" class="text-decoration-none text-white">
                            <?php the_title();?><br>
                            <?php 
                                $author_id = get_post_field( 'post_author', $trending_post_ids);
                                 $author_name = get_the_author_meta('user_nicename', $author_id);
                            ?>
                            <a href="<?= get_author_posts_url($author_id)?>" class="text-decoration-none cf_topc_uname"> <?php  echo $author_name; ?></a>
                        </a>
                       
                        </td>
                        <td class="border-0">
                            <span class="cf_repli_cont"><?= $post_review_count;?></span>
                        </td>
                    </tr>
                    <?php endwhile;?>
                    <?php else: ?>
                        <th class="cf_view_folder mb-20 border-0">
                            <h2>No Topics</h2>
                        </th>
                    <?php
                    ?>
                    <?php endif?>
                    <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <th class="cf_view_folder mb-20 border-0">
                            <h2 class="cf_topc_uname">No Topics</h2>
                        </th>
                    <?php endif?>
                  
                    
                </tbody>
            </table>
            <!-- /Table -->
        </div>
    </div>
</div>

</section>



<?php get_footer();?>