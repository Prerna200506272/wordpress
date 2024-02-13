<?php
//adding navigation
function assignmentone_theme_setup() {
  register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
  ) );
}
add_action( 'after_setup_theme', 'assignmentone_theme_setup' );

//adding featured image support for my posts
add_theme_support( 'post-thumbnails' );
// Set up custom footer widgets
function assignmentone_custom_footer_widgets_init(){
  register_sidebar(array(
    'name'          => __( 'Custom Footer Widget One', 'assignmentone' ),
    'id'            => 'custom-footer-widget-one',
    'description'   => __( 'The first custom footer widget area', 'assignmentone' ),
    'before_widget' => '<div class="custom-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<span class="custom-widget-title">',
    'after_title'   => '</span>',
  ));

  register_sidebar(array(
    'name'          => __( 'Custom Footer Widget Two', 'assignmentone' ),
    'id'            => 'custom-footer-widget-two',
    'description'   => __( 'The second custom footer widget area', 'assignmentone' ),
    'before_widget' => '<div class="custom-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<span class="custom-widget-title">',
    'after_title'   => '</span>',
  ));
}
add_action( 'widgets_init', 'assignmentone_custom_footer_widgets_init' );
?>
