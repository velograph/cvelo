<?php
/**
 * @package Blank!
 */
?>

<article id="post_<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry_header">

    <h1 class="entry_title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

    <?php if ( 'post' == get_post_type() ) : ?>

    <div class="entry_meta">

      <?php blank_posted_on(); ?>

    </div><!-- .entry_meta -->

    <?php endif; ?>

  </header><!-- .entry_header -->

  <?php if ( is_search() ) : // Only display Excerpts for Search ?>

  <div class="entry_summary">

    <?php the_excerpt(); ?>

  </div><!-- .entry_summary -->

  <?php else : ?>

  <div class="entry_content">

    <?php the_content( __( 'Continue reading <span class="meta_nav">&rarr;</span>', 'blank' ) ); ?>

    <?php
      wp_link_pages( array(
        'before' => '<div class="page_links">' . __( 'Pages:', 'blank' ),
        'after'  => '</div>',
      ) );
    ?>

  </div><!-- .entry_content -->

  <?php endif; ?>

  <footer class="entry_meta">
    
    <p>This entry was posted in <?php echo get_the_category_list(', '); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time> by <?php the_author_posts_link(); ?></p>

    <?php edit_post_link( __( 'Edit', 'blank' ), '<span class="sep"> | </span><span class="edit_link">', '</span>' ); ?>

  </footer><!-- .entry-meta -->

</article><!-- #post_## -->
