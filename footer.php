<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_login
 */

?>
<section class="alsignfter">
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-center">
        <div class="al_fabout">
          <h3>ABOUT</h3>
        </div>
        <div class="al_faboutlist">
          <?php
                wp_nav_menu(array(
                    'theme_location' => 'widget_menu_one', 
                    'container' => 'ul',
                    'menu_class'=> '',
                ));
			?>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="al_fDISCOVT">
          <h3>DISCOVER</h3>
        </div>
        <div class="al_fDISCOVERlist">
          <?php
            wp_nav_menu(array(
                'theme_location' => 'widget_menu_two', 
                'container' => 'ul',
                'menu_class'=> '',
            ));
			?>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="al_fCERTIFIEDt">
          <h3>CERTIFIED BIZ</h3>
        </div>
        <div class="alfCERTIFIEDlist">
          <?php
                wp_nav_menu(array(
                    'theme_location' => 'widget_menu_three', 
                    'container' => 'ul',
                    'menu_class'=> '',
                ));
			?>
        </div>
      </div>
      <div class="col-md-3">
        <div class="social_link text-center">
            <ul>
            

              <li><a href="<?php echo get_theme_mod("wp_cf_instra_linksetting");?>" class="alinstrai"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="<?php echo get_theme_mod("wp_cf_youtube_linksetting");?>" class="alyoutubicon"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
              <li><a href="<?php echo get_theme_mod("wp_cf_twitter_linksetting");?>" class="altwitteri"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            </ul>

        </div>
        
        <div class="footer-logo text-center">  
           
          <!-- <img src="https://certifiedboc.com/wp-content/uploads/2020/11/certifiedcircle2424-1.png" alt="Certified BOC" width="200" height="200"> -->
          <img src="<?php echo get_theme_mod("wp_footer_logo_setting");?>" alt="Certified BOC" width="200" height="200">
        </div>
      </div>
      </div>
    </div>
  </div>
<div class="copyright"><p>Certified BOC. © 2020. All Rights Reserved</p></div>

</section>



    

<?php wp_footer(); ?>


</body>
</html>