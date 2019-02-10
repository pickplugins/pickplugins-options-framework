<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 







$args = array(
    'nav_menus' => array(
        array(
            'header-menu1' => esc_html__( 'Header Menu 1', 'dart-framework' ),
        ),

        array(
            'header-menu2' => esc_html__( 'Header Menu 2', 'dart-framework' ),
        ),
    ),
);

$CreateNavMenus = new CreateNavMenus($args);




























