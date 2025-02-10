<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * @version 6.0.4
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>


<footer id="footer" class="bootscore-footer">

  <?php if (is_active_sidebar('footer-top')) : ?>
    <div class="<?= apply_filters('bootscore/class/footer/top', 'py-5'); ?> bootscore-footer-top">
      <div class="<?= apply_filters('bootscore/class/container', 'container', 'footer-top'); ?>">  
        <?php dynamic_sidebar('footer-top'); ?>
      </div>
    </div>
  <?php endif; ?>
  
  <div class="<?= apply_filters('bootscore/class/footer/columns', 'pt-5 pb-4'); ?> bootscore-footer-columns">
    <div class="<?= apply_filters('bootscore/class/container', 'container', 'footer-columns'); ?>">  

      <div class="row">

        <div class="<?= apply_filters('bootscore/class/footer/col', 'col-6 col-lg-3', 'footer-1'); ?>">
          <?php if (is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
          <?php endif; ?>
        </div>

        <div class="<?= apply_filters('bootscore/class/footer/col', 'col-6 col-lg-3', 'footer-2'); ?>">
          <?php if (is_active_sidebar('footer-2')) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
          <?php endif; ?>
        </div>
        
        <div class="<?= apply_filters('bootscore/class/footer/col', 'col-6 col-lg-3', 'footer-3'); ?>">
          <?php if (is_active_sidebar('footer-3')) : ?>
            <?php dynamic_sidebar('footer-3'); ?>
          <?php endif; ?>
        </div>
        
        <div class="<?= apply_filters('bootscore/class/footer/col', 'col-6 col-lg-3', 'footer-4'); ?>">
          <?php if (is_active_sidebar('footer-4')) : ?>
            <?php dynamic_sidebar('footer-4'); ?>
          <?php endif; ?>
        </div>

      </div>

      <!-- Bootstrap 5 Nav Walker Footer Menu -->
      <?php get_template_part('template-parts/footer/footer-menu'); ?>

    </div>
  </div>

  <div class="<?= apply_filters('bootscore/class/footer/info', 'text-body-secondary py-2 text-center'); ?> bootscore-footer-info">
    <div class="<?= apply_filters('bootscore/class/container', 'container', 'footer-info'); ?>">
      <?php if (is_active_sidebar('footer-info')) : ?>
        <?php dynamic_sidebar('footer-info'); ?>
      <?php endif; ?>
      <div class="small bootscore-copyright text-light"><span class="cr-symbol">&copy;</span>&nbsp;<?= date('Y'); ?> <?php bloginfo('name'); ?> - <?php echo $_SERVER['HTTP_HOST'] ?> - <a href="https://topclass.club" class="text-light">Grupo TopclassClub 2025.</a></div>
    </div>
  </div>
</footer>

<!-- To top button -->
<a href="#" class="<?= apply_filters('bootscore/class/footer/to_top_button', 'btn btn-primary shadow'); ?> position-fixed zi-1000 top-button" aria-label="<?php esc_html_e('Return to top', 'bootscore' ); ?>"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
