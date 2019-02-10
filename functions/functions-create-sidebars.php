<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 







    $args = array(
        'sidebars' => array(
            array(
                'name' => __( 'Main Sidebar 1', 'theme-slug' ),
                'id' => 'main-sidebar-1',
                'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
                'before_widget' => '<li id="%1$s" class="widget %2$s">',
                'after_widget'  => '</li>',
                'before_title'  => '<h2 class="widgettitle">',
                'after_title'   => '</h2>',
            ),
            array(
                'name' => __( 'Main Sidebar 2', 'theme-slug' ),
                'id' => 'main-sidebar-2',
                'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
                'before_widget' => '<li id="%1$s" class="widget %2$s">',
                'after_widget'  => '</li>',
                'before_title'  => '<h2 class="widgettitle">',
                'after_title'   => '</h2>',
            )


        ),
    );

    $CreateSidebars = new CreateSidebars($args);


    //var_dump($CreateSidebars);

























