<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 





$options = array(
    'label' 				=> __( 'Demo Category', 'text-domain' ),
    'labels' => array(
        'name'              => __( 'Demo Category', 'text-domain' ),
        'singular_name'     => __( 'Demo Category', 'text-domain' ),
        'menu_name'         => __( 'Demo Category', 'text-domain' ),
        'search_items'      => __( 'Search Demo Category', 'text-domain' ),
        'all_items'         => __(   'All Demo Category', 'text-domain' ),
        'parent_item'       =>  __( 'Parent Demo Category', 'text-domain' ),
        'parent_item_colon' =>  __( 'Parent Demo Category:', 'text-domain' ),
        'edit_item'         =>  __( 'Edit Demo Category', 'text-domain' ),
        'update_item'       =>  __( 'Update Demo Category', 'text-domain' ),
        'add_new_item'      =>  __( 'Add New Demo Category', 'text-domain' ),
        'new_item_name'     => __( 'New Demo Category', 'text-domain' ),
    ),
    'hierarchical' 			=> true,
    'show_admin_column' 	=> true,
    'update_count_callback' => '_update_post_term_count',
    'show_ui' 				=> true,
    'public' 	     		=> true,
    'rewrite' => array(
        'slug' => 'demo_post_cat',
        'with_front' => false,
        'hierarchical' => true,
    ),
);


$args = array(
    'taxonomy'       => 'demo_cat',
    'post_type'       => 'demo_post',
    'options' 	        => $options,
);

$CreatePostType = new CreateTaxonomy( $args );


























