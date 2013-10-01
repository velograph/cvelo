<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Blank!
 */
?>

<article id="post_<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry_header">

    <h1 class="entry_title"><?php the_title(); ?></h1>

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

  <?php edit_post_link( __( 'Edit', 'blank' ), '<footer class="entry-meta"><span class="edit_link">', '</span></footer>' ); ?>

</article><!-- #post_## -->
