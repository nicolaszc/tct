<!-- Banners -->
<?php if ( have_rows( 'banners' ) ) : 
    $count = count(get_field('banners'));?>
      <section id="main-banner" class="vh-75 overflow-hidden">
       <!--  <div class="test owl-dots"></div> -->
        <div class="owl-carousel owl-main-banner">
          <?php 
          while ( have_rows( 'banners' ) ) : the_row(); ?>
            <div class="item position-relative vh-75 overflow-hidden" data-dot="<span>0<?php echo $count ?> /</span>">
              <img src="<?php echo esc_url( get_sub_field( 'imagen_mobile' )['url'] ); ?>" class="position-absolute d-block d-md-none w-100"/>
              <img src="<?php echo esc_url( get_sub_field( 'imagen_desktop' )['url'] ); ?>" class="position-absolute d-none d-md-block w-100"/>
              <div class="caption container d-none d-md-block position-relative z-9">
                <div class="row px-5 ">
                  <div class="<?php if(get_sub_field('alineacion_texto')=="izquierda"){ echo 'col-md-5';}?><?php if(get_sub_field('alineacion_texto')=="centro"){ echo 'col-md-6 offset-md-3 text-center';}?><?php if(get_sub_field('alineacion_texto')=="derecha"){ echo 'col-md-5 offset-md-7 text-end';}?>" style="color:<?php echo get_sub_field('color_texto'); ?>">
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
    <?php endif;   
    ?>
  <!-- /Banners -->