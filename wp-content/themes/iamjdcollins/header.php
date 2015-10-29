<?php
/*Used to declare the doctype and head tags that appear on all pages*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title><?php wp_title(); ?></title>
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
      <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
      <?php wp_head(); ?>
  </head>
  <body>
    <div id="page-wrapper">
      <header class="clearfix back-gray-dark">
        <div class="large-3 columns">
          <img id="logo" src="http://www.jordancollins.me/wp-content/themes/jordancollinswp/img/simplified-green.png">
        </div>
        <nav class="large=9">
          <ul>
            <li><a href="http://www.jordancollins.me/">home</a></li>
            <li><a href="http://www.jordancollins.me/?page_id=6">blog</a></li>
            <li><a href="http://www.jordancollins.me/?page_id=13">resume</a></li>
            <li><a href="http://www.jordancollins.me/?page_id=13">resume</a></li>
          </ul>

        </nav>
      </header>