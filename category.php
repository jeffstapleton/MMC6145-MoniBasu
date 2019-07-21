<?php get_header(); ?>

<div id="hero">
  <div class="row hero-red nav-spacer">
    <h2 class="white center"><?php single_cat_title(); ?> Posts</h2>
  </div>
</div>
<div class="container">
  <div class="row">
    <?php 
    if(have_posts()){
      while(have_posts()){
        the_post();?>
        <div class="twelve columns archive spacer-tb">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_post_thumbnail('medium'); ?>
          <?php publish_author_date(); ?>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>">Read More...</a>
        </div><?php
      }
    } 
    ?>
  </div>
</div>
</div>

<?php get_footer(); ?>