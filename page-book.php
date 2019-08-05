<?php /*Template Name: Book Page Template*/ ?> <!-- This code activates the template for selection in the backend post/page maker -->

<?php get_header(); ?>

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

<!-- Floating Red Feature - access in widgets section -->

<div class="container featured-block"> 
  <div class="row float-top">
    <div class="twelve columns float-top">
      <div class="featured-block-image">
        <p class="mini-float"><?php dynamic_sidebar('featured-book-block'); ?></p>
      </div>
    </div>
  </div>
</div>

<!-- Widget -->

<div class="container spacer-tb">
  <div class="row">
    <div class="single four columns responsive">
      <?php dynamic_sidebar('book-sidebar'); ?>
    </div> 
<!-- Content Start -->
    <div class="single eight columns">
      <?php
      if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content();
        }
      }
      ?>
    </div>
  </div>
</div>

<!-- IMAGE DIV -->

<div class="row lt-gray-bg bump-padding">
  
  <div class="column">
    <?php dynamic_sidebar('book-image-gallery'); ?>
  </div>
</div>  

<?php get_footer(); ?>