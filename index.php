<?php get_header(); ?>

<div class="container quarter-spacer-bottom quarter-spacer-top">
  <div class="row">

        <?php query_posts('showposts=2'); ?>
        <?php $posts = get_posts('numberposts=5&offset=0'); foreach ($posts as $post) : start_wp(); ?>
        <?php static $count1 = 0; if ($count1 == "2") { break; } else { ?>

        <div class="one-half column posts">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="article-feature-image"><?php the_post_thumbnail('medium'); ?></div>
          <p class="category">Category: <?php the_category(' | '); ?></p>
          <p class="pub-info bottom-five"><?php publish_author_date(); ?></p>
          <p><?php the_excerpt(); //the_content(); displays whole content?></p>
          <a class="button" href="<?php the_permalink(); ?>">Read More >></a>
        </div>

        <?php $count1++; } ?>
        <?php endforeach; ?>
    </div>

  <div class="row">

        <?php query_posts('showposts=2'); ?>
        <?php $posts = get_posts('numberposts=5&offset=2'); foreach ($posts as $post) : start_wp(); ?>
        <?php static $count2 = 0; if ($count2 == "2") { break; } else { ?>

        <div class="one-half column posts">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="article-feature-image"><?php the_post_thumbnail('medium'); ?></div>
          <p class="pub-info bottom-five"><?php echo "Published " . get_the_date(); //echo get_the_date puts the date on every post... the_date only prints out the date once per day...so if you publish multiple per day, only one would show up?></p>
          <p class="pub-info bottom-five"><?php echo "Article written by: " . get_the_author(); ?></p>
          <p><?php the_excerpt(); //the_content(); displays whole content?></p>
          <a class="button" href="<?php the_permalink(); ?>">Read More >></a>
        </div>

        <?php $count2++; } ?>
        <?php endforeach; ?>
    </div>

  <div class="row">

        <?php query_posts('showposts=2'); ?>
        <?php $posts = get_posts('numberposts=2&offset=4'); foreach ($posts as $post) : start_wp(); ?>
        <?php static $count3 = 0; if ($count3 == "2") { break; } else { ?>

        <div class="one-half column posts">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="article-feature-image"><?php the_post_thumbnail('medium'); ?></div>
          <p class="pub-info bottom-five"><?php echo "Published " . get_the_date(); //echo get_the_date puts the date on every post... the_date only prints out the date once per day...so if you publish multiple per day, only one would show up?></p>
          <p class="pub-info bottom-five"><?php echo "Article written by: " . get_the_author(); ?></p>
          <p><?php the_excerpt(); //the_content(); displays whole content?></p>
          <a class="button" href="<?php the_permalink(); ?>">Read More >></a>
        </div>

        <?php $count3++; } ?>
        <?php endforeach; ?>
    </div>
</div>
<?php get_footer(); ?>
