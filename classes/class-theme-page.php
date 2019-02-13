<?php
/*
* @Author 	:	PickPlugins
* Copyright	: 	2015 PickPlugins.com
*
* Version	:	1.0.3
*/

if ( ! defined('ABSPATH')) exit;  // if direct access


if( ! class_exists( 'AddThemePage' ) ) {
    class AddThemePage {

        public $data = array();

        public function __construct( $args ){

            $this->data = &$args;

            if( $this->add_in_menu() ) {
                add_action( 'admin_menu', array( $this, 'add_menu_in_admin_menu' ), 12 );
            }

            add_action( 'admin_init', array( $this, 'display_fields' ), 12 );
            add_filter( 'whitelist_options', array( $this, 'whitelist_options' ), 99, 1 );
        }

        public function add_menu_in_admin_menu(){

            if( "main" == $this->get_menu_type() ) {
                add_theme_page( $this->get_menu_name(), $this->get_menu_title(), $this->get_capability(), $this->get_menu_slug(), array( $this, 'display_function' ), $this->get_menu_icon() );
            }

//            foreach ($this->get_pages() as $panelsIndex=>$panels):
//                add_submenu_page( $this->get_menu_slug(), $panels['page_nav'], $panels['page_nav'], $this->get_capability(),
//                    $panelsIndex,
//                    array( $this, 'display_function' ) );
//            endforeach;

        }

        public function section_callback( $section ) {

            $section_id = $section['id'];
            //var_dump($section_id);


            $data = isset( $section['callback'][0]->data ) ? $section['callback'][0]->data : array();


            ?>
            <?php
            //$description = $section['description'];

            $description = $section['id'] ;
            echo '<div id="'.$section['id'].'"></div>';
        }

        public function display_fields() {

            foreach ($this->get_pages() as $panelsIndex=>$panels):

                //var_dump($panelsIndex);

                foreach ($panels['page_settings'] as $sectionIndex=>$sections):

                    add_settings_section(
                        $sectionIndex,
                        isset( $sections['title'] ) ? $sections['title'] : "",
                        array( $this, 'section_callback'),
                        $panelsIndex
                    );

                    foreach( $sections['options'] as $option ) :

                        add_settings_field( $option['id'], $option['title'], array($this,'field_generator'), $panelsIndex, $sectionIndex, $option );

                    endforeach;

                endforeach;
            endforeach;



        }

        public function field_generator( $option ) {

            $id 		= isset( $option['id'] ) ? $option['id'] : "";
            $type 		= isset( $option['type'] ) ? $option['type'] : "";
            $details 	= isset( $option['details'] ) ? $option['details'] : "";

            if( empty( $id ) ) return;

            $FormFieldsGenerator = array();
            $prent_option_name = $this->get_option_name();
            $FormFieldsGenerator = new FormFieldsGenerator();

            if(!empty($prent_option_name)):
                $field_name = $prent_option_name.'['.$id.']';
                $option['field_name'] = $field_name;

                $prent_option_value 	 		= get_option( $prent_option_name );
                $option['value'] 	 		= isset($prent_option_value[$id]) ? $prent_option_value[$id] : '';
            else:
                $option['field_name'] = $id;
                $option['value']	 		= get_option( $id );
            endif;


            ?>
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











        public function whitelist_options( $whitelist_options ){
            $prent_option_name = $this->get_option_name();

            if($prent_option_name):
                $whitelist_options[$this->get_menu_slug()][] = $prent_option_name;
            else:
                foreach( $this->get_pages() as $page_id => $page ): foreach( $page['page_settings'] as $section ):
                    foreach( $section['options'] as $option ):
                        $whitelist_options[$this->get_menu_slug()][] = $option['id'];
                    endforeach; endforeach;
                endforeach;
            endif;




            update_option('whitelist_options',$whitelist_options );

            return $whitelist_options;
        }

        public function display_function(){

            ?>
            <div class='wrap ppof-settings'>

                <?php


                parse_str( $_SERVER['QUERY_STRING'], $nav_menu_url_args );
                global $pagenow;


                settings_errors();



                ?>




                <div class='navigation'>

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

                    <ul class="nav-items">
                        <?php

                        //$current_page = isset($_GET['page'])? $_GET['page'] : '';
                        $current_page = $this->get_current_page();

                        foreach( $this->get_pages() as $page_id => $page ):

                            $page_settings = !empty($page['page_settings']) ? $page['page_settings'] : array();


                            $page_settings_count = count($page_settings);
                            //var_dump($page_settings);
                            ?>
                            <li class="nav-item-wrap <?php if(($page_settings_count > 1)) echo 'has-child'; ?> <?php if($current_page==$page_id) echo 'active'; ?>">
                                <a dataid="<?php echo $page_id; ?>" href='#<?php //echo $pagenow.'?'.$nav_menu_url; ?><?php echo
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

                                                <a sectionId="<?php echo $section_id; ?>" dataid="<?php echo $page_id; ?>" href='#<?php //echo $pagenow.'?'.$nav_menu_url; ?><?php echo
                                                $page_id; ?>' class='nav-item <?php if($current_page==$page_id) echo 'active'; ?>'><?php echo $nav_sections_title; ?>


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




                        endforeach;
                        ?>

                    </ul>

                    <div class="nav-footer">
                        <?php
                        do_action('nav_footer_top');
                        ?>

                        <?php
                        do_action('nav_footer_bottom');
                        ?>
                    </div>

                </div>
                <div class="form-wrapper">




                    <form class="" action='options.php' method='post'>
                        <div class="form-header">
                            <div class="pp-row">
                                <div class="pp-col pp-col-50">
                                    <div class="pagename"> # <?php echo $this->get_menu_page_title(); ?></div>
                                </div>
                                <div class="pp-col pp-col-50 text-align-right">
                                    <?php submit_button(null,'primary', null, false); ?>
                                </div>

                            </div>

                        </div>

                        <div class="form-section">
                            <?php

                            $current_page = $this->get_current_page();



                            foreach ($this->get_pages() as $panelsIndex=>$panels):
                                ?>
                                <div class="tab-content <?php if($current_page==$panelsIndex) echo 'active'; ?>  tab-content-<?php echo
                                $panelsIndex;
                                ?>">
                                    <?php
                                    do_settings_sections( $panelsIndex);
                                    ?>
                                </div>
                            <?php


                            endforeach;

                            settings_fields( $this->get_menu_slug() );
                            ?>

                        </div>



                        <div class="form-footer">

                            <div class="pp-row">
                                <div class="pp-col pp-col-50">
                                    <div class=""></div>
                                    <span><a target="_blank" href="https://github.com/pickplugins/pickplugins-options-framework">PickPlugins Options Framework</a> | Developed by : <a class="" href="http://pickplugins.com">PickPlugins</a> | Version: 1.0.0</span>
                                </div>
                                <div class="pp-col pp-col-50 text-align-right">
                                    <?php submit_button(null,'primary', null, false); ?>
                                </div>
                            </div>



                        </div>


                    </form>

                </div>

            </div>
            <?php
        }


        // Default Functions



        public function get_current_page(){

            $current_page = isset($_GET['page'])? $_GET['page'] : '';

            $pages = array();
            foreach ($this->get_pages() as $panelsIndex=>$panels):

                $pages[] = $panelsIndex;

            endforeach;


            // var_dump($pages);

            foreach ($pages as $page):
                if($current_page == $page){
                    $_current_page = $page;
                    break;
                }
                else{
                    $_current_page = $pages[0];
                }
            endforeach;

            return $_current_page;

        }

        private function get_item_name(){
            if( isset( $this->data['item_name'] ) ) return $this->data['item_name'];
            else return "PickPlugins";
        }

        private function get_item_version(){
            if( isset( $this->data['item_version'] ) ) return $this->data['item_version'];
            else return "1.0.0";
        }


        private function get_menu_type(){
            if( isset( $this->data['menu_type'] ) ) return $this->data['menu_type'];
            else return "main";
        }
        private function get_pages(){
            if( isset( $this->data['panels'] ) ) return $this->data['panels'];
            else return array();
        }

        private function get_settings_name(){
            if( isset( $this->data['settings_name'] ) ) return $this->data['settings_name'];
            else return "my_custom_settings";
        }
        private function get_menu_icon(){
            if( isset( $this->data['menu_icon'] ) ) return $this->data['menu_icon'];
            else return "";
        }
        private function get_menu_slug(){
            if( isset( $this->data['menu_slug'] ) ) return $this->data['menu_slug'];
            else return "my-custom-settings";
        }
        private function get_capability(){
            if( isset( $this->data['capability'] ) ) return $this->data['capability'];
            else return "manage_options";
        }
        private function get_menu_page_title(){
            if( isset( $this->data['menu_page_title'] ) ) return $this->data['menu_page_title'];
            else return "My Custom Menu";
        }
        private function get_menu_name(){
            if( isset( $this->data['menu_name'] ) ) return $this->data['menu_name'];
            else return "Menu Name";
        }
        private function get_menu_title(){
            if( isset( $this->data['menu_title'] ) ) return $this->data['menu_title'];
            else return "Menu Title";
        }
        private function get_page_title(){
            if( isset( $this->data['page_title'] ) ) return $this->data['page_title'];
            else return "Page Title";
        }
        private function add_in_menu(){
            if( isset( $this->data['add_in_menu'] ) && $this->data['add_in_menu'] ) return true;
            else return false;
        }

        private function get_option_name(){
            if( isset( $this->data['option_name'] )) return $this->data['option_name'];
            else return false;
        }

        private function get_option_id(){
            if( isset( $this->data['option_id'] ) && $this->data['option_id'] ) return $this->data['option_id'];
            else return "";
        }

    }

}


