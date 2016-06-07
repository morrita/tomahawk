<?php 

get_header();


if ( have_posts() ): 
  while ( have_posts() ): 
    the_post();
 
    echo "<h2>";
    the_title();
    echo "</h2>";
   
    the_content();

  endwhile; 
else:
  echo '<p>Sorry, no posts matched your criteria</p>';
endif; 

get_footer(); 

?>
