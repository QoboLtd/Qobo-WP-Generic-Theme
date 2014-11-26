<?php
/**
 * The Template for displaying all single posts
 *
 * @package Qobo Generic Wordpress Theme
 *  
 */

get_header(); ?>

	<div  class="content-area">
		<div  class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					get_template_part( 'content', 'post');

				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
