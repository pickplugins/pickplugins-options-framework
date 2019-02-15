<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


if( ! class_exists( 'AddMetaBox' ) ) {

    class AddMetaBox {

        public $data = array();

        public function __construct( $args ){

            $this->data = &$args;

            add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ), 12 );
            add_action( 'save_post', array( $this, 'save_post' ), 12 );


        }

        public function add_meta_boxes(){


            add_meta_box($this->get_meta_box_id(),$this->get_meta_box_title(),array( $this, 'meta_box_callback' ),
                $this->get_meta_box_screen(), $this->get_meta_box_context(), $this->get_meta_box_priority(),$this->get_callback_args());
        }


        public function save_post($post_id){

            $get_option_name = $this->get_option_name();
            $post_id = $this->get_post_id();

            if(!empty($get_option_name)):
                $option_value = serialize($_POST[$get_option_name]);

                update_post_meta($post_id, $get_option_name, $option_value);


            else:

                foreach ($this->get_panels() as $panelsIndex=>$panel):
                    foreach ($panel['sections'] as $sectionIndex=>$section):
                        foreach ($section['options'] as $option):

                            $option_value = isset($_POST[$option['id']]) ? $_POST[$option['id']] : '';

                            if(is_array($option_value)){
                                $option_value = serialize($option_value);
                            }



                            update_post_meta($post_id, $option['id'], $option_value);

                        endforeach;
                    endforeach;
                endforeach;

            endif;



        }


        public function meta_box_callback(){

            $get_nav_position = $this->get_nav_position();

            //var_dump($get_nav_position);
            ?>

            <div class='wrap ppof-settings ppof-metabox'>
                <div class='navigation <?php echo $get_nav_position; ?>'>

                    <div class="nav-header">
                        <?php
                        do_action('nav_header_top');
                        ?>
                        <div class="themeName"><?php echo $this->get_item_name(); ?></div>
                        <div class="themeVersion"><?php echo sprintf(__('Version: %s', 'wp-theme-settings'), $this->get_item_version()); ?></div>
                        <?php
                        do_action('nav_header_bottom');
                        ?>
                    </div>

                    <div class="nav-items">
                        <?php
                        do_action('nav_nav_items_top');
                        ?>
                        <?php


                        $current_page = 1;
                        foreach( $this->get_panels() as $page_id => $page ):


                            $page_settings = !empty($page['sections']) ? $page['sections'] : array();


                            $page_settings_count = count($page_settings);
                            //var_dump($page_settings);
                            ?>
                            <li class="nav-item-wrap <?php if(($page_settings_count > 1)) echo 'has-child'; ?> <?php if($current_page==$page_id) echo 'active'; ?>">
                                <a dataid="<?php echo $page_id; ?>" href='#<?php //echo $pagenow.'?'.$section_id; ?><?php echo
                                $page_id; ?>' class='nav-item'><?php echo $page['page_nav']; ?>

                                    <?php if(($page_settings_count > 1)) echo '<i class="child-nav-icon fas fa-angle-down"></i>'; ?>
                                </a>
                                <?php
                                if(($page_settings_count > 1)):
                                    ?>
                                    <ul class="child-navs">
                                        <?php
                                        foreach ($page_settings as $section_id=>$nav_sections):
                                            $nav_sections_title = !empty($nav_sections['nav_title']) ? $nav_sections['nav_title'] : $nav_sections['title'];

                                            //var_dump($nav_sections_title);
                                            ?>
                                            <li>

                                                <a sectionId="<?php echo $section_id; ?>" dataid="<?php echo $page_id; ?>" href='#<?php echo $section_id; ?>' class='nav-item <?php if($current_page==$page_id) echo 'active'; ?>'><?php echo $nav_sections_title; ?>


                                                </a>


                                            </li>
                                        <?php

                                        endforeach;
                                        ?>
                                    </ul>
                                <?php
                                endif;
                                ?>





                            </li>

                            <?php



                            $current_page++;
                        endforeach;
                        ?>
                        <?php
                        do_action('nav_nav_items_bottom');
                        ?>
                    </div>

                    <div class="nav-footer">
                        <?php
                        do_action('nav_footer_top');
                        ?>

                        <?php
                        do_action('nav_footer_bottom');
                        ?>
                    </div>

                </div>

                <?php

                if($get_nav_position == 'right'){
                    $form_wrapper_position = 'left';
                }
                elseif($get_nav_position == 'left'){
                    $form_wrapper_position = 'right';
                }
                elseif($get_nav_position == 'top'){
                    $form_wrapper_position = 'full-width-top';
                }
                else{
                    $form_wrapper_position = 'full-width';
                }
                ?>

                <div class="form-wrapper <?php echo $form_wrapper_position; ?>">

                    <div class="form-section">
                        <?php

                        $current_page = 1;

                        foreach ($this->get_panels() as $panelsIndex=>$panel):



                            ?>
                            <div class="tab-content <?php if($current_page==1) echo 'active'; ?>  tab-content-<?php
                            echo $panelsIndex; ?>">
                                <?php
                                foreach ($panel['sections'] as $sectionIndex=>$section):
                                    ?>
                                    <div class="section">
                                        <h1 id="<?php echo $sectionIndex; ?>" class="section-title"><?php echo $section['title']; ?></h1>
                                        <p class="description"><?php echo $section['description']; ?></p>

                                        <table class="form-table">
                                            <tbody>

                                            <?php
                                            foreach ($section['options'] as $option):
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $option['title']; ?></th>
                                                    <td>
                                                        <?php

                                                        $option_value = get_post_meta($this->get_post_id(), $option['id'], true);

                                                        if(is_serialized($option_value)){
                                                            $option_value = unserialize($option_value);


                                                        }

                                                        $option['value'] = $option_value;





                                                        $this->field_generator($option)
                                                        ?>

                                                    </td>
                                                </tr>
                                                <?php

                                            endforeach;
                                            ?>

                                            </tbody>
                                        </table>

                                    </div>
                                    <pre><?php //echo var_export($section, true); ?></pre>
                                    <?php


                                endforeach;

                                ?>

                            </div>
                            <?php

                            $current_page++;
                        endforeach;

                        ?>

                    </div>
                </div>
            </div>
            <?php


        }




        public function field_generator( $option ) {

            $id 		= isset( $option['id'] ) ? $option['id'] : "";
            $type 		= isset( $option['type'] ) ? $option['type'] : "";
            $details 	= isset( $option['details'] ) ? $option['details'] : "";

            $post_id = $this->get_post_id();

            if( empty( $id ) ) return;

            $prent_option_name = $this->get_option_name();
            $FormFieldsGenerator = new FormFieldsGenerator();

            if(!empty($prent_option_name)):
                $field_name = $prent_option_name.'['.$id.']';
                $option['field_name'] = $field_name;

                $prent_option_value 	 		= get_post_meta($post_id,  $prent_option_name, true );

                $prent_option_value = is_serialized($prent_option_value) ? unserialize($prent_option_value): array();
                $option['value'] 	 		= isset($prent_option_value[$id]) ? $prent_option_value[$id] : '';
            else:
                $option['field_name'] = $id;
                $option_value 	 		= get_post_meta($post_id,  $id, true );
                $option['value'] = is_serialized($option_value) ? unserialize($option_value): $option_value;

            endif;


            //var_dump($prent_option_value);

            ?>
            <pre><?php //echo var_export($option, true)?></pre>
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
            elseif( isset($option['type']) && $option['type'] === 'checkbox_multi' ){
                echo $FormFieldsGenerator->field_checkbox_multi($option);
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
            elseif( isset($option['type']) && $option['type'] === 'color_sets' ){
                echo $FormFieldsGenerator->field_color_sets($option);
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
            elseif( isset($option['type']) && $option['type'] === 'margin' ){
                echo $FormFieldsGenerator->field_margin($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'padding' ){
                echo $FormFieldsGenerator->field_padding($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'border' ){
                echo $FormFieldsGenerator->field_border($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'switcher' ){
                echo $FormFieldsGenerator->field_switcher($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'password' ){
                echo $FormFieldsGenerator->field_password($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'post_objects' ){
                echo $FormFieldsGenerator->field_post_objects($option);
            }
            elseif( isset($option['type']) && $option['type'] === 'google_map' ){
                echo $FormFieldsGenerator->field_google_map($option);
            }

            elseif( isset($option['type']) && $option['type'] === $type ){
                do_action( "wp_theme_settings_field_$type", $option );
            }
            if( !empty( $details ) ) echo "<p class='description'>$details</p>";


        }



        private function get_meta_box_id(){
            if( isset( $this->data['meta_box_id'] ) ) return $this->data['meta_box_id'];
            else return "";
        }

        private function get_meta_box_title(){
            if( isset( $this->data['meta_box_title'] ) ) return $this->data['meta_box_title'];
            else return "";
        }

        private function get_meta_box_screen(){
            if( isset( $this->data['screen'] ) ) return $this->data['screen'];
            else return array('post');
        }

        private function get_meta_box_context(){
            if( isset( $this->data['context'] ) ) return $this->data['context'];
            else return 'normal';
        }

        private function get_meta_box_priority(){
            if( isset( $this->data['priority'] ) ) return $this->data['priority'];
            else return "high";
        }

        private function get_callback_args(){
            if( isset( $this->data['callback_args'] ) ) return $this->data['callback_args'];
            else return array();
        }

        private function get_panels(){
            if( isset( $this->data['panels'] ) ) return $this->data['panels'];
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

        private function get_option_name(){
            if( isset( $this->data['option_name'] )) return $this->data['option_name'];
            else return false;
        }

        private function get_nav_position(){
            if( isset( $this->data['nav_position'] )) return $this->data['nav_position'];
            else return 'left';
        }


        private function get_post_id(){

            $post_id = get_the_ID();
            return $post_id;
        }



    }























}