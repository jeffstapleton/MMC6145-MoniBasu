<?php /*Template Name: All Blog Posts Template*/ 
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
  <div class="row">
    <div class="nine columns">
      <?php if(have_posts()){
        while(have_posts()){
          the_post();?>
          
            <h3><a href="<?php the_permalink() ?>"><?php
            the_title(); ?></a></h3>
            <p>Published on: <?php the_time('F j, Y'); ?></p>
            <p><?php the_excerpt(); ?></p>
          </div>
          <?php
        }// ends while loop
      }// ends if statement
      ?>
</div>
      <div class="three columns">
        <div class="sidebar"><?php get_sidebar(); ?></div> <!-- This gets the sidebar and inserts it here -->
      </div>


    </div>
  </div>





<?php get_footer(); ?>