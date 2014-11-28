<?php
/**
 * Template Name: News
 * The template for displaying site news 
 *
 *
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
		<div id="news-primary" class="content-area col-sm-12">
			<div id="news-content" class="site-content">
			<?php
			// Start the Loop.
			while ( have_posts () ) :
				the_post ();
				
				// Include the page content template.
				get_template_part ( 'content' , 'news');
				
				// If comments are open or we have at least one comment, load up the comment template.
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
