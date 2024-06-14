<?php
if ( has_post_format( 'gallery' ) ) {
    echo 'This is the gallery format.';
}
// Start the Loop.
while ( have_posts() ) : the_post();
the_title();

    the_content();
    previous_post_link();
    next_post_link();
endwhile;
?>