<?php get_header(); ?>

<?php
  if(have_posts()){
    while(have_posts()){
      the_post(); ?>
      
<!-- Hero Image -->      
      <div id="hero" class="post-feature">
            <?php the_post_thumbnail(); ?>
      </div>

<!-- Title & Meta -->      
      <div class="container">
      <h2 class="post-title"><?php the_title(); ?></h2>
      <p class="pub-info post-date"><?php echo "Published: " . get_the_date(); ?></p>

<!-- Content Start -->
      
      <?php the_content(); ?>
      <p><?php echo "This post written by : " . get_the_author(); ?></p>
<?php    }//end of while loop
  }//end if statement
 ?>

</div>
<p>Test Comment</p>
 <?php get_footer(); ?>
