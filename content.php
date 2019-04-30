<article class="post <?php if (has_post_thumbnail()) { ?>has-thumbnail <?php } if (is_front_page()) { ?>front-post<?php } ?> ">

  <div class="post-thumbnail">
    <a href="<?php the_permalink(); ?>"><?php if (is_front_page()) { the_post_thumbnail('square-thumbnail'); } else { the_post_thumbnail('small-thumbnail'); } ?></a>
  </div>

  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <p class="post-info"><?php the_time('F jS, Y ');?>  | by         <a><?php the_author_posts_link(); ?></a> | Posted in <?php the_category(', ','' ); ?></p>


  <?php if( is_search() OR is_archive() OR is_front_page() ) { ?>
    <p>
    <?php echo get_the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
    </p>
  <?php } else {
    if ($post->post_excerpt) { ?>
      <p>
      <?php echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
      </p>
    <?php } else {
      the_content();
    }
  } ?>


</article>
