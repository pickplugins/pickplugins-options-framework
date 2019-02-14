<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 





$page_1_options = array(

    'page_nav' 	=> __( '<i class="far fa-dot-circle"></i> Nav Title 1', 'text-domain' ),
    'priority' => 10,
    'page_settings' => array(

        'section_0' => array(
            'title' 	=> 	__('This is Section Title 0','text-domain'),
            //'nav_title' 	=> 	__('This is nav Title 00','text-domain'),
            'description' 	=> __('This is section details','text-domain'),
            'options' 	=> array(

//                array(
//                    'id'		    => 'text_field',
//                    //'field_name'		    => 'some_id_text_field_1',
//                    'title'		    => __('Text Field','text-domain'),
//                    'details'	    => __('Description of text field','text-domain'),
//                    'type'		    => 'text',
//                    'default'		=> 'Default Text',
//                    'placeholder'   => __('Text value','text-domain'),
//                ),
                array(
                    'id'		    => 'text_multi_field_0',
                    //'field_name'		    => 'text_multi_field',
                    'title'		    => __('Multi Text Field','text-domain'),
                    'details'	    => __('Description of multi text field','text-domain'),
                    'value'		    => array('Default Text Val #1', 'Default Text Val #2', 'Default Text Val #3'),
                    'default'		=> array('Default Text #1', 'Default Text #2', 'Default Text #3'),
                    'placeholder'   => __('Text value','text-domain'),
                    'type'		    => 'text_multi',
                    'remove_text'   => '<i class="fas fa-times"></i>',
                ),
            )
        ),

        'section_1' => array(
            'title' 	=> 	__('This is Section Title 1','text-domain'),
            'nav_title' 	=> 	__('This is nav Title 01','text-domain'),
            'description' 	=> __('This is section details','text-domain'),
            'options' 	=> array(

//                array(
//                    'id'		    => 'text_field',
//                    //'field_name'		    => 'some_id_text_field_1',
//                    'title'		    => __('Text Field','text-domain'),
//                    'details'	    => __('Description of text field','text-domain'),
//                    'type'		    => 'text',
//                    'default'		=> 'Default Text',
//                    'placeholder'   => __('Text value','text-domain'),
//                ),
                array(
                    'id'		    => 'text_multi_field',
                    //'field_name'		    => 'text_multi_field',
                    'title'		    => __('Multi Text Field','text-domain'),
                    'details'	    => __('Description of multi text field','text-domain'),
                    'value'		    => array('Default Text Val #1', 'Default Text Val #2', 'Default Text Val #3'),
                    'default'		=> array('Default Text #1', 'Default Text #2', 'Default Text #3'),
                    'placeholder'   => __('Text value','text-domain'),
                    'type'		    => 'text_multi',
                    'remove_text'   => '<i class="fas fa-times"></i>',
                ),
                array(
                    'id'		    => 'textarea_field',
                    //'field_name'	=> 'textarea_field',
                    'title'		    => __('Textarea Field','text-domain'),
                    'details'	    => __('Description of textarea field','text-domain'),
                    'value'		    => __('Textarea value','text-domain'),
                    'default'		=> __('Default Text Value','text-domain'),
                    'type'		    => 'textarea',
                    'placeholder'   => __('Textarea placeholder','text-domain'),
                ),
                array(
                    'id'		=> 'checkbox_multi_field',
                    //'field_name'		    => 'text_multi_field',
                    'title'		=> __('Checkbox Multi Field','text-domain'),
                    'details'	=> __('Description of checkbox multi field','text-domain'),
                    'default'		=> array('option_3','option_2'),
                    'value'		=> array('option_2'),
                    'type'		    => 'checkbox_multi',
                    'args'		=> array(
                        'option_1'	=> __('Option 1','text-domain'),
                        'option_2'	=> __('Option 2','text-domain'),
                        'option_3'	=> __('Option 3','text-domain'),
                        'option_4'	=> __('Option 4','text-domain'),
                    ),
                ),

                array(
                    'id'		=> 'checkbox_field',
                    //'field_name'		    => 'text_multi_field',
                    'title'		=> __('Checkbox  Field','text-domain'),
                    'details'	=> __('Description of checkbox field','text-domain'),
                    'default'		=> array('option_3','option_2'),
                    'value'		=> 'option_1',
                    'type'		    => 'checkbox',
                    'args'		=> array(
                        'option_1'	=> __('Option 1','text-domain'),
                    ),
                ),


                array(
                    'id'		=> 'radio_field',
                    //'field_name'		    => 'text_multi_field',
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
                    //'field_name'		    => 'text_multi_field',
                    'title'		=> __('Select Field','text-domain'),
                    'details'	=> __('Description of select field','text-domain'),
                    'default'		=> 'option_2',
                    'value'		=> 'option_2',
                    'type'		    => 'select',
                    'args'		=> array(
                        'option_1'	=> __('Option 1','text-domain'),
                        'option_2'	=> __('Option 2','text-domain'),
                        'option_3'	=> __('Option 3','text-domain'),
                    ),
                ),
                array(
                    'id'		=> 'select_field_multiple',
                    //'field_name'		    => 'text_multi_field',
                    'title'		=> __('Select Field','text-domain'),
                    'details'	=> __('Description of select field','text-domain'),
                    'default'		=> 'option_2',
                    'value'		=> 'option_2',
                    'multiple'		=> true,
                    'type'		    => 'select',
                    'args'		=> array(
                        'option_1'	=> __('Option 1','text-domain'),
                        'option_2'	=> __('Option 2','text-domain'),
                        'option_3'	=> __('Option 3','text-domain'),
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
                    'id'		=> 'range_input_field',
                    'title'		=> __('Range field','text-domain'),
                    'details'	=> __('Description of Range field','text-domain'),
                    'default'		=> '75',
                    'value'		=> '70',
                    'type'		    => 'range_input',
                    'args'		=> array('min' => '0','max' => '100','step' => '1'),
                ),
                array(
                    'id'		    => 'switcher_field',
                    'title'		    => __('Switcher Field','text-domain'),
                    'details'	    => __('Description of switcher field','text-domain'),
                    'value'		    => '',
                    'default'		=> '1',
                    'type'		=> 'switcher',
                    'args'		=> array(
                        'on'	=> __('On','text-domain'),
                        'off'	=> __('Off','text-domain'),
                    ),

                ),
                array(
                    'id'		=> 'switch_icon_field',
                    'title'		=> __('Switch icon Field','text-domain'),
                    'details'	=> __('Description of switch icon field','text-domain'),
                    'value'		=> 'option_2',
                    'type'		=> 'switch',
                    'args'		=> array(
                        'option_1'	=> __('<i class="fas fa-align-left"></i>','text-domain'),
                        'option_2'	=> __('<i class="fas fa-align-center"></i>','text-domain'),
                        'option_3'	=> __('<i class="fas fa-align-right"></i>','text-domain'),
                    ),
                ),
                array(
                    'id'		=> 'switch_field',
                    'title'		=> __('Switch Field','text-domain'),
                    'details'	=> __('Description of switch field','text-domain'),
                    'value'		=> 'option_2',
                    'default'	=> 'option_2',
                    'type'		=> 'switch',

                    'args'		=> array(
                        'option_1'	=> __('Option 1','text-domain'),
                        'option_2'	=> __('Option 2','text-domain'),
                        'option_3'	=> __('Option 3','text-domain'),
                        'option_4'	=> __('Option 4','text-domain'),
                    ),
                ),
                array(
                    'id'		=> 'switch_multi_field6',
                    'title'		=> __('Switch multi Field','text-domain'),
                    'details'	=> __('Description of switch multi field','text-domain'),
                    'value'		=> array('option_3'),
                    'default'		=> array('option_2','option_4'),
                    'type'		=> 'switch_multi',
                    'args'		=> array(
                        'option_1'	=> __('Option 1','text-domain'),
                        'option_2'	=> __('Option 2','text-domain'),
                        'option_3'	=> __('Option 3','text-domain'),
                        'option_4'	=> __('Option 4','text-domain'),
                    ),
                ),

                array(
                    'id'		=> 'switch_img_field',
                    'title'		=> __('Switch image Field','text-domain'),
                    'details'	=> __('Description of switch image field','text-domain'),
                    'default'	=> 'option_2',
                    'width'     =>'100px',
                    'height'    =>'auto',
                    'type'		=> 'switch_img',
                    'args'		=> array(
                        'option_1'	=> array('src'=>'https://i.imgur.com/YiUyAgA.png'),
                        'option_2'	=> array('src'=>'https://i.imgur.com/tWGz0EU.png'),
                        'option_3'	=> array('src'=>'https://i.imgur.com/GT3VkYX.png'),
                    ),
                ),
                array(
                    'id'		    => 'field_password',
                    //'field_name'	=> 'text_field', // optional
                    'title'		    => __('Password','text-domain'),
                    'details'	    => __('Description of password','text-domain'),
                    'value'		    => '',
                    'password_meter'		    => true,
                    'type'		=> 'password',
                    'default'		=> __('','text-domain'),
                    'placeholder'   => __('Password','text-domain'),
                ),
                array(
                    'id'		=> 'time_format_field',
                    'title'		=> __('Time format Field','text-domain'),
                    'details'	=> __('Description of time format field','text-domain'),
                    'args'		=> array('g:i a' ,'g:i A', 'H:i'),
                    'type'		=> 'time_format',
                    'default'	=> 'H:i',
                ),
                array(
                    'id'		=> 'date_format_field',
                    'title'		=> __('Date format Field','text-domain'),
                    'details'	=> __('Description of date format field','text-domain'),
                    'value'	=> 'Y-m-d',
                    'args'		=> array('F j, Y' ,'Y-m-d', 'm/d/Y' ,'d/m/Y' ),
                    'default'	=> 'F j, Y',
                    'type'		=> 'date_format',
                ),
                array(
                    'id'		    => 'datepicker_field',
                    'title'		    => __('Date picker field','text-domain'),
                    'details'	    => __('Description of date picker field','text-domain'),
                    'date_format'	=> 'dd-mm-yy',
                    'placeholder'	=> 'dd-mm-yy',
                    'default'		=> date('d-m-Y'), // today date
                    'value'		=> date('d-m-Y'), // today date
                    'type'		=> 'datepicker',

                ),
                array(
                    'id'		=> 'colorpicker_field',
                    'title'		=> __('Color picker field','text-domain'),
                    'details'	=> __('Description of colorpicker field','text-domain'),
                    'default'	=> '#1e73be',
                    'value'		=> '#ff0000',
                    'type'		=> 'colorpicker',


                ),
                array(
                    'id'		=> 'colorpicker_multi_field',
                    'title'		=> __('Multi colorpicker Field','text-domain'),
                    'details'	=> __('Description of multi colorpicker field','text-domain'),
                    'default'		=> array('#dd3333','#1e73be','#8224e3'),
                    'value'		=> array('#ff0000','#1e73be','#8224e3'),
                    'type'		=> 'colorpicker_multi',
                ),
                array(
                    'id'		=> 'link_color_field',
                    'title'		=> __('Link Color picker field','text-domain'),
                    'details'	=> __('Description of Link Color field','text-domain'),
                    'args'		=> array('link'	=> '#1B2A41','hover' => '#3F3244','active' => '#60495A','visited' => '#7D8CA3' ),
                    'type'		=> 'link_color',
                ),
                array(
                    'id'		=> 'icon_field',
                    'title'		=> __('Icon Field','text-domain'),
                    'details'	=> __('Description of icon field','text-domain'),
                    'default'	=> 'fas fa-bomb',
                    'type'		=> 'icon',
                    'args'		=> 'FONTAWESOME_ARRAY',
                ),
                array(
                    'id'		=> 'icon_multi_field2',
                    'title'		=> __('Icon multi Field','text-domain'),
                    'details'	=> __('Description of multi icon field','text-domain'),
                    'default'	=> array('fas fa-bomb','fas fa-address-book'),
                    'args'		=> 'FONTAWESOME_ARRAY',
                    'type'		=> 'icon_multi',
                ),











            )
        ),


    ),
);



$page_2_options = array(

    'page_nav' 	=> __( '<i class="fas fa-cog"></i> Nav Title 2', 'text-domain' ),
    'priority' => 10,
    'page_settings' => array(

        'section_20' => array(
            'title' 	=> 	__('This is Section Title 10','text-domain'),
            'nav_title' 	=> 	__('This is nav Title 10','text-domain'),
            'description' 	=> __('This is section details','text-domain'),
            'options' 	=> array(

//                array(
//                    'id'		    => 'text_field',
//                    //'field_name'		    => 'some_id_text_field_1',
//                    'title'		    => __('Text Field','text-domain'),
//                    'details'	    => __('Description of text field','text-domain'),
//                    'type'		    => 'text',
//                    'default'		=> 'Default Text',
//                    'placeholder'   => __('Text value','text-domain'),
//                ),
                array(
                    'id'		    => 'text_multi_field_20',
                    //'field_name'		    => 'text_multi_field',
                    'title'		    => __('Multi Text Field','text-domain'),
                    'details'	    => __('Description of multi text field','text-domain'),
                    'value'		    => array('Default Text Val #1', 'Default Text Val #2', 'Default Text Val #3'),
                    'default'		=> array('Default Text #1', 'Default Text #2', 'Default Text #3'),
                    'placeholder'   => __('Text value','text-domain'),
                    'type'		    => 'text_multi',
                    'remove_text'   => '<i class="fas fa-times"></i>',
                ),
            )
        ),


        'section_2' => array(
            'title' 	=> 	__('This is Section Title 12','text-domain'),
            'nav_title' 	=> 	__('This is nav Title 12','text-domain'),
            'description' 	=> __('This is section details','text-domain'),
            'options' 	=> array(

                array(
                    'id'		=> 'sidebars_field',
                    'title'		=> __('Sidebar select Field','text-domain'),
                    'details'	=> __('Description of sidebars select field','text-domain'),
                    //'multiple'=> true,
                    'type'		=> 'select',
                    'args'		=> 'SIDEBARS_ARRAY',
                ),
                array(
                    'id'		=> 'menu_select_field',
                    'title'		=> __('Menu select Field','text-domain'),
                    'details'	=> __('Description of menu select field','text-domain'),
                    //'multiple'=> true,
                    'type'		=> 'select',
                    'args'		=> 'MENUS_ARRAY',
                ),
                array(
                    'id'		=> 'user_roles_field',
                    'title'		=> __('User roles select Field','text-domain'),
                    'details'	=> __('Description of user roles select field','text-domain'),
                    'multiple'=> true,
                    'type'		=> 'select',
                    'args'		=> 'USER_ROLES',
                ),
                array(
                    'id'		=> 'page_ids_field',
                    'title'		=> __('Page ids Field','text-domain'),
                    'details'	=> __('Description of page ids field','text-domain'),
                    //'multiple'=> true,
                    'type'		=> 'select',
                    'args'		=> 'PAGES_IDS_ARRAY',
                ),
                array(
                    'id'		=> 'post_ids_field',
                    'title'		=> __('Post ids select Field','text-domain'),
                    'details'	=> __('Description of post ids field','text-domain'),
                    //'multiple'=> true,
                    'type'		=> 'select',
                    'args'		=> 'POSTS_IDS_ARRAY',
                ),
                array(
                    'id'		=> 'post_type_field',
                    'title'		=> __('Post types Field','text-domain'),
                    'details'	=> __('Description of Post types select field','text-domain'),
                    'multiple'=> true,
                    'type'		=> 'select',
                    'args'		=> 'POST_TYPES_ARRAY',
                ),
                array(
                    'id'		=> 'thumb_sizes_field',
                    'title'		=> __('Thumb sizes Field','text-domain'),
                    'details'	=> __('Description of thumb size select field','text-domain'),
                    'multiple'=> true,
                    'type'		=> 'select',
                    'args'		=> 'THUMB_SIEZS_ARRAY',
                ),
                array(
                    'id'		=> 'terms_select_field',
                    'title'		=> __('Terms select Field','text-domain'),
                    'details'	=> __('Description of terms select field','text-domain'),
                    'multiple'=> true,
                    'type'		=> 'select',
                    'args'		=> 'TAX_%category%',
                ),
                array(
                    'id'		=> 'select2_user_field5',
                    'title'		=> __('Select2 User Field','text-domain'),
                    'details'	=> __('Description of select2 user field','text-domain'),
                    'default'		=> '1',
                    'multiple'		=> false,
                    'type'		=> 'select',
                    'args'		=> 'USER_IDS_ARRAY',
                ),
                array(
                    'id'		=> 'user_field',
                    'title'		=> __('User Field','text-domain'),
                    'details'	=> __('Description of user field','text-domain'),
                    'default'	=> array(1,11),
                    'type'		=> 'user',
                    'args'		=> 'USER_IDS_ARRAY',
                )









            )
        ),

    ),
);



$page_3_options = array(

    'page_nav' 	=> __( '<i class="far fa-bell"></i> Nav Title 3', 'text-domain' ),
    'priority' => 10,
    'page_settings' => array(

        'section_3' => array(
            'title' 	=> 	__('This is Section Title 20','text-domain'),
            'nav_title' 	=> 	__('This is nav Title 20','text-domain'),
            'description' 	=> __('This is section details','text-domain'),
            'options' 	=> array(

                array(
                    'id'		=> 'color_sets_multi_field',
                    'title'		=> __('Color sets Field','text-domain'),
                    'details'	=> __('Description of color sets field','text-domain'),
                    'sets'		=> array(
                        'option_1'=> array('#dd3333','#1e73be','#8224e3'),
                        'option_2'=> array('#e07000','#1e73be','#8224e3'),
                        'option_3'=> array('#e07000','#1e73be','#8224e3'),
                    ),
                    'type'		=> 'color_sets',
                    'value'		=> 'option_2',
                    'default'		=> 'option_1',
                    'args'		=> array(
                        'width'	    => '30px',
                        'height'	=> '30px',
                        'style'	=> '',
                    ),

                ),

                array(
                    'id'		=> 'color_palette_field',
                    'title'		=> __('Color palette Field','text-domain'),
                    'details'	=> __('Description of color palette field','text-domain'),
                    'colors'		=> array('#dd3333','#1e73be','#8224e3','#e07000','#1e73be','#8224e3'),
                    'type'		=> 'color_palette',
                    'args'		=> array(
                        'width'	    => '30px',
                        'height'	=> '30px',
                        'style'	    => '',
                    ),
                ),
                array(
                    'id'		=> 'color_palette_multi_field',
                    'title'		=> __('Color palette multi Field','text-domain'),
                    'details'	=> __('Description of color palette multi field','text-domain'),
                    'colors'		=> array('#dd3333','#1e73be','#8224e3','#e07000','#1e73be','#8224e3'),
                    'type'		=> 'color_palette_multi',
                    'args'		=> array(
                        'width'	    => '30px',
                        'height'	=> '30px',
                        'style'	=> '',
                    ),

                ),
                array(
                    'id'		    => 'field_media',
                    'title'		    => __('Media ','text-domain'),
                    'details'	    => __('Field media description','text-domain'),
                    'placeholder'	=> 'https://i.imgur.com/GD3zKtz.png',
                    'type'		=> 'media',
                ),
                array(
                    'id'		=> 'field_media_multi3',
                    'title'		=> __('Media multi','text-domain'),
                    'details'	=> __('Media multi field description.','text-domain'),
                    'type'		=> 'media_multi',
                ),
                array(
                    'id'		=> 'repeatable_field5',
                    'title'		=> __('Repeatable Field','text-domain'),
                    'details'	=> __('Repeatable Description','text-domain'),
                    'collapsible'=>true,
                    'type'		=> 'repeatable',
                    'title_field' => 'text_field',
                    'fields'    => array(

                        array('type'=>'hello_world', 'default'=>'Hello 3', 'item_id'=>'hello_world_field', 'name'=>'Hello world Field'),
                        array('type'=>'text', 'default'=>'Hello 3', 'item_id'=>'text_field', 'name'=>'Text Field'),
                        array('type'=>'number', 'default'=>'123456', 'item_id'=>'number_field', 'name'=>'Number Field'),
                        array('type'=>'tel', 'default'=>'', 'item_id'=>'tel_field', 'name'=>'Tel Field'),
                        array('type'=>'time', 'default'=>'', 'item_id'=>'time_field', 'name'=>'Time Field'),
                        array('type'=>'url', 'default'=>'', 'item_id'=>'url_field', 'name'=>'URL Field'),

                        array('type'=>'date', 'default'=>'', 'item_id'=>'date_field', 'name'=>'Date Field'),
                        array('type'=>'month', 'default'=>'', 'item_id'=>'month_field', 'name'=>'Month Field'),
                        array('type'=>'search', 'default'=>'', 'item_id'=>'search_field', 'name'=>'Search Field'),


                        array('type'=>'color', 'default'=>'', 'item_id'=>'color_field', 'name'=>'Color Field'),
                        array('type'=>'email', 'default'=>'support@hello.com', 'item_id'=>'email_field', 'name'=>'Email Field'),
                        array('type'=>'textarea', 'default'=>'Textarea content', 'item_id'=>'textarea_field', 'name'=>'Textarea Field'),
                        array('type'=>'select', 'default'=>'option_1', 'item_id'=>'select_field', 'name'=>'Select Field', 'args'=> array('option_1'=>'Option 1', 'option_2'=>'Option 2', 'option_3'=>'Option 3')),
                        array('type'=>'radio', 'default'=>'option_1', 'item_id'=>'radio_field', 'name'=>'Radio Field', 'args'=>
                            array('option_1'=>'Option 1', 'option_2'=>'Option 2', 'option_3'=>'Option 3')),
                        array('type'=>'checkbox', 'default'=>array('option_1','option_3'), 'item_id'=>'checkbox_field', 'name'=>'Checkbox Field', 'args'=> array('option_1'=>'Option 1', 'option_2'=>'Option 2', 'option_3'=>'Option 3')),
                    ),
                )

            )
        ),
    ),
);


$page_4_options = array(

    'page_nav' 	=> __( '<i class="fas fa-bomb"></i> Nav Title 4', 'text-domain' ),
    'priority' => 10,
    'page_settings' => array(

        'section_4' => array(
            'title' 	=> 	__('This is Section Title 30','text-domain'),
            'nav_title' 	=> 	__('This is nav Title 30','text-domain'),
            'description' 	=> __('This is section details','text-domain'),
            'options' 	=> array(

                array(
                    'id'		    => 'google_map_field',
                    'title'		    => __('Google Map Field','text-domain'),
                    'details'	    => __('Description of google map field','text-domain'),
                    'placeholder'   => __('Text value','text-domain'),
                    'preview'       => true,
                    'type'		    => 'google_map',
                    'value'		=> array(
                        'lat'	=> '25.75',
                        'lng'	=> '89.25',
                        'zoom'	=> '5',
                        'title'	=> 'Map Title',
                        'apikey'	=> '',
                    ),
                    'default'	=> array(
                        'lat'	=> '25.75',
                        'lng'	=> '89.25',
                        'zoom'	=> '5',
                        'title'	=> 'Map Title',
                        'apikey'	=> '',

                    ),
                    'args'		=> array(
                        'lat'	=> __('Latitude','text-domain'),
                        'lng'	=> __('Longitude','text-domain'),
                        'zoom'	=> __('Zoom','text-domain'),
                        'title'	=> __('Title','text-domain'),
                        'apikey'	=> __('API key','text-domain'),
                    ),
                ),
                array(
                    'id'		    => 'post_objects',
                    'title'		    => __('Post Objects Field','text-domain'),
                    'details'	    => __('Description of Post Objects field','text-domain'),
                    'sortable'		=> true,
                    'value'		    => array(),
                    'default'		=> array('post_title','menu_order','post_author'),
                    'type'		    => 'post_objects',
                    'args'		=> array(
                        'thumbnail'	=> __('Post Thumbnail','text-domain'),
                        'post_title'	=> __('Post Title','text-domain'),
                        'post_content'	=> __('Post Content','text-domain'),
                        'post_excerpt'	=> __('Post Excerpt','text-domain'),
                        'post_author'	=> __('Post Author','text-domain'),
                        'post_date'	    => __('Post Date','text-domain'),
                        'comment_count'	=> __('Comment Count','text-domain'),
                        'menu_order'	=> __('Menu Order','text-domain'),
                    ),
                ),


                array(
                    'id'		    => 'dimensions_field',
                    'title'		    => __('Dimensions Field','text-domain'),
                    'details'	    => __('Description of dimensions field','text-domain'),
                    'type'		=> 'dimensions',
                    'value'		=> array(
                        'width'	    => array('val'=>'54', 'unit'=>'px' ),
                        'height'	    => array('val'=>'54', 'unit'=>'px' ),


                    ),
                    'default'		=> array(
                        'width'	    => array('val'=>'54', 'unit'=>'px' ),
                        'height'	    => array('val'=>'54', 'unit'=>'px' ),

                    ),


                    'args'		=> array(
                        'width'	=> array('name'=>__('Width','text-domain'), 'unit'=>'px'),
                        'height'	=> array('name'=>__('Height','text-domain'), 'unit'=>'px'),


                    ),
                ),
                array(
                    'id'		    => 'margin_field',
                    'title'		    => __('Margin Field','text-domain'),
                    'details'	    => __('Description of margin field','text-domain'),
                    'type'		=> 'margin',
                    'value'		=> array(
                        'top'	    => array('val'=>'54', 'unit'=>'px' ),
                        'right'	    => array('val'=>'54', 'unit'=>'px' ),
                        'bottom'	=> array('val'=>'54', 'unit'=>'px' ),
                        'left'	    => array('val'=>'54', 'unit'=>'px' ),

                    ),
                    'default'		=> array(
                        'top'	    => array('val'=>'54', 'unit'=>'px' ),
                        'right'	    => array('val'=>'54', 'unit'=>'px' ),
                        'bottom'	=> array('val'=>'54', 'unit'=>'px' ),
                        'left'	    => array('val'=>'54', 'unit'=>'px' ),

                    ),


                    'args'		=> array(
                        'top'	=> array('name'=>__('Top','text-domain'), 'unit'=>'px'),
                        'right'	=> array('name'=>__('Right','text-domain'), 'unit'=>'px'),
                        'bottom'	=> array('name'=>__('Bottom','text-domain'), 'unit'=>'px'),
                        'left'	=> array('name'=>__('Left','text-domain'), 'unit'=>'px'),

                    ),
                ),
                array(
                    'id'		    => 'padding_field',
                    'title'		    => __('Padding Field','text-domain'),
                    'details'	    => __('Description of padding field','text-domain'),
                    'type'		=> 'padding',
                    'value'		=> array(
                        'top'	    => array('val'=>'54', 'unit'=>'px' ),
                        'right'	    => array('val'=>'54', 'unit'=>'%' ),
                        'bottom'	=> array('val'=>'54', 'unit'=>'em' ),
                        'left'	    => array('val'=>'54', 'unit'=>'px' ),

                    ),
                    'default'		=> array(
                        'top'	    => array('val'=>'54', 'unit'=>'px' ),
                        'right'	    => array('val'=>'54', 'unit'=>'px' ),
                        'bottom'	=> array('val'=>'54', 'unit'=>'px' ),
                        'left'	    => array('val'=>'54', 'unit'=>'px' ),

                    ),


                    'args'		=> array(
                        'top'	=> array('name'=>__('Top','text-domain'), 'unit'=>'px'),
                        'right'	=> array('name'=>__('Right','text-domain'), 'unit'=>'px'),
                        'bottom'	=> array('name'=>__('Bottom','text-domain'), 'unit'=>'px'),
                        'left'	=> array('name'=>__('Left','text-domain'), 'unit'=>'px'),

                    ),
                ),
                array(
                    'id'		=> 'wp_editor_field',
                    'title'		=> __('WP editor Field','text-domain'),
                    'details'	=> __('Description of wp_editor field, please see detail here https://codex.wordpress.org/Function_Reference/wp_editor','text-domain'),
                    'editor_settings'=>array('textarea_name'=>'wp_editor_field', 'editor_height'=>'150px'),
                    'placeholder' => __('wp_editor value','text-domain'),
                    'default'		=> 'Editor content',
                    'type'		=> 'wp_editor',
                ),
                array(
                    'id'		=> 'select2_field5',
                    'title'		=> __('Select2 Single Field','text-domain'),
                    'details'	=> __('Description of select2 single field','text-domain'),
                    'default'		=> 'option_3',
                    'multiple'		=> false,
                    'type'		=> 'select2',
                    'args'		=> array(
                        'option_1'	=> __('Option 1','text-domain'),
                        'option_2'	=> __('Option 2','text-domain'),
                        'option_3'	=> __('Option 3','text-domain'),
                        'option_4'	=> __('Option 4','text-domain'),
                    ),
                ),
                array(
                    'id'		=> 'select2_multiple_field',
                    'title'		=> __('Select2 multiple Field','text-domain'),
                    'details'	=> __('Description of select2 multiple field','text-domain'),
                    'default'		=> array('option_3'),
                    'multiple'		=> true,
                    'type'		=> 'select2',
                    'args'		=> array(
                        'option_1'	=> __('Option 1','text-domain'),
                        'option_2'	=> __('Option 2','text-domain'),
                        'option_3'	=> __('Option 3','text-domain'),
                        'option_4'	=> __('Option 4','text-domain'),
                    ),
                ),
                array(
                    'id'		=> 'faq_field',
                    'title'		=> __('FAQ field','text-domain'),
                    'details'	=> __('Description of faq field','text-domain'),
                    'type'		=> 'faq',
                    'args'		=> array(
                        array('title'=>'What is Lorem Ipsum?','link'=>'#', 'content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
                        array('title'=>'Why do we use it?','link'=>'#', 'content'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'),
                        array('title'=>'Where does it come from?','link'=>'#', 'content'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.'),
                    ),
                ),
                array(
                    'id'		=> 'field_grid',
                    'title'		=> __('Field Grid','user-verification'),
                    'details'	=> __('Description of grid field','user-verification'),
                    'width'		=> array('768px'=>'100%','992px'=>'50%', '1200px'=>'45%', ),
                    'height'		=> array('768px'=>'auto','992px'=>'150px', '1200px'=>'150px', ),
                    'type'		=> 'grid',
                    'args'		=> array(
                        array('title'=>'Post Grid','link'=>'https://www.pickplugins.com/', 'content'=>'', 'thumb'=>'https://i.imgur.com/or7wFbn.jpg'),
                        array('title'=>'Accordion','link'=>'https://www.pickplugins.com/', 'content'=>'','thumb'=>'https://i.imgur.com/qCXd3nZ.jpg' ),
                        array('title'=>'Woocommerce Product Slider','link'=>'https://www.pickplugins.com/', 'content'=>'','thumb'=>'https://i.imgur.com/CkhKEkY.jpg'),
                        array('title'=>'Team Showcase','link'=>'https://www.pickplugins.com/', 'content'=>'','thumb'=>'https://i.imgur.com/0fhJlpr.jpg'),
                        array('title'=>'Breadcrumb','link'=>'https://www.pickplugins.com/', 'content'=>'','thumb'=>'https://i.imgur.com/oE7nhsI.jpg'),
                        array('title'=>'Wishlist for WooCommerce','link'=>'https://www.pickplugins.com/', 'content'=>'','thumb'=>'https://i.imgur.com/8aAJwsg.jpg'),

                    ),
                ),


            )
        ),
    ),
);


$page_5_options = array(

    'page_nav' 	=> __( '<i class="fas fa-bomb"></i> Tools', 'text-domain' ),
    'priority' => 10,
    'page_settings' => array(

        'section_4' => array(
            'title' 	=> 	__('This is Section Title 40','text-domain'),
            'nav_title' 	=> 	__('This is nav Title 40','text-domain'),
            'description' 	=> __('This is section details','text-domain'),
            'options' 	=> array(

                array(
                    'id'		    => 'site_menus',
                    'title'		    => __('Create Menu','text-domain'),
                    'details'	    => __('You can register nav menus here. you can use these menu via <a target="_blank" href="https://developer.wordpress.org/reference/functions/wp_nav_menu/">wp_nav_menu()</a> function, example bellow.','pickthemes').'<br><code>&lt;?php wp_nav_menu( array("container" => false, "theme_location" => "header-menu", "menu_class" => "menu")); ?&gt; </code>',
                    'collapsible'   =>true,
                    'sortable'	=> false,
                    'type'		    => 'repeatable',
                    'title_field' => 'menu_name',
                    'fields'        => array(

                        array('type'=>'text', 'default'=>'menu_id', 'item_id'=>'menu_id', 'name'=>'Menu ID'),
                        array('type'=>'text', 'default'=>'Menu Name', 'item_id'=>'menu_name', 'name'=>'Menu Name'),
                    ),
                ),
                array(
                    'id'		=> 'site_sidebars',
                    'title'		=> __('Site sidebars','pickthemes'),
                    'details'	=> __('You can register sidebar here. you can display sidebar by <a href="https://codex.wordpress.org/Function_Reference/dynamic_sidebar">dynamic_sidebar()</a> function, example bellow.','pickthemes').'<br><code>&lt;?php if ( is_active_sidebar( \'sidebar-id\' )  ) : 
    dynamic_sidebar( "sidebar-id" );
endif; ?></code>',
                    'type'		    => 'repeatable',
                    'default'		=> '',
                    'collapsible'   =>true,
                    'sortable'	=> true,
                    'title_field' => 'name',
                    'fields'        => array(

                        array('type'=>'text', 'item_id'=>'id', 'name'=>'Sidebar ID'),
                        array('type'=>'text', 'item_id'=>'name', 'name'=>'Sidebar name'),
                        array('type'=>'text', 'item_id'=>'description', 'name'=>'Sidebar description'),
                        array('type'=>'text', 'item_id'=>'class', 'name'=>'Sidebar class'),
                        array('type'=>'text', 'item_id'=>'before_widget', 'name'=>'before_widget'),
                        array('type'=>'text', 'item_id'=>'after_widget', 'name'=>'after_widget'),
                        array('type'=>'text', 'item_id'=>'before_title', 'name'=>'before_title'),
                        array('type'=>'text', 'item_id'=>'after_title', 'name'=>'after_title'),

                    ),
                ),
                array(
                    'id'		=> 'site_post_types',
                    'title'		=> __('Custom post types','pickthemes'),
                    'details'	=> __('You can register custom post type here.','pickthemes'),
                    'type'		=> 'repeatable',
                    'default'		=> '',
                    'collapsible'=>true,
                    'sortable'	=> false,
                    'title_field' => 'singular_name',
                    'fields'    => array(

                        array('type'=>'text', 'item_id'=>'name', 'name'=>'name'),
                        array('type'=>'text', 'item_id'=>'singular_name', 'name'=>'Singular name'),
                        array('type'=>'text', 'item_id'=>'add_new', 'name'=>'Add new'),
                        array('type'=>'text', 'item_id'=>'add_new_item', 'name'=>'add new item'),
                        array('type'=>'text', 'item_id'=>'edit_item', 'name'=>'edit_item'),
                        array('type'=>'text', 'item_id'=>'new_item', 'name'=>'new_item'),
                        array('type'=>'text', 'item_id'=>'view_item', 'name'=>'view_item'),
                        array('type'=>'text', 'item_id'=>'search_items', 'name'=>'search_items'),
                        array('type'=>'text', 'item_id'=>'not_found', 'name'=>'not_found'),
                        array('type'=>'text', 'item_id'=>'not_found_in_trash', 'name'=>'not_found_in_trash'),
                        array('type'=>'text', 'item_id'=>'parent_item_colon', 'name'=>'parent_item_colon'),
                        array('type'=>'text', 'item_id'=>'all_items', 'name'=>'all_items'),
                        array('type'=>'text', 'item_id'=>'archives', 'name'=>'archives'),
                        array('type'=>'text', 'item_id'=>'attributes', 'name'=>'attributes'),
                        array('type'=>'text', 'item_id'=>'insert_into_item', 'name'=>'insert_into_item'),
                        array('type'=>'text', 'item_id'=>'uploaded_to_this_item', 'name'=>'uploaded_to_this_item'),
                        array('type'=>'text', 'item_id'=>'featured_image', 'name'=>'featured_image'),
                        array('type'=>'text', 'item_id'=>'set_featured_image', 'name'=>'set_featured_image'),
                        array('type'=>'text', 'item_id'=>'use_featured_image', 'name'=>'use_featured_image'),
                        array('type'=>'text', 'item_id'=>'menu_name', 'name'=>'menu_name'),
                        array('type'=>'text', 'item_id'=>'filter_items_list', 'name'=>'filter_items_list'),
                        array('type'=>'text', 'item_id'=>'items_list_navigation', 'name'=>'items_list_navigation'),
                        array('type'=>'text', 'item_id'=>'items_list', 'name'=>'items_list'),
                        array('type'=>'text', 'item_id'=>'name_admin_bar', 'name'=>'name_admin_bar'),
                        array('type'=>'text', 'item_id'=>'description', 'name'=>'description'),

                        array('type'=>'select', 'item_id'=>'public', 'name'=>'Public', 'args'=>array('true'=>'True', 'false'=>'False')),
                        array('type'=>'select', 'item_id'=>'exclude_from_search', 'name'=>'exclude_from_search', 'args'=>array('true'=>'True', 'false'=>'False')),
                        array('type'=>'select', 'item_id'=>'publicly_queryable', 'name'=>'publicly_queryable', 'args'=>array('true'=>'True', 'false'=>'False')),
                        array('type'=>'select', 'item_id'=>'show_ui', 'name'=>'show_ui', 'args'=>array('true'=>'True', 'false'=>'False')),
                        array('type'=>'select', 'item_id'=>'show_in_nav_menus', 'name'=>'show_in_nav_menus', 'args'=>array('true'=>'True', 'false'=>'False')),
                        array('type'=>'text', 'item_id'=>'show_in_menu', 'name'=>'show_in_menu'),
                        array('type'=>'select', 'item_id'=>'show_in_admin_bar', 'name'=>'show_in_admin_bar', 'args'=>array('true'=>'True', 'false'=>'False')),
                        array('type'=>'select', 'item_id'=>'menu_position', 'name'=>'menu_position', 'args'=>array('5'=>'below Posts', '10'=>'below Media','15'=>'below Links','20'=>'below Pages','25'=>'below comments','60'=>'below first separator','65'=>'below Plugins','70'=>'below Users','75'=>'below Tools','80'=>'below Settings','100'=>'below second separator'  )),
                        array('type'=>'text', 'item_id'=>'menu_icon', 'name'=>'menu_icon'),
                        array('type'=>'text', 'item_id'=>'capability_type', 'name'=>'capability_type'),
                        array('type'=>'text', 'item_id'=>'capabilities', 'name'=>'capabilities'),
                        array('type'=>'select', 'item_id'=>'map_meta_cap', 'name'=>'map_meta_cap', 'args'=>array('true'=>'True', 'false'=>'False')),
                        array('type'=>'select', 'item_id'=>'hierarchical', 'name'=>'hierarchical', 'args'=>array('true'=>'True', 'false'=>'False')),
                        array('type'=>'text', 'item_id'=>'supports', 'name'=>'supports'),
                        array('type'=>'text', 'item_id'=>'register_meta_box_cb', 'name'=>'register_meta_box_cb'),
                        array('type'=>'text', 'item_id'=>'taxonomies', 'name'=>'taxonomies'),
                        array('type'=>'select', 'item_id'=>'has_archive', 'name'=>'has_archive', 'args'=>array('true'=>'True', 'false'=>'False')),
                        array('type'=>'text', 'item_id'=>'rewrite', 'name'=>'rewrite'),
                        array('type'=>'text', 'item_id'=>'permalink_epmask', 'name'=>'permalink_epmask'),
                        array('type'=>'text', 'item_id'=>'query_var', 'name'=>'query_var'),
                        array('type'=>'select', 'item_id'=>'can_export', 'name'=>'can_export', 'args'=>array('true'=>'True', 'false'=>'False')),
                        array('type'=>'text', 'item_id'=>'delete_with_user', 'name'=>'delete_with_user'),
                        array('type'=>'select', 'item_id'=>'show_in_rest', 'name'=>'show_in_rest', 'args'=>array('true'=>'True', 'false'=>'False')),
                        array('type'=>'text', 'item_id'=>'rest_base', 'name'=>'rest_base'),
                        array('type'=>'text', 'item_id'=>'rest_controller_class', 'name'=>'rest_controller_class'),




                    ),
                ),


            )
        ),
    ),
);



$args = array(
	'add_in_menu'       => true,
	'menu_type'         => 'main',
    'menu_name'         => __( 'Theme Settings', 'text-domain' ),
	'menu_title'        => __( 'Theme Settings', 'text-domain' ),
	'page_title'        => __( 'Theme Settings', 'text-domain' ),
	'menu_page_title'   => __( 'Theme Settings', 'text-domain' ),

	'capability'        => "manage_options",
	'menu_slug'         => "theme-menu",
    'option_name'       => "theme_pickoptions",
    'menu_icon'         => "dashicons-image-filter",

    'item_name'         => "PickPlugins",
    'item_version'      => "1.0.2",
    'panels' 	        => array(
		'panelGroup-10'        => $page_1_options,
        'panelGroup-20'        => $page_2_options,
        'panelGroup-30'        => $page_3_options,
        'panelGroup-40'        => $page_4_options,
        'panelGroup-50'        => $page_5_options,

    ),
);

$AddThemePage = new AddThemePage( $args );


























