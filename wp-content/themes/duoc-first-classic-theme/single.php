<?php
echo 11;
// Start the Loop.
while ( have_posts() ) : the_post();
the_title();

    the_content();
    previous_post_link();
    next_post_link();
endwhile;
?>