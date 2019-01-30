<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


if( ! class_exists( 'CreateUser' ) ) {

    class CreateUser {

        public $data = array();

        public function __construct(){

            // Nothing to do

        }


        public function update_user_meta($user_id){

            $get_user_meta = $this->get_user_meta();

            if(!empty($get_user_meta)):
                foreach ($get_user_meta as $key=>$meta):
                    $old_meta_val = get_user_meta($user_id, $key, true);
                    update_user_meta( $user_id, $key, $meta, $old_meta_val );
                endforeach;
            endif;

        }



        public function create_user($args){

            $this->data = &$args;
            $get_email    = $this->get_email();
            $get_username  = $this->get_username();
            $get_password   = $this->get_password();
            $get_user_meta   = $this->get_user_meta();

            $user_id = username_exists( $get_username );

            if(!$this->is_email_exists()):
                if($this->is_username_exists()):
                    $username = $this->regenerate_username_if_exist($get_username);


                    $user_id = wp_create_user( $username, $this->generate_password(), $get_email );
                else:
                    $user_id = wp_create_user( $get_username, $this->generate_password(), $get_email );

                endif;

                $this->update_user_meta($user_id);
                return $user_id;

            else:

                return array('user_exist'=>'User already Exist.');

            endif;

        }

        private function is_username_exists(){

            $get_username    = $this->get_username();

            if(username_exists($get_username)):
                return true;
            else:
                return false;
            endif;

        }
        private function is_email_exists(){

            $get_email    = $this->get_email();

            if(email_exists($get_email)):
                return true;
            else:
                return false;
            endif;

        }

        private function regenerate_username_if_exist($username){

            if ( username_exists( $username ) ){
                $x = 1;
                while(username_exists( $username )){
                    $username = $username.$x;
                    $x++;
                }
            }

            return $username;

        }
        private function generate_username_from_email(){
            $get_email = $this->get_email();
            $email_arr = explode('@', $get_email);

            $email_username = isset($email_arr[0]) ? $email_arr[0] : '';

            return $email_username;
        }

        private function generate_password(){

            $random_password = wp_generate_password( $length=12, $include_standard_special_chars = true );
        }

        private function get_password(){
            if( isset( $this->data['password'] ) ){
                return $this->data['password'];
            }
            else{
                return $this->generate_password();
            }
        }

        private function get_username(){
            if( isset( $this->data['username'] ) ){
                return $this->data['username'];
            }
            else{

                return $this->generate_username_from_email();
            }
        }

        private function get_email(){
            if( isset( $this->data['email'] ) ) return $this->data['email'];
            else return array();
        }

        private function get_user_meta(){
            if( isset( $this->data['user_meta'] ) ) return $this->data['user_meta'];
            else return array();
        }




    }

}