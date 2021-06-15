<?php
// Secrch page

get_header();
$dir_path = get_template_directory_uri(); 
?>
<section class="al_mainbg">
    
<div class="container al_Hbannersec_new">
   
    <div class="row flex-column-reverse flex-sm-row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <img src="<?php echo $dir_path; ?>/public/image/add_image.png" class="img-fluid">
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="cf_search_post_tit">
			<?php
			//   $post_type = get_query_var('post_type');
            $post_type =  get_post_type();
              if(!empty($post_type)){
                ?> <h3><?= $post_type;?> > <q>Topic/Keyword</q>Post</h3><?php
              }
            ?>
            </div>
            <form autocomplete="off" role="search" method="get"  action="<?php echo home_url( '/' ); ?>">
                <div class="cf_search_input">
                    <div class="form-group">
                        <input type="text" name="s" class="form-control cf_search-post" placeholder="Type Here to Search Post" required>
                    </div>
                </div>
                <div class="row mb-20">
                    <div class="col-lg-12 col-md-3 col-sm-12 text-right">
                        <input type="submit" class="cf_sech_submitbtn" name="submit" value="Go">
                    </div>
                </div>
            </form>
            <!-- <div class="cf_view_compost">
                <h3>9,171 community topic Post</h3>
            </div> -->

            <!-- Table -->
		
            <table class="table ">
                <thead>
                    <tr>
                        <th class="cf_view_folder mb-20 border-0">
                            <h2>Keyword</h2>
                        </th>
                        <th class="cf_view_folder mb-20 border-0">
                            <h2>Topics</h2>
                        </th>
                    </tr>
                </thead>
                <tbody>
				<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
					?>
                    <tr>
                        <td class="border-0">
                            <h3 class="cf_spot_tit"> 
							 <a href="<?= get_the_permalink();?>" class="text-decoration-none cf_topc_uname"><?= get_the_title();?></a> 
							  
							</h3>
                        </td>
                        <td class="border-0 w-50 cf_topc_details">
                            <?php the_excerpt();?>
                            <a href="<?= get_the_permalink();?>" class="search_readmore">Read More</a>
                        </td>
                    </tr>
					<?php
			    endwhile;
                ?>
                <tr>
                    <td>
                        <?php next_posts_link( 'Older posts' );
                               previous_posts_link( 'Newer posts' ); ?>
                    </td>
                </tr>
                    
                <?php
			    
				else :
			        get_template_part( 'template-parts/content', 'none' );
				endif;
			?>

                </tbody>
            </table>
			
            <!-- /Table -->
        </div>
    </div>
</div>

</section>
<?php
get_footer();
