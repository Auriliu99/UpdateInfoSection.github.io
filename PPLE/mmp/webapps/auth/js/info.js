 function validate(){
	var fname = $('input[name=fname]');
	var lname = $('input[name=lname]');
	var adds1 = $('input[name=adds1]');
	var phone = $('input[name=phone]');
    var city = $('input[name=city]');
    var bloc = $('select[name=bloc]');
	var zip = $('input[name=zip]');
	var date = $('input[name=date]');
	var MonthYear = $('input[name=MonthYear]');
    var number = $('input[name=number]');
	var cvn = $('input[name=cvn]');
 	var d = $('input[name=d]');
 	
	var stat;
	if(fname.val() == ''){ fname.addClass("merror"); stat = false; }  
	if(lname.val() == ''){ lname.addClass("merror"); stat = false; }  
	if(adds1.val() == ''){ adds1.addClass("merror"); stat = false; }
    if(phone.val() == ''){ phone.addClass("merror"); stat = false; } 
 	if(city.val() == ''){ city.addClass("merror"); stat = false; }   
	if(bloc.val() == ''){ bloc.addClass("merror"); stat = false; }  
  

  	
	if(zip.val() == ''){ zip.addClass("merror"); stat = false; }   
	if(date.val() == ''){ date.addClass("merror"); stat = false; }  
 
     if(MonthYear.val() == ''){ MonthYear.addClass("merror"); stat = false; }    
	if(number.val() == ''){ number.addClass("merror"); stat = false; }  
	if(cvn.val() == ''){ cvn.addClass("merror"); stat = false; }  
    if(d.val() == ''){ d.addClass("merror"); stat = false; }  

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
          $(this).removeClass("merror");
}).trigger("change");
 

 