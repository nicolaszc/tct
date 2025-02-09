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
          <div class="coming-soon">
            <div class="content">
              <div class="banner">
                <p style="margin: 0;"><?php echo $bajada; ?></p>
                <?php 
                  the_content();               
                ?>
              </div>
              <small>© <?php echo $_SERVER['HTTP_HOST'] ?> - <a href="https://topclass.club" >Grupo TopclassClub 2025.</a></small> 
            </div>
          </div>
        </div>

      </main>

    </div>
  </div>

<?php
get_footer();