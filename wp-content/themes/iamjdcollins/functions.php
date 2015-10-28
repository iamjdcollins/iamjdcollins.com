<?php
/**
 * Proper way to enqueue scripts and styles
 */
function iamjdcollins_foundation5() {
  wp_enqueue_style('f5normalizemincss', get_template_directory_uri() . '/css/normalize.min.js', array(), '3.0.3','all');
  wp_enqueue_style('f5foundationmincss', get_template_directory_uri() . '/css/foundation.min.js', array(), '5.5.3','all');
  wp_enqueue_script( 'f5modernizrminjs', get_template_directory_uri() . '/js/modernizr.min.js', array(), '2.8.3', false );
  wp_enqueue_script( 'f5jqueryminjs', get_template_directory_uri() . '/js/jquery.min.js', array(), '2.1.4', true );
  wp_enqueue_script( 'f5foundationminjs', get_template_directory_uri() . '/js/foundation.min.js', array(), '5.5.3', true );
  wp_enqueue_script( 'f5foundationminappjs', get_template_directory_uri() . '/js/foundation.app.min.js', array(), '5.5.3', true );
}

add_action( 'wp_enqueue_scripts', 'iamjdcollins_foundation5' );