<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 





$page_1_options = array(

    'page_nav' 	=> __( '<i class="far fa-dot-circle"></i> Nav Title 1', 'text-domain' ),
    'priority' => 10,
	'sections' => array(

		'section_1' => array(
			'title' 	=> 	__('This is Section Title 1','text-domain'),
			'description' 	=> __('This is section details','text-domain'),
			'options' 	=> array(

                array(
                    'id'		    => 'text_field',
                    //'field_name'		    => 'some_id_text_field_1',
                    'title'		    => __('Text Field','text-domain'),
                    'details'	    => __('Description of text field','text-domain'),
                    'type'		    => 'text',
                    'default'		=> 'Default Text',
                    'placeholder'   => __('Text value','text-domain'),
                ),
                array(
                    'id'		    => 'text_multi_field',
                    //'field_name'		    => 'text_multi_field',
                    'title'		    => __('Multi Text Field','text-domain'),
                    'details'	    => __('Description of multi text field','text-domain'),
                    'value'		    => array('Default Text Val #1', 'Default Text Val #2', 'Default Text Val #3'),
                    'default'		=> array('Default Text #1', 'Default Text #2', 'Default Text #3'),
                    'placeholder'   => __('Text value','text-domain'),
                    'type'		    => 'text_multi',
                    'remove_text'   => __('X','text-domain'),
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
                    'id'		=> 'checkbox_field',
                    //'field_name'		    => 'text_multi_field',
                    'title'		=> __('Checkbox  Field','text-domain'),
                    'details'	=> __('Description of checkbox field','text-domain'),
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
    'sections' => array(

        'section_2' => array(
            'title' 	=> 	__('This is Section Title 2','text-domain'),
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
    'sections' => array(

        'section_3' => array(
            'title' 	=> 	__('This is Section Title 3','text-domain'),
            'description' 	=> __('This is section details','text-domain'),
            'options' 	=> array(
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
    'sections' => array(

        'section_4' => array(
            'title' 	=> 	__('This is Section Title 4','text-domain'),
            'description' 	=> __('This is section details','text-domain'),
            'options' 	=> array(

                array(
                    'id'		    => 'dimensions_field5',
                    'title'		    => __('Dimensions Field','text-domain'),
                    'details'	    => __('Description of Dimensions field','text-domain'),
                    'placeholder'   => __('Text value','text-domain'),
                    'type'		=> 'dimensions',
                    'value'		=> array(
                        'width'	    => '45',
                        'height'	=> '45',
                    ),
                    'default'		=> array(
                        'width'	    => '45',
                        'height'	=> '45',
                    ),
                    'args'		=> array(
                        'width'	=> __('Width','text-domain'),
                        'height'	=> __('Height','text-domain'),
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
                    'width'		=> array('768px'=>'100%','992px'=>'45%', '1200px'=>'44%', ),
                    'height'		=> array('768px'=>'auto','992px'=>'auto', '1200px'=>'auto', ),
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




$args = array(

    'item_name'         => "PickPlugins",
    //'option_name'         => "PickPlugins",
    'item_version'      => "1.0.2",
    'panels' 	        => array(
		'panelGroup-1'        => $page_1_options,
        //'panelGroup-2'        => $page_2_options,
    ),
);

$UserProfileEdit = new UserProfileEdit( $args );
















