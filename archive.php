<?php
/**
 * The template for displaying Archive pages.
 *
 * @package Blank!
 */

get_header(); ?>

  <section>

    <?php if ( have_posts() ) : ?>

      <header>

        <h1 class="entry_title"><?php the_title(); ?></h1>

      </header>

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

      <?php get_template_part( '404', 'archive' ); ?>

    <?php endif; ?>

  </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
