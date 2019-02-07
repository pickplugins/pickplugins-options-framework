<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 





add_shortcode('basic_form_display','basic_form_display_function');

function basic_form_display_function(){

    $FormFieldsGenerator = new FormFieldsGenerator();

    $error = '';

    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){

        // Process
        $_wpnonce = isset($_POST['nonce_field']) ? $_POST['nonce_field'] : '';

        if(wp_verify_nonce( $_wpnonce, 'nonce_field_action' )) {

            $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
            $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

            update_option('dummy_option_first_name', $first_name);
            update_option('dummy_option_last_name', $last_name);
            update_option('dummy_option_gender', $gender);
            ?>
            <pre><?php echo var_export($_POST, true); ?></pre>
            <?php
        }else{
            $error = 'There is an error! 1';
        }

    }else{
        // Error
        $error = 'There is an error! 2';

    }

    ob_start();

    ?>
    <div class="fieldsGenerator">
        <div class="error" style="color: #f00">
            <?php

            if(!empty($error)){
                echo $error;
            }
            ?>
        </div>
        <form action="#" method="post">
    <?php

    echo '<link rel="stylesheet"  href="'.FFG_PLUGIN_URL.'css/fieldsGenerator.css">';
    echo '<link rel="stylesheet"  href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">';

    $args = array(
        'id'		    => 'first_name',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('First Name','text-domain'),
        'details'	    => __('Description of first name','text-domain'),
        'value'		    => '',
        'default'		=> __('','text-domain'),
        'placeholder'   => __('First Name','text-domain'),
    );

    echo $FormFieldsGenerator->field_text($args);

    $args = array(
        'id'		    => 'last_name',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Last Name','text-domain'),
        'details'	    => __('Description of last name','text-domain'),
        'value'		    => '',
        'default'		=> __('','text-domain'),
        'placeholder'   => __('Last Name','text-domain'),
    );
    echo $FormFieldsGenerator->field_text($args);

    $args = array(
        'id'		=> 'gender',
        'title'		=> __('Your Gender','text-domain'),
        'details'	=> __('Description of gender','text-domain'),
        'default'		=> '',
        'value'		=> '',
        'args'		=> array(
            'male'	=> __('Male','text-domain'),
            'famale'	=> __('Famale','text-domain'),
            'others'	=> __('Others','text-domain'),

        ),
    );
    echo $FormFieldsGenerator->field_radio($args);

    $args = array(
        'id'		    => 'google_recaptcha_field',
        'title'		    => __('Google recaptcha Field','text-domain'),
        'details'	    => __('Description of google recaptcha field','text-domain'),
        'version'		=> 'v2', // v2, v3
        'action_name'	=> 'action_name', // for v3
        'site_key'		=> '6LeuYiUTAAAAAF5OmlN8CNQTavIuhbzth9oqC-vC',
        'secret_key'    => '',
    );
    echo $FormFieldsGenerator->field_google_recaptcha($args);

    $args = array(
        'id'		    => 'nonce_field',
        'title'		    => __('Nonce Field','text-domain'),
        'details'	    => __('Description of nonce field','text-domain'),
        'action_name'		=> 'nonce_field_action',
    );
    echo $FormFieldsGenerator->field_nonce($args);

    $args = array(
        'id'		    => 'submit_field',
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Submit',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
    );
    echo $FormFieldsGenerator->field_submit($args);

    ?>
    </form>
    </div>
    <?php

    return ob_get_clean();
}
















add_shortcode('display_fields','pp_display_fileds');

function pp_display_fileds(){

    $FormFieldsGenerator = new FormFieldsGenerator();


    ob_start();





    ?>
    <pre><?php echo var_export($_POST, true); ?></pre>
    <div class="fieldsGenerator">
        <form action="#" method="post">


    <?php

    echo '<link rel="stylesheet"  href="'.FFG_PLUGIN_URL.'css/fieldsGenerator.css">';
    echo '<link rel="stylesheet"  href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">';




    $args = array(
        'id'		    => 'switcher_field',
        'title'		    => __('Switcher Field','text-domain'),
        'details'	    => __('Description of switcher field','text-domain'),
        'value'		    => '',
        'default'		=> '2',

    );

    echo $FormFieldsGenerator->field_switcher($args);





    $args = array(
        'id'		    => 'dimensions_field5',
        'title'		    => __('Dimensions Field','text-domain'),
        'details'	    => __('Description of Dimensions field','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        'preview'       => true,
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
    );

    echo $FormFieldsGenerator->field_google_map($args);



    $args = array(
        'id'		    => 'border_field',
        'title'		    => __('Border Field','text-domain'),
        'details'	    => __('Description of border field','text-domain'),
        'value'		    => array('width'=>'54', 'unit'=>'%' , 'style'=>'solid', 'color'=>'#ddd'),
        'default'		=> array('width'=>'54', 'unit'=>'px' , 'style'=>'solid', 'color'=>'#ddd'),

    );

    //echo $FormFieldsGenerator->field_border($args);


    $args = array(
        'id'		    => 'margin_field',
        'title'		    => __('Margin Field','text-domain'),
        'details'	    => __('Description of margin field','text-domain'),
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
    );

    echo $FormFieldsGenerator->field_padding($args);




    $args = array(
        'id'		    => 'padding_field',
        'title'		    => __('Padding Field','text-domain'),
        'details'	    => __('Description of padding field','text-domain'),
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
    );

    echo $FormFieldsGenerator->field_margin($args);

    $args = array(
        'id'		    => 'custom_html_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'html'		    => '<b>Lorem Ipsum</b> is simply dummy text ',
    );

    echo $FormFieldsGenerator->field_custom_html($args);

    $args = array(
        'id'		    => 'text_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',

        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
    );

    echo $FormFieldsGenerator->field_text($args);


    $args = array(
        'id'		    => 'text_multi_field',
        'title'		    => __('Multi Text Field','text-domain'),
        'details'	    => __('Description of multi text field','text-domain'),
        'sortable'		    => true,
        'value'		    => array('Default Text Val #1', 'Default Text Val #2', 'Default Text Val #3'),
        'default'		=> array('Default Text #1', 'Default Text #2', 'Default Text #3'),
        'placeholder'   => __('Text value','text-domain'),
        'remove_text'   => __('X','text-domain'),
    );

    echo $FormFieldsGenerator->field_text_multi($args);



    $args = array(
        'id'		    => 'google_recaptcha_field',
        'title'		    => __('Google recaptcha Field','text-domain'),
        'details'	    => __('Description of google recaptcha field','text-domain'),
        'version'		=> 'v2', // v2, v3
        'action_name'	=> 'action_name', // for v3
        'site_key'		=> '6LeuYiUTAAAAAF5OmlN8CNQTavIuhbzth9oqC-vC',
        'secret_key'    => '6Lf4-IUUAAAAALzXCaSlToyNBzdHMrim9sdvJoK5',
    );

    echo $FormFieldsGenerator->field_google_recaptcha($args);




    $args = array(
        'id'		=> 'img_select_field',
        'title'		=> __('Image select  Field','text-domain'),
        'details'	=> __('Description of image select field','text-domain'),
        'default'		=> 'https://i.imgur.com/qCXd3nZ.jpg',
        'value'		=> isset($_POST['img_select_field']) ? $_POST['img_select_field'] :get_option('img_select_field'),
        'args'		=> array(
             'https://i.imgur.com/or7wFbn.jpg',
             'https://i.imgur.com/qCXd3nZ.jpg',
             'https://i.imgur.com/oE7nhsI.jpg',
        ),
    );

    echo $FormFieldsGenerator->field_img_select($args);



    $args = array(
        'id'		=> 'number_field',
        'title'		=> __('Number Field','text-domain'),
        'details'	=> __('Description of number field','text-domain'),
        'default'		=> '987',
        'placeholder' => __('123456','text-domain'),
    );

    echo $FormFieldsGenerator->field_number($args);

    $args = array(
        'id'		    => 'textarea_field',
        'title'		    => __('Textarea Field','text-domain'),
        'details'	    => __('Description of textarea field','text-domain'),
        'value'		    => __('Textarea value','text-domain'),
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Textarea placeholder','text-domain'),
    );

    echo $FormFieldsGenerator->field_textarea($args);




    $args = array(
        'id'		    => 'code_field',
        'title'		    => __('Code Field','text-domain'),
        'details'	    => __('Description of code field','text-domain'),
        'value'		    => __('Textarea value','text-domain'),
        'default'		=> __('Default Text Value','text-domain'),
        'args'		=> array(
            'lineNumbers'	=> 'true', // do not write true, write as string, ex: 'true'
            'mode'	=> "'javascript'",
        ),
    );

    echo $FormFieldsGenerator->field_code($args);




    $args = array(
        'id'		=> 'checkbox_field',
        'title'		=> __('Checkbox  Field','text-domain'),
        'details'	=> __('Description of checkbox field','text-domain'),
        'default'		=> array('option_3','option_2'),
        'value'		=> 'option_1',
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_checkbox($args);


    $args = array(
        'id'		=> 'checkbox_multi_field',
        'title'		=> __('Checkbox multi Field','text-domain'),
        'details'	=> __('Description of checkbox multi field','text-domain'),
        'default'		=> 'option_2',
        'value'		=> 'option_2',
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
            'option_2'	=> __('Option 2','text-domain'),
            'option_3'	=> __('Option 3','text-domain'),
            'option_4'	=> __('Option 4','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_checkbox_multi($args);


    $args = array(
        'id'		=> 'radio_field',
        'title'		=> __('Radio Field','text-domain'),
        'details'	=> __('Description of radio field','text-domain'),
        'default'		=> 'option_2',
        'value'		=> 'option_2',
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
            'option_2'	=> __('Option 2','text-domain'),
            'option_3'	=> __('Option 3','text-domain'),
            'option_4'	=> __('Option 4','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_radio($args);



    $args = array(
        'id'		=> 'select_field',
        'title'		=> __('Select Field','text-domain'),
        'details'	=> __('Description of select field','text-domain'),
        'default'		=> 'option_2',
        'value'		=> 'option_2',
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
            'option_2'	=> __('Option 2','text-domain'),
            'option_3'	=> __('Option 3','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_select($args);


    $args = array(
        'id'		=> 'select_field_multiple',
        'title'		=> __('Select Field','text-domain'),
        'details'	=> __('Description of select field','text-domain'),
        'default'		=> 'option_2',
        'value'		=> array('option_2'),
        'multiple'		=> true,
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
            'option_2'	=> __('Option 2','text-domain'),
            'option_3'	=> __('Option 3','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_select($args);








    $args = array(
        'id'		=> 'range_field',
        'title'		=> __('Range field','text-domain'),
        'details'	=> __('Description of Range field','text-domain'),
        'default'		=> '75',
        'value'		=> '70',
        'args'		=> array('min' => '0','max' => '100','step' => '1'),
    );

    echo $FormFieldsGenerator->field_range($args);


    $args = array(
        'id'		=> 'range_input_field',
        'title'		=> __('Range field','text-domain'),
        'details'	=> __('Description of Range field','text-domain'),
        'default'		=> '75',
        'value'		=> '70',
        'args'		=> array('min' => '0','max' => '100','step' => '1'),
    );

    echo $FormFieldsGenerator->field_range_input($args);

    $args = array(
        'id'		=> 'switch_field',
        'title'		=> __('Switch Field','text-domain'),
        'details'	=> __('Description of switch field','text-domain'),
        'value'		=> 'option_2',
        'default'	=> 'option_2',
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
            'option_2'	=> __('Option 2','text-domain'),
            'option_3'	=> __('Option 3','text-domain'),
            'option_4'	=> __('Option 4','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_switch($args);




    $args = array(
        'id'		    => 'field_tel',
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => '123456789',
        'default'		=> __('0987654321','text-domain'),
        'placeholder'   => __('Tel value','text-domain'),
    );

    echo $FormFieldsGenerator->field_tel($args);


    $args = array(
        'id'		    => 'time_field',
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => '',
        'default'		=> __('','text-domain'),
        'placeholder'   => __('','text-domain'),
    );

    echo $FormFieldsGenerator->field_time($args);

    $args = array(
        'id'		    => 'url_field',
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => '',
        'default'		=> __('','text-domain'),
        'placeholder'   => __('','text-domain'),
    );

    echo $FormFieldsGenerator->field_url($args);


    $args = array(
        'id'		    => 'date_field',
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => '',
        'default'		=> __('','text-domain'),
        'placeholder'   => __('','text-domain'),
    );

    echo $FormFieldsGenerator->field_date($args);


    $args = array(
        'id'		    => 'month_field',
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
    );

    echo $FormFieldsGenerator->field_month($args);



    $args = array(
        'id'		    => 'month_field',
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => '',
        'default'		=> __('','text-domain'),
        'placeholder'   => __('','text-domain'),
    );

    //echo $FormFieldsGenerator->field_month($args);



    $args = array(
        'id'		    => 'search_field',
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => '',
        'default'		=> __('','text-domain'),
        'placeholder'   => __('','text-domain'),
    );

    echo $FormFieldsGenerator->field_search($args);


    $args = array(
        'id'		    => 'color_field',
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => '',
        'default'		=> __('','text-domain'),
        'placeholder'   => __('','text-domain'),
    );

    echo $FormFieldsGenerator->field_color($args);


    $args = array(
        'id'		    => 'email_field',
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => '',
        'default'		=> __('','text-domain'),
        'placeholder'   => __('','text-domain'),
    );

    echo $FormFieldsGenerator->field_email($args);



    echo $FormFieldsGenerator->field_switch($args);


    $args = array(
        'id'		=> 'switch_icon_field',
        'title'		=> __('Switch icon Field','text-domain'),
        'details'	=> __('Description of switch icon field','text-domain'),
        'value'		=> 'option_2',
        'args'		=> array(
            'option_1'	=> __('<i class="fas fa-align-left"></i>','text-domain'),
            'option_2'	=> __('<i class="fas fa-align-center"></i>','text-domain'),
            'option_3'	=> __('<i class="fas fa-align-right"></i>','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_switch($args);

    $args = array(
        'id'		=> 'switch_icon_field2',
        'title'		=> __('Switch icon Field','text-domain'),
        'details'	=> __('Description of switch icon field','text-domain'),
        'value'		=> 'option_2',
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
            'option_2'	=> __('Option 2','text-domain'),
            'option_3'	=> __('Option 3','text-domain'),
            'option_4'	=> __('Option 4','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_switch($args);


    $args = array(
        'id'		=> 'switch_multi_field6',
        'title'		=> __('Switch multi Field','text-domain'),
        'details'	=> __('Description of switch multi field','text-domain'),
        'value'		=> array('option_3'),
        'default'		=> array('option_2','option_4'),
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
            'option_2'	=> __('Option 2','text-domain'),
            'option_3'	=> __('Option 3','text-domain'),
            'option_4'	=> __('Option 4','text-domain'),
        ),
    );


    echo $FormFieldsGenerator->field_switch_multi($args);

    $args = array(
        'id'		=> 'switch_img_field15',
        'title'		=> __('Switch image Field','text-domain'),
        'details'	=> __('Description of switch image field','text-domain'),
        'default'	=> 'option_2',
        'width'     =>'100px',
        'height'    =>'auto',
        'args'		=> array(
            'option_1'	=> array('src'=>'https://i.imgur.com/YiUyAgA.png'),
            'option_2'	=> array('src'=>'https://i.imgur.com/tWGz0EU.png'),
            'option_3'	=> array('src'=>'https://i.imgur.com/GT3VkYX.png'),
        ),
    );

    echo $FormFieldsGenerator->field_switch_img($args);




    $args = array(
        'id'		=> 'time_format_field',
        'title'		=> __('Time format Field','text-domain'),
        'details'	=> __('Description of time format field','text-domain'),
        'args'		=> array('g:i a' ,'g:i A', 'H:i'),
        'default'	=> 'H:i',
    );

    echo $FormFieldsGenerator->field_time_format($args);


    $args = array(
        'id'		=> 'date_format_field',
        'title'		=> __('Date format Field','text-domain'),
        'details'	=> __('Description of date format field','text-domain'),
        'value'	=> 'Y-m-d',
        'args'		=> array('F j, Y' ,'Y-m-d', 'm/d/Y' ,'d/m/Y' ),
        'default'	=> 'F j, Y',
    );

    echo $FormFieldsGenerator->field_date_format($args);




    $args = array(
        'id'		    => 'datepicker_field',
        'title'		    => __('Date picker field','text-domain'),
        'details'	    => __('Description of date picker field','text-domain'),
        'date_format'	=> 'dd-mm-yy',
        'placeholder'	=> 'dd-mm-yy',
        'default'		=> date('d-m-Y'), // today date
        'value'		=> date('d-m-Y'), // today date

    );


    echo $FormFieldsGenerator->field_datepicker($args);


    $args = array(
        'id'		=> 'colorpicker_field',
        'title'		=> __('Color picker field','text-domain'),
        'details'	=> __('Description of colorpicker field','text-domain'),
        'default'	=> '#1e73be',
        'value'		=> '#ff0000',


    );

    //echo $FormFieldsGenerator->field_colorpicker($args);



    $args = array(
        'id'		=> 'colorpicker_multi_field',
        'title'		=> __('Multi colorpicker Field','text-domain'),
        'details'	=> __('Description of multi colorpicker field','text-domain'),
        'default'		=> array('#dd3333','#1e73be','#8224e3'),
        'value'		=> array('#ff0000','#1e73be','#8224e3'),
    );

    //echo $FormFieldsGenerator->field_colorpicker_multi($args);


    $args = array(
        'id'		=> 'link_color_field',
        'title'		=> __('Link Color picker field','text-domain'),
        'details'	=> __('Description of Link Color field','text-domain'),
        'args'		=> array('link'	=> '#1B2A41','hover' => '#3F3244','active' => '#60495A','visited' => '#7D8CA3' ),
    );

    //echo $FormFieldsGenerator->field_link_color($args);






    $args = array(
        'id'		=> 'icon_multi_field2',
        'title'		=> __('Icon multi Field','text-domain'),
        'details'	=> __('Description of multi icon field','text-domain'),
        'default'	=> array('fas fa-bomb','fas fa-address-book'),
        'args'		=> 'FONTAWESOME_ARRAY',
    );

    echo $FormFieldsGenerator->field_icon_multi($args);




    $args = array(
        'id'		=> 'icon_field',
        'title'		=> __('Icon Field','text-domain'),
        'details'	=> __('Description of icon field','text-domain'),
        'default'	=> 'fas fa-bomb',
        'args'		=> 'FONTAWESOME_ARRAY',
    );

    echo $FormFieldsGenerator->field_icon($args);


    $args = array(
        'id'		=> 'user_field',
        'title'		=> __('User Field','text-domain'),
        'details'	=> __('Description of user field','text-domain'),
        'default'	=> array(1,11),
        'args'		=> 'USER_IDS_ARRAY',
    );

    echo $FormFieldsGenerator->field_user($args);


    $args = array(
        'id'		    => 'dimensions_field5',
        'title'		    => __('Dimensions Field','text-domain'),
        'details'	    => __('Description of Dimensions field','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
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
    );

    echo $FormFieldsGenerator->field_dimensions($args);








    $args = array(
        'id'		=> 'wp_editor_field',
        'title'		=> __('WP editor Field','text-domain'),
        'details'	=> __('Description of wp_editor field, please see detail here https://codex.wordpress.org/Function_Reference/wp_editor','text-domain'),
        'editor_settings'=>array('textarea_name'=>'wp_editor_field', 'editor_height'=>'150px'),
        'placeholder' => __('wp_editor value','text-domain'),
        'default'		=> 'Editor content',
    );

    echo $FormFieldsGenerator->field_wp_editor($args);



    $args = array(
        'id'		=> 'select2_field5',
        'title'		=> __('Select2 Single Field','text-domain'),
        'details'	=> __('Description of select2 single field','text-domain'),
        'default'		=> 'option_3',
        'multiple'		=> false,
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
            'option_2'	=> __('Option 2','text-domain'),
            'option_3'	=> __('Option 3','text-domain'),
            'option_4'	=> __('Option 4','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_select2($args);




    $args = array(
        'id'		=> 'select2_multi_field',
        'title'		=> __('Select2 multi Field','text-domain'),
        'details'	=> __('Description of select2 field','text-domain'),
        'default'		=> array('option_3','option_2'),
        'multiple'		=> true,
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
            'option_2'	=> __('Option 2','text-domain'),
            'option_3'	=> __('Option 3','text-domain'),
            'option_4'	=> __('Option 4','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_select2($args);



    $args = array(
        'id'		=> 'faq_field',
        'title'		=> __('FAQ field','text-domain'),
        'details'	=> __('Description of faq field','text-domain'),
        'args'		=> array(
            array('title'=>'What is Lorem Ipsum?','link'=>'#', 'content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
            array('title'=>'Why do we use it?','link'=>'#', 'content'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'),
            array('title'=>'Where does it come from?','link'=>'#', 'content'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.'),
        ),
    );

    echo $FormFieldsGenerator->field_faq($args);


    $args = array(
        'id'		=> 'field_grid',
        'title'		=> __('Field Grid','user-verification'),
        'details'	=> __('Description of grid field','user-verification'),
        'width'		=> array('768px'=>'100%','992px'=>'50%', '1200px'=>'45%', ),
        'height'		=> array('768px'=>'auto','992px'=>'150px', '1200px'=>'150px', ),
        'args'		=> array(
            array('title'=>'Post Grid','link'=>'https://www.pickplugins.com/', 'content'=>'', 'thumb'=>'https://i.imgur.com/or7wFbn.jpg'),
            array('title'=>'Accordion','link'=>'https://www.pickplugins.com/', 'content'=>'','thumb'=>'https://i.imgur.com/qCXd3nZ.jpg' ),
            array('title'=>'Woocommerce Product Slider','link'=>'https://www.pickplugins.com/', 'content'=>'','thumb'=>'https://i.imgur.com/CkhKEkY.jpg'),
            array('title'=>'Team Showcase','link'=>'https://www.pickplugins.com/', 'content'=>'','thumb'=>'https://i.imgur.com/0fhJlpr.jpg'),
            array('title'=>'Breadcrumb','link'=>'https://www.pickplugins.com/', 'content'=>'','thumb'=>'https://i.imgur.com/oE7nhsI.jpg'),
            array('title'=>'Wishlist for WooCommerce','link'=>'https://www.pickplugins.com/', 'content'=>'','thumb'=>'https://i.imgur.com/8aAJwsg.jpg'),

        ),
    );

    echo $FormFieldsGenerator->field_grid($args);




    $args = array(
        'id'		=> 'color_palette_field',
        'title'		=> __('Color palette Field','text-domain'),
        'details'	=> __('Description of color palette field','text-domain'),
        'colors'		=> array('#dd3333','#1e73be','#8224e3','#e07000','#1e73be','#8224e3'),
        'args'		=> array(
            'width'	    => '30px',
            'height'	=> '30px',
            'style'	    => '',
        ),
    );

    echo $FormFieldsGenerator->field_color_palette($args);

    $args = array(
        'id'		=> 'color_palette_multi_field',
        'title'		=> __('Color palette multi Field','text-domain'),
        'details'	=> __('Description of color palette multi field','text-domain'),
        'colors'		=> array('#dd3333','#1e73be','#8224e3','#e07000','#1e73be','#8224e3'),
        'args'		=> array(
            'width'	    => '30px',
            'height'	=> '30px',
            'style'	=> '',
        ),

    );

    echo $FormFieldsGenerator->field_color_palette_multi($args);


    $args = array(
        'id'		=> 'field_media_multi3',
        'title'		=> __('Media multi','text-domain'),
        'details'	=> __('Media multi field description.','text-domain'),
    );

    echo $FormFieldsGenerator->field_media_multi($args);



    $args = array(
        'id'		    => 'field_media',
        'title'		    => __('Media ','text-domain'),
        'details'	    => __('Field media description','text-domain'),
        'placeholder'	=> 'https://i.imgur.com/GD3zKtz.png',
    );

    echo $FormFieldsGenerator->field_media($args);



    $args = array(
        'id'		=> 'repeatable_field5',
        'title'		=> __('Repeatable Field','text-domain'),
        'details'	=> __('Repeatable Description','text-domain'),
        'collapsible'=> true,
        'sortable'	=> true,
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
    );

    echo $FormFieldsGenerator->field_repeatable($args);








    $args = array(
        'id'		=> 'sidebars_field',
        'title'		=> __('Sidebar select Field','text-domain'),
        'details'	=> __('Description of sidebars select field','text-domain'),
        //'multiple'=> true,
        'args'		=> 'SIDEBARS_ARRAY',
    );

    echo $FormFieldsGenerator->field_select2($args);



    $args = array(
        'id'		=> 'menu_select_field',
        'title'		=> __('Menu select Field','text-domain'),
        'details'	=> __('Description of menu select field','text-domain'),
        //'multiple'=> true,
        'args'		=> 'MENUS_ARRAY',
    );

    echo $FormFieldsGenerator->field_select2($args);

    $args = array(
        'id'		=> 'user_roles_field',
        'title'		=> __('User roles select Field','text-domain'),
        'details'	=> __('Description of user roles select field','text-domain'),
        'multiple'=> true,
        'args'		=> 'USER_ROLES',
    );

    echo $FormFieldsGenerator->field_select2($args);


    $args = array(
        'id'		=> 'page_ids_field',
        'title'		=> __('User roles select Field','text-domain'),
        'details'	=> __('Description of user roles select field','text-domain'),
        'multiple'=> true,
        'args'		=> 'PAGES_IDS_ARRAY',
    );

    echo $FormFieldsGenerator->field_select2($args);



    $args = array(
        'id'		=> 'post_ids_field',
        'title'		=> __('User roles select Field','text-domain'),
        'details'	=> __('Description of user roles select field','text-domain'),
        //'multiple'=> true,
        'args'		=> 'POSTS_IDS_ARRAY',
    );

    echo $FormFieldsGenerator->field_select2($args);



    $args = array(
        'id'		=> 'post_type_field',
        'title'		=> __('Post types Field','text-domain'),
        'details'	=> __('Description of Post types select field','text-domain'),
        'multiple'=> true,
        'args'		=> 'POST_TYPES_ARRAY',
    );

    echo $FormFieldsGenerator->field_select2($args);

    $args = array(
        'id'		=> 'thumb_sizes_field',
        'title'		=> __('Thumb sizes Field','text-domain'),
        'details'	=> __('Description of thumb size select field','text-domain'),
        'multiple'=> true,
        'args'		=> 'THUMB_SIEZS_ARRAY',
    );

    echo $FormFieldsGenerator->field_select2($args);


    $args = array(
        'id'		=> 'terms_select_field',
        'title'		=> __('Terms select Field','text-domain'),
        'details'	=> __('Description of terms select field','text-domain'),
        'multiple'=> true,
        'args'		=> 'TAX_%category%',
    );

    echo $FormFieldsGenerator->field_select2($args);

    $args = array(
        'id'		=> 'select2_user_field5',
        'title'		=> __('Select2 User Field','text-domain'),
        'details'	=> __('Description of select2 user field','text-domain'),
        'default'		=> 'option_3',
        'multiple'		=> false,
        'args'		=> 'USER_IDS_ARRAY',
    );

    echo $FormFieldsGenerator->field_select2($args);

    $args = array(
        'id'		    => 'nonce_field',
        'title'		    => __('Nonce Field','text-domain'),
        'details'	    => __('Description of nonce field','text-domain'),
        'action_name'		=> 'nonce_field_action',
    );

    echo $FormFieldsGenerator->field_nonce($args);

    $args = array(
        'id'		    => 'submit_field',
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Submit',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
    );

    echo $FormFieldsGenerator->field_submit($args);



    ?>
        </form>
    </div>
    <?php

    return ob_get_clean();
}