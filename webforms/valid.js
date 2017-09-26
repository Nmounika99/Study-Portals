 


 
function validate(){
var regex =/^[A-Za-z]{3,20}$/;
    if(regex.test(form.name.value) == false){
    document.getElementById('errors').innerHTML="First Name Should Contain Valid Data";
   document.getElementById('errors').style.color = "#ff0000";

   return false;
    }
    else{
      document.getElementById('errors').innerHTML="";

    }
  }
    function validate1(){
var regex =/^[A-Za-z]{3,20}$/;
    if(regex.test(form.lastname.value) == false){
    document.getElementById('errors1').innerHTML="Last Name Should Contain Valid Data";
   document.getElementById('errors1').style.color = "#ff0000";

   return false;
    }
    else{
      document.getElementById('errors1').innerHTML="";

    }
  }
   function validate2(){
var regex =/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(regex.test(form.emailid.value) == false){
    document.getElementById('errors2').innerHTML="Email-Address Should Contain Valid Data";
   document.getElementById('errors2').style.color = "#ff0000";

   return false;
    }
    else{
      document.getElementById('errors2').innerHTML="";

    }
  }
  function validate3(){
 var regex = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/;
  if(regex.test(form.phone.value) == false){
    document.getElementById('errors3').innerHTML="Phone Number/Mobile Number Should Contain Valid Data";
   document.getElementById('errors3').style.color = "#ff0000";

   return false;
    }
    else{
      document.getElementById('errors3').innerHTML="";

    }
  }
  function validation()
{
   if(document.getElementById("Residence").value == "")
   {
      
     document.getElementById('errors4').innerHTML="Phone Number/Mobile Number Should Contain Valid Data";
   document.getElementById('errors4').style.color = "#ff0000";

   return false;
    }
    else{
      document.getElementById('errors4').innerHTML="";

    }
  }
  function validate4(){
 var regex = /^(19|20)\d{2}$/;
  if(regex.test(form.born1.value) == false){
    document.getElementById('errors5').innerHTML="Year Born Should Contain Valid Data";
   document.getElementById('errors5').style.color = "#ff0000";

   return false;
    }
    else{
      document.getElementById('errors5').innerHTML="";

    }
  }
  function validate5(){
var regex =/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/;
    if(regex.test(form.username.value) == false){
    document.getElementById('errors6').innerHTML="User Name Should Contain Valid Data";
   document.getElementById('errors6').style.color = "#ff0000";

   return false;
    }
    else{
      document.getElementById('errors6').innerHTML="";

    }
  }
  
  