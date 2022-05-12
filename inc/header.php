<?php?>
<body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="./sass/vendors/jquery3.5.0.js"></script>
    <script src="./sass/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/menuClick.js"></script>
    <script src="./js/response.js"></script>
    <script src="./js/scroll.js"></script>
    <script src="./js/registerValidation.js"></script>
    <!-- header -->
    <header class="header">
        <div class="header_title-box">
<?php if (isset($_SESSION['user_name'])){
echo $_SESSION['user_name'];}?>
         <h1 class="primary-heading">
            <span class="primary-heading--front">
                <p class="primary-heading--sub">The</p>
                 Blue App</span>
            <span class="primary-heading--small">is all you need for success</span>
         </h1>
        </div>
        <!-- the navigation menu -->
 <div class="main-menu">
    <div class="main-menu_logo-container">
         <Img class="main-menu_menu-img" src="img/img-button.png" alt="button"/> 
    </div>
    <Img class="main-menu_logo-hidden" src="img/img-button.png" alt="button"/>

      <input type="checkbox"  name="" id=button-menu class="hidden">
      <label for="button-menu" class="icon-menu">
      <i class="fas fa-bars bars"></i>
        <i class="fas fa-times times hidden"></i>
    </label> 

        <nav class="menu">
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>

            
            <li class="sub-menu">
                <a href="#">What we offer</a>
            
                <ul>
                    <li><a href="offer.html">Our offer</a></li>
                    <li><a href="packages.html">Packages</a></li>
                    <li><a href="post.html">Post free</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="#">About us</a>
                <ul>
                    <li>
                        <a href="about.html">History</a></li>
                </ul>
            </li>
              
            <li><a href="contact.html">Contact us</a></li>
<?php if(isset($_SESSION['user_id'])){
 echo '<li><a href="login.php">Logout</a></li>';
}
else{echo'<li><a href="login.php">Login</a></li>';}
?>
            <!-- <li><a href="login.php">login</a></li> -->
        </ul>
        </nav>
 </div>
     <!-- end of navigation menu  -->
      <!-- the search bar -->
      <section class="search-box">
        <div class="search-box_container">
            <input type="text" class="search-box_input" placeholder="Text">
            <input type="text" class="search-box_input search-box_input-right" placeholder="Keyword">
            <input type="text" id="searched_keyword_category" style="display:none;">
            <button type="button" class="search-box_button"><i class="fas fa-search search-box_btn-icon"></i></button>
        </div> 
    </section>
  
    </header>
    <!-- end of header -->