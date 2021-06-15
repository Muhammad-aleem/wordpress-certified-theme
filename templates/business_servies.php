<?php
/**
 * Template Name: Business Services 
 * Template Post Type: post, page
 */

$dir_path = get_template_directory_uri();
$business_uplode_image = home_url().'/business-uplode-image';
$business_call_action = home_url().'/business-call-to-action';
$business_services = home_url().'/business-services';

$email_vcode = get_user_meta(get_current_user_id(), 'email_verify_number', true ); 
$business_partner = home_url().'/business-partner';
if(empty($email_vcode)){
    wp_redirect( $business_partner );
    exit;
}


if(isset($_POST['bus_uplode_services'])){

    $business_post_id = get_user_meta(get_current_user_id(), 'wp_business_post_id', true );
    $services = array();
    $services[] = $_POST['bus_servicesname']; 
    update_post_meta($business_post_id, 'wp_business_services_value', $services);

    $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    wp_redirect($this_page_link);
}

get_header();
?>

<section class="cf_business_submit">
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
            <div class="col-lg-6 col-md-6 col-sm-12 my-auto">
                <div class="cf_buspartner_heading">
                    <h2>Business Partner | <span class="cf_buspartner_color">The Biz Backend</span></h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 my-auto">
                    <div class="cf_buspartner_topicn">
                        <a href="#">
                            <img src="<?php echo $dir_path?>/public/image/blackbell.png" alt="" class="img-fluid cf_review_head_img">
                        </a>
                        <a href="#">
                            <img src="<?php echo $dir_path?>/public/image/border_message.png" alt="" class="img-fluid cf_review_head_img">
                        </a>
                        <a href="#">
                            <img src="<?php echo $dir_path?>/public/image/border_user.png" alt="" class="img-fluid cf_review_head_img">
                        </a>
                        <a href="#">
                            <img src="<?php echo $dir_path?>/public/image/black_music.png" alt="" class="img-fluid cf_review_head_img">
                        </a>
                    </div>
            </div>
        </div>
    </div>


    <div class="cf_buspartnre_pone_bg pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                        <div class="cf_bus_sidebar_toplink">
                            <a href="#" class="text-decoration-none bus_home">Home</a>
                            <h6>Business Name</h6>
                            <p>Business Address</p>
                            <p>City, State Zip Code</p>
                            <p>Add Location</p>
                        </div>
                        <div class="cf_bus_sidebar_link">
                            <a href="#" class="text-decoration-none">Home</a>
                            <a href="#" class="text-decoration-none" >Your Business Partner Page Live</a>
                            <a href="#" class="text-decoration-none" >Branding</a>
                            <a href="<?= $business_uplode_image;?>" class="text-decoration-none " >Images</a>
                            <a href="<?= $business_services?>" class="text-decoration-none active" >Services</a>
                            <a href="<?= $business_call_action;?>" class="text-decoration-none" >Call to Action</a>
                            <a href="#" class="text-decoration-none" >Business Info</a>
                            <a href="#" class="text-decoration-none" >Props and Call Outs</a>
                            <a href="#" class="text-decoration-none" >Store</a>
                            <a href="#" class="text-decoration-none" >Inbox</a>
                            <a href="#" class="text-decoration-none" >Coupons and Gift Certificates</a>
                            <a href="#" class="text-decoration-none" >Analytics</a>
                            <a href="#" class="text-decoration-none" >Invoicing and Billing</a>
                            <a href="#" class="text-decoration-none" >Entertainment</a>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="cf_business_content">
                        <div class="cf_business_contenttop">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="cf_business_lftcontent">
                                        <h3>Business Name</h3>
                                        <h5>Business Category</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="cf_business_ritcontent">
                                        <h6><span>15</span> Props</h6>
                                        <h6><span>3</span> Call Outs</h6>
                                        <h6><span>25</span> Page Visits Today</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form method="POST" autocomplete="off">
                        <div class="cf_business_content_tit">
                            <h2>Business Images</h2>
                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6">
                                    <div class="bus_add_servic">
                                        <h4>Categories</h4>
                                        <p>You can list up to 3 categories</p>
                                        <!-- <input type="text" id="add_bus_cat"> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                <div class="bus_add_servic">
                                        <h4>Services</h4>
                                        <p>You can list up to 5 Services</p>
                                        <input type="text" name="bus_servicesname" id="add_bus_services"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="business_uplodeimg mt-5">
                            <button type="submit" name="bus_uplode_services">Uplode</button>
                        </div> 
                        </form>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-3">
                    <div class="cf_business_appsimg">
                        <h4>Download the
                            Certified BOC App Today!
                        </h4>
                        <img src="<?php echo $dir_path?>/public/image/cf_buspartnerimg.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>

<?php get_footer();?>