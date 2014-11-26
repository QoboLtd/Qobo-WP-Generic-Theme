<?php
/**
 * Template Name: Homepage
 * The template for displaying the homepage
 *
 * @package Qobo Generic Wordpress Theme
 *
 */
get_header ();
?>

<!-- <div class="slider"> -->
<?php //echo do_shortcode('[metaslider id=668]')?>
<div class="home-slider">
<?php  echo do_shortcode('[smartslider2 slider="3"]'); ?>
</div>
<?php //echo do_shortcode('[cycloneslider id="home-slider"]')?>
<!-- </div> -->

<div id="main-content" class="main-content ">

	<div class="row">
		<div id="primary" class="content-area">
			<div id="" class="site-content" role="main">
			<?php //the_title("<h1 class=\"page-title\">","</h1>"); ?>
			<?php
			// Start the Loop.
			while ( have_posts () ) :
				the_post ();
				
				// Include the page content template.
				get_template_part ( 'content', 'home' );
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
get_footer();
