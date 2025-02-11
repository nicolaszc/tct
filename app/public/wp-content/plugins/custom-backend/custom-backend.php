<?php
/*
Plugin Name:  Custom Backend
Plugin URI:   https://topclass-entertainmenmt.com
Description:  Custom Backend WordPress Plugin
Version:      1.0
Author:       Topclass Entertainment
Author URI:   https://topclass-entertainmenmt.com
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

define('ALLOW_UNFILTERED_UPLOADS', true);

remove_filter ('the_content', 'wpautop');
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    return $content;
});
add_action('admin_head', 'admin_styles');
function admin_styles() {
?>
	<style>
    body{
      /* background:#FFF; */
    }
    html.wp-toolbar { 
      padding-top: 50px; 
    } 
    #wpadminbar { 
      height:50px!important; 
    } 
    #wpadminbar .quicklinks ul { 
      margin-top:5px; 
    } 
    #wpadminbar ul#wp-admin-bar-root-default>li { 
      margin-right: 0; margin-top: 5px; 
    } 
    #wpadminbar .ab-icon:before { 
      /* content:"" !important; */ 
    } 
    .wp-admin #wpadminbar #wp-admin-bar-site-name>.ab-item:before { 
      content:"" !important; 
    } 
    #wpadminbar #wp-admin-bar-wp-logo { 
      display: none; 
    } 
    #wpadminbar #wp-admin-bar-my-sites a.ab-item, 
    #wpadminbar #wp-admin-bar-site-name>a.ab-item { 
      background-image:url(<?php echo '../'.get_stylesheet_directory_uri().'/assets/img/logo/favicon.png'; ?>) !important; 
      background-repeat: no-repeat; 
      text-indent: -100vw; 
      width: 95px; 
      padding: 0; 
      height: 40px; 
      margin-right: 4rem; 
      margin-left: 1rem; 
    } 
    .logged-in #wpadminbar>#wp-toolbar>#wp-admin-bar-root-default .ab-icon { 
      display: none; 
    } 
    #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, 
    #adminmenu li.current a.menu-top{
      background-color: #C4FF00;
      color:#000;
    }
    #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu:hover, 
    #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu:hover div.wp-menu-image:before{
      color:#000!important;
    }
    #adminmenu .wp-has-current-submenu div.wp-menu-image:before, 
    #adminmenu li.current div.wp-menu-image:before{
      color:#000;
    }
    ul#adminmenu a.wp-has-current-submenu:after, 
    ul#adminmenu>li.current>a.current:after{
      border-right-color:#000!important;
    }
    #adminmenu a:hover{
      color: #C4FF00;
    }
    #adminmenu li>a.menu-top:focus{
      color: #C4FF00;
    }
    #adminmenu li a:focus, #adminmenu li a:hover, 
    #adminmenu li a:focus div.wp-menu-image:before,
    #adminmenu li.opensub div.wp-menu-image:before,
    #adminmenu li:hover div.wp-menu-image:before {
      color: #C4FF00;
    }
    a{
      /* color:#45CDB5; */
    }
    .wp-core-ui .button, .wrap .page-title-action, 
    .wrap .page-title-action:active{
      /* color:#45CDB5;
      border-color:#45CDB5; */
      border-radius: 800px;
      overflow: hidden;
    }
    .meta-box-sortables select{
      border-radius: 800px;
    }
    #adminmenu a:hover{
      color: #C4FF00!important;
    }
    #adminmenu .wp-submenu a:focus, 
    #adminmenu .wp-submenu a:hover, 
    #adminmenu a:hover, 
    #adminmenu li.menu-top>a:focus,
    #collapse-button:hover,
    #wpadminbar .ab-top-menu>li.hover>.ab-item, 
    #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus, 
    #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item, 
    #wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus,
    #wpadminbar:not(.mobile)>#wp-toolbar a:focus span.ab-label, 
    #wpadminbar:not(.mobile)>#wp-toolbar li:hover span.ab-label, 
    #wpadminbar>#wp-toolbar li.hover span.ab-label,
    #wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover>a, 
    #wpadminbar .quicklinks .menupop ul li a:focus, 
    #wpadminbar .quicklinks .menupop ul li a:focus strong, 
    #wpadminbar .quicklinks .menupop ul li a:hover, 
    #wpadminbar .quicklinks .menupop ul li a:hover strong, 
    #wpadminbar .quicklinks .menupop.hover ul li a:focus, 
    #wpadminbar .quicklinks .menupop.hover ul li a:hover, 
    #wpadminbar .quicklinks .menupop.hover ul li div[tabindex]:focus, 
    #wpadminbar .quicklinks .menupop.hover ul li div[tabindex]:hover, 
    #wpadminbar li #adminbarsearch.adminbar-focused:before, 
    #wpadminbar li .ab-item:focus .ab-icon:before, 
    #wpadminbar li .ab-item:focus:before, 
    #wpadminbar li a:focus .ab-icon:before, 
    #wpadminbar li.hover .ab-icon:before, 
    #wpadminbar li.hover .ab-item:before, 
    #wpadminbar li:hover #adminbarsearch:before, 
    #wpadminbar li:hover .ab-icon:before, 
    #wpadminbar li:hover .ab-item:before, 
    #wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus, 
    #wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover,
    #adminmenu li.menu-top:hover, 
    #adminmenu li.opensub>a.menu-top, 
    #adminmenu li>a.menu-top:focus,
    #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, 
    #adminmenu .wp-menu-arrow, 
    #adminmenu .wp-menu-arrow div{
      color: #C4FF00!important;
    }
    #adminmenu .current div.wp-menu-image:before, 
    #adminmenu .wp-has-current-submenu div.wp-menu-image:before, 
    #adminmenu a.current:hover div.wp-menu-image:before, 
    #adminmenu a.wp-has-current-submenu:hover div.wp-menu-image:before, 
    #adminmenu li.wp-has-current-submenu a:focus div.wp-menu-image:before, 
    #adminmenu li.wp-has-current-submenu.opensub div.wp-menu-image:before, 
    #adminmenu li.wp-has-current-submenu:hover div.wp-menu-image:before{
      color: #000000!important;
    }
    #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item{
      background-color:transparent;
    }
    .postbox, 
    table, 
    .wp-filter, 
    .js .postbox .hndle, 
    .js .widget .widget-top,
    .widgets-chooser ul,
    #menu-management .menu-edit, 
    #menu-settings-column .accordion-container, 
    .comment-ays, .feature-filter, .manage-menus, 
    .menu-item-handle, .popular-tags, .stuffbox, 
    .widget-inside, .widget-top, .widgets-holder-wrap, 
    .wp-editor-container, p.popular-tags, 
    table.widefat,
    .media-upload-form .notice, 
    .media-upload-form div.error, 
    .wrap .notice, .wrap div.error, 
    .wrap div.updated,
    .plugin-card,
    .card,
    .health-check-accordion, 
    .privacy-settings-accordion{
      border-radius: 4px;
      overflow: hidden;
    }
    table#post-status-info, .widget-inside{
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    #screen-meta, #major-publishing-actions{
      border-bottom-left-radius: 4px;
      border-bottom-right-radius: 4px;
    }
    .wp-switch-editor{
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
    }
    .wp-editor-expand #wp-content-editor-tools{
      border-bottom: 1px solid #dcdcde!important;
    }
    .theme-browser .theme{
      border-radius: 4px;
      overflow: hidden;
    }
    div#widgets-right .widget.open .widget-top{
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }
    #templateside>ul{
      border-radius:4px;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      overflow:hidden;
    }
    .wrap #templateside .notice{
      border-radius:0;
      border-right: none;
      border-top: none;
      border-bottom: none;
    }
    .wp-editor-container{
      border-radius: 0;;
    }
    .widget{
      margin-left: 0 !important;
    }
    .acf-editor-wrap iframe {			
        min-height: 0;
    }
	</style>
<?php	
  }

/* function add_theme_scripts() {  
    //tc-style.css
    $modificated_tc_stylesCss = date('YmdHi', filemtime(plugins_url('tc-styles.css',  __FILE__)));
    wp_enqueue_style( 'tc', plugins_url( 'tc-styles.css', __FILE__ ), array(), $modificated_tc_stylesCss, 'all');
}   
add_action( 'get_footer', 'add_theme_scripts', 10000 );*/

//Add our custom template to the admin's templates dropdown
/* add_filter( 'theme_page_templates', 'pluginname_template_as_option', 10, 3 );
function pluginname_template_as_option( $page_templates, $theme, $post ){

    $page_templates['page-coming-soon.php'] = 'Coming Soon Page';

    return $page_templates;
}

//When our custom template has been chosen then display it for the page
add_filter( 'template_include', 'pluginname_load_template', 99 );
function pluginname_load_template( $template ) {

    global $post;
    $custom_template_slug   = 'page-coming-soon.php';
    $page_template_slug     = get_page_template_slug( $post->ID );

    if( $page_template_slug == $custom_template_slug ){
        return plugin_dir_path( __FILE__ ) . $custom_template_slug;
    }

    return $template;

}*/
?>