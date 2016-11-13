<?php
/**
 * The template used for displaying page content
 *
 * @package Qobo WP Theme
 */

?>

<div class="site-content content-area" role="main">
	<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>
		<div class="site-homepage">
			<?php
			the_content();
			?>
		</div>		<!-- .entry-content -->
	</article>	<!-- #post-## -->
</div><!-- #content -->
