<?php
/**
 * Template Name: Community submit your post  
 * Template Post Type: post, page
 */

if ( !is_user_logged_in() ) {
        wp_redirect(site_url());
        exit();
    }
get_header();
$dir_path = get_template_directory_uri(); 
$submitpost = home_url().'/community-submit-your-post';
$alertpost = home_url().'/community-create-an-alert';
?>
<section class="al_mainbg">
<div class="container al_Hbannersec_new">
    <div class="row">
        <div class="offset-lg-6 offset-md-6 col-lg-6 col-md-6 col-sm-12">
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
        <div class="col-mg-8 col-md-8 col-sm-12">
            <div class="al_cfsubheading cf_subheading cf_mob_center ">
                <h1><span class="al_cfsubcolo">Community</span></h1>
            </div>
        </div>
        <div class="col-mg-4 col-md-4 col-sm-12 my-auto cf_mob_center ">
            <div class="cf_trv_post_sec mb-20">
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
                        <span class="cf_trv_post_secredic mr-0 pl-0" >
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
        <div class="col-lg-12 col-md-12 col-sm-12">
            <p class="cf_tevl_details">Share your thoughts here in the Certificate BOC Community
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 cf_tevl_ptwo_fm">
            <form method="POST"  enctype="multipart/form-data" autocomplete="off">
                <div class="row mb-20">
                    <div class="col-lg-8 col-md-12 col-12">
                        <label for="topic_id" class="the_spottit">Category</label>
                        <input type="text" class="form-control" name="comunty_tag" id="topic_id" placeholder="Type your category here. For example: Beauty, Music, and People" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="com_post_tit" class="fm_post_tit">Post Title</label>
                    <input type="text" class="form-control cf_tevl_pottit" name="comunty_ptit"  id="com_post_tit" placeholder="Add Your Post Title Here" required>
                </div>
                <div class="form-group mb-40">
                    <label for="commtysub_post_details" class="fm_post_tit">Post Your Thoughts Here</label>
                    <textarea class="form-control" id="commtysub_post_details" name="comunty_pcontent" rows="9" placeholder="500 Words Max" required></textarea>
                    <!-- <span class="text_limt" id="com_text_limt">(500 character minimum)</span> -->
                </div>
                <!-- <div class="form-group">
                    <label for="comm_add_post" class="fm_post_tit">Add a tip to help others in the Certified BOC Community</label>
                    <input type="text" class="form-control cf_tevl_pottit" name="comunty_pexcerpt" id="comm_add_post" placeholder="Hotels, Resturants, Events," required>
                </div> -->
                <div class="cf_tevl_poto">
                    <div class="al_cfaddphototext">
                        <div class="cf_uplodeimg">
                            <label>
                            <img src="<?php echo $dir_path;?>/public/image/camara.png" class="img-fluid">
                                    <input type="file" size="60" name="comunty_image">
                            </label> 
                        </div>
                        <h3>(optional)</h3>
                    </div>
                </div>
                <div class="checkbox cf_checkbox_text">
                <input type="checkbox" value="" id="checkboxlable">
                     <label for="checkboxlable">
                         <p>
                            I certify that thoughts shared are based on my own views and experiences and that I have and have not been offered any incentive or payment to do so. Post made by Certified BOC staff accounts are exempt. All posts with monetary commitments must disclose the intent. I understand that Certified BOC has a zero-tolerance policy on posts that violate our community guidelines.
                        </p>
                        <p>
                            <!-- Certified BOC wishes to ensure that reviewers are not affiliated in any way with the establishment they are reviewing. 
                            By checking this box, you certify that you are not employed by the establishment, are not related to anyone 
                            employed there, and do not otherwise have a business or personal relationship with the owners or managers of 
                            this establishment or a competitor that might bias your review. In addition to being a violation of our terms of 
                            service and an unethical practice, committing fraud on reviews is also prohibited by the law and regulations in 
                            many jurisdictions [see (UCP 2005/29/EC) and (FTC 16CFR Part 255)]. Please see our <a href="#" class="text-decoration-none">
                            Content Integrity 
                            Policy
                            </a>  for more information. -->
                            Certified BOC wishes to ensure that all posts are not affiliated in any way with the establishment being discussed. In addition to being a violation of our terms of service and an unethical practice, committing deception on post is also prohibited by the law and regulations in many jurisdictions [see (UCP 2005/29/EC) and (FTC 16CFR Part 255)]. Please see our Content Integrity Policy for more information
                        </p>
                       </label>
                </div>
                <div class="cf_tevl_ptwo_submit w-25 m-auto">
                    <input type="submit" class="form-control mb-40" id="comunty_sunmit_post" name="submitcommpost" value="Submit Your Post">
                </div>
            </form>
        </div>
    </div>
</div>


</section>



<?php get_footer();?>