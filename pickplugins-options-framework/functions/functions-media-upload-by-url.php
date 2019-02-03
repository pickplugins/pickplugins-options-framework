<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 






add_shortcode('upload_file_demo','upload_file_demo');

function upload_file_demo(){


    $args = array(
        'file_src_url'      => 'https://i.imgur.com/CkhKEkY.jpg', // Optional
        'file_title' 	    => 'Hello Title', // Optional
        'timeout'           => 5, // Second

    );

    $MediaUploadByURL = new MediaUploadByURL();

    $fileId = $MediaUploadByURL->upload_file($args);

    var_dump($fileId);

}
























