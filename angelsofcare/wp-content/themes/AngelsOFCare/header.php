<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href="http://allfont.net/css/?fonts=montserrat-light" rel="stylesheet" type="text/css">
        <!-- jQuery library (served from Google) -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <!-- bxSlider Javascript file -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.bxslider.min.js"></script>

	<?php wp_head(); ?>
      <script type="text/javascript">

$(document).ready(function(){
  $('#bxslider').bxSlider({
      mode: 'horizontal',
    auto: true,
    pause: 1000,
    speed: 500
  });;
});
</script>
</head>


<body <?php body_class(); ?>>
  <div class="main-container"> 
  <!--top section start here-->
  <div class="top-section">
   <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="angle-logo"><img src=<?php echo get_template_directory_uri().'/images/angles-logo.png'?> alt="Angles OF care"></a>
      <div class="top-right">
        <p><a href="#">Can we help?</a>+123 - 4567 - 987</p>
        <div class="top-social"> <a href="#" class="fb-icon"></a> <a href="#" class="twitter-icon"></a> <a href="#" class="google-icon"></a> <a href="#" class="linkdin-icon"></a> <a href="#" class="dott-icon"></a> <a href="#" class="instagram-icon"></a> </div>
       <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'top-nav' )); ?> 
        
      </div>
   </div>
       <!--top section end here--> 

       
<!--middle section start here-->
  <div class="middle-section">
   
