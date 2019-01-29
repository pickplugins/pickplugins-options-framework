<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 





$options = array(

    'labels' => array(
        'name' => _x('Demo Post', 'text-domain'),
        'singular_name' => _x('Demo Post', 'text-domain'),
        'add_new' => _x('New Demo Post', 'text-domain'),
        'add_new_item' => __('New Demo Post', 'text-domain'),
        'edit_item' => __('Edit Demo Post', 'text-domain'),
        'new_item' => __('New Demo Post', 'text-domain'),
        'view_item' => __('View Demo Post', 'text-domain'),
        'search_items' => __('Search Demo Post', 'text-domain'),
        'not_found' =>  __('Nothing found', 'text-domain'),
        'not_found_in_trash' => __('Nothing found in Trash', 'text-domain'),
        'parent_item_colon' => ''
    ),
    'description' => '', //(optional)
    'public' => false,
    'publicly_queryable' => false,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => 'dashicons-media-spreadsheet',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','author','thumbnail','excerpt','custom-fields','comments'),

);




$args = array(
    'post_type'       => 'demo_post',
    'options' 	        => $options,
);

$CreatePostType = new CreatePostType( $args );


























