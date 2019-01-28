<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 




add_shortcode('basic_contact_form','basic_contact_form_function');

function basic_contact_form_function(){

    $options = array(

        array(
            'id'		    => 'usename',
            //'field_name'		    => 'some_id_text_field_1',
            'title'		    => __('Username','text-domain'),
            'details'	    => __('Write your username','text-domain'),
            'type'		    => 'text',
            'default'		=> '',
            'placeholder'   => __('Username','text-domain'),
        ),

array(
    'id'		    => 'password',
    //'field_name'		    => 'field_name',
    'title'		    => __('Password','text-domain'),
    'details'	    => __('Write your password','text-domain'),
    'type'		    => 'password',
    'password_meter'=> true,
    'default'		=> '',
    'placeholder'   => __('password','text-domain'),
),

        array(
            'id'		    => 'password2',
            //'field_name'		    => 'some_id_text_field_1',
            'title'		    => __('Password confirm','text-domain'),
            'details'	    => __('Write password to confirm','text-domain'),
            'type'		    => 'password',
            'password_meter'=> false,
            'default'		=> '',
            'placeholder'   => __('password','text-domain'),
        ),

        array(
            'id'		    => 'submit',
            //'field_name'		    => 'some_id_text_field_1',
            'title'		    => __('','text-domain'),
            'details'	    => __('','text-domain'),
            'type'		    => 'submit',
            'password_meter'=> false,
            'default'		=> '',
            'value'		=> 'Submit',
        ),

    );




    $fieldTemplate = '<div class="input-wrapper">
<div class="col-3">
<div style="" class="input-title"><b>{title}</b></div>
<div class="details">{details}</div>
</div>
<div class="col-6">
<div class="output">{output}</div>
</div>
</div>';


    $args = array(
        'item_name' 	        => 'PickPlugins',
        'item_version' 	        => '1.0.0',
        'options' 	            => $options,
        'fieldTemplate' 	    => $fieldTemplate,



    );

    $CreateUserForm = new CreateUserForm();

    return $CreateUserForm->display_form($args);

}
















