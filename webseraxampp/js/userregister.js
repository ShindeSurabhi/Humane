
   function validateEmail(elementValue)
    { 
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
        return emailPattern.test(elementValue); 
} 
 function checkPassword(str)
  {
    // at least one number, one lowercase and one uppercase letter
    // at least six characters
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
    return re.test(str);
  }
function validateform(){  
var email=document.myform.email.value;  
var firstpassword=document.myform.password.value;  
  
if (email==null || email==""){  
  alert("Email-ID can't be blank");  
  return false;  
}
else 
if(!validateEmail(email)){
               alert("The email doesn't match the pattern required (@ and . is a must)");
                        return false;
                    }
else
    if (checkPassword(password)){
        return true;}
        else{
            alert("Password must be at least 8 characters long containing at least one UPPERCASE/lowercase and numbers");  
            return false;  
        } 
 }
 function matchpass(){  
var firstpassword = document.forms.myform.password;                
var secondpassword = document.forms.myform.password2;  
var name = document.forms.myform.name;                      
var email = document.forms.myform.email; 


if (name.value==null || name.value==""){  
  alert("Name can't be blank");  
  return false;  
}
else
    if(firstpassword.value==null || firstpassword.value==""){
        alert("Password can't be blank");
        return false;
    }
    else
        if(checkPassword(firstpassword.value)==false){
            alert("Password must be at least 8 characters long containing at least one UPPERCASE/lowercase and numbers");  
            return false;
        }   
        else
            if(firstpassword.value!=secondpassword.value){
                alert("Passwords must be same!!");
                return false;
            }
            else
                if (email.value==null || email.value==""){
                    alert("Email can't be blank");
                    return false;
                }
                else 
                    if(validateEmail(email.value))
                        return true;
                    else{
                        alert("The email doesn't match the pattern required (@ and . is a must)");
                        return false;
                    }

} 

 
