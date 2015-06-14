<?php
/**
 * The Footer Sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

if ( ! is_active_sidebar( 'sidebar-4' ) ) {
	return;
}
?>

 <div class="footer-right">
    
            <?php  if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	
                        <?php dynamic_sidebar( 'sidebar -4' ); ?>
               <?php endif; ?>
      <a href="#" class="footer-donate"><span>donate</span><i></i></a> <span class="connect">Connect with us</span>
     <div class="footer-social"> <a href="#" class="fb-icon"><i></i></a> <a href="#" class="twitter-icon"><i></i></a> <a href="#" class="google-icon"><i></i></a> <a href="#" class="linkdin-icon"><i></i></a> <a href="#" class="dott-icon"><i></i></a> <a href="#" class="instagram-icon"><i></i></a> </div>

</div><!-- #footer-sidebar -->
