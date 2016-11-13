<?php
/**
 * The template used for displaying page content with a right sidebar
 *
 * @package Qobo Generic Wordpress Theme
 */

?>

<div class="site-content content-area" role="main">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'wrap row' ); ?>>
		<div class="entry-content col-sm-9">
			<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			<?php
			the_content();
			?>
		</div><!-- .entry-content -->
		<?php get_sidebar( 'right' ); ?>
	</article><!-- #post-## -->
</div><!-- #content -->
