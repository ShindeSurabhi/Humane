
function validateform(){  
 
 var name = document.forms.myform.name; 
 var password = document.forms.myform.password;                     
 var x = document.forms.myform.email;   

 
     if (name.value == "")                                  
    {
        alert("Please enter your name.");
        name.focus();
        return false;
    }
       else if (x.value == "")                                  
    { 
        alert("Please enter a valid e-mail address.");
        x.focus();
        return false;
    }
    
    else if (password.value == "")                                  
    {
        alert("Please enter your password");
        password.focus();
        return false;
    }
 return true;
}
 
