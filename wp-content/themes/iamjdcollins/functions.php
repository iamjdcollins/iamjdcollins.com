<?php
/**
 * Proper way to enqueue scripts and styles
 */
function iamjdcollins_foundation5() {
  wp_enqueue_style('f5normalizemincss', get_template_directory_uri() . '/css/normalize.min.css', array(), '3.0.3','all');
  wp_enqueue_style('f5foundationmincss', get_template_directory_uri() . '/css/foundation.min.css', array(), '5.5.3','all');
  wp_enqueue_style('f5foundationmincss', get_template_directory_uri() . '/css/styles.min.css', array(), '0.0.1','all');
  wp_enqueue_script( 'f5modernizrminjs', get_template_directory_uri() . '/js/modernizr.min.js', array(), '2.8.3', false );
  wp_enqueue_script( 'f5jqueryminjs', get_template_directory_uri() . '/js/jquery.min.js', array(), '2.1.4', true );
  wp_enqueue_script( 'f5foundationminjs', get_template_directory_uri() . '/js/foundation.min.js', array(), '5.5.3', true );
  wp_enqueue_script( 'f5foundationminappjs', get_template_directory_uri() . '/js/foundation.app.min.js', array(), '5.5.3', true );
}

function iamjdcollins_fontastic(){
  wp_enqueue_style('fontastic', get_template_directory_uri() . '/css/fontastic.min.css', array(), '0.0.1','all');
}

function iamjdcollins_personalstyle() {
  wp_enqueue_style('personalstylesmincss', get_template_directory_uri() . '/css/styles.min.css', array(), '0.0.1','all');
}

function iamjdcollins_main_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}

add_theme_support( 'html5', array( 'search-form' ) );

add_action( 'init', 'iamjdcollins_main_menu' );

add_action( 'wp_enqueue_scripts', 'iamjdcollins_foundation5' );
add_action( 'wp_enqueue_scripts', 'iamjdcollins_fontastic' );
add_action( 'wp_enqueue_scripts', 'iamjdcollins_personalstyle' );