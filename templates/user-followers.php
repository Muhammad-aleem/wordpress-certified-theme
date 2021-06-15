<?php
/**
 * Template Name: User Followers 
 * Template Post Type: post, page
 */
get_header();
$get_path = get_template_directory_uri();
?>

<section class="usersett_tem_1_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="al_findbustit">
                    <h1>Find A Business</h1>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="al_hmainicon text-right">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="<?php echo $get_path?>/public/image/instragram.png" class="img-fluid">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo $get_path?>/public/image/youtube.png" class="img-fluid al_Hcfyoutube">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo $get_path?>/public/image/twitter.png" class="img-fluid al_Hcftitter">
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
    </div>
    <div class="container cf_useracount_pt_30">
        <div class="row">
            <div class="offset-lg-2  col-lg-6 col-md-8 col-sm-12">
                <form autocomplete="off">
                    <div class="row">
                        <div class="col-lg-10 col-md-12 col-sm-12 cf_user_follower_tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active friend_pr_70" id="friend_tab" data-toggle="tab" href="#friend_tab_home" role="tab" aria-controls="friend_tab" aria-selected="true">Friends</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link follow_pr_70" id="followers-tab" data-toggle="tab" href="#followers-tab_id" role="tab" aria-controls="profile" aria-selected="false">Followers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="block_list_tab" data-toggle="tab" href="#block_list_tab_id" role="tab" aria-controls="contact" aria-selected="false">Block List</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="friend_tab_home" role="tabpanel" aria-labelledby="friend_tab">
                            <table class="table cf_user_followtable table-borderless cf_mb_100 cf_userset_tem1_form">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check pl-0">
                                                <input type="radio" class="form-check-input cf_userfollow" id="otherlocation1" name="cflocationradio">
                                                <label class="form-check-label" for="otherlocation1">Other Favorite Locations</label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="text-decoration-none">unfriend</a></td>
                                        <td><a href="#" class="text-decoration-none">block</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check pl-0">
                                                <input type="radio" class="form-check-input cf_userfollow" id="otherlocation2" name="cflocationradio">
                                                <label class="form-check-label" for="otherlocation2">Other Favorite Locations</label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="text-decoration-none">unfriend</a></td>
                                        <td><a href="#" class="text-decoration-none">block</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check pl-0">
                                                <input type="radio" class="form-check-input cf_userfollow" id="otherlocation3" name="cflocationradio">
                                                <label class="form-check-label" for="otherlocation3">Other Favorite Locations</label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="text-decoration-none">unfriend</a></td>
                                        <td><a href="#" class="text-decoration-none">block</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="tab-pane fade" id="followers-tab_id" role="tabpanel" aria-labelledby="followers-tab">
                                <table class="table cf_user_followtable table-borderless cf_mb_100 cf_userset_tem1_form">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check pl-0">
                                                    <input type="radio" class="form-check-input cf_userfollow" id="otherlocationtab2" name="cflocationradio">
                                                    <label class="form-check-label" for="otherlocationtab2">Other Favorite Locations</label>
                                                </div>
                                            </td>
                                            <td><a href="#" class="text-decoration-none">remove</a></td>
                                            <td><a href="#" class="text-decoration-none">block</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check pl-0">
                                                    <input type="radio" class="form-check-input cf_userfollow" id="locationtabitem3" name="cflocationradio">
                                                    <label class="form-check-label" for="locationtabitem3">Other Favorite Locations</label>
                                                </div>
                                            </td>
                                            <td><a href="#" class="text-decoration-none">remove</a></td>
                                            <td><a href="#" class="text-decoration-none">block</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check pl-0">
                                                    <input type="radio" class="form-check-input cf_userfollow" id="locationtabitem4" name="cflocationradio">
                                                    <label class="form-check-label" for="locationtabitem4">Other Favorite Locations</label>
                                                </div>
                                            </td>
                                            <td><a href="#" class="text-decoration-none">remove</a></td>
                                            <td><a href="#" class="text-decoration-none">block</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="block_list_tab_id" role="tabpanel" aria-labelledby="block_list_tab">
                            <table class="table cf_user_followtable table-borderless cf_mb_100 cf_userset_tem1_form">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check pl-0">
                                                    <input type="radio" class="form-check-input cf_userfollow" id="locationtabitem5" name="cflocationradio">
                                                    <label class="form-check-label" for="locationtabitem5">Other Favorite Locations</label>
                                                </div>
                                            </td>
                                            <td><a href="#" class="text-decoration-none">refollow</a></td>
                                            <td><a href="#" class="text-decoration-none">unblock</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check pl-0">
                                                    <input type="radio" class="form-check-input cf_userfollow" id="locationtabitem6" name="cflocationradio">
                                                    <label class="form-check-label" for="locationtabitem6">Other Favorite Locations</label>
                                                </div>
                                            </td>
                                            <td><a href="#" class="text-decoration-none">refriend</a></td>
                                            <td><a href="#" class="text-decoration-none">unblock</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check pl-0">
                                                    <input type="radio" class="form-check-input cf_userfollow" id="locationtabitem7" name="cflocationradio">
                                                    <label class="form-check-label" for="locationtabitem7">Other Favorite Locations</label>
                                                </div>
                                            </td>
                                            <td><a href="#" class="text-decoration-none">remove</a></td>
                                            <td><a href="#" class="text-decoration-none">unblock</a></td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                        </div>

                            <!-- <table class="table cf_user_followtable table-borderless cf_mb_100 cf_userset_tem1_form">
                                <thead>
                                    <tr>
                                        <th scope="col" class="cf_table_friend">Friends</th>
                                        <th scope="col" class="cf_table_follows">Followers</th>
                                        <th scope="col" class="cf_user_table_list">Block List</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check pl-0">
                                                <input type="radio" class="form-check-input cf_userfollow" id="otherlocation1" name="cflocationradio">
                                                <label class="form-check-label" for="otherlocation1">Other Favorite Locations</label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="text-decoration-none">remove</a></td>
                                        <td><a href="#" class="text-decoration-none">block</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check pl-0">
                                                <input type="radio" class="form-check-input cf_userfollow" id="otherlocation2" name="cflocationradio">
                                                <label class="form-check-label" for="otherlocation2">Other Favorite Locations</label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="text-decoration-none">remove</a></td>
                                        <td><a href="#" class="text-decoration-none">block</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check pl-0">
                                                <input type="radio" class="form-check-input cf_userfollow" id="otherlocation3" name="cflocationradio">
                                                <label class="form-check-label" for="otherlocation3">Other Favorite Locations</label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="text-decoration-none">remove</a></td>
                                        <td><a href="#" class="text-decoration-none">block</a></td>
                                    </tr>
                                </tbody>
                            </table> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="cf_user_savebtn">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);" class="btn_active user_savebtn">Save</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="user_cancelbtn">Cancel</a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="user_menu_heading">
                    <h3>User Menu</h3>
                </div>
                <div class="user_menu_item">
                    <ul>
                        <li>
                            <a href="#">User Account Settings</a>
                        </li>
                        <li>
                            <a href="#">Password</a>
                        </li>
                        <li>
                            <a href="#">Notifications</a>
                        </li>
                        <li>
                            <a href="#">Friends and Followers</a>
                        </li> 
                        <li>
                            <a href="#">Following</a>
                        </li>
                        <li>
                            <a href="#">Privacy Settings</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</sectiuon>    




<?php get_footer();?>