<?php
/**
 * Template Name: No sidebars
 * The template for displaying the content without any sidebars
 *
 * @package Qobo Generic Wordpress Theme
 */
get_header ();
?>

<div id="main-content" class=" main-content ">
	<div class="row">
			<div class="breadcrumbs">
    <?php
				
				if (function_exists ( 'bcn_display' )) {
					bcn_display ();
				}
				?>
	</div>
	</div>
	<div class="row">
		<div id="primary" class="content-area col-sm-13">
			<div id="content" class="site-content">
			<?php the_title("<h1 class=\"page-title\">","</h1>"); ?>
			<?php
			// Start the Loop.
			while ( have_posts () ) :
				the_post ();
				
				// Include the page content template.
				get_template_part ( 'content' );
				
			endwhile
			;
			?>

		</div>
			<!-- #content -->
		</div>
		<!-- #primary -->
	</div>
</div>
<!-- #main-content -->

<?php
get_footer ();
