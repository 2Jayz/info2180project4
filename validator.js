function validate(){
	var valid = true;
	var passwords = true;
	var patt = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i;
	var fname = $("input")[0].value;
	var lname = $("input")[1].value;
	var user = $("input")[2].value;
	var pass1 = $("input")[3].value;
	var pass2 = $("input")[4].value;
	
	console.log(fname);
	console.log(lname);
	console.log(user);
	console.log(pass1);
	console.log(pass2);
	
	return !valid;
}