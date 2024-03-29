<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package     BuzzNews
 * @author     spiderbuzz
 * @copyright   Copyright (c) 2019, spiderbuzz
 * @link        http://spiderbuzz.com
 * @since       BuzzNews 1.0.0
 * */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function buzznews_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	/**
	 * BuzzNews Sidebar functions
	 * 
	 * @since 1.0.0
	*/
	$classes[] = get_theme_mod( 'buzznews_post_sidebar_layout_settings','buzznews-right-sidebar' );
	

	/**
	 * BuzzNews Theme layout class
	 * 
	 * @since 1.0.0
	*/
	$classes[] = get_theme_mod( 'buzznews_theme_layout_settings','buzznews-theme-fullwidth' );
	

	return $classes;
}
add_filter( 'body_class', 'buzznews_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function buzznews_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'buzznews_pingback_header' );
