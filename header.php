<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_login
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <?php
      //if( !is_user_logged_in() ) {
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-11">
                    <nav class="navbar navbar-expand-lg navbar-light al_main_navbar bg-white">
                        <a class="navbar-brand al_cfmainlogo" href="<?php bloginfo('url')?>">
                            <?php
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            ?>
                            <img src="<?php echo $image[0];?>" alt="<?php  bloginfo('name');?>"
                                class="img-fluid al_Hcfyoutube">
                        </a>
                        <button class="navbar-toggler al_mobilebtn" type="button" data-toggle="collapse"
                            data-target="#cf_menutoggle" aria-controls="cf_menutoggle" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path fill="#000" d="M501.333,96H10.667C4.779,96,0,100.779,0,106.667s4.779,10.667,10.667,10.667h490.667c5.888,0,10.667-4.779,10.667-10.667
                                        S507.221,96,501.333,96z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path fill="#000" d="M501.333,245.333H10.667C4.779,245.333,0,250.112,0,256s4.779,10.667,10.667,10.667h490.667
                                        c5.888,0,10.667-4.779,10.667-10.667S507.221,245.333,501.333,245.333z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path fill="#000"
                                            d="M501.333,394.667H10.667C4.779,394.667,0,399.445,0,405.333C0,411.221,4.779,416,10.667,416h490.667
                                        c5.888,0,10.667-4.779,10.667-10.667C512,399.445,507.221,394.667,501.333,394.667z" />
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>
                        </button>
                        <div class="collapse navbar-collapse text-center" id="cf_menutoggle">
                            <?php
                                      wp_nav_menu(array(
                                          'theme_location' => 'primary', 
                                          'container' => 'ul',
                                          'menu_class'=> 'navbar-nav mr-auto al_mainulitem',
                                          'add_li_class'  => 'nav-item'
                                      ));
                                  ?>
                            <?php  if( is_user_logged_in() ) :?>
                                <div class="al_homenav_right">
                                    <div class="header_profileimg dropdown">
                                        <?php 
                                            $user_ID = get_current_user_id();
                                            $avatar_url = get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450));
                                            $user_image = get_user_meta($user_ID, 'user_image', true);
                                            $scr = wp_get_attachment_image_src($user_image, 'full');
                                            if($scr){
                                                ?>
                                                    <img src="<?= $scr[0];?>" class="img-fluid dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?php
                                            }else{
                                                ?>
                                                    <img src="<?= $avatar_url;?>" class="img-fluid dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?php
                                            }
                                         ?>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <ul class="nav navbar-nav">
                                                <li class="nav-item">
                                                    <?php $gotouser_url =  home_url().'/user-community-post';?>
                                                    <a class="nav-link d-block" href="<?php echo $gotouser_url;?>">My Profile</a>
                                                </li> 
                                                <li class="nav-item">
                                                    <?php $gotouserprofile_url =  home_url().'/user-profile';?>
                                                    <a class="nav-link d-block" href="<?php echo $gotouserprofile_url;?>">Profile Setting</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo wp_logout_url( home_url() );?>">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php else: ?>
                            <div class="al_homenav_right">
                                <?php
                                      wp_nav_menu(array(
                                          'theme_location' => 'right_menu', 
                                          'container' => 'ul',
                                          'menu_class'=> 'nav navbar-nav list-inline',
                                          'add_li_class'  => 'nav-item'
                                      ));
                                  ?>
                            </div>
                            <?php endif;?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <?php
   // }
    
    ?>
    </header>