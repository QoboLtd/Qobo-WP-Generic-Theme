<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Qobo Generic Wordpress Theme
 */
?>

</div>
<!-- #main -->
<footer>
	<div class="footer-area row non-fullscreen">
		<!-- 		<ul> -->
		<!-- 			<li class="footer-widget"> -->
		<!-- 				<article> -->
		<!-- 					<h3>Solidway Group</h3> -->
		<!-- 					<p>19 Halkidos Street, 6031, Larnaca, Cyprus</p> -->
		<!-- 					<p> -->
		<!-- 						<em>P:</em> +357 24 822488 -->
		<!-- 					</p> -->
		<!-- 					<p> -->
		<!-- 						<em>E:</em> <a href="mailto:info@solidwaygroup.com">info@solidwaygroup.com</a> -->
		<!-- 					</p> -->
		<!-- 				</article> -->
		<!-- 			</li> -->
		<!-- 			<li class="footer-widget"> -->
		<!-- 				<article> -->
		<!-- 					<h3>Follow us</h3> -->
		<!-- 					<ul class="social"> -->
		<!-- 						<li class="facebook last"><a -->
		<!-- 							href="http://www.facebook.com/solidwaygroup" title="Facebook">facebook</a></li> -->
		<!-- 					</ul> -->
		<!-- 				</article> -->
		<!-- 			</li> -->
		<!-- 		</ul> -->
		<div class="row footer-sidebar">
	<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
		<?php dynamic_sidebar( 'footer-widget-1' ); ?>
		<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
		<?php dynamic_sidebar( 'footer-widget-2' ); ?>
		<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
		<?php dynamic_sidebar( 'footer-widget-3' ); ?>
		<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer-widget-4' ) ) : ?>
		<?php dynamic_sidebar( 'footer-widget-4' ); ?>
		<?php endif; ?>
		</div>
		<div class="row under-footer">
	<?php if ( is_active_sidebar( 'footer-widget-5' ) ) : ?>
		<?php dynamic_sidebar( 'footer-widget-5' ); ?>
		<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer-widget-6' ) ) : ?>
		<?php dynamic_sidebar( 'footer-widget-6' ); ?>
		<?php endif; ?>
		</div>
	</div>
	<!-- #secondary -->
	<!-- 	<div class="wrap clearfix"> -->
	<!-- 		<section class="bottom"> -->
	<!-- 			<p class="copy">&copy; SolidWay 2014. All rights reserved.</p> -->
	<!-- 		</section> -->
	<!-- 	</div> -->

</footer>
<!-- footer -->
</div>
<!-- #page -->

<script type='text/javascript'
	src='<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js'></script>
<script type='text/javascript'
	src='<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js'></script>
<script type='text/javascript'
	src='<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js'></script>
<script type='text/javascript'
	src='<?php echo get_template_directory_uri(); ?>/js/qobobgt.js'></script>
<script type='text/javascript'
	src='<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js'></script>
<script type='text/javascript'
	src='<?php echo get_template_directory_uri(); ?>/js/lightbox.min.js'></script>
<script type='text/javascript'
	src='<?php echo get_template_directory_uri(); ?>/js/jquery.slimscroll.min.js'></script>

<?php
$js = ABSPATH . "../custom.js";
$css = get_template_directory () . "/js/custom.js";
if (file_exists ( $js )) {
	?>
<script type='text/javascript' src='/custom.js'></script>
<?php } ?>
<?php wp_footer(); ?>

</body>
</html>