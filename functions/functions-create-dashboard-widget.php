<?php
/*
* @Author 		pickplugins
* Copyright: 	pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 




$args = array(

    'widget_id' => 'pickplugins_support',
    'widget_name' => 'PickPlugins Options Framework',
    'html' => '<p>Welcome to <b>PickPlugins Options Framework</b>! Need help? Please visit: <a href="https://github.com/pickplugins/pickplugins-options-framework" 
target="_blank">https://github.com/pickplugins/pickplugins-options-framework</a></p>',


);

$CreateDashboardWidget = new CreateDashboardWidget($args);



$args = array(
    'widget_id' => 'lorem_ipsum',
    'widget_name' => 'Lorem Ipsum',
    'html' => '<p><b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s.</p>');

$CreateDashboardWidget = new CreateDashboardWidget($args);




























