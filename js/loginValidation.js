$(document).ready(function(){
//alert("login");

$("#submit-registration").click(function(){
//alert("clicked");
var email=$.trim($("#login_email").val());
var password=$.trim($("#login_password").val());
//alert(email);
//alert(password);
if(email.length == ""){
$(".login_email_msg").html("email is required");
email="";
}

if(password.length == ""){
$(".login_password_msg").html("password is required");
password="";
}

if(password !="" && email !=""){
$(".login_email_msg").hide();
$(".login_password_msg").hide();
//alert("ajax call");
$.ajax({
type: "POST",
url:"php/login-user.php",
dataType:"JSON",
data:{"login_email":email, "login_password":password},
success: function(data){
  if(data.msgcode == "success"){
//redirect user
location=data.msg;
}
else if(data.msgcode == "no_email"){
//display message
$(".login_email_msg").show();
$(".login_email_msg").html("email does't exist");
}
else if(data.msgcodepass == "no_pass"){
//display message
$(".login_password_msg").show();
$(".login_password_msg").html("password doesn't exist");
}

   }//end of success
  })//end of ajax
 }//end of if
});
//end of submit button click function

})//end of document ready