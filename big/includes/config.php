<?php
/*
    config.php allows us to place configuration information
    into our web application
*/

$siteKey = "6Led7L8UAAAAAGekKcW6X-envuyyh6mWVuE1QluU";
$secretKey = "6Led7L8UAAAAANW7lNkQP_KE88zFvJBcIGjnvi_y";

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this 

//identifies unique page url
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


//this helps elimite php date errors


//these are page specific
switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Big Home';
        $logo = 'fa-home';
        $PageID ='Client Questioneer';
    break;
     
    case 'flexbox.php':
        $title = 'Flex Box';
        $logo = 'fa-home';
        $PageID ='CSS Flex Box';
    break;
        
    case 'galleries.php':
        $title = 'Galleries';
        $logo = 'fa-home';
        $PageID ='Galleries';
    break;
        
    case 'calendar.php':
        $title = 'Calendar';
        $logo = 'fa-home';
        $PageID ='Google Calendar';
    break;
        
    case 'map.php':
        $title = 'Map';
        $logo = 'Map';
        $PageID ='Google map';
    break;
        
    case 'youtube.php':
        $title = 'YouTube';
        $logo = 'fa-home';
        $PageID ='Google YouTube Video';
    break;
        
        case 'shoppingcarts.php':
        $title = 'Shopping Carts';
        $logo = 'fa-home';
        $PageID ='Shopping Carts';
    break;
        
        case 'siteapp.php':
        $title = 'Website App';
        $logo = 'fa-home';
        $PageID ='Site Vs App';
    break;
        
        case 'webcam.php':
        $title = 'Web Cam';
        $logo = 'fa-home';
        $PageID ='Live Web cameras';
    break;
        
    case 'contactform.php':
        $title = 'Contact Us';
        $logo = 'fa-home';
        $PageID ='Contact Form';
    break;
        
         
    default:
        $title = THIS_PAGE;
        $logo = '';
        $pageID = '';
        
}

//functions go at the bottom


