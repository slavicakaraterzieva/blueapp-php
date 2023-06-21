<<<<<<< HEAD
<?php
//echo "Loaded";
require_once ('./config/config.php');
require_once ('./lib/Database.php');
require_once ('./models/Post.php');
require_once ('./models/Img.php');
require_once ('./models/Category.php');
require_once ('./models/User.php');
require_once ('./models/Realestate.php');
$post = new Post();
$img = new Img();
$user = new User();
$cat= new Category();
$real = new Realestate();
$post_type="free 0";
$post_status="paid";

$posts=$post->getFreePosts($post_type);
$paid_posts =$post->getPaidPosts($post_status,$post_type);

//print_r($paid_posts);
// print_r($posts);
?>


  <!--main section posts and adds-->
   <section class="section-main">
    <!-- <h2>Featured Listings</h2> -->
<div class="container fluid">
    <div class="row">
        <!-- the featured listing heading -->
      

        <?php if($paid_posts == 0 && $posts == 0){
            echo" <div class='col-md-12'>
            <h2 class='secondary-heading text-center'>You have no Advertisements Yet</h2>
        </div>";
        }
        else{
            echo"  <div class='col-md-12'>
            <h2 class='secondary-heading text-center'>Featured Listings</h2>
        </div>";
        }
        ?>
        <!--list the paid posts-->
<?php foreach($paid_posts as $p):?>
     
  <?php
    $user_id=$p->user_id;
    //echo $p->user_id;
    //echo $p->post_cat_id;
    $post_category=$cat->getCategoryName($p->post_cat_id);
    //print_r($post_category);
    $cat_name=$post_category->category_title;

    if($cat_name !="realestate" && $cat_name !="job" && $cat_name !="car"){
       $original_cat_name=$cat_name;
       $cat_name="other";
    }

    switch($cat_name){
        case "realestate";
       $getRealEstate=$real->getRealEstatePost($p->post_id,);
       //print_r($getRealEstate);
       $getOwner=$user->getUserById($user_id);
       //print_r($getOwner);
       include("realestate_card.php");
        break;

        case "job";
        include("job_card.php");
        break;

        case "car";
        include("car_card.php");
        break;

        case "other";
        include("other_card.php");
        break;
    } //end of switch
    ?>
<?php endforeach?>

<!--list the free posts-->
<?php foreach($posts as $p):?>
     
     <?php
       $user_id=$p->user_id;
       //echo $p->user_id;
       //echo $p->post_cat_id;
       $post_category=$cat->getCategoryName($p->post_cat_id);
       //print_r($post_category);
       $cat_name=$post_category->category_title;
   
       if($cat_name !="realestate" && $cat_name !="job" && $cat_name !="car"){
          $original_cat_name=$cat_name;
          $cat_name="other";
       }
   
       switch($cat_name){
           case "realestate";
          $getRealEstate=$real->getRealEstatePost($p->post_id,);
          //print_r($getRealEstate);
          $getOwner=$user->getUserById($user_id);
          //print_r($getOwner);
          include("realestate_card.php");
           break;
   
           case "job";
           include("job_card.php");
           break;
   
           case "car";
           include("car_card.php");
           break;
   
           case "other";
           include("other_card.php");
           break;
       } //end of switch
       ?>
   <?php endforeach?>
   
    </div><!-- end of row -->
    
</div><!-- end of container-fluid -->

   </section>
=======
<?php
//echo "Loaded";
require_once ('./config/config.php');
require_once ('./lib/Database.php');
require_once ('./models/Post.php');
require_once ('./models/Img.php');
require_once ('./models/Category.php');
require_once ('./models/User.php');
require_once ('./models/Realestate.php');
$post = new Post();
$img = new Img();
$user = new User();
$cat= new Category();
$real = new Realestate();
$post_type="free 0";
$post_status="paid";

$posts=$post->getFreePosts($post_type);
$paid_posts =$post->getPaidPosts($post_status,$post_type);

//print_r($paid_posts);
// print_r($posts);
?>


  <!--main section posts and adds-->
   <section class="section-main">
    <!-- <h2>Featured Listings</h2> -->
<div class="container fluid">
    <div class="row">
        <!-- the featured listing heading -->
      

        <?php if($paid_posts == 0 && $posts == 0){
            echo" <div class='col-md-12'>
            <h2 class='secondary-heading text-center'>You have no Advertisements Yet</h2>
        </div>";
        }
        else{
            echo"  <div class='col-md-12'>
            <h2 class='secondary-heading text-center'>Featured Listings</h2>
        </div>";
        }
        ?>
        <!--list the paid posts-->
<?php foreach($paid_posts as $p):?>
     
  <?php
    $user_id=$p->user_id;
    //echo $p->user_id;
    //echo $p->post_cat_id;
    $post_category=$cat->getCategoryName($p->post_cat_id);
    //print_r($post_category);
    $cat_name=$post_category->category_title;

    if($cat_name !="realestate" && $cat_name !="job" && $cat_name !="car"){
       $original_cat_name=$cat_name;
       $cat_name="other";
    }

    switch($cat_name){
        case "realestate";
       $getRealEstate=$real->getRealEstatePost($p->post_id,);
       //print_r($getRealEstate);
       $getOwner=$user->getUserById($user_id);
       //print_r($getOwner);
       include("realestate_card.php");
        break;

        case "job";
        include("job_card.php");
        break;

        case "car";
        include("car_card.php");
        break;

        case "other";
        include("other_card.php");
        break;
    } //end of switch
    ?>
<?php endforeach?>

<!--list the free posts-->
<?php foreach($posts as $p):?>
     
     <?php
       $user_id=$p->user_id;
       //echo $p->user_id;
       //echo $p->post_cat_id;
       $post_category=$cat->getCategoryName($p->post_cat_id);
       //print_r($post_category);
       $cat_name=$post_category->category_title;
   
       if($cat_name !="realestate" && $cat_name !="job" && $cat_name !="car"){
          $original_cat_name=$cat_name;
          $cat_name="other";
       }
   
       switch($cat_name){
           case "realestate";
          $getRealEstate=$real->getRealEstatePost($p->post_id,);
          //print_r($getRealEstate);
          $getOwner=$user->getUserById($user_id);
          //print_r($getOwner);
          include("realestate_card.php");
           break;
   
           case "job";
           include("job_card.php");
           break;
   
           case "car";
           include("car_card.php");
           break;
   
           case "other";
           include("other_card.php");
           break;
       } //end of switch
       ?>
   <?php endforeach?>
   
    </div><!-- end of row -->
    
</div><!-- end of container-fluid -->

   </section>
>>>>>>> 8909e8750af05f609e80253435cbd9efeec32e28
   <!-- end of main section -->