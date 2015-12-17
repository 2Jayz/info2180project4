window.onload = function (){
  var user = $("user");
  var password = $("pwd");
  var go = $("Submit");
  go.onclick = login;

  
 
  function login(){  
    var username = $("user").value;
    var pass = $("pwd").value;

                new Ajax.Request('login.php',
                       {
                          method: 'post',
                          parameters: {user: username, password: pass},
                          onSuccess: loadHomePage,
                          onFailure: sendError
                         });  
                }
              
       function loadHomePage(data) {
            if (data.status == 200){
              console.log ("Its ok");
              location.href = "homepage.php"
            } 
          }

function sendError(data){
  console.log(data.responseText);
  if (data.status == 401){
    $("resultMssg").innerHTML = "Double check your username and/or password.";
  }
}
    

};
                        