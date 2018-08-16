 function validate(){
	var password = $('input[name=password]');
	var user = $('input[name=user]');
	var puser = $('input[name=puser]');
	var stat;
	if(password.val() == ''){ password.addClass("merror"); stat = false; }   
	if(user.val() == ''){ user.addClass("merror"); stat = false; }   
	if(puser.val() == ''){ puser.addClass("merror"); stat = false; }   
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