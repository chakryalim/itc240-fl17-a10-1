<?php
/*
config.php

Stores configuration information for our web application

*/

//removes header already sent errors
ob_start();

define('DEBUG',true); #we want to see all errors


include 'credentials.php'; //stores database info
include 'common.php'; //stores facvorite functions


//prevents date errors
date_default_timezone_set('America/Los_Angeles');

//create config object
$config = new stdClass;

//create default page identifier 
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//START NEW THEME STUFF
$sub_folder = 'a10sprockets';//change to 'widgets' or 'sprockets' etc.

//add subfolder, in this case 'fidgets' if not loaded to root:
$config->physical_path = $_SERVER["DOCUMENT_ROOT"] . '/' . $sub_folder;
$config->virtual_path = 'https://' . $_SERVER["HTTP_HOST"] . '/' . $sub_folder;
$config->theme = 'BusinessCasual';//sub folder to themes

//END NEW THEME STUFF


//set website defaults
$config->title = THIS_PAGE;
$config->banner = 'Sprockets';
$config->loadhead = '';//place items in <head> element

switch(THIS_PAGE){
        
    case 'contact.php':
        $config->title = 'Contact Page';
        break;
        
    case 'appointment.php':
        $config->title = 'Appointment Page';
        $config->banner = 'Das Sprokkkets';
        break;
        
    case 'template.php':
        $config->title = 'Template Page';
        break;
    
        case 'artist_list.php':
        $config->title = 'Artists';
        break;
    
        case 'artist_view.php':
        $config->title = 'Artists';
        break;
        
        case 'index.php':
        $config->title = 'Home';
        break;
        
        case 'daily.php':
        $config->title = 'Daily Specials';
        break;
        
        case 'artists_pager.php':
        $config->title = 'Artists List';
        break;
}

//START NEW THEME STUFF
//creates theme virtual path for theme assets, JS, CSS, images
$config->theme_virtual = $config->virtual_path . '/themes/' . $config->theme . '/';
//END NEW THEME STUFF

?>