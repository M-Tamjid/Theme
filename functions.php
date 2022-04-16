<?php 

function files_css_js() {
  //CSS Files
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'style-css', get_stylesheet_uri() );
  
  //JS Files
  wp_enqueue_script( 'style', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array('jquery'), time(), true );
  wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(''), time(), true );
  wp_enqueue_script( 'slicknav-js', get_template_directory_uri() . '/assets/js/slicknav.min.js', array('jquery'), time(), true );
  wp_enqueue_script( 'carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), time(), true );
  wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), time(), true );
  wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), time(), true );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), time(), true );
}

add_action( 'wp_enqueue_scripts', 'files_css_js' );

 function menu_assets(){
       register_nav_menus( array(
      'primary' => __( 'Primary Menu', 'themecamp' ),
      'footer'  => __( 'Footer Menu', 'themecamp' ),
      ) );
}
add_action( 'after_setup_theme', 'menu_assets');