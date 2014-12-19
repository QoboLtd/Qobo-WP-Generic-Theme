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
		<?php if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'content' );
			endwhile;
		else :
			get_template_part( 'content', 'none' );
		endif; ?>
</div><!-- #main-content -->

<?php
get_footer();
