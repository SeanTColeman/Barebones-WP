<?php get_header(); ?>

<h2><?php

  if (is_category()) {
    single_cat_title();
  } else if (is_tag()) {
    single_tag_title();
  } else if (is_author()) {
    the_post();
    echo "Author Archives: " . get_the_author();
    rewind_posts();
  } else {
    echo "Archive";
  }

?></h2>

<?php
while (have_posts()) {
  the_post();

  get_template_part('content', get_post_format());

 }
get_footer();
 ?>
