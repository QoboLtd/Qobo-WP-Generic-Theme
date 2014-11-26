<?php
/**
 * The template used for displaying page content
 *
 * @package Qobo Generic Wordpress Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-content non-fullscreen">
	
	<h1><?php the_title()?></h1>
	
	<?php if (has_post_thumbnail ()) :?>
	<div class="col-sm-6"> 
		<?php  the_post_thumbnail ( 'full' );?>
	 </div>
	 <?php  endif;	?>
		
		<?php
		the_content ();
		?>
	</div>
	<!-- .entry-content -->
</article>
<!-- #post-## -->
