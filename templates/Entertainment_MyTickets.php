<?php
/**
 * Template Name:Entertainment My Tickets
 * Template Post Type: post, page
 */
get_header();
$dir_path = get_template_directory_uri(); 
?>
<section class="usersett_tem_1_bg">
    <div class="container">
        <div class="row">
            <div class="offset-lg-8 col-lg-4 offset-md-6 col-md-6 col-sm-12">
                <div class="al_hmainicon text-center">
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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="purchmovi_tit mb-20">
                    <h3>Entertainment | <span class="text_color">My Events</span></h3>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="offset-lg-3 col-lg-9 col-md-12 col-sm-12">
                        <ul class="nav nav-tabs cf_ent_tabs cf_movie_myticket_tab" id="myTab" role="tablist">
                            <li class="nav-item pl-0">
                                <a class="nav-link " id="upcoming_events_id_tab" data-toggle="tab" href="#upcoming_events_id" role="tab" aria-controls="upcoming_events_id_tab" aria-selected="true">Upcoming Events (9)<a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="post_event_id_tab" data-toggle="tab" href="#post_event_id" role="tab" aria-controls="post_event_id_tab" aria-selected="false">Past Events (12)</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="cf_mov_purchase_tit">
                            <h2>Upcoming Events</h2>
                            <p>Click Your Event to View Your Ticket..........</p>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="post_event_id" role="tabpanel" aria-labelledby="post_event_id_tab">
                        <div class="row mb-20">
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
                        <div class="row mb-20">
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

                    </div>
                    <div class="tab-pane fade" id="upcoming_events_id" role="tabpanel" aria-labelledby="upcoming_events_id_tab">
                        <div class="row mb-20">
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
                        <div class="row mb-20">
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
                    </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer();?> 