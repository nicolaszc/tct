<?php

/**
 * @package Bootscore Child
 *
 * @version 6.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Enqueue scripts and styles
 */
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {
  //owl.css
  $modificated_owlCss       = date('YmdHi', filemtime(get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css'));
  wp_enqueue_style('owl', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), $modificated_owlCss);
  
  //animate.css
  $modificated_animateCss       = date('YmdHi', filemtime(get_stylesheet_directory_uri() . '/assets/css/animate.min.css'));
  wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/css/animate.min.css', array(), $modificated_animateCss);

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/assets/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  
  //owl.js
  $modificated_owlJs = date('YmdHi', filemtime(get_stylesheet_directory_uri() . '/assets/js/owl.carousel.js'));
  wp_enqueue_script('owl-script', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.js', array(), $modificated_owlJs, false);

  // custom.js
  // Get modification time. Enqueue file with modification date to prevent browser from loading cached scripts when file content changes. 
  $modificated_CustomJS = date('YmdHi', filemtime(get_stylesheet_directory() . '/assets/js/custom.js'));
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), $modificated_CustomJS, true);
  
  
}
