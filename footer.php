<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the .main div and all content after
 *
 * @package Blank!
 */
?>

  </section><!-- .main -->

  <div class="clear"></div>

  <footer role="colophon">

    <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'blank' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'blank' ), 'WordPress' ); ?></a>

  </footer><!-- .colophon -->

<?php wp_footer(); ?>

</body>
</html>
