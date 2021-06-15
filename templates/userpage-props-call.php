<?php
/**
 * Template Name: User props and call
 * Template Post Type: post, page
 */

if ( !is_user_logged_in() ) {
    wp_redirect(site_url());
    exit();
}

get_header();
$get_path = get_template_directory_uri();
$authorid = get_current_user_id();

// redicect to url
$redic_community_url =  home_url().'/user-community-post';
$redic_props_and_call =  home_url().'/user-props-and-call';
$redic_travel =  home_url().'/user-travel';
$user_profile =  home_url().'/user-profile';


// Community Post Count 
$args = array(
    'post_type' => 'community',
    'author' => $authorid,
    'post_status'    => 'publish',
    'posts_per_page' => 3, 
);

$community_post = new WP_Query($args);

$community_post_count = $community_post->found_posts;

// traveland Post Count 
$args = array(
    'post_type' => 'traveland',
    'author' => $authorid,
    'post_status'    => 'publish',
    'posts_per_page' => -1
);

$travel = new WP_Query($args);

$travel_post_count = $travel->found_posts;








// User name and user image 

$avatar_url = get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450));
$user_image = get_user_meta($authorid , 'user_image', true);
$scr = wp_get_attachment_image_src($user_image, 'full');
$user_firstname = get_user_meta($authorid , 'first_name', true );

// get the last name of the user as a string
$user_lastname = get_user_meta($authorid , 'last_name', true );



// get the user profile background image
$user_image = get_user_meta($authorid , 'user_background_image', true);
$user_background_image = wp_get_attachment_image_src($user_image, 'full');




?>
<section class="usersett_tem_1_bg">
    
    <div class="container">
        <div class="public_community_bg">
                <style>
                        .public_community_bg {
                            background-image: url(<?php
                                            if($user_background_image){
                                            echo  $user_background_image[0];
                                            }
                                            
                                ?>);
                            background-repeat: no-repeat;
                            background-size: cover; 
                        }
                </style>
                <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="user_community_profile">
                        <?php
                        if($scr){
                            ?>
                        <img src="<?= $scr[0];?>" class="img-fluid">
                        <?php
                        }else{
                            ?>
                        <img src="<?= $avatar_url;?>" class="img-fluid">
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="cf_user_setting_heading">
                    <h2><?= $user_firstname; ?> <?= $user_lastname;?>.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12">   
                <div class="user_living_text">
                    <h3>Vegas Living and Pushing Forward </h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="user_comm_follow">
                    <a href="<?=  $user_profile;?>" class="text-decoration-none">
                        Edit Profile
                        <img src="<?php echo $get_path?>/public/image/edit_post.png" class="img-fluid">
                    </a>
                </div>
            </div>
            <!-- <div class="col-lg-1 col-md-1 col-sm-12">
                <div class="user_subsc_icn">
                    <a href="#">
                        <img src="<?php echo $get_path?>/public/image/subsc_icn.png" class="img-fluid">
                    </a>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-3 col-sm-12">
                <div class="user_liveicn">
                    <a href="#">
                        <img src="<?php echo $get_path?>/public/image/cf_live.png" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="user_thumb_up">
                    <span class="user_thumb_number">0</span>
                    <span>Thumbs Up</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                 <div class="user_follow_up">
                    <span class="user_follow_up_number">0</span>
                    <span>Following</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="user_followes_up">
                    <span class="user_followes_number">0</span>
                    <span>Followers</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="cf_user_props">
                    <a href="<?= $redic_props_and_call;?>" class="text-decoration-none">
                        <h2>Props and Call Outs <span class="text_color">0</span></h2>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="cf_user_travel_post">
                    <a href="<?= $redic_travel;?>" class="text-decoration-none">
                        <h2>Travel and Experience Post <span class="text_color"><?= $travel_post_count;?></span></h2>
                    </a>    
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="cf_user_comm_post">
                    <a href="<?= $redic_community_url;?>" class="text-decoration-none">
                        <h2>Community Post <span class="text_color"><?= $community_post_count;?></span></h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 mx-auto text-center">
                <div class="cf_user_line"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="user_post_text text-left mb-20">
                    <h2>Props and Call Outs Post</h2>
                </div>
                <div class="user_post_text text-left mb-20 mt-5">
                    <h2 class="text-danger">Oops There is No Posts Yet</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-3 offset-md-3 col-md-3 col-sm-12">
                    <div class="cf_adver_text  mb-20">
                    <h2>Advertisement</h2>
                    </div>            
            </div>

        </div>
</div>
</sectiuon>   
<?php get_footer();?>