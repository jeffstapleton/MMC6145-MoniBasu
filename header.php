<DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title><?php bloginfo('name'); ?></title>
    
    <?php wp_head(); ?>
  </head>
  
  <body>
    <nav id="custom-nav">
        <div id="logo">
          <?php if ( function_exists('the_custom_logo')) {
            the_custom_logo();
          } ?>
        </div>
        <div class="nav-block">
          <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container-class' => 'menu-header'
          ));
          ?>
        </div>
      </nav>  





