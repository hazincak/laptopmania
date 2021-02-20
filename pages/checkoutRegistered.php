<?php
if (!isset($_SESSION)){
  session_start();
}

include "../includes/header.php";   
include "../includes/connectDb.php";
include "../includes/spinner.php";

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
?>

<div class="container">
        <h2 class="text-center">Order details.</h2>
        <hr>
        <h5 class='font-weight-bold text-left'>Personal details</h5>
        <hr>
        <div>
            <div class="row">
              <div class="col-md-6">
              	<div><b>Full name:&nbsp;&nbsp;</b><span id="fullname"><?php echo $session_fullname?></span></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>User name:&nbsp;&nbsp;</b><span id="username"><?php echo $session_username?></span></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>City:&nbsp;&nbsp;</b><span id="city"><?php echo $session_city?></span></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>Street:&nbsp;&nbsp;</b><span id="street"><?php echo $session_street?></span></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>Eircode:&nbsp;&nbsp;</b><span id="eircode"><?php echo $session_eircode?></scpan></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>County:&nbsp;&nbsp;</b><span id="county"><?php echo $session_county?></span></div>
              </div>
            </div>
            <hr>
            <h5 class='font-weight-bold text-left'>Contact details</h5>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div><b>Phone number:&nbsp;&nbsp;</b><span id="phone_number"><?php echo $session_phone?></span></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>E-mail address:&nbsp;&nbsp;</b><span id="email"><?php echo $session_email?></span></div>
              </div>
            </div>
            <hr>
            <h5 class='font-weight-bold text-left'>Payment details</h5>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div><b>Card type:&nbsp;&nbsp;</b><span id="card_type"><?php echo $session_cardtype?></span></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>Card number:&nbsp;&nbsp;</b><span id="card_number"><?php echo $session_cardnumber?></span></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>Card expiration date:&nbsp;&nbsp;</b><span id="exp_date"><?php echo $session_expdate?></span></div>
              </div>
            </div>
            <hr>
            <h5 class='font-weight-bold text-left'>Shopping cart</h5>
            <hr>
        
               
                <div class="js--summary-products">
                </div>
                <div class="total-price">
                </div>
                <div class="row justify-content-center">
                  <div class="col-md-8">                                                                                                   
                    <button class="btn btn-success btn-block js--order-confirmation" >Confirm your order</button>
                  </div>
                </div>
          </form>
        </div>
<!-- container    -->
</div>
<?php include "../includes/footer.php"; ?>

<script>

$(function(){
  const cart = JSON.parse(localStorage.getItem('cart'));
  const totalPrice = JSON.parse(localStorage.getItem('totalPrice'));
  const delivery = 3.00;
  for(let item of cart){
    $('.js--summary-products').append(
           `<div class="item-capsule"> 
             <div class="d-flex flex-fill flex-row align-items-center justify-content-around">
               <div class='p-2'><b>${item.item_name}</b></div>
               <img src='../img/laptops/${item.item_name}.jpg' class='laptop-img-summary'>
               <div class='d-flex flex-column'>
               <div class='p-2'><h4 class='js--laptop-price'>€${item.item_price}</div>
             </div>
           </div><br>`
    )}

     $(".total-price").append(
         `<hr>
         <div class ="d-flex flex-row justify-content-start"><b>Delivery:&nbsp;</b>€${delivery}</div>
         <div class ="d-flex flex-row justify-content-start"><b>Price with VAT:&nbsp;</b>€${toFixed(totalPrice,2)}</div>    
         <div class ="d-flex flex-row justify-content-start"><b>TotalPrice:&nbsp;</b>€<span class="js--final-price">${delivery + totalPrice}</span></div> 
         <hr>`
        )
})
$('.js--order-confirmation').click(function(){
  $('#overlay').fadeIn();
  const fullname = $('#fullname').text();
  const username = $('#username').text();
  const city = $('#city').text();
  const street = $('#street').text();
  const eircode = $('#eircode').text();
  const county = $('#county').text();
  const phone_number = $('#phone_number').text();
  const email = $('#email').text();

  const card_type = $('#card_type').text();
  const card_number = $('#card_number').text().substr(length -5);
  const card_expiration_date = $('#exp_date').text();
  

  const paymentMethod = {
    'card_type': card_type,
    'card_number': card_number,
    'card_expiration_date': card_expiration_date
  }

  const products = JSON.parse(localStorage.getItem('cart'));
  const totalPrice = JSON.parse(localStorage.getItem('totalPrice'));

  createOrderAsRegistered(email, paymentMethod, products, totalPrice, true);
})

function createOrderAsRegistered(email, paymentMethod, products, totalPrice, registered){
  $.ajax({
        url: "../php/createOrder.php",
        type:"POST",
        data:{
            registered: registered,
            email: email,
            paymentMethod: JSON.stringify(paymentMethod),
            products: JSON.stringify(products),
            totalPrice: totalPrice,
            },
    
        success: function(response){    
              if(response == 'success'){
                console.log('here')
                localStorage.clear();
                // checkBasketState();
                $('#overlay').fadeOut();
                window.location.href = "successfulCheckout.php";
              }
            },
    
        error: function(){
        
            }
        });
}
</script>



