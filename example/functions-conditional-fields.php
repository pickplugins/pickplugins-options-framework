<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 



add_shortcode('display_conditional_fields','pp_display_conditional_fields');

function pp_display_conditional_fields(){

    $FormFieldsGenerator = new FormFieldsGenerator();


    ob_start();





    ?>
<!--    <pre>--><?php ////echo var_export($_POST, true); ?><!--</pre>-->
    <div class="ppof-settings">
        <form action="#" method="post">


    <?php

    $args = array(
        'id'		=> 'test_1_checkbox_field',
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
        'id'		    => 'test_1_custom_html_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Custom HTML Field','text-domain'),
        'details'	    => __('Description of Custom HTML field','text-domain'),
        'html'		    => 'This block will only visible when <b>Option 1</b> is checked.',
        'conditions' => array(
            'field' => 'test_1_checkbox_field','value' => 'option_1','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_custom_html($args);

    echo '<hr>';



    $args = array(
        'id'		    => 'test_2_switcher_field',
        'title'		    => __('Switcher Field','text-domain'),
        'details'	    => __('Description of switcher field','text-domain'),
        'value'		    => 'option_1',
        'default'		=> 'option_1',
        'args'		=> array(
            'on'	=> __('On','text-domain'),
            'off'	=> __('Off','text-domain'),
        ),

    );

    echo $FormFieldsGenerator->field_switcher($args);

    $args = array(
        'id'		    => 'test_2_custom_html_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Custom HTML Field','text-domain'),
        'details'	    => __('Description of Custom HTML field','text-domain'),
        'html'		    => 'This block will only visible when <b>Switcher</b> is on.',
        'conditions' => array(
            'field' => 'test_2_switcher_field','value' => 'option_1','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_custom_html($args);



    echo '<hr>';


    $args = array(
        'id'		=> 'test_3_radio_field',
        'title'		=> __('Checkbox Field','text-domain'),
        'details'	=> __('Description of checkbox field','text-domain'),
        'value'		=> 'option_1',
        'default'	=> 'option_1',
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
            'option_2'	=> __('Option 2','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_radio($args);

    $args = array(
        'id'		    => 'test_3_custom_html_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Custom HTML Field','text-domain'),
        'details'	    => __('Description of Custom HTML field','text-domain'),
        'html'		    => 'This block will only visible when <b>radio</b> option "Option 1" selected.',
        'conditions' => array(
            'field' => 'test_3_radio_field','value' => 'option_1','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_custom_html($args);



    echo '<hr>';



    $args = array(
        'id'		=> 'test_4_select_field',
        'title'		=> __('Checkbox Field','text-domain'),
        'details'	=> __('Description of checkbox field','text-domain'),
        'value'		=> 'option_1',
        'default'	=> 'option_2',
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
            'option_2'	=> __('Option 2','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_select($args);

    $args = array(
        'id'		    => 'test_4_custom_html_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Custom HTML Field','text-domain'),
        'details'	    => __('Description of Custom HTML field','text-domain'),
        'html'		    => 'This block will only visible when <b>Select</b> option "Option 1" selected.',
        'conditions' => array(
            'field' => 'test_4_select_field','value' => 'option_1','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_custom_html($args);


    echo '<hr>';


    $args = array(
        'id'		=> 'test_5_switch_field',
        'title'		=> __('Switch Field','text-domain'),
        'details'	=> __('Description of switch field','text-domain'),
        'value'		=> 'option_1',
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
        'id'		    => 'test_5_custom_html_field_text',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Custom HTML Field','text-domain'),
        'details'	    => __('Description of Custom HTML field','text-domain'),
        'html'		    => 'This block & text input will only visible when <b>Switch</b> option "Option 1" selected.',
        'conditions' => array(
            'field' => 'test_5_switch_field','value' => 'option_1','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_custom_html($args);

    $args = array(
        'id'		    => 'test_5_text_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field 3','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        //'visible' => array( 'switch_field', '==', 'option_2' ),
        'conditions' => array(
            'field' => 'test_5_switch_field','value' => 'option_1','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_text($args);


    $args = array(
        'id'		    => 'test_5_custom_html_field_textarea',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Custom HTML Field','text-domain'),
        'details'	    => __('Description of Custom HTML field','text-domain'),
        'html'		    => 'This block & textarea input will only visible when <b>Switch</b> option "Option 2" selected.',
        'conditions' => array(
            'field' => 'test_5_switch_field','value' => 'option_2','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_custom_html($args);



    $args = array(
        'id'		    => 'test_5_textarea',
        'title'		    => __('Textarea Field','text-domain'),
        'details'	    => __('Description of textarea field','text-domain'),
        'value'		    => __('Textarea value','text-domain'),
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Textarea placeholder','text-domain'),
        'conditions' => array(
            'field' => 'test_5_switch_field','value' => 'option_2','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_textarea($args);


    $args = array(
        'id'		    => 'test_5_custom_html_field_code',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Custom HTML Field','text-domain'),
        'details'	    => __('Description of Custom HTML field','text-domain'),
        'html'		    => 'This block & code input will only visible when <b>Switch</b> option "Option 2" selected.',
        'conditions' => array(
            'field' => 'test_5_switch_field','value' => 'option_3','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_custom_html($args);


    $args = array(
        'id'		    => 'test_5_code_field',
        'title'		    => __('Code Field','text-domain'),
        'details'	    => __('Description of code field','text-domain'),
        'value'		    => __('Code value','text-domain'),
        'default'		=> __('Default Code Value','text-domain'),
        'args'		=> array(
            'lineNumbers'	=> 'true', // do not write true, write as string, ex: 'true'
            'mode'	=> "'javascript'",
        ),
        'conditions' => array(
            'field' => 'test_5_switch_field','value' => 'option_3','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_code($args);



    $args = array(
        'id'		    => 'test_5_custom_html_field_wp_editor',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Custom HTML Field','text-domain'),
        'details'	    => __('Description of Custom HTML field','text-domain'),
        'html'		    => 'This block & WP editor input will only visible when <b>Switch</b> option "Option 2" selected.',
        'conditions' => array(
            'field' => 'test_5_switch_field','value' => 'option_4','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_custom_html($args);


    $args = array(
        'id'		=> 'wp_editor_field',
        'title'		=> __('WP editor Field','text-domain'),
        'details'	=> __('Description of wp_editor field, please see detail here https://codex.wordpress.org/Function_Reference/wp_editor','text-domain'),
        'editor_settings'=>array('textarea_name'=>'wp_editor_field', 'editor_height'=>'150px'),
        'placeholder' => __('wp_editor value','text-domain'),
        'default'		=> 'Editor content',
        'conditions' => array(
            'field' => 'test_5_switch_field','value' => 'option_4','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_wp_editor($args);



    echo '<hr>';


    echo 'Write somehting on textarea';
    $args = array(
        'id'		    => 'test_8_textarea_field_1',
        'title'		    => __('Textarea Field','text-domain'),
        'details'	    => __('Description of textarea field','text-domain'),
        'value'		    => '',
        'default'		=> '',
        'placeholder'   => __('Textarea placeholder','text-domain'),
    );

    echo $FormFieldsGenerator->field_textarea($args);


    $args = array(
        'id'		    => 'test_8_custom_html_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Custom HTML Field','text-domain'),
        'details'	    => __('Description of Custom HTML field','text-domain'),
        'html'		    => 'This block & text input will be hidden when "textarea" is not empty.',
        'conditions' => array(
            'field' => 'test_8_textarea_field_1', 'type' => 'empty'
        )
    );

    echo $FormFieldsGenerator->field_custom_html($args);


    $args = array(
        'id'		    => 'test_8_text_field_6',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field 4','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        //'visible' => array( 'switch_field', '==', 'option_2' ),
        'conditions' => array(
            'field' => 'test_8_textarea_field_1','type' => 'empty'
        )
    );

    echo $FormFieldsGenerator->field_text($args);




    echo '<hr>';









echo 'Write word "apple" text field will appear';
    $args = array(
        'id'		    => 'test_9_textarea_field',
        'title'		    => __('Textarea Field','text-domain'),
        'details'	    => __('Description of textarea field','text-domain'),
        'value'		    => __('Textarea value','text-domain'),
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Textarea placeholder','text-domain'),
        'visible' => array( 'switch_field', '==', 'option_1' ),
    );

    echo $FormFieldsGenerator->field_textarea($args);


    $args = array(
        'id'		    => 'test_9_custom_html_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Custom HTML Field','text-domain'),
        'details'	    => __('Description of Custom HTML field','text-domain'),
        'html'		    => 'This block & text input will be visible when "apple" is written.',
        'conditions' => array(
            'field' => 'test_9_textarea_field','value' => 'apple','type' => 'equal'
        )
    );

    echo $FormFieldsGenerator->field_custom_html($args);

    $args = array(
        'id'		    => 'test_9_text_field_5',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field 4','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        //'visible' => array( 'switch_field', '==', 'option_2' ),
        'conditions' => array(
            'field' => 'test_9_textarea_field','value' => 'apple','type' => 'equal'
        )
    );

    echo $FormFieldsGenerator->field_text($args);


    echo '<hr>';









//    echo 'Write an email address';
//    $args = array(
//        'id'		    => 'email_field',
//        'title'		    => __('Textarea Field','text-domain'),
//        'details'	    => __('Description of textarea field','text-domain'),
//        'value'		    => '',
//        'default'		=> '',
//        'placeholder'   => __('hello@hi.com','text-domain'),
//    );
//
//    echo $FormFieldsGenerator->field_email($args);
//
//
//    $args = array(
//        'id'		    => 'text_field_7',
//        //'field_name'	=> 'text_field', // optional
//        'title'		    => __('Text Field 4','text-domain'),
//        'details'	    => __('Description of text field','text-domain'),
//        'value'		    => 'Hello text value',
//        'default'		=> __('Default Text Value','text-domain'),
//        'placeholder'   => __('Text value','text-domain'),
//        //'visible' => array( 'switch_field', '==', 'option_2' ),
//        'conditions' => array(
//            'field' => 'email_field','type' => 'regexp','pattern' => '[a-z]+@[a-z]+.[a-z]+','modifier' => 'gi'
//        )
//    );
//
//    echo $FormFieldsGenerator->field_text($args);


    //echo '<hr>';





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