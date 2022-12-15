<?php?>

<?php?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA Compatible" content="ie-edge">
    <link rel="stylesheet" type="text/css" href="../../blueapp/sass/vendors/font-awesome/fontawesome-free/css/all.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Nunito:wght@200;300;400&family=Oxygen:wght@300;400&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./sass/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./sass/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../flexapp/css/flexstyle.css">
    <link rel="stylesheet" type="text/css" href="../../blueapp/css/style.css">
    
    <title>The Blue App</title>
</head>
<body>

  <!--main section posts and adds-->
   <section class="section-main"  style="background-color:transparent">
    <!-- <h2>Featured Listings</h2> -->
<div class="container fluid">
    <div class="row">
        <!-- the featured listing heading -->
        <div class="col-md-12">
            <h2 class="secondary-heading text-center">Select Type of Card</h2>
            <h4 class="secondary-heading text-center" style="font-size:1.6rem; margin-left:50%; transform:translate(-50%);">Select your preferred pricing. Try the free add for a week, before you decide to choose from our packages.</h4>
        </div>
  
    <!--price cards-->
    <div class="prices">
   
       <div class="price_card">
   
           <div class="price_card__title price_card__title--free">
               <i class="fa fa-paper-plane price_card--plane"></i>
               <h3>Free Ad</h3>
           </div>
   
           <div class="price_card__price price_card__price--free">
               <h4>$<span style="font-size:3rem">0</span></h4>
           </div>
   
           <div class="price_card__option"style="font-size:1rem">
               <ul>
                   <li><i class="fa fa-check price-li"></i>Post Free Ad</li>
                   <li><i class="fa fa-check price-li"></i>Not guaranteed first position</li>
                   <li><i class="fa fa-check price-li" ></i>Will be listed in the free section for a week</li>
                   <li><i class="fa fa-check price-li"></i>Best option for beginners</li>
               </ul>
           </div>
   
           <a class="desc_price"style="font-size:1rem" href="#">Free</a>
   
       </div>
   <!--end of free add-->
   
       <div class="price_card">
   
           <div class="price_card__title price_card__title--standard">
               <i class="fa fa-rocket price_card--space-shuttle"></i>
               <h3>Standard Ad</h3>
           </div>
   
           <div class="price_card__price price_card__price--standard">
               <h4>$<span style="font-size:3rem">1</span></h4>
           </div>
   
           <div class="price_card__option"style="font-size:1rem">
               <ul>
                   <li><i class="fa fa-check price-li"></i>1 dollar for a mount</li>
                   <li><i class="fa fa-check price-li"></i>First place for a week</li>
                   <li><i class="fa fa-check price-li" ></i>Add will be active one mount, then it will expire</li>
                   <li><i class="fa fa-check price-li"></i>You can go premium any time or extend promotion</li>
               </ul>
           </div>
   
           <a class="desc_price"style="font-size:1rem" href="#">Standard</a>
   
       </div>
   <!--end of standard add-->
   
       <div class="price_card">
   
           <div class="price_card__title price_card__title--premium">
               <i class="fa fa-fire price_card--fire"></i>
               <h3>Premium Ad</h3>
           </div>
   
           <div class="price_card__price price_card__price--premium">
               <h4>$<span style="font-size:3rem">5</span></h4>
           </div>
   
           <div class="price_card__option"style="font-size:1rem">
               <ul>
                   <li><i class="fa fa-check price-li"></i>Get the best deal</li>
                   <li><i class="fa fa-check price-li"></i>First place for a month</li>
                   <li><i class="fa fa-check price-li" ></i>Will be active for six months, then it will expire</li>
                   <li><i class="fa fa-check price-li"></i>Extend promotion or switch to other package</li>
               </ul>
           </div>
   
           <a class="desc_price"style="font-size:1rem" href="#">Premium</a>
   
       </div>
   <!--end of premium add-->
   
    </div>
    <!--end of price cards-->
      
    </div><!-- end of row -->
    
</div><!-- end of container-fluid -->

   </section>
   <!-- end of main section -->

   <!-- footer -->
<footer class="footer" >
<!-- footer logo -->
<div class="footer__logo-box">
    <a href="../../blueapp/index.php">
<img src="../../blueapp/img/img-button.png" alt="blueapp" class="footer__logo">
</a>
</div>
<!-- end of footer logo -->
</footer>
<!-- end of footer -->

</body>
</html>

