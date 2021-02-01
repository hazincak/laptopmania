<?php
if (!isset($_SESSION)){
  session_start();
}

 include "includes/header.php";   
 include "includes/navbar.php"; 
 include "includes/connectDb.php";

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

<div class="container-fluid">
        <h2 class="text-center">Order details.</h2>
        <div class="summary-personal details-details">
        <hr>
        <h5 class='font-weight-bold text-left'>Personal details</h5>
        <hr>
        <div class="summary-personal js-summary-personal">
            <div class="row">
              <div class="col-md-6">
              	<div><b>Full name:&nbsp;&nbsp;</b><?php echo $session_fullname?></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>User name:&nbsp;&nbsp;</b><span class="js--buyer-name"><?php $session_username?></span></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>City:&nbsp;&nbsp;</b><?php echo $session_city?></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>Street:&nbsp;&nbsp;</b><?php echo $session_street?></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>Eircode:&nbsp;&nbsp;</b><?php echo $session_eircode?></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>County:&nbsp;&nbsp;</b><?php echo $session_county?></div>
              </div>
            </div>
            <hr>
            <h5 class='font-weight-bold text-left'>Contact details</h5>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div><b>Phone number:&nbsp;&nbsp;</b><?php echo $session_phone?></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>E-mail address:&nbsp;&nbsp;</b><?php echo $session_email?></div>
              </div>
            </div>
            <hr>
            <h5 class='font-weight-bold text-left'>Payment details</h5>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div><b>Card type:&nbsp;&nbsp;</b><?php echo $session_cardtype?></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>Card number:&nbsp;&nbsp;</b><?php echo $session_cardnumber?></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div><b>Card expiration date:&nbsp;&nbsp;</b><?php echo $session_expdate?></div>
              </div>
            </div>
            <hr>
            <h5 class='font-weight-bold text-left'>Shopping cart</h5>
            <hr>
        </div>
                </div>
                <div class="summary-products">
                </div>
                <div class="total-price">
                </div>
                <div class="row justify-content-center">
                  <div class="col-md-6">                                                                                                   
                    <button class="btn btn-success btn-block js--final-confirmation">Confirm your order</button>
                  </div>
                </div>
            </div>
</div>   

<?php include "includes/footer.php"; ?>

<script>

$(function(){
  const cart = JSON.parse(localStorage.getItem('cart'));
  const totalPrice = JSON.parse(localStorage.getItem('totalPrice'));
  const delivery = 3.00;
  for(let item of cart){
    $('.summary-products').append(
           `<div class="summary-item"> 
             <div class="d-flex flex-fill flex-row align-items-center justify-content-around">
               <div class='p-2'><b>${item.item_name}</b></div>
               <img src='img/laptops/${item.item_name}.jpg' class='laptop-img-summary'>
               <div class='d-flex flex-column'>
               <div class='p-2'><h4 class='js--laptop-price'>€${item.item_price}</div>
             </div>
           </div><br>`
    )}

     $(".total-price").append(
         `<hr>
         <div class ="d-flex flex-row justify-content-start"><b>Delivery:&nbsp;</b>€${delivery}</div>
         <div class ="d-flex flex-row justify-content-start"><b>Price with VAT:&nbsp;</b>€${toFixed(totalPrice,2)}</div>    
         <div class ="d-flex flex-row justify-content-start"><b>TotalPrice:&nbsp;</b>€<span class="js--final-price">${delivery + totalPrice}</span></div> `
     )

})
</script>



