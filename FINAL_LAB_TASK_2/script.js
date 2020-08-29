"use strict"
//a = 10;
var b =30;
let c =40;
const e = 50;

//console.log('test');
//alert('test');
//document.write('hfbjh');

function f1(){
	var username = document.getElementById('username').value;
	var email = document.getElementById('email').value;
	var m = document.getElementById('Gender_male').checked;
	var f = document.getElementById('Gender_female').checked;
	var o = document.getElementById('Gender_other').checked;
	var day = document.getElementById('day').value;
	var month = document.getElementById('month').value;
	var year = document.getElementById('year').value;
	var bg = document.getElementById('bgroup').value;
	var sdeg = document.getElementById('ssc').checked;
	var hdeg = document.getElementById('hsc').checked;
	var bdeg = document.getElementById('bsc').checked;
	var mdeg = document.getElementById('msc').checked;
	//var photo = document.getElementById('photo').value;
	
	var error = false;
	if(username == ""){
		document.getElementById('userMsg').innerHTML = "Username Can't left empty!";
		error = true;
	}
	if ((username != "") && (username.search(" ") == -1)) {
		document.getElementById('userMsg').innerHTML = "Username must be atleast two words!";
		error = true;
	}
	if(email == ""){
		document.getElementById('emailMsg').innerHTML = "Email Can't left empty!";
		error =true;
	}
	if ((email != "") && ((email.search("@") == -1) || (email.search(".")==-1))) {
		document.getElementById('emailMsg').innerHTML = "Email address not valid!";
		error= true;
	}
	if((m==false) && (f==false) && (o==false))
	{
		document.getElementById('genderMsg').innerHTML = "Please select gender!";
		error = true;
	}
	if ((day == "") ||  (month == "") || (year == "")) {
		document.getElementById('dobMsg').innerHTML = "DOB can't be empty!";
		error = true;
	}
	if (((day != "") && (typeof day != 'number')) || ((month != "") && (typeof month != 'number')) || ((year != "") && (typeof year != 'number'))){
		document.getElementById('dobMsg').innerHTML = "Date must be numeric!";
		error= true;
	}
	if (((day<1) || (day>31)) && (day != "") && (typeof day != 'number')){
		document.getElementById('dobMsg').innerHTML = "Date range not correct!";
		error = true;
	}
	if (((month<1) || (month>12)) && (month != "") && (typeof month != 'number')){
		document.getElementById('dobMsg').innerHTML = "Date range not correct!";
		error = true;
	}
	if (((year<1920) || (year>2020)) && (year != "") && (typeof year != 'number')){
		document.getElementById('dobMsg').innerHTML = "Date range not correct!";
		error = true;
	}
    if (bg == "") {
    	document.getElementById('bgMsg').innerHTML = "Blood group can't be empty";
    	error = true;
    }
    if((sdeg==false) && (hdeg==false) && (bdeg==false) && (mdeg==false))
	{
		document.getElementById('degMsg').innerHTML = "Please select degree!";
		error = true;
	}





	if(error){
		return false;
	}else{
		return true;
	}
	
}

var f2 = function(){
	var username = document.getElementById('username').value;
	if(username != ''){
		document.getElementById('userMsg').innerHTML = "";
	}

	var email = document.getElementById('email').value;
	if(email != ''){
		document.getElementById('emailMsg').innerHTML = "";
	}
	var m = document.getElementById('Gender_male').checked;
	var f = document.getElementById('Gender_female').checked;
	var o = document.getElementById('Gender_other').checked;
	if((m==true) || (f==true) || (o==true)){
		document.getElementById('genderMsg').innerHTML = "";
	}

	var day = document.getElementById('day').value;
	var month = document.getElementById('month').value;
	var year = document.getElementById('year').value;

	if ((day != "") && (month != "") && (year != "")) {
		document.getElementById('dobMsg').innerHTML = "";
	}

	var bg = document.getElementById('bgroup').value;

	if (bg != "") {
		document.getElementById('bgMsg').innerHTML = "";
	}

	var sdeg = document.getElementById('ssc').checked;
	var hdeg = document.getElementById('hsc').checked;
	var bdeg = document.getElementById('bsc').checked;
	var mdeg = document.getElementById('msc').checked;

	if ((sdeg==true) || (hdeg==true)|| (bdeg==true) || (mdeg==true)) {
		document.getElementById("degMsg").innerHTML = "";
	}
}

var f3 = function(){
	document.getElementById("userMsg").innerHTML = "";
	document.getElementById("emailMsg").innerHTML = "";
	document.getElementById("genderMsg").innerHTML = "";
	document.getElementById("dobMsg").innerHTML = "";
	document.getElementById("bgMsg").innerHTML = "";
	document.getElementById("degMsg").innerHTML = "";
	

}



