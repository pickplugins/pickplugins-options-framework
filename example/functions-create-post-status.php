<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 







    $args = array(
        'unreadx' => array(
            'label'                     => _x( 'UnreadX', 'post' ),
            'public'                    => true,
            'exclude_from_search'       => false,
            'show_in_admin_all_list'    => true,
            'show_in_admin_status_list' => true,
            'label_count'               => _n_noop( 'Unread <span class="count">(%s)</span>', 'Unread <span class="count">(%s)</span>' ),
        ),
    );

    $CreatePostStatus = new CreatePostStatus($args);


    //var_dump($CreateSidebars);

























