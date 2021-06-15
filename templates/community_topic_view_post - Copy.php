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
    <div class="row flex-column-reverse flex-sm-row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <img src="<?php echo $dir_path; ?>/public/image/add_image.png" class="img-fluid">
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="cf_search_post_tit">
                <h3>Travel and Experiences > <q>Topic/Keyword</q> Post</h3>
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
                  $get_value = '';
                    if(isset($_GET['topic'])){
                        if(!empty($_GET['topic'])){
                            $topic_value = $_GET['topic']; 
                        }
                        $args = array(  
                            'post_type' => 'community',
                            's' => $topic_value,
                            'post_status' => 'publish',
                            'posts_per_page' => 10, 
                            'order' => 'ASC',
                        );
                       
                    }
                    if(!empty($args)):
                        $loop = new WP_Query( $args ); 
                        $count = $loop->post_count;
                ?>

            <div class="cf_view_compost">
                <h3><?=  $count;?> community topic Post</h3>
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                     if ( $loop->have_posts() ) :
                     while ( $loop->have_posts() ) : $loop->the_post();
                    
                    ?>
                    <tr>
                        <td class="border-0">
                            <h3 class="cf_spot_tit">
                                <a href="<?=  get_the_permalink();?>" class="text-decoration-none text-white">
                                <?php the_title();?>
                            </a>
                            </h3>
                        </td>
                        <td class="border-0 w-50 cf_topc_details">
                            <?php the_content();?>
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
