<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class('container'); ?>>

  <header class="header">

      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

      <h2><?php bloginfo( 'description' ); ?></h2>

    <nav id="site_navigation" class="main_navigation" role="navigation">

      <h3 class="menu-toggle"><?php _e( 'Menu', 'blank' ); ?></h3>

      <div class="screen_reader_text skip_link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'blank' ); ?>"><?php _e( 'Skip to content', 'blank' ); ?></a></div>

      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav_menu' ) ); ?>

    </nav><!-- #site_navigation .main_navigation -->

  </header><!-- .header -->

  <section class="main">
