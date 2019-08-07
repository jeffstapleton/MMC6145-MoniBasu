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
        <?php query_posts('posts_per_page=10');
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <div class="nine columns archive spacer-tb">
              <div class="archive-row">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_post_thumbnail('small'); ?>
                <?php publish_author_date(); ?>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read More...</a>
            <?php
              endwhile;
            endif; ?>
            </div>
            </div><?php
          }
        } 
        ?>
      </div>
      
      
      <?php query_posts('posts_per_page=10');
      if (have_posts()){
        while (have_posts()){
          the_post();
      excerpt();
    endwhile; 
  endif; 
  ?>

</div>
      <div class="three columns">
        <div class="sidebar"><?php dynamic_sidebar('blog-container-sidebar'); ?>
        <h2>fart</h2>
        </div> <!-- This gets the sidebar and inserts it here -->
      </div>


    </div>
  </div>





<?php get_footer(); ?>