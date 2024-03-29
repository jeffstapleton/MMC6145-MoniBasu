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
  <div class="nine columns">
    <?php query_posts('posts_per_page=5');
    if(have_posts()) : 
      while(have_posts()) :
        the_post(); ?>
        <div class="row archive spacer-tb">
          <div class="one-half column">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
          </div>
          <div class="one-half column">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            
            <?php publish_author_date(); ?>
            <p><?php the_excerpt(); ?></p>
            <a class="button" href="<?php the_permalink(); ?>">Read More >></a> 
          </div>
        </div>
        <?php
      endwhile; 
    endif; ?>
  </div>
  
  <div class="three columns">
    <div class="sidebar">
      <?php dynamic_sidebar('blog-container-sidebar'); ?>
    </div>
  </div>
</div>
</div>

<div class="spacer-tb">
</div>



<?php get_footer(); ?>