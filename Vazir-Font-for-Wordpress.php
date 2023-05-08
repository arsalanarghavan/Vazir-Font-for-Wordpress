<?php

/*
Plugin Name: Vazir Font for Wordpress
Plugin URI: https://ArsalanArghavan.ir
Description: Vazir Font for Wordpress
Author: Arsalan Arghavan
Author URI: https://ArsalanArghavan.ir
*/

function custom_styles() {
	wp_enqueue_style( 'custom-style', plugins_url('rtl.css', __FILE__));
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );



function my_admin_theme_style() {
    wp_enqueue_style('my-admin-theme', plugins_url('wp-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

?>
