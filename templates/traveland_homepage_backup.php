<?php
/**
 * Template Name: traveland_homepage_backup
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
                <h1><span class="al_cfsubcolo">Search DIscussions</span></h1>
            </div>
        </div>
        <div class="col-mg-4 col-md-4 col-sm-12 my-auto cf_mob_center">
            <div class="cf_trv_post_sec">
                <span>
                        <a href="<?= $traveland_alert_page;?>">
                            <img src="<?php echo $dir_path; ?>/public/image/edit_post.png" class="img-fluid">
                        </a>
                        <a href="<?= $traveland_alert_page;?>" class="cf_trv_post_secredic mr-0">
                            post
                        </a>
                </span>
                <span>
                        <a href="<?= $traveland_alert;?>">
                            <img src="<?php echo $dir_path; ?>/public/image/alert.png" class="img-fluid alert_icn">
                        </a>
                         <a href="<?= $traveland_alert;?>" class="cf_trv_post_secredic mr-0">
                            Alerts 
                        </a>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="container mb-50 mb_mob_0">
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
            <div class="cfslid_b_titi">
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
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cf_trv_review_list">
                        <ul>
                            <li>
                                <a href="#">United States</a>
                            </li>
                            <li>
                                <a href="#">Canada</a>
                            </li>
                            <li>
                                <a href="#">Caribbean</a>
                            </li>
                            <li>
                                <a href="#">Mexico</a>
                            </li>
                            <li>
                                <a href="#">Europe</a>
                            </li>
                            <li>
                                <a href="#">Asia</a>
                            </li>
                            <li>
                                <a href="#">South America</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="cf_trv_review_list">
                        <ul>
                            <li>
                                <a href="#">West Africa</a>
                            </li>
                            <li>
                                <a href="#">Central Afirca</a>
                            </li>
                            <li>
                                <a href="#">East Afirca</a>
                            </li>
                            <li>
                                <a href="#">North Africa</a>
                            </li>
                            <li>
                                <a href="#">South Africa</a>
                            </li>
                             <li>
                                <a href="#">Middle East</a>
                            </li>
                            <li>
                                <a href="#">Australia</a>
                            </li>
                        </ul>
                    </div>

                </div>
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
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cf_trv_review_list">
                        <ul>
                            <li>
                                <a href="#">Birthday Travel</a>
                            </li>
                            <li>
                                <a href="#">Girls Trip</a>
                            </li>
                            <li>
                                <a href="#">Fellas Trip</a>
                            </li>
                            <li>
                                <a href="#">Bridal Shower Trips</a>
                            </li>
                            <li>
                                <a href="#">Bachelor Party Trips</a>
                            </li>
                            <li>
                                <a href="#">Music Fest</a>
                            </li>
                            <li>
                                <a href="#">Air Travel</a>
                            </li>
                            <li>
                                <a href="#">Bus\Train Travel</a>
                            </li>
                             <li>
                                <a href="#">Vacation Rentals</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="cf_trv_review_list">
                        <ul>
                            <li>
                                <a href="#">Family Travel</a>
                            </li>
                            <li>
                                <a href="#">Travel with Pets</a>
                            </li>
                            <li>
                                <a href="#">Road Trips</a>
                            </li>
                            <li>
                                <a href="#">Travel Deals</a>
                            </li>
                            <li>
                                <a href="#">Couples Trips</a>
                            </li>
                             <li>
                                <a href="#">Honeymoons</a>
                            </li>
                            <li>
                                <a href="#">Cruise</a>
                            </li>
                            <li>
                                <a href="#">Hotels</a>
                            </li>
                            <li>
                                <a href="#">Live Events</a>
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
            <div class="cf_join_heading">
                <h2>TAP IN</h2>
                <span>Popular Destination Forums</span>
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