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
      <?php query_posts('posts_per_page=5');
      if(have_posts()) : 
        while(have_posts()) :
           the_post(); ?>
           <div class="four columns">
             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
           </div>
           <div class="eight columns">
           <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
           
              <?php publish_author_date(); ?>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>">Read More...</a> 
            </div>
            <?php
    endwhile; 
  endif; ?>

</div>
      <div class="three columns">
        <div class="sidebar"><?php dynamic_sidebar('blog-container-sidebar'); ?>
        <h2>fart</h2>
        </div> <!-- This gets the sidebar and inserts it here -->
      </div>


    </div>
  </div>





<?php get_footer(); ?>