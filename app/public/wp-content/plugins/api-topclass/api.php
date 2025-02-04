<?php
/*
Plugin Name:  API Topclass
Plugin URI:   http:/topclass.club
Description:  API Topclass WordPress Plugin
Version:      1.0
Author:       Nicolás Zakrzewicz
Author URI:   http:/topclass.club
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/

///////////////////////////////////////////////////////////////////////

/* add_filter( 'wpseo_debug_markers', '__return_false' );
  
function add_cors_http_header() {
    header("Access-Control-Allow-Origin: *");
}
add_action('init', 'add_cors_http_header');

add_filter( 'wp_is_application_passwords_available', '__return_true' ); */

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

remove_filter ('the_content', 'wpautop');
/* function fix_svg() {
echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' ); */


define('ALLOW_UNFILTERED_UPLOADS', true);


function add_theme_scripts() {  
    wp_enqueue_style( 'tc', plugins_url( 'tc-wp.css', __FILE__ ), array(), '1.2', 'all');
}
  
add_action( 'wp_enqueue_scripts', 'add_theme_scripts', 10000 );


?>