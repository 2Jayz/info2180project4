function validate(){
	var valid = true;
	var name_patt = /^[A-Z]+[a-z]$/i;
	var user_patt = /^[A-Z0-9._%+-]{4,}$/i;
	var fname = $("input")[0];
	var lname = $("input")[1];
	var user = $("input")[2];
	var pass1 = $("input")[3];
	var pass2 = $("input")[4];
	var error = $("div#error_msg")[0];
	
	console.log(fname.value);
	console.log(lname.value);
	console.log(user.value);
	console.log(pass1.value);
	console.log(pass2.value);
	
	if(!(name_patt.test(fname.value)) || !name_patt.test(lname.value)){
		valid = false;
		fname.setAttribute("class", "invalid");
		lname.setAttribute("class", "invalid");
	}
	else{
		fname.setAttribute("class", "valid");
		lname.setAttribute("class", "valid");
	}
	
	if(!(user_patt.test(user.value))){
		valid = false;
		user.setAttribute("class", "invalid");
	}
	else{
		user.setAttribute("class", "valid");
	}
	
	
	if(pass1.value != pass2.value){
		valid = false;
		pass1.setAttribute("class", "invalid");
		pass2.setAttribute("class", "invalid");
	}
	else{
		pass1.setAttribute("class", "valid");
		pass2.setAttribute("class", "valid");
	}
	
	if(!valid){
		error.setAttribute("class", "visible");
	}
	else{
		error.setAttribute("class", "errors");
	}
	
	return valid;
}