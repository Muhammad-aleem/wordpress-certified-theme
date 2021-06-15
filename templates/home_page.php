<?php
/**
 * Template Name: Home Page
 * Template Post Type: post, page
 */
get_header();
?>
<section class="al_mainbg">
<div class="container al_Hbannersec_new">
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
    <div class="row">
        <div class="col-md-10 col-sm-12">
            <div class="al_cfsubheading">
                <h1><span class="al_cfsubcolo">CURRENTLY TRENDING IN</span> <span class="al_cfseccol">THE CITY LOCATION</span></h1>
            </div>
        </div>
        <div class="col-md-2 col-sm-12 my-auto">
            <div class="al_cfsubsecsub">
                <h3>SWITCH LOCATION</h3>
            </div>
        </div>
    </div>
</div>
<div class="container mb-20">
    <div class="row">
        <div class="col-md-12">
        <?php
            $cf_loop_args = array(  
                'post_type' => 'listing',
                'post_status' => 'publish',
                'posts_per_page' => 7, 
                'orderby' => 'title', 
                'order' => 'ASC', 
            );
            $cf_cpt_loop = new WP_Query( $cf_loop_args ); 
            ?>
            <div class="multiitem">

            <?php
                if ( $cf_cpt_loop->have_posts() ) : 
                    while ( $cf_cpt_loop->have_posts() ) : $cf_cpt_loop->the_post(); 
                    
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'homepage_cpt_img_size'); 
                        ?>
                            <div class="">
                                <a href="<?php the_permalink();?>">
                                    <img src="<?php echo  $featured_img_url ;?>" alt="Image Missing" class="img-fluid">
                                        <?php $terms = get_the_terms( $post->ID, 'listing_category' ); 
                                            if(!empty($terms)){
                                            foreach($terms as $term) {
                                                $termlinks = get_term_link($term);
                                                    echo '<h2 class="post-content--cat">';
                                                            echo '<a href="' . $termlinks . '">' . $term->name . '</a>';  
                                                echo '</h2>';
                                        }
                                    }  ?>
                                </a>
                            </div>
                        <?php
                    endwhile; 
                endif; 
                wp_reset_postdata(); 
            ?>





                <!-- <div class="">
                    <a href="#">
                        <img src="https://picsum.photos/250/200" alt="" class="img-fluid">
                        <h2>Category Name</h2>
                    </a>
                </div> -->
                 
            </div>
        </div>
    </div>
</div>
<div class="container mb-20">
    <div class="row">
        <div class="col-md-12">
            <div class="al_cfmainslider">
                <div class="">
                    <img src="https://picsum.photos/1200/300" alt="">
                </div>
                <div class="" >
                    <img src="https://picsum.photos/id/237/1200/300" alt="">
                </div>
                <div class="">
                    <img src="https://picsum.photos/1200/300?grayscale" alt="">
                </div>
                <div class="">
                    <img src="https://picsum.photos/seed/picsum/1200/300" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider -->
<div class="container mb-50 al_mobile_mb">
    <div class="row">
        <div class="col-md-3">
            <div class="al_cfshartex">
              <a href="#" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/public/image/sharetest.png" class="img-fluid">
              </a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="al_cfaddphototext">
                <a href="#" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/public/image/camara.png" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="al_sharebtn">
                <a href="#" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/public/image/sharebtn.png" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="al_cfaddtext">
                <a href="#" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/public/image/add.png" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="col-md-3">
        </div>

        </div>
    </div>
</div>
<div class="container">
  <div class="row">
      <div class="col-md-6">
        <div class="al_cfpoday text-left mb-20">
              <a href="#" class="d-block">
                <img src="<?php echo get_template_directory_uri(); ?>/public/image/pday.png" class="img-fluid">
              </a>
          </div>
          <div class="al_redate">
              <span class="al_dtit">
                Review Date:
              </span>
              <span class="al_cfdate">
                 10/20/2020
              </span>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="al_reviewimg">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/image/reviewimg.png" class="img-fluid">
                  </div>
                  <div class="al_revicnlils">
                    <ul>
                        <li class="al_revshare">
                            <a href="#" class="d-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/shareicn.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revthumbicn">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/thumbicn.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revmessageicn">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/messageicn.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revfollow">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/follow.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revflagicn">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/flagicn.png" class="img-fluid"> 
                            </a>
                        </li>
                    </ul>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="al_revidetails">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, sint. Voluptatum..</p>

                        <a href="#" class="al_cfrmpost">Read More...</a>
                  </div>
              </div>
          </div>

          <div class="al_redate">
              <span class="al_dtit">
                Review Date:
              </span>
              <span class="al_cfdate">
                 10/20/2020
              </span>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="al_reviewimg">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/image/reviewimg.png" class="img-fluid">
                  </div>
                  <div class="al_revicnlils">
                    <ul>
                        <li class="al_revshare">
                            <a href="#" class="d-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/shareicn.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revthumbicn">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/thumbicn.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revmessageicn">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/messageicn.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revfollow">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/follow.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revflagicn">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/flagicn.png" class="img-fluid"> 
                            </a>
                        </li>
                    </ul>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="al_revidetails">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, sint. Voluptatum..</p>

                        <a href="#" class="al_cfrmpost">Read More...</a>
                  </div>
              </div>
          </div>
          <div class="al_redate">
              <span class="al_dtit">
                Review Date:
              </span>
              <span class="al_cfdate">
                 10/20/2020
              </span>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="al_reviewimg">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/image/reviewimg.png" class="img-fluid">
                  </div>
                  <div class="al_revicnlils">
                    <ul>
                        <li class="al_revshare">
                            <a href="#" class="d-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/shareicn.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revthumbicn">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/thumbicn.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revmessageicn">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/messageicn.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revfollow">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/follow.png" class="img-fluid"> 
                            </a>
                        </li>
                        <li class="al_revflagicn">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/flagicn.png" class="img-fluid"> 
                            </a>
                        </li>
                    </ul>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="al_revidetails">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, sint. Voluptatum..</p>

                        <a href="#" class="al_cfrmpost">Read More...</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-sm-12">
            <div class="al_cfshop text-right mb-20">
              <a href="#" class="d-block">
                <img src="<?php echo get_template_directory_uri(); ?>/public/image/newshop.png" class="img-fluid">
              </a>
            </div>
            <div class="row text-right mb-20">
                    <div class="col-md-4  offset-md-4">
                        <div class="al_cdfeaturetex">
                            <a href="#">
                                Featured
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="al_cdseealltex">
                                <a href="#">See All</a>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12 offset-md-4">
                    <div class="al_cffimg mb-1">
                        <a href="#" class="al_cfplusicn"></a>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/image/fimg.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 offset-md-4">
                    <div class="al_shopitem">
                        <a href="#">Item Name</a>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="al_shopprice text-center">
                        <span>$ 000</span>
                        <span>
                            <a href="#" class="ml-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/shoppingicon.png" class="img-fluid">
                            </a>
                        </span>
                    </div>
                </div>
                <div class="col-md-8 offset-md-4">
                    <div class="al_cfshopdetails mb-3">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.</p>
                        <a href="#" class="al_cfrmpost">Read More...</a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12 offset-md-4">
                    <div class="al_cffimg mb-1">
                        <a href="#" class="al_cfplusicn"></a>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/image/fimg.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 offset-md-4">
                    <div class="al_shopitem">
                        <a href="#">Item Name</a>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="al_shopprice text-center">
                        <span>$ 000</span>
                        <span>
                            <a href="#" class="ml-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/image/shoppingicon.png" class="img-fluid">
                            </a>
                        </span>
                    </div>
                </div>
                <div class="col-md-8 offset-md-4">
                    <div class="al_cfshopdetails mb-3">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam libero error nihil deserunt inventore voluptate facere corrupti possimus? Necessitatibus suscipit officia esse repellendus eligendi ratione fuga modi vitae, doloribus numquam.</p>
                        <a href="#" class="al_cfrmpost ">Read More...</a>
                    </div>
                </div>

            </div>
            
      </div>

  </div>
</div>
</section>

<?php get_footer();?>