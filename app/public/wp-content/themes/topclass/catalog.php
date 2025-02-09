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
  <!-- Banners -->
<?php if ( have_rows( 'banners' ) ) : 
    $count = count(get_field('banners'));?>
      <section id="main-banner">
       <!--  <div class="test owl-dots"></div> -->
        <div class="owl-carousel owl-main-banner">
          <?php 
          while ( have_rows( 'banners' ) ) : the_row(); ?>
            <div class="item" data-dot="<span>0<?php echo $count ?> /</span>">
              <img src="<?php echo esc_url( get_sub_field( 'imagen_mobile' )['url'] ); ?>" class="position-absolute d-block d-md-none"/>
              <img src="<?php echo esc_url( get_sub_field( 'imagen_desktop' )['url'] ); ?>" class="position-absolute d-none d-md-block"/>
              <div class="caption container d-none d-md-block">
                <div class="row px-5 ">
                  <div class="<?php if(get_sub_field('alineacion_texto')=="Izquierda"){ echo 'col-md-5';}?><?php if(get_sub_field('alineacion_texto')=="Centro"){ echo 'col-md-6 offset-md-3 text-center';}?><?php if(get_sub_field('alineacion_texto')=="Derecha"){ echo 'col-md-5 offset-md-7 text-end';}?>" style="color:<?php echo get_sub_field('color_texto'); ?>">
                    <?php if (!empty(get_sub_field('titulo'))) { ?>
                      <h1><?php echo get_sub_field('titulo') ?></h1>
                    <?php } ?>
                    <?php if (!empty(get_sub_field('bajada'))) { ?>
                      <p class=""><?php echo get_sub_field('bajada') ?></p>
                    <?php } ?>
                    <?php if (!empty(get_sub_field('link'))) { ?>
                      <a href="<?php echo get_sub_field('link')['url'] ?>" class="btn btn-outline-primary rounded-pill px-5 text-uppercase fs-1" style="color:<?php echo get_sub_field('color_texto'); ?>;border-color:<?php echo get_sub_field('color_texto'); ?>!important"><?php echo get_sub_field('link')['title'] ?></a>
                    <?php } ?>
                  </div>
                </div> 
              </div> 
              <div class="caption container d-block d-md-none position-relative z-9">
                <div class="row px-5 ">
                  <div class="col-md-6 offset-md-3 text-center" style="color:<?php echo get_sub_field('color_texto'); ?>">
                    <?php if (!empty(get_sub_field('titulo'))) { ?>
                      <h1><?php echo get_sub_field('titulo') ?></h1>
                    <?php } ?>
                    <?php if (!empty(get_sub_field('bajada'))) { ?>
                      <p class=""><?php echo get_sub_field('bajada') ?></p>
                    <?php } ?>
                    <?php if (!empty(get_sub_field('link'))) { ?>
                      <a href="<?php echo get_sub_field('link')['url'] ?>" class="btn btn-outline-primary rounded-pill px-5 text-uppercase fs-1" style="color:<?php echo get_sub_field('color_texto'); ?>;border-color:<?php echo get_sub_field('color_texto'); ?>!important"><?php echo get_sub_field('link')['title'] ?></a>
                    <?php } ?>
                  </div>
                </div> 
              </div> 
              <?php if(get_sub_field('animacion')=="Burbujas"){ ?>
                <div id="background-wrap">
                  <div class="bubble x1"></div>
                  <div class="bubble x2"></div>
                  <div class="bubble x3"></div>
                  <div class="bubble x4"></div>
                  <div class="bubble x5"></div>
                  <div class="bubble x6"></div>
                  <div class="bubble x7"></div>
                  <div class="bubble x8"></div>
                  <div class="bubble x9"></div>
                  <div class="bubble x10"></div>
                </div>
              <?php } ?>
            </div>        
          <?php 
          $count--;   
          endwhile; ?>
          
        </div>
        <a href="#about" class="mouse bounce"><i class="fa-solid fa-computer-mouse"></i></a>
      </section>            
    <?php endif; ?>
  <!-- /Banners -->

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