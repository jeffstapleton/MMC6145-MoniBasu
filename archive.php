<?php /* Template for Archive Page */ ?>

<?php get_header(); ?>

  <div id="hero" class="hero-red">
  <div class="row">
    <div class="twelve columns">
      <h2 class="white center">Post Archive</h2>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="twelve columns">
      <?php if(have_posts()){
              while(have_posts()){
                the_post();?>
                <div class="twelve columns individual-post">
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
  </div>
</div>

<?php get_footer(); ?>