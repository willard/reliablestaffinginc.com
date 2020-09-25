<?php
/**
 * @package RS_Testimonials
 * @version 1
 */
/*
Plugin Name: RS Testimonials
Plugin URI: https://github/willard/rs_testimonials
Description: WP post type plugin for Testimonials
Version: 1
Author URI: https://github/willard
*/

// Register Custom Post Type
function testimonials_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonials', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'text_domain' ),
		'description'           => __( 'Testimonials', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-comments',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'post',
	);
	register_post_type( 'testi_post_type', $args );

}
add_action( 'init', 'testimonials_post_type', 0 );


function rs_testimonials(){
    $query = new WP_Query( array( 'post_type' => 'testi_post_type' ) );
    $posts = $query->posts;
    $testimonials = [];
    foreach ( $posts as $post ) {
        $data = [
			'name' => $post->post_title,
			'position' => get_field( "position", $post->ID ),
			'content' => get_field( "content", $post->ID ),
        ];
        $testimonials[] = $data;
    }

    return $testimonials;
}


function rs_testimonials_change_post_titles() 
{
	global $post, $title, $action, $current_screen;
	if($current_screen->post_type == 'testi_post_type') {
		$title = "Name";
	}
}
add_action('admin_head', 'rs_testimonials_change_post_titles');

function rs_testimonials_change_post_title_label() 
{
	global  $current_screen;
	if($current_screen->post_type == 'testi_post_type') {
		return 'Enter the name here';
	}
}
add_filter('enter_title_here', 'rs_testimonials_change_post_title_label' , 10, 2 );