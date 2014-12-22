<?php
/**
 * Qobo Generic Wordpress Theme functions and definitions
 *
 * @package Qobo Generic Wordpress Theme
 */

/*-----------------------------------------------------------------------------------*/
/*	Register Menu
 /*-----------------------------------------------------------------------------------*/

register_nav_menus( array(
'primary' => __ ( 'Primary Menu', 'Qobo BGT' ),
'footer' => __ ( 'Footer Menu', 'Qobo BGT' ) 
) );

/*-----------------------------------------------------------------------------------*/
/*	Add thumbnails support to posts
 /*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/*	Load custom nav walker
 /*-----------------------------------------------------------------------------------*/
require get_template_directory () . '/inc/navwalker.php';

/*-----------------------------------------------------------------------------------*/
/*	Widgets
 /*-----------------------------------------------------------------------------------*/
function qobobgt_widgets_init() {
	register_sidebar ( array (
			'id' => 'sidebar-right',
			'name' => __ ( 'Sidbar Right', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="widget %1$s %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>' 
	) );
	
	register_sidebar ( array (
			'id' => 'sidebar-left',
			'name' => __ ( 'Sidebar Left', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>' 
	) );
	
	register_sidebar ( array (
			'id' => 'footer-widget-1',
			'name' => __ ( 'Footer Widget Left', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>' 
	) );
	register_sidebar ( array (
			'id' => 'footer-widget-2',
			'name' => __ ( 'Footer Widget Left Middle', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>' 
	) );
	register_sidebar ( array (
			'id' => 'footer-widget-3',
			'name' => __ ( 'Footer Widget Middle Right', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>' 
	) );
	register_sidebar ( array (
			'id' => 'footer-widget-4',
			'name' => __ ( 'Footer Widget Right', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>' 
	) );
	register_sidebar ( array (
			'id' => 'under-footer-widget-1',
			'name' => __ ( 'Widget Under Footer Left', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="under-footer-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>' 
	) );
	register_sidebar ( array (
			'id' => 'under-footer-widget-2',
			'name' => __ ( 'Widget Under Footer Right', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="under-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>' 
	) );
}
add_action ( 'widgets_init', 'qobobgt_widgets_init' );

function includeCustomCSS($cssFile = '/custom.css') {
	$result = '';

	// ABSPATH points to WordPress folder, which in our 
	// case is in wp/ .  So we need one level up.
	$projectRoot = ABSPATH . '..';
	if (!empty($cssFile) && file_exists($projectRoot . $cssFile)) {
		$result = '<link rel="stylesheet" href="' . home_url($cssFile) . '">';
	}

	return $result;
}

function includeCustomJS($jsFile = '/custom.js') {
	$result = '';

	// ABSPATH points to WordPress folder, which in our 
	// case is in wp/ .  So we need one level up.
	$projectRoot = ABSPATH . '..';
	if (!empty($jsFile) && file_exists($projectRoot . $jsFile)) {
		$result = '<script type="text/javascript" src="' . home_url($jsFile) . '"></script>';
	}

	return $result;
}

function formatPrice($price) {
	$price = trim($price);
   	if (is_numeric($price))
   		return '$' . number_format((int )$price);
   	else 
   		return $price ; 
}

function filterImagesFromString($string){
	preg_match_all("/<img[^>]+>/", $string,$results,PREG_PATTERN_ORDER);
	$matches = $results[0];
	if (empty($matches)){
		return $string;
	} else {
		return $matches; 
	}
}

function getContactInformation(){
	$infoFile = '/contact-info.txt';
	$result = '';
	// ABSPATH points to WordPress folder, which in our 
	// case is in wp/ .  So we need one level up.
	$projectRoot = ABSPATH . '..';
	if (!empty($infoFile) && file_exists($projectRoot . $infoFile)) {
		$myfile = fopen($projectRoot . $infoFile, "r") or die("Unable to open file!");
		while(! feof($myfile)){
			echo fgets($myfile). "<br />";
		}
		fclose($myfile);
	} else {
		$result = "Contact information coming soon";
	}
	return $result;
}
