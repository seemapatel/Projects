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
 
 $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;   $query = null;
    $query = new WP_Query(array(
                'post_type' => 'latest_news',
                'posts_per_page'=>2,
                'paged'=>$paged 
            ));
 //$post_type=get_post_type(101);
   // echo $post_type;
    while ($query->have_posts()): $query->the_post(); ?>
    <li>  <?php the_post_thumbnail() ?>
        <div class="news-text">
            <a class ="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p><?php the_content(); ?></p>
            <span><?php the_time(get_option('date_format')); ?></span>
        </div>
    </li>
     <?php endwhile;?></ul>
 <?php
$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query -> query('post_type=latest_news&showposts=2'.'&paged='.$paged);
	while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	<div class="post">
        ....Do loop stuff
        </div>
<?php endwhile; // end of the loop. ?>

<div class="pagenav">
<div class="alignleft"><?php previous_posts_link('Previous') ?></div>
<div class="alignright"><?php next_posts_link('Next') ?></div>
</div>

<?php $wp_query = null; $wp_query = $temp; ?>
     </div> <!-- latest-news -->
  
    </div> <!--news-section -->
   
    </div><!--temparory middle section -->
    
    

<?php  get_footer(); ?>
