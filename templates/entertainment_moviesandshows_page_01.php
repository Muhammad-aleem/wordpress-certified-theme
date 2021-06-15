<?php
/**
 * Template Name: Entertainment Movies And Shows Page 01
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
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form autocomplete="off">
                    <div class="cf_mov_show_secrch">
                        <h3>Movies and Shows</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control cf_movies_searchinput" placeholder="Type Here to Search Movies and Shows">
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="cf_search_tit">
                                <h3>Search By Genre</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="goto_searchbtn">
                                <input type="submit" name="submit" value="Go">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="nav nav-tabs cf_ent_tabs" id="myTab" role="tablist">
                    <li class="nav-item pl-0">
                        <a class="nav-link active" id="filter_id_tab" data-toggle="tab" href="#filter_id" role="tab" aria-controls="filter_id_tab" aria-selected="true">Filter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new_id_tab" data-toggle="tab" href="#new_id" role="tab" aria-controls="new_id_tab" aria-selected="false">New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="popular_id_tab" data-toggle="tab" href="#popular_id" role="tab" aria-controls="popular_id_tab" aria-selected="false">Popular Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="popular_show_id_tab" data-toggle="tab" href="#popular_show_id" role="tab" aria-controls="popular_show_id_tab" aria-selected="false">Popular Shows</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="highly_id_tab" data-toggle="tab" href="#highly_id" role="tab" aria-controls="highly_id_tab" aria-selected="false">Highly Rated</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="most_shared_id_tab" data-toggle="tab" href="#most_shared_id" role="tab" aria-controls="highly_id_tab" aria-selected="false">Most Shared</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="filter_id" role="tabpanel" aria-labelledby="filter_id_tab">
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div> 
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="tab-pane fade" id="new_id" role="tabpanel" aria-labelledby="new_id_tab">
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div> 
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="popular_id" role="tabpanel" aria-labelledby="popular_id_tab">
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div> 
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="popular_show_id" role="tabpanel" aria-labelledby="popular_show_id_tab">
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div> 
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                    <!--  -->
                    <div class="tab-pane fade" id="highly_id" role="tabpanel" aria-labelledby="highly_id_tab">
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div> 
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                               
                    </div>
                    <!--  -->
                    <div class="tab-pane fade" id="most_shared_id" role="tabpanel" aria-labelledby="most_shared_id_tab">
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div> 
                            <div class="row mb-20">
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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

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
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer();?> 