<?php
/**
 * Template Name:Shop Page
 * Template Post Type: post, page
 */
get_header();
$dir_path = get_template_directory_uri(); 
?>
<section class="al_mainbg">
<div class="container al_Hbannersec_new">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="al_findbustit">
                <h1>Search all shops</h1>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="al_hmainicon text-right">
                <ul>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/instragram.png" class="img-fluid">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/youtube.png" class="img-fluid al_Hcfyoutube">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/image/twitter.png" class="img-fluid al_Hcftitter">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="al_cfhomesearch cf_shop_pb">
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
<div class="container">
    <div class="row cf_mb_review">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="cf_shoppage_content">
                <h1 class="cf_shoppage_tit">Sponsored Results</h1>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_recent_review">
                <img src="<?php echo $dir_path; ?>/public/image/reviewimg.png" class="img-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_name">
                            <a href="#">
                                Item Name
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_price">
                            <span>$ Price</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf_review_detils">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.
                </p>
            </div>
            <div class="cf_review_btn">
                <a href="#" class="text-decoration-none">View Business Page</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_recent_review">
                <img src="<?php echo $dir_path; ?>/public/image/reviewimg.png" class="img-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_name">
                            <a href="#">
                                Item Name
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_price">
                            <span>$ Price</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf_review_detils">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.
                </p>
            </div>
            <div class="cf_review_btn">
                <a href="#" class="text-decoration-none">View Business Page</a>
            </div>
        </div> 
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_recent_review">
                <img src="<?php echo $dir_path; ?>/public/image/reviewimg.png" class="img-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_name">
                            <a href="#">
                                Item Name
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_price">
                            <span>$ Price</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf_review_detils">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.
                </p>
            </div>
            <div class="cf_review_btn">
                <a href="#" class="text-decoration-none">View Business Page</a>
            </div>
        </div>
    </div>
    <div class="row cf_mb_review">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="cf_shoppage_content">
                <h1 class="cf_shoppage_tit">SEARCH RESULTS</h1>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_recent_review">
                <img src="<?php echo $dir_path; ?>/public/image/reviewimg.png" class="img-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_name">
                            <a href="#">
                                Item Name
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_price">
                            <span>$ Price</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf_review_detils">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.
                </p>
            </div>
            <div class="cf_review_btn">
                <a href="#" class="text-decoration-none">View Business Page</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_recent_review">
                <img src="<?php echo $dir_path; ?>/public/image/reviewimg.png" class="img-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_name">
                            <a href="#">
                                Item Name
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_price">
                            <span>$ Price</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf_review_detils">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.
                </p>
            </div>
            <div class="cf_review_btn">
                <a href="#" class="text-decoration-none">View Business Page</a>
            </div>
        </div> 
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_recent_review">
                <img src="<?php echo $dir_path; ?>/public/image/reviewimg.png" class="img-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_name">
                            <a href="#">
                                Item Name
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_price">
                            <span>$ Price</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf_review_detils">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.
                </p>
            </div>
            <div class="cf_review_btn">
                <a href="#" class="text-decoration-none">View Business Page</a>
            </div>
        </div>
    </div>
    <div class="row cf_mb_review">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_recent_review">
                <img src="<?php echo $dir_path; ?>/public/image/reviewimg.png" class="img-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_name">
                            <a href="#">
                                Item Name
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_price">
                            <span>$ Price</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf_review_detils">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.
                </p>
            </div>
            <div class="cf_review_btn">
                <a href="#" class="text-decoration-none">View Business Page</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_recent_review">
                <img src="<?php echo $dir_path; ?>/public/image/reviewimg.png" class="img-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_name">
                            <a href="#">
                                Item Name
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_price">
                            <span>$ Price</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf_review_detils">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.
                </p>
            </div>
            <div class="cf_review_btn">
                <a href="#" class="text-decoration-none">View Business Page</a>
            </div>
        </div> 
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_recent_review">
                <img src="<?php echo $dir_path; ?>/public/image/reviewimg.png" class="img-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_name">
                            <a href="#">
                                Item Name
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_price">
                            <span>$ Price</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf_review_detils">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.
                </p>
            </div>
            <div class="cf_review_btn">
                <a href="#" class="text-decoration-none">View Business Page</a>
            </div>
        </div>
    </div>
    <div class="row cf_mb_review">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_recent_review">
                <img src="<?php echo $dir_path; ?>/public/image/reviewimg.png" class="img-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_name">
                            <a href="#">
                                Item Name
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_price">
                            <span>$ Price</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf_review_detils">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.
                </p>
            </div>
            <div class="cf_review_btn">
                <a href="#" class="text-decoration-none">View Business Page</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_recent_review">
                <img src="<?php echo $dir_path; ?>/public/image/reviewimg.png" class="img-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_name">
                            <a href="#">
                                Item Name
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_price">
                            <span>$ Price</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf_review_detils">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.
                </p>
            </div>
            <div class="cf_review_btn">
                <a href="#" class="text-decoration-none">View Business Page</a>
            </div>
        </div> 
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_recent_review">
                <img src="<?php echo $dir_path; ?>/public/image/reviewimg.png" class="img-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_name">
                            <a href="#">
                                Item Name
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                        <div class="cf_review_item_price">
                            <span>$ Price</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf_review_detils">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.
                </p>
            </div>
            <div class="cf_review_btn">
                <a href="#" class="text-decoration-none">View Business Page</a>
            </div>
        </div>
    </div>
</div>
</section>

<?php get_footer();?> 