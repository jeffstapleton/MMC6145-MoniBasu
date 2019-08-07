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
        'footer-menu' => __('footer menu'),
      ));
    }
    
    add_action('init', 'custom_menus'); //this will insert it into the wordpress code

## -------------------- LOGO -------------------- ## 

  function moni_custom_logo_setup() { //https://developer.wordpress.org/themes/functionality/custom-logo/
   $defaults = array(
   'height'      => 200,
   'width'       => 400,
   'flex-height' => true,
   'flex-width'  => true,
   'header-text' => array( 'site-title', 'site-description' ),
   );
   add_theme_support( 'custom-logo', $defaults );
  }
  
  add_action( 'after_setup_theme', 'moni_custom_logo_setup' );

## -------------------- WIDGETS / SIDEBAR REGISTRATION -------------------- ## 
  
  //ADD FAVICON TO DASHBOARD
    function add_my_favicon() {
      $favicon_path = get_template_directory_uri() . '/images/favicon.ico';

      echo '<link rel="shortcut icon" href="' . esc_url($favicon_path) . '" />';
      }

    add_action( 'wp_head', 'add_my_favicon' ); //front end
    add_action( 'admin_head', 'add_my_favicon' ); //admin end

## -------------------- WIDGETS / SIDEBAR REGISTRATION -------------------- ## 

  //ADD WIDGETS
  function blank_widgets_init(){
    //header widget
    register_sidebar( array(
      'name'          => ('header right'),
      'id'            => 'header-right',
      'description'   => 'HEADER: Right widget area in the header',
      'before_widget' => '<div class="widget-header widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
## HOME PAGE ##
    //hero image widget
    register_sidebar( array(
      'name'          => ('HOME: Hero Image'),
      'id'            => 'hero-image',
      'description'   => 'HOME: Hero Image on Home Page',
      'before_widget' => '<div class="hero-image-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
    //Contact Form widget
    register_sidebar( array(
      'name'          => ('HOME & ABOUT: Contact Form'),
      'id'            => 'contact-form',
      'description'   => 'HOME: Widget area for the contact form',
      'before_widget' => '<div class="contact-form">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
    //Thirds home block widget
    register_sidebar( array(
      'name'          => ('HOME: Bottom Left Home'),
      'id'            => 'bottom-left-home',
      'description'   => 'HOME: Widget area for bottom left home page',
      'before_widget' => '<div class="bottom-left-home">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
    //Thirds home block widget
    register_sidebar( array(
      'name'          => ('HOME: Bottom Middle Home'),
      'id'            => 'bottom-middle-home',
      'description'   => 'HOME: Widget area for bottom middle home page',
      'before_widget' => '<div class="bottom-middle-home">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
    //Thirds home block widget
    register_sidebar( array(
      'name'          => ('HOME: Bottom Right Home'),
      'id'            => 'bottom-right-home',
      'description'   => 'HOME: Widget area for bottom right home page',
      'before_widget' => '<div class="bottom-right-home">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    
    //Fourth home block widget
    register_sidebar( array(
      'name'          => ('HOME: Bottom Fourth Home'),
      'id'            => 'bottom-fourth-home',
      'description'   => 'HOME: Widget area for bottom 4th home page',
      'before_widget' => '<div class="bottom-fourth-home">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    
    //Fifth home block widget
    register_sidebar( array(
      'name'          => ('HOME:Bottom Fifth Home'),
      'id'            => 'bottom-fifth-home',
      'description'   => 'HOME: Widget area for bottom fifth home page',
      'before_widget' => '<div class="bottom-fifth-home">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Contact block widget
    register_sidebar( array(
      'name'          => ('HOME & ABOUT: Contact Widget'),
      'id'            => 'contact-widget',
      'description'   => 'Contact Me Form Widget',
      'before_widget' => '<div class="contact-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title contact-widget-h3">',
      'after_title'   => '</h3>'
    ));

## ABOUT ##
    //Featured Red About Block
    register_sidebar( array(
      'name'          => ('ABOUT: Featured Red About Block'),
      'id'            => 'featured-block',
      'description'   => 'ABOUT: Featured Red Block on About Page',
      'before_widget' => '<div class="featured-block-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //About Left Sidebar widget
    register_sidebar( array(
      'name'          => ('ABOUT: Left Sidebar'),
      'id'            => 'left-sidebar',
      'description'   => 'ABOUT: Left sidebar widget area',
      'before_widget' => '<div class="left-widget-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
    //Thirds About block widget
    register_sidebar( array(
      'name'          => ('ABOUT: Bottom Left About'),
      'id'            => 'bottom-left-about',
      'description'   => 'ABOUT: Image Widget area for bottom left about page',
      'before_widget' => '<div class="bottom-left-about">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
    //Thirds About block widget
    register_sidebar( array(
      'name'          => ('ABOUT: Bottom Middle About'),
      'id'            => 'bottom-middle-about',
      'description'   => 'ABOUT: Widget area for bottom middle about page',
      'before_widget' => '<div class="bottom-middle-about">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
    //Thirds About block widget
    register_sidebar( array(
      'name'          => ('ABOUT: Bottom Right About'),
      'id'            => 'bottom-right-about',
      'description'   => 'HOME: Widget area for bottom right about page',
      'before_widget' => '<div class="bottom-right-about">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
## BOOK ##
    //Featured Red Book Block
    register_sidebar( array(
      'name'          => ('BOOK: Featured Red Book Block'),
      'id'            => 'featured-book-block',
      'description'   => 'BOOK: Featured Red Block on Book Page',
      'before_widget' => '<div class="featured-book-block-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  
    //BOOK: Image Gallery Widget
    register_sidebar( array(
      'name'          => ('BOOK: Image Gallery'),
      'id'            => 'book-image-gallery',
      'description'   => 'BOOK: Image Gallery widget area',
      'before_widget' => '<div class="book-image-gallery">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    
    //BOOK Left Sidebar widget
    register_sidebar( array(
      'name'          => ('BOOK: Left Sidebar'),
      'id'            => 'book-sidebar',
      'description'   => 'BOOK: Left sidebar widget area',
      'before_widget' => '<div class="book-widget-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

## FOOTER ##
    //left footerwidget
    register_sidebar( array(
      'name'          => ('FOOTER: left footer'),
      'id'            => 'left footer',
      'description'   => 'left widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Middle footerwidget
    register_sidebar( array(
      'name'          => ('FOOTER: middle footer'),
      'id'            => 'middle footer',
      'description'   => 'middle widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-middle">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Right footerwidget
    register_sidebar( array(
      'name'          => ('FOOTER: right footer'),
      'id'            => 'right footer',
      'description'   => 'right widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    
## POST ##
    //sidebar widget
    register_sidebar( array(
      'name'          => ('post: Right Sidebar'),
      'id'            => 'right-sidebar',
      'description'   => 'POST: Right sidebar widget area',
      'before_widget' => '<div class="right-widget-sidebar">',
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

  //ADD page excerpt suppport

    add_post_type_support( 'page', 'excerpt' );

?>