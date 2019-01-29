<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


if( ! class_exists( 'CreateUser' ) ) {

    class CreateUser {

        public $data = array();

        public function __construct(){

            //$this->data = &$args;

            //add_action( 'init', array( $this, 'create_user' ), 12 );


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
                    return array('user_exist'=>'Username already Exist.');
                else:
                    $user_id = wp_create_user( $get_username, $this->generate_password(), $get_email );
                endif;

            else:

                return array('user_exist'=>'User already Exist.');

            endif;


            return $user_id;

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

        private function generate_username_from_email(){
            $get_email = $this->get_email();
            $email_arr = explode('@', $get_email);

            $email_username = isset($email_arr[0]) ? $email_arr[0] : '';

            //var_dump($email_username);

            if ( username_exists( $email_username ) ){
                $x = 1;
                while(username_exists( $email_username )){
                    $username = $email_username.$x;
                    $x++;
                }
            }

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

        private function auto_genrate_username(){
            if( isset( $this->data['auto_genrate_username'] ) ) return $this->data['auto_genrate_username'];
            else return true;
        }


    }

}