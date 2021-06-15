<?php
get_header();

$dir_path = get_template_directory_uri();
?>
<section class="al_mainbg">
    <div class="container al_Hbannersec_new">
            <div class="row row flex-column-reverse flex-sm-row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <img src="<?php echo $dir_path; ?>/public/image/add_image.png" class="img-fluid mb-5">
                    <img src="<?php echo $dir_path; ?>/public/image/add_image.png" class="img-fluid mb-5">
                </div>
            <?php

                if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
            ?>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="cf_comm_usercount">
                        <p><?php $post_date= get_the_time('F j, Y g:i a');
                             echo date_i18n(get_option( 'date_format' ),strtotime($post_date));?></p>
                    </div>
                    <div class="cf_comm_userpostimg ">
                        <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                    </div>
                    <div class="cf_comm_spot_tit">
                        <h2 class="text-white"><?php the_title();?></h2>
                    </div>
                    <div class="cf_comm_userpostimg cf_home_slidersingle">
                        <p>
                            <?php the_content();?>
                        </p>
                    </div>
                </div>

                <?php
                endwhile;
                endif;  
                
                ?>


                
            </div>


    </div>
</section>

<?php

get_footer();