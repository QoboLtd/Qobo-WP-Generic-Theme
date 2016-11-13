<?php
/**
 * The template used for displaying page content
 *
 * @package Qobo Generic Wordpress Theme
 */
?>

<div class="site-content content-area" role="main">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'wrap row ' ); ?>>
		<div class="entry-content">
			<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			<?php
			the_content();
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
</div><!-- #content -->
