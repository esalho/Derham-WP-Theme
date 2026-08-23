<?php
function themeStyles(){
    wp_enqueue_style('derham-style', get_stylesheet_uri());
}
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
add_theme_support( 'post-thumbnails' );
function themeWidgets() {
    register_sidebar( array(
        'name'          => 'Pääsivupalkki',
        'id'            => 'sidebar-1',
        'description'   => 'Tämä alue näkyy artikkelien vieressä.',
        
        'before_widget' => '<div class="widget">', 
        'after_widget'  => '</div>',
        
        'before_title'  => '<h3 class="widget-header">',
        'after_title'   => '</h3>',
    ) );
}
// Sidotaan funktio oikeaan koukkuun (widgets_init)
add_action( 'widgets_init', 'themeWidgets' );