<?php /*Template Name: Blog Page Template2 */ ?>

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

<div class="container">
  <div class="row spacer-tb">
    <div class="one-half column">
      <?php $catquery = new WP_Query( 'cat=3&posts_per_page=1' ); ?>
      <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
        <div class="featured-block-image"></div>
          <?php the_post_thumbnail_url($post_id, 'large'); ?>
        </div>
          <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
          <p><?php the_excerpt(); //the_content(); displays whole content?></p>
        </div>  
      <?php endwhile;
      wp_reset_postdata();
      ?>
    
    </div>
    
  </div>
</div>

<?php get_footer(); ?>
