<?php /*Template Name: Home Page Template*/ ?> <!-- This code activates the template for selection in the backend post/page maker -->

<?php get_header(); ?>

<!-- HERO SECTION -->
<div class="hero">
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

<!-- PINNED RED BLOCK -->

<!-- https://www.wpbeginner.com/wp-tutorials/how-to-display-recent-posts-from-a-specific-category-in-wordpress/-->
<!-- https://wordpress.stackexchange.com/questions/115954/featured-image-as-background-image-on-pages -->
<div class="lt-gray-bg">
  <div class="container featured-block">
    <div class="row float-top">
      <div class="twelve columns float-top">
        <?php $catquery = new WP_Query( 'cat=3&posts_per_page=1' ); ?>
        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
          <div class="featured-block-image" style="background-image:url(
            <?php echo get_the_post_thumbnail_url($post_id, 'medium'); ?>);">

            <h3 class="white"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); //the_content(); displays whole content?></p>
          </div>
        <?php endwhile;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>

  <!-- Most Recent Global Articles -->

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
      <div class="row twos-home">
        <div class="five columns">
          <?php dynamic_sidebar('bottom-fourth-home'); ?>
        </div>
        <div class="five columns">
          <?php dynamic_sidebar('bottom-fifth-home'); ?>
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
