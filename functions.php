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
			'id' => 'sidebar-right-1',
			'name' => __ ( 'Sidbar Right', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="widget %1$s %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>' 
	) );
	
	register_sidebar ( array (
			'id' => 'sidebar-left-1',
			'name' => __ ( 'Sidebar Left', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>' 
	) );
	
	register_sidebar ( array (
			'id' => 'footer-widget-1',
			'name' => __ ( 'Footer Widget Left', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="col-sm-4 footer-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>' 
	) );
	register_sidebar ( array (
			'id' => 'footer-widget-2',
			'name' => __ ( 'Footer Widget Left Middle', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="col-sm-4 footer-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>' 
	) );
	register_sidebar ( array (
			'id' => 'footer-widget-3',
			'name' => __ ( 'Footer Widget Middle Right', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="col-sm-4 footer-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>' 
	) );
	register_sidebar ( array (
			'id' => 'footer-widget-4',
			'name' => __ ( 'Footer Widget Right', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="col-sm-4 footer-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>' 
	) );
	register_sidebar ( array (
			'id' => 'footer-widget-5',
			'name' => __ ( 'Widget Under Footer Left', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="col-sm-7 col-md-8 footer-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>' 
	) );
	register_sidebar ( array (
			'id' => 'footer-widget-6',
			'name' => __ ( 'Widget Under Footer Right', 'qobobgt' ),
			'before_widget' => '<aside id="%1$s" class="col-sm-5 col-md-4 footer-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>' 
	) );
}
add_action ( 'widgets_init', 'qobobgt_widgets_init' );