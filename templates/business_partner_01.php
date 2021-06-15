<?php
/**
 * Template Name: Business Partner 
 * Template Post Type: post, page
 */


// $to = get_option( 'admin_email' ); 
if ( !is_user_logged_in() ) {
    wp_redirect(site_url());
    exit();
}

$email_vcode = get_user_meta(get_current_user_id(), 'email_verify_number', true ); 
$business_home = home_url().'/business-uplode-image';
if(!empty($email_vcode)){
    wp_redirect( $business_home );
    exit;
}

$to = "sdevaleem@gmail.com"; 
function random_number($size = 5)
{
    $random_number='';
    $count=0;
    while ($count < $size ) 
        {
            $random_digit = mt_rand(0, 9);
            $random_number .= $random_digit;
            $count++;
        }
    return $random_number;  
}

// if(isset($_POST['wp_business_submit'])){
//     $q_anser = $_POST['bus_qsname'];
//     $bus_business_cat = $_POST['business_cat'];
//     $business_phn_number = $_POST['business_phn_number'];
//     $business_website = $_POST['business_website'];
//     $business_adress = $_POST['business_adress'];
// echo $business_adress , $business_website ,$business_phn_number , $bus_business_cat , $q_anser;
//     $message  .="Client Business Details";
//     $message .= "Client Business Question Anser --: " . $q_anser . "\r\n";
//     $message .= "Client Business Category --: " . $bus_business_cat . "\r\n";
//     $message .= "Client Business Phone Number --: " . $business_phn_number . "\r\n";
//     $message .= "Client Business WebSite --: " . $business_website . "\r\n";
//     $message .= "Client Business Address --: " . $business_website . "\r\n";
//     $subject  = "Client Business Details";
    
//     // $success_message = wp_mail($to, $subject, $message);
//     // $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//     // wp_redirect($this_page_link);
// }

get_header();
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="cf_partner_banerlogo">
                    <a class="navbar-brand al_cfmainlogo" href="<?php bloginfo('url')?>">
                        <?php
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                ?>
                        <img src="<?php echo $image[0];?>" alt="<?php  bloginfo('name');?>"
                            class="img-fluid al_Hcfyoutube">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-12 my-auto">
                <div class="cf_buspartner_heading">
                    <h2>Business Partner Questionnaire: <span class="bus_clk_num">7</span> of 7</h2>
                </div>
            </div>
        </div>
    </div>
    <form autocomplete="off" method="POST">
        <div class="cf_buspartnre_pone_bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-md-12 col-sm-12" id="cf_mainhideone">
                        <div class="cf_bp_pone_con_heading">
                            <h2>HEADER TEXT HERE</h2>
                        </div>
                        <div class="cf_bp_pone_con_details">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste libero voluptas explicabo
                                dolorem ducimus incidunt esse sunt distinctio rem ad accusantium vitae, iusto amet,
                                fugit sint. Libero provident quasi sint.
                            </p>
                        </div>
                        <div class="cf_bp_pone_con_questions">
                            <h4>Question Here</h4>
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <ul>
                                        <li>
                                            <input type="radio" id="f-option" name="bus_qsname" value="answer_option1">
                                            <label for="f-option">Answer Option</label>
                                            <div class="check"></div>
                                        </li>
                                        <li>
                                            <input type="radio" id="s-option" name="bus_qsname" value="answer_option1">
                                            <label for="s-option">Answer Option</label>
                                            <div class="check">
                                                <div class="inside"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" id="t-option" name="bus_qsname" value="answer_option1">
                                            <label for="t-option">Answer Option</label>
                                            <div class="check">
                                                <div class="inside"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" id="ans_options" name="bus_qsname"
                                                value="answer_option1">
                                            <label for="ans_options">Answer Option</label>
                                            <div class="check">
                                                <div class="inside"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="radio" id="ans-option2" name="bus_qsname"
                                                value="answer_option1">
                                            <label for="ans-option2">Answer Option</label>
                                            <div class="check">
                                                <div class="inside"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="cf_bp_pone_nextbtn text-center">
                                        <a href="javascript:void(0)" id="main_nextone">
                                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/arrow.png"
                                                alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 
    ===================
    Business partner Part 2
    ===================
 -->
                    <div class="col-lg-6 col-md-12 col-sm-12" id="cf_hidepart2">
                        <div class="cf_busptw_heading">
                            <h2>THANK YOU FOR SHARING</h2>
                        </div>
                        <div class="cf_bp_ptw_banner_details">
                            <p>Complete your business partner page set up</p>
                        </div>
                        <div class="cf_bp_ptw_setupbtn">
                            <a href="javascript:void(0)" id="goto_nextp2">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/setupbtn.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- 
    ===========================
     End Business partner Part 2
    ============================
 -->
                    <!-- 
    ===================
    Business partner Part 3
    ===================
 -->

                    <div class="col-lg-7 col-md-10 col-sm-12" id="cf_gotohidep3">
                        <div class="cf_buspthree_heading">
                            <h2>Start setting up your account by providing telling us how customers can find you!
                            </h2>
                        </div>

                        <div class="cf_buspthree_from">

                            <div class="form-group">
                                <input type="text" class="form-control" name="business_cat"
                                    placeholder="Business Category">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="business_phn_number"
                                    placeholder="Business Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="business_website"
                                    placeholder="Website">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="business_adress"
                                    placeholder="Business Address">
                            </div>
                        </div>
                        <div class="cf_buspthree_from_details">
                            <p>
                                By pressing continue, you are agreeing to Certified BOC's <span> <a href="#">Business
                                        Partner Terms of Use</a></span> and acknowladge our
                                <span><a href="#">Privacy Policy.</a></span> Certified BOC may email you about our
                                products, services, and business partner projects and
                                opportunities. You can unsubscribe at any time.
                            </p>
                        </div>
                        <div class="cf_buspthree_submitbtn text-right">
                            <a href="javascript:void(0)" id="gotonextp3" class="wp_submit_bus_cpt">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/partner3_submitbtn.png"
                                 alt="">
                            </a>
                        </div>
                    </div>

                    <!-- 
    ===========================
    End Business partner Part 3\
    ==========================
 -->
                    <!-- 
    ===========================
     Business partner Part 4\
    ==========================
 -->

                    <div class="col-lg-7 col-md-12 col-sm-12" id="gotohidep4">
                        <div class="cf_buspfour_heading">
                            <h2>Please Confirm Your Business and Verify Your Contact
                            </h2>
                        </div>
                        <div class="cf_buspthree_from_details">
                            <p>
                                By pressing continue, you are agreeing to Certified BOC's <span> <a href="#">Business
                                        Partner Terms of Use</a></span> and acknowladge our
                                <span><a href="#">Privacy Policy.</a></span> Certified BOC may email you about our
                                products, services, and business partner projects and
                                opportunities. You can unsubscribe at any time.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-3">
                                <div class="cf_buspfour_radiobtn option_ckeck">
                                    <ul>
                                        <li>
                                            <input type="radio" id="p4btn1" name="partfour">
                                            <label for="p4btn1"></label>
                                            <div class="check"></div>
                                        </li>
                                        <li>
                                            <input type="radio" id="p4btn2" name="partfour">
                                            <label for="p4btn2"></label>
                                            <div class="check">
                                                <div class="inside"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-9">
                                <div class="cf_buspfour_fomcon  pl-3 pt-2 pb-3 pr-3 mb-4">
                                    <div class="cf_buspfour_fomvmail">
                                        <span>Verify by Email</span>
                                    </div>
                                    <div class="cf_buspfour_fom_email">
                                        <div class="form-group mb-0">
                                            <input type="email" class="form-control verify_email_val" placeholder="">
                                            <?php
                                                $rand_numer   = random_number();
                                            ?>
                                            <input type="hidden" class="get_the_ramnum" value="<?= $rand_numer?>">
                                        </div>
                                    </div>
                                    <div class="cf_buspfour_fom_emailtext text-center">
                                        <span>"youremail@yourdomain.com"</span>
                                    </div>
                                </div>
                                <div class="cf_buspfour_fomcon  pl-3 pt-2 pb-3 pr-3">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="cf_buspfour_fomphone">
                                                <span>Verify by Phone</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12">
                                            <div class="cf_pfourinlineradio text-center ">
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="vphone_ilnerdo1" name="partfour">
                                                        <label for="vphone_ilnerdo1">Phone</label>
                                                        <div class="check"></div>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="vphone_ilnerdo2" name="partfour">
                                                        <label for="vphone_ilnerdo2">Text</label>
                                                        <div class="check check2">
                                                            <div class="inside"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cf_buspfour_fom_email cf_buspfour_fom_numb">
                                        <div class="form-group mb-0">
                                            <input type="number" class="form-control" name="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 colmd-8 col-sm-12">
                                        <div class="cf_buspfour_fdetails">
                                            <p>Certified BOC may email you about our products, services,and business
                                                partner projects and opportunities. You can unsubscribe at any time.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="cf_buspfore_submitbtn text-right cf_mb_left">
                                            <a href="javascript:void(0)" class="d-block Verify_btn" id="gotonextp4">
                                                <img src="<?php echo get_template_directory_uri()?>/public/image/partner3_submitbtn.png"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 
    ===========================
    End Business partner Part 4\
    ==========================
 -->


                    <!-- 
    ===========================
     Business partner Part 5\
    ==========================
 -->

                    <div class="col-lg-6 col-md-12 col-sm-12" id="gotohidep5">
                        <div class="cf_busfpfive_heading">
                            <h2>Please Enter Your Verification Code</h2>
                        </div>
                        <div class="cf_busfpfive_message_icn">
                            <a href="#" class="d-block">
                                <img src="<?php echo get_template_directory_uri()?>/public/image/bpartmessageicn.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="cf_busfpfive_infomess">
                            <p class="cf_busfpfive_mess">We have sent 5 digit verification code to your email. </p>
                            <p class="cf_ml">Please enter it below to verify your email</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-10 col-md-12 col-sm-12">
                                <div class="form-group cf_pb_20">
                                    <input type="password" autocomplete="false" readonly  onfocus="this.removeAttribute('readonly');" class="form-control cf_custom_input check_verify_emial"
                                        aria-describedby="emailHelp" placeholder="* * * * *">
                                </div>
                            </div>
                        </div>
                        <div class="row cf_pb_40">
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="cf_busfpfive_submitbtn ">
                                    <a href="javascript:void(0)" class="text-decoration-none Back" id="gotobackp5">
                                        Back
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="cf_busfpfive_submitbtn cf_right">
                                    <a href="javascript:void(0)" class="text-decoration-none Continue active check_the_email_code"
                                        >
                                        Continue
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 mx-auto">
                                <div class="cf_busfpfive_fdetails">
                                    <p>
                                        This code may take a few moments to
                                        arrive. If the code never reaches you,
                                        <span> <a href="#" class="text-decoration-none pl-4">click here to send a new
                                                code</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 
    ===========================
    End Business partner Part 5\
    ==========================
 -->

                    <!-- 
    ===========================
     Business partner Part 6\
    ==========================
 -->

                    <div class="col-lg-6 col-md-12 col-sm-12" id="gotohidep6">
                        <div class="cf_busfpfive_heading">
                            <h2>Please Enter Your Verification Code</h2>
                        </div>
                        <div class="cf_busfpfive_mobile_icn">
                            <a href="#" class="d-block">
                                <img src="<?php echo get_template_directory_uri()?>/public/image/busmobileicn.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="cf_busfpsix_infomess w-75">
                            <p>We have texted you with the <span>5 digit verification
                                    code</span> to the business number you have provided.
                                Please enter it below to verify your phone number.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-10 col-md-12 col-sm-12">
                                <div class="form-group cf_pb_20">
                                    <input type="password" class="form-control cf_custom_input" name=""
                                        aria-describedby="emailHelp" placeholder="* * * * *">
                                </div>
                            </div>
                        </div>
                        <div class="row cf_pb_40">
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="cf_busfpfive_submitbtn ">
                                    <a href="javascript:void(0)" class="text-decoration-none Back" id="gotobackp6">
                                        Back
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="cf_busfpfive_submitbtn cf_right">
                                    <a href="javascript:void(0)" class="text-decoration-none Continue active"
                                        id="gotonextp6">
                                        Continue
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 mx-auto">
                                <div class="cf_busfpfive_fdetails">
                                    <p>
                                        This code may take a few moments to
                                        arrive. If the code never reaches you,
                                        <span> <a href="#" class="text-decoration-none pl-4">click here to send a new
                                                code</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 
    ===========================
    end Business partner Part 6\
    ==========================
 -->
                    <!-- 
    ===========================
     Business partner Part 7\
    ==========================
 -->
                    <div class="col-lg-6 col-md-12 col-sm-12" id="gotohidep7">
                        <div class="cf_busfpfive_heading">
                            <h2>Please Enter Your Verification Code</h2>
                        </div>
                        <div class="cf_busfpfive_mobile_icn">
                            <a href="#" class="d-block">
                                <img src="<?php echo get_template_directory_uri()?>/public/image/cfb_whatappicn.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="cf_busfpseven_infomess w-75">
                            <p class="mb-0 pb-0">We have called you with the <span>5 digit verification code</span>
                                to the business number you have provided.</p>
                            <p>Please enter it below to verify your phone number.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-10 col-md-12 col-sm-12">
                                <div class="form-group cf_pb_20">
                                    <input type="password" class="form-control cf_custom_input" name=""
                                        aria-describedby="emailHelp" placeholder="* * * * *">
                                </div>
                            </div>
                        </div>
                        <div class="row cf_pb_40">
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="cf_busfpfive_submitbtn ">
                                    <a href="javascript:void(0)" class="text-decoration-none Back" id="gotobackp7">
                                        Back
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="cf_busfpfive_submitbtn cf_right">
                                    <a href="javascript:void(0)" class="text-decoration-none Continue active"
                                        id="gotonextp7">
                                        Continue
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 mx-auto">
                                <div class="cf_busfpfive_fdetails">
                                    <p>
                                        This code may take a few moments to
                                        arrive. If the code never reaches you,
                                        <span> <a href="#" class="text-decoration-none pl-4">click here to send a new
                                                code</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 
    ===========================
    end Business partner Part 7\
    ==========================
 -->
                    <!-- 
    ===========================
     Business partner Part 8\
    ==========================
 -->

                    <div class="col-lg-4 col-sm-12 col-sm-12 text-center" id="gotohidep8">
                        <div class="cf_busdomep_img">
                            <img src="<?php echo get_template_directory_uri()?>/public/image/cf_bdone.png" alt=""
                                class="img-fluid">
                        </div>
                        <div class="cf_busdomep_heading">
                            <h2>We can now Manage Your Business Partner Page on Certified BOC</h2>
                        </div>
                        <div class="cf_busdomep_btn">
                            <input type="submit" name="wp_business_submit" value="Continue">
                            <!-- <a href="#" class="text-decoration-none"></a> -->
                        </div>
                    </div>
    </form>
    <!-- 
    ===========================
    end Business partner Part 8\
    ==========================
 -->



    <div class="col-lg-1 col-md-12 col-sm-12" id="cf_maincounthide">
        <div class="cf_bp_pone_conbox">
            <span>7</span>
        </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 main_addclass">
        <div class="cf_bp_pone_conimg">
            <img src="<?php echo get_template_directory_uri(); ?>/public/image/cf_buspartnerimg.png" alt=""
                class="img-fluid">
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- 
    ===================
    Business partner Part 2
    ===================
 -->

    <!-- <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" id="cf_hidepart2">
                    <div class="cf_busptw_heading">
                        <h2>THANK YOU FOR SHARING</h2>
                    </div>
                    <div class="cf_bp_ptw_banner_details">
                        <p>Complete your business partner page set up</p>
                    </div>
                    <div class="cf_bp_ptw_setupbtn">
                        <a href="#" class="d-block">
                            <img src=" /*< ?php  echo get_template_directory_uri(); ?>/public/image/setupbtn.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
    </div> -->

    <!-- 
    ===========================
     End Business partner Part 2
    ============================
 -->
    <!-- 
    ===================
    Business partner Part 3
    ===================
 -->

    <!-- <div class="cf_buspartnre_pone_bg pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="cf_buspthree_heading">
                    <h2>Start setting up your account by providing telling us how customers can find you!
                    </h2>
                </div>
                <form autocomplete="off">
                    <div class="cf_buspthree_from">
                    
                            <div class="form-group">
                                <input type="text" class="form-control" name="" placeholder="Business Category">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name=""  placeholder="Business Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name=""  placeholder="Website">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name=""  placeholder="Business Address">
                            </div>
                    </div>
                    <div class="cf_buspthree_from_details">
                        <p> 
                            By pressing continue, you are agreeing to Certified BOC's <span> <a href="#">Business Partner Terms of Use</a></span> and acknowladge our
                            <span><a href="#">Privacy Policy.</a></span> Certified BOC may email you about our products, services, and business partner projects and
                                opportunities. You can unsubscribe at any time.
                        </p>
                    </div>
                    <div class="cf_buspthree_submitbtn text-right">
                            <a href="#" class="d-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/partner3_submitbtn.png" alt="">
                            </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>     -->
    <!-- 
    ===========================
    End Business partner Part 3\
    ==========================
 -->


    <!-- 
    ===========================
     Business partner Part 4\
    ==========================
 -->
    <!-- 
<div class="cf_buspartnre_pone_bg pt-5">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="cf_buspfour_heading">
                <h2>Please Confirm Your Business and Verify Your Contact
                </h2>
            </div>
            <div class="cf_buspthree_from_details">
                <p> 
                    By pressing continue, you are agreeing to Certified BOC's <span> <a href="#">Business Partner Terms of Use</a></span> and acknowladge our
                    <span><a href="#">Privacy Policy.</a></span> Certified BOC may email you about our products, services, and business partner projects and
                        opportunities. You can unsubscribe at any time.
                </p>
            </div>
            <form autocomplete="off">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="cf_buspfour_radiobtn">
                            <ul>
                                <li>
                                    <input type="radio" id="p4btn1" name="partfour">
                                    <div class="check"></div>
                                </li>
                                <li>
                                    <input type="radio" id="p4btn2" name="partfour">
                                    <div class="check"><div class="inside"></div></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-10">
                        <div class="cf_buspfour_fomcon  pl-3 pt-2 pb-3 pr-3 mb-4">
                            <div class="cf_buspfour_fomvmail">
                                <span>Verify by Email</span>
                            </div>
                            <div class="cf_buspfour_fom_email">
                                <div class="form-group mb-0">
                                    <input type="email" class="form-control" name=""  placeholder="">
                                </div>
                            </div>
                            <div class="cf_buspfour_fom_emailtext text-center">
                                <span>"youremail@yourdomain.com"</span>
                            </div>
                        </div>
                        <div class="cf_buspfour_fomcon  pl-3 pt-2 pb-3 pr-3">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="cf_buspfour_fomphone">
                                        <span>Verify by Phone</span>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="cf_pfourinlineradio text-center">
                                            <ul>
                                                <li>
                                                    <input type="radio" id="vphone_ilnerdo1" name="partfour">
                                                    <label for="vphone_ilnerdo1">Phone</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="vphone_ilnerdo2" name="partfour">
                                                    <label for="vphone_ilnerdo2">Text</label>
                                                    <div class="check"><div class="inside"></div></div>
                                                </li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="cf_buspfour_fom_email cf_buspfour_fom_numb">
                                <div class="form-group mb-0">
                                    <input type="number" class="form-control" name=""  placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 colmd-8 col-sm-12">
                                <div class="cf_buspfour_fdetails">
                                    <p>Certified BOC may email you about our products, services,and business partner projects and opportunities. You can unsubscribe at any time.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="cf_buspfore_submitbtn text-right">
                                    <a href="#" class="d-block">
                                        <img src="http://localhost/wordpress/wp-content/themes/certified-theme/public/image/partner3_submitbtn.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div> -->

    <!-- 
    ===========================
    End Business partner Part 4\
    ==========================
 -->
    <!-- 
    ===========================
     Business partner Part 5\
    ==========================
 -->
    <!--  
 <div class="cf_buspartnre_pone_bg pt-5">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-12 col-sm-12">
                 <div class="cf_busfpfive_heading">
                    <h2>Please Enter Your Verification Code</h2>
                 </div>
                 <div class="cf_busfpfive_message_icn">
                    <a href="#" class="d-block">
                        <img src="/*< ?php echo get_template_directory_uri()?>/public/image/bpartmessageicn.png" alt="">
                    </a>
                 </div>
                 <div class="cf_busfpfive_infomess">
                    <p class="cf_busfpfive_mess">We have sent 5 digit verification code to your email. </p>
                    <p class="cf_ml">Please enter it below to verify your email</p>
                 </div>
                 <form autocomplete="off">
                     <div class="row">
                         <div class="col-lg-10 col-md-12 col-sm-12">
                            <div class="form-group cf_pb_20">
                                <input type="password" class="form-control cf_custom_input" name="" aria-describedby="emailHelp" placeholder="* * * * *">
                            </div>
                         </div>
                     </div>
                     <div class="row cf_pb_40">
                         <div class="col-lg-5 col-md-12 col-sm-12">
                             <div class="cf_busfpfive_submitbtn ">
                                 <a href="#" class="text-decoration-none Back">
                                 Back
                                 </a>
                             </div>
                         </div>
                         <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="cf_busfpfive_submitbtn">
                                 <a href="#" class="text-decoration-none Continue active">
                                    Continue
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-8 col-md-12 col-sm-12 mx-auto">
                             <div class="cf_busfpfive_fdetails">
                                 <p>
                                 This code may take a few moments to
                                arrive. If the code never reaches you,
                                <span > <a href="#" class="text-decoration-none pl-4">click here to send a new code</a></span>
                                 </p>
                             </div>
                         </div>
                     </div>
                </form>    
             </div>
         </div>
     </div>
 </div> -->

    <!-- 
    ===========================
    End Business partner Part 5\
    ==========================
 -->

    <!-- 
    ===========================
     Business partner Part 6\
    ==========================
 -->
    <!-- <div class="cf_buspartnre_pone_bg pt-5">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-12 col-sm-12">
                 <div class="cf_busfpfive_heading">
                    <h2>Please Enter Your Verification Code</h2>
                 </div>
                 <div class="cf_busfpfive_mobile_icn">
                    <a href="#" class="d-block">
                        <img src="/*<php echo get_template_directory_uri()?>/public/image/busmobileicn.png" alt="">
                    </a>
                 </div>
                 <div class="cf_busfpsix_infomess w-75">
                     <p>We have texted you with the <span>5 digit verification
                    code</span> to the business number you have provided.
                    Please enter it below to verify your phone number.</p>
                 </div>
                 <form autocomplete="off">
                     <div class="row">
                         <div class="col-lg-10 col-md-12 col-sm-12">
                            <div class="form-group cf_pb_20">
                                <input type="password" class="form-control cf_custom_input" name="" aria-describedby="emailHelp" placeholder="* * * * *">
                            </div>
                         </div>
                     </div>
                     <div class="row cf_pb_40">
                         <div class="col-lg-5 col-md-12 col-sm-12">
                             <div class="cf_busfpfive_submitbtn ">
                                 <a href="#" class="text-decoration-none Back">
                                 Back
                                 </a>
                             </div>
                         </div>
                         <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="cf_busfpfive_submitbtn">
                                 <a href="#" class="text-decoration-none Continue active">
                                    Continue
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-8 col-md-12 col-sm-12 mx-auto">
                             <div class="cf_busfpfive_fdetails">
                                 <p>
                                 This code may take a few moments to
                                arrive. If the code never reaches you,
                                <span > <a href="#" class="text-decoration-none pl-4">click here to send a new code</a></span>
                                 </p>
                             </div>
                         </div>
                     </div>
                </form>    
             </div>
         </div>
     </div>
 </div> -->
    <!-- 
    ===========================
    end Business partner Part 6\
    ==========================
 -->
    <!-- 
    ===========================
     Business partner Part 7\
    ==========================
 -->
    <!-- <div class="cf_buspartnre_pone_bg pt-5">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-12 col-sm-12">
                 <div class="cf_busfpfive_heading">
                    <h2>Please Enter Your Verification Code</h2>
                 </div>
                 <div class="cf_busfpfive_mobile_icn">
                    <a href="#" class="d-block">
                        <img src="/*<php echo get_template_directory_uri()?>/public/image/cfb_whatappicn.png" alt="">
                    </a>
                 </div>
                 <div class="cf_busfpseven_infomess w-75">
                    <p class="mb-0 pb-0">We have called you with the <span>5 digit verification code</span>
                        to the business number you have provided.</p>
                    <p>Please enter it below to verify your phone number.</p>
                 </div>
                 <form autocomplete="off">
                     <div class="row">
                         <div class="col-lg-10 col-md-12 col-sm-12">
                            <div class="form-group cf_pb_20">
                                <input type="password" class="form-control cf_custom_input" name="" aria-describedby="emailHelp" placeholder="* * * * *">
                            </div>
                         </div>
                     </div>
                     <div class="row cf_pb_40">
                         <div class="col-lg-5 col-md-12 col-sm-12">
                             <div class="cf_busfpfive_submitbtn ">
                                 <a href="#" class="text-decoration-none Back">
                                 Back
                                 </a>
                             </div>
                         </div>
                         <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="cf_busfpfive_submitbtn">
                                 <a href="#" class="text-decoration-none Continue active">
                                    Continue
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-8 col-md-12 col-sm-12 mx-auto">
                             <div class="cf_busfpfive_fdetails">
                                 <p>
                                 This code may take a few moments to
                                arrive. If the code never reaches you,
                                <span > <a href="#" class="text-decoration-none pl-4">click here to send a new code</a></span>
                                 </p>
                             </div>
                         </div>
                     </div>
                </form>    
             </div>
         </div>
     </div>
 </div> -->
    <!-- 
    ===========================
    end Business partner Part 7\
    ==========================
 -->

    <!-- 
    ===========================
     Business partner Part 8\
    ==========================
 -->
    <!-- <div class="cf_buspartnre_pone_bg pt-5">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-sm-12 col-sm-12 text-center">
                 <div class="cf_busdomep_img">
                 <img src="/*<php echo get_template_directory_uri()?>/public/image/cf_bdone.png" alt="" class="img-fluid">
                 </div>
                 <div class="cf_busdomep_heading">
                    <h2>We can now Manage Your Business Partner Page on Certified BOC</h2>
                 </div>
                 <div class="cf_busdomep_btn">
                    <a href="#" class="text-decoration-none">Continue</a>
                 </div>
             </div>
         </div>
     </div>

 </div> -->
    <!-- 
    ===========================
    end Business partner Part 8\
    ==========================
 -->






</section>


<?php get_footer();?>