<form role="search" id='searchform' action="<?php echo home_url( '/' ); ?>" method="get">
  <div><label class="screen-reader-text" for="s">Search for:</label>
    <input type="text" name="s" value="" id="s" placeholder="<?php the_search_query(); ?>">
    <input type="submit" id="searchsubmit" name="searchsubmit" value="Search">
  </div>
</form>
