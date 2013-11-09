<?php
/**
 * The main template file.
 *
 * @package Blank!
 */

get_header(); ?>

<?php get_sidebar(); ?>

  <div class="twelve columns content">
    <?php if ( have_posts() ) : ?>

      <?php /* Start the Loop */ ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          /* Include the Post-Format-specific template for the content.
           * If you want to overload this in a child theme then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          get_template_part( 'content', get_post_format() );
        ?>

      <?php endwhile; ?>

      <?php blank_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( '404', 'index' ); ?>

    <?php endif; ?>

  </div>

<?php get_footer(); ?>
