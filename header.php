<?php
/**
 * The Header for Qobo Generic theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Qobo Generic Wordpress Theme
 *
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title('', true, 'right'); ?><
/title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<link rel="stylesheet"
href="<?php echo  get_template_directory_uri() . "/css/jquery-ui.css" ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<link rel="stylesheet"
href="<?php echo  get_template_directory_uri() . "/css/multilevel-menu.css" ?>">
<link rel="stylesheet"
href="<?php echo  get_template_directory_uri() . "/css/bootstrap-extension.css" ?>">
<link rel="stylesheet"
href="<?php echo  get_template_directory_uri() . "/css/flexslider.css" ?>">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet"
href="<?php echo  get_template_directory_uri() . "/css/bootstrap.min.css" ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php
$css = ABSPATH . "../custom.css";

if (file_exists ( $css )) {
?>
<link rel="stylesheet" href="<?php echo  "/custom.css" ?>">
<?php } ?>

<!-- Google fonts  -->

<!-- /Google fonts -->

<?php wp_head(); ?>

<script>
	if ( typeof sameHeight == 'function') {
		console.log('sameHeight');
		//add the class selector of the element you want to have the same height
		sameHeight();
	}
	if ( typeof createSlider == 'function') {
		console.log('createSlider');
		//add the class selector of the flexslider you want to create
		createSlider();
	}
	if ( typeof stretch == 'function') {
		console.log('stretch');
		//This function will stretch the height of the page to make it full if it is less than
		//the device viewport
		stretch();
	}
	if ( typeof makeSlimScroll == 'function') {
		console.log('slim-scroll');
		//add the class selector of the element you want to have a slim scroll
		makeSlimScroll();
	}

</script>

</head>

<body <?php body_class(); ?>
onload="onLoad()">
<div id="page">
<?php if ( get_header_image() ) :
?>
<div id="site-header">
<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"> <img
src="<?php header_image(); ?>"
width="<?php echo get_custom_header() -> width; ?>"
height="<?php echo get_custom_header() -> height; ?>" alt="">
</a>
</div>
<?php endif; ?>

<header id="masthead" class="site-header">
<div class="wrap clearfix">
<!--logo-->
<h1 class="logo">
<a href="<?php bloginfo("url")?>" title="Company logo"><img
src="<?php echo get_template_directory_uri(); ?>/img/brand.png"
alt="Company logo"></a>
</h1>
<!--//logo-->

</div>
<nav class="navbar navbar-default" role="navigation">

<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed"
data-toggle="collapse" data-target="#header-bar">
<span class="sr-only">Toggle navigation</span> <span
class="icon-bar"></span> <span class="icon-bar"></span> <span
class="icon-bar"></span>

</button>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div id="header-bar" class="wrap collapse navbar-collapse ">
<?php
$defaults = array(
// 'theme_location' => 'header-menu',
'menu' => 'Main Menu', 'container' => '', 'container_class' => '', 'menu_class' => 'nav navbar-nav', 'depth' => 0, 'fallback_cb' => 'qobogt_wp_bootstrap_navwalker::fallback', 'walker' => new qobogt_wp_bootstrap_navwalker());
wp_nav_menu($defaults);
?>
</div>
</div>
<!-- /.container-fluid -->
</nav>

</header>
<!-- #masthead -->

<div id="main" class="wrap">