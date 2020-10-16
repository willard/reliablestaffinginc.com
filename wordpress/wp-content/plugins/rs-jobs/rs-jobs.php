<?php

/**
 * @package RS_Jobs
 * @version 1
 */
/*
Plugin Name: RS Jobs
Plugin URI: https://github/willard/rs_jobs
Description: WP post type plugin for jobs
Version: 1
Author URI: https://github/willard
*/

//require_once( 'class-oauth-request.php' );


// Register Custom Post Type
function jobs_post_type()
{

	$labels = array(
		'name'                  => _x('Jobs', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Job', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Jobs', 'text_domain'),
		'name_admin_bar'        => __('Job', 'text_domain'),
		'archives'              => __('Job Archives', 'text_domain'),
		'attributes'            => __('Job Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Item:', 'text_domain'),
		'all_items'             => __('All Jobs', 'text_domain'),
		'add_new_item'          => __('Add New Job', 'text_domain'),
		'add_new'               => __('Add New', 'text_domain'),
		'new_item'              => __('New Job', 'text_domain'),
		'edit_item'             => __('Edit Job', 'text_domain'),
		'update_item'           => __('Update Job', 'text_domain'),
		'view_item'             => __('View Job', 'text_domain'),
		'view_items'            => __('View Jobs', 'text_domain'),
		'search_items'          => __('Search Job', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'featured_image'        => __('Featured Image', 'text_domain'),
		'set_featured_image'    => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image'    => __('Use as featured image', 'text_domain'),
		'insert_into_item'      => __('Insert into job', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this job', 'text_domain'),
		'items_list'            => __('Jobs list', 'text_domain'),
		'items_list_navigation' => __('Jobs list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter jobs list', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Job', 'text_domain'),
		'description'           => __('Jobs Post Type', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title'),
		'taxonomies'            => array('category', 'post_tag'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type('jobs', $args);
}
add_action('init', 'jobs_post_type', 0);


function rs_jobs($id = null)
{
	$query = new WP_Query(array('post_type' => 'jobs', 'post__not_in' => array($id)));
	$posts = $query->posts;
	$jobs = [];
	foreach ($posts as $post) {
		$data = [
			'title' => $post->post_title,
			'description' => get_field("description", $post->ID),
			'location' => get_field("location", $post->ID),
			'url' => get_permalink($post->ID)
		];
		$jobs[] = $data;
	}



	return $jobs;
}


// function rs_jobs_oauth(){
// 	$consumer_key = 'ck_2669e5bd50186f2a274bdc6e98e86bdfa659729f';
// 	$consumer_secret = 'cs_9d6f9f2db7e3158020060d4a398137a1df71b3e5';
// 	$url = 'http://localhost:8080/wp-json/gf/v2/entries';
	
// 	//Use helper to get oAuth authentication parameters in URL.
// 	//Download helper library from: https://docs.gravityforms.com/wp-content/uploads/2017/01/class-oauth-request.php_.zip

// 	$oauth = new OAuth_Request( $url, $consumer_key, $consumer_secret, 'POST', array() );
// 	$full_url = $oauth->get_url();

// 	return $full_url ;
// }


// function rs_enqueue_scripts() {
//     wp_enqueue_script( 'wp-api', 'wp-api.js');
// 	wp_localize_script( 'wp-api', 'wpApiSettings', array(
// 		'url' => esc_url_raw( rs_jobs_oauth() ),
// 		'media_endpoint' => esc_url_raw( rest_url( '/wp-json/wp/v2/media/' ) ),
// 		'nonce'    => wp_create_nonce( 'wp_rest' ),
// 	) );
// }
// add_action( 'wp_enqueue_scripts', 'rs_enqueue_scripts' );