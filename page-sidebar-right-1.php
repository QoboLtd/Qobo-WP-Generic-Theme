<?php
/**
 * Template Name: Right Sidebar 1
 * The template for displaying a sidebar right of the content. 
 *  
 * @package Qobo Generic Wordpress Theme
 *
 */
get_header ();
?>

<div id="main-content" class=" main-content ">
	<div class="row">
		<div class="col-sm-12">
			<div class="breadcrumbs">
    <?php
				
				if (function_exists ( 'bcn_display' )) {
					bcn_display ();
				}
				?>
	</div>
		</div>
	</div>
	<div class="row">
		<div id="primary" class="content-area col-sm-9">
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
	<?php get_sidebar ("right-1");?>
	
	</div>
</div>
<!-- #main-content -->

<?php
get_footer ();
