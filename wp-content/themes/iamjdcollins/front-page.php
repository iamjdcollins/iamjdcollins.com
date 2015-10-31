<?php
/*Use for the front page of the site.*/
?>
    <?php get_header(); ?>
    <!--<h2>Template: <?php get_template_directory_uri(); ?></h2>-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section id="intro">
      <pre><?php var_dump(the_post()); ?></pre>
    </section>
    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    <?php get_footer(); ?>