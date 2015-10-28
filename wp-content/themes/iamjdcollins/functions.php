<?php
/**
 * Proper way to enqueue scripts and styles
 */
function iamjdcollins_modernizr() {
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array(), '1.0.0', false );
}

add_action( 'wp_enqueue_scripts', 'iamjdcollins_modernizr' );