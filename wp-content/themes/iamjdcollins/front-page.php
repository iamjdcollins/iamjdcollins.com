<?php
/*Use for the front page of the site.*/
?>
    <?php get_header(); ?>
    <!--<h2>Template: <?php get_template_directory_uri(); ?></h2>-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if ( get_field('page_intro') == 'Yes' ): ?>
    <section id="intro" style="background: transparent url(<?php if(get_field('background_image')){ echo get_field('background_image');} ?>) no-repeat scroll 0px 0px / cover">
      <?php if ( get_field('intro_text') ): ?>
      <div class="row">
        <div id="intro-content" class="small-11 medium-8 large-5 small-centered columns">
          <p><?php echo get_field('intro_text'); ?></p>
        </div>
      </div>
      <?php endif; ?>
    </section>
    <?php endif; ?>
    <main class="main wrapper">
      <div class="row page-body">
        <div class="small-12 large-8 columns">
          <?php the_content(); ?>
        </div>
      </div>
    </main>
    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    <?php get_footer(); ?>