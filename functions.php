<?php 

## -------------------- ENQUEUE SCRIPTS -------------------- ## 
  //CSS FRAMEWORKS
  function link_css_stylesheet(){
    wp_enqueue_style('skeleton', get_template_directory_uri() . '/css/skeleton.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('font', get_template_directory_uri() . '/fonts/fonts.css');
  //MAIN css
    wp_enqueue_style('main-styles', get_stylesheet_uri());
    }

  //JAVASCRIPT file
    wp_enqueue_script('javascript', get_template_directory_uri() . '/js/script.js');

  add_action('wp_enqueue_scripts','link_css_stylesheet');

## -------------------- MENU REGISTRATION -------------------- ## 

  //CUSTOM MENUS
    function custom_menus(){ //this just creates the function
      register_nav_menus( array(
        'header-menu' => __('header menu'),
        'footer-menu' => __('footer menu')
      ));
    }
    
    add_action('init', 'custom_menus'); //this will insert it into the wordpress code
    
## -------------------- LOGO -------------------- ## 

  function moni_custom_logo_setup() { //https://developer.wordpress.org/themes/functionality/custom-logo/
   $defaults = array(
   'height'      => 100,
   'width'       => 200,
   'flex-height' => true,
   'flex-width'  => true,
   'header-text' => array( 'site-title', 'site-description' ),
   );
   add_theme_support( 'custom-logo', $defaults );
  }
  
  add_action( 'after_setup_theme', 'moni_custom_logo_setup' );

## -------------------- WIDGETS / SIDEBAR REGISTRATION -------------------- ## 

  //ADD WIDGETS
  function blank_widgets_init(){
    //header widget
    register_sidebar( array(
      'name'          => ('header right'),
      'id'            => 'header-right',
      'description'   => 'Right widget area in the header',
      'before_widget' => '<div class="widget-header widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
  ## HOME PAGE ##
    //hero image widget
    register_sidebar( array(
      'name'          => ('Hero Image'),
      'id'            => 'hero-image',
      'description'   => 'Hero Image on Home Page',
      'before_widget' => '<div class="hero-image-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    
    //pinned red article
    /*register_sidebar( array(
      'name'          => ('Featured Red Block'),
      'id'            => 'featured-block',
      'description'   => 'Featured Red Block on Home Page',
      'before_widget' => '<div class="featured-block-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    )); */
  
    //Contact Form  widget
    register_sidebar( array(
      'name'          => ('Contact Form'),
      'id'            => 'contact-form',
      'description'   => 'Widget area for the contact form',
      'before_widget' => '<div class="contact-form">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
    //Thirds home block widget
    register_sidebar( array(
      'name'          => ('Bottom Left Home'),
      'id'            => 'bottom-left-home',
      'description'   => 'Widget area for bottom left home page',
      'before_widget' => '<div class="bottom-left-home">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
    //Thirds home block widget
    register_sidebar( array(
      'name'          => ('Bottom Middle Home'),
      'id'            => 'bottom-middle-home',
      'description'   => 'Widget area for bottom middle home page',
      'before_widget' => '<div class="bottom-middle-home">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
    //Thirds home block widget
    register_sidebar( array(
      'name'          => ('Bottom Right Home'),
      'id'            => 'bottom-right-home',
      'description'   => 'Widget area for bottom right home page',
      'before_widget' => '<div class="bottom-right-home">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    
    //Fourth home block widget
    register_sidebar( array(
      'name'          => ('Bottom Fourth Home'),
      'id'            => 'bottom-fourth-home',
      'description'   => 'Widget area for bottom 4th home page',
      'before_widget' => '<div class="bottom-fourth-home">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    
    //Fifth home block widget
    register_sidebar( array(
      'name'          => ('Bottom Fifth Home'),
      'id'            => 'bottom-fifth-home',
      'description'   => 'Widget area for bottom fifth home page',
      'before_widget' => '<div class="bottom-fifth-home">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //sidebar widget
    register_sidebar( array(
      'name'          => ('Right Sidebar'),
      'id'            => 'right-sidebar',
      'description'   => 'Right sidebar widget area',
      'before_widget' => '<div class="widget-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //left footerwidget
    register_sidebar( array(
      'name'          => ('left footer'),
      'id'            => 'left footer',
      'description'   => 'left widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Middle footerwidget
    register_sidebar( array(
      'name'          => ('middle footer'),
      'id'            => 'middle footer',
      'description'   => 'middle widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-middle">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Right footerwidget
    register_sidebar( array(
      'name'          => ('right footer'),
      'id'            => 'right footer',
      'description'   => 'right widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

  }                   //MAKE SURE YOU PASTE SEP WIDGETS INSIDE BRACKETS!>

  add_action('widgets_init', 'blank_widgets_init'); //This inserts it into the backend for use

## -------------------- GENERAL WORDPRESS INTEGRATIONS -------------------- ## 
  
  //FEATURED IMAGES TO POST
      add_theme_support('post-thumbnails'); //Tell wordpress that this theme accepts featured images

  //ARCHIVE DATE YEAR AUTHOR
    function publish_author_date(){
      $archive_year = get_the_time('Y');
      $archive_month = get_the_time('m');
      $archive_day = get_the_time('d');
    ?>

    <p>Published by <?php the_author(); ?> on <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php echo get_the_date();?></a></p>
    <?php
    }

?>