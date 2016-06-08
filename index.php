<?php 

get_header();

if ( have_posts() ): 
  while (have_posts()):
 
    the_post();

    echo '<article class="post">';
 
    echo '<h2><a href="';
    the_permalink();
    echo '">';
    the_title();
    echo '</a></h2>';

    the_content();
    echo '</article>';

  endwhile; 

else:

  echo '<p>Sorry, no posts matched your criteria</p>';

endif; 

get_footer(); 

?>
