<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#"><i class="fas fa-laptop"></i>LaptopMania.ie</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#account" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
         <span><i class="fas fa-user navbar-icon"></i></span>
    </button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cart" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
         <span><i class="fas fa-shopping-cart navbar-icon"></i><span class="badge js--total-quantity"></span></span>
    </button>
    
    <div class="collapse navbar-collapse" id="account">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle js--my-account" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>&nbsp;<span class="js--account">My Account</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <form action="php/loginUser.php" method="post">
                      <input type="text" name="login-username" class="form-control js--login-username <?php echo (!empty($_SESSION['username_err'])) ? 'is-invalid' : ''; ?>" placeholder="Username">
                      <span class='invalid-feedback'><?php echo $_SESSION['username_err'] ?></span>
                      <div class="dropdown-divider"></div>
                      <input type="password" name="login-password" class="form-control js--login-password <?php echo (!empty($_SESSION['password_err'])) ? 'is-invalid' : ''; ?>" placeholder="Password">
                      <span class='invalid-feedback'><?php echo $_SESSION['password_err'] ?></span>
                      <div class="dropdown-divider"></div>
                      <input class="btn btn-secondary btn-block js--login-account-button" type="submit" name="logintoaccount" value="Login">
                      <div class="dropdown-divider"></div>
                    </form> 
                    <a href="register.php"><button class="btn btn-outline-light btn-block js--create-account-button">Create account</button></a> 
              </li>
        </ul>   
    </div>
    <div class="collapse navbar-collapse" id="cart">
        <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-shopping-cart">&nbsp;</i><span class="badge js--total-quantity"></span></i>Shopping cart</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="d-flex flex-row justify-content-between">
                      <div class="p-2"><i class="fa fa-shopping-cart cart-icon"></i><span class="badge js--total-quantity"></span></div>
                      <div class="p-2"><span>Total: </span><span class="js--total-price"></span></div>
                    </div>
                      <div class="js--dropdown-cart">
                      </div>  
                    <div class="d-flex flex-row">
                    <button type="button" class="btn btn-success btn-block js--checkout-button">Check out<i class="far fa-credit-card"></i></button>
                    </div>
                  </div>
                </li>
        </ul>
    </div>
</nav>

<script>
// js--total-quantity
let productsInBasket;
let productsPrice;
let cartLength;
let totalPrice;
$(document).ready(function(){
  productsInBasket = JSON.parse(localStorage.getItem('cart'));
  productsInBasket ? cartLength = productsInBasket.length : cartLength = 0;
  $('.js--total-quantity').text(`${cartLength}`)

  totalPrice = JSON.parse(localStorage.getItem('totalPrice'));
  $('.js--total-price').text(`${totalPrice ? '€' + totalPrice : '€0,00'}`)
  
  if(productsInBasket){
    for (product of productsInBasket){
        $('.js--dropdown-cart ').append(`
        <div class='d-block p-2 shopping-cart-pill js--shopping-cart-pill'>\
            <p class='font-weight-bold cart-text js--laptop-name'>${product.item_name}</p>\
            <div class='d-flex flex-fill flex-row align-items-center justify-content-around'>\
                <img src='img/laptops/${product.item_name}.jpg' class='laptop-img-cart'>\
                <div class='p-2 flex-fill'><p class='font-weight-bolder cart-text js--price '>€${product.item_price}</p></span></div>\
                <button class='btn btn-danger fa fa-close cart-item js--close-button' data-item_name="${product.item_name}" data-item_id="${product.item_id}" data-item_price="${product.item_price}"></button>\
            </div>\
          </div>
         `);
        }
  }
    })

  //Removes the item from the dropdown shopping cart on click
  //Also decreases the value which is representing the total number of the items in the dropdown shopping cart
$(".js--dropdown-cart").on("click", ".js--close-button", function() {
    item_name = $(this).data('item_name');
    item_price = $(this).data('item_price');
    itemId = $(this).data('item_id');
    console.log(item_price)
    
    //Calculating total price
    totalPrice = JSON.parse(localStorage.getItem('totalPrice')); 
    totalPrice = totalPrice - item_price;
    $('.js--total-price').text(`€${totalPrice == 0 ? '0.00' : totalPrice.toFixed(2)}`);
    localStorage.setItem('totalPrice', JSON.stringify(totalPrice));

    //Removing from local storage
     productsInBasket = JSON.parse(localStorage.getItem('cart'));
    let removeIndex = productsInBasket.map(item => item.item_id).indexOf(itemId);
    productsInBasket.splice(removeIndex, 1);
    localStorage.setItem('cart', JSON.stringify(productsInBasket));
    
    //Removing from DOM
    $(this).closest('.js--shopping-cart-pill').remove();

    //Updating amount of the items in basket
    cartLength = productsInBasket.length;
    $('.js--total-quantity').html(cartLength)
   });
</script>

