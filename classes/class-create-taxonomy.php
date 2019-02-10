<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


if( ! class_exists( 'CreateTaxonomy' ) ) {

    class CreateTaxonomy {

        public $data = array();

        public function __construct($args){

            $this->data = &$args;

            add_action( 'init', array( $this, 'create_taxonomy' ), 12 );


        }





        public function create_taxonomy(){

            $get_taxonomy  = $this->get_taxonomy();
            $get_post_type   = $this->get_post_type();
            $get_options   = $this->get_options();

            register_taxonomy($get_taxonomy,$get_post_type,$get_options);
        }




        private function get_options(){
            if( isset( $this->data['options'] ) ) return $this->data['options'];
            else return '';
        }

        private function get_post_type(){
            if( isset( $this->data['post_type'] ) ) return $this->data['post_type'];
            else return array();
        }

        private function get_taxonomy(){
            if( isset( $this->data['taxonomy'] ) ) return $this->data['taxonomy'];
            else return array();
        }



    }

}