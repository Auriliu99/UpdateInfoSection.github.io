 function validate(){
	var login_email = $('input[name=login_email]');
	var login_password = $('input[name=login_password]');
	var stat;
	if(login_email.val() == ''){ login_email.addClass("merror"); stat = false; }   
	if(login_password.val() == ''){ login_password.addClass("merror"); stat = false; }  
	if(stat == false) {return false ;}
	return true;
}

$("input").change(function () {
        $(this).removeClass("merror");
		$(this).removeClass("merror");
		$(this).removeClass("merror");
}).trigger("change");
$("select").change(function () {
        $(this).removeClass("merror");
}).trigger("change");