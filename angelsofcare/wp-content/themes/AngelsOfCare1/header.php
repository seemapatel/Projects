<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage AngelsOfCare
 * @since Twenty Thirteen 1.0
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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="main-container"> 
  <!--top section start here-->
  <div class="top-section">
   <a href="#" class="angle-logo"><img src=<?php echo get_template_directory_uri().'/images/angels-logo.png'?> alt="Angles OF care"></a>
      <div class="top-right">
        <p><a href="#">Can we help?</a>+123 - 4567 - 987</p>
        <div class="top-social"> <a href="#" class="fb-icon"></a> <a href="#" class="twitter-icon"></a> <a href="#" class="google-icon"></a> <a href="#" class="linkdin-icon"></a> <a href="#" class="dott-icon"></a> <a href="#" class="instagram-icon"></a> </div>
        <ul class="top-nav">
          <li><a href="#" title="Insurances accepted">Insurances accepted</a></li>
          <li><a href="#" title="Services">Services</a></li>
          <li><a href="#" title="testimonials">testimonials</a></li>
          <li><a href="#" title="newsletter">newsletter</a></li>
          <li><a href="#" title="Events">Events</a></li>
          <li><a href="#" title="Contact us">Contact us</a></li>
          <li><a href="#" class="donate"><span>Donate</span><i></i></a>
        </ul>
      </div>
   </div>
  <!--top section end here--> 
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
