<?php
/**
 * Template Name: User Account Setting Template 
 * Template Post Type: post, page
 */
if ( !is_user_logged_in() ) {
    wp_redirect(site_url());
    exit();
}

$get_path = get_template_directory_uri();
$redic_password_url =  home_url().'/user-account';
$redic_profile_url =  home_url().'/user-profile';

 get_header();

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
            <div class="offset-lg-2 offset-md-2 col-lg-6 col-md-6 col-sm-12">
                <div class="cf_useraccountset_heading">
                    <h2>Username Account Settings</h2>
                    <?php
                     if($pass_success){
                         ?>
                            <div class="alert alert-success" role="alert">
                              <?= $pass_success;?>
                            </div>
                         <?php
                    }elseif($pass_error){
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <?=  $pass_error;?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <form  method="POST">
                    <div class="row">
                        <div class="col-lg-10 col-md-12 col-sm-12 ">
                            <div class="cf_userset_tem1_form az_useraccouint_form">
                                <div class="form-group cf_useracunt_mb_40">
                                    <input type="password" name="user_crr_passwd" class="form-control" id="current_password" required>
                                    <label for="current_password">Current password | Enter your existing password.</label>
                                </div>
                                <div class="form-group cf_useracunt_mb_40">
                                    <input type="password" class="form-control" name="user_newpasswd" id="new_password" required>
                                    <label for="new_password">New password | Enter your existing password.</label>
                                </div>
                                <div class="form-group cf_mb_100">
                                    <input type="password" class="form-control" name="user_verifiy_password" id="verifiy_password" required>
                                    <label for="verifiy_password">Verifiy New password | Enter your existing password.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                        
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="cf_user_savebtn">
                                    <ul>
                                        <li>
                                            <button type="submit" class="btn_active user_savebtn" name="change_user_pass">Save</button>
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
                            <a href="<?=  $redic_password_url;?>">Password</a>
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