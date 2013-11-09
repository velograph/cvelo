<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Blank!
 */
?>
  <?php do_action( 'before_sidebar' ); ?>

  <aside class="four columns sidebar">
<!-- Load up some default widgets if nothing is added in the Dashboard  -->
  <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

    <div class="widget widget_search">

      <?php get_search_form(); ?>

    </div>

    <div class="widget">

      <h1 class="widget_title"><?php _e( 'Archives', 'blank' ); ?></h1>

      <ul>
        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
      </ul>

    </div>

    <div class="widget">

      <h1 class="widget_title"><?php _e( 'Meta', 'blank' ); ?></h1>

      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
      </ul>

    </div>

  <?php endif; // end sidebar widget area ?>

  </aside><!-- .sidebar -->
