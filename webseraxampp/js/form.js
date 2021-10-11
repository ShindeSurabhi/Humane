function validate() {
     var emailID = document.myForm.email.value;
     var  atpos = email.indexOf("@");
      var  dotpos = email.lastIndexOf(".");
      
         if( document.myForm.namel.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         if( document.myForm.EMail.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
       
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myForm.email.focus() ;
            return false;
         }
         if(password1.length<6){  
           alert("Password must be at least 6 characters long.");  
           return false;  
           }  
      
         return( true );

 }        