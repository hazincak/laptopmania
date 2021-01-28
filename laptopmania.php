
<?php 

if (!isset($_SESSION)){
  session_start();
}

 $session_logged=(isset($_SESSION['logged']))?$_SESSION['logged']: ''; 
 $session_fullname=(isset($_SESSION['fullname']))?$_SESSION['fullname']: ''; 
 $session_username=(isset($_SESSION['username']))?$_SESSION['username']: ''; 
 $session_city=(isset($_SESSION['city']))?$_SESSION['city']: ''; 
 $session_street=(isset($_SESSION['street']))?$_SESSION['street']: ''; 
 $session_eircode=(isset($_SESSION['eircode']))?$_SESSION['eircode']: ''; 
 $session_county=(isset($_SESSION['county']))?$_SESSION['county']: ''; 
 $session_phone=(isset($_SESSION['phone']))?$_SESSION['phone']: ''; 
 $session_email=(isset($_SESSION['email']))?$_SESSION['email']: ''; 
 $session_cardtype=(isset($_SESSION['cardtype']))?$_SESSION['cardtype']: ''; 
 $session_cardnumber=(isset($_SESSION['cardnumber']))?$_SESSION['cardnumber']: ''; 
 $session_expdate=(isset($_SESSION['expdate']))?$_SESSION['expdate']: ''; 


  include "includes/header.php";   
  include "includes/navbar.php"; 
  include "includes/connectDb.php"; 
  include "includes/spinner.php";
  include "sharedFunctions/vatCalculator.php"; ?>

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
       
    
    <!-- Shop section -->
        <?php include "includes/shopSection.php" ?>       
  
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
    <?php include "includes/footer.php"; ?>  

   
  </body>

    
</html>

<script>
    let totalPrice = document.querySelector('.js--total-price').innerText;
    totalPrice = 0;
    let shoppingCart = [];
    let totalQuantity = document.querySelectorAll('js--total-quantity').innerText;
    totalQuantity = shoppingCart.length;
    
    //JS boolean tracking if the user is logged in. The JS value has been created for efficient DOM manipulation
    let logged = '<?php echo json_encode($session_logged);?>';
    //JS variable storing the response from the "loginUser.php" file
    let loggedIn = false;

    //Funcion manipulating DOM After logging in and logging out
        $(function(){
            if(logged == "true"){
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


        //Changes the colors of the shop buttons on click
        $('#business-laptops, #laptops, #gaming-laptops, #macbooks, #discount').click(function() {
            $('#business-laptops, #laptops, #gaming-laptops, #macbooks, #discount').removeClass("active");
            $(this).addClass("active");
        });

        
    
    //jQuery animations on scroll
        // $('.js--title-shop-button').click(function(){
        // $('html, body').animate({scrollTop: $('.js--section-shop').offset().top}, 1000);
        // getRequest("SELECT * FROM laptops","#item-capsule","shopAutocomplete");
        // });
        // $('.js--title-review-button').click(function(){
        // $('html, body').animate({scrollTop: $('.js--section-review').offset().top}, 1000);
        // });
        // $('.js--section-shop').waypoint(function(direction){
        // if(direction == "down"){
        //     getRequest("SELECT * FROM laptops","#item-capsule","shopAutocomplete");
        // }
        // });
        // $('.js--section-discount').waypoint(function(direction){
        // if(direction == "down"){
        //     $('nav').addClass('sticky');
        // }else{
        //     $('nav').removeClass('sticky');
        //     }
        //     }, {
        //     offset: '80px'
        // });
    


    
    
    //Populates dropdown shopping cart on the "add to cart" button
    //Increasing shoppings cart total price and a badge value representing number of items in the shopping cart
        $("#item-capsule").on("click", ".js--add-cart", function() {
        let laptopName = ($(this).closest('span').find('.js--laptop-name').text());
        let laptopPrice = ($(this).closest('span').find(".js--laptop-price").text());
        let slicedLaptopPrice = parseFloat(laptopPrice.substring(1));
        totalPrice += slicedLaptopPrice;
        $('.js--total-price').text(`€${totalPrice.toFixed(2)}`);
        
        shoppingCart.push({name: laptopName, price: slicedLaptopPrice});
        totalQuantity = shoppingCart.length;
        addToPersistentBasket(shoppingCart);
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
                totalQuantity = shoppingCart.length;
                $('.js--total-quantity').text(totalQuantity);

                $(this).closest('.js--shopping-cart-pill').remove();
        });

  
    
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

    function addToPersistentBasket(shoppingCart){
          localStorage.setItem('cart', JSON.stringify(shoppingCart))
        }
</script>

    