<?php


add_action( 'wp_enqueue_scripts', 'kalevala_styles' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function kalevala_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri('/assets/') );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array('main') );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css', array('swiper') );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array('normalize') );
 
}
add_action( 'wp_footer', 'kalevala_scripts' );
function kalevala_scripts(){
 // дерегистрация jquerry
  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() .'/assets/js/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery'  );
  //
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js' , array('jquery'));
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js' , array('swiper'));
	// wp_enqueue_script( '3d', get_template_directory_uri() . '/assets/js/3d.js' , array('slider'));
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('slider'));
}