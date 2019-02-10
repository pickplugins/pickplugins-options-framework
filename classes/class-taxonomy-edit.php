<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


if( ! class_exists( 'TaxonomyEdit' ) ) {

    class TaxonomyEdit {

        public $data = array();

        public function __construct( $args ){

            $this->data = &$args;

            add_action( $this->get_taxonomy().'_add_form_fields', array( $this, 'add_form_fields' ), 12 );
            add_action( $this->get_taxonomy().'_edit_form_fields', array( $this, 'edit_form_fields' ), 12 );

            add_action( 'edited_'.$this->get_taxonomy(), array( $this, 'save_update_taxonomy' ), 12 );
            add_action( 'create_'.$this->get_taxonomy(), array( $this, 'save_update_taxonomy' ), 12 );

        }




        public function save_update_taxonomy($term_id){





                foreach ($this->get_panels() as $optionIndex=>$option):



                            $option_value = isset($_POST[$option['id']]) ? $_POST[$option['id']] : '';

                            if(is_array($option_value)){
                                $option_value = serialize($option_value);
                            }



                            update_term_meta($term_id, $option['id'], $option_value);

                endforeach;




        }


        public function edit_form_fields($term){

            $term_id = $term->term_id;

            ?>
            <?php

            foreach ($this->get_panels() as $optionIndex=>$option):

                //var_dump($option);

                        ?>
                        <tr class="form-field">
                            <th scope="row" valign="top"><label for="<?php echo $option['id']; ?>"><?php echo $option['title']; ?></label></th>
                            <td>
                                <?php

                                $this->field_generator($option, $term_id)
                                ?>
                            </td>
                        </tr>
                        <?php

            endforeach;

        }


        public function add_form_fields($term){

            $term_id = '';

            ?>
            <?php

            foreach ($this->get_panels() as $optionIndex=>$option):

                        ?>
                        <tr class="form-field">
                            <th scope="row" valign="top"><label for="<?php echo $option['id']; ?>"><?php echo $option['title']; ?></label></th>
                            <td>
                                <?php

                                $this->field_generator($option, $term_id)
                                ?>
                            </td>
                        </tr>
                    <?php

            endforeach;

        }






        public function field_generator( $option, $term_id ) {

            $id 		= isset( $option['id'] ) ? $option['id'] : "";
            $type 		= isset( $option['type'] ) ? $option['type'] : "";
            $details 	= isset( $option['details'] ) ? $option['details'] : "";

            if( empty( $id ) ) return;

            $FormFieldsGenerator = new FormFieldsGenerator();

            $option['field_name'] = $id;
            $option_value 	 		= get_term_meta($term_id,  $id, true );
            $option['value'] = is_serialized($option_value) ? unserialize($option_value): $option_value;


            ?>
            <pre><?php //echo var_export($term_id, true)?></pre>
            <?php


            if( isset($option['type']) && $option['type'] === 'text' ){
                echo $FormFieldsGenerator->field_text($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'text_multi' ){
                echo $FormFieldsGenerator->field_text_multi($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'textarea' ){
                echo $FormFieldsGenerator->field_textarea($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'checkbox' ){
                echo $FormFieldsGenerator->field_checkbox($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'radio' ){
                echo $FormFieldsGenerator->field_radio($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'select' ){
                echo $FormFieldsGenerator->field_select($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'range' ){
                echo $FormFieldsGenerator->field_range($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'range_input' ){
                echo $FormFieldsGenerator->field_range_input($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'switch' ){
                echo $FormFieldsGenerator->field_switch($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'switch_multi' ){
                echo $FormFieldsGenerator->field_switch_multi($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'switch_img' ){
                echo $FormFieldsGenerator->field_switch_img($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'time_format' ){
                echo $FormFieldsGenerator->field_time_format($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'date_format' ){
                echo $FormFieldsGenerator->field_date_format($option);
            }

            elseif( isset($option['type']) && $option['type'] === 'datepicker' ){
                echo $FormFieldsGenerator->field_datepicker($option);
            }

            elseif( isset($option['type']) && $option['type'] === 'colorpicker' ){
                echo $FormFieldsGenerator->field_colorpicker($option);
            }

            elseif( isset($option['type']) && $option['type'] === 'colorpicker_multi' ){
                echo $FormFieldsGenerator->field_colorpicker_multi($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'link_color' ){
                echo $FormFieldsGenerator->field_link_color($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'icon' ){
                echo $FormFieldsGenerator->field_icon($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'icon_multi' ){
                echo $FormFieldsGenerator->field_icon_multi($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'dimensions' ){
                echo $FormFieldsGenerator->field_dimensions($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'wp_editor' ){
                echo $FormFieldsGenerator->field_wp_editor($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'select2' ){
                echo $FormFieldsGenerator->field_select2($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'faq' ){
                echo $FormFieldsGenerator->field_faq($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'grid' ){
                echo $FormFieldsGenerator->field_grid($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'color_palette' ){
                echo $FormFieldsGenerator->field_color_palette($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'color_palette_multi' ){
                echo $FormFieldsGenerator->field_color_palette_multi($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'media' ){
                echo $FormFieldsGenerator->field_media($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'media_multi' ){
                echo $FormFieldsGenerator->field_media_multi($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'repeatable' ){
                echo $FormFieldsGenerator->field_repeatable($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'user' ){
                echo $FormFieldsGenerator->field_user($option);
            }




            elseif( isset($option['type']) && $option['type'] === $type ){
                do_action( "wp_theme_settings_field_$type", $option );
            }
            if( !empty( $details ) ) echo "<p class='description'>$details</p>";


        }



        private function get_taxonomy(){
            if( isset( $this->data['taxonomy'] ) ) return $this->data['taxonomy'];
            else return "category";
        }



        private function get_panels(){
            if( isset( $this->data['options'] ) ) return $this->data['options'];
            else return array();
        }







        private function get_tax_id(){

            //$post_id = get_the_ID();
            //return $post_id;
        }



    }























}