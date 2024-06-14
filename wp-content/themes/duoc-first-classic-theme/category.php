<p>Category: <?php single_cat_title(); ?></p>
<?php
				// Start the Loop.
				while ( have_posts() ) :
					the_post();

					the_content();

					endwhile;
					// Previous/next page navigation.

posts_nav_link();

next_posts_link();
previous_posts_link();
the_posts_pagination()
				?>