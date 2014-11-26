<?php
/**
 * Template Name: Both sidebars
 * 
 * The template for displaying the content with 
 * two sidebars in each side
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
	<?php get_sidebar ( "left-1" );?>
		<div id="primary" class="content-area col-sm-6">
			<div id="content" class="site-content" role="main">
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
		<?php get_sidebar ( "right-1" );?>
	</div>
</div>
<!-- #main-content -->

<?php
get_footer ();
