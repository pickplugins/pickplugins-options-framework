<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


if( ! class_exists( 'CreateNavMenus' ) ) {

    class CreateNavMenus {

        public $data = array();

        public function __construct($args){

            // Nothing to do
            $this->data = &$args;
            add_action( 'after_setup_theme', array( $this, 'after_setup_theme' ), 12 );


        }


        public function after_setup_theme(){

            $get_sidebars    = $this->get_nav_menus();

            foreach ($get_sidebars as $sidebar){
                register_nav_menus($sidebar);
            }

        }


        private function get_nav_menus(){
            if( isset( $this->data['nav_menus'] ) ) return $this->data['nav_menus'];
            else return array();
        }




    }

}