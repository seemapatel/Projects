<?php
/**
 * Template Name: Upcoming Events
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
        <div class="upcoming-events">
          <h2>Upcoming Events</h2>
          <ul>
<ul>
           <?php
                // get upcoming events on home page     
               $query = null;
               $query = new WP_Query(array(
                           'post_type' => 'upcoming_events'
                       ));

            while ($query->have_posts()): $query->the_post(); ?>
            <li>  
         <?php  $format_in = 'Ymd'; // the format your value is saved in (set in the field options)
                $format_out = 'M-d-Y'; // the format you want to end up with
                $date = DateTime::createFromFormat($format_in, get_field('date_picker',$post->ID));
                    
                $format_date=explode('-',$date->format( $format_out )); ?>

                <div class="date-part"> <span class="month"><?php echo $format_date[0]; ?></span> <span class="date"><?php echo $format_date[1];?></span> </div>
                <div class="news-text"> 
                    <a class ="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <p><?php the_content(); ?> <a href="<?php the_permalink(); ?>">read more</a></p>
                </div>
            </li>
                <?php  endwhile;?></ul>
     </div>
    
  
    </div> <!--temrarory middle section -->

<?php  get_footer(); ?>
