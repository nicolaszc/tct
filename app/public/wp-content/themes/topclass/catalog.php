<?php

/**
 * Template Name: Catalog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

get_header();
$host=$_SERVER['HTTP_HOST'];
$bkg_color = get_field('body_bg_color');
if ( have_rows( 'background_gradient' ) ) : 
  while ( have_rows( 'background_gradient' ) ) : the_row();
    if(get_sub_field('use_gradient')):
      $use_gradient=get_sub_field('use_gradient');
      $color_1=get_sub_field('color_1');
      $color_2=get_sub_field('color_2');
      $color_3=get_sub_field('color_3');
      $color_4=get_sub_field('color_4');
    endif;
  endwhile;
endif;
$bkg_img = get_field('body_bg');
$bkg_size = get_field('body_bg_size');
$bkg_position = get_field('body_bg_pos');
$bajada = get_field('bajada');

?>

  <style>
    html{
      min-height:100vh;
      height: auto;
    }
    body{
      background: <?php echo $bkg_color ?>;
      <?php if($use_gradient): ?>
        background: linear-gradient(0deg, <?php echo $color_1 ?> 0%, <?php echo $color_2 ?> 40%, <?php echo $color_3 ?> 60%, <?php echo $color_4 ?> 100%); 
      <?php endif; ?>
      background-image: url(<?php echo $bkg_img ?>); 
      background-repeat: no-repeat;
      background-size: <?php echo $bkg_size ?>;
      background-position: <?php echo $bkg_position ?>;
      min-height:100vh;
    }
  </style>
  

  <div id="content" class="site-content">
    <div id="primary" class="content-area">

      <main id="main" class="site-main">

        <div class="entry-content">
          <div class="catalog min-vh-75">
            <div class="content">
  
                <p style="margin: 0;"><?php echo $bajada; ?></p>
                <?php 
                  the_content();               
                ?>
              
             
            </div>
          </div>
        </div>

      </main>

    </div>
  </div>

<?php
get_footer();