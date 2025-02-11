<!-- Banners -->
  <!-- Overlay -->
  <?php 
  if ( have_rows( 'overlay' ) ) : 
    while ( have_rows( 'overlay' ) ) : the_row();
      if(get_sub_field('use_overlay')):     
        $overlay_color_1 = get_sub_field('overlay_color_1');
        $overlay_color_2 = get_sub_field('overlay_color_2');
        $overlay_width = get_sub_field('overlay_width');
        $overlay_height = get_sub_field('overlay_height');
        $overlay_position_x = get_sub_field('overlay_position_x');
        $overlay_position_y = get_sub_field('overlay_position_y');
        $blend_mode = get_sub_field('blend_mode');
      ?>
      <style>
        .overlay{
          width: <?php echo $overlay_width ?>;
          height: <?php echo $overlay_height ?>;
          top: <?php echo $overlay_position_y ?>;
          left: <?php echo $overlay_position_x ?>;
          background: -moz-linear-gradient(0deg, <?php echo $overlay_color_1 ?> 0%, <?php echo $overlay_color_2 ?> 80%);
          background: -webkit-linear-gradient(0deg, <?php echo $overlay_color_1 ?> 0%, <?php echo $overlay_color_2 ?> 80%);
          background: linear-gradient(0deg, <?php echo $overlay_color_1 ?> 0%, <?php echo $overlay_color_2 ?> 80%);
          filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $overlay_color_1 ?>', endColorstr='<?php echo $color_overlay_2 ?>', GradientType=1);
        }
        .overlay.z-6{
          mix-blend-mode: <?php echo $blend_mode ?>;
        }
      </style>
  <?php
      endif; 
    endwhile;
  endif; ?>

  <!-- Main Banner Carousel-->
  <?php if ( have_rows( 'banners' ) ) : 
    $count = count(get_field('banners')); ?>

    <section id="main-banner" class="vh-100 overflow-hidden">

      <div class="owl-carousel owl-main-banner">
        <?php 
        while ( have_rows( 'banners' ) ) : the_row(); ?>

          <div class="item position-relative vh-100 overflow-hidden" data-dot="<span>0<?php echo $count ?> </span>">
            
            <img src="<?php echo esc_url( get_sub_field( 'imagen_mobile' )['url'] ); ?>" class="position-absolute d-block d-md-none w-100"/>
            <img src="<?php echo esc_url( get_sub_field( 'imagen_desktop' )['url'] ); ?>" class="position-absolute d-none d-md-block w-100"/>
            <div class="overlay position-absolute z-6"></div>
            <div class="overlay position-absolute z-8"></div>

            <div class="caption container d-none d-md-block position-relative z-9">
              <div class="row px-5 ">
                <div class="<?php if(get_sub_field('alineacion_texto')=="izquierda"){ echo 'col-md-5';}?><?php if(get_sub_field('alineacion_texto')=="centro"){ echo 'col-md-6 offset-md-3 text-center';}?><?php if(get_sub_field('alineacion_texto')=="derecha"){ echo 'col-md-5 offset-md-7 text-end';}?>" style="color:<?php echo get_sub_field('color_texto'); ?>">
                <?php if (!empty(get_field('logo'))) { ?><img src="<?php echo get_field('logo'); ?>" alt="topclass" class="banner-logo" /><?php } ?>  
                <?php if (!empty(get_sub_field('titulo'))) { ?>
                    <h1><?php echo get_sub_field('titulo') ?></h1>
                  <?php } ?>
                  <?php if (!empty(get_sub_field('bajada'))) { ?>
                    <p class=""><?php echo get_sub_field('bajada') ?></p>
                  <?php } ?>
                  <?php if (!empty(get_sub_field('link'))) { ?>
                    <a href="<?php echo get_sub_field('link')['url'] ?>" class="btn btn-outline-primary rounded-pill px-5 text-uppercase fs-1 shadow-sm" style="color: <?php echo get_sub_field('button_text_color'); ?>;background-color: <?php echo get_sub_field('button_color'); ?>;border-color:<?php echo get_sub_field('button_border_color'); ?>;"><?php echo get_sub_field('link')['title'] ?></a>
                  <?php } ?>
                </div>
              </div> 
            </div> 

            <div class="caption container d-block d-md-none position-relative z-9">
              <div class="row px-5 ">
                <div class="col-md-6 offset-md-3 text-center" style="color:<?php echo get_sub_field('color_texto'); ?>">
                <?php if (!empty(get_field('logo'))) { ?><img src="<?php echo get_field('logo'); ?>" alt="topclass" class="banner-logo"/><?php } ?>   
                <?php if (!empty(get_sub_field('titulo'))) { ?>
                    <h1><?php echo get_sub_field('titulo') ?></h1>
                  <?php } ?>
                  <?php if (!empty(get_sub_field('bajada'))) { ?>
                    <p class=""><?php echo get_sub_field('bajada') ?></p>
                  <?php } ?>
                  <?php if (!empty(get_sub_field('link'))) { ?>
                    <?php if(get_sub_field('shadow')=='small'){
                      $shadow = 'shadow-sm';
                    }if (get_sub_field('shadow')=='large') {
                      $shadow = 'shadow-lg';
                    } else {
                      $shadow = 'shadow';
                    }
                    ?>
                    <a href="<?php echo get_sub_field('link')['url'] ?>" class="btn btn-outline-primary rounded-pill px-5 text-uppercase fs-1 <?php echo $shadow; ?>" style="color: <?php echo get_sub_field('button_text_color'); ?>;background-color: <?php echo get_sub_field('button_color'); ?>;border-color:<?php echo get_sub_field('button_border_color'); ?>;" ><?php echo get_sub_field('link')['title'] ?></a>
                  <?php } ?>
                </div>
              </div> 
            </div> 

            <div id="background-wrap z-7">
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
          </div>

        <?php 
        $count--;   
        endwhile; ?> 

      </div>
      <a href="#about" class="mouse bounce"><i class="fa-solid fa-computer-mouse"></i></a>
    </section>            
  <?php endif; ?>
 <!-- /Banners -->