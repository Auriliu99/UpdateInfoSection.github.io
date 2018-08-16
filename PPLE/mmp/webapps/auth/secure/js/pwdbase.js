

//OnPageInit();  //For some reason the OnLoad does not execute with Arcot Cards.
//Checks to see if "Chip Password" is in the authentication method list
//or is the default authentication method
function ChipCardInAuthList()
{
	var retValue= false;
	var objAuthType = document.forms[0].authSelect;
	if ( objAuthType != null )
	{
		var optLength = objAuthType.length;
		var idx;
		for ( idx = 0; idx < optLength; idx++ )
		{
			var objValue = objAuthType.options[idx].value;
			if ( objValue == "Chip Password")
			{
				retValue = true;
				break;
			}
		}
	} else {
		var objValue = document.forms[0].authDefaultSelect.value;
		//The only method is "Chip Password"
		if ( objValue == "Chip Password")
		{	
			retValue = true;
		}
	}
	debugAlert("ChipCardInAuthList is "+retValue+".");
	
	return retValue;
}

//ChipCardSelected() - returns true if either "Chip Password"
//is selected in the auth select dropdown or if "Chip Password"
//is the default ( only ) auth method for this card.
function ChipCardSelected()
{
	var retValue= false;
	var objAuthType = document.forms[0].authSelect;
	if ( objAuthType != null )
	{
		var nOptIndex = objAuthType.selectedIndex;
		var objValue = objAuthType.options[nOptIndex].value;
		if ( objValue == "Chip Password")
		{
				retValue = true;
		}
	} else {
		var objValue = document.forms[0].authDefaultSelect.value;
		//The only method is "Chip Password"
		if ( objValue == "Chip Password")
		{	
			retValue = true;
		}
	}
	debugAlert("ChipCardSelected is "+retValue+".");
	
	return retValue;
}
//Checks to see if we are using Chip Card and if we have
//the Visa Password or another auth method available
function CanFallBack()
{
	var retValue;
	
	if ( document.forms[0].AuthFallBack.value != "" 
		&& document.forms[0].AuthFallBack.value != null )
	{
		debugAlert("Can Fallback");
		retValue = true;
	} else {
		debugAlert("Cannot Fallback");
	
		retValue = false;	
	}
	
	return retValue;
	
}

function AuthSelectExists()
{
	var retValue;
	
	if ( document.forms[0].authSelect == null ) 
	{
		retValue = false;
	} else {
		retValue = true;
	}
	
	return retValue;
}


function SecurityWindow()
{
	var win = window.open(document.passwdForm.Locale.value + "security.htm", "Security" ,	 
	"height=300,width=360,dependent=yes,scrollbars=yes,resizable=no,screenX=100,screenY=100,left=100,top=100");
}
function HelpWindow()
{
	var helpHtml;
	if ( ChipCardSelected())
	{
		helpHtml = document.passwdForm.Locale.value + "chiphelp.htm";		
	    	win = window.open(helpHtml,"Help",
		"height=390,width=400,dependent=yes,scrollbars=yes,resizable=no,screenX=100,screenY=100,left=100,top=100");
		win.focus();
	} else {
		helpHtml = document.passwdForm.Locale.value + "help.htm";
		win = window.open(helpHtml,"Help",
		"width=390,height=400,dependent=yes,scrollbars=yes,resizable=no,screenX=100,screenY=100,left=100,top=100");
		win.focus();
		
	}
}

function IsNetscapeOnSolaris()
{
	var agent = window.navigator.userAgent;
	if (( agent.indexOf('Mozilla') != -1 ) && ( agent.indexOf('compatible') == -1 ))
	{
		if ( agent.indexOf('SunOS') != -1 )
			return true;
		else
			return false;
	}
	else
	{
		return false;
	}
}

function OnCancelHandler(object)
{
	if ( navigator.appName == "Netscape" )
	{
		object.href = "#";
	} 
	var objCardHolder = document.passwdForm.cardHolderSelect;
	if ( objCardHolder != null ) {
		var chIndex = objCardHolder.selectedIndex;
		document.passwdForm.cardHolder.value = objCardHolder.options[chIndex].text;
	}
	document.passwdForm.authType.value = document.forms[0].authDefaultSelect.value;
	document.passwdForm.cancelHit.value = "%#*@NO_PASSWORD_@*#%";
	if ( IsNetscapeOnSolaris() )
	{
		setTimeout('document.passwdForm.submit()', 500);
	}
	else
	{
		document.passwdForm.submit();
	}
}

function OnFPWDHandler(object)
{
	if ( navigator.appName == "Netscape" )
	{
		object.href = "#";
	} 
	var objCardHolder = document.passwdForm.cardHolderSelect;
	if ( objCardHolder != null ) {
		var chIndex = objCardHolder.selectedIndex;
		document.passwdForm.cardHolder.value = objCardHolder.options[chIndex].text;
	}
	document.passwdForm.authType.value = document.forms[0].authDefaultSelect.value;
	document.passwdForm.forgotPassword.value = 1;
	if ( IsNetscapeOnSolaris() )
	{
		setTimeout('document.passwdForm.submit()', 500);
	}
	else
	{
		document.passwdForm.submit();
	}
}

function OnSubmitHandler()
{
	df = document.forms[0];
	
	if ( df.submitted.value != 1 )
		closing = false;
	else
		closing = true;
		
	OnClickHandler();
	return false;
}

function OnMultiSubmitHandler()
{
	pam = document.passwdForm.pam.value;
	pin1 = document.passwdForm.pin1.value;
	pin2 = document.passwdForm.pin2.value;
	
	var r1 = /[a-z]/i;
	var r2 = /[0-9]/;	
	
	if(pin1 == "" || pin1 == null || pin2 == "" || pin2 == null){
		msg = "Il campo Password è obbligatorio.";
		alert(msg);
		return false;	
	}	

	if(pam == "" || pam == null){
		msg = "Il campo Frase Identificativa è obbligatorio.";
		alert(msg);
		return false;	
	}
	
	

	if(pin1.length < 8 || pin1.length > 12 || !r1.test(pin1) || !r2.test(pin1))
	{
		alert("Ricorda che la Password deve avere una lunghezza compresa fra gli 8 e i 12 caratteri e con almeno un carattere alfabetico e uno numerico.");
		document.passwdForm.pin1.value = "";
		document.passwdForm.pin1.focus();
		document.passwdForm.pin2.value = "";
		return false;
		
		
	}
	
	if(pam.length < 8 || pam.length > 30){
		alert("La Frase Identificativa deve contenere tra 8 e 30 caratteri.");
		document.passwdForm.pam.value = "";
		document.passwdForm.pam.focus();
		return false;	
	}
	
	if(document.passwdForm.pin1.value == document.passwdForm.pin2.value)
	{
		document.passwdForm.pin.value = pin1 + "~" + pam;
		//alert(document.passwdForm.pin.value);
		OnClickHandler();
		return false;
	}
	else
	{
		alert("La password inserita non corrisponde al campo Conferma Password.");
		document.passwdForm.pin1.value = "";
		document.passwdForm.pin1.focus();
		document.passwdForm.pin2.value = "";
		return false;
	}
}

function SetSubmit()
{
	document.passwdForm.submitted.value = 1;
}

function ResetSubmit()
{
	document.passwdForm.submitted.value = 0;
}

function ClearPin()
{
	document.passwdForm.pin.value = "";
	document.passwdForm.pin.focus();
}


