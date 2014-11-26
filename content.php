<?php
/**
 * The template used for displaying page content
 *
 * @package Qobo Generic Wordpress Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
