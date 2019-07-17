<?php get_header(); ?>

  <!-- HERO SECTION -->
  <div id="hero">
    <div class="row">
      <div class="twelve columns">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>
              <div class="page-feature-image"><?php the_post_thumbnail('large'); ?></div>
              <?php
            }
          }
        ?>
      </div>

      <div class="nine columns single-content">
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

      <div class="three columns">
        <div class="sidebar"><?php get_sidebar(); ?></div> <!-- This gets the sidebar and inserts it here -->
      </div>


    </div>
  </div>





<?php get_footer(); ?>