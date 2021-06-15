<?php
/**
 * Template Name: User Profile Template
 * Template Post Type: post, page
 */
if ( !is_user_logged_in() ) {
    wp_redirect(site_url());
    exit();
}

$get_path = get_template_directory_uri();
$current_user = wp_get_current_user();
$current_user_id = get_current_user_id();
$redic_password_url =  home_url().'/user-account';
$redic_profile_url =  home_url().'/user-profile';


    get_header();

    $get_fname = get_user_meta($current_user_id, 'first_name', true);
    $get_lname = get_user_meta($current_user_id, 'last_name', true);
    $get_gender = get_user_meta($current_user_id, 'user_gender', true);
    $get_city_location = get_user_meta($current_user_id, 'user_city_location', true);
    $user_love_food = get_user_meta($current_user_id, 'user_love_food', true);
    $user_hometown = get_user_meta($current_user_id, 'user_hometown', true);
    $user_birthday = get_user_meta($current_user_id, 'user_birthday', true);
    $user_image = get_user_meta($current_user_id, 'user_image', true);
    $scr = wp_get_attachment_image_src($user_image, 'full');

?>
<section class="usersett_tem_1_bg">
    
    <form method="POST"  enctype="multipart/form-data" autocomplete="off">
    <div class="container cf_useracount_pt_30">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="cf_user_profile_image">
                    <label>
                        <?php
                            if($scr){
                                ?>
                                    <img src="<?=  $scr[0];?>" class="img-fluid img_preview">
                                <?php
                            }else{
                                ?>
                                <img src="<?php echo $get_path;?>/public/image/user_profile.png" class="img-fluid img_preview">
                            <?php
                            }
                        ?>
                        <input id="userimglode" type="file" size="60" name="user_image">
                    </label> 
                </div>
                <div class="cf_user_profile_imagename">
                    <h2>Update Profile Image</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                 <div class="cf_userset_heading cf_profile_mb">
                    <h2>Username Account Settings</h2>
                </div>
                    <div class="row cf_mb_100">
                        <div class="col-lg-10 col-md-12 col-sm-12 ">
                            <div class="cf_userset_tem1_form cf_userprofile_form">
                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo $get_fname;?>" required>
                                        <label for="first_name">First Name |  This field is required.</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="last_name" class="form-control" id="last_name"  value="<?php echo $get_lname;?>" required>
                                        <label for="last_name">Last Name |  This field is required.</label>
                                    </div>
                                <!-- radio btn -->
                                <!-- Material unchecked -->
                                <div class="cf_user_gender">
                                    <h2>Gender</h2>
                                </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="female_id" name="user_gender" value="female" <?php echo ($get_gender == 'female') ?  "checked" : "" ;  ?>>
                                        <label class="form-check-label" for="female_id">Female</label>
                                    </div>
                                    <!-- Material checked -->
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="cf_male" name="user_gender" value="male" <?php echo ($get_gender == 'male') ?  "checked" : "" ;  ?>>
                                        <label class="form-check-label" for="cf_male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline cf_profile_mb_25">
                                        <input type="radio" class="form-check-input" id="cf_user_other" name="user_gender" value="other" <?php echo ($get_gender == 'other') ?  "checked" : "" ;  ?>>
                                        <label class="form-check-label" for="cf_user_other">Other</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_city_location_id">City Location</label>
                                        <input type="text" name="user_city_location" class="form-control" id="user_city_location_id" value="<?php echo $get_city_location;?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_food_love_id">Foods I love</label>
                                        <input type="text" name="user_food_love" class="form-control" id="user_food_love_id" value="<?php echo $user_love_food;?>" required> 
                                    </div>
                                     <div class="form-group">
                                        <label for="user_hometown_id">My Hometown</label>
                                        <input type="text" name="user_hometown" class="form-control" id="user_hometown_id" value="<?php echo $user_hometown;?>" required>
                                    </div> 
                                    <div class="form-group">
                                        <label for="user_birthday">My Birthday</label>
                                        <input type="text" name="user_birthday" class="form-control" id="user_birthday" value="<?php echo $user_birthday;?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_birthday">Upload Profile Cover Page</label>
                                        <input type="file" name="user_profile_bd">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="cf_user_savebtn">
                                    <ul>
                                        <li>
                                            <button type="submit"  class="btn_active user_savebtn" name="save_usermet">Save</button>
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
                            <a href="<?= $redic_profile_url; ?>">User Account Settings</a>
                        </li>
                        <li>
                            <a href="<?=  $redic_password_url?>">Password</a>
                        </li>
                        <li>
                            <a href="#">Notifications</a>
                        </li>
                        <li>
                            <a href="#" class="user_followers" data-toggle="modal" data-target="#user_followers">
                                Friends and Followers
                                <input type="hidden" class="user_follower_value" value="<?= $current_user_id ?>">
                            </a>
                        </li> 
                        <li>
                            <a href="#"  class="user_following" data-toggle="modal" data-target="#user_following">
                                Following
                                <input type="hidden" class="user_following_value" value="<?= $current_user_id ?>">
                            </a>
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
                    <!-- On Like and Dislike Preloder  -->
                        <div class="comm_like_dislikeloder">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="25 25 50 50">
                                <circle cx="50" cy="50" r="20" fill="none" stroke-width="5" stroke="#45d6b5"
                                    stroke-linecap="round" stroke-dashoffset="0" stroke-dasharray="100, 200">
                                    <animateTransform attributeName="transform" attributeType="XML" type="rotate"
                                        from="0 50 50" to="360 50 50" dur="2.5s" repeatCount="indefinite" />
                                    <animate attributeName="stroke-dashoffset" values="0;-30;-124" dur="1.25s"
                                        repeatCount="indefinite" />
                                    <animate attributeName="stroke-dasharray" values="0,200;110,200;110,200"
                                        dur="1.25s" repeatCount="indefinite" />
                                </circle>
                            </svg>
                        </div>


    <!--  -->

    <div class="modal fade" id="user_followers" tabindex="-1" role="dialog" aria-labelledby="user_followersLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content cf_relies_popbg ">
                <div class="modal-header">
                    <h5 class="modal-title user_follower_tit">Followers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body show_followers_wrap">
                   
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="user_following" tabindex="-1" role="dialog" aria-labelledby="user_followingLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content cf_relies_popbg ">
                <div class="modal-header">
                    <h5 class="modal-title user_follower_tit">Following</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body show_following_wrap">
                   
                </div>
            </div>
        </div>
    </div>

</sectiuon>    




<?php get_footer();?>