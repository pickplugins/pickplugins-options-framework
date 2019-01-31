<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 















add_shortcode('display_conditional_fields','pp_display_conditional_fields');

function pp_display_conditional_fields(){

    $FormFieldsGenerator = new FormFieldsGenerator();


    ob_start();





    ?>
<!--    <pre>--><?php ////echo var_export($_POST, true); ?><!--</pre>-->
    <div class="fieldsGenerator">
        <form action="#" method="post">


    <?php

    echo '<link rel="stylesheet"  href="'.FFG_PLUGIN_URL.'css/fieldsGenerator.css">';
    echo '<link rel="stylesheet"  href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">';


    $args = array(
        'id'		=> 'select_field_1',
        'title'		=> __('Select Field 1','text-domain'),
        'details'	=> __('Description of select 1 field','text-domain'),
        'default'		=> 'option_2',
        'value'		=> array('option_2'),
        'args'		=> array(
            ''	=> __('Select','text-domain'),
            'option_2'	=> __('Show Text','text-domain'),
            'option_3'	=> __('Hide text','text-domain'),

        ),
    );

    echo $FormFieldsGenerator->field_select($args);

    $args = array(
        'id'		=> 'select_field',
        'title'		=> __('Select Field','text-domain'),
        'details'	=> __('Description of select field','text-domain'),
        'default'		=> 'option_2',
        'value'		=> array('option_2'),
        'args'		=> array(
            ''	=> __('Select','text-domain'),
            'option_2'	=> __('Hide text','text-domain'),
            'option_3'	=> __('Show Text','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_select($args);


    $args = array(
        'id'		=> 'switch_field',
        'title'		=> __('Switch Field','text-domain'),
        'details'	=> __('Description of switch field','text-domain'),
        'value'		=> 'option_2',
        'default'	=> 'option_2',
        'args'		=> array(
            'option_2'	=> __('Show Code','text-domain'),
            'option_3'	=> __('Hide Code','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_switch($args);


    $args = array(
        'id'		=> 'checkbox_field',
        'title'		=> __('Checkbox Field','text-domain'),
        'details'	=> __('Description of checkbox field','text-domain'),
        'value'		=> 'option_2',
        'default'	=> 'option_2',
        'args'		=> array(
            'option_2'	=> __('Show Code','text-domain'),
            'option_3'	=> __('Hide Code','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_checkbox($args);



    $args = array(
        'id'		    => 'text_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',

        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        //'visible' => array( 'switch_field', '==', 'option_2' ),
        'conditions' => array(
            'field' => 'checkbox_field[]','value' => 'option_2','compare' => '=='
        )
    );

    echo $FormFieldsGenerator->field_text($args);



    $args = array(
        'id'		    => 'textarea_field',
        'title'		    => __('Textarea Field','text-domain'),
        'details'	    => __('Description of textarea field','text-domain'),
        'value'		    => __('Textarea value','text-domain'),
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Textarea placeholder','text-domain'),
        'visible' => array( 'switch_field', '==', 'option_1' ),
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
        //'visible' => array( 'switch_field', '==', 'option_3' ),

    );

    echo $FormFieldsGenerator->field_code($args);





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