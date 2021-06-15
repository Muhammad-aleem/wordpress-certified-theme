<?php
/**
 * Template Name: Traveland create an alert
 * Template Post Type: post, page
 */

if ( !is_user_logged_in() ) {
    wp_redirect(site_url());
    exit();
}
$dir_path = get_template_directory_uri(); 
$current_user_id = get_current_user_id();
 get_header();
?>


<section class="cf_alert_bg">
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-12 col-sm-12 mx-auto">
            <div class="cf_crt_alt_tit">
                <h3>Create an Alert</h3>
            </div>
            <div class="cf_acount_line"></div>
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12 mx-auto">
            <form method="POST" autocomplete="off">
                <div class="form-group">
                    <input type="text" name="trald_alert_detsls" class="form-control cf_crt_searchbar" required>
                    <div class="cf_acount_sec_icn">
                        <img src="<?php echo $dir_path;?>/public/image/sec_icn.png" class="img-fluid al_Hcftitter">
                    </div>
                </div>
                <div class="cf_seloption">
                    <p>Select Frequency Options</p>
                    <p class="cf_seloption_des">How Often do you want alerts sent to your email</p>
                </div>
                <div class="cf_userset_tem1_form mb-20">
                    <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="happens_id" name="cf_select_time" >
                            <label class="form-check-label" for="happens_id">As-It-Happens</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="cf_one_day" name="cf_select_time" >
                            <label class="form-check-label" for="cf_one_day">Once a Day</label>
                    </div>
                    <div class="form-check form-check-inline cf_profile_mb_25">
                            <input type="radio" class="form-check-input" id="cf_week" name="cf_select_time">
                            <label class="form-check-label" for="cf_week">Once a Week</label>
                    </div>
                </div>
                <div class="cf_crt_search_des">
                    <p>This will create an email alert for this keyword you are searching for and will appear below in the My Alert Section</p>
                </div>
                <div class="cf_crtalert_btn">
                        <input type="submit" name="submit" value="Create Alert">
                </div>
                <div class="cf_seloption">
                    <p>My Alerts</p>
                   <ul>
                   <?php
                         $traveld_user_meta = get_user_meta($current_user_id, 'traveland_crt_alert', true);
                         if($traveld_user_meta){
                             $basurl = home_url().'/traveland-alerts-page';
                            foreach( $traveld_user_meta as $traveld_user_meta_value){
                                ?><li><a href="<?php echo $basurl.'?alert='.$traveld_user_meta_value?>"><?php echo $traveld_user_meta_value;?></a></li><?php
                            }
                         }
                     ?>

                   </ul>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<script>
    
</script>

<?php get_footer();?>