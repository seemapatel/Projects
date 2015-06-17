<?php
/**
 * Template Name: Home
 *
 * @package AngelsOFCare
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
      <div class="service-part">      
 <?php 
            $bloblor =  array(96,18);
            $args = array(
            'post_type' => 'page',
            'post__in' => $bloblor);
            $spotlight = new WP_Query($args); while ($spotlight->have_posts()) : $spotlight->the_post();   ?>
           <div class="sub-service">
                <h2><?php the_title();?></h2>
                 <?php $content = get_the_content();  // Display the post content
                       $content = strip_tags($content);  //strips a string from HTML ?> 
                 <p><?php echo substr($content, 0, 200);?></p>
                 <a href="<?php the_permalink();?>" class="read-more"><span>read more</span><i></i></a>
           </div>
            <?php endwhile; ?>
           <?php wp_reset_query(); wp_reset_postdata();?>
        <div class="subcribe-part">
          <h4>Subscribe to our Newsletter</h4>
          <p>Aliquip ex ea commodo sequat. proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <form action="demo_form.asp" method="get">
            <input type="text" placeholder="Your Email goes here" class="subcribe-text">
            <span class="button-part">
              <input type="button" value="Subscribe" class="subcribe-button">
              <i class="subcribe-arrow"></i></span>
             
          </form>
          <span></span> </div>
      </div>
    <div class="news-section">
        <div class="latest-news">
          <h2>Latest News</h2>
          <ul>
 <?php
     // get latest news and upcoming events on home page     
    $query = null;
    $query = new WP_Query(array(
                'posts_per_page'   => 2,
                'post_type' => 'latest_news'
            ));
 
    while ($query->have_posts()): $query->the_post(); ?>
    <li>  <?php the_post_thumbnail() ?>
        <div class="news-text">
            <a class ="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p><?php $content = get_the_content();  // Display the post content
                     $content = strip_tags($content);  //strips a string from HTML ?> 
            <p><?php echo substr($content, 0, 200);?> <a href="<?php the_permalink(); ?>">read more</a></p>
            <span><?php the_time(get_option('date_format')); ?></span>
        </div>
    </li>
     <?php endwhile;?></ul>
     <a href="<?php echo get_option('home'); ?> /latest-news" class="read-more"><span>read more</span><i></i></a> </div>
      <div class="upcoming-events">
          <h2>Upcoming Events</h2>
        <ul>
    <?php
        /// get upcoming events on home page     
       $query = null;
       $query = new WP_Query(array(
                
                'post_type' => 'upcoming_events',  // Tell WordPress which post type we want
                'orderby' => 'meta_value', // We want to organize the events by date
                'meta_key' => 'date_picker', // Grab the "date picker" field created via "Advanced custom fields" plugin (stored in YYYY-MM-DD format)
                'order' => 'ASC', // ASC is the other option    
                'posts_per_page' => '3', // Let's show them all. 
                'meta_query' => array( // WordPress has all the results, now, return only the events after today's date
                    array(
                        'key' => 'date_picker', // Check the start date field
                        'value' => date('Y-m-d'), // Set today's date (note the similar format)
                        'compare' => '>=', // Return the ones greater than today's date
                        'type' => 'date', // Let WordPress know we're working with numbers
                        ),
                    ),
               ));

            while ($query->have_posts()): $query->the_post(); ?>
            <li>  
         <?php  
                $format_in = 'Ymd'; // the format your value is saved in (set in the field options)
                $format_out = 'M-d-Y'; // the format you want to end up with
                $date = DateTime::createFromFormat($format_in, get_field('date_picker',$post->ID));
                // how to displlay the date need to ask anurag ?  
                $format_date=explode('-',$date->format( $format_out )); ?>
                <div class="date-part"> <span class="month"><?php echo $format_date[0]; ?></span> <span class="date"><?php echo $format_date[1];?></span> </div>
                <div class="news-text"> 
                    <a class ="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <p><?php $content = get_the_content();  // Display the post content
                             $content = strip_tags($content);  //strips a string from HTML ?> 
                    <p><?php echo substr($content, 0, 200);?> <a href="<?php the_permalink(); ?>">read more</a></p>
                </div>
            </li>
                <?php  endwhile;?></ul>
        <a href="<?php echo get_option('home'); ?> /upcoming-events" class="read-more"><span>see more</span><i></i></a>
     </div><!--upcoming events-->
  
  </div>  <!- news-section ends-->   
    
  <!---Get partner lists--->
   <?php
     // thumbnaiils    
    $query = null;
    $query = new WP_Query(array(
                'post_type' => 'partners'
            ));?>
 
    <div class="partners-part" >
        <h3>Our Partners</h3>
        <div id ="bxslider">
                <div class="partner-logo" > 
                    <?php   while ($query->have_posts()): $query->the_post(); ?>
                                <a href="#" class="healthcare">
   <?php the_post_thumbnail() ?></a> <?php endwhile;?>
                </div>
       </div>
    </div>
    
<!--Ends partner Div--->

<!--Ends middle inner-->
</div> <!--temrarory middle section -->



 <?php
     
     get_footer();
?>