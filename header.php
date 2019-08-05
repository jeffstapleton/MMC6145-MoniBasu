<DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title><?php bloginfo('name'); ?></title>
    
    <?php wp_head(); ?>
  </head>
  
  <body>
    <nav class="desktop-menu">
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
      </nav>
      <?php 
      if ( function_exists('has_nav_menu') && has_nav_menu('mobile-menu') ) {
    wp_nav_menu( array(
      'depth' => 6,
      'sort_column' => 'menu_order',
      'container' => 'ul',
      'menu_id' => 'main-nav',
      'menu_class' => 'nav mobile-menu',
      'theme_location' => 'mobile-menu'
    ) );
    } else {
       echo "<ul class='nav mobile-menu'> <font style='color:red'>Mobile Menu has not been set</font> </ul>";
} ?>





