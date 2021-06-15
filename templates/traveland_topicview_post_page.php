<?php
/**
 * Template Name: Traveland topic view post page
 * Template Post Type: post, page
 */
get_header();
$dir_path = get_template_directory_uri(); 
?>
<section class="al_mainbg">
<div class="container al_Hbannersec_new">
    <div class="row">
        <div class="offset-lg-6 offset-md-6 col-lg-6 col-md-6 col-sm-12">
            <div class="al_hmainicon text-right">
                <ul>
                    <li>
                        <a href="#">
                            <img src="<?php echo $dir_path; ?>/public/image/instragram.png" class="img-fluid">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $dir_path; ?>/public/image/youtube.png" class="img-fluid al_Hcfyoutube">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $dir_path; ?>/public/image/twitter.png" class="img-fluid al_Hcftitter">
                        </a>
                    </li>
                </ul>
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
    <div class="row  flex-column-reverse flex-sm-row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <img src="<?php echo $dir_path; ?>/public/image/add_image.png" class="img-fluid mb-5">
            <img src="<?php echo $dir_path; ?>/public/image/add_image.png" class="img-fluid">
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="cf_search_post_tit">
                <h3>Travel and Experiences > <q>Destination</q> Post</h3>
            </div>
            <form autocomplete="off" role="search" method="get"  action="<?php echo home_url( '/' ); ?>">
                <div class="cf_search_input">
                    <div class="form-group">
                        <input type="text" name="s" class="form-control cf_search-post" placeholder="Type Here to Search Post" required>
                    </div>
                </div>
                <div class="row mb-20">
                    <div class="col-lg-12 col-md-3 col-sm-12">
                        <input type="submit" class="cf_sech_submitbtn" value="Go">
                    </div>
                </div>
            </form>
            <div class="cf_view_compost">
                <h3>Back to <q>Destination</q> List</h3>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="cf_comm_spot_tit">
                        <h4>The Spot</h4>
                        <h2>Dauphin Island</h2>
                        <h3 class="tevl_mb_5">Topic</h3>
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-2 col-md-4 col-sm-12">
                <div class="cf_comm_replies_tit">
                        <h4>Replies	</h4>
                        <span>45</span>
                    </div>
                </div>
            </div>
            <div class="cf_comm_usersec">
                <span class="cf_comm_userimg">
                    <img src="<?php echo $dir_path; ?>/public/image/user_image.png" class="img-fluid">
                </span>
                <span class="cf_comm_username">
                    Username
                </span>
            </div>
            <div class="cf_comm_usercount">
                <span class="cf_comm_usershare">
                    450 Shares
                </span>
                <span class="cf_comm_userliks"> 
                    7.1k Likes
                </span>
                <p>Sep 9, 2020, 8:09 PM</p>
            </div>
            <div class="cf_comm_userpostimg">
                <img src="<?php echo $dir_path; ?>/public/image/post_image.png" class="img-fluid">
            </div>
            <div class="row">
                <div class="col-lg-11 col-md-12 col-sm-12">
                    <div class="cf_comm_userpostimg">
                        <p>
                        Quick birthday getaway to relax on the beach in Dauphin Island. This 
                        is the only thing I remember is taking a boat here 20 years ago for a 
                        high school trip. I have no idea if you can stay on the island and the 
                        beach is accessible from hotel or aif you have to be taken by bought 
                        to the island. Any and all information is appreciated.
                        </p>
                    </div>
                    <div class="al_revicnlils cf_comm_usermb">
                        <ul>
                            <li class="al_revshare pl-0">
                                <a href="#">
                                    <img src="<?php echo $dir_path;?>/public/image/shareicn.png" class="img-fluid"> 
                                </a>
                            </li>
                            <li class="al_revthumbicn">
                                <a href="#">
                                    <img src="<?php echo $dir_path;?>/public/image/thumbicn.png" class="img-fluid"> 
                                </a>
                            </li>
                            <li class="al_revmessageicn">
                                <a href="#">
                                    <img src="<?php echo $dir_path;?>/public/image/messageicn.png" class="img-fluid"> 
                                </a>
                            </li>
                            <li class="al_revfollow">
                                <a href="#">
                                    <img src="<?php echo $dir_path;?>/public/image/follow.png" class="img-fluid"> 
                                </a>
                            </li>
                            <li class="al_revflagicn">
                                <a href="#">
                                    <img src="<?php echo $dir_path;?>/public/image/flagicn.png" class="img-fluid"> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="cf_repli_tit">
                        <h2>Replies</h2>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 pr-0">
                    <div class="cf_repli_img">
                        <img src="<?php echo $dir_path;?>/public/image/user_image.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 pl-0">
                    <div class="cf_replies_des">
                        <div class="al_redate">
                            <span class="al_dtit">
                                Review Date:
                            </span>
                            <span class="al_cfdate">
                                10/20/2020
                            </span>
                        </div>
                        <span class="cf_comm_username ml-0">
                             Username
                        </span>
                        <p>
                        sit amet, consectetur adipiscing elit, sed do eiustempor incididunt ut 
                        labore et dolore magna aliqua. Ut enim ad minveniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex a

                        </p>
                        <div class="al_revicnlils cf_comm_usermb">
                            <ul>
                                <li class="al_revshare pl-0">
                                    <a href="#">
                                        <img src="<?php echo $dir_path;?>/public/image/shareicn.png" class="img-fluid"> 
                                    </a>
                                </li>
                                <li class="al_revthumbicn">
                                    <a href="#">
                                        <img src="<?php echo $dir_path;?>/public/image/thumbicn.png" class="img-fluid"> 
                                    </a>
                                </li>
                                <li class="al_revmessageicn">
                                    <a href="#"  data-toggle="modal" data-target="#cf_replypop_modal">
                                        <img src="<?php echo $dir_path;?>/public/image/messageicn.png" class="img-fluid"> 
                                    </a>
                                </li>
                                <li class="al_revfollow">
                                    <a href="#">
                                        <img src="<?php echo $dir_path;?>/public/image/follow.png" class="img-fluid"> 
                                    </a>
                                </li>
                                <li class="al_revflagicn">
                                    <a href="#">
                                        <img src="<?php echo $dir_path;?>/public/image/flagicn.png" class="img-fluid"> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 pr-0">
                    <div class="cf_repli_img">
                        <img src="<?php echo $dir_path;?>/public/image/user_image.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 pl-0">
                    <div class="cf_replies_des">
                        <div class="al_redate">
                            <span class="al_dtit">
                                Review Date:
                            </span>
                            <span class="al_cfdate">
                                10/20/2020
                            </span>
                        </div>
                        <span class="cf_comm_username ml-0">
                             Username
                        </span>
                        <p>
                        sit amet, consectetur adipiscing elit, sed do eiustempor incididunt ut 
                        labore et dolore magna aliqua. Ut enim ad minveniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex a

                        </p>
                        <div class="al_revicnlils cf_comm_usermb">
                            <ul>
                                <li class="al_revshare pl-0">
                                    <a href="#">
                                        <img src="<?php echo $dir_path;?>/public/image/shareicn.png" class="img-fluid"> 
                                    </a>
                                </li>

                                <li class="al_revthumbicn">
                                    <a href="#">
                                        <img src="<?php echo $dir_path;?>/public/image/thumbicn.png" class="img-fluid"> 
                                    </a>
                                </li>
                                <li class="al_revmessageicn">
                                    <a href="#" data-toggle="modal" data-target="#cf_replypop_modal">
                                        <img src="<?php echo $dir_path;?>/public/image/messageicn.png" class="img-fluid"> 
                                    </a>
                                </li>
                                <li class="al_revfollow">
                                    <a href="#">
                                        <img src="<?php echo $dir_path;?>/public/image/follow.png" class="img-fluid"> 
                                    </a>
                                </li>
                                <li class="al_revflagicn">
                                    <a href="#">
                                        <img src="<?php echo $dir_path;?>/public/image/flagicn.png" class="img-fluid"> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cf_replypop_modal" tabindex="-1" role="dialog" aria-labelledby="cf_replypop_modalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content cf_relies_popbg">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="cf_replypop_modalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 ">
                    <div class="cf_repli_pop_img">
                        <img src="<?php echo $dir_path?>/public/image/user_image.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <div class="cf_replies_pop_des">
                        <div class="al_redate">
                            <span class="al_dtit">
                                Review Date:
                            </span>
                            <span class="al_cfdate">
                                10/20/2020
                            </span>
                        </div>
                        <span class="cf_comm_pop_username ml-0">
                             Username
                        </span>
                        <p>
                        sit amet, consectetur adipiscing elit, sed do eiustempor incididunt ut 
                        labore et dolore magna aliqua. Ut enim ad minveniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex a

                        </p>
                        <div class="al_revicnlils cf_comm_usermb">
                            <ul>
                                <li class="al_revshare pl-0">
                                    <a href="#">
                                        <img src="<?php echo $dir_path?>/public/image/shareicn.png" class="img-fluid"> 
                                    </a>
                                </li>

                                <li class="al_revthumbicn">
                                    <a href="#">
                                        <img src="<?php echo $dir_path?>/public/image/thumbicn.png" class="img-fluid"> 
                                    </a>
                                </li>
                                <li class="al_revmessageicn">
                                    <a href="#" data-toggle="modal" data-target="#cf_replypop_modal">
                                        <img src="<?php echo $dir_path?>/public/image/messageicn.png" class="img-fluid"> 
                                    </a>
                                </li>
                                <li class="al_revfollow">
                                    <a href="#">
                                        <img src="<?php echo $dir_path?>/public/image/follow.png" class="img-fluid"> 
                                    </a>
                                </li>
                                <li class="al_revflagicn">
                                    <a href="#">
                                        <img src="<?php echo $dir_path?>/public/image/flagicn.png" class="img-fluid"> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 pr-0">
                    <div class="cf_repli_pop_img">
                        <img src="<?php echo $dir_path?>/public/image/user_image.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 pl-0">
                        <div class="cf_pop_des">
                            <span class="cf_comm_pop_username ml-0">
                                Username
                            </span>
                            <span class="cf_comm_pop_userreply">
                                Your Reply
                            </span>
                            
                        </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form autocomplete="off">
                        <div class="cf_pop_des">
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="" placeholder="Your Reply...">
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="form-control pop_submitbtn w-25 ml-auto" value="Submit">
                                </div>
                        </div>
                    </form>
                </div>

            </div>
      </div>
    </div>
  </div>
</div>

</section>



<?php get_footer();?> 
