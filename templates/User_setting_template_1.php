<?php
/**
 * Template Name: User Setting Template 01
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

    <div class="container">
        <div class="row">
            <div class="offset-lg-2 offset-md-2 col-lg-6 col-md-6 col-sm-12">
                <div class="cf_userset_heading">
                    <h2>Notification Settings</h2>
                    <span>Change or update email,to your account.</span>
                </div>
                <form autocomplete="off">
                    <div class="row">
                        <div class="col-lg-10 col-md-12 col-sm-12 ">
                            <div class="cf_userset_tem1_form">
                                <div class="cf_userset_emailtext">
                                    <span>myemail@gmail.com  Primary account</span>
                                    <span class="float-right mr-3"><i class="fas fa-times"></i></span>
                                </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="update_email" aria-describedby="emailHelp">
                                        <label for="update_email">Update email</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="phone_number">
                                        <label for="phone_number">Phone Number</label>
                                    </div>
                                <!-- radio btn -->
                                <!-- Material unchecked -->
                                <div class="cuer_checkbox_heading">
                                    <h2>Receieve emails from Certified BOC</h2>
                                </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="cf_checkyes" name="cf_userchckbox" checked>
                                        <label class="form-check-label" for="cf_checkyes">Yes</label>
                                    </div>
                                    <!-- Material checked -->
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="cf_checkno" name="cf_userchckbox">
                                        <label class="form-check-label" for="cf_checkno">No</label>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="cuer_checkbox_text">
                                    <span>Note: you will still receive certain legal, transactional or administrative emails.</span>
                                </div>
                        </div>
                    </div>
                    <div class="row cf_mb_100">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="cf_user_web_notification">
                                <h3>Website Notifications</h3>
                                <h6>Get email updates about:</h6>
                            </div>
                            <div class="web_notification_list float-right">
                                <ul>
                                    <li>Friend requests</li>
                                    <li>Followers</li>
                                    <li>Mentions and Replies</li>
                                    <li>Direct messages</li>
                                    <li>Messages from businesses</li>
                                    <li>System Statuses</li>
                                    <li>Businesses near you</li>
                                    <li>Things you may like</li>
                                    <li>Certified News</li>
                                    <li>All of the Above</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="cf_user_app_notification">
                                <h3>App Push  Notifications</h3>
                                <h6>Get email updates about:</h6>
                            </div>
                            <div class="app_notification_list float-right">
                                <ul>
                                    <li>Friend requests</li>
                                    <li>Followers</li>
                                    <li>Mentions and Replies</li>
                                    <li>Direct messages</li>
                                    <li>Messages from businesses</li>
                                    <li>System Statuses</li>
                                    <li>Businesses near you</li>
                                    <li>Things you may like</li>
                                    <li>Certified News</li>
                                    <li>All of the Above</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="cf_user_savebtn text-center">
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

</section>



<?php get_footer();?> 