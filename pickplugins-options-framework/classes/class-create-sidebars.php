<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


if( ! class_exists( 'CreateSidebars' ) ) {

    class CreateSidebars {

        public $data = array();

        public function __construct($args){

            // Nothing to do
            $this->data = &$args;
            add_action( 'widgets_init', array( $this, 'create_sidebar' ), 12 );


        }






        public function create_sidebar(){

            $get_sidebars    = $this->get_sidebars();

            foreach ($get_sidebars as $sidebar){
                register_sidebar($sidebar);
            }



        }




        private function get_sidebars(){
            if( isset( $this->data['sidebars'] ) ) return $this->data['sidebars'];
            else return array();
        }




    }

}