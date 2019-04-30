<?php get_header(); ?>

  <main class="front-content">
    <?php  while (have_posts()) { the_post();
      the_content(); } ?>

      <div class="home-columns">
        <div class="one-half">
          <?php
          // Category post loop begins here
          $opinionPosts = new WP_Query('cat=5&posts_per_page=3');

            while ($opinionPosts->have_posts()) { $opinionPosts->the_post();
              get_template_part('content', get_post_format());
             }
              wp_reset_postdata(); ?>

              <span class="view-all"><a href="<?php echo get_category_link(7); ?>" class="btn-a">View all Opinion Posts</a></span>
        </div>

        <div class="one-half">
          <?php
          // Category post loop begins here
          $opinionPosts = new WP_Query('cat=1&posts_per_page=2');

            while ($opinionPosts->have_posts()) { $opinionPosts->the_post();
              get_template_part('content', get_post_format());
                    }
              wp_reset_postdata(); ?>

              <span class="view-all"><a href="<?php echo get_category_link(7); ?>" class="btn-a">View all Opinion Posts</a></span>
        </div>
      </div>
  </main>

<?php get_footer(); ?>
