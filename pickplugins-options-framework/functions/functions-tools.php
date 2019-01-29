<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 

add_action( 'after_setup_theme', 'PickPlugins_theme_setup' );

function PickPlugins_theme_setup(){

    $site_sidebars_arr = get_option('theme_pickoptions');
    $site_menus = $site_sidebars_arr['site_menus'];

    //var_dump($site_menus);
    //register_nav_menus(  $site_menus );




}




add_action( 'widgets_init', 'Pickplugins_register_sidebars' );

function Pickplugins_register_sidebars(){

    $site_sidebars_arr = get_option('theme_pickoptions');
    $site_sidebars = $site_sidebars_arr['site_sidebars'];

    foreach ($site_sidebars as $sidebar){
        register_sidebar($sidebar);
    }
}



add_action( 'init', 'Pickplugins_register_post_types' );

function Pickplugins_register_post_types(){

    $site_post_types_arr = get_option('theme_pickoptions');
    $site_post_types = $site_post_types_arr['site_post_types'];

    foreach ($site_post_types as $post_type){

        //var_dump($post_type);

        if ( post_type_exists( $post_type['name'] ) )
            return;


        register_post_type( $post_type['name'],
            apply_filters( "register_post_type_".$post_type['name'], array(
                'labels' => array(
                    'name' 					=> $post_type['name'],
                    'singular_name' 		=> $post_type['name'],
                    'menu_name'             => $post_type['name'],
                    'all_items'             => sprintf( __( 'All %s', 'text-domain' ), $post_type['name'] ),
                    'add_new' 				=> sprintf( __( 'Add %s', 'text-domain' ), $post_type['name'] ),
                    'add_new_item' 			=> sprintf( __( 'Add %s', 'text-domain' ), $post_type['name'] ),
                    'edit' 					=> __( 'Edit', 'text-domai' ),
                    'edit_item' 			=> sprintf( __( 'Edit %s', 'text-domain' ), $post_type['name'] ),
                    'new_item' 				=> sprintf( __( 'New %s', 'text-domain' ), $post_type['name'] ),
                    'view' 					=> sprintf( __( 'View %s', 'text-domain' ), $post_type['name'] ),
                    'view_item' 			=> sprintf( __( 'View %s', 'text-domain' ), $post_type['name'] ),
                    'search_items' 			=> sprintf( __( 'Search %s', 'text-domain' ), $post_type['name'] ),
                    'not_found' 			=> sprintf( __( 'No %s found', 'text-domain' ), $post_type['name'] ),
                    'not_found_in_trash' 	=> sprintf( __( 'No %s found in trash', 'text-domain' ), $post_type['name'] ),
                    'parent' 				=> sprintf( __( 'Parent %s', 'text-domain' ), $post_type['name'] )
                ),
                'description'           => !empty($post_type['description']) ? $post_type['description'] : '',
                'public' 				=> !empty($post_type['public']) ? $post_type['public'] : true,
                'show_ui' 				=> !empty($post_type['show_ui']) ? $post_type['show_ui'] : true,
                'capability_type' 		=> !empty($post_type['capability_type']) ? $post_type['capability_type'] : 'post',
                'map_meta_cap'          => !empty($post_type['map_meta_cap']) ? $post_type['map_meta_cap'] : true,
                'publicly_queryable' 	=> !empty($post_type['publicly_queryable']) ? $post_type['publicly_queryable'] : true,
                'exclude_from_search' 	=> !empty($post_type['exclude_from_search']) ? $post_type['exclude_from_search'] : false,
                'hierarchical' 			=> !empty($post_type['hierarchical']) ? $post_type['hierarchical'] : false,
                'rewrite' 				=> !empty($post_type['rewrite']) ? $post_type['rewrite'] : true,
                'query_var' 			=> !empty($post_type['query_var']) ? $post_type['query_var'] : true,
                'supports' 				=> !empty($post_type['supports']) ? $post_type['supports'] : array('title','editor','author','comments','custom-fields'),
                'show_in_nav_menus' 	=> !empty($post_type['show_in_nav_menus']) ? $post_type['show_in_nav_menus'] : false,
                //'taxonomies' => array('question_tags'),
                'menu_icon' => !empty($post_type['menu_icon']) ? $post_type['menu_icon'] : 'dashicons-admin-customizer',
            ) )
        );




    }

    flush_rewrite_rules();


}










