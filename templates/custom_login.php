<?php
/**
 * Template Name: custom_Login
 * Template Post Type: post, page
 *
 * @package WordPress
 */

global $user_ID;
global $wpdb;
if($user_ID){
wp_redirect(site_url());
exit;
}
else{
  get_header();
  ?>
    <section class="al_mainbg">
      <div class="contaoner">
        <div class="row">
          <div class="col-md-6 mx-auto text-center al_maincontent">
            <div class="al_sigup_maintit mb-35">
            <a href="javascript:void(0)" class="alfpasswd">
               <?php echo $login_error;?>
            </a>
              <h1><span class="mainsignupt">LOG IN TO</span> <span class="secsignupt">CERTIFIED</span>  
              </h1>
            </div>
            <!-- <div class="alsignapple mb-35">
              <a href="#" class="goto_apple d-block">
                <img src="<?php //echo get_template_directory_uri(); ?>/public/image/appleedit.png" alt="" class="img-fluid">
              </a>
            </div> -->
            <!-- <div class="alsignfb mb-35">
              <a href="#" class="goto_fb d-block">
                <img src="<?php// echo get_template_directory_uri(); ?>/public/image/fbedit.png" alt="" class="img-fluid">
              </a>
            </div> -->
            <div class="alsigngoogle mb-35">
              <a href="https://certifiedboc.com/wp-login.php?loginSocial=google" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="google" data-popupwidth="600" data-popupheight="600" class="algoto_google d-block">
                <img src="<?php echo get_template_directory_uri(); ?>/public/image/googleedit.png" alt="" class="img-fluid">
              </a>
            </div>

          <div class="al_terms-condition">
            <p>By continuing, you agree to <a href="#">Certified BOC's Terms of Service</a> and acknowledge <a href="#">Certified BOC's Privacy Policy.</a></p>
          </div>

          <p class="al_form_or">
          or
        </p>
          
          <form class="alsignupcustomf"  method="POST" autocomplete="off">
              <div class="form-group">
                <input type="text" class="form-control aluseremail" name="username"  placeholder="User Name" required>
              </div>
              <div class="form-group mb-35">
                <input type="password" class="form-control aluserpass" name="uspassword"  placeholder="Enter Password" required>
              </div>
              <div class="form-group mb-35">
                  <a href="#" class="alfpasswd">
                      Forgot Password
                  </a>
                </div>
                <input type="hidden" name="alloginform" value="login">
              <div class="alsignsignup mb-35">
                <button type="submit" class="algoto_login d-block"  name="btn_submit">Log in</button>
              </div>
              <div class="form-group alsignlastline">
                <a href="<?php echo site_url(); ?>/custom_register/">
                  Sign Up if you do not have a Certifed Account
                </a>
              </div>
            </form>
          </div> 
        </div>
      </div>
    </section> 
<?php
 
}
?>


<?php get_footer();?>