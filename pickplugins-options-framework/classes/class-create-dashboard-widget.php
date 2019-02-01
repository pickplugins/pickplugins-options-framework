<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 

if( ! class_exists( 'CreateDashboardWidget' ) ) {

    class CreateDashboardWidget
    {

        public $data = array();

        public function __construct($args){

            $this->data = &$args;
            add_action( 'wp_dashboard_setup', array( $this, 'dashboard_setup' ), 12 );

        }

        public function dashboard_setup(){

            global $wp_meta_boxes;

            wp_add_dashboard_widget($this->get_widget_id(), $this->get_widget_name(), array( $this, 'widget_callback' ));



        }


        public function widget_callback(){

            echo $this->get_widget_html();

        }


        private function get_widget_html(){
            if( isset( $this->data['html'] ) ) return $this->data['html'];
            else return array();
        }

        private function get_widget_name(){
            if( isset( $this->data['widget_name'] ) ) return $this->data['widget_name'];
            else return array();
        }

        private function get_widget_id(){
            if( isset( $this->data['widget_id'] ) ) return $this->data['widget_id'];
            else return array();
        }

    }
}