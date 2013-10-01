<?php
/**
 * The template used for displaying single page content in single.php
 *
 * @package Blank!
 */
?>

<article id="post_<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">

    <h1 class="entry_title"><?php the_title(); ?></h1>

    <div class="entry_meta">

      <?php blank_posted_on(); ?>

    </div><!-- .entry_meta -->

  </header><!-- .entry_header -->

  <div class="entry_content">

    <?php the_content(); ?>

    <?php
      wp_link_pages( array(
        'before' => '<div class="page_links">' . __( 'Pages:', 'blank' ),
        'after'  => '</div>',
      ) );
    ?>

  </div><!-- .entry_content -->

  <footer class="entry_meta">

    <p>This entry was posted in <?php echo get_the_category_list(', '); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time> by <?php the_author_posts_link(); ?></p>

    <?php edit_post_link( __( 'Edit', 'blank' ), '<span class="edit_link">', '</span>' ); ?>

  </footer><!-- .entry_meta -->

</article><!-- #post_## -->
