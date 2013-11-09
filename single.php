<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Blank!
 */

get_header(); ?>

<?php get_sidebar(); ?>

  <div class="twelve columns">
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'single' ); ?>

      <?php blank_content_nav( 'nav-below' ); ?>

      <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
          comments_template();
      ?>

    <?php endwhile; // end of the loop. ?>

  </div>

<?php get_footer(); ?>
