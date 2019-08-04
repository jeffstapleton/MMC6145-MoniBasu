<?php /*Template Name: 404 Page */

get_header(); ?>
<div class="error">
<div class="container center-flex">
    <div class="row four-info">
      <div class="twelve columns">

        <h2>Whoops?!</h2>
        <h3 class="center">You followed a link to my page that doesn't exist or I haven't written about that topic yet.</h3>
        <p class="center">Go back to my <a href="<?php echo home_url('/'); ?>">home page</a></p>

      </div>
    </div>
</div>
</div>




<?php get_footer(); ?>
