<?php
/**
 * Template Name: Submit Business Form
 * Template Post Type: post, page
 */

if ( !is_user_logged_in() ) {
        wp_redirect(site_url());
        exit();
    }

$dir_path = get_template_directory_uri(); 

if(isset($_POST['submit_business_post'])){
    $business_name  = $_POST['business_name'];
    $business_address  = $_POST['business_address'];
    $business_description  = $_POST['business_description'];
    $call_toaction_text  = $_POST['call_toaction_text'];
    $call_toaction_link  = $_POST['call_toaction_link'];

    $post_type="wp_business_listing";
    $add_post = array(
      'post_title'    => $business_name,
      'post_content'  => $business_description,
      'post_excerpt'      =>  $business_address,
      'post_status'   => 'publish',     
      'post_type'     => $post_type
    );
    $insert_post = wp_insert_post($add_post);
    $services = array();
    $services[] = $_POST['business_services']; 
    add_post_meta($insert_post, 'wp_business_services_value', $services, true);
    add_post_meta($insert_post, 'bus_call_action_text_value', $call_toaction_text, true);
    add_post_meta($insert_post, 'bus_call_action_link_value', $call_toaction_link, true);

    if ( ! empty( $_FILES['bus_image_gallery'] )  ) {
        $save_value = '';
        $files = $_FILES['bus_image_gallery'];
        foreach ($files['name'] as $key => $value){
            if ($files['name'][$key]){
                $file = array(
                'name' => $files['name'][$key],
                'type' => $files['type'][$key],
                'tmp_name' => $files['tmp_name'][$key],
                'error' => $files['error'][$key],
                'size' => $files['size'][$key]
                );
            }
            $_FILES = array("bus_image_gallery" => $file);
            $i=1;
                foreach ($_FILES as $file => $array) {
                      if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) __return_false();
                        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
                        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
                        require_once(ABSPATH . "wp-admin" . '/includes/media.php');
                        $attachment_id = media_handle_upload($file, $insert_post);
                        $save_value .= $attachment_id . ",";
                        $i++;
                }
                update_post_meta($insert_post, '_business_image_gallery_val',  $save_value);
        }
    }

    $this_page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    wp_redirect($this_page_link);
    exit();
    
}


get_header();

?>

<section class="al_mainbg">

<div class="container pt-5">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 cf_tevl_ptwo_fm">
            <form method="POST"  enctype="multipart/form-data" autocomplete="off">
                <div class="row mb-20">
                    <div class="col-lg-12 col-md-12 col-12">
                        <label for="topic_id" class="fm_post_tit">Business Name</label>
                        <input type="text" class="form-control" name="business_name" id="topic_id" placeholder="Business Name" required>
                    </div>
                </div>
                <div class="row mb-20">
                    <div class="col-lg-12 col-md-12 col-12">
                        <label for="topic_id" class="fm_post_tit">Call to Action Text</label>
                        <input type="text" class="form-control" name="call_toaction_text" id="topic_id" placeholder="Call to Action Text" required>
                    </div>
                </div>
                <div class="row mb-20">
                    <div class="col-lg-12 col-md-12 col-12">
                        <label for="topic_id" class="fm_post_tit">Call to Action Link</label>
                        <input type="text" class="form-control" name="call_toaction_link" id="topic_id" placeholder="Call to Action Link" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="com_post_tit" class="fm_post_tit">Business Address</label>
                    <input type="text" class="form-control cf_tevl_pottit" name="business_address"  id="com_post_tit" placeholder="Business Address" required>
                </div>
                <div class="form-group mb-40">
                    <label for="commtysub_post_details" class="fm_post_tit">BUSINESS DESCRIPTION</label>
                    <textarea class="form-control" id="commtysub_post_details" name="business_description" rows="9" placeholder="BUSINESS DESCRIPTION" required></textarea>
                </div>
                <div class="form-group">
                    <label for="business_services_id" class="fm_post_tit">SERVICES</label>
                    <input type="text" class="form-control cf_tevl_pottit" name="business_services" id="business_services_id" placeholder="SERVICES" required>
                </div>
                <div class="cf_tevl_poto">
                    <div class="al_cfaddphototext">
                        <div class="cf_uplodeimg">
                            <label>
                            <img src="<?php echo $dir_path;?>/public/image/camara.png" class="img-fluid">
                                    <input type="file" size="60" name="bus_image_gallery[]" multiple="multiple">
                            </label> 
                        </div>
                    </div>
                </div>
                
                <div class="cf_tevl_ptwo_submit w-25 m-auto">
                    <input type="submit" class="form-control mb-40" id="comunty_sunmit_post" name="submit_business_post" value="Submit Your Post">
                </div>
            </form>
        </div>
    </div>
</div>


</section>



<?php get_footer();?>