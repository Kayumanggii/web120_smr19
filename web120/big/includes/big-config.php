<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6Ldmt7IUAAAAAA9aXdo8zWhGHK2YlYxbzCYxe2wC";
$secretKey = "6Ldmt7IUAAAAABk8cE6t_zUjO_QS51laxaSNenTN";

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

date_default_timezone_set('America/Los_Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'big-index.php':
        $title = "Clara's WEB 120 BIG Final Project";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'site-app.php':
        $title = "Responsive website vs Mobile Applications Research";
        $logo = '';
        $PageID = 'Responsive website vs Mobile Applications';
    break;
        
    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = '';
        $PageID = 'Flexbox Research';
    break;
        
     case 'galleries.php':
        $title = "Galleries Research";
        $logo = '';
        $PageID = 'Galleries Research';
    break;
     
    case 'shoppingcarts.php':
        $title = "Shopping Cart Research";
        $logo = '';
        $PageID = 'Shopping Cart Research';
    break; 
        
    case 'map.php':
        $title = "Google Map";
        $logo = '';
        $PageID = 'Google Map';
    break;
    
    case 'calendar.php':
        $title = "Calendar";
        $logo = '';
        $PageID = 'Calendar';
    break;
        
    case 'webcam.php':
        $title = "Web Camera";
        $logo = '';
        $PageID = 'Webcam';
    break;
   
    case 'contactme.php':
        $title = "Clara's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Clara';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }


?>