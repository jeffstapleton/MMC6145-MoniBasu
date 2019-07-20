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
      <div class="four columns responsive">
        <div class="sidebar">
          <img src="http://localhost:8888/monibasu/wp-content/uploads/2019/07/Baby-Noor-03Credit-300x200.jpg" />
          <p>20130301 CNN Baby Noor BAGHDAD - MAR 01: Writer Moni Basu revisits Baby Noor in Baghdad, Iraq on March 1, 2013. (photo by David S. Holloway/CNN)</p>
          <?php dynamic_sidebar('left-sidebar'); ?></div> <!-- This gets the sidebar and inserts it here -->
      </div>

      <div class="eight columns">
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