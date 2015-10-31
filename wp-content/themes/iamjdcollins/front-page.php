<?php
/*Use for the front page of the site.*/
?>
    <?php get_header(); ?>
    <!--<h2>Template: <?php get_template_directory_uri(); ?></h2>-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section id="intro" style="background: transparent url(<?php if(get_field('background_image')){ echo '"' . get_field('background_image') . '"';} ?>) no-repeat scroll 0px 0px / cover">
    </section>
    <?php the_content(); ?>
    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    <?php get_footer(); ?>