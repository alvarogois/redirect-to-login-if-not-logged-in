<?php
/**
 * @package Redirect to login if not logged in
 * @version 1.0
 */
/*
Plugin Name: Redirect to login if not logged in
Plugin URI: http://daan.kortenba.ch/redirect-to-wp-login-php-if-user-is-not-logged-in/
Description: Redirects site visitors to the login page if the visitor is not logged in. This plugin is used fairly often for sites in development or sites only available for registered users.
Author: Daan Kortenbach
Version: 1.0
Author URI: http://daan.kortenba.ch/
*/

add_action( 'wp', 'dk_redirect_to_login_if_not_logged_in', 1 );

/**
 * Redirect to wp-login.php if user is not logged in.
 *
 * @author Daan Kortenbach
 *
 * @global string $pagenow
 * @return void redirect to login.php
 */
function dk_redirect_to_login_if_not_logged_in() {

	global $pagenow;

	// If the visitor is not logged in, redirect to login url
	if ( ! is_user_logged_in() && $pagenow != 'wp-login.php' )
		wp_redirect( wp_login_url() );
}