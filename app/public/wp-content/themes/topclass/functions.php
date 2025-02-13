<?php

/**
 * @package TopClass
 *
 * @version 1.0.0
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

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

define('ALLOW_UNFILTERED_UPLOADS', true);

// Remove p tags from Contact Form 7
remove_filter ('the_content', 'wpautop');
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_form_elements', function($content) {
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
  return $content;
});

// Get styles from ACF options page
// Loop through the rows of Styles clone

function get_field_group_fields_name($field_group, $field_group_fields = array() ) {
  $field_group_object= get_field_object($field_group);
  $field_group_key = $field_group_objetct['key'];
  $field_group_name = $field_group_object['name'];
  
  $fields = acf_get_fields( $field_group_key );
  $field_group_fields_names = array();

  foreach ( $fields as $field ) {
    
    if ( empty( $fields ) ) {
      return;
    }
    if ( empty( $field_group_fields ) ) {
      $field_group_fields_names = $fields;
      field_group_render_fields( $field_group_fields_names );
      return;
    }
    if ( in_array( $field['type'], $field_group_fields ) || in_array( $field['name'], $field_group_fields ) ) {
      $field_group_fields_names[] = $field['name'];
    }
  
  } 

  field_group_render_fields( $field_group_fields_names, $field_group_name );
  return;
}

function field_group_render_fields( $field_group_name, $fields_name = array() ) {
	// Make sure we have $args and array.
	if ( empty( $fields_name ) ) {
		return;
	}

    if($field_group_name == 'site_settings'){ 
      echo '.site_logo = ' . get_field('site_logo', 'options');
      echo '.$site_logo_dark = ' . get_field('site_logo_dark', 'options');
      echo '.site_typo = ' . get_field('site_typo', 'options');
        foreach ( $fields_name as $field ) {
          if ( have_rows( $field ,'options') ) : 
            while ( have_rows( $field,'options' ) ) : the_row(); 
              if(have_rows('text','options')):
                while(have_rows('text','options')) : the_row();
              
                  echo '.' . $field . '_primary_color = ' . get_sub_field('primary_color');
                  echo '.' . $field . '_secondary_color = ' . get_sub_field('secondary_color');
                  echo '.' . $field . '_terciary_color = ' .get_sub_field('terciary_color');

                endwhile;
              endif;
 
              if(have_rows('background','options')):
                while(have_rows('backround','options')) : the_row();
              
                echo $field . 'bg_color = ' . get_sub_field('color');
                echo $field . 'bg_color = ' . get_sub_field('color');


                endwhile;
              endif;

              if(have_rows('gradient','options')):
                while(have_rows('gradient','options')) : the_row();

                  echo '.' . $field . 'gradient_use = ' . get_sub_field('use');
                  echo '.' . $field . 'gradient_height = ' . get_sub_field('height');
                  echo '.' . $field . 'gradient_color_1 = ' . get_sub_field('color_1');
                  echo '.' . $field . 'gradient_color_2 = ' . get_sub_field('color_2');

                endwhile;
              endif;

            endwhile;
          endif;
        }
    }
}

