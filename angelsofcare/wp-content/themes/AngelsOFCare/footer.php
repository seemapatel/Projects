<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

    <!--footer section start here-->
  <div class="footer-section">
    <div class="footer-inner">
        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu', 'fallback_cb' => false )); ?> 
     
    <div class="twitter-part">
        <h6>From Twitter</h6>
        <span>3 Hours Ago</span>
        <p>Lorem ipsum dolor sit amet, consectetur icing elit, sed do eiusmod tempor cididunt ut labore et dolore... <a href="#">read more</a></p>
        <span>12 Hours Ago</span>
        <p>Lorem ipsum dolor sit amet, consectetur icing elit, sed do eiusmod tempor cididunt ut labore et dolore... <a href="#">read more</a></p>
      </div>
      
        <?php get_sidebar('footer'); ?>

      <span class="copyright">Copy Rights Reserved</span> </div>
              
  </div>
  <!--footer section end here--> 
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>