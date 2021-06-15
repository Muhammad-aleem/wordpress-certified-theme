<?php


if(!function_exists('wp_cf_footer_api')){
    function wp_cf_footer_api($wp_customize) {
        $wp_customize->add_section('footer_cf_mocial_media_section', array(
            'title' => esc_html__('Footer Social Media Links'),
            'description' =>esc_html__('You can customize Your Footer Social Media Links'), 
            'priority'=> 35
        ));
        $wp_customize->add_setting('wp_cf_instra_linksetting',array(
            'default'=>'https://www.instagram.com/',	 
        ));
        $wp_customize->add_control('cf_theme_facebook_account_control',array(
            'label' => esc_html__('Add Your Instagram Account Link'),
            'type'=> 'text',
            'section'=>'footer_cf_mocial_media_section', 
            'settings' => 'wp_cf_instra_linksetting'
        ));
         $wp_customize->add_setting('wp_cf_youtube_linksetting',array(
            'default'=>'https://www.youtube.com/',	 
        ));
        $wp_customize->add_control('cf_theme_youtube_control',array(
            'label' => esc_html__('Add Your Youtube Account Link'),
            'type'=> 'text',
            'section'=>'footer_cf_mocial_media_section', 
            'settings' => 'wp_cf_youtube_linksetting'
        ));
         $wp_customize->add_setting('wp_cf_twitter_linksetting',array(
            'default'=>'https://twitter.com/?lang=en',	 
        ));
        $wp_customize->add_control('cf_theme_twitter_control',array(
            'label' => esc_html__('Add Your Twitter Account Link'),
            'type'=> 'text',
            'section'=>'footer_cf_mocial_media_section', 
            'settings' => 'wp_cf_twitter_linksetting'
        ));


        $wp_customize->add_setting( 'wp_footer_logo_setting', array(
            // 'default' => get_theme_file_uri('https://certifiedboc.com/wp-content/uploads/2020/11/certifiedcircle2424-1.png'), 
            'sanitize_callback' => 'esc_url_raw'
        ));
     
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'diwp_logo_control', array(
            'label' => 'Upload Footer Logo',
            'priority' => 20,
            'section' => 'footer_cf_mocial_media_section',
            'settings' => 'wp_footer_logo_setting'
        )));


    }

}

add_action('customize_register','wp_cf_footer_api');



// Home page ads 

// if(!function_exists('wp_homepage_ads')){
//     function wp_homepage_ads($wp_customize) {
//         $wp_customize->add_section('wp_homepage_ads_section', array(
//             'title' => esc_html__('Home Add  Ads'),
//             'description' =>esc_html__('You can customize Your Home Ads Image'), 
//             'priority'=> 35
//         ));
//         $wp_customize->add_setting('home_top_ads_link',array(
//             'default'=>'',	 
//         ));
//         $wp_customize->add_control('home_top_ads_link_control',array(
//             'label' => esc_html__(' Home Top Ads Link'),
//             'type'=> 'text',
//             'section'=>'wp_homepage_ads_section', 
//             'settings' => 'home_top_ads_link'
//         ));

//         $wp_customize->add_setting( 'home_top_ads', array(
//             'sanitize_callback' => ''
//         ));
//         $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_top_ads_control', array(
//             'label' => ' Home Top Ads',
//             'section' => 'wp_homepage_ads_section',
//             'settings' => 'home_top_ads'
//         )));
//         $wp_customize->add_setting('bottom_ads_link',array(
//             'default'=>'',	 
//         ));
//         $wp_customize->add_control('bottom_ads_link_control',array(
//             'label' => esc_html__('Home Bottom Ads Link'),
//             'type'=> 'text',
//             'section'=>'wp_homepage_ads_section', 
//             'settings' => 'bottom_ads_link'
//         ));
//          $wp_customize->add_setting( 'home_bottom_ads', array(
//             'sanitize_callback' => ''
//         ));
//         $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_bottom_ads_control', array(
//             'label' => 'Home Bottom Ads',
//             'section' => 'wp_homepage_ads_section',
//             'settings' => 'home_bottom_ads'
//         )));

        
//          // Add The custom Code For Ads

//          $wp_customize->add_setting('home_top_ads_code',array(
//             'default'=>'',	 
//         ));
//         $wp_customize->add_control('home_top_ads_code_control',array(
//             'label' => esc_html__('Home Ads One Code'),
//             'type'=> 'textarea',
//             'section'=>'wp_homepage_ads_section', 
//             'settings' => 'home_top_ads_code'
//         ));
//         $wp_customize->add_setting('home_bottom_ads_code',array(
//             'default'=>'',	 
//         ));
//         $wp_customize->add_control('home_bottom_ads_code_control',array(
//             'label' => esc_html__('Home Ads Two Code'),
//             'type'=> 'textarea',
//             'section'=>'wp_homepage_ads_section', 
//             'settings' => 'home_bottom_ads_code'
//         ));

//     }
// }
// add_action('customize_register','wp_homepage_ads');





// Community Ads Images and Links 

// if(!function_exists('wp_community_ads')){
//     function wp_community_ads($wp_customize) {
//         $wp_customize->add_section('wp_community_ads_section', array(
//             'title' => esc_html__('Add Community  Ads'),
//             'description' =>esc_html__('You can customize Your Community Ads Image'), 
//             'priority'=> 35
//         ));
//         $wp_customize->add_setting('community_top_ads_link',array(
//             'default'=>'',	 
//         ));
//         $wp_customize->add_control('community_top_ads_link_control',array(
//             'label' => esc_html__('Top Ads Link'),
//             'type'=> 'text',
//             'section'=>'wp_community_ads_section', 
//             'settings' => 'community_top_ads_link'
//         ));

//         $wp_customize->add_setting( 'community_top_image', array(
//             'sanitize_callback' => ''
//         ));
//         $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'community_top_image_ads_control', array(
//             'label' => 'Top Ads Image',
//             'section' => 'wp_community_ads_section',
//             'settings' => 'community_top_image'
//         )));

//         $wp_customize->add_setting('community_bottom_ads_link',array(
//             'default'=>'',	 
//         ));
//         $wp_customize->add_control('community_bottom_ads_link_control',array(
//             'label' => esc_html__('Bottom Ads Link'),
//             'type'=> 'text',
//             'section'=>'wp_community_ads_section', 
//             'settings' => 'community_bottom_ads_link'
//         ));
//         $wp_customize->add_setting( 'community_bottom_image', array(
//             'sanitize_callback' => ''
//         ));
//         $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'community_bottom_image_ads_control', array(
//             'label' => '  Top Ads Image',
//             'section' => 'wp_community_ads_section',
//             'settings' => 'community_bottom_image'
//         )));


//          // Add The custom Code For Ads

//          $wp_customize->add_setting('community_top_ads_code',array(
//             'default'=>'',	 
//         ));
//         $wp_customize->add_control('community_top_ads_code_control',array(
//             'label' => esc_html__('Ads One Code'),
//             'type'=> 'textarea',
//             'section'=>'wp_community_ads_section', 
//             'settings' => 'community_top_ads_code'
//         ));
//         $wp_customize->add_setting('community_bottom_ads_code',array(
//             'default'=>'',	 
//         ));
//         $wp_customize->add_control('community_bottom_ads_code_control',array(
//             'label' => esc_html__('Ads Two Code'),
//             'type'=> 'textarea',
//             'section'=>'wp_community_ads_section', 
//             'settings' => 'community_bottom_ads_code'
//         ));

//     }}

//     add_action('customize_register','wp_community_ads');


    // Community Ads Images and Links 

    // if(!function_exists('wp_travel_ads')){
    //     function wp_travel_ads($wp_customize) {

    //         $wp_customize->add_section('wp_travel_ads_section', array(
    //             'title' => esc_html__('Add Travel  Ads'),
    //             'description' =>esc_html__('You can customize Your Travel Ads Image'), 
    //             'priority'=> 35
    //         ));
    //         $wp_customize->add_setting('travel_top_ads_link',array(
    //             'default'=>'',	 
    //         ));
    //         $wp_customize->add_control('travel_top_ads_link_control',array(
    //             'label' => esc_html__('Top Ads Link'),
    //             'type'=> 'text',
    //             'section'=>'wp_travel_ads_section', 
    //             'settings' => 'travel_top_ads_link'
    //         ));
    
    //         $wp_customize->add_setting( 'travel_top_image', array(
    //             'sanitize_callback' => ''
    //         ));
    //         $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'travel_top_image_ads_control', array(
    //             'label' => 'Top Ads Image',
    //             'section' => 'wp_travel_ads_section',
    //             'settings' => 'travel_top_image'
    //         )));
    
    //         $wp_customize->add_setting('travel_bottom_ads_link',array(
    //             'default'=>'',	 
    //         ));
    //         $wp_customize->add_control('travel_bottom_ads_link_control',array(
    //             'label' => esc_html__('Bottom Ads Link'),
    //             'type'=> 'text',
    //             'section'=>'wp_travel_ads_section', 
    //             'settings' => 'travel_bottom_ads_link'
    //         ));
    //         $wp_customize->add_setting( 'travel_bottom_image', array(
    //             'sanitize_callback' => ''
    //         ));
    //         $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'travel_bottom_image_ads_control', array(
    //             'label' => '  Top Ads Image',
    //             'section' => 'wp_travel_ads_section',
    //             'settings' => 'travel_bottom_image'
    //         )));

    //         // Add The custom Code For Ads

    //         $wp_customize->add_setting('travel_top_ads_code',array(
    //             'default'=>'',	 
    //         ));
    //         $wp_customize->add_control('travel_top_ads_code_control',array(
    //             'label' => esc_html__('Ads One Code'),
    //             'type'=> 'textarea',
    //             'section'=>'wp_travel_ads_section', 
    //             'settings' => 'travel_top_ads_code'
    //         ));
    //         $wp_customize->add_setting('travel_bottom_ads_code',array(
    //             'default'=>'',	 
    //         ));
    //         $wp_customize->add_control('travel_bottom_ads_code_control',array(
    //             'label' => esc_html__('Ads Two Code'),
    //             'type'=> 'textarea',
    //             'section'=>'wp_travel_ads_section', 
    //             'settings' => 'travel_bottom_ads_code'
    //         ));

    //     }}

    //     add_action('customize_register','wp_travel_ads');


        
    // Author Ads Images and Links 

    // if(!function_exists('wp_author_ads')){
    //     function wp_author_ads($wp_customize) {

    //         $wp_customize->add_section('wp_author_ads_section', array(
    //             'title' => esc_html__('Add Author  Ads'),
    //             'description' =>esc_html__('You can customize Your Author Ads Image'), 
    //             'priority'=> 35
    //         ));
    //         $wp_customize->add_setting('author_top_ads_link',array(
    //             'default'=>'',	 
    //         ));
    //         $wp_customize->add_control('author_top_ads_link_control',array(
    //             'label' => esc_html__('Top Ads Link'),
    //             'type'=> 'text',
    //             'section'=>'wp_author_ads_section', 
    //             'settings' => 'author_top_ads_link'
    //         ));
    
    //         $wp_customize->add_setting( 'author_top_image', array(
    //             'sanitize_callback' => ''
    //         ));
    //         $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'author_top_image_ads_control', array(
    //             'label' => 'Top Ads Image',
    //             'section' => 'wp_author_ads_section',
    //             'settings' => 'author_top_image'
    //         )));
    
    //         $wp_customize->add_setting('author_bottom_ads_link',array(
    //             'default'=>'',	 
    //         ));
    //         $wp_customize->add_control('author_bottom_ads_link_control',array(
    //             'label' => esc_html__('Bottom Ads Link'),
    //             'type'=> 'text',
    //             'section'=>'wp_author_ads_section', 
    //             'settings' => 'author_bottom_ads_link'
    //         ));
    //         $wp_customize->add_setting( 'author_bottom_image', array(
    //             'sanitize_callback' => ''
    //         ));
    //         $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'author_bottom_image_ads_control', array(
    //             'label' => '  Top Ads Image',
    //             'section' => 'wp_author_ads_section',
    //             'settings' => 'author_bottom_image'
    //         )));

    //         // Add The custom Code For Ads

    //         $wp_customize->add_setting('author_top_ads_code',array(
    //             'default'=>'',	 
    //         ));
    //         $wp_customize->add_control('author_top_ads_code_control',array(
    //             'label' => esc_html__('Ads One Code'),
    //             'type'=> 'textarea',
    //             'section'=>'wp_author_ads_section', 
    //             'settings' => 'author_top_ads_code'
    //         ));
    //         $wp_customize->add_setting('author_bottom_ads_code',array(
    //             'default'=>'',	 
    //         ));
    //         $wp_customize->add_control('author_bottom_ads_code_control',array(
    //             'label' => esc_html__('Ads Two Code'),
    //             'type'=> 'textarea',
    //             'section'=>'wp_author_ads_section', 
    //             'settings' => 'author_bottom_ads_code'
    //         ));

    //     }}

    //     add_action('customize_register','wp_author_ads');




        // Single Event Post Refund Policy

        if(!function_exists('wp_eventy_refund_policy')){
            function wp_eventy_refund_policy($wp_customize) {
    
                $wp_customize->add_section('eventy_refund_policy', array(
                    'title' => esc_html__('Event Refund Policy'),
                    'description' =>esc_html__('You can customize Your Event Refund Policy'), 
                    'priority'=> 35
                ));
                $wp_customize->add_setting('eventy_refund_policy_text',array(
                    'default'=>'',	 
                ));
                $wp_customize->add_control('author_top_ads_link_control',array(
                    'label' => esc_html__('Event Refund Policy Text'),
                    'type'=> 'textarea',
                    'section'=>'eventy_refund_policy', 
                    'settings' => 'eventy_refund_policy_text'
                ));
            }
        }
        add_action('customize_register','wp_eventy_refund_policy');