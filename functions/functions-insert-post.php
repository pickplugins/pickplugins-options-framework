<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 






add_shortcode('InsertPost','insert_post');

function insert_post(){

    $args = array(
        'args' => array(
            //'ID'=> 30,
            'post_author'=> 1,
            'post_title'=> 'Post Title Demo',
            'post_content'=> 'Post Content Demo',
            'post_type'=> 'post',
            'post_status'=> 'publish',

        ),
        'meta_fields' => array(
            'meta_field_1' => 'Hello Meta field 1',
            'meta_field_2' => 'Hello Meta field 2',
            'meta_field_3' => array('Hello Meta field 1','Hello Meta field 2'),
        ),



    );

    $InsertPost = new InsertPost();
    $PostID = $InsertPost->insert_post($args);



    var_dump($PostID);

}























