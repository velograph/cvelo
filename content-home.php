<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Blank!
 */
?>

<section class="eleven columns content">

  <?php if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( 'home-page' ); ?>

</section>

<aside class="five columns">

  <article id="post_<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php the_content(); ?>

    <?php edit_post_link( __( 'Edit', 'blank' ), '<footer class="entry-meta"><span class="edit_link">', '</span></footer>' ); ?>

  </article><!-- #post_## -->

</aside>
