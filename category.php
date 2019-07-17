<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <h2><?php single_cat_title(); ?> Posts</h2>
        <div class="twelve columns">
          <?php 
            if(have_posts()){
              while(have_posts()){
                the_post();?>
                <div class="twelve columns archive">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_post_thumbnail('medium'); ?>
                <?php publish_author_date(); ?>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read More...</a>
              </div><?php
              }
            } 
          ?>
        </div>
    </div>
  </div>

<?php get_footer(); ?>