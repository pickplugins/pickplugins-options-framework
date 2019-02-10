<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


if( ! class_exists( 'InsertPost' ) ) {

    class InsertPost {

        public $data = array();

        public function __construct(){

            // Nothing to do


        }


        public function insert_post($args){
            $this->data = &$args;

            $get_args    = $this->get_args();

            $PostID = wp_insert_post($get_args);


            $this->update_meta_fields($PostID);
            return $PostID;

        }

        public function update_meta_fields($PostID){
            $get_meta_fields    = $this->get_meta_fields();

            if(!empty($get_meta_fields)):
                foreach ($get_meta_fields as $fieldKey=>$fieldValue):

                    $prevValue = get_post_meta($PostID, $fieldKey, true);

                    if(is_array($fieldValue)){
                        $fieldValue = serialize($fieldValue);
                    }

                    update_post_meta($PostID, $fieldKey, $fieldValue, $prevValue);
                endforeach;
            endif;

        }


        private function get_args(){
            if( isset( $this->data['args'] ) ) return $this->data['args'];
            else return array();
        }

        private function get_meta_fields(){
            if( isset( $this->data['meta_fields'] ) ) return $this->data['meta_fields'];
            else return array();
        }


    }

}