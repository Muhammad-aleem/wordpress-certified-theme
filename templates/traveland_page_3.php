<?php
/**
 * Template Name: Traveland Search Post
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
        <div class="col-lg-3 col-md-3 col-sm-12">
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
                    <div class="col-lg-12 col-md-3 col-sm-12 text-right">
                        <input type="submit" class="cf_sech_submitbtn" value="Go">
                    </div>
                </div>
            </form>
            <div class="cf_view_compost">
                <h3>Choose a destination below to view community post</h3>
            </div>

            <!-- Table -->
            <table class="table cf_searchtable">
                <thead>
                    <tr>
                        <th class="cf_view_folder mb-20 border-0">
                            <h2>Folders</h2>
                        </th>
                        <th class="cf_view_folder mb-20 border-0">
                            <h2>#Topics</h2>
                        </th><th class="cf_view_folder mb-20 border-0">
                            <h2>#Post</h2>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td  class="border-0 cf_searchpost_radio">
                        <input type="radio" name="test" class="cf_searchpost_radio" />
                        </td>
                        <td class="border-0">
                            <span class="cf_folder_icn">
                                    <img src="<?php echo $dir_path ?>/public/image/folder_icn.png" class="img-fluid">
                            </span>
                            <span class="cf_folder_name">
                                    Destination
                            </span>
                        </td>
                        <td class="border-0">
                            <span class="cf_topc_count">9,171</span>
                        </td>
                        <td class="border-0">
                            <span class="cf_topc_count">49,171</span>
                        </td>
                    </tr>
                    <tr>
                        <td  class="border-0 cf_searchpost_radio">
                            <input type="radio" name="test" class="cf_searchpost_radio" />
                        </td>
                        <td class="border-0">
                            <span class="cf_folder_icn">
                                    <img src="<?php echo $dir_path ?>/public/image/folder_icn.png" class="img-fluid">
                            </span>
                            <span class="cf_folder_name">
                                Alabama
                            </span>
                        </td>
                        <td class="border-0">
                            <span class="cf_topc_count">9,171</span>
                        </td>
                        <td class="border-0">
                            <span class="cf_topc_count">49,171</span>
                        </td>
                    </tr>
                    <tr>
                        <td  class="border-0 cf_searchpost_radio">
                            <input type="radio" name="test" class="cf_searchpost_radio" />
                        </td>
                        <td class="border-0">
                            <span class="cf_folder_icn">
                                    <img src="<?php echo $dir_path ?>/public/image/folder_icn.png" class="img-fluid">
                            </span>
                            <span class="cf_folder_name">
                                Alaska
                            </span>
                        </td>
                        <td class="border-0">
                            <span class="cf_topc_count">9,171</span>
                        </td>
                        <td class="border-0">
                            <span class="cf_topc_count">49,171</span>
                        </td>
                    </tr>
                    <tr>
                        <td  class="border-0 cf_searchpost_radio">
                            <input type="radio" name="test" class="cf_searchpost_radio" />
                        </td>
                        <td class="border-0">
                            <span class="cf_folder_icn">
                                    <img src="<?php echo $dir_path ?>/public/image/folder_icn.png" class="img-fluid">
                            </span>
                            <span class="cf_folder_name">
                                    Arizona
                            </span>
                        </td>
                        <td class="border-0">
                            <span class="cf_topc_count">9,171</span>
                        </td>
                        <td class="border-0">
                            <span class="cf_topc_count">49,171</span>
                        </td>
                    </tr>
                    <tr>
                        <td  class="border-0 cf_searchpost_radio">
                            <input type="radio" name="test" class="cf_searchpost_radio" />
                        </td>
                        <td class="border-0">
                            <span class="cf_folder_icn">
                                    <img src="<?php echo $dir_path ?>/public/image/folder_icn.png" class="img-fluid">
                            </span>
                            <span class="cf_folder_name">
                                Disneyland
                            </span>
                        </td>
                        <td class="border-0">
                            <span class="cf_topc_count">9,171</span>
                        </td>
                        <td class="border-0">
                            <span class="cf_topc_count">49,171</span>
                        </td>
                    </tr>
                    <tr>
                        <td  class="border-0 cf_searchpost_radio">
                            <input type="radio" name="test" class="cf_searchpost_radio" />
                        </td>
                        <td class="border-0">
                            <span class="cf_folder_icn">
                                    <img src="<?php echo $dir_path ?>/public/image/folder_icn.png" class="img-fluid">
                            </span>
                            <span class="cf_folder_name">
                                French Quarters
                            </span>
                        </td>
                        <td class="border-0">
                            <span class="cf_topc_count">9,171</span>
                        </td>
                        <td class="border-0">
                            <span class="cf_topc_count">49,171</span>
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