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
        <h5 class='font-weight-bold text-left'>Personal details</h5>
        <div class="summary-personal js-summary-personal">
            <div class="d-flex flex-row justify-content-center">
              <div class="col-5">
              	<div><b>Full name:&nbsp;&nbsp;</b><?php echo json_encode($session_fullname);?></div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center">
              <div class="col-5">
                <div><b>User name:&nbsp;&nbsp;</b><span class="js--buyer-name"><?php echo json_encode($session_username);?></span></div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center">
              <div class="col-5">
                <div><b>City:&nbsp;&nbsp;</b><?php echo json_encode($session_city);?></div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center">
              <div class="col-5">
                <div><b>Street:&nbsp;&nbsp;</b><?php echo json_encode($session_street);?></div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center">
              <div class="col-5">
                <div><b>Eircode:&nbsp;&nbsp;</b><?php echo json_encode($session_eircode);?></div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center">
              <div class="col-5">
                <div><b>County:&nbsp;&nbsp;</b><?php echo json_encode($session_county);?></div>
              </div>
            </div>
            <hr>
            <h5 class='font-weight-bold text-left'>Contact details</h5>
            <hr>
            <div class="d-flex flex-row justify-content-center">
              <div class="col-5">
                <div><b>Phone number:&nbsp;&nbsp;</b><?php echo json_encode($session_phone);?></div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center">
              <div class="col-5">
                <div><b>E-mail address:&nbsp;&nbsp;</b><?php echo json_encode($session_email);?></div>
              </div>
            </div>
            <hr>
            <h5 class='font-weight-bold text-left'>Payment details</h5>
            <hr>
            <div class="d-flex flex-row justify-content-center">
              <div class="col-5">
                <div><b>Card type:&nbsp;&nbsp;</b><?php echo json_encode($session_cardtype);?></div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center">
              <div class="col-5">
                <div><b>Card number:&nbsp;&nbsp;</b><?php echo json_encode($session_cardnumber);?></div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center">
              <div class="col-5">
                <div><b>Card expiration date:&nbsp;&nbsp;</b><?php echo json_encode($session_expdate);?></div>
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
                <div class="final-confirmation">
                </div>
            </div>
</div>   



<!-- //Function which is called on click and fully executed just when the user is logged in and the shopping cart is not empty
    //Function creates a order summary page where the user can check his details he provided while registering in
    //Function iterates over javascript array object "shoppingCart" and prints all items stored in this object. 
    //Function calculates and displays total value and sending all these information to the SQL server (on button click)
            )
        //     $(function(){
        //       let totalPrice = 0;
        //       let delivery = 10;
        //       for (let item of shoppingCart){
        //         totalPrice += item.price;
        //         $('.summary-products').append(
        //           `<div class="summary-item"> 
        //             <div class="d-flex flex-fill flex-row align-items-center justify-content-around">
        //               <div class='p-2'><b>${item.name}</b></div>
        //               <img src='img/laptops/${item.name}.jpg' class='laptop-img-summary'>
        //               <div class='d-flex flex-column'>
        //               <div class='p-2'><h4 class='js--laptop-price'>€${item.price}</div>
        //             </div>
        //           </div><br>`
        //         )
        //       };
        //       $(".total-price").append(
        //         `<hr>
        //         <div class ="d-flex flex-row justify-content-end"><b>Delivery:&nbsp;</b>€${delivery}</div>
        //         <div class ="d-flex flex-row justify-content-end"><b>Price with VAT:&nbsp;</b>€${totalPrice.toFixed(2)}</div>    
        //         <div class ="d-flex flex-row justify-content-end"><b>TotalPrice:&nbsp;</b>€<span class="js--final-price">${delivery + totalPrice}</span></div> `
        //     )
        //     $(".final-confirmation").append(
        //         `<div class="row justify-content-center">
        //             <div class="col-sm-5">                                                                                                   
        //                 <button class="btn btn-success btn-block js--final-confirmation">Confirm your order</button>
        //             </div>
        //         </div>`
        //     )
        //     });
        // } -->