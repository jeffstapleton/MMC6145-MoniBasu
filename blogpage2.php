<?php /*Template Name: Blog Page with Sidebar */

get_header(); ?>

<!-- HERO SECTION -->
<div id="hero">
  <div class="row">
    <div class="twelve columns">
      <?php
      if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <div class="page-feature"><?php the_post_thumbnail('medium'); ?></div>
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
      <h4 class="center">Featured Categories:</h4>
      <div class="row">
        <div class="one-half column">
          <?php $catquery = new WP_Query( 'cat=4&posts_per_page=1' ); ?>
          <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
            <h4 class="no-decor"><?php echo the_category(); ?></h4>
            <div class="blog-thumb">
              <?php the_post_thumbnail($post_id, 'medium'); ?>
            </div>
            <a class="bold black" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            <p><?php the_excerpt(); //the_content(); displays whole content?></p>
            <a class="button" href="<?php the_permalink(); ?>">Read More >></a>
          </div>  
        <?php endwhile;
        wp_reset_postdata();
        ?>
        
        <div class="one-half column">
          <?php $catquery = new WP_Query( 'cat=5&posts_per_page=1' ); ?>
          <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
            <h4 class="no-decor"><?php echo the_category(); ?></h4>
            <div class="blog-thumb">
              <?php the_post_thumbnail($post_id, 'medium'); ?>
            </div>
            <a class="bold black" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            <p><?php the_excerpt(); //the_content(); displays whole content?></p>
            <a class="button" href="<?php the_permalink(); ?>">Read More >></a>
          </div>  
        <?php endwhile;
        wp_reset_postdata();
        ?>
      </div>
      
      <div class="lt-gray-bg">
        <div class="one-half column">
          <?php $catquery = new WP_Query( 'cat=6&posts_per_page=1' ); ?>
          <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
            <h4 class="no-decor"><?php echo the_category(); ?></h4>
            <div class="blog-thumb">
              <?php the_post_thumbnail($post_id, 'medium'); ?>
            </div>
            <a class="bold black" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            <p><?php the_excerpt(); //the_content(); displays whole content?></p>
            <a class="button" href="<?php the_permalink(); ?>">Read More >></a>
          </div>  
        <?php endwhile;
        wp_reset_postdata();
        ?>
        
        <div class="one-half column">
          <?php $catquery = new WP_Query( 'cat=7&posts_per_page=1' ); ?>
          <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
            <h4 class="no-decor"><?php echo the_category(); ?></h4>
            <div class="blog-thumb">
              <?php the_post_thumbnail($post_id, 'medium'); ?>
            </div>
            <a class="bold black" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            <p><?php the_excerpt(); //the_content(); displays whole content?></p>
            <a class="button" href="<?php the_permalink(); ?>">Read More >></a>
          </div>  
        <?php endwhile;
        wp_reset_postdata();
        ?>
      </div>
    </div>
    <div class="three columns">
      <?php dynamic_sidebar('blog-container-sidebar'); ?>
    </div>
  </div>
</div>

<div class="container">
<div class="row">
<div class="twelve columns">
<h4 class="center">All Posts:</h4>

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
