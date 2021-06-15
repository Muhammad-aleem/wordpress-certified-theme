<?php
/**
 * Template Name: community_main_page_backup
 * Template Post Type: post, page
 */
get_header();
$dir_path = get_template_directory_uri(); 

$submitpost = home_url().'/community-submit-your-post';
$alertpost = home_url().'/community-create-an-alert';
?>
<section class="al_mainbg">
<div class="container al_Hbannersec_new">
    <div class="row">
        <div class="col-md-6 col-sm-12 my-auto">
            <div class="al_findbustit cf_tral_tit ">
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
                    <div class="row no-gutters">
                        <div class="col">
                        <input type="text" class="form-control al_honebusinput" placeholder="TYPE OF BUSINESS YOU ARE LOOKING FOR">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control al_cfhomezipsearch" placeholder="ZIP CODE OR CITY">
                            <div class="alsimg">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/search.png" class="img-fluid al_Hcftitter">

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row trv_mb_20">
        <div class="col-mg-8 col-md-8 col-sm-12">
            <div class="al_cfsubheading cf_subheading cf_mob_center">
                <h1><span class="al_cfsubcolo">Community</span></h1>
            </div>
        </div>
        <div class="col-mg-4 col-md-4 col-sm-12 my-auto cf_mob_center">
            <div class="cf_trv_post_sec">

                <span>
                        <a href="<?php echo $submitpost?>">
                            <img src="<?php echo $dir_path; ?>/public/image/edit_post.png" class="img-fluid">
                        </a>
                        <a href="<?php echo $submitpost?>" class="cf_trv_post_secredic mr-0">
                            post
                        </a>
                       
                </span>
                <span class="cf_alerticn">
                        <a href="<?php echo $alertpost?>">
                            <img src="<?php echo $dir_path; ?>/public/image/alert.png" class="img-fluid alert_icn">
                        </a>
                        <a href="<?php echo $alertpost?>" class="cf_trv_post_secredic mr-0">
                            Alerts 
                        </a>
                       
                </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
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
                <div class="al_redate">
                    <span class="al_dtit">
                        Review Date:
                    </span>
                    <span class="al_cfdate">
                        10/20/2020
                    </span>
                </div>
                <div class="row mb-10">
                    <div class="col-md-6">
                        <div class="al_reviewimg">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/reviewimg.png" class="img-fluid">
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, sint. Voluptatum..</p>

                                <a href="#" class="al_cfrmpost">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="al_redate">
                    <span class="al_dtit">
                        Review Date:
                    </span>
                    <span class="al_cfdate">
                        10/20/2020
                    </span>
                </div>
                <div class="row mb-10">
                    <div class="col-md-6">
                        <div class="al_reviewimg">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/reviewimg.png" class="img-fluid">
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, sint. Voluptatum..</p>

                                <a href="#" class="al_cfrmpost">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="al_redate">
                    <span class="al_dtit">
                        Review Date:
                    </span>
                    <span class="al_cfdate">
                        10/20/2020
                    </span>
                </div>
                <div class="row mb-10">
                    <div class="col-md-6">
                        <div class="al_reviewimg">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/reviewimg.png" class="img-fluid">
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, sint. Voluptatum..</p>

                                <a href="#" class="al_cfrmpost">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-5 offset-md-1 col-md-5 col-sm-12">
                <div class="cf_trv_review_tit">
                    <h2>
                        View Community Post 
                        by Popular Themes
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="cf_trv_review_list">
                            <ul>
                                <li>
                                    <a href="#">Music</a>
                                </li>
                                <li>
                                    <a href="#">Celebrity News</a>
                                </li>
                                <li>
                                    <a href="#">Marriage</a>
                                </li>
                                <li>
                                    <a href="#">Relationships</a>
                                </li>
                                <li>
                                    <a href="#">Parenting</a>
                                </li>
                                <li>
                                    <a href="#">Films</a>
                                </li>
                                <li>
                                    <a href="#">Fashion</a>
                                </li>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                                <li>
                                    <a href="#">Beauty</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cf_trv_review_list">
                            <ul>
                                <li>
                                    <a href="#">Rental</a>
                                </li>
                                <li>
                                    <a href="#">Technology</a>
                                </li>
                                <li>
                                    <a href="#">Politics</a>
                                </li>
                                <li>
                                    <a href="#">Childcare</a>
                                </li>
                                <li>
                                    <a href="#">Fitness and Weight Loss</a>
                                </li>
                                <li>
                                    <a href="#">New Love</a>
                                </li>
                                <li>
                                    <a href="#">Small Business</a>
                                </li>
                                <li>
                                    <a href="#">Shows</a>
                                </li>
                                <li>
                                    <a href="#">Deals</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 mx-auto cf_trav_pl_0">
                        <div class="cf_trv_reviewall">
                            <a href="#">See All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mx-auto text-center">
            <div class="cf_join_heading mt_mob_mt_10">
                <h2>TAP IN</h2>
                <span>Popular Community Topics</span>
            </div>
        </div>
    </div>
    <div class="row mb-40 mb_mob_0 ">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_tev_join_content">
                <img src="<?php echo $dir_path; ?>/public/image/fimg.png" class="img-fluid">
                <a href="#">
                    Destination Title Link
                </a>
                <h3>Number of Topics Discussed</h3>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_tev_join_content">
                <img src="<?php echo $dir_path; ?>/public/image/fimg.png" class="img-fluid">
                <a href="#">
                    Destination Title Link
                </a>
                <h3>Number of Topics Discussed</h3>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_tev_join_content">
                <img src="<?php echo $dir_path; ?>/public/image/fimg.png" class="img-fluid">
                <a href="#">
                    Destination Title Link
                </a>
                <h3>Number of Topics Discussed</h3>

            </div>
        </div>
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