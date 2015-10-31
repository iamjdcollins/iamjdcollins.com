<?php
/*Use for the front page of the site.*/
?>
    <?php get_header(); ?>
    <!--<h2>Template: <?php get_template_directory_uri(); ?></h2>-->
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <section id="intro">
      <pre><?php var_dump($the_query-the_post()); ?></pre>
    </section>
    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    <?php get_footer(); ?>