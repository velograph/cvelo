<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Blank!
 */

get_header(); ?>

    <?php if ( have_posts() ) : ?>

      <header class="page_header">

        <h1 class="page_title"><?php printf( __( 'Search Results for: %s', 'blank' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

      </header><!-- .page_header -->

      <?php /* Start the Loop */ ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'search' ); ?>

      <?php endwhile; ?>

      <?php blank_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( '404', 'search' ); ?>

    <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
