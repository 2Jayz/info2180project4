window.onload = function(){
    var arr = $$(".mail1");
    var inbox = $("inbox");
	var composeButton = $("compose");
    for (var i = 0; i<arr.length; i++){
        inbox.className = "tab";
        arr[i].onclick = function(){
            $("list").style.display = "none";
            new Ajax.Request('emails.php',{
        	method: 'get',
        	parameters: {id: this.id },
		    onSuccess: displayMessage,
		    onFailure: returnFailure});
        };
    }
    inbox.onclick = function(){
        $("email").className = "hide";
        $("list").style.display = "block";
        inbox.className = "tab1";
        composeButton.className = "tab";
        window.location.reload();
    }
    
    function displayMessage(response){
        $("email").innerHTML = response.responseText;
    }
    
    function failureFunction(response){
        alert("server error");
    }
	
   
        
	
};
