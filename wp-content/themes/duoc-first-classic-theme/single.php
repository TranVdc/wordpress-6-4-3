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
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
?>