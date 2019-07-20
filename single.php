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
      <div class="row">
        <div class="eight columns">
        <h3 class="red"><?php the_title(); ?></h3>
        <p><?php echo get_the_date(); ?> | <?php the_category(' | '); ?></p>
        
<!-- Content Start -->
        
        <?php the_content(); ?>
      <?php    }//end of while loop
    }//end if statement
    ?>
    </div>
    <div class="four columns">
    <?php dynamic_sidebar('right-sidebar'); ?>
    </div>
  </div>
  
</div
<?php get_footer(); ?>
