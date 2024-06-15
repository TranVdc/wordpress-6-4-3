<?php
//get_sidebar('primary');
get_sidebar('1');
the_post_thumbnail( array(50,50) );
echo do_shortcode('[gallery ids = "28, 20"]' );