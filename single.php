<?php get_header(); ?>
<div class="container"><?php 
  if(have_posts()){
    while(have_posts()){
      the_post(); ?>
      <h2 class="post-title"><?php the_title(); ?></h2>
      <p class="pub-info post-date"><?php echo "Published: " . get_the_date(); ?></p>
      <div class="post-feature">
        <?php the_post_thumbnail(); ?>
      </div>
      <?php the_content(); ?>
      <p><?php echo "This post written by : " . get_the_author(); ?></p>
<?php    }//end of while loop 
  }//end if statement 
 ?>
 
</div>

 <?php get_footer(); ?>