<?php
/**
 * @package RS_Services
 * @version 1
 */
/*
Plugin Name: RS Services
Plugin URI: https://github/willard/rs_services
Description: WP post type plugin for services
Version: 1
Author URI: https://github/willard
*/


// Register Custom Post Type
function service_post_type()
{

    $labels = array(
        'name'                  => _x('Services', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Service', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Services', 'text_domain'),
        'name_admin_bar'        => __('Services', 'text_domain'),
        'archives'              => __('Item Archives', 'text_domain'),
        'attributes'            => __('Item Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Item:', 'text_domain'),
        'all_items'             => __('All Services', 'text_domain'),
        'add_new_item'          => __('Add New Service', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Service', 'text_domain'),
        'edit_item'             => __('Edit Service', 'text_domain'),
        'update_item'           => __('Update Service', 'text_domain'),
        'view_item'             => __('View Service', 'text_domain'),
        'view_items'            => __('View Services', 'text_domain'),
        'search_items'          => __('Search Service', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
        'featured_image'        => __('Featured Image', 'text_domain'),
        'set_featured_image'    => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image'    => __('Use as featured image', 'text_domain'),
        'insert_into_item'      => __('Insert into item', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
        'items_list'            => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter items list', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Service', 'text_domain'),
        'description'           => __('Service Description', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('services', $args);
}
add_action('init', 'service_post_type', 0);


function rs_services($id = null){
    $query = new WP_Query( array( 'post_type' => 'services', 'post__not_in' => array($id) ) );
    $posts = $query->posts;
    $services = [];
    foreach ( $posts as $post ) {
        $data = [
            'title' => $post->post_title,
            'excerpt' => $post->post_excerpt,
            'url' => get_permalink($post->ID)
        ];
        $services[] = $data;
    }

    return $services;
}