
<?php 
ob_start();
session_start();

//  $session_logged=(isset($_SESSION['logged']))?$_SESSION['logged']: ''; 
//  $session_fullname=(isset($_SESSION['fullname']))?$_SESSION['fullname']: ''; 
//  $session_username=(isset($_SESSION['username']))?$_SESSION['username']: ''; 
//  $session_city=(isset($_SESSION['city']))?$_SESSION['city']: ''; 
//  $session_street=(isset($_SESSION['street']))?$_SESSION['street']: ''; 
//  $session_eircode=(isset($_SESSION['eircode']))?$_SESSION['eircode']: ''; 
//  $session_county=(isset($_SESSION['county']))?$_SESSION['county']: ''; 
//  $session_phone=(isset($_SESSION['phone']))?$_SESSION['phone']: ''; 
//  $session_email=(isset($_SESSION['email']))?$_SESSION['email']: ''; 
//  $session_cardtype=(isset($_SESSION['cardtype']))?$_SESSION['cardtype']: ''; 
//  $session_cardnumber=(isset($_SESSION['cardnumber']))?$_SESSION['cardnumber']: ''; 
//  $session_expdate=(isset($_SESSION['expdate']))?$_SESSION['expdate']: ''; 


  include "includes/header.php";   
  include "includes/connectDb.php"; 
  include "includes/spinner.php";
  include "sharedFunctions/vatCalculator.php";
  include "includes/navbar.php";  ?>

    <!-- Title (navbar) -->
        <section class="title-section">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12">
                        <h1>Welcome to LaptopMania</h1>
                        <hr>
                        <h4 class="mb-4">The best place to buy a new laptop.</h4>
                        <a class="btn btn-primary btn-sm js--title-shop-button" href="#" role="button">Shop</a>
                        <a class="btn btn-primary btn-sm js--title-review-button" href="#" role="button">Reviews</a>
                    </div>
                </div>    
            </div>
        </section>
    <!-- Create account -->
        <section class="create-account-section js--section-create-account">
        </section>     
    <!-- Discounted items carousel -->
        <?php include "includes/itemsCarousel.php" ?>
    <!-- Discounted items Carousel -->
       
    
    <!-- Shop section -->
        <?php include "includes/shopSection.php" ?>       
  
    <!-- Checkout -->
        <section class="checkout-section js--section-checkout">
        </section>
  
    
    <!--Reviews-->    
        <section class=" review-section js--section-review">
            <div id="review-carousel" class="carousel slide" data-ride="false">
                <div class="carousel-inner" style="width:100%; height: 500px !important;">
                  <div class="carousel-item active">
                    <h2>Great value here on electronics.  Bought my laptop here.</h2>
                    <img class="reviewer-image" src="img/reviewer1.jpg" alt="lady-profile">
                    <em>Christy Carr, Limerick</em>
                  </div>
                  <div class="carousel-item">
                    <h2 class="review-text">Great range good products.</h2>
                    <img class="reviewer-image" src="img/reviewer2.jpg" alt="man-profile">
                    <em>Bobby Mason, Cork</em>
                  </div>
                  <div class="carousel-item">
                    <h2 class="review-text">Very friendly, understanding, patient and helpful customer service!</h2>
                    <img class="reviewer-image" src="img/reviewer3.jpg" alt="man-profile">
                    <em>Darell Rice, Galway</em>
                  </div>
                  <div class="carousel-item">
                    <h2 class="review-text">Awesome work. I was left paralyzed with my broken laptop. But they saved a lot of my hassle.</h2>
                    <img class="reviewer-image" src="img/reviewer4.jpg" alt="lady-profile">
                    <em>Suzanne Sanders, Dublin</em>
                  </div>
                  <div class="carousel-item">
                    <h2 class="review-text">Could not recommend them highly enough! Everything from beginning to finish is professional, friendly and very fast!</h2>
                    <img class="reviewer-image" src="img/reviewer5.jpg" alt="man-profile">
                    <em>Jan Hazincak, Galway</em>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#review-carousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#review-carousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
        </section>
      
 
    <!-- Footer -->
    <?php include "includes/footer.php"; ?>  
  </body>
</html>

<script>

    //Function pushing relevant purchase information to the "createOrder.php" file which is pushing data to SQL server database.
    //On success current php session end and the page is reloaded. 


</script>

    