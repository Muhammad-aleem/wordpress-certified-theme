<?php
/**
 * custom login functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package custom_login
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'custom_login_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function custom_login_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on custom login, use a find and replace
		 * to change 'custom-login' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'custom-login', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __('Main menu' , 'Main Menu'),
            'right_menu' => __('Right menu' , 'Right menu'),
            'widget_menu_one' => __('Widget Menu One' , 'Widget Menu One'),
			'widget_menu_two' => __('Widget Menu Two' , 'Widget Menu Two'),
			'widget_menu_three' => __('Widget Menu Three' , 'Widget Menu Three'),
				) 
		); 

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'custom_login_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'custom_login_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function custom_login_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'custom_login_content_width', 640 );
}
add_action( 'after_setup_theme', 'custom_login_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function custom_login_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'custom-login' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'custom-login' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'custom_login_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

require get_template_directory() . '/inc/wp_scripts.php';

/**
 * End Enqueue scripts and styles.
 */
/**
 * Custom post type
 */
require get_template_directory() . '/inc/wp_custom_posttype.php';
/**
 * End Custom post type
 */
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}





function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
	}
	
	add_action('after_setup_theme', 'remove_admin_bar');







// login register code

function al_login_register_submit(){

	global $wpdb;
	global $login_error;


	// login form
	if(isset($_POST['alloginform'])){

		$username = $wpdb->escape($_POST['username']);
		$userpassword = $wpdb->escape($_POST['uspassword']);
		$login_array= array();
		$login_array['user_login'] = $username;
		$login_array['user_password'] = $userpassword;
		$verify_user = wp_signon( $login_array, true );
		// $basurl = home_url().'/user-profile';
		$basurl = home_url().'/community_main_page';
		  if(!is_wp_error($verify_user)){
  
			if (current_user_can('administrator')) {
				wp_redirect($basurl);
			  exit;
		   }else{
				wp_redirect($basurl);
			  exit;
		   }
		  }else{
			  $login_error = "<p>Invalid  Credentials</p>";
			//   exit;
		  }
	}

	// register form

	


}
add_action('init', 'al_login_register_submit');



// custom logo 


function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//    End custom logo


// Custom Add ul and li classes

function cf_add_classes_on_li($classes, $item, $args) {
	$classes[] = 'nav-item';
	return $classes;
	}
	add_filter('nav_menu_css_class','cf_add_classes_on_li',1,3);

	function cf_anchor_tag_class( $atts, $item, $args ) {
		$class = 'nav-link'; 
		$atts['class'] = $class;
		return $atts;
	}
	add_filter( 'nav_menu_link_attributes', 'cf_anchor_tag_class', 10, 3);

// End Custom Add ul and li classes


// Add the custom certified custom post type

require get_template_directory() . '/inc/community_posttype/community.php';

// Add the custom certified Home slider custom post type
require get_template_directory() . '/inc/home_slider/home_slider_cpt.php';
// Add the custom certified Post Review custom post type
require get_template_directory() . '/inc/community_review_post/review_cpt.php';
// Add the custom Setting Api 
require get_template_directory() . '/inc/setting_api/footer_setting_api.php';

// Add the custom traveland Posttype
require get_template_directory() . '/inc/traveland_posttype/traveland.php';
// Add the custom traveland review Posttype
require get_template_directory() . '/inc/traveland_review_cpt/traveland_review_cpt.php';

// Add the Form Sunmited Code 

require get_template_directory() . '/inc/form_submited/form_submited_code.php';

// business_listing_cpt

require get_template_directory() . '/inc/business_listing_cpt/business_listing_cpt.php';

// entertainment Custom post type 

require get_template_directory() . '/inc/entertainment_cpt/entertainment_cpt.php';

// Event custom post type 
require get_template_directory() . '/inc/event_cpt/event_cpt.php';



// Create Custom Table

function cf_add_trending_hash_table() {
	global $wpdb;
	$trending_table = get_option( "trending_table" );

	//if table not exist
	if(empty($trending_table)){

		$table_name = $wpdb->prefix . 'trending_hash_tags';
		
		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $table_name (
			id int(11) NOT NULL AUTO_INCREMENT,
			keyword varchar(255) NOT NULL,
			counter int(255) NOT NULL,
			PRIMARY KEY (`id`)
		) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
		update_option( "trending_table", true);
	}

}
add_action('init', 'cf_add_trending_hash_table');

function cf_add_trending_relaction_table() {
	global $wpdb;
	$trending_relation_table = get_option( "trending_relaction_table" );

	if(empty($trending_relation_table)){

		$table_name = $wpdb->prefix . 'trending_tags_relaction';
		
		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $table_name (
		id int(11) NOT NULL AUTO_INCREMENT,
		keyword_id int(11) NOT NULL,
		post_id int(11) NOT NULL,
		PRIMARY KEY (`id`)
		) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
		update_option( "trending_relaction_table", true);
	}
}

add_action('init','cf_add_trending_relaction_table' );





// Create a custom login api



function wp_login_api_hooks() {
  register_rest_route(
    'custom/v2/sign_user', '/login',
    array(
      'methods'  => 'GET',
      'callback' => 'my_awesome_func',
    )
  );
}


function my_awesome_func($request){


	$user_login = $request->get_param["username"];
	$user_password =  $request->get_param["uspassword"];

    // $creds = array();
	// $creds['user_login'] = $request->get_param["username"];
    // $creds['user_password'] =  $request->get_param["uspassword"];

	
    // $creds['remember'] = true;
    // $user = wp_signon( $creds, false );
    // if ( is_wp_error($user) )
    //   echo $user->get_error_message();
    // // return $user;
	return new WP_REST_Response($user_login ,'-----' ,$user_password, 200);
}
add_action( 'rest_api_init', 'wp_login_api_hooks' );




// https://certifiedboc.com/wp-json/custom/v2/sign_user/login