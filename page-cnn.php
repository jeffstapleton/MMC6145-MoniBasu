<?php  /*Template Name: CNN Page*/
get_header(); ?>

<!-- HERO SECTION -->
<div id="hero">
  <div class="row">
    <div class="twelve columns">
      <?php
      if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <div class="page-feature"><?php the_post_thumbnail('large'); ?></div>
          <?php
        }
      }
      ?>
    </div>
  </div>
</div>

<div class="container">
  <div class="row lt-gray-bg">
    <div class="twelve columns bump-padding">
      <?php
      if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <h2 class="center"><?php the_title(); ?></h2>
          <p class="white"><?php the_excerpt(); ?></p>
          <?php
        }
      }
      ?>
    </div>
  </div>
</div>
  
<div class="spacer-tb">
  <div class="container spacer-tb">
    <div class="row">
    <?php the_content(); ?>
  </div>  
</div>
</div>
  

  <?php get_footer(); ?>