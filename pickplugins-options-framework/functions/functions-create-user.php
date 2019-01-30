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
        'email'       => 'hasan@gmail50.com', // Required
        'user_meta' => array(
            'nickname'=>'Dummy nickname',
            'first_name'=>'My first_name',
            'last_name'=>'My last_name',
            'description'=>'My description',
            'wp_user_level'=> 3,



        ),
    );

    $CreateUser = new CreateUser();

    $userId = $CreateUser->create_user($args);

    var_dump($userId);

}
























