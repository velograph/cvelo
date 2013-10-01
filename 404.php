<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Blank!
 */

get_header(); ?>

  <article id="post_0" class="post not_found">

    <header>

      <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'blank' ); ?></h1>

    </header>

    <div class="entry_content">

      <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'blank' ); ?></p>

      <?php get_search_form(); ?>

    </div><!-- .entry_content -->

  </article><!-- #post_0 .post .not_found -->

<?php get_footer(); ?>
