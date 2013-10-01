<?php
/**
 * The template for displaying search forms in Blank!
 *
 * @package Blank!
 */
?>

  <form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">

    <label for="s" class="screen_reader_text"><?php _ex( 'Search', 'assistive text', 'blank' ); ?></label>

    <input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'blank' ); ?>" />

    <input type="submit" class="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'blank' ); ?>" />

  </form>
