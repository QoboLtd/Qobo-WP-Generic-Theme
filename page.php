<?php
/**
 * The default template for displaying the content
 *
 * @package Qobo Generic Wordpress Theme
 */
get_header();

?>
<div id="main-content" class="content-area">
	<?php
	// Start the Loop.
	while ( have_posts() ) :
		the_post();
		// Include the page content template.
		get_template_part( 'content' );
	endwhile;
	?>
</div><!-- #main-content -->

<?php
get_footer();
