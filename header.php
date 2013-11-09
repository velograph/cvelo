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

<body <?php body_class(); ?>>

  <section class="container">

    <header class="header">
      
      <div class="one-third column branding">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="/wp-content/themes/cvelo/images/c_velo_logo.png" /></a>
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

      </div><!-- .one-third .column .branding -->

      <div class="one-third column new_clients">

        <h2>New to C Velo?</h2> <a href="/how-to-get-started">Click here to get started</a>

      </div><!-- .one-third .column .new_clients -->

      <div class="one-third column sign_up">

        <h2>Returning Client?</h2> <a href="http://clients.mindbodyonline.com/ws.asp?studioid=18714&amp;stype=-7&amp;sView=week" target="_blank">Sign up</a>

      </div><!-- .one-third .column .sign_up -->

      <div class="clear"></div>

      <div class="header_border">&nbsp;</div>

      <nav id="site_navigation" class="twelve columns main_navigation" role="navigation">

        <h3 class="menu-toggle"><?php _e( 'Menu', 'blank' ); ?></h3>

        <div class="screen_reader_text skip_link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'blank' ); ?>"><?php _e( 'Skip to content', 'blank' ); ?></a></div>

        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav_menu' ) ); ?>

      </nav><!-- #site_navigation .main_navigation -->

      <div class="four columns social_media">
      
        <p>Connect with us<a href="https://www.facebook.com/pages/C-Velo-Performance-Fitness-Cycling-Studio/236611823028575" target="_blank"><img src="/wp-content/themes/cvelo/images/facebook.png" class="facebook_icon" /></a></p>

      </div>

    </header><!-- .header -->

    <div class="clear"></div>

    <section class="main">
