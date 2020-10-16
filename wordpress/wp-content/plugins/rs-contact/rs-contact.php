<?php
/**
 * @package RS_Contact
 * @version 1
 */
/*
Plugin Name: RS Contact
Plugin URI: https://github/willard/rs_contact
Description: WP Custom Contact Form for reliable staffing
Version: 1
Author URI: https://github/willard
*/

/**
 * Register and Enqueue Scripts.
 */
// function rs_contact_register_scripts() {
// 	wp_enqueue_style( 'rs-contact-css', plugin_dir_url(__FILE__) . 'dist/main.css', null, 1 );
// 	wp_enqueue_script( 'rs-contact-js', plugin_dir_url(__FILE__) . 'dist/main.js', array(), 1, true );
// }
//add_action( 'wp_enqueue_scripts', 'rs_contact_register_scripts' );

function rs_contact_render(){
    include( plugin_dir_path( __FILE__ ) . 'template.php');
}