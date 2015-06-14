<?php
/**
 * Template Name: Latest News
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
    <div class="banner-section">
         <div class="banner-inner"> <a href="#" class="prev-arrow"></a>
        <div class="banner-text">
          <h1>Family Owned and Operated</h1>
          <p>Lorem ipsum dolor sit amet, consectetur icing elit, sed do eiusmod tempor cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo sequat. mollit anim id est laborum.</p>
          <a href="#" class="learn-more"><span>LEARN MORE</span><i></i></a> </div>
        <a href="#" class="next-arrow"></a> </div>
        
    </div>
    <div class="middle-inner">
      
        <div class="news-section">
        <div class="latest-news">
          <h2>Latest News</h2>
          <ul>
 <?php
     // get latest news and upcoming events on home page     
    $query = null;
    $query = new WP_Query(array(
                'post_type' => 'latest_news'
            ));
 //$post_type=get_post_type(101);
   // echo $post_type;
    while ($query->have_posts()): $query->the_post(); ?>
    <li>  <?php the_post_thumbnail() ?>
        <div class="news-text">
            <a class ="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p><?php the_content(); ?> <a href="<?php the_permalink(); ?>">read more</a></p>
            <span><?php the_time(get_option('date_format')); ?></span>
        </div>
    </li>
     <?php endwhile;?></ul>
     </div>
    
  
    </div> <!--temrarory middle section -->

<?php  get_footer(); ?>
