<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


if( ! class_exists( 'CreatePostStatus' ) ) {

    class CreatePostStatus {

        public $data = array();

        public function __construct($args){

            // Nothing to do
            $this->data = &$args;
            add_action( 'init', array( $this, 'create_post_status' ), 12 );
        }






        public function create_post_status(){

            $get_args    = $this->data;

            foreach ($get_args as $status_Index=>$statusarg){
                register_post_status($status_Index, $statusarg);
            }



        }






    }

}