<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


if( ! class_exists( 'CreateUserForm' ) ) {

    class CreateUserForm {

        public $data = array();

        public function __construct(  ){



        }

        public function display_form($args){

            $this->data = &$args;

            $FormFieldsGenerator = new FormFieldsGenerator();

            $get_options = $this->get_options();

            $get_field_template = $this->get_field_template();

            ob_start();

            ?>
            <pre><?php //echo var_export($get_field_template, true); ?></pre>

            <div class="fieldsGenerator contact-form">
                <form method="post" action="#">

                <?php

                foreach ($get_options as $option):


                    if( isset($option['type']) && $option['type'] === 'text' ){
                        $input_html = $FormFieldsGenerator->field_text($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'text_multi' ){
                        $input_html = $FormFieldsGenerator->field_text_multi($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'textarea' ){
                        $input_html = $FormFieldsGenerator->field_textarea($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'checkbox' ){
                        $input_html = $FormFieldsGenerator->field_checkbox($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'radio' ){
                        $input_html = $FormFieldsGenerator->field_radio($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'select' ){
                        $input_html = $FormFieldsGenerator->field_select($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'range' ){
                        $input_html = $FormFieldsGenerator->field_range($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'range_input' ){
                        $input_html = $FormFieldsGenerator->field_range_input($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'switch' ){
                        $input_html = $FormFieldsGenerator->field_switch($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'switch_multi' ){
                        $input_html = $FormFieldsGenerator->field_switch_multi($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'switch_img' ){
                        $input_html = $FormFieldsGenerator->field_switch_img($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'time_format' ){
                        $input_html = $FormFieldsGenerator->field_time_format($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'date_format' ){
                        $input_html = $FormFieldsGenerator->field_date_format($option);
                    }

                    elseif( isset($option['type']) && $option['type'] === 'datepicker' ){
                        $input_html = $FormFieldsGenerator->field_datepicker($option);
                    }

                    elseif( isset($option['type']) && $option['type'] === 'colorpicker' ){
                        $input_html = $FormFieldsGenerator->field_colorpicker($option);
                    }

                    elseif( isset($option['type']) && $option['type'] === 'colorpicker_multi' ){
                        $input_html = $FormFieldsGenerator->field_colorpicker_multi($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'link_color' ){
                        $input_html = $FormFieldsGenerator->field_link_color($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'icon' ){
                        $input_html = $FormFieldsGenerator->field_icon($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'icon_multi' ){
                        $input_html = $FormFieldsGenerator->field_icon_multi($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'dimensions' ){
                        $input_html = $FormFieldsGenerator->field_dimensions($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'wp_editor' ){
                        $input_html = $FormFieldsGenerator->field_wp_editor($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'select2' ){
                        $input_html = $FormFieldsGenerator->field_select2($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'faq' ){
                        $input_html = $FormFieldsGenerator->field_faq($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'grid' ){
                        $input_html = $FormFieldsGenerator->field_grid($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'color_palette' ){
                        $input_html = $FormFieldsGenerator->field_color_palette($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'color_palette_multi' ){
                        $input_html = $FormFieldsGenerator->field_color_palette_multi($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'media' ){
                        $input_html = $FormFieldsGenerator->field_media($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'media_multi' ){
                        $input_html = $FormFieldsGenerator->field_media_multi($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'repeatable' ){
                        $input_html = $FormFieldsGenerator->field_repeatable($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'user' ){
                        $input_html = $FormFieldsGenerator->field_user($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'submit' ){
                        $input_html = $FormFieldsGenerator->field_submit($option);
                    }
                    elseif( isset($option['type']) && $option['type'] === 'password' ){
                        $input_html = $FormFieldsGenerator->field_password($option);
                    }

                    $vars = array(
                        '{title}'=> $option['title'],
                        '{details}' => $option['details'],
                        '{output}' => $input_html,

                    );

                    echo strtr($get_field_template, $vars );



                endforeach;
                ?>


                </form>
            </div>
            <?php

            echo ob_get_clean();
        }










        private function get_field_template(){
            if( isset( $this->data['fieldTemplate'] ) ) return $this->data['fieldTemplate'];
            else return '';
        }

        private function get_options(){
            if( isset( $this->data['options'] ) ) return $this->data['options'];
            else return array();
        }


        private function get_item_name(){
            if( isset( $this->data['item_name'] ) ) return $this->data['item_name'];
            else return "PickPlugins";
        }

        private function get_item_version(){
            if( isset( $this->data['item_version'] ) ) return $this->data['item_version'];
            else return "1.0.0";
        }






    }























}