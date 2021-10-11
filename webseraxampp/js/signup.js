
function validateform(){  
 var firstpassword = document.forms.myform.password;                
 var secondpassword = document.forms.myform.password2;  
 var name = document.forms.myform.name; 
 var namel = document.forms.myform.namel;
 var passwordl = document.forms.myform.passwordl;                     
 var x = document.forms.myform.email;   
 
    if (name.value == "")                                  
    {
        alert("Please enter your name.");
        name.focus();
        return false;
    }
     else if (namel.value == "")                                  
    {
        alert("Please enter your name.");
        namel.focus();
        return false;
    }
       else if (x.value == "")                                  
    {
        alert("Please enter a valid e-mail address.");
        x.focus();
        return false;
    }
    else if (passwordl.value == "")                                  
    {
        alert("Please enter your password");
        passwordll.focus();
        return false;
    }
 
     else if (phone.value == "")                          
    {
        alert("Please enter your telephone number.");
        phone.focus();
        return false;
    }

    else if(firstpassword==secondpassword){  
    return true;  
    }  
    else{  
    alert("password must be same!");  
    return false;  
    } 

}
 
