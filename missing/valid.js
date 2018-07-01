		function validateform()
{  
var name=myform.userid.value;  
var password=myform.pwd.value;  
var f=/^\w+([\.-]?\w+)*@\w+?.\w{3}$/;
if(f.test(name)){
	if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  myform.pwd.focus();
  return false;  
}
return true;
}
else {
		alert("invalid email");
myform.userid.focus();
      return false; 
}
}  