<?php get_header(); ?>

<main class="site-content">
  <div class="main-column">
    <?php while (have_posts()) {
      the_post();

      get_template_part('content', get_post_format());

    } ?>
  </div>

  <?php get_sidebar(); ?>

</main>

 <?php get_footer(); ?>
