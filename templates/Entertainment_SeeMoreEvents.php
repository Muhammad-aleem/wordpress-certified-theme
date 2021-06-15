<?php
/**
 * Template Name: Entertainment See More Events
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
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="cf_back_to_tit">
                    <a href="#" class="text-decoration-none">Back to Entertainment</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12">
                <div class="cf_back_to_tit">
                    <a href="#" class="text-decoration-none">My Tickets</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
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
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="cf_event_show_secrch">
                            <h3>Search Events by <span class="text_color">City</span></h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="swit_city_text">
                            <h3>switch city</h3>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <input type="text" class="form-control cf_movies_searchinput" placeholder="Type Here to Search Movies and Shows">
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <div class="cf_type_exp mt-0">
                                <div class="form-check form-check-inline d_mobile_block">
                                    <input class="form-check-input" type="radio" name="inlineRadio" id="today" value="today">
                                    <label class="form-check-label cf_pl_0" for="today">Today</label>
                                </div>
                                <div class="form-check form-check-inline d_mobile_block">
                                    <input class="form-check-input" type="radio" name="inlineRadio" id="tomorrow" value="tomorrow">
                                    <label class="form-check-label" for="tomorrow">Tomorrow</label>
                                </div>
                                <div class="form-check form-check-inline d_mobile_block">
                                    <input class="form-check-input" type="radio" name="inlineRadio" id="the_weekend" value="the_weekend">
                                    <label class="form-check-label" for="the_weekend">The Weekend</label>
                                </div>
                                <div class="form-check form-check-inline d_mobile_block">
                                    <input class="form-check-input" type="radio" name="inlineRadio" id="music" value="music">
                                    <label class="form-check-label" for="music">Music</label>
                                </div>
                                <div class="form-check form-check-inline d_mobile_block">
                                    <input class="form-check-input" type="radio" name="inlineRadio" id="culture" value="culture">
                                    <label class="form-check-label" for="culture">Culture</label>
                                </div>
                                <div class="form-check form-check-inline d_mobile_block">
                                    <input class="form-check-input" type="radio" name="inlineRadio" id="food" value="food">
                                    <label class="form-check-label" for="food">Food</label>
                                </div>
                                <div class="form-check form-check-inline d_mobile_block">
                                    <input class="form-check-input" type="radio" name="inlineRadio" id="religious" value="religious">
                                    <label class="form-check-label" for="religious">Religious</label>
                                </div>
                                <div class="form-check form-check-inline d_mobile_block">
                                    <input class="form-check-input" type="radio" name="inlineRadio" id="free" value="free">
                                    <label class="form-check-label" for="free">Free</label>
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
        </div>
        <div class="row mb-evnt_90">
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
        </div>
        
        <div class="row">
            <div class="col-lg-12  col-md-12 col-sm-12">
                <div class="other_movieshow_tit">
                    <h3>Movies and Shows you might be instrest in</h3>
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
    </div>
</section>




<?php get_footer();?> 