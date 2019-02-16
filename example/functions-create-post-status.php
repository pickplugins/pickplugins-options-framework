<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 







    $args = array(
        'unreadx' => array(
            'label'                     => _x( 'UnreadX', 'post' ),
            'public'                    => true,
            'exclude_from_search'       => false,
            'show_in_admin_all_list'    => true,
            'show_in_admin_status_list' => true,
            'label_count'               => _n_noop( 'Unread <span class="count">(%s)</span>', 'Unread <span class="count">(%s)</span>' ),
        ),
    );

    $CreatePostStatus = new CreatePostStatus($args);



function my_custom_status_creation(){
    register_post_status( 'approved', array(
        'label'                     => _x( 'Approved', 'post' ),
        'label_count'               => _n_noop( 'Approved <span class="count">(%s)</span>', 'Approved <span class="count">(%s)</span>'),
        'public'                    => true,
        'exclude_from_search'       => false,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true
    ));
}
add_action( 'init', 'my_custom_status_creation' );

function my_custom_status_add_in_quick_edit() {
    echo "<script>
        jQuery(document).ready( function() {
            jQuery( 'select[name=\"_status\"]' ).append( '<option value=\"approved\">Approved</option>' );      
        }); 
        </script>";
}
add_action('admin_footer-edit.php','my_custom_status_add_in_quick_edit');
function my_custom_status_add_in_post_page() {
    echo "<script>
        jQuery(document).ready( function() {        
            jQuery( 'select[name=\"post_status\"]' ).append( '<option value=\"approved\">Approved</option>' );
        });
        </script>";
}
add_action('admin_footer-post.php', 'my_custom_status_add_in_post_page');
add_action('admin_footer-post-new.php', 'my_custom_status_add_in_post_page');



add_shortcode('pp_get_all_post_status','pp_get_all_post_status');

function pp_get_all_post_status(){

    $statuses = get_post_statuses();

    var_dump($statuses);
}



















