<?php
/*Used to declare the doctype and head tags that appear on all pages*/
$the_query = new WP_Query( $args );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title><?php wp_title('-', true, 'right'); bloginfo('name'); ?></title>
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
      <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
      <?php wp_head(); ?>
  </head>
  <body>
    <div id="page-wrapper">
      <div id="open-search"></div>
      <div id="open-menu"></div>
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu-mobile', 'menu_class' => 'show-for-small-only', 'container_class' => 'main-menu-mobile' ) ); ?>
      <?php get_search_form( true ); ?>
      <header id="top-header" class="clearfix back-gray-dark">
        <div class="small-4 medium-2 columns">
          <i id="logo" class="iamjdcollins-logo"></i>
        </div>
        <nav id="main-nav" class="small-8 medium-10 columns">
          <a class="open-search" href="#open-search"><i class="iamjdcollins-search"></i></a>
          <a class="close-search" href="#"><i class="iamjdcollins-close"></i></a>
          <a class="open-menu show-for-small-only" href="#open-menu"><i class="iamjdcollins-menu"></i></a>
          <a class="close-menu show-for-small-only" href="#"><i class="iamjdcollins-close"></i></a>
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'show-for-medium-up' ) ); ?>
          <?php get_search_form( true ); ?>

        </nav>
      </header>