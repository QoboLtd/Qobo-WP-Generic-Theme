<?php
/**
 * Content template used for displaying the homepage contet
 *
 * @package Qobo Generic Wordpress Theme
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		the_content ();
		?>
	</div>
	<!-- .entry-content -->
</article>
<!-- #post-## -->
