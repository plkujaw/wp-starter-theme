<?php

/**
 * ------> index.php
 */

get_header(); ?>

  <section class="section">
    <div class="container">
      <div class="content">
        <?php if ( have_posts() ): ?>
          <?php while ( have_posts() ): the_post(); ?>
            <?php echo get_template_part( 'loop' ); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php
      $prev_posts = get_previous_posts_link( __( '< Older entries', 'wordpress' ) );
      $next_posts = get_next_posts_link( __( 'Newer entries >', 'wordpress' ) );
      if ( $prev_posts || $next_posts ) {
        $output = '<div class="pagination prev-next">'
                  . $prev_posts
                  . $next_posts
                . '</div>';
        echo $output;
      }
      ?>
    </div>
  </section>
<?php get_footer();