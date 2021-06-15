<?php



function create_slick_slider_posttype() {
    register_post_type( 'wp_cfhome_slider',
        array(
            'labels' => array(
                'name' => __( 'Home Slider' ),
                'singular_name' => __( 'wp_cf_homeslider' ),
                'all_items'           => __( 'All Slider Items'),
                'add_new_item'        => __( 'Add New Slider Image' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'wp_cf_homeslider_url'),
            'show_in_rest' => true,
            'menu_icon'           => ( version_compare( $GLOBALS['wp_version'], '3.8', '>=' ) ) ? 'dashicons-admin-collapse' : '',
            'supports'    => array('title','editor', 'thumbnail','excerpt',)
        )
	);
}
add_action( 'init', 'create_slick_slider_posttype' );


if(!function_exists('wp_custom_home_slider_scode')){
  function wp_custom_home_slider_scode(){
    ob_start();
	?>
	<?php
  $args = array(  
    'post_type' => 'wp_cfhome_slider',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
);
$loop = new WP_Query( $args ); 

?>
<div class="container mb-20">
    <div class="row">
        <div class="col-md-12">
            <div class="al_cfmainslider">
<?php

if ( $loop->have_posts() ) : 
    // Start the Loop 
    while ( $loop->have_posts() ) : $loop->the_post();
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url=null;
    if(!empty( $thumb_url_array)){
        $thumb_url = $thumb_url_array[0]; 
    }

?>

            <div class="home_slider_image">
                <!-- <img src="https://picsum.photos/1200/300" alt=""> -->
                <a href="<?php the_permalink()?>">
                    <img src="<?php echo $thumb_url;?>" alt="no image" class="img-fluid">
                </a>
            </div>

<?php






endwhile;
endif;

// html code 
wp_reset_postdata( );
?>

            </div>
        </div>
    </div>
</div>
<?php
 
    $htmlRetu = ob_get_contents();
    ob_end_clean();
    return $htmlRetu;

  }

}

add_shortcode('al_home_shortcodeaa', 'wp_custom_home_slider_scode');




?>