<?php get_header(); ?>

  <h2>Search results for: <?php the_search_query(); ?></h2>

<?php
while (have_posts()) {
  the_post();

  get_template_part('content', get_post_format());

 }
get_footer();
 ?>
