<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 


/*Input fields

 * Text
 * Textarea
 * Checkbox
 * Radio
 * Select
 * number
 * range
 * url
 * tel
 * email
 * search
 * time
 * date
 * datetime
 * week
 * dropdown-pages
 * colorpicker
 * media
 */


$section_1_options = array(

    'section_title' 	=> __( 'Section Title 1', 'text-domain' ),
    'priority' => 10,

    'options' 	=> array(

        array(
            'id'		    => 'some_id_text_field',
            'title'		    => __('Text Field' ,'text-domain'),
            'details'	    => __('Description of text field','text-domain'),
            'type'		    => 'text',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),
        array(
            'id'		    => 'number_field',
            'title'		    => __('number Field' ,'text-domain'),
            'details'	    => __('Description of number field','text-domain'),
            'type'		    => 'number',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),
        array(
            'id'		    => 'url_field',
            'title'		    => __('url Field' ,'text-domain'),
            'details'	    => __('Description of url field','text-domain'),
            'type'		    => 'url',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),
        array(
            'id'		    => 'tel_field',
            'title'		    => __('tel Field' ,'text-domain'),
            'details'	    => __('Description of tel field','text-domain'),
            'type'		    => 'tel',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),array(
            'id'		    => 'email_field',
            'title'		    => __('email Field' ,'text-domain'),
            'details'	    => __('Description of email field','text-domain'),
            'type'		    => 'email',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),array(
            'id'		    => 'search_field',
            'title'		    => __('search Field' ,'text-domain'),
            'details'	    => __('Description of search field','text-domain'),
            'type'		    => 'search',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),
        array(
            'id'		    => 'time_field',
            'title'		    => __('time Field' ,'text-domain'),
            'details'	    => __('Description of time field','text-domain'),
            'type'		    => 'time',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),
        array(
            'id'		    => 'date_field',
            'title'		    => __('date Field' ,'text-domain'),
            'details'	    => __('Description of date field','text-domain'),
            'type'		    => 'date',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),
        array(
            'id'		    => 'datetime_field',
            'title'		    => __('datetime Field' ,'text-domain'),
            'details'	    => __('Description of time field','text-domain'),
            'type'		    => 'datetime',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),        array(
            'id'		    => 'week_field',
            'title'		    => __('week Field' ,'text-domain'),
            'details'	    => __('Description of week field','text-domain'),
            'type'		    => 'week',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),


        array(
            'id'		    => 'textarea_field',
            'title'		    => __('Textarea Field' ,'text-domain'),
            'details'	    => __('Description of Textarea field','text-domain'),
            'type'		    => 'textarea',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),
        array(
            'id'		=> 'checkbox_field',
            'title'		=> __('Checkbox  Field','text-domain'),
            'details'	    => __('Description of Checkbox field','text-domain'),
            'default'		=> array('option_3','option_2'),
            'value'		=> array('option_2'),
            'type'		    => 'checkbox',
            'args'		=> array(
                'option_1'	=> __('Option 1','text-domain'),
                'option_2'	=> __('Option 2','text-domain'),
                'option_3'	=> __('Option 3','text-domain'),
                'option_4'	=> __('Option 4','text-domain'),
            ),
        ),
        array(
            'id'		=> 'radio_field',
            'title'		=> __('Radio Field','text-domain'),
            'details'	=> __('Description of radio field','text-domain'),
            'default'		=> 'option_2',
            'value'		=> 'option_2',
            'type'		    => 'radio',
            'args'		=> array(
                'option_1'	=> __('Option 1','text-domain'),
                'option_2'	=> __('Option 2','text-domain'),
                'option_3'	=> __('Option 3','text-domain'),
                'option_4'	=> __('Option 4','text-domain'),
            ),
        ),
        array(
            'id'		=> 'select_field',
            'title'		=> __('Select Field','text-domain'),
            'details'	=> __('Description of select field','text-domain'),
            'default'		=> 'option_2',
            'value'		=> 'option_2',
            'type'		    => 'select',
            'args'		=> array(
                'option_1'	=> __('Option 1','text-domain'),
                'option_2'	=> __('Option 2','text-domain'),
                'option_3'	=> __('Option 3','text-domain'),
                'option_4'	=> __('Option 4','text-domain'),
            ),
        ),
        array(
            'id'		=> 'range_field',
            'title'		=> __('Range field','text-domain'),
            'details'	=> __('Description of Range field','text-domain'),
            'default'		=> '75',
            'value'		=> '70',
            'type'		    => 'range',
            'args'		=> array('min' => '0','max' => '100','step' => '1'),
        ),
        array(
            'id'		    => 'dropdown_pages_field',
            'title'		    => __('dropdown pages Field' ,'text-domain'),
            'details'	    => __('Description of dropdown-pages field','text-domain'),
            'type'		    => 'dropdown-pages',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),

        array(
            'id'		    => 'colorpicker_field',
            'title'		    => __('colorpicker Field' ,'text-domain'),
            'details'	    => __('Description of colorpicker field','text-domain'),
            'type'		    => 'colorpicker',
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),

        array(
            'id'		    => 'media_field',
            'title'		    => __('media Field' ,'text-domain'),
            'details'	    => __('Description of media field','text-domain'),
            'type'		    => 'media',
            'mime_type'		    => 'audio', //audio, image
            'default'		=> 'Default Text',
            'placeholder'   => __('Text value','text-domain'),
        ),





    )
);




$args = array(
	'taxonomy'       => 'category',
    'sections' 	        => array(
        'section-1'        => $section_1_options,
        //'section-2'        => $section_2_options,
        //'sections-3'        => $sections_3_options,
        //'sections-4'        => $sections_4_options,
    ),
);

$AddMenuPage = new CustomizerEdit( $args );


























