<?php
/**
 * The default template for displaying the content 
 *
 * @package Qobo Generic Wordpress Theme
 */
get_header ();

?>
<div id="main-content" class="main-content col-sm-6">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php the_title("<h1 class=\"page-title\">","</h1>"); ?>
			<?php
			// Start the Loop.
			while ( have_posts () ) :
				the_post ();
				
				// Include the page content template.
				get_template_part ( 'content' );
				
				// If comments are open or we have at least one comment, load up the comment template.
			endwhile
			;
			?>

		</div>
		<!-- #content -->
	</div>
	<!-- #primary -->
</div>
<!-- #main-content -->

<?php
get_footer();
