<?php
/*
Theme Name: Qobo Generic Wordpress Theme
Theme URI: 
Description: A generic Wordpress theme made using Twitter Bootstrap 3 
Author: Andreas Demetriou
Author URI: http://facebook.com/androsland
Version: 1.0
Tags: responsive, white, bootstrap, lightbox, flexslider, jquery, slim scroll, font awesome
License: GPL2

*/

get_header(); ?>

<div id="main-content" class="main-content">
	
	<div id="primary" class="content-area">
		<div id="content" class="site-content" >
		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content' );

				endwhile;

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
