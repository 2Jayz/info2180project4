window.onload = function (){
	
	document.getElementById("login").onsubmit = validation;
	
	
	function validation(){
		var form_elements = document.getElementById("login");
		var result = document.getElementById("resultMssg");

	var user = form_elements.elements["UserName"].value;
	console.log(user);
	
	var pwd = form_elements.elements["Password"].value;
	var error = "Login failed please check username/password";
	

		
		
	if (user == null || user == "" || pwd ==null || pwd == ""){
	
		result.innerHTML = error;		
	}else{
	 	
			result.innerHTML = "Login! Your message playground awaits";
		new Ajax.Request("login.php",
                      {
                          method: "post",
                         parameters: {username: user, password: pwd},
                           onSuccess: returnResult,
                          onFailure: returnError
                          
                         });  
	}
 
	
		
	
 
function returnResult(data) {
 
   //  console.log(data.responseText);
   // var response = data.responseText ;
   // console.log(response);
    var response = data.status ; 
      //if (response == "200"){
  console.log(response);
  console.log("passed");
           location.href = "homepage.php";
           }
         function returnError(data){
          console.log(data.status);
          console.log("failed");
          // location.href = "index.html";
              result.innerHTML = "Login failed! Username and/or password is not recognized.";
              }


return false;	}

    
//  // var user = document.getElementById("user");
//  // var password = document.getElementById("pwd");
//  // var go = document.getElementById("Submit");
//  // go.onclick = login;
//  //function login() {
//  //                 var username = user.value;
//  //               var pass = password.value;
//  //                  var mySession = new XMLHttpRequest();
//  //                  mySession.open("POST","login.php" ,false);
//  //                  mySession.send();
//  //                  if( mySession.Status == 200){
//  //             console.log ("Its ok");
//  //             location.href = "homepage.php";
//  //          } else if (mySession.status == 400){
//  //              var mytext = mySession.responseText;
//  //                  console.log(mytext);
//  //                  var result = document.getElementById("resultMssg");
//  //                  result.innerHTML = (mytext);
//  //          }
                   
//  //             }
              
              
   
 };
                        