<<<<<<< HEAD
<<<<<<< HEAD
<?php?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA Compatible" content="ie-edge">
    <link rel="stylesheet" type="text/css" href="./sass/vendors/font-awesome/fontawesome-free/css/all.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Nunito:wght@200;300;400&family=Oxygen:wght@300;400&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./sass/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./sass/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
    <title>The Blue App</title>
</head>
<body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="./sass/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="./sass/vendors/jquery3.5.0.js"></script>
    <script src="./js/menuClick.js"></script>
    <script src="./js/scroll.js"></script>
    <script src="./js/response.js"></script>

  

  <!--main section posts and adds-->
   <section class="section-main">
    <!-- <h2>Featured Listings</h2> -->
    <div class="footer__logo-box">
    <a href="../blueapp/index.php">
<img src="img/img-button.png" alt="blueapp" class="footer__logo">
</a>
</div>

<div class="container fluid">
    <div class="row">
        <!-- the featured listing heading -->
        <div class="col-md-12">
            <h2 class="secondary-heading text-center">Template Cards</h2>
            <h4 class="secondary-heading text-center" style="font-size:1.6rem">Create your own advertisement card from our template cards: Enter title, Insert photo and description of your product, with a price of your choice. Simle template and intuitive forms to work with. See your product sold across the web.</h4>
        </div>
        <br></br>
        <!--the real estate card-->
        <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
          <div class="advertisement-side advertisement-side--front">
            <div class="advertisement_picture">
                <img src="img/bannon-morrissy-house.jpg" alt="house">
            </div>
            <h4 class="advertisement_heading">
                <span class="advertisement-heading-span advertisement-heading-span--1">
                    Wood house for sale on Kozuv mountain</span>
            </h4> 

            <div class="advertisement-specific-details">
                <div class="advertisement-svg-icon">
                    <svg>
                        <use xlink:href="svg/symbol-defs.svg#icon-home_filled"></use>
                    </svg>
                    <span>House</span>

                    <svg>
                        <use xlink:href="svg/symbol-defs.svg#icon-hotel"></use>
                    </svg>
                    <span>Bed</span>

                    <svg>
                        <use xlink:href="svg/symbol-defs.svg#icon-connection"></use>
                    </svg>
                    <span> Wifi</span>
                </div>
                <!-- end of svg icons -->
<div class="advertisement-address">
    <svg>
        <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
    </svg>
    <span>st Dimitar Vlahov 30</span>
</div>
<!-- end of address -->
            </div>
            <!-- end of specific details -->

         <div class="advertisement-description">
             <p>The description: Mountain log house.
                  The number of rooms 3 + sauna Living area 64 sq.m. 
                  Total area 101 sq.m. The ground floor area 61 sq.m. 
                  The first floor area 40sq.m.</p>
         
         <!-- end of description-->
         <div class="advertisement-type">
            
             <p id="price"><span>$</span>480,300</p>
         </div>
         <!-- end of type -->
        </div>
        <!-- end of description -->
        </div><!--end of front side-->

<!--back side-->
<div class="advertisement-side advertisement-side--back advertisement-side--back-1" >
    <div class="advertisement-company advertisement-individual">
<img class="advertisement-company--logo" src="img/me.jpg" alt="person">

<div class="advertisement-company-details">
    <div class="advertisement-company-name">
        <span class="comp-individual-details">Company</span> Futurespect
    </div>

    <div class="advertisement-company-date-posted">
        <span class="comp-individual-details">Date</span> 17 12 2030
    </div>

    <div class="advertisement-company-author-name">
        <span class="comp-individual-details">Author</span> Slavica Karaterzieva
    </div>

</div><!--end of details-->
    </div><!--end of advertisement company-->

    <div class="advertisement-details">
        <ul>
            <li>First Feature</li>
            <li>Second Feature</li>
            <li>Third Feature</li>
        </ul>
    </div><!--end of feature-->

<div class="advertisement_cta">
    <div class="advertisement_prise-picture-box">
        <a href="#" class="advertisement_link btn-text">Read More</a>
        <p class="advertisement_price-value">$480,300</p>
    </div>
</div><!--end of cta-->

<div class="advertisement_bottom-logo advertisement_bottom-logo-estate">
    <div class="advertisement_bottom-logo-photo">
  <img src="img/real estate.png" alt="company logo">
    </div>
</div><!--end of bottom logo-->

</div><!--end of back side-->

</div><!-- end of real estate advertisement -->
  
        <!--the car card-->
        <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
            <div class="advertisement-side advertisement-side--front">
              <div class="advertisement_picture">
                  <img src="img/car.jpg" alt="car">
              </div>
              <h4 class="advertisement_heading">
                  <span class="advertisement-heading-span advertisement-heading-span--2">
                      Red BWM for sale in Skopje</span>
              </h4> 
  
              <div class="advertisement-specific-details">
                  <div class="advertisement-svg-icon advertisement-svg-icon--caricon">
                    
                      <svg>
                          <use xlink:href="svg/symbol-defs.svg#icon-directions_car"></use>
                      </svg>
                      <span>Car</span>
                    
                      <svg>
                          <use xlink:href="svg/symbol-defs.svg#icon-meter"></use>
                      </svg>
                      <span>Speed</span>
                    
                      <svg>
                          <use xlink:href="svg/symbol-defs.svg#icon-wrench"></use>
                      </svg>
                      <span>Check</span>
            
                  </div>
                  <!-- end of svg icons -->
  <div class="advertisement-address">
      <svg>
          <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
      </svg>
      <span>st Goce Delcev 10</span>
  </div>
  <!-- end of address -->
              </div>
              <!-- end of specific details -->
  
           <div class="advertisement-description">
               <p> BMW or BMW AG, is a German automobile, 
                   BMW is headquartered in Munich, Bavaria. It also owns and produces Mini cars, 
                   and is the parent company of Rolls-Royce Motor Cars.</p>
           
           <!-- end of description-->
           <div class="advertisement-type">
             <!--<p>Auction</p>--> 
             <p id="price"></p>
              <!--<p id="price"><span>$</span>20,300</p>--> 
           </div>
           <!-- end of type -->
          </div>
          <!-- end of description -->
          </div><!--end of front side-->
  
  <!--back side-->
  <div class="advertisement-side advertisement-side--back advertisement-side--back-2" >
      <div class="advertisement-company advertisement-individual">
  <img class="advertisement-company--logo" src="img/person.jpg" alt="person">
  
  <div class="advertisement-company-details">
      <div class="advertisement-company-name">
          <span class="comp-individual-details">Company</span> No name
      </div>
  
      <div class="advertisement-company-date-posted">
          <span class="comp-individual-details">Date</span> 06 04 2030
      </div>
  
      <div class="advertisement-company-author-name">
          <span class="comp-individual-details">Author</span> Petar Tosev
      </div>
  
  </div><!--end of details-->
      </div><!--end of advertisement company-->
  
      <div class="advertisement-details">
          <ul>
              <li>First Feature</li>
              <li>Second Feature</li>
              <li>Third Feature</li>
          </ul>
      </div><!--end of feature-->
  
  <div class="advertisement_cta">
      <div class="advertisement_prise-picture-box">
          <a href="#" class="advertisement_link btn-text">Read More</a>
          <p class="advertisement_price-value">$20,300</p>
      </div>
  </div><!--end of cta-->
  
  <div class="advertisement_bottom-logo advertisement_bottom-logo-car">
      <div class="advertisement_bottom-logo-photo">
        <img src="img/great_offers.jpg" alt="company logo">
      </div>
  </div><!--end of bottom logo-->
  
  </div><!--end of back side-->
  
  </div><!-- end of car advertisement -->

          <!--the job card-->
          <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
            <div class="advertisement-side advertisement-side--front">
              <div class="advertisement_picture">
                  <img src="img/work.jpg" alt="work">
              </div>
              <h4 class="advertisement_heading">
                  <span class="advertisement-heading-span advertisement-heading-span--3">
                      JavaScript Developer Needed</span>
              </h4> 
  
              <div class="advertisement-specific-details">
                  
                  <!-- end of svg icons -->
  <div class="advertisement-address">
      <svg>
          <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
      </svg>
      <span>in Gevgelija</span>
  </div>
  <!-- end of address -->
              </div>
              <!-- end of specific details -->
  
           <div class="advertisement-description">
               <p>Create awesome applications with us.
                   Work from home in your own time. 
                   Team meting once a week for updates.
                   <br>
                   Salary is negotiable, starting from:
                </p>
           
           <!-- end of description-->
           <div class="advertisement-type">
               <p id="price"><span>$</span>4,500</p>
           </div>
           <!-- end of type -->
          </div>
          <!-- end of description -->
          </div><!--end of front side-->
  
  <!--back side-->
  <div class="advertisement-side advertisement-side--back advertisement-side--back-3" >
      <div class="advertisement-company advertisement-individual">
  <img class="advertisement-company--logo" src="img/me.jpg" alt="person">
  
  <div class="advertisement-company-details">
      <div class="advertisement-company-name">
          <span class="comp-individual-details">Company</span> Universal
      </div>
  
      <div class="advertisement-company-date-posted">
          <span class="comp-individual-details">Date</span> 27 05 2030
      </div>
  
      <div class="advertisement-company-author-name">
          <span class="comp-individual-details">Author</span> Slavica Karaterzieva
      </div>
  
  </div><!--end of details-->
      </div><!--end of advertisement company-->
  
      <div class="advertisement-details">
          <ul>
              <li>Full Time Job</li>
              <li>Work From Home</li>
              <li>Flexible Working Hours</li>
          </ul>
      </div><!--end of feature-->

      <!-- <a href="#" class="advertisement_link btn-text">Submit Application</a> -->

  <div class="advertisement_cta">
      <div class="advertisement_prise-picture-box">
          <a href="#" class="advertisement_link btn-text">Read More</a>
          <a href="#" class="advertisement_link btn-text">Application Link</a>
          <!-- <p class="advertisement_price-value">$4,500</p> -->
      </div>
  </div><!--end of cta-->
  
  <div class="advertisement_bottom-logo advertisement_bottom-logo-estate">
      <div class="advertisement_bottom-logo-photo">
        <img src="img/universal.jpg" alt="company logo">
      </div>
  </div><!--end of bottom logo-->
  
  </div><!--end of back side-->
  
  </div><!-- end of job advertisement -->

          <!--the furniture card-->
          <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
            <div class="advertisement-side advertisement-side--front">
              <div class="advertisement_picture">
                  <img src="img/chairs.jpg" alt="chairs">
              </div>
              <h4 class="advertisement_heading">
                  <span class="advertisement-heading-span advertisement-heading-span--4">
                      Outdoor Furniture For Sale</span>
              </h4> 
  
              <div class="advertisement-specific-details">
                  <div class="advertisement-svg-icon">
                      <svg>
                          <use xlink:href="svg/symbol-defs.svg#icon-phone_in_talk"></use>
                      </svg>
                      <span>Call Me On: 708 554 663</span>
  
                  </div>
                  <!-- end of svg icons -->
  <div class="advertisement-address">
      <svg>
          <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
      </svg>
      <span>st Dimitar Vlahov 8</span>
  </div>
  <!-- end of address -->
              </div>
              <!-- end of specific details -->
  
           <div class="advertisement-description">
               <p>A comfortable, calming outdoor space is essential now that many 
                   of us are spending more time at home. 
                   Find budget-friendly outdoor furniture, 
                   patios and decks.
               </p>
           
           <!-- end of description-->
           <div class="advertisement-type">
              <p id="price"> Auction</p> 
             <!--  <p id="price">Sale</p> -->
             <!-- <p id="price"><span>$</span>300</p>  -->
               
           </div>
           <!-- end of type -->
          </div>
          <!-- end of description -->
          </div><!--end of front side-->
  
  <!--back side-->
  <div class="advertisement-side advertisement-side--back advertisement-side--back-4" >
      <div class="advertisement-company advertisement-individual">
  <img class="advertisement-company--logo" src="img/person.jpg" alt="person">
  
  <div class="advertisement-company-details">
      <div class="advertisement-company-name">
          <span class="comp-individual-details">Company</span> Fundoors
      </div>
  
      <div class="advertisement-company-date-posted">
          <span class="comp-individual-details">Date</span> 08 12 2030
      </div>
  
      <div class="advertisement-company-author-name">
          <span class="comp-individual-details">Author</span> Petar Tosev
      </div>
  
  </div><!--end of details-->
      </div><!--end of advertisement company-->
  
      <div class="advertisement-details">
          <ul>
              <li>First Feature</li>
              <li>Second Feature</li>
              <li>Third Feature</li>
          </ul>
      </div><!--end of feature-->

      <p class="advertisement_price-value">Auction starts from: $300</p>
  <div class="advertisement_cta">
      <div class="advertisement_prise-picture-box">
          <a href="#" class="advertisement_link btn-text">Read More</a>
          
      </div>
  </div><!--end of cta-->
  
  <div class="advertisement_bottom-logo advertisement_bottom-logo-home">
      <div class="advertisement_bottom-logo-photo">
        <img src="img/home.jpg" alt="company logo">
    </div>
  </div><!--end of bottom logo-->
  
  </div><!--end of back side-->
  
  </div><!-- end of furniture advertisement -->

    </div><!-- end of row -->
    
</div><!-- end of container-fluid -->

   </section>
   <!-- end of main section -->

<!-- scroll button -->
<div class="scroll">
    <button id="scrollToTop" class="scroll__hide">
        <i class="fa fa-chevron-up scroll__arrowUp">
        </i>
        
    </button>
</div>
<!-- end of scroll button -->

   <!-- footer 
<footer class="footer" >

<div class="footer__logo-box">
    <a href="../blueapp/index.php">
<img src="img/img-button.png" alt="blueapp" class="footer__logo">
</a>
</div>
end of footer logo 

</footer>
 end of footer -->

</body>
=======
<?php?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA Compatible" content="ie-edge">
    <link rel="stylesheet" type="text/css" href="./sass/vendors/font-awesome/fontawesome-free/css/all.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Nunito:wght@200;300;400&family=Oxygen:wght@300;400&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./sass/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./sass/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
    <title>The Blue App</title>
</head>
<body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="./sass/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="./sass/vendors/jquery3.5.0.js"></script>
    <script src="./js/menuClick.js"></script>
    <script src="./js/scroll.js"></script>
    <script src="./js/response.js"></script>

  

  <!--main section posts and adds-->
   <section class="section-main">
    <!-- <h2>Featured Listings</h2> -->
    <div class="footer__logo-box">
    <a href="../blueapp/index.php">
<img src="img/img-button.png" alt="blueapp" class="footer__logo">
</a>
</div>

<div class="container fluid">
    <div class="row">
        <!-- the featured listing heading -->
        <div class="col-md-12">
            <h2 class="secondary-heading text-center">Template Cards</h2>
            <h4 class="secondary-heading text-center" style="font-size:1.6rem">Create your own advertisement card from our template cards: Enter title, Insert photo and description of your product, with a price of your choice. Simle template and intuitive forms to work with. See your product sold across the web.</h4>
        </div>
        <br></br>
        <!--the real estate card-->
        <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
          <div class="advertisement-side advertisement-side--front">
            <div class="advertisement_picture">
                <img src="img/bannon-morrissy-house.jpg" alt="house">
            </div>
            <h4 class="advertisement_heading">
                <span class="advertisement-heading-span advertisement-heading-span--1">
                    Wood house for sale on Kozuv mountain</span>
            </h4> 

            <div class="advertisement-specific-details">
                <div class="advertisement-svg-icon">
                    <svg>
                        <use xlink:href="svg/symbol-defs.svg#icon-home_filled"></use>
                    </svg>
                    <span>House</span>

                    <svg>
                        <use xlink:href="svg/symbol-defs.svg#icon-hotel"></use>
                    </svg>
                    <span>Bed</span>

                    <svg>
                        <use xlink:href="svg/symbol-defs.svg#icon-connection"></use>
                    </svg>
                    <span> Wifi</span>
                </div>
                <!-- end of svg icons -->
<div class="advertisement-address">
    <svg>
        <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
    </svg>
    <span>st Dimitar Vlahov 30</span>
</div>
<!-- end of address -->
            </div>
            <!-- end of specific details -->

         <div class="advertisement-description">
             <p>The description: Mountain log house.
                  The number of rooms 3 + sauna Living area 64 sq.m. 
                  Total area 101 sq.m. The ground floor area 61 sq.m. 
                  The first floor area 40sq.m.</p>
         
         <!-- end of description-->
         <div class="advertisement-type">
            
             <p id="price"><span>$</span>480,300</p>
         </div>
         <!-- end of type -->
        </div>
        <!-- end of description -->
        </div><!--end of front side-->

<!--back side-->
<div class="advertisement-side advertisement-side--back advertisement-side--back-1" >
    <div class="advertisement-company advertisement-individual">
<img class="advertisement-company--logo" src="img/me.jpg" alt="person">

<div class="advertisement-company-details">
    <div class="advertisement-company-name">
        <span class="comp-individual-details">Company</span> Futurespect
    </div>

    <div class="advertisement-company-date-posted">
        <span class="comp-individual-details">Date</span> 17 12 2030
    </div>

    <div class="advertisement-company-author-name">
        <span class="comp-individual-details">Author</span> Slavica Karaterzieva
    </div>

</div><!--end of details-->
    </div><!--end of advertisement company-->

    <div class="advertisement-details">
        <ul>
            <li>First Feature</li>
            <li>Second Feature</li>
            <li>Third Feature</li>
        </ul>
    </div><!--end of feature-->

<div class="advertisement_cta">
    <div class="advertisement_prise-picture-box">
        <a href="#" class="advertisement_link btn-text">Read More</a>
        <p class="advertisement_price-value">$480,300</p>
    </div>
</div><!--end of cta-->

<div class="advertisement_bottom-logo advertisement_bottom-logo-estate">
    <div class="advertisement_bottom-logo-photo">
  <img src="img/real estate.png" alt="company logo">
    </div>
</div><!--end of bottom logo-->

</div><!--end of back side-->

</div><!-- end of real estate advertisement -->
  
        <!--the car card-->
        <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
            <div class="advertisement-side advertisement-side--front">
              <div class="advertisement_picture">
                  <img src="img/car.jpg" alt="car">
              </div>
              <h4 class="advertisement_heading">
                  <span class="advertisement-heading-span advertisement-heading-span--2">
                      Red BWM for sale in Skopje</span>
              </h4> 
  
              <div class="advertisement-specific-details">
                  <div class="advertisement-svg-icon advertisement-svg-icon--caricon">
                    
                      <svg>
                          <use xlink:href="svg/symbol-defs.svg#icon-directions_car"></use>
                      </svg>
                      <span>Car</span>
                    
                      <svg>
                          <use xlink:href="svg/symbol-defs.svg#icon-meter"></use>
                      </svg>
                      <span>Speed</span>
                    
                      <svg>
                          <use xlink:href="svg/symbol-defs.svg#icon-wrench"></use>
                      </svg>
                      <span>Check</span>
            
                  </div>
                  <!-- end of svg icons -->
  <div class="advertisement-address">
      <svg>
          <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
      </svg>
      <span>st Goce Delcev 10</span>
  </div>
  <!-- end of address -->
              </div>
              <!-- end of specific details -->
  
           <div class="advertisement-description">
               <p> BMW or BMW AG, is a German automobile, 
                   BMW is headquartered in Munich, Bavaria. It also owns and produces Mini cars, 
                   and is the parent company of Rolls-Royce Motor Cars.</p>
           
           <!-- end of description-->
           <div class="advertisement-type">
             <!--<p>Auction</p>--> 
             <p id="price"></p>
              <!--<p id="price"><span>$</span>20,300</p>--> 
           </div>
           <!-- end of type -->
          </div>
          <!-- end of description -->
          </div><!--end of front side-->
  
  <!--back side-->
  <div class="advertisement-side advertisement-side--back advertisement-side--back-2" >
      <div class="advertisement-company advertisement-individual">
  <img class="advertisement-company--logo" src="img/person.jpg" alt="person">
  
  <div class="advertisement-company-details">
      <div class="advertisement-company-name">
          <span class="comp-individual-details">Company</span> No name
      </div>
  
      <div class="advertisement-company-date-posted">
          <span class="comp-individual-details">Date</span> 06 04 2030
      </div>
  
      <div class="advertisement-company-author-name">
          <span class="comp-individual-details">Author</span> Petar Tosev
      </div>
  
  </div><!--end of details-->
      </div><!--end of advertisement company-->
  
      <div class="advertisement-details">
          <ul>
              <li>First Feature</li>
              <li>Second Feature</li>
              <li>Third Feature</li>
          </ul>
      </div><!--end of feature-->
  
  <div class="advertisement_cta">
      <div class="advertisement_prise-picture-box">
          <a href="#" class="advertisement_link btn-text">Read More</a>
          <p class="advertisement_price-value">$20,300</p>
      </div>
  </div><!--end of cta-->
  
  <div class="advertisement_bottom-logo advertisement_bottom-logo-car">
      <div class="advertisement_bottom-logo-photo">
        <img src="img/great_offers.jpg" alt="company logo">
      </div>
  </div><!--end of bottom logo-->
  
  </div><!--end of back side-->
  
  </div><!-- end of car advertisement -->

          <!--the job card-->
          <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
            <div class="advertisement-side advertisement-side--front">
              <div class="advertisement_picture">
                  <img src="img/work.jpg" alt="work">
              </div>
              <h4 class="advertisement_heading">
                  <span class="advertisement-heading-span advertisement-heading-span--3">
                      JavaScript Developer Needed</span>
              </h4> 
  
              <div class="advertisement-specific-details">
                  
                  <!-- end of svg icons -->
  <div class="advertisement-address">
      <svg>
          <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
      </svg>
      <span>in Gevgelija</span>
  </div>
  <!-- end of address -->
              </div>
              <!-- end of specific details -->
  
           <div class="advertisement-description">
               <p>Create awesome applications with us.
                   Work from home in your own time. 
                   Team meting once a week for updates.
                   <br>
                   Salary is negotiable, starting from:
                </p>
           
           <!-- end of description-->
           <div class="advertisement-type">
               <p id="price"><span>$</span>4,500</p>
           </div>
           <!-- end of type -->
          </div>
          <!-- end of description -->
          </div><!--end of front side-->
  
  <!--back side-->
  <div class="advertisement-side advertisement-side--back advertisement-side--back-3" >
      <div class="advertisement-company advertisement-individual">
  <img class="advertisement-company--logo" src="img/me.jpg" alt="person">
  
  <div class="advertisement-company-details">
      <div class="advertisement-company-name">
          <span class="comp-individual-details">Company</span> Universal
      </div>
  
      <div class="advertisement-company-date-posted">
          <span class="comp-individual-details">Date</span> 27 05 2030
      </div>
  
      <div class="advertisement-company-author-name">
          <span class="comp-individual-details">Author</span> Slavica Karaterzieva
      </div>
  
  </div><!--end of details-->
      </div><!--end of advertisement company-->
  
      <div class="advertisement-details">
          <ul>
              <li>Full Time Job</li>
              <li>Work From Home</li>
              <li>Flexible Working Hours</li>
          </ul>
      </div><!--end of feature-->

      <!-- <a href="#" class="advertisement_link btn-text">Submit Application</a> -->

  <div class="advertisement_cta">
      <div class="advertisement_prise-picture-box">
          <a href="#" class="advertisement_link btn-text">Read More</a>
          <a href="#" class="advertisement_link btn-text">Application Link</a>
          <!-- <p class="advertisement_price-value">$4,500</p> -->
      </div>
  </div><!--end of cta-->
  
  <div class="advertisement_bottom-logo advertisement_bottom-logo-estate">
      <div class="advertisement_bottom-logo-photo">
        <img src="img/universal.jpg" alt="company logo">
      </div>
  </div><!--end of bottom logo-->
  
  </div><!--end of back side-->
  
  </div><!-- end of job advertisement -->

          <!--the furniture card-->
          <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
            <div class="advertisement-side advertisement-side--front">
              <div class="advertisement_picture">
                  <img src="img/chairs.jpg" alt="chairs">
              </div>
              <h4 class="advertisement_heading">
                  <span class="advertisement-heading-span advertisement-heading-span--4">
                      Outdoor Furniture For Sale</span>
              </h4> 
  
              <div class="advertisement-specific-details">
                  <div class="advertisement-svg-icon">
                      <svg>
                          <use xlink:href="svg/symbol-defs.svg#icon-phone_in_talk"></use>
                      </svg>
                      <span>Call Me On: 708 554 663</span>
  
                  </div>
                  <!-- end of svg icons -->
  <div class="advertisement-address">
      <svg>
          <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
      </svg>
      <span>st Dimitar Vlahov 8</span>
  </div>
  <!-- end of address -->
              </div>
              <!-- end of specific details -->
  
           <div class="advertisement-description">
               <p>A comfortable, calming outdoor space is essential now that many 
                   of us are spending more time at home. 
                   Find budget-friendly outdoor furniture, 
                   patios and decks.
               </p>
           
           <!-- end of description-->
           <div class="advertisement-type">
              <p id="price"> Auction</p> 
             <!--  <p id="price">Sale</p> -->
             <!-- <p id="price"><span>$</span>300</p>  -->
               
           </div>
           <!-- end of type -->
          </div>
          <!-- end of description -->
          </div><!--end of front side-->
  
  <!--back side-->
  <div class="advertisement-side advertisement-side--back advertisement-side--back-4" >
      <div class="advertisement-company advertisement-individual">
  <img class="advertisement-company--logo" src="img/person.jpg" alt="person">
  
  <div class="advertisement-company-details">
      <div class="advertisement-company-name">
          <span class="comp-individual-details">Company</span> Fundoors
      </div>
  
      <div class="advertisement-company-date-posted">
          <span class="comp-individual-details">Date</span> 08 12 2030
      </div>
  
      <div class="advertisement-company-author-name">
          <span class="comp-individual-details">Author</span> Petar Tosev
      </div>
  
  </div><!--end of details-->
      </div><!--end of advertisement company-->
  
      <div class="advertisement-details">
          <ul>
              <li>First Feature</li>
              <li>Second Feature</li>
              <li>Third Feature</li>
          </ul>
      </div><!--end of feature-->

      <p class="advertisement_price-value">Auction starts from: $300</p>
  <div class="advertisement_cta">
      <div class="advertisement_prise-picture-box">
          <a href="#" class="advertisement_link btn-text">Read More</a>
          
      </div>
  </div><!--end of cta-->
  
  <div class="advertisement_bottom-logo advertisement_bottom-logo-home">
      <div class="advertisement_bottom-logo-photo">
        <img src="img/home.jpg" alt="company logo">
    </div>
  </div><!--end of bottom logo-->
  
  </div><!--end of back side-->
  
  </div><!-- end of furniture advertisement -->

    </div><!-- end of row -->
    
</div><!-- end of container-fluid -->

   </section>
   <!-- end of main section -->

<!-- scroll button -->
<div class="scroll">
    <button id="scrollToTop" class="scroll__hide">
        <i class="fa fa-chevron-up scroll__arrowUp">
        </i>
        
    </button>
</div>
<!-- end of scroll button -->

   <!-- footer 
<footer class="footer" >

<div class="footer__logo-box">
    <a href="../blueapp/index.php">
<img src="img/img-button.png" alt="blueapp" class="footer__logo">
</a>
</div>
end of footer logo 

</footer>
 end of footer -->

</body>
>>>>>>> 8909e8750af05f609e80253435cbd9efeec32e28
=======
<?php?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA Compatible" content="ie-edge">
    <link rel="stylesheet" type="text/css" href="./sass/vendors/font-awesome/fontawesome-free/css/all.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Nunito:wght@200;300;400&family=Oxygen:wght@300;400&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./sass/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./sass/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
    <title>The Blue App</title>
</head>
<body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="./sass/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="./sass/vendors/jquery3.5.0.js"></script>
    <script src="./js/menuClick.js"></script>
    <script src="./js/scroll.js"></script>
    <script src="./js/response.js"></script>

  

  <!--main section posts and adds-->
   <section class="section-main">
    <!-- <h2>Featured Listings</h2> -->
    <div class="footer__logo-box">
    <a href="../blueapp/index.php">
<img src="img/img-button.png" alt="blueapp" class="footer__logo">
</a>
</div>

<div class="container fluid">
    <div class="row">
        <!-- the featured listing heading -->
        <div class="col-md-12">
            <h2 class="secondary-heading text-center">Template Cards</h2>
            <h4 class="secondary-heading text-center" style="font-size:1.6rem">Create your own advertisement card from our template cards: Enter title, Insert photo and description of your product, with a price of your choice. Simle template and intuitive forms to work with. See your product sold across the web.</h4>
        </div>
        <br></br>
        <!--the real estate card-->
        <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
          <div class="advertisement-side advertisement-side--front">
            <div class="advertisement_picture">
                <img src="img/bannon-morrissy-house.jpg" alt="house">
            </div>
            <h4 class="advertisement_heading">
                <span class="advertisement-heading-span advertisement-heading-span--1">
                    Wood house for sale on Kozuv mountain</span>
            </h4> 

            <div class="advertisement-specific-details">
                <div class="advertisement-svg-icon">
                    <svg>
                        <use xlink:href="svg/symbol-defs.svg#icon-home_filled"></use>
                    </svg>
                    <span>House</span>

                    <svg>
                        <use xlink:href="svg/symbol-defs.svg#icon-hotel"></use>
                    </svg>
                    <span>Bed</span>

                    <svg>
                        <use xlink:href="svg/symbol-defs.svg#icon-connection"></use>
                    </svg>
                    <span> Wifi</span>
                </div>
                <!-- end of svg icons -->
<div class="advertisement-address">
    <svg>
        <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
    </svg>
    <span>st Dimitar Vlahov 30</span>
</div>
<!-- end of address -->
            </div>
            <!-- end of specific details -->

         <div class="advertisement-description">
             <p>The description: Mountain log house.
                  The number of rooms 3 + sauna Living area 64 sq.m. 
                  Total area 101 sq.m. The ground floor area 61 sq.m. 
                  The first floor area 40sq.m.</p>
         
         <!-- end of description-->
         <div class="advertisement-type">
            
             <p id="price"><span>$</span>480,300</p>
         </div>
         <!-- end of type -->
        </div>
        <!-- end of description -->
        </div><!--end of front side-->

<!--back side-->
<div class="advertisement-side advertisement-side--back advertisement-side--back-1" >
    <div class="advertisement-company advertisement-individual">
<img class="advertisement-company--logo" src="img/me.jpg" alt="person">

<div class="advertisement-company-details">
    <div class="advertisement-company-name">
        <span class="comp-individual-details">Company</span> Futurespect
    </div>

    <div class="advertisement-company-date-posted">
        <span class="comp-individual-details">Date</span> 17 12 2030
    </div>

    <div class="advertisement-company-author-name">
        <span class="comp-individual-details">Author</span> Slavica Karaterzieva
    </div>

</div><!--end of details-->
    </div><!--end of advertisement company-->

    <div class="advertisement-details">
        <ul>
            <li>First Feature</li>
            <li>Second Feature</li>
            <li>Third Feature</li>
        </ul>
    </div><!--end of feature-->

<div class="advertisement_cta">
    <div class="advertisement_prise-picture-box">
        <a href="#" class="advertisement_link btn-text">Read More</a>
        <p class="advertisement_price-value">$480,300</p>
    </div>
</div><!--end of cta-->

<div class="advertisement_bottom-logo advertisement_bottom-logo-estate">
    <div class="advertisement_bottom-logo-photo">
  <img src="img/real estate.png" alt="company logo">
    </div>
</div><!--end of bottom logo-->

</div><!--end of back side-->

</div><!-- end of real estate advertisement -->
  
        <!--the car card-->
        <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
            <div class="advertisement-side advertisement-side--front">
              <div class="advertisement_picture">
                  <img src="img/car.jpg" alt="car">
              </div>
              <h4 class="advertisement_heading">
                  <span class="advertisement-heading-span advertisement-heading-span--2">
                      Red BWM for sale in Skopje</span>
              </h4> 
  
              <div class="advertisement-specific-details">
                  <div class="advertisement-svg-icon advertisement-svg-icon--caricon">
                    
                      <svg>
                          <use xlink:href="svg/symbol-defs.svg#icon-directions_car"></use>
                      </svg>
                      <span>Car</span>
                    
                      <svg>
                          <use xlink:href="svg/symbol-defs.svg#icon-meter"></use>
                      </svg>
                      <span>Speed</span>
                    
                      <svg>
                          <use xlink:href="svg/symbol-defs.svg#icon-wrench"></use>
                      </svg>
                      <span>Check</span>
            
                  </div>
                  <!-- end of svg icons -->
  <div class="advertisement-address">
      <svg>
          <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
      </svg>
      <span>st Goce Delcev 10</span>
  </div>
  <!-- end of address -->
              </div>
              <!-- end of specific details -->
  
           <div class="advertisement-description">
               <p> BMW or BMW AG, is a German automobile, 
                   BMW is headquartered in Munich, Bavaria. It also owns and produces Mini cars, 
                   and is the parent company of Rolls-Royce Motor Cars.</p>
           
           <!-- end of description-->
           <div class="advertisement-type">
             <!--<p>Auction</p>--> 
             <p id="price"></p>
              <!--<p id="price"><span>$</span>20,300</p>--> 
           </div>
           <!-- end of type -->
          </div>
          <!-- end of description -->
          </div><!--end of front side-->
  
  <!--back side-->
  <div class="advertisement-side advertisement-side--back advertisement-side--back-2" >
      <div class="advertisement-company advertisement-individual">
  <img class="advertisement-company--logo" src="img/person.jpg" alt="person">
  
  <div class="advertisement-company-details">
      <div class="advertisement-company-name">
          <span class="comp-individual-details">Company</span> No name
      </div>
  
      <div class="advertisement-company-date-posted">
          <span class="comp-individual-details">Date</span> 06 04 2030
      </div>
  
      <div class="advertisement-company-author-name">
          <span class="comp-individual-details">Author</span> Petar Tosev
      </div>
  
  </div><!--end of details-->
      </div><!--end of advertisement company-->
  
      <div class="advertisement-details">
          <ul>
              <li>First Feature</li>
              <li>Second Feature</li>
              <li>Third Feature</li>
          </ul>
      </div><!--end of feature-->
  
  <div class="advertisement_cta">
      <div class="advertisement_prise-picture-box">
          <a href="#" class="advertisement_link btn-text">Read More</a>
          <p class="advertisement_price-value">$20,300</p>
      </div>
  </div><!--end of cta-->
  
  <div class="advertisement_bottom-logo advertisement_bottom-logo-car">
      <div class="advertisement_bottom-logo-photo">
        <img src="img/great_offers.jpg" alt="company logo">
      </div>
  </div><!--end of bottom logo-->
  
  </div><!--end of back side-->
  
  </div><!-- end of car advertisement -->

          <!--the job card-->
          <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
            <div class="advertisement-side advertisement-side--front">
              <div class="advertisement_picture">
                  <img src="img/work.jpg" alt="work">
              </div>
              <h4 class="advertisement_heading">
                  <span class="advertisement-heading-span advertisement-heading-span--3">
                      JavaScript Developer Needed</span>
              </h4> 
  
              <div class="advertisement-specific-details">
                  
                  <!-- end of svg icons -->
  <div class="advertisement-address">
      <svg>
          <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
      </svg>
      <span>in Gevgelija</span>
  </div>
  <!-- end of address -->
              </div>
              <!-- end of specific details -->
  
           <div class="advertisement-description">
               <p>Create awesome applications with us.
                   Work from home in your own time. 
                   Team meting once a week for updates.
                   <br>
                   Salary is negotiable, starting from:
                </p>
           
           <!-- end of description-->
           <div class="advertisement-type">
               <p id="price"><span>$</span>4,500</p>
           </div>
           <!-- end of type -->
          </div>
          <!-- end of description -->
          </div><!--end of front side-->
  
  <!--back side-->
  <div class="advertisement-side advertisement-side--back advertisement-side--back-3" >
      <div class="advertisement-company advertisement-individual">
  <img class="advertisement-company--logo" src="img/me.jpg" alt="person">
  
  <div class="advertisement-company-details">
      <div class="advertisement-company-name">
          <span class="comp-individual-details">Company</span> Universal
      </div>
  
      <div class="advertisement-company-date-posted">
          <span class="comp-individual-details">Date</span> 27 05 2030
      </div>
  
      <div class="advertisement-company-author-name">
          <span class="comp-individual-details">Author</span> Slavica Karaterzieva
      </div>
  
  </div><!--end of details-->
      </div><!--end of advertisement company-->
  
      <div class="advertisement-details">
          <ul>
              <li>Full Time Job</li>
              <li>Work From Home</li>
              <li>Flexible Working Hours</li>
          </ul>
      </div><!--end of feature-->

      <!-- <a href="#" class="advertisement_link btn-text">Submit Application</a> -->

  <div class="advertisement_cta">
      <div class="advertisement_prise-picture-box">
          <a href="#" class="advertisement_link btn-text">Read More</a>
          <a href="#" class="advertisement_link btn-text">Application Link</a>
          <!-- <p class="advertisement_price-value">$4,500</p> -->
      </div>
  </div><!--end of cta-->
  
  <div class="advertisement_bottom-logo advertisement_bottom-logo-estate">
      <div class="advertisement_bottom-logo-photo">
        <img src="img/universal.jpg" alt="company logo">
      </div>
  </div><!--end of bottom logo-->
  
  </div><!--end of back side-->
  
  </div><!-- end of job advertisement -->

          <!--the furniture card-->
          <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
            <div class="advertisement-side advertisement-side--front">
              <div class="advertisement_picture">
                  <img src="img/chairs.jpg" alt="chairs">
              </div>
              <h4 class="advertisement_heading">
                  <span class="advertisement-heading-span advertisement-heading-span--4">
                      Outdoor Furniture For Sale</span>
              </h4> 
  
              <div class="advertisement-specific-details">
                  <div class="advertisement-svg-icon">
                      <svg>
                          <use xlink:href="svg/symbol-defs.svg#icon-phone_in_talk"></use>
                      </svg>
                      <span>Call Me On: 708 554 663</span>
  
                  </div>
                  <!-- end of svg icons -->
  <div class="advertisement-address">
      <svg>
          <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
      </svg>
      <span>st Dimitar Vlahov 8</span>
  </div>
  <!-- end of address -->
              </div>
              <!-- end of specific details -->
  
           <div class="advertisement-description">
               <p>A comfortable, calming outdoor space is essential now that many 
                   of us are spending more time at home. 
                   Find budget-friendly outdoor furniture, 
                   patios and decks.
               </p>
           
           <!-- end of description-->
           <div class="advertisement-type">
              <p id="price"> Auction</p> 
             <!--  <p id="price">Sale</p> -->
             <!-- <p id="price"><span>$</span>300</p>  -->
               
           </div>
           <!-- end of type -->
          </div>
          <!-- end of description -->
          </div><!--end of front side-->
  
  <!--back side-->
  <div class="advertisement-side advertisement-side--back advertisement-side--back-4" >
      <div class="advertisement-company advertisement-individual">
  <img class="advertisement-company--logo" src="img/person.jpg" alt="person">
  
  <div class="advertisement-company-details">
      <div class="advertisement-company-name">
          <span class="comp-individual-details">Company</span> Fundoors
      </div>
  
      <div class="advertisement-company-date-posted">
          <span class="comp-individual-details">Date</span> 08 12 2030
      </div>
  
      <div class="advertisement-company-author-name">
          <span class="comp-individual-details">Author</span> Petar Tosev
      </div>
  
  </div><!--end of details-->
      </div><!--end of advertisement company-->
  
      <div class="advertisement-details">
          <ul>
              <li>First Feature</li>
              <li>Second Feature</li>
              <li>Third Feature</li>
          </ul>
      </div><!--end of feature-->

      <p class="advertisement_price-value">Auction starts from: $300</p>
  <div class="advertisement_cta">
      <div class="advertisement_prise-picture-box">
          <a href="#" class="advertisement_link btn-text">Read More</a>
          
      </div>
  </div><!--end of cta-->
  
  <div class="advertisement_bottom-logo advertisement_bottom-logo-home">
      <div class="advertisement_bottom-logo-photo">
        <img src="img/home.jpg" alt="company logo">
    </div>
  </div><!--end of bottom logo-->
  
  </div><!--end of back side-->
  
  </div><!-- end of furniture advertisement -->

    </div><!-- end of row -->
    
</div><!-- end of container-fluid -->

   </section>
   <!-- end of main section -->

<!-- scroll button -->
<div class="scroll">
    <button id="scrollToTop" class="scroll__hide">
        <i class="fa fa-chevron-up scroll__arrowUp">
        </i>
        
    </button>
</div>
<!-- end of scroll button -->

   <!-- footer 
<footer class="footer" >

<div class="footer__logo-box">
    <a href="../blueapp/index.php">
<img src="img/img-button.png" alt="blueapp" class="footer__logo">
</a>
</div>
end of footer logo 

</footer>
 end of footer -->

</body>
>>>>>>> 8909e8750af05f609e80253435cbd9efeec32e28
</html>