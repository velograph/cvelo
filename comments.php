<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to blank_comment() which is
 * located in the inc/template-tags.php file.
 *
 * @package Blank!
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
  return;
?>

  <div id="comments" class="comments_area">

  <?php // You can start editing here -- including this comment! ?>

  <?php if ( have_comments() ) : ?>

    <h2>

      <?php
        printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'blank' ),
          number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
      ?>

    </h2>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>

    <nav id="comment_nav_above" class="navigation_comment" role="navigation">

      <h1 class="screen_reader_text"><?php _e( 'Comment navigation', 'blank' ); ?></h1>

      <div class="nav_previous"><?php previous_comments_link( __( '&larr; Older Comments', 'blank' ) ); ?></div>

      <div class="nav_next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'blank' ) ); ?></div>

    </nav>

    <?php endif; // check for comment navigation ?>

    <ol class="comment_list">

      <?php
        /* Loop through and list the comments. Tell wp_list_comments()
         * to use blank_comment() to format the comments.
         * If you want to overload this in a child theme then you can
         * define blank_comment() and that will be used instead.
         * See blank_comment() in inc/template-tags.php for more.
         */
        wp_list_comments( array( 'callback' => 'blank_comment' ) );
      ?>

    </ol><!-- .comment_list -->

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>

    <nav id="comment_nav_below" class="navigation_comment" role="navigation">

      <h1 class="screen_reader_text"><?php _e( 'Comment navigation', 'blank' ); ?></h1>

      <div class="nav_previous"><?php previous_comments_link( __( '&larr; Older Comments', 'blank' ) ); ?></div>

      <div class="nav_next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'blank' ) ); ?></div>

    </nav><!-- #comment_nav_below -->

    <?php endif; // check for comment navigation ?>

  <?php endif; // have_comments() ?>

  <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : 
  ?>

    <p class="no-comments"><?php _e( 'Comments are closed.', 'blank' ); ?></p>

  <?php endif; ?>

  <?php comment_form(); ?>

</div><!-- #comments .comments_area -->
