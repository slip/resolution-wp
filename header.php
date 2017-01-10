<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ResolutionAthens
 */

?>
<!--
                  handmade by
                  resolution
    .-. .-. .-. .-. .   . . .-. .-. .-. . .
    |(  |-  `-. | | |   | |  |   |  | | |\|
    ' ' `-' `-' `-' `-' `-'  '  `-' `-' ' `
              resolution.agency
-->

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'resolutionathens' ); ?></a>
  <header id="masthead" class="site-header" role="banner">
    <nav id="site-navigation" class="main-navigation" role="navigation">
      <button class="menu-toggle closed" aria-controls="primary-menu" aria-expanded="false">
        <!-- <img src="http://www.danielfell.com/images/menu.svg" alt=""><div><?php esc_html_e( 'Menu', 'resolutionathens' ); ?></div> -->
      </button>
      <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'primary-menu-ul closed' , 'container' => '' ) ); ?>
    </nav><!-- #site-navigation -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1 class="resolution-logo">Resolution Athens</h1></a>
  </header><!-- #masthead -->
  <div class="social-header-container">
    <!-- <header id="social-header"> -->
      <section class="services-and-location">
        <span class="res-blue">Strategy / Branding / Design</span> > Athens, Georgia
      </section>
      <section class="social-icons">
        <a href="mailto:hello@resolutionathens.com" class="email"><img src="<?php echo get_template_directory_uri(); ?>/img/email.svg" alt="Email Us" class="social-icon"></a>
        <a href="https://www.facebook.com/resolutionathens/" class="facebook"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="Follow Us on Facebook" class="social-icon"></a>
        <a href="https://twitter.com/ResolutionATH" class="twitter"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="Follow Us on Twitter" class="social-icon"></a>
        <a href="instagram.com/resolutionathens" class="instagram"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="Follow Us on Instagram" class="social-icon"></a>
      </section>
    <!-- </header> -->
  </div>
  <hr>
  <div id="content" class="site-content">
