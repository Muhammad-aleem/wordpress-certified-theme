<?php
/**
 * Template Name: community Alerts page
 * Template Post Type: post, page
 */
if ( !is_user_logged_in() ) {
    wp_redirect(site_url());
    exit();
}

get_header();
$dir_path = get_template_directory_uri(); 
$current_user_id = get_current_user_id();
$comm_user_meta = get_user_meta($current_user_id, 'community_crt_alert', true);
$basurl = home_url().'/community-create-an-alert';
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
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/instragram.png"
                                    class="img-fluid">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/youtube.png"
                                    class="img-fluid al_Hcfyoutube">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/twitter.png"
                                    class="img-fluid al_Hcftitter">
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
                    <h1><span class="al_cfsubcolo">COMMUNITY</span></h1>
                </div>
            </div>
            <div class="col-mg-4 col-md-4 col-sm-12 my-auto cf_mob_center">
            <div class="cf_trv_post_sec">
                    <a href="<?php echo $submitpost?>">
                        <span>
                            <img src="<?php echo $dir_path; ?>/public/image/edit_post.png" class="img-fluid">
                            <span class="cf_trv_post_secredic mr-0 pl-0">
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
    <div class="container mb-50">
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
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="cfslid_b_titi mb-35">
                    <h2>Exchange. Discuss. & Learn from Others</h2>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="cf_alert_tit">
                    <h3>Alerts</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="cf_crt_alert">
                
                    <a href="<?php echo $basurl;?>" class="text-decoration-none">Create
                        an Alert </a>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="cf_alert_line"></div>
            </div>
        </div>
        <?php 
    $get_value ='';
    if(isset($_GET['alert'])){
        if(!empty($_GET['alert'])){
            $get_value =$_GET['alert'];
        }
    
        $args = array(  
            'post_type' => 'community',
            's' => $get_value,
            'post_status' => 'publish',
            'posts_per_page' => 10, 
            'order' => 'ASC',
        );
        $loop = new WP_Query( $args ); 
        if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post();
        
        ?>
        <div class="row mb-40">

            <div class="col-lg-2 col-md-2 col-sm-12 pr-0">
                <div class="cf_alt_user_img">
                    <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 pl-0 pr-0 my-auto">
                <div class="cf_alt_user_details">
                    <p><?php the_content();?>
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 mt-auto pl-0">
                <div class="cf_user_readbtn">
                    <a href="<?php echo get_permalink(get_the_ID());?>" class="text-decoration-none"> Read More </a>
                </div>
            </div>

        </div>

        <?php endwhile;
        else:
            ?>
            <h1 class="text-white">No Post</h1>
            <?php
       endif;
        }
       else{
            if(!empty($comm_user_meta)){
            
                foreach($comm_user_meta as $val){
                    $args = array(  
                        'post_type' => 'community',
                        's' => $val,
                        'post_status' => 'publish',
                        'posts_per_page' =>8,
                        'order' => 'ASC',
                    );
                    $loop = new WP_Query( $args ); 
                    if ( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                      <div class="row mb-40">
                            <div class="col-lg-2 col-md-2 col-sm-12 pr-0">
                                <div class="cf_alt_user_img">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 pl-0 pr-0 my-auto">
                                <div class="cf_alt_user_details">
                                    <p><?php the_content();?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 mt-auto pl-0">
                                <div class="cf_user_readbtn">
                                    <a href="<?php echo get_permalink(get_the_ID());?>" class="text-decoration-none"> Read More </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    endif;
                }

            }
        }
            ?>             
        <?php wp_reset_postdata();
        ?>



    </div>


</section>



<?php get_footer();?>