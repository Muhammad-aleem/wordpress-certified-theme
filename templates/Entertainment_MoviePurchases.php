<?php
/**
 * Template Name: Entertainment Movie Purchases
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
                   <h3>Entertainment | <span class="text_color">My Movies and Shows</span></h3>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="purchmovi_tit cf_mobile_mt">
                   <h3>Certified BOC Movie and Show Purchases and Rentals</h3>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="offset-lg-3 col-lg-9 col-md-12 col-sm-12">
                        <ul class="nav nav-tabs cf_ent_tabs cf_movie_put_tab" id="myTab" role="tablist">
                            <li class="nav-item pl-0">
                                <a class="nav-link active" id="movie_purchases_id_tab" data-toggle="tab" href="#movie_purchases_id" role="tab" aria-controls="movie_purchases_id_tab" aria-selected="true">Movie Purchases (9)<a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="show_purchases_id_tab" data-toggle="tab" href="#show_purchases_id" role="tab" aria-controls="show_purchases_id_tab" aria-selected="false">Show Purchases (12)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="movie_rentals_tab" data-toggle="tab" href="#movie_rentals" role="tab" aria-controls="movie_rentals_tab" aria-selected="false">Movie Rentals (6)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="show_rentals_id_tab" data-toggle="tab" href="#show_rentals_id" role="tab" aria-controls="show_rentals_id_tab" aria-selected="false">Show Rentals (6)</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="cf_mov_purchase_tit">
                            <h2>Movie Purchases</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="movie_purchases_id" role="tabpanel" aria-labelledby="movie_purchases_id_tab">
                            <div class="row mb-20">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="ent_show_episode">
                                        <span class="ent_show_episodetit">
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                    <div class="tab-pane fade" id="show_purchases_id" role="tabpanel" aria-labelledby="show_purchases_id_tab">
                            <div class="row mb-20">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="ent_show_episode">
                                        <span class="ent_show_episodetit">
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                    <div class="tab-pane fade" id="movie_rentals" role="tabpanel" aria-labelledby="movie_rentals_tab">
                    <div class="row mb-20">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="ent_show_episode">
                                        <span class="ent_show_episodetit">
                                             Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                                            Movie Title Here
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
                    <div class="tab-pane fade" id="show_rentals_id" role="tabpanel" aria-labelledby="show_rentals_id_tab">
                           

                            <div class="row mb-20">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="ent_show_episode">
                                        <span class="ent_show_episodetit">
                                            Movie Title Here
                                        </span>
                                        <span class="ent_show_episodetime">
                                            Duration: 00:00
                                        </span>
                                        <div class="">
                                            <a href="#">
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <span class="cf_expirs_hours">Expires in 48 hours</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="ent_show_episode">
                                        <span class="ent_show_episodetit">
                                            Movie Title Here
                                        </span>
                                        <span class="ent_show_episodetime">
                                            Duration: 00:00
                                        </span>
                                        <div class="">
                                            <a href="#">
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <span class="cf_expirs_hours">Expires in 48 hours</span>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="ent_show_episode">
                                        <span class="ent_show_episodetit">
                                            Movie Title Here
                                        </span>
                                        <span class="ent_show_episodetime">
                                            Duration: 00:00
                                        </span>
                                        <div class="">
                                            <a href="#">
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <span class="cf_expirs_hours">Expires in 48 hours</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-20">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="ent_show_episode">
                                        <span class="ent_show_episodetit">
                                            Movie Title Here
                                        </span>
                                        <span class="ent_show_episodetime">
                                            Duration: 00:00
                                        </span>
                                        <div class="">
                                            <a href="#">
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <span class="cf_expirs_hours">Expires in 48 hours</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="ent_show_episode">
                                        <span class="ent_show_episodetit">
                                            Movie Title Here
                                        </span>
                                        <span class="ent_show_episodetime">
                                            Duration: 00:00
                                        </span>
                                        <div class="">
                                            <a href="#">
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <span class="cf_expirs_hours">Expires in 48 hours</span>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="ent_show_episode">
                                        <span class="ent_show_episodetit">
                                            Movie Title Here
                                        </span>
                                        <span class="ent_show_episodetime">
                                            Duration: 00:00
                                        </span>
                                        <div class="">
                                            <a href="#">
                                                <img src="<?php echo $dir_path;?>/public/image/episode.png" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <span class="cf_expirs_hours">Expires in 48 hours</span>
                                    </div>
                                </div>
                            </div>



                    </div>
                  
            </div>
        </div>
    </div>
</section>




<?php get_footer();?> 