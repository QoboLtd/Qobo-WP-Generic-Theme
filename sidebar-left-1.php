<?php
/**
 * The Left 1 Sidebar containing the property finder
 *
 * @package Qobo Generic Wordpress Theme
 */
?>
<div class="sidebar col-sm-3">
	<?php if ( is_active_sidebar( 'sidebar-left-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area " role="complementary">
		<?php dynamic_sidebar( 'sidebar-left-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->