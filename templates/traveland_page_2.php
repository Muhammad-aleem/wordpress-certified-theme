<?php
/**
 * Template Name: Traveland page 02  
 * Template Post Type: post, page
 */
if ( !is_user_logged_in() ) {
    wp_redirect(site_url());
    exit();
}

get_header();
$dir_path = get_template_directory_uri(); 
$traveland_alert =  home_url().'/traveland-create-an-alert';
$traveland_alert_page =  home_url().'/traveland-submit-a-post';



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
                <h1><span class="al_cfsubcolo">Travel and Experience</span></h1>
            </div>
        </div>
        <div class="col-mg-4 col-md-4 col-sm-12 my-auto cf_mob_center ">
            <div class="cf_trv_post_sec mb-20">
                <a href="<?= $traveland_alert_page; ?>">
                    <span>
                        <img src="<?php echo $dir_path; ?>/public/image/edit_post.png" class="img-fluid">
                        <span class="cf_trv_post_secredic mr-0 pl-0">
                            post
                        </span>
                    </span>
                </a>
                <a href="<?= $traveland_alert;?>">
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
        <div class="col-lg-12 col-md-12 col-sm-12">
            <p class="cf_tevl_details"> Help others by sharing your experience with other travelers and 
                community members. The Certified BOC Community Thanks You!
            </p>
        </div>
        <!-- <div class="col-lg-12 col-md-12 col-sm-12">
            <p class="cf_rating_tit">Your Overall Rating of this Experience</p>
        </div> -->
        <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="cf_tevl_reviewimg">
                <span><img src="<?php echo get_template_directory_uri(); ?>/public/image/Certified Icons1.png" alt=""></span>
                <span class="cf_infoimg2"><img src="<?php echo get_template_directory_uri(); ?>/public/image/Certified Icons2.png" alt="" class="img-fluid"></span>
                <span class="cf_infoimg2"><img src="<?php echo get_template_directory_uri(); ?>/public/image/Certified Icons3.png" alt="" class="img-fluid"></span>
                <span class="cf_infoimg2"><img src="<?php echo get_template_directory_uri(); ?>/public/image/Certified Icons1.png" alt="" class="img-fluid"></span>
                <span class="cf_infoimg2"><img src="<?php echo get_template_directory_uri(); ?>/public/image/Certified Icons2.png" alt="" class="img-fluid"></span>
                <span class="cf_ratecount">(4.7)</span>
            </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 cf_tevl_ptwo_fm">
            <form method="POST"  enctype="multipart/form-data" autocomplete="off">
                <div class="row mb-20">
                    <div class="col cf_tek_mt">
                        <input type="text" class="form-control" placeholder="Place City or Destination" name="travel_destination" required>
                    </div>
                    <div class="col">
                        <label for="the_spot" class="the_spottit">The Spot</label>
                        <input type="text" class="form-control" id="the_spot" placeholder="Hotels, Resturants, Events," name="travel_the_spot" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="post_tit" class="fm_post_tit">Post Title</label>
                    <input type="text" class="form-control cf_tevl_pottit" id="post_tit" name="travel_post_tit" placeholder="Hotels, Resturants, Events," required>
                </div>
                <div class="form-group">
                    <label for="post_details" class="fm_post_tit">Post Your Experience Here</label>
                    <textarea class="form-control" id="post_details" rows="9" name="travel_post_detsils" placeholder="Hotels, Resturants, Events," required></textarea>
                    <span class="text_limt">(100 character minimum)</span>
                </div>
                <div class="cf_type_exp mb-40">
                    <h3>What Type of Experience was this?</h3>
                    <!-- <span class="cf_pl_0"> <a href="#">Couple</a></span> 
                    <span> <a href="#">Family</a></span>
                    <span> <a href="#">Friends</a></span>
                    <span> <a href="#">Solo</a></span>
                    <span> <a href="#">Business</a></span> -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="trv_experience" id="Couple" value="couple">
                        <label class="form-check-label cf_pl_0" for="Couple">Couple</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="trv_experience" id="family" value="family">
                        <label class="form-check-label" for="family">Family</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="trv_experience" id="Friends" value="friends">
                        <label class="form-check-label" for="Friends">Friends</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="trv_experience" id="Solo" value="solo">
                        <label class="form-check-label" for="Solo">Solo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="trv_experience" id="Business" value="business">
                        <label class="form-check-label" for="Business">Business</label>
                    </div>
                </div>
                <div class="cf_type_exp mt-0 mb-40">
                    <h3>How expensive was the experience, trip, or accomodation?</h3>
                    <!-- <span class="cf_pl_0"> <a href="#">$ Affordable</a></span> 
                    <span> <a href="#">$$ Mid-Range</a></span>
                    <span> <a href="#">$$$ Above Average</a></span>
                    <span> <a href="#">$$$$ Lux</a></span> -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="accomodationname" id="affordable_id" value="affordable">
                        <label class="form-check-label cf_pl_0" for="affordable_id">$ Affordable</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="accomodationname" id="mid_range_id" value="mid_range">
                        <label class="form-check-label" for="mid_range_id">$$ Mid-Range</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="accomodationname" id="above_average_id" value="above_average">
                        <label class="form-check-label" for="above_average_id">$$$ Above Average</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="accomodationname" id="lux_id" value="lux">
                        <label class="form-check-label" for="lux_id">$$$$ Lux</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="post_tit" class="fm_post_tit">Add a tip to help others in the Certified BOC Community</label>
                    <input type="text" class="form-control cf_tevl_pottit" id="post_tit" name="travel_exp_community" placeholder="Hotels, Resturants, Events,">
                </div>
                <div class="cf_tevl_poto">
                    <div class="al_cfaddphototext">
                        <div class="cf_uplodeimg">
                            <label>
                            <img src="<?php echo $dir_path;?>/public/image/camara.png" class="img-fluid">
                                    <input type="file" size="60" name="travel_image">
                            </label> 
                        </div>
                        <h3>(optional)</h3>
                    </div>
                </div>
                <div class="checkbox cf_checkbox_text">
                <input type="checkbox" value="">
                     <label>
                         <p>
                            I certify that this review is based on my own experience and is my genuine opinion of this experience, and that I have 
                            no personal or business relationship with the experince being reviewed, and have not been offered any incentive or 
                            payment originating from the establishment to write this review. I understand that Tripadvisor has a zero-tolerance 
                            policy on fake reviews.
                        </p>
                        <p>
                            Certified BOC wishes to ensure that reviewers are not affiliated in any way with the establishment they are reviewing. 
                            By checking this box, you certify that you are not employed by the establishment, are not related to anyone 
                            employed there, and do not otherwise have a business or personal relationship with the owners or managers of 
                            this establishment or a competitor that might bias your review. In addition to being a violation of our terms of 
                            service and an unethical practice, committing fraud on reviews is also prohibited by the law and regulations in 
                            many jurisdictions [see (UCP 2005/29/EC) and (FTC 16CFR Part 255)]. Please see our <a href="#" class="text-decoration-none">
                            Content Integrity 
                            Policy
                            </a>  for more information.
                        </p>
                       </label>
                </div>
                <div class="cf_tevl_ptwo_submit w-25 m-auto">
                    <input type="submit" class="form-control" name="submit_trv_post" value="Submit Your Post">
                </div>
            </form>
        </div>
    </div>
</div>


</section>



<?php get_footer();?>