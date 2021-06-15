<?php
/**
 * Template Name: Entertainment Home Page
 * Template Post Type: post, page
 */
get_header();
$dir_path = get_template_directory_uri(); 
?>
<section class="usersett_tem_1_bg">
    <div class="container">
        <div class="row">
            <div class="offset-lg-6 col-lg-6 offset-md-6 col-md-6 col-sm-12">
                <div class="al_hmainicon text-right">
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
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="cf_back_to_tit">
                    <a href="#" class="text-decoration-none">My Tickets</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-9 col-sm-12">
                <div class="cf_back_to_tit">
                    <a href="#" class="text-decoration-none">My Movies and Shows</a>
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
        <div class="row mb-60">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form autocomplete="off">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="cf_event_show_secrch">
                            <h3>Entertainment</h3>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <input type="text" class="form-control cf_movies_searchinput" placeholder="Type Here to Search Entertainment">
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <div class="cf_type_exp mt-0">
                                <div class="form-check form-check-inline d_mobile_block">
                                    <input class="form-check-input" type="radio" name="ent_homepagesearch" id="search_in_city" value="search_in_city">
                                    <label class="form-check-label cf_pl_0 ent_homesectby" for="search_in_city">Search in City</label>
                                </div>
                                <div class="form-check form-check-inline d_mobile_block">
                                    <input class="form-check-input" type="radio" name="ent_homepagesearch" id="event_type_id" value="event_type">
                                    <label class="form-check-label" for="event_type_id">Event Type</label>
                                </div>
                                <div class="form-check form-check-inline d_mobile_block">
                                    <input class="form-check-input" type="radio" name="ent_homepagesearch" id="show_and_movies_id" value="shows_and_movies">
                                    <label class="form-check-label" for="show_and_movies_id">Shows and Movies</label>
                                </div>
                                <div class="form-check form-check-inline d_mobile_block">
                                    <input class="form-check-input" type="radio" name="ent_homepagesearch" id="cf_all_sec" value="all">
                                    <label class="form-check-label" for="cf_all_sec">All</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12">
                            <div class="goto_searchbtn cf_ipad_des">
                                <input type="submit" name="submit" value="Go">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mb-40">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="cf_events">
                    <div class="cf_eventimg">
                        <img src="<?php echo $dir_path?>/public/image/event_img.png" class="img-fluid">
                    </div>
                    <div class="cf_event_details">
                        <h4>Thur, Apr 10th, 2020 at 6pm</h4>
                        <p>Event description and information.X</p>
                        <span>Time Zones</span>
                    </div>
                    <div class="cf_event_viewbtn"> <a href="#" class="text-decoration-none">View More</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="cf_events">
                    <div class="cf_eventimg">
                        <img src="<?php echo $dir_path?>/public/image/event_img.png" class="img-fluid">
                    </div>
                    <div class="cf_event_details">
                        <h4>Thur, Apr 10th, 2020 at 6pm</h4>
                        <p>Event description and information.X</p>
                        <span>Time Zones</span>
                    </div>
                    <div class="cf_event_viewbtn"> <a href="#" class="text-decoration-none">View More</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="cf_events">
                    <div class="cf_eventimg">
                        <img src="<?php echo $dir_path?>/public/image/event_img.png" class="img-fluid">
                    </div>
                    <div class="cf_event_details">
                        <h4>Thur, Apr 10th, 2020 at 6pm</h4>
                        <p>Event description and information.X</p>
                        <span>Time Zones</span>
                    </div>
                    <div class="cf_event_viewbtn"> <a href="#" class="text-decoration-none">View More</a></div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="cf_see_all_evt">
                    <a href="#" class="text-decoration-none">See More Events</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="cf_movies_showtit">
                    <h3>Certified BOC Movie and Show </h3>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="cf_movies_seatit">
                    <h3>Premier Season:  Show Title : Season 8 - E16 </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                    <div class="al_cfmainslider cf_tral_slider cf_movies_tit">
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
            
        <div class="row">
            <div class="col-lg-12  col-md-12 col-sm-12">
                <div class="cf_seeall_movs">
                    <a href="#" class="text-decoration-none">See All Movies and Shows</a>
                </div>
            </div>
        </div>
        <div class="row">
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
        </div>
        <div class="row">
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
                            <img src="<?php echo $dir_path?>/public/image/episode.png" alt="" class="img-fluid">
                        </a>
                    </div>
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
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer();?> 