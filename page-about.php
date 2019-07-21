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

<!-- Floating Red Feature - access in widgets section -->

<div class="container featured-block"> 
  <div class="row float-top">
    <div class="twelve columns float-top">
      <div class="featured-block-image">
        <h4 class="white"><?php dynamic_sidebar('featured-block'); ?></h4>
      </div>
    </div>
  </div>
</div>

<!-- Widget -->

<div class="container spacer-tb">
  <div class="row">
    <div class="four columns responsive">
      <?php dynamic_sidebar('left-sidebar'); ?>
      <h4 class="center">Contact Me</h4>
      <a class="social-link email" href="mailo:moni@monibasu.com">Email Me</a>
      <a class="social-link facebook" href="https://www.facebook.com/WriterMoni/">Facebook</a>
      <a class="social-link twitter" href="https://twitter.com/TheMoniBasu">Twitter</a>
      <a class="social-link instagram" href="https://www.instagram.com/EvilReporterChick/">Instagram</a>
      <a class="social-link linkedin" href="https://www.linkedin.com/in/monibasu/">LinkedIn</a>
    </div> 
<!-- Content Start -->
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

<!-- IMAGE DIV -->

<div class="row lt-gray-bg bump-padding">
  
  <div class="one-third column">
    <?php dynamic_sidebar('bottom-left-about'); ?>
  </div>
  <div class="one-third column">
    <?php dynamic_sidebar('bottom-middle-about'); ?>
  </div>
  <div class="one-third column">
    <?php dynamic_sidebar('bottom-right-about'); ?>
  </div>
</div>

<!-- FEATURED SECTION -->

<div class="container spacer-tb">
  <div class="row">
      <h4 class="center red">I've Worked With:</h4>
    </div>
      
    <div class="row thirds-home">
      <div class="one-third column">
        <?php dynamic_sidebar('bottom-left-home'); ?>
      </div>
      
      <div class="one-third column">
        <?php dynamic_sidebar('bottom-middle-home'); ?>
      </div>
      
      <div class="one-third column">
        <?php dynamic_sidebar('bottom-right-home'); ?>
      </div>
    </div>
      
    <div class="row thirds-home four-five">
      <div class="one-half column">
        <?php dynamic_sidebar('bottom-fourth-home'); ?>
      </div>  
      <div class="one-half column">
        <?php dynamic_sidebar('bottom-fifth-home'); ?>
      </div>
      
    </div>
  </div>
</div>

<!-- CONTACT FORM -->

<div class="contact spacer-tb">
  <div class="container">
    <?php dynamic_sidebar('contact-widget'); ?>
    </div>
</div>


<?php get_footer(); ?>