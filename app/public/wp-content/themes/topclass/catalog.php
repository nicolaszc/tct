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
?>
  

  <div id="wrapper" class="site-wrapper sticky-top z-0">

      <main id="main" class="site-main">

          <div class="catalog min-vh-100">
            <div class="content">
  
                <p style="margin: 0;"><?php echo $bajada; ?></p>
                <?php 
                  the_content();               
                ?>
                         
            </div>
          </div>

      </main>

  </div>

<?php
get_footer();