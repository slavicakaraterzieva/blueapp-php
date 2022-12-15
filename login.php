
<?php
require_once ('bootstrap.php');
include (ROOT_PATH."/inc/head.php"); 
//session_start();
?>

<body id>

<section class="section-login" id="section-login">

<div class="login">

   <div class="login__form">
<!-- action ="php/login-user.php" -->
<form method="POST" > <!--defining action = "/php/register.php" saves empty rows in database--> 
<?php if(isset($_GET['error'])){?>
<p class="error"><?php echo($_GET['error']);
}?></p>

<div class="login__form-heading">
login
<label class="login__form_label" style="font-size:14px; color:#eb1f27;" id="label"></label>
</div>
<!-- end of header -->

<div class="login__form-logo">
    <i class="fa fa-sign-in-alt"></i>

</div>
<!-- end of logo -->

    <!-- email input -->
<input class="login__form__input"  placeholder="Email" id="login_email" name="login_email">
<label for="email" class="login__form_label label_email"><i class="fa fa-envelope"></i>Choose Email</label>
<div class="login_email_msg" ></div>
     <!-- end of email input -->

       <!-- password input -->
<input type="password" class="login__form__input"  placeholder="Password"  id="login_password" name="login_password">
<label for="password" class="login__form_label label_password"><i class="fa fa-unlock" style="padding-bottom:1rem;"></i>Choose Password</label>
<div class="login_password_msg" ></div>

     <!-- end of password input --> 

<div class="login__form_group-progress-bar"></div>

<div class="">
    <button  type="button" value="submit" class="btn button-transparent" name="submit" id="submit-registration"> Login &rarr;</button>
</div>


<p class="already-member"> Register new Account <a href="<?php echo BASE_URL;?>registration.php"> Sign in</a></p>

 </form>
 <!-- end of form -->

  <!-- home button -->
  <div class="scroll">
    <button id="goBack" onclick="window.location.href='index.php'" >
        <i class="fa fa-chevron-left scroll__arrowUp">
        </i> 
    </button>
</div>
<!-- end of home button -->
   </div>
   <!-- end of login form -->

</div>
<!-- end of login -->
</section>
<!-- end of section -->
    <script src="./sass/vendors/jquery3.5.0.js"></script>
    <link rel="stylesheet" type="text/css" href="./sass/vendors/font-awesome/fontawesome-free/css/all.css" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="./sass/vendors/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./sass/vendors/bootstrap/css/bootstrap.css">
    <script src="./js/loginValidation.js"></script>
</body>
</html>