<?php get_header();

while (have_posts()) {
  the_post();

if (get_post_format() == false) {
    get_template_part('content', 'single');
  } else {
    get_template_part('content', get_post_format());
  }
}

get_footer();
 ?>
