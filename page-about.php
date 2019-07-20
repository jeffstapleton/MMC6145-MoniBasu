<?php /*Template Name: About Page Template*/ ?> <!-- This code activates the template for selection in the backend post/page maker -->

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
  
  <!-- Content Start -->
  <div class="container">
    <div class="row">
      <div class="four columns">
        <div class="sidebar"><?php dynamic_sidebar('left-sidebar'); ?></div> <!-- This gets the sidebar and inserts it here -->
      </div>

      <div class="eight columns single-content">
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





<?php get_footer(); ?>