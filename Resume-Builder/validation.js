function validate() {
	var fname = document.getElementById('f').value;
    var lname = document.getElementById('l').value;
    var uname = document.getElementById('u').value;      
    var email = document.getElementById('e').value;      
    var sname = document.getElementById('s').value;    
    var cname = document.getElementById('c').value; 
    if (fname.length < 2) {
        window.alert("Please enter your firstname.");
        return false;
   	}  
   	if (lname.length < 2) {
        window.alert("Please enter your lastname.");
        return false;
   	}                                                        
    if (uname.length < 4) {
        window.alert("Please enter your username.");
        return false;
   	} 
   	var unamepath = /^[a-zA-Z0-9]+$/;
   	var unamepatharray = uname.match(unamepath);
   	if(unamepatharray == null) {
   		window.alert("Enter valid username.")
   		return false;
   	} 
   	var emailPat = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    var EmailmatchArray = email.match(emailPat);  
    if(EmailmatchArray == null) {
    	window.alert("Enter valid email.");
    	return false;
    } 
    if (sname.length < 2) {
        window.alert("Please enter correct state.");
        return false;
   	}  
   	if (cname.length < 2) {
        window.alert("Please correct country.");
        return false;
   	}                    
}