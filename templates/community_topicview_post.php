<?php
/**
 * Template Name: Community topic view post
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
    <div class="row row flex-column-reverse flex-sm-row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <img src="<?php echo $dir_path; ?>/public/image/add_image.png" class="img-fluid mb-5">
            <img src="<?php echo $dir_path; ?>/public/image/add_image.png" class="img-fluid">
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="cf_search_post_tit">
                <h3>Community > <q>Topic/Keyword</q> Post</h3>
            </div>
            <form autocomplete="off" role="search" method="get"  action="<?php echo home_url( '/' ); ?>">
                <div class="cf_search_input">
                    <div class="form-group">
                        <input type="text" name="s" class="form-control cf_search-post" placeholder="Type Here to Search Post" required>
                    </div>
                </div>
                <div class="row mb-20">
                    <div class="col-lg-12 col-md-3 col-sm-12 text-right">
                        <input type="submit" class="cf_sech_submitbtn" value="Go">
                    </div>
                </div>
            </form>
            <div class="cf_view_compost">
                <h3>Back to <q>Topic/Keyword</q> List</h3>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="cf_comm_spot_tit">
                        <h4>The Spot</h4>
                        <h2>The Braid Shop Miami</h2>
                        <h3>Topic</h3>
                        <p>My Frist Boxbraid Experience since moving to Miami </p>
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
                    1050 Shares
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
                            I am so use to by braiders in New York so this was a very different 
                            experience. I like my braids but I truly miss New York, does anyone
                            know people in New York that can help me?
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
            </div>

        </div>
    </div>
</div>

</section>



<?php get_footer();?>