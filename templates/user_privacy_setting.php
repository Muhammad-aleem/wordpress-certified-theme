<?php
/**
 * Template Name: User Privacy Setting Template
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
                    <h1>Find A Business </h1>
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
            <div class="offset-lg-2 col-lg-6 col-md-8 col-sm-12">
               <div class="cf_userset_heading">
                    <h2>Privacy Settings</h2>
                    <span>Manage the visibility of your profile.</span>
                </div>
                <div class="cf_user_privacy_ifno">
                    <h2 class="mb-2">Let others find my profile using my name or email address.</h2>
                    <h2>Allow business owners to send you direct messages in response to your review.</h2>
                </div>
                <div class="cf_user_privacy_manage">
                    <h2>Manage what a business sees when you interact with its Certified listing.</h2>
                </div>
                <form autocomplete="off">
                    <div class="row cf_privacy_radiobtn  cf_mb_100">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input privacy_seting_radio" id="cf_checkyes" name="cf_userchckbox" checked>
                                    <label class="form-check-label" for="cf_checkyes">My name and Certified BOC 
                                            profileFirst name and 
                                            last initial, link to profile, 
                                            gender, and age range 
                                            (20s, 30s, etc.).</label>
                                </div>
                                <div class="cf_user_parvacy_seebtn">
                                    <a href="#">see example</a>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                                <!-- Material checked -->
                                <div class="cf_parvacy_mb">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input privacy_seting_radio " id="cf_checkno" name="cf_userchckbox">
                                        <label class="form-check-label" for="cf_checkno">My demographics</label>
                                    </div>
                                    <div class="cf_user_parvacy_seebtn">
                                            <a href="#">see example</a>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input privacy_seting_radio" id="basic_info" name="cf_userchckbox">
                                    <label class="form-check-label" for="basic_info">Basic information</label>
                                </div>
                                <div class="cf_user_parvacy_seebtn">
                                    <a href="#">see example</a>
                                </div>
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