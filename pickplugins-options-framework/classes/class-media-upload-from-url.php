<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


if( ! class_exists( 'MediaUploadFromURL' ) ) {

    class MediaUploadFromURL {

        public $data = array();

        public function __construct(){

            // Nothing to do

        }


        public function upload_file($args){
            $this->data = &$args;


            require_once( ABSPATH . 'wp-admin/includes/file.php' );
            include( ABSPATH . 'wp-admin/includes/image.php' );


            $url = $this->get_file_src_url();
            $timeout_seconds = $this->get_timeout();
            $file_name = basename($url);

            $temp_file = download_url( $url, $timeout_seconds );

            if ( !is_wp_error( $temp_file ) ) {

                $file = array(
                    'name'     =>  $file_name,
                    'type'     => 'image/png',
                    'tmp_name' => $temp_file,
                    'error'    => 0,
                    'size'     => filesize($temp_file),
                );

                $overrides = array(
                    'test_form' => false,
                    'test_size' => true,
                );

                // Move the temporary file into the uploads directory
                $results = wp_handle_sideload( $file, $overrides );

                if ( !empty( $results['error'] ) ) {
                    // Insert any error handling here
                    return $results['error'];
                } else {

                    $filename  = $results['file']; // Full path to the file
                    $local_url = $results['url'];  // URL to the file in the uploads dir
                    $type      = $results['type']; // MIME type of the file

                    // Perform any actions here based in the above results

                    $attachment = array(
                        'post_mime_type' => $results['type'],
                        'post_title' => preg_replace('/\.[^.]+$/', '', basename($file['name'])),
                        'post_content' => '',
                        'post_status' => 'inherit'
                    );

                    $attach_id = wp_insert_attachment($attachment, $local_url);
                    $attach_data = wp_generate_attachment_metadata($attach_id, $local_url);
                    wp_update_attachment_metadata($attach_id, $attach_data);

                    return $attach_id;
                }



            }



        }


        private function get_timeout(){
            if( isset( $this->data['timeout'] ) ) return $this->data['timeout'];
            else return array();
        }

        private function get_file_src_url(){
            if( isset( $this->data['file_src_url'] ) ) return $this->data['file_src_url'];
            else return array();
        }

        private function get_file_title(){
            if( isset( $this->data['file_title'] ) ) return $this->data['file_title'];
            else return array();
        }

        private function get_file_type(){
            if( isset( $this->data['type'] ) ) return $this->data['type'];
            else return 'image/png';
        }
        private function get_post_id(){
            if( isset( $this->data['post_id'] ) ) return $this->data['post_id'];
            else return '';
        }

    }

}