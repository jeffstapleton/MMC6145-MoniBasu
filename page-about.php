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
      <div class="three columns responsive">
          <?php dynamic_sidebar('left-sidebar'); ?>
          <h3>Contact Me</h3>
            <a class="social-link email" href="mailo:moni@monibasu.com">Email Me</a>
            <a class="social-link facebook" href="#">Facebook</a>
            <a class="social-link twitter" href="#">Twitter</a>
            <a class="social-link instagram" href="#">Instagram</a>
            <a class="social-link linkedin" href="#">LinkedIn</a>
          
        </div> 

      <div class="nine columns">
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