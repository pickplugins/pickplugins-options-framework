<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 







//add_action( 'customize_register', 'customizer_settings', 12 );


 function customizer_settings($wp_customize){

     if( class_exists( 'WP_Customize_Control' ) ):
         class WP_Customize_Text_multi extends WP_Customize_Control {
             public $type = 'text_multi';
             public $post_type = 'post';

             public function render_content() {



                 ?>
                 <label>
                     <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                 </label>
                 <?php
             }
         }
     endif;


     $wp_customize->add_setting(
         'latest_post_dropdown',
         array(
             'default'     => '',
             'sanitize_callback' => 'sanitize_text_field'
         )
     );

     $wp_customize->add_control(
         new WP_Customize_Text_multi(
             $wp_customize,
             'featpost_control',
             array(
                 'label' => __( 'Select A Featured Post', 'mytheme' ),
                 'section' => 'section-1',
                 'settings' => 'latest_post_dropdown',
                 'post_type' => 'post',
                 'type' => 'latest_post_dropdown'
             )
         )
     );









}











