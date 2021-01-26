
<?php session_start();?>

<?php $session_logged=(isset($_SESSION['logged']))?$_SESSION['logged']: ''; ?>
<?php $session_fullname=(isset($_SESSION['fullname']))?$_SESSION['fullname']: ''; ?>
<?php $session_username=(isset($_SESSION['username']))?$_SESSION['username']: ''; ?>
<?php $session_city=(isset($_SESSION['city']))?$_SESSION['city']: ''; ?>
<?php $session_street=(isset($_SESSION['street']))?$_SESSION['street']: ''; ?>
<?php $session_eircode=(isset($_SESSION['eircode']))?$_SESSION['eircode']: ''; ?>
<?php $session_county=(isset($_SESSION['county']))?$_SESSION['county']: ''; ?>
<?php $session_phone=(isset($_SESSION['phone']))?$_SESSION['phone']: ''; ?>
<?php $session_email=(isset($_SESSION['email']))?$_SESSION['email']: ''; ?>
<?php $session_cardtype=(isset($_SESSION['cardtype']))?$_SESSION['cardtype']: ''; ?>
<?php $session_cardnumber=(isset($_SESSION['cardnumber']))?$_SESSION['cardnumber']: ''; ?>
<?php $session_expdate=(isset($_SESSION['expdate']))?$_SESSION['expdate']: ''; ?>

<?php include "includes/header.php"; ?>  
<?php include "includes/navbar.php" ?>
<?php include "includes/connectDb.php"; ?>
<?php include "sharedFunctions/vatCalculator.php"; ?>

    <!-- Title (navbar) -->
        <section class="title">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12">
                        <h1>Welcome to LaptopMania</h1>
                        <hr>
                        <p>The best place to buy a new laptop.</p>
                        <a class="btn btn-primary btn-sm js--title-shop-button" href="#" role="button">Shop</a>
                        <a class="btn btn-primary btn-sm js--title-review-button" href="#" role="button">Reviews</a>
                    </div>
                </div>    
            </div>
        </section>
    <!-- Create account -->
        <section class="create-account js--section-create-account">
        </section>     
    <!-- Discounted items carousel -->
        <?php include "includes/itemsCarousel.php" ?>
    <!-- Discounted items Carousel -->
       
    
    <!-- Shop -->
        <section class="shop js--section-shop">
            <div class="container-fluid">
                <h2 class="text-center">Pick up your new laptop.</h2>
                <div class="d-flex flex-row">
                    <div class="d-flex flex-column">
                        <div class="list-group">
                            <a class="list-group-item list-group-item disabled flex-fill">
                            <h5 class="text-center" >CHOOSE A CATEGORY</h5>
                            </a>
                            <hr>
                            <a class="text-center list-group-item list-group-item-action" id="business-laptops" ><b>Business laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action" id="laptops" ><b>Laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action" id="gaming-laptops"><b>Gaming laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action" id="macbooks"><b>Macbooks</b></a>
                            <a class="text-center list-group-item list-group-item-action" id="discount" ><b>Discounted laptops</b></a>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="list-laptops" id="item-capsule">
         
                        </div>
                    </div>
                </div>
            </div>
        </section>
  
    <!-- Checkout -->
        <section class="checkout js--section-checkout">
        </section>
  
    
    <!--Reviews-->    
        <section class="review js--section-review">
            <div id="review-carousel" class="carousel slide" data-ride="false">
                <div class="carousel-inner">
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
        <footer class="footer">
          <i class="social-icon fab fa-facebook"></i>
          <i class="social-icon fab fa-twitter"></i>
          <i class="social-icon fab fa-instagram"></i>
          <p>© Copyright 2020 GMIT</p>
        </footer>

   
  </body>
    <script src="https://kit.fontawesome.com/72d352adb4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src = jQueryPlugins/jquery.waypoints.min.js></script>
    <script src = jQueryPlugins/jquery.validate.min.js></script>
    
</html>

<script>
    let totalPrice = document.querySelector('.js--total-price').innerText;
    totalPrice = 0;
    let totalQuantity = document.querySelectorAll('js--total-quantity').innerText;
    totalQuantity = 0;
    
   

    //empty arrays object representing a shopping cart
    let shoppingCart = [];
    
    //JS boolean tracking if the user is logged in. The JS value has been created for efficient DOM manipulation
    let logged = '<?php echo json_encode($session_logged);?>';
    //JS variable storing the response from the "loginUser.php" file
    let loggedIn = false;

    //Funcion manipulating DOM After logging in and logging out
        $(function(){
            if(logged == "false"){
                alert("Invalid username or password");
            } else if (logged == "true"){
                $(function(){
                    $("span.js--account").text(<?php echo json_encode($session_username);?>);
                    $("input.js--login-account-button").html(".js--login-account-button").replaceWith("<input class='btn btn-danger btn-block js--logout-account-button' name='logintoaccount' value='Logout'>");
                });
                loggedIn = true;
            }
        });
        $("div").on("click", ".js--my-account", function(){
           $(function(){
            $(".js--logout-account-button").click(function(){
                $("span.js--account").text("My Account");
                $("input.js--logout-account-button").html(".js--logout-account-button").replaceWith("<input class='btn btn-secondary btn-block js--login-account-button' type='submit' name='logintoaccount' value='Login'>");
                loggedIn = false;
                <?php session_unset();?>
            });
        
           }); 
        });
    
    //Populates random jumbotron on the page load
        // getRequest("Discounted laptop", ".jumbotron", "randomCarouselItem");
       
    
    //Functions populating shop section with items on click
        $('#business-laptops').click(function(){
        getRequest("SELECT * FROM laptops WHERE laptop_screenSize < '15.6'","#item-capsule", "shopAutocomplete");
        });
        $('#laptops').click(function(){
        getRequest("SELECT * FROM laptops WHERE laptop_type = 'Laptop'","#item-capsule", "shopAutocomplete");
        });
        $('#gaming-laptops').click(function(){
        getRequest("SELECT * FROM laptops WHERE laptop_type = 'Gaming laptop'","#item-capsule", "shopAutocomplete");
        });
        $('#macbooks').click(function(){
        getRequest("SELECT * FROM laptops WHERE laptop_OS = 'macOS Catalina'","#item-capsule", "shopAutocomplete");
        });
        $('#discount').click(function(){
        getRequest("SELECT * FROM laptops WHERE laptop_type = 'Discounted laptop'","#item-capsule", "shopAutocomplete");
        });
    
    //jQuery animations on scroll
        $('.js--title-shop-button').click(function(){
        $('html, body').animate({scrollTop: $('.js--section-shop').offset().top}, 1000);
        getRequest("SELECT * FROM laptops","#item-capsule","shopAutocomplete");
        });
        $('.js--title-review-button').click(function(){
        $('html, body').animate({scrollTop: $('.js--section-review').offset().top}, 1000);
        });
        $('.js--section-shop').waypoint(function(direction){
        if(direction == "down"){
            getRequest("SELECT * FROM laptops","#item-capsule","shopAutocomplete");
        }
        });
        $('.js--section-discount').waypoint(function(direction){
        if(direction == "down"){
            $('nav').addClass('sticky');
        }else{
            $('nav').removeClass('sticky');
            }
            }, {
            offset: '80px'
        });
    
    //Changes the colors of the shop buttons on click
        $('#business-laptops, #laptops, #gaming-laptops, #macbooks, #discount').click(function() {
            $('#business-laptops, #laptops, #gaming-laptops, #macbooks, #discount').removeClass("active");
            $(this).addClass("active");
        });

    
    
    //Populates dropdown shopping cart on the "add to cart" button
    //Increasing shoppings cart total price and a badge value representing number of items in the shopping cart
        $("#item-capsule").on("click", ".js--add-cart", function() {
        let laptopName = ($(this).closest('span').find('.js--laptop-name').text());
        let laptopPrice = ($(this).closest('span').find(".js--laptop-price").text());
        let slicedLaptopPrice = parseFloat(laptopPrice.substring(1));
        totalPrice += slicedLaptopPrice;
        $('.js--total-price').text(`€${totalPrice.toFixed(2)}`);
        
        shoppingCart[totalQuantity] = {name: laptopName, price: slicedLaptopPrice};
        totalQuantity += 1;
        
        $('.js--total-quantity').text(totalQuantity);
            $( ".js--dropdown-cart" ).append( 
           
                `<div class='d-block p-2 shopping-cart-pill js--shopping-cart-pill'>\
                    <p class='font-weight-bold cart-text js--laptop-name'>${laptopName}</p>\
                    <div class='d-flex flex-fill flex-row align-items-center justify-content-around'>\
                        <img src='img/laptops/${laptopName}.jpg' class='laptop-img-cart'>\
                        <div class='p-2 flex-fill'><p class='font-weight-bolder cart-text js--price '>${laptopPrice}</p></span></div>\
                        <button class='btn btn-danger fa fa-close cart-item js--close-button'></button>\
                    </div>\
                </div>`

        
            );
        });

 
    //Removes the item from the dropdown shopping cart on click
    //Removes the same item from the "shoppingCart" arrays object
    //Also decreases the value which is representing the total number of the items in the dropdown shopping cart
        
        $(".js--dropdown-cart").on("click", ".js--close-button", function() {
                let laptopPrice = ($(this).closest('div').find('.js--price').text());
                let laptopName = ($(this).closest('div.js--shopping-cart-pill').find('.js--laptop-name').text());
                let slicedLaptopPrice = parseFloat(laptopPrice.substring(1));
                totalPrice -= slicedLaptopPrice;
                $('.js--total-price').text(`€${totalPrice.toFixed(2)}`);

                var index = shoppingCart.map(function(e) { return e.name; }).indexOf(laptopName);
                shoppingCart.splice(index, 1);
                totalQuantity -= 1;
                $('.js--total-quantity').text(totalQuantity);

                $(this).closest('.js--shopping-cart-pill').remove();
        });

    //Function which is called on click and fully executed just when the user is logged in and the shopping cart is not empty
    //Function creates a order summary page where the user can check his details he provided while registering in
    //Function iterates over javascript array object "shoppingCart" and prints all items stored in this object. 
    //Function calculates and displays total value and sending all these information to the SQL server (on button click)
    
    
        $("nav").on("click", ".js--checkout-button", function() {
            if(!$(".js--shopping-cart-pill").length){
                alert("Your basket is empty");
            }else if (loggedIn == false){
              alert ("Sign in to Complete Purchase");
            }else{
                $("section.js--section-shop").html("");
                $('html, body').animate({scrollTop: $('.js--section-checkout').offset().top}, 800);
                $('.js--section-checkout').append(
                    `<div class="container-fluid">\
                    <h2 class="text-center">Order details.</h2>\
                    <div class="summary-personal details-details">\
                    <h5 class='font-weight-bold text-left'>Personal details</h5>\
                                <div class="summary-personal js-summary-personal">\
                                        <div class="d-flex flex-row justify-content-center">\
                                          <div class="col-5">
                                          	<div><b>Full name:&nbsp;&nbsp;</b><?php echo json_encode($session_fullname);?></div>\
                                          </div>\
                                        </div>\
                                        <div class="d-flex flex-row justify-content-center">\
                                          <div class="col-5">\
                                            <div><b>User name:&nbsp;&nbsp;</b><span class="js--buyer-name"><?php echo json_encode($session_username);?></span></div>\
                                          </div>\
                                        </div>\
                                        <div class="d-flex flex-row justify-content-center">\
                                          <div class="col-5">\
                                            <div><b>City:&nbsp;&nbsp;</b><?php echo json_encode($session_city);?></div>\
                                          </div>\
                                        </div>\
                                        <div class="d-flex flex-row justify-content-center">\
                                          <div class="col-5">\
                                            <div><b>Street:&nbsp;&nbsp;</b><?php echo json_encode($session_street);?></div>\
                                          </div>\
                                        </div>\
                                        <div class="d-flex flex-row justify-content-center">\
                                          <div class="col-5">\
                                            <div><b>Eircode:&nbsp;&nbsp;</b><?php echo json_encode($session_eircode);?></div>\
                                          </div>\
                                        </div>\
                                        <div class="d-flex flex-row justify-content-center">\
                                          <div class="col-5">\
                                            <div><b>County:&nbsp;&nbsp;</b><?php echo json_encode($session_county);?></div>\
                                          </div>\
                                        </div>\
                                        <hr>\
                                        <h5 class='font-weight-bold text-left'>Contact details</h5>\
                                        <hr>\
                                        <div class="d-flex flex-row justify-content-center">\
                                          <div class="col-5">\
                                            <div><b>Phone number:&nbsp;&nbsp;</b><?php echo json_encode($session_phone);?></div>\
                                          </div>\
                                        </div>\
                                        <div class="d-flex flex-row justify-content-center">\
                                          <div class="col-5">\
                                            <div><b>E-mail address:&nbsp;&nbsp;</b><?php echo json_encode($session_email);?></div>\
                                          </div>\
                                        </div>\
                                        <hr>\
                                        <h5 class='font-weight-bold text-left'>Payment details</h5>\
                                        <hr>\
                                        <div class="d-flex flex-row justify-content-center">\
                                          <div class="col-5">\
                                            <div><b>Card type:&nbsp;&nbsp;</b><?php echo json_encode($session_cardtype);?></div>\
                                          </div>\
                                        </div>\
                                        <div class="d-flex flex-row justify-content-center">\
                                          <div class="col-5">\
                                            <div><b>Card number:&nbsp;&nbsp;</b><?php echo json_encode($session_cardnumber);?></div>\
                                          </div>\
                                        </div>\
                                        <div class="d-flex flex-row justify-content-center">\
                                          <div class="col-5">\
                                            <div><b>Card expiration date:&nbsp;&nbsp;</b><?php echo json_encode($session_expdate);?></div>\
                                          </div>\
                                        </div>\
                                        <hr>\
                                        <h5 class='font-weight-bold text-left'>Shopping cart</h5>\
                                        <hr>\
                                    </div>\
                            </div>\
                            <div class="summary-products">\
                            </div>\
                            <div class="total-price">\
                            </div>\
                            <div class="final-confirmation">
                            </div>
                        </div>\
                    </div>`   
            )
            $(function(){
              let totalPrice = 0;
              let delivery = 10;
              for (let item of shoppingCart){
                totalPrice += item.price;
                $('.summary-products').append(
                  `<div class="summary-item"> 
                    <div class="d-flex flex-fill flex-row align-items-center justify-content-around">
                      <div class='p-2'><b>${item.name}</b></div>
                      <img src='img/laptops/${item.name}.jpg' class='laptop-img-summary'>
                      <div class='d-flex flex-column'>
                      <div class='p-2'><h4 class='js--laptop-price'>€${item.price}</div>
                    </div>
                  </div><br>`
                )
              };
              $(".total-price").append(
                `<hr>
                <div class ="d-flex flex-row justify-content-end"><b>Delivery:&nbsp;</b>€${delivery}</div>
                <div class ="d-flex flex-row justify-content-end"><b>Price with VAT:&nbsp;</b>€${totalPrice.toFixed(2)}</div>    
                <div class ="d-flex flex-row justify-content-end"><b>TotalPrice:&nbsp;</b>€<span class="js--final-price">${delivery + totalPrice}</span></div> `
            )
            $(".final-confirmation").append(
                `<div class="row justify-content-center">
                    <div class="col-sm-5">                                                                                                   
                        <button class="btn btn-success btn-block js--final-confirmation">Confirm your order</button>
                    </div>
                </div>`
            )
            });
        }
    });
    
    //Function creating create account page. 
            $("nav").on("click", ".js--create-account-button", function(){
                $('html, body').animate({scrollTop: $('.js--section-create-account').offset().top}, 1000);
                    $('.js--section-create-account').append(
                        `<div class="container-fluid">
                            <form action="php/createAccount.php" method="post" class="js--form-account">    
                                <h2 class="text-center">Create account</h2>
                                        <h4 class="text-center">Complete and confirm your details</h4>
                                        <div class="create-account-form">    
                                            <div class="row justify-content-center">
                                                <div class="col-sm-5">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        </div>
                                                        <input name="fullname" minlength="2" class="form-control" placeholder="Full name" type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="far fa-user"></i> </span>
                                                        </div>
                                                        <input name="username" minlength="2" class="form-control" placeholder="User name" type="text" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-5">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fas fa-city"></i> </span>
                                                        </div>
                                                        <input name="city" class="form-control" placeholder="City" type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fas fa-map-marked-alt"></i> </span>
                                                        </div>
                                                        <input name="street" class="form-control" placeholder="Street" type="text" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-5">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fas fa-code"></i> </span>
                                                        </div>
                                                        <input name="eircode" class="form-control" placeholder="Eircode" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="form-group">
                                                        <select name="county" class="form-control" id="county">
                                                                <option value="">County</option>
                                                                <option value="Antrim">Antrim</option>
                                                                <option value="Armagh "> Armagh</option>
                                                                <option value="Carlow "> Carlow</option>
                                                                <option value="Cavan "> Cavan</option>
                                                                <option value="Clare"> Clare</option>
                                                                <option value="Cork"> Cork</option>
                                                                <option value="Derry"> Derry</option>
                                                                <option value="Down"> Down</option>
                                                                <option value="Dublin"> Dublin</option>
                                                                <option value="Fermanagh"> Fermanagh</option>
                                                                <option value="Galway"> Galway</option>
                                                                <option value="Kerry"> Kerry</option>
                                                                <option value="Kildare"> Kildare</option>
                                                                <option value="Kilkenny"> Kilkenny</option>
                                                                <option value="Laois"> Laois</option>
                                                                <option value="Leitrim"> Leitrim</option>
                                                                <option value="Limerick"> Limerick</option>
                                                                <option value="Longford"> Longford</option>
                                                                <option value="Louth"> Louth</option>
                                                                <option value="Mayo"> Mayo</option>
                                                                <option value="Meath"> Meath</option>
                                                                <option value="Monaghan"> Monaghan</option>
                                                                <option value="Offaly"> Offaly</option>
                                                                <option value="Roscommon"> Roscommon</option>
                                                                <option value="Sligo"> Sligo</option>
                                                                <option value="Tipperary"> Tipperary</option>
                                                                <option value="Tyrone"> Tyrone</option>
                                                                <option value="Waterford"> Waterford</option>
                                                                <option value="Westmeath"> Westmeath</option>
                                                                <option value="Wexford"> Wexford</option>
                                                                <option value="Wicklow"> Wicklow</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="row justify-content-center">
                                                <div class="col-sm-5">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                                        </div>
                                                        <input name="phone" minlength="9" class="form-control" placeholder="Phone number" type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                                        </div>
                                                        <input name="email" class="form-control form-control-border" id="js--email" placeholder="E-Mail" type="email" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text input-append js--email-valid"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-5">
                                                    <span id='js--message-password'></span>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-5">    
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                        </div>
                                                        <input name="password" class="form-control" id="js--password" placeholder="Create password" type="password" required>
                                                    </div> 
                                                </div>    

                                                <div class="col-sm-5">   
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                        </div>
                                                        <input name="confirmpassword" class="form-control form-control-border" id="js--confirm-password" placeholder="Confirm password" type="password" required>                                                    
                                                        <div class="input-group-append">
                                                        <span class="input-group-text input-append js--password-match"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <h4 class="text-center header">Complete your bank details</h4>
                                            <div class="d-flex flex-row justify-content-center">
                                                <div class="col-5">
                                                    <div class="form-group input-group">
                                                            <select name="cardtype" class="form-control" style="width:45%" required>
                                                                <option selected disabled>Card type</option>
                                                                <option>Visa</option>
                                                                <option>MasterCard</option>
                                                                <option>American Express</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row justify-content-center">
                                                <div class="col-5">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                                        </div>
                                                        <input name="cardname" type="text" class="form-control" min-length="3" placeholder="Full name (on the card)" id="card-name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row justify-content-center">
                                                <div class="col-5">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="far fa-credit-card"></i></span>
                                                        </div>
                                                        <input name="cardnumber" minlength="16" type="text" class="form-control" placeholder="Card number" id="credit-card" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row justify-content-center">
                                                <div class="col-5">
                                                    <div class="form-group input-gropu">
                                                        <label><span class="hidden-xs">Expiration:</span> </label>
                                                        <div class="form-inline">
                                                            <select name="expirationmonth" class="form-control" style="width:45%" required>
                                                              <option>MM</option>
                                                              <option>01 - January</option>
                                                              <option>02 - February</option>
                                                              <option>03 - March</option>
                                                              <option>04 - April</option>
                                                              <option>05 - May</option>
                                                              <option>06 - June</option>
                                                              <option>07 - July</option>
                                                              <option>08 - August</option>
                                                              <option>09 - September</option>
                                                              <option>10 - October</option>
                                                              <option>11 - November</option>
                                                              <option>12 - December</option>
                                                            </select>
                                                            <span style="width:10%; text-align: center"> / </span>
                                                            <select name="expirationyear" class="form-control" style="width:45%" required>
                                                              <option>YY</option>
                                                              <option>2020</option>
                                                              <option>2021</option>
                                                              <option>2022</option>
                                                              <option>2023</option>
                                                              <option>2024</option>
                                                            </select>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-sm-5">                                       
                                                    <div class="form-group">                                               
                                                        <input class="btn btn-secondary btn-block js--form-account-confirm" type="submit" name="createaccount" value="Create account">
                                                    </div>     
                                                </div>
                                            </div>
                                            </form>
                                        </div>    
                    </div> `)
            });
        
    //Function monitoring if the passwords are matching while creating a new account
            $("nav").on("click", ".js--create-account-button", function(){
                $('input#js--confirm-password').on('keyup', function () {
                   if ($('input#js--password').val() == $('input#js--confirm-password').val()) {
                     $('span.js--password-match').html('Matching').css('color', 'green');
                   } else 
                     $('span.js--password-match').html('Not Matching').css('color', 'red');
                 });
                });
    //jQuery plugin checking input form in the "create account" section
    $(".js--form-account").validate();

    //Function pushing relevant purchase information to the "createOrder.php" file which is pushing data to SQL server database.
    //On success current php session end and the page is reloaded. 
    $("nav").on("click", ".js--checkout-button", function(){
        $(function(){
            $("button.js--final-confirmation").on("click", function(){
                let userName = $(".js--final-confirmation").closest('div.container-fluid').find('span.js--buyer-name').text();
                let orderFinalPrice = $(".js--final-confirmation").closest('div.container-fluid').find("span.js--final-price").text();
                let allItems=[];
                
                for (let item of shoppingCart){
                allItems += item.name + ", ";
                    }
              
                $.ajax({
                    url: "php/createOrder.php",
                    type:"GET",
                    data:{
                    buyer: userName,
                    finalPrice: orderFinalPrice,
                    items: allItems
                },
                    success : function(){
                    alert(`Thank you for your order ${userName}`);
                    <?php session_unset();?> 
                    location.reload();
                    
                 },
                    error : function(){
                    alert("Unsuccessful");
                }
                });
              
        });
    });    
    });

    //Helper functions creating http request to the "autoComplete.php" file 
    //query parameter represents SQL query
    //targetElement represents html tag which will be on success populated
    //phpFunctionCalled parameter represents the key which will call a function in the "autoComplete.php" file
    function getRequest(query, targetElement, phpFunctionCalled){
        if (query == "") {
        document.querySelector(targetElement).innerHTML = "";
        return;
            }else{
                var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.querySelector(targetElement).innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET","php/autoComplete.php?q=" + query + "&function=" + phpFunctionCalled,true);
          xmlhttp.send();
        }
    }
 
   
    
</script>

    