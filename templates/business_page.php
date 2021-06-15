<?php
/**
 * Template Name: Business Details Page
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
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div >
                <h1 class="cf_bsheading"><span class="al_cfsubcolo">BUSINESS NAME</span></h1>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cf_bushead_icn text-right pt-3">
                <ul>
                        <li>
                            <a href="#">
                                <img src="<?php echo $dir_path?>/public/image/instragram.png" class="img-fluid">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo $dir_path?>/public/image/youtube.png" class="img-fluid al_Hcfyoutube">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo $dir_path?>/public/image/twitter.png" class="img-fluid al_Hcftitter">
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="col-md-2 col-sm-12">
            <div class="al_cfsubsecsub pt-3 cf_busmob_pt_0">
                <h3 class="cf_busin_location">THE CITY LOCATION</h3>
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
<!-- Info Section -->
<div class="container mb-40">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
           <div class="cf_inforate">
                <h2>Rating</h2>
           </div>
           <div class="cf_infoimg">
               <span><img src="<?php echo get_template_directory_uri(); ?>/public/image/Certified Icons1.png" alt=""></span>
               <span class="cf_infoimg2"><img src="<?php echo get_template_directory_uri(); ?>/public/image/Certified Icons2.png" alt="" class="img-fluid"></span>
               <span class="cf_infoimg2"><img src="<?php echo get_template_directory_uri(); ?>/public/image/Certified Icons3.png" alt="" class="img-fluid"></span>
               <span class="cf_infoimg2"><img src="<?php echo get_template_directory_uri(); ?>/public/image/Certified Icons1.png" alt="" class="img-fluid"></span>
               <span class="cf_infoimg2"><img src="<?php echo get_template_directory_uri(); ?>/public/image/Certified Icons2.png" alt="" class="img-fluid"></span>
               <span class="cf_ratecount">(4.7)</span>
           </div>
           <div class="cf_infotime">
               <span class="cf_infotimetit mr-4" data-toggle="modal" data-target="#cf_buss_pop">Now Open</span>
               <span class="cf_infotimecont">11:30 AM - 5:30 pm </span>
           </div>
                <!-- Modal -->
                    <div class="modal fade" id="cf_buss_pop" tabindex="-1" role="dialog" aria-labelledby="cf_buss_popLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content cf_buss_bg">
                            <div class="modal-header">
                                <div class="container">  
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-12 col-4">
                                            <h5 class="modal-title" id="cf_buss_popLabel">See Full Page</h5>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 cf_pop_pl_0 col-6">
                                            <div class="pop_logo">
                                                <img src="<?php echo $dir_path?>/public/image/pop_logo.png" alt="" class="img-fluid cf_buss_poplogo">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-12 col-2">
                                            <img src="<?php echo $dir_path?>/public/image/close_btn.png" alt="" class="cf_bus_popclosbtn img-fluid cf_bs_closbtn" data-dismiss="modal" aria-label="Close">
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <div class="modal-body">
                                <div class="container">
                                    <form autocomplete="off">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="cf_pop_heading">
                                                    <h2>BUSINESS NAME HERE</h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="cf_buss_pop_wrap">
                                                    <div class="form-group ">
                                                        <textarea class="form-control cf_buss_pop_details" rows="5">
                                                            accusantium doloremque laudantium, totam rem aperiam, eaque 
                                                            ipsa quae ab illo inventore veritatis et quasi architecto beatae 
                                                            vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia 
                                                            voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur 
                                                            magni dolores eos qui ratione voluptatem sequi nesciunt. 
                                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit 
                                                            amet, consectetur, adipisci velit, sed quia non numquam eius 
                                                            modi tempora incidunt ut labore et dolore magnam aliquam 
                                                            quaerat voluptatem. Ut enim ad minima veniam, quis nostrum e
                                                            xercitationem ullam corporis suscipit laboriosam, nisi ut aliquid 
                                                            ex ea commodi consequatur? Quis autem vel eum iure reprehen
                                                            derit qui in ea voluptate velit esse quam nihil molestiae conseq
                                                            uatur, vel illum qui dolorem eum fugiat quo voluptas nulla 
                                                            pariatur?"
                                                        </textarea>
                                                    </div>
                                                    <h6>800 Words Max</h6>
                                                </div>
                                                <div class="cf_buss_upldimg_heading">
                                                    <h6>Attach Photos | Optional</h6>
                                                    <div class="file_uplode">
                                                        <label>
                                                        <img src="<?php echo $dir_path?>/public/image/uplode_image_icn.png" alt="" class="img-fluid">
                                                                <input type="file" size="60" >
                                                        </label> 
                                                    </div>
                                                </div>
                                                <div class="cf_pop_rating">
                                                    <h6>Choose Your Rating</h6>
                                                </div>
                                                <div class="cf_pop_rating_img text-center">
                                                    <div class="row">
                                                        <div class="col cf_pr_pop_ cf_pl_30">
                                                            <span>
                                                                <img src="<?php echo $dir_path;?>/public/image/Certified Icons1.png" alt="" class="img-fluid">
                                                            </span>
                                                            <h6>1-Weak</h6>
                                                        </div>
                                                        <div class="col cf_pr_pop_ cf_pl_pop_">
                                                            <span>
                                                                <img src="<?php echo $dir_path;  ?>/public/image/Certified Icons2.png" alt="" class="img-fluid">
                                                            </span>
                                                            <h6>2-Aight</h6>
                                                        </div>
                                                        <div class="col cf_pr_pop_ cf_pl_pop_">
                                                            <span>
                                                                <img src="<?php echo $dir_path ?>/public/image/Certified Icons3.png" alt="" class="img-fluid">
                                                            </span>
                                                            <h6>3-So So</h6>
                                                        </div>
                                                        <div class="col cf_pr_pop_ cf_pl_pop_">
                                                            <span>
                                                                <img src="<?php echo $dir_path ?>/public/image/Certified Icons1.png" alt="" class="img-fluid">
                                                            </span>
                                                            <h6>4-Legit</h6>
                                                        </div>
                                                        <div class="col  cf_pl_pop_ cf_pr_30">
                                                            <span>
                                                                <img src="<?php echo $dir_path; ?>/public/image/Certified Icons2.png" alt="" class="img-fluid">
                                                            </span>
                                                            <h6>4-Certified</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-md-10 text-center mx-auto col-sm-12">
                                                <input type="submit" class="cf_buss_pop_submit" name="submit" value="Submit">
                                                <div class="cf_pop_ftext">
                                                    <a href="#">Read our RULES regarding reviews</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <!--  -->
        </div>
        <div class="offset-lg-2 offset-md-2  col-lg-4 col-md-4 col-sm-12">
            <div class="cf_infoadress">
                <h2>Address</h2>
                <p>5211 South Crenshaw Blvd City, State Zipcode</p>
            </div>
            <div class="cf_infoactionbtn">
                <span class="cf_allactionbtn">
                    <a href="#">Call to Action Button</a>
                </span>
                <span>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/image/cf_live.png" alt="" class="img-fluid cf_liveicn">
                    </a>
                </span>
            </div>
                
        </div>

    </div>
</div>
<!--End Info Section -->

<div class="container mb-50 al_mobile_mb">
    <div class="row mb-30">
        <div class="col-md-3 my-auto">
            <div class="al_cfshartex">
              <a href="#" class="d-block">
                <img src="<?php echo get_template_directory_uri(); ?>/public/image/sharetest.png" class="img-fluid">
              </a>
            </div>
        </div>
        <div class="col-md-3 my-auto">
            <div class="al_cfaddphototext">
                <a href="#" class="d-block">
                <img src="<?php echo get_template_directory_uri(); ?>/public/image/camara.png" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="col-md-3 my-auto">
            <div class="al_sharebtn">
                <a href="#" class="d-block">
                <img src="<?php echo get_template_directory_uri(); ?>/public/image/sharebtn.png" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="col-md-3 my-auto">
            <div class="al_cfaddtext">
                <a href="#" class="d-block">
                <img src="<?php echo get_template_directory_uri(); ?>/public/image/add.png" class="img-fluid">
                </a>
            </div>
        </div>
        
    </div>
        <!-- Business Description -->
        <div class="row mb-20">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="cf_businheading">
                    <h2>BUSINESS DESCRIPTION</h2>
                </div>
                <div class="cf_busindetails">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolor natus vero esse, nostrum sit dolore molestias ea, explicabo tempore excepturi aliquam non, reprehenderit totam repudiandae consequatur temporibus dignissimos alias! </p>
                </div>
            </div>
        </div>
        <!--End Business Description -->
        <!-- Services section -->
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="cf_servicesheading">
                    <h2>Services</h2>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="cf_servicesname">
                            <h6>Service Name Here</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="cf_servicesname">
                            <h6>Service Name Here</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="cf_servicesname">
                            <h6>Service Name Here</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="cf_servicesname">
                            <h6>Service Name Here</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="cf_servicesname">
                            <h6>Service Name Here</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="cf_servicesname">
                            <h6>Service Name Here</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="cf_servicesname">
                            <h6>Service Name Here</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="cf_servicesname">
                            <h6>Service Name Here</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!--End Services section -->
</div>
<!--Secound Slider -->

<div class="container mb-20">
    <div class="row">
        <div class="col-md-12">
            <div class="al_cfbusinessslider">
                <div class="">
                    <img src="https://picsum.photos/500/300" alt="" class="img-fluid">
                </div>
                <div class="" >
                    <img src="https://picsum.photos/id/237/500/300" alt="" class="img-fluid">
                </div>
                <div class="">
                    <img src="https://picsum.photos/500/300?grayscale" alt="" class="img-fluid">
                </div>
                <div class="">
                    <img src="https://picsum.photos/seed/picsum/500/300" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Slider -->

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
                <div class="al_cfbusshop text-center mb-20">
                    <a href="#" class="d-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/image/bshop.png" class="img-fluid">
                    </a>
                </div>
            <div class="row text-right mb-20">
                    <div class="col-md-4  offset-md-4">
                        <div class="al_cdfeaturetex text-left">
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