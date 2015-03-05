<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Happy Tails Theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function happy_tails_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'happy_tails_theme_jetpack_setup' );
