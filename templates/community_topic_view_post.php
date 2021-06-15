<?php
/**
 * Template Name: Community topic post view 
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
    <div class="row flex-column-reverse flex-sm-row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <img src="<?php echo $dir_path; ?>/public/image/add_image.png" class="img-fluid">
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="cf_search_post_tit">
                <h3>Travel and Experiences > <q>Topic/Keyword</q> Post</h3>
            </div>
            <form autocomplete="off" role="search" method="get"  action="<?php echo home_url( '/' ); ?>">
                <div class="cf_search_input">
                    <div class="form-group">
                        <input type="text" name="s" class="form-control cf_search-post" placeholder="Type Here to Search Post" required>
                    </div>
                </div>
                <div class="row mb-20">
                    <div class="col-lg-12 col-md-3 col-sm-12 text-right">
                        <input type="submit" class="cf_sech_submitbtn" name="submit" value="Go">
                    </div>
                </div>
            </form>
            <div class="cf_view_compost">
                <h3>9,171 community topic Post</h3>
            </div>

            <!-- Table -->
            <table class="table ">
                <thead>
                    <tr>
                        <th class="cf_view_folder mb-20 border-0">
                            <h2>Keyword</h2>
                        </th>
                        <th class="cf_view_folder mb-20 border-0">
                            <h2>Topics</h2>
                        </th><th class="cf_view_folder mb-20 border-0">
                            <h2>Replies</h2>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-0">
                            <h3 class="cf_spot_tit">Salons</h3>
                        </td>
                        <td class="border-0 w-50">
                            <p class="cf_topc_details mb-0">My Frist Boxbraid Experience since moving to Miami </p>
                            <a href="#" class="text-decoration-none cf_topc_uname">Username</a>
                        </td>
                        <td class="border-0">
                            <span class="cf_repli_cont">49</span>
                            <span class="cf_repli_icn">
                                <a href="#" class="text-decoration-none">
                                    <img src="<?php echo $dir_path;?>/public/image/alert.png" class="img-fluid alert_icn">
                                </a>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-0">
                            <h3 class="cf_spot_tit">Vegan</h3>
                        </td>
                        <td class="border-0 w-50">
                            <p class="cf_topc_details mb-0">How did you become Vegan, I am trying
and it is very hard</p>
                            <a href="#" class="text-decoration-none cf_topc_uname">Username</a>
                        </td>
                        <td class="border-0">
                            <span class="cf_repli_cont">32</span>
                            <span class="cf_repli_icn">
                                <a href="#" class="text-decoration-none">
                                    <img src="<?php echo $dir_path;?>/public/image/alert.png" class="img-fluid alert_icn">
                                </a>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- /Table -->
        </div>
    </div>
</div>

</section>



<?php get_footer();?> 
