<?php /*Template Name: Blog Page no Sidebar Template */

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
  <div class="row spacer-tb">
    
    <?php query_posts('showposts=2'); ?>
    <?php $posts = get_posts('numberposts=5&offset=0'); foreach ($posts as $post) : start_wp(); ?>
      <?php static $count1 = 0; if ($count1 == "2") { break; } else { ?>
        
        <div class="one-half column posts">
          <div class="article-home-feature-container">
            <a href="<?php the_permalink(); ?>" rel="bookmark" class="article-home-feature-image" style="background-image:url(<?php echo get_the_post_thumbnail_url($post_id, 'large'); ?>);">
            </a>
          </div>
          <h3 class="center"><a class="no-decor" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php the_excerpt(); //the_content(); displays whole content?></p>
          <a class="button" href="<?php the_permalink(); ?>">Read More >></a>
        </div>
        
        <?php $count1++; } ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
