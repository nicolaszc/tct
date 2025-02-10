<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * @version 6.0.4
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GDY39XBR13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GDY39XBR13');
</script>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
$host=$_SERVER['HTTP_HOST'];
$bkg_color = get_field('body_bg_color','options');
if ( have_rows( 'background_gradient' ,'options') ) : 
  while ( have_rows( 'background_gradient' ) ) : the_row();
      $use_gradient=get_sub_field('use_gradient');
      $color_1=get_sub_field('color_1');
      $color_2=get_sub_field('color_2');
      $color_3=get_sub_field('color_3');
      $color_4=get_sub_field('color_4');
  endwhile;
endif;
$bkg_img = get_field('body_bg','options');
$bkg_size = get_field('body_bg_size','options');
$bkg_position = get_field('body_bg_pos','options');
?>

  <style>
    html{
      min-height:100vh;
      height: auto;
    }
    body{
      background-color: <?php echo $bkg_color ?>!important;
      background-image: url(<?php echo $bkg_img ?>); 
      background-repeat: no-repeat;
      background-size: <?php echo $bkg_size ?>;
      background-position: <?php echo $bkg_position ?>;
      min-height:100vh;
    }
    .site-content{
      <?php if($use_gradient): ?>
        background: -moz-linear-gradient(0deg, <?php echo $color_1 ?> 0%, <?php echo $color_2 ?> 30%, <?php echo $color_3 ?> 70%, <?php echo $color_4 ?> 100%)!important; 
        background: -webkit-linear-gradient(0deg, <?php echo $color_1 ?> 0%, <?php echo $color_2 ?> 30%, <?php echo $color_3 ?> 70%, <?php echo $color_4 ?> 100%)!important; 
        background: linear-gradient(0deg, <?php echo $color_1 ?> 0%, <?php echo $color_2 ?> 30%, <?php echo $color_3 ?> 70%, <?php echo $color_4 ?> 100%)!important; 
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $color_1 ?>', endColorstr='<?php echo $color_4 ?>', GradientType=1)!important;
      <?php endif; ?>
    }
    header, footer{
      <?php if($use_gradient): ?>
        background: <?php echo $color_4 ?>!important;
      <?php else: ?>
        background:rgb(237, 26, 115)!important;
      <?php endif; ?>
    }
  </style>
<?php wp_body_open(); ?>

<div id="page" class="site">
  
  <!-- Skip Links -->
  <a class="skip-link visually-hidden-focusable" href="#primary"><?php esc_html_e( 'Skip to content', 'bootscore' ); ?></a>
  <a class="skip-link visually-hidden-focusable" href="#footer"><?php esc_html_e( 'Skip to footer', 'bootscore' ); ?></a>

  <!-- Top Bar Widget -->
  <?php if (is_active_sidebar('top-bar')) : ?>
    <?php dynamic_sidebar('top-bar'); ?>
  <?php endif; ?>  
  <?php get_template_part('template-parts/main-banner'); ?>
  <header id="masthead" class="<?= apply_filters('bootscore/class/header', 'sticky-top'); ?> site-header">

    <nav id="nav-main" class="navbar <?= apply_filters('bootscore/class/header/navbar/breakpoint', 'navbar-expand-lg'); ?>">

      <div class="<?= apply_filters('bootscore/class/container', 'container', 'header'); ?>">
        
        <!-- Navbar Brand -->
        <a class="navbar-brand" href="<?= esc_url(home_url()); ?>">
          <img src="<?= get_field('site_logo','options'); ?>" alt="<?php bloginfo('name'); ?> Logo" class="d-td-none me-2 logo">
          <img src="<?= get_field('site_logo','options'); ?>" alt="<?php bloginfo('name'); ?> Logo" class="d-tl-none me-2 logo">
        </a>  

        <!-- Offcanvas Navbar -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
          <div class="offcanvas-header">
            <span class="h5 offcanvas-title"><?= apply_filters('bootscore/offcanvas/navbar/title', __('Menu', 'bootscore')); ?></span>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">

            <!-- Bootstrap 5 Nav Walker Main Menu -->
            <?php get_template_part('template-parts/header/main-menu'); ?>

            <!-- Top Nav 2 Widget -->
            <?php if (is_active_sidebar('top-nav-2')) : ?>
              <?php dynamic_sidebar('top-nav-2'); ?>
            <?php endif; ?>

          </div>
        </div>

        <div class="header-actions d-flex align-items-center">

          <!-- Top Nav Widget -->
          <?php if (is_active_sidebar('top-nav')) : ?>
            <?php dynamic_sidebar('top-nav'); ?>
          <?php endif; ?>

          <?php
          if (class_exists('WooCommerce')) :
            get_template_part('template-parts/header/actions', 'woocommerce');
          else :
            get_template_part('template-parts/header/actions');
          endif;
          ?>

          <!-- Navbar Toggler -->
          <button class="<?= apply_filters('bootscore/class/header/button', 'btn btn-outline-light border-0', 'nav-toggler'); ?> <?= apply_filters('bootscore/class/header/navbar/toggler/breakpoint', 'd-lg-none'); ?> ms-1 ms-md-2 nav-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
            <i class="fa-solid fa-bars"></i><span class="visually-hidden-focusable">Menu</span>
          </button>

        </div><!-- .header-actions -->

      </div><!-- .container -->

    </nav><!-- .navbar -->

    <?php
    if (class_exists('WooCommerce')) :
      get_template_part('template-parts/header/collapse-search', 'woocommerce');
    else :
      get_template_part('template-parts/header/collapse-search');
    endif;
    ?>

    <!-- Offcanvas User and Cart -->
    <?php
    if (class_exists('WooCommerce')) :
      get_template_part('template-parts/header/offcanvas', 'woocommerce');
    endif;
    ?>

  </header><!-- #masthead -->
