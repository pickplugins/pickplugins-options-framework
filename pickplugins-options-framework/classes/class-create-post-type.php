<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


if( ! class_exists( 'CreatePostType' ) ) {

    class CreatePostType {

        public $data = array();

        public function __construct($args){

            $this->data = &$args;

            add_action( 'init', array( $this, 'generate_post_type' ), 12 );


        }





        public function generate_post_type(){

            $get_options = $this->get_options();
            $get_post_type = $this->get_post_type();

            register_post_type( $get_post_type , $get_options );
        }


        private function get_post_type(){
            if( isset( $this->data['post_type'] ) ) return $this->data['post_type'];
            else return '';
        }

        private function get_options(){
            if( isset( $this->data['options'] ) ) return $this->data['options'];
            else return array();
        }


    }























}