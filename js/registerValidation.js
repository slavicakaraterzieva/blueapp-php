$(document).ready(function(){
//alert("validate");
$("#submit-registration").hide();
//password validation
var password_reg = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})");
var password = "";

 $("#password").focusout(function(){
var password_store=$.trim($("#password").val())
    //alert(password_store);
$(".password_label").show();

if(password_store.length==""){
$(".password_error").html("password is required");
password = "";
}
else if (password_reg.test(password_store)){
$(".password_error").html("password is strong");
//$(".password_label").hide();
password=password_store;
}
else{$(".password_error").html("password mast be 6 characters long. must have upper and lower case letters, numbers and special characters");
$(".password_label").show();
password = "";
}
  });
//end of password

 $("#confirm_password").focusout(function(){
var confirm_password_store=$.trim($("#confirm_password").val())
    //alert(confirm_password_store);
$(".confirm_password_label").show();

if(confirm_password_store.length==""){
$(".confirm_password_error").html("password is required");
var confirm = "";
}
else if (confirm_password_store != password){
$(".confirm_password_error").html("passwords didn't match");
$("#confirm_password").val()="";
$(".confirm_password_label").hide();
confirm="";
}
else{
confirm = confirm_password_store;
$(".confirm_password_label").show();
$(".confirm_password_error").html("passwords match, good to go");

}
  });
//end of confirm password
 $("#confirm_password").focusin(function(){$("#submit-registration").show();});//just sowing cerate account link

//email validation
var email_reg = new RegExp("^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
//var email="";

$("#email").focusout(function(){
var email_store=$.trim($("#email").val())
    //alert(email_store);

if(email_store.length==""){
$(".email_error").html("email is required");
email = "";
}
else if (email_reg.test(email_store)){
email=email_store;

}
else{$(".email_error").html("this is not a valid email. valid email exp: someone@email.com");
$(".email_label").show();
email = "";
};

if(email_store !=""){
$.ajax({
type: "POST",
url: "php/check_email.php",
dataType: 'JSON',
data:{email_check:email_store},
success: function(data){
//alert(data);
if(data['response']=="email_success"){
$(".email_error").html("email is taken by another user");
email="";
}
else{$(".email_error").html("email is available");}
}//end of success
  })//end of ajax
}//end of if
   });
//end of confirm email
});
