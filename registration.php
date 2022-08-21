
<?php
require_once ('bootstrap.php');
include (ROOT_PATH."/inc/head.php");
?>

<body scroll="no" style="overflow: hidden">
    
<section class="section-register" id="section register">

<div class="register">

   <div class="register__form">

 <form method="POST" action="./php/register.php"> 
<?php msgdanger('register_fail');?>

<div class="register__form-heading">
    Register
</div>
<!-- end of header -->

<div class="register__form-logo">
    <i class="fa fa-sign-in-alt"></i>
</div>
<!-- end of logo -->

<div class="register__form_group">
    <!-- username input -->
<input type="text" class="register__form__input" placeholder="Username" id="username" name="username" required>
<label for="username" class="register__form_label password_label"><i class="fa fa-user"></i>Choose Username</label>
<div class="username_error register__form_label" style="width:20rem; margin-top:-1rem; font-size:1rem; padding-bottom:0.5rem; color:#f56b26;"></div>
    <!-- end of username input -->

    <!-- email input -->
<input type="email" class="register__form__input email" placeholder="Email" id="email" name="email" required>
<label for="email" class="register__form_label email_label" ><i class="fa fa-envelope"></i>Choose Email</label>
<div class="email_error register__form_label" style="width:20rem; margin-top:-1rem; font-size:1rem; padding-bottom:0.5rem; color:#f56b26;"></div>
     <!-- end of email input -->

       <!-- password input -->
<input type="password" class="register__form__input" placeholder="Password" id="password" name="password" required>
<label for="password" class="register__form_label password_label"><i class="fa fa-unlock"></i>Choose Password</label>
<div class="password_error register__form_label" style=" width:20rem; margin-top:-1rem; font-size:1rem; color:#f56b26;" ></div>
     <!-- end of password input --> 

            <!-- confirm password input -->
<input type="password" class="register__form__input" placeholder="Confirm" id="confirm_password" name="confirm password" required>
<label for="confirm_password" class="register__form_label confirm_password_label"><i class="fa fa-lock"></i>Confirm Password</label>
<div class="confirm_password_error register__form_label"  style="width:20rem; margin-top:-1rem; font-size:1rem; color:#f56b26;"></div>
     <!-- end of confirm password input -->    
</div>
<!-- end of form group -->

<div class="register__form_group-progress-bar"></div>

<div class="">
    <button type="submit" class="btn button-transparent" id="submit-registration">Create Account &rarr;</button>
</div>

<p class="already-member"> Already Member? <a href="<?php echo BASE_URL;?>login.php"> Login</a></p>

 </form>
 <!-- end of form -->

  <!-- home button -->
  <div class="scroll">
    <button id="goBack" onclick="window.location.href='index.php'">
        <i class="fa fa-chevron-left scroll__arrowUp">
        </i>
    </button>
</div>
<!-- end of home button -->
   </div>
   <!-- end of register form -->
</div>
<!-- end of register -->
</section>
<!-- end of section -->
    <link rel="stylesheet" type="text/css" href="./sass/vendors/font-awesome/fontawesome-free/css/all.css" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="./sass/vendors/jquery3.5.0.js"></script>
    <script src="./sass/vendors/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./sass/vendors/bootstrap/css/bootstrap.css">
    <script src="./js/menuClick.js"></script>
<script src="./js/registerValidation.js"></script>
 
</body>
</html>