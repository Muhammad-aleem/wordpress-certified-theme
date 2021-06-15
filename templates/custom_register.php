<?php
/**
 * Template Name: custom_register
 * Template Post Type: post, page
 *
 * @package WordPress
 */

get_header();
//  global $wpdb; 


?>
<section class="al_mainbg">
<div class="contaoner">
  <div class="row">
    <div class="col-md-6 mx-auto text-center al_maincontent">
    <?php
    if(!empty($register_error)){
    ?>
      <div class="alert alert-warning" role="alert">
      <?= $register_error;?>
      </div>
      <?php
    }

    ?>
   
      <div class="al_terms-condition">
      <p>By continuing, you agree to <a href="#">Certified BOC's Terms of Service</a> and acknowledge <a href="#">Certified BOC's Privacy Policy.</a></p>
    </div>
      <div class="al_sigup_maintit">
        <h1><span class="mainsignupt">SIGN UP FOR </span> <span class="secsignupt">Cretified</span>  
        </h1>
      </div>
      <div class="al_sigup_sabtit">
        <h6>Connecting the  Dots.....</h6>
      </div>
      <!-- <div class="alsignapple mb-30">
        <a href="#" class="goto_apple d-block">
          <img src="<?php // echo get_template_directory_uri(); ?>/public/image/appleedit.png" alt="" class="img-fluid">
        </a>
      </div> -->
      <!-- <div class="alsignfb mb-30">
        <a href="#" class="goto_fb d-block">
          <img src="<?php //echo get_template_directory_uri(); ?>/public/image/fbedit.png" alt="" class="img-fluid">
        </a>
      </div> -->
      <div class="alsigngoogle mb-30">
        <a href="https://certifiedboc.com/wp-login.php?loginSocial=google" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="google" data-popupwidth="600" data-popupheight="600" class="algoto_google d-block">
          <img src="<?php echo get_template_directory_uri(); ?>/public/image/googleedit.png" alt="" class="img-fluid">
        </a>
      </div>
       
      <div class="alsignpermission">
        <h4>Do not worry , we 're never going to</h4>
        <h4>Publish post without your permission.</h4>
      </div>
      <p class="al_form_or">
    or
  </p>

      <form class="alsignupcustomf" method="POST" autocomplete="off">
        <div class="form-group">
          <input type="text" class="form-control alusername" name="userfname" placeholder="First Name" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control aluserlastname" name="userlname" placeholder="Last Name" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control aluseremail" name="useremail"  placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control aluserzcode" name="userzcode" placeholder="Zip Code" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control aluserpass" name="userpassword"  placeholder="Enter Password" required>
        </div>
        <div class="form-group mb-35">
          <input type="password" class="form-control aluserpass" name="usconfirmpassword"  placeholder="Enter Confirm Password...." required>
        </div>
        <div class="form-group mb-35">
          <p class="aloption">Birthday is optional*</p>
        </div>
        <div class="row w-50 text-center mx-auto mb-35">
          <div class="col">
            <input type="number" class="form-control alusermonth" placeholder="Month" name="user_db_month" required>
          </div>
          <div class="col">
            <input type="number" class="form-control aluserday" placeholder="Day" name="user_db_day" required>
          </div>
          <div class="col">
            <input type="number" class="form-control aluseryear" placeholder="Year" name="user_db_useryear" required>
          </div>
        </div>
        <div class="form-group mb-35">
          <p class="al_signinfo">Cretified BOC also distributes marketing update on the brands, merdhandise, businesses and community event of Cretified BOC. Remember you can unsubscribe at any time.</p>
        </div>
        <input type="hidden" name="alregisterform" value= "register">
        <div class="alsignsignup mb-50">
        
          <div class="input-submitwap al_signupimg ml-auto mr-auto">

            <input type="submit"  name="user_regiserbtn" class="alsubmitbtn" value=""/>
          </div>
        </div>
        <div class="form-group alsignlastline">
          <a href="<?php echo site_url(); ?>/log-in/">
            Login If you already have a Cretified Account
          </a>
          
        </div>
      </form>
    </div> 
  </div>
</div>

</section>








<?php get_footer();?>