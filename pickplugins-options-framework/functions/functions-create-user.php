<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 






add_shortcode('create_user_demo','create_user_demo');

function create_user_demo(){


    $args = array(
        'username'    => 'demo_post', // Optional
        'password' 	  => '', // Optional
        'email'       => 'hasan@gmail.com', // Required
        'auto_genrate_username'       => true,
        'user_meta' => array(

        ),
    );

    $CreateUser = new CreateUser();

    $userId = $CreateUser->create_user($args);

    var_dump($userId);
    //echo $userId;
}
























