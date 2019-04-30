<article class="post">
  <h2><?php the_title(); ?></h2>

  <p class="post-info"><?php the_time('F jS, Y ');?>  | by         <a><?php the_author_posts_link(); ?></a> | Posted in <?php the_category(', ','' ); ?></p>

  <?php the_post_thumbnail('banner-image'); ?>

  <?php the_content(); ?>
</article>
