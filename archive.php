<?php /* Template for Archive Page */
get_header();
?>
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
