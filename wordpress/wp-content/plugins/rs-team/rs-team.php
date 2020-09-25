<?php
/**
 * @package RS_Team
 * @version 1
 */
/*
Plugin Name: RS Team
Plugin URI: https://github/willard/rs_team
Description: WP post type plugin for team
Version: 1
Author URI: https://github/willard
*/

// Register Custom Post Type
function team_post_type() {

	$labels = array(
		'name'                  => _x( 'Teams', 'Post Type General Name', 'rs_team' ),
		'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'rs_team' ),
		'menu_name'             => __( 'Team', 'rs_team' ),
		'name_admin_bar'        => __( 'Team', 'rs_team' ),
		'archives'              => __( 'Item Archives', 'rs_team' ),
		'attributes'            => __( 'Item Attributes', 'rs_team' ),
		'parent_item_colon'     => __( 'Parent Item:', 'rs_team' ),
		'all_items'             => __( 'All Items', 'rs_team' ),
		'add_new_item'          => __( 'Add New Item', 'rs_team' ),
		'add_new'               => __( 'Add New', 'rs_team' ),
		'new_item'              => __( 'New Item', 'rs_team' ),
		'edit_item'             => __( 'Edit Item', 'rs_team' ),
		'update_item'           => __( 'Update Item', 'rs_team' ),
		'view_item'             => __( 'View Item', 'rs_team' ),
		'view_items'            => __( 'View Items', 'rs_team' ),
		'search_items'          => __( 'Search Item', 'rs_team' ),
		'not_found'             => __( 'Not found', 'rs_team' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'rs_team' ),
		'featured_image'        => __( 'Featured Image', 'rs_team' ),
		'set_featured_image'    => __( 'Set featured image', 'rs_team' ),
		'remove_featured_image' => __( 'Remove featured image', 'rs_team' ),
		'use_featured_image'    => __( 'Use as featured image', 'rs_team' ),
		'insert_into_item'      => __( 'Insert into item', 'rs_team' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'rs_team' ),
		'items_list'            => __( 'Items list', 'rs_team' ),
		'items_list_navigation' => __( 'Items list navigation', 'rs_team' ),
		'filter_items_list'     => __( 'Filter items list', 'rs_team' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'rs_team' ),
		'description'           => __( 'Reliable Staffing Team', 'rs_team' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'rewrite'               => false,
		'capability_type'       => 'post',
	);
	register_post_type( 'team_post_type', $args );

}
add_action( 'init', 'team_post_type', 0 );


function rs_teams(){
    $query = new WP_Query( array( 'post_type' => 'team_post_type' ) );
    $posts = $query->posts;
    $teams = [];
    foreach ( $posts as $post ) {
        $data = [
			'name' => $post->post_title,
			'position' => get_field( "position", $post->ID ),
			'photo' => get_field( "photo", $post->ID ),
			'description' => get_field( "description", $post->ID ),
        ];
        $teams[] = $data;
    }

    return $teams;
}


function rs_teams_change_post_titles() 
{
	global $post, $title, $action, $current_screen;
	if($current_screen->post_type == 'team_post_type') {
		$title = "Name";
	}
}
add_action('admin_head', 'rs_teams_change_post_titles');

function rs_teams_change_post_title_label() 
{
	global  $current_screen;
	if($current_screen->post_type == 'team_post_type') {
		return 'Enter the name here';
	}
}
add_filter('enter_title_here', 'rs_teams_change_post_title_label' , 10, 2 );
