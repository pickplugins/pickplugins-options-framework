<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 





if( ! class_exists( 'CustomizerEdit' ) ) {

    class CustomizerEdit {

        public $data = array();

        public function __construct( $args ){

            $this->data = &$args;

            add_action( 'customize_register', array( $this, 'customizer_settings' ), 12 );



        }



        public function customizer_settings($wp_customize){









            $sections = $this->get_sections();

            foreach ($sections as $sectionIndex => $section):

                $wp_customize->add_section( $sectionIndex , array(
                    'title'      => $section['section_title'],
                    'priority'   => 1,
                ) );

                foreach ($section['options'] as $optionsIndex => $option):

                    $wp_customize->add_setting(
                        $option['id'],
                        array(
                            'default'     => '',
                            //'sanitize_callback' => 'sanitize_text_field'
                        )
                    );



                if($option['type'] == 'text' || $option['type'] == 'number' || $option['type'] == 'url' || $option['type'] == 'tel' || $option['type'] == 'email' || $option['type'] == 'search' || $option['type'] == 'time' || $option['type'] == 'date' || $option['type'] == 'datetime' || $option['type'] == 'week'){

                    $wp_customize->add_control(
                        new WP_Customize_Control(
                            $wp_customize,
                            $option['id'],
                            array(
                                'label'      => $option['title'],
                                'description' => $option['details'],
                                'section'    => $sectionIndex,
                                'settings'   => $option['id'],
                                'type'		 => $option['type'],
                                'priority'	 => 1
                            )
                        )
                    );

                }
                elseif($option['type'] == 'textarea'){

                    $wp_customize->add_control(
                        new WP_Customize_Control(
                            $wp_customize,
                            $option['id'],
                            array(
                                'label'      => $option['title'],
                                'description' => $option['details'],
                                'section'    => $sectionIndex,
                                'settings'   => $option['id'],
                                'type'		 => 'textarea',
                                'priority'	 => 1
                            )
                        )
                    );
                }
                elseif($option['type'] == 'checkbox'){

                    $wp_customize->add_control(
                        new WP_Customize_Control(
                            $wp_customize,
                            $option['id'],
                            array(
                                'label'      => $option['title'],
                                'description' => $option['details'],
                                'section'    => $sectionIndex,
                                'settings'   => $option['id'],
                                'type'		 => 'checkbox',
                                'priority'	 => 1
                            )
                        )
                    );
                }
                elseif($option['type'] == 'radio'){

                    $wp_customize->add_control(
                        new WP_Customize_Control(
                            $wp_customize,
                            $option['id'],
                            array(
                                'label'      => $option['title'],
                                'description' => $option['details'],
                                'section'    => $sectionIndex,
                                'settings'   => $option['id'],
                                'type'		 => 'radio',
                                'choices'   => $option['args'],
                                'priority'	 => 1
                            )
                        )
                    );
                }
                elseif($option['type'] == 'select'){

                    $wp_customize->add_control(
                        new WP_Customize_Control(
                            $wp_customize,
                            $option['id'],
                            array(
                                'label'      => $option['title'],
                                'description' => $option['details'],
                                'section'    => $sectionIndex,
                                'settings'   => $option['id'],
                                'type'		 => 'select',
                                'choices'   => $option['args'],
                                'priority'	 => 1
                            )
                        )
                    );
                }
                elseif($option['type'] == 'range'){

                    $args = $option['args'];

                    $wp_customize->add_control(
                        new WP_Customize_Control(
                            $wp_customize,
                            $option['id'],
                            array(
                                'label'      => $option['title'],
                                'description' => $option['details'],
                                'section'    => $sectionIndex,
                                'settings'   => $option['id'],
                                'type'		 => 'range',
                                'input_attrs' => array(
                                    'min' => $args['min'],
                                    'max' => $args['max'],
                                    'step' => $args['step'],
                                ),
                                'priority'	 => 1
                            )
                        )
                    );
                }
                elseif($option['type'] == 'dropdown-pages'){

                    $wp_customize->add_control(
                        new WP_Customize_Control(
                            $wp_customize,
                            $option['id'],
                            array(
                                'label'      => $option['title'],
                                'description' => $option['details'],
                                'section'    => $sectionIndex,
                                'settings'   => $option['id'],
                                'type'		 => 'dropdown-pages',
                                //'choices'   => $option['args'],
                                'priority'	 => 1
                            )
                        )
                    );
                }
                elseif($option['type'] == 'dropdown-pages'){

                    $wp_customize->add_control(
                        new WP_Customize_Text_multi(
                            $wp_customize,
                            $option['id'],
                            array(
                                'label'      => $option['title'],
                                'description' => $option['details'],
                                'section'    => $sectionIndex,
                                'settings'   => $option['id'],
                                'type'		 => 'text_multi',
                                //'choices'   => $option['args'],
                                'priority'	 => 1
                            )
                        )
                    );
                }
                elseif($option['type'] == 'colorpicker'){

                    $wp_customize->add_control(
                        $wp_customize->add_control(
                            new WP_Customize_Color_Control(
                                $wp_customize, // WP_Customize_Manager
                                $option['id'], // Setting id
                                array( // Args, including any custom ones.
                                    'label' => $option['title'],
                                    'section' => $sectionIndex,
                                )
                            )
                        )
                    );
                }

                elseif($option['type'] == 'media'){

                    $wp_customize->add_control(
                            new WP_Customize_Media_Control(
                                    $wp_customize,
                                    $option['id'],
                                    array(
                                        'label' => $option['title'],
                                        'section' => $sectionIndex,
                                        'mime_type' => $option['mime_type'],
                                    )
                            )
                    );
                }







                endforeach;
            endforeach;





//            $wp_customize->add_setting(
//                'PickPlugins_site_layout_type',
//                array(
//                    'default'     => 'full_width',
//                    'sanitize_callback' => 'sanitize_text_field'
//                )
//            );

//            $wp_customize->add_control(
//                new WP_Customize_Control(
//                    $wp_customize,
//                    'PickPlugins_site_layout_type',
//                    array(
//                        'label'      => __('Site wrapper width style', 'dart-framework'),
//                        'section'    => 'section-1',
//                        'settings'   => 'PickPlugins_site_layout_type',
//                        'type'		 => 'select',
//                        'choices'        => array(
//                            'full_width' => __('Full Width', 'dart-framework'),
//                            'box_width' => __('Box Width', 'dart-framework'),
//                        ),
//                        'priority'	 => 1
//                    )
//                )
//            );





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



        private function get_sections(){
            if( isset( $this->data['sections'] ) ) return $this->data['sections'];
            else return array();
        }






    }























}