<?php 
include "../includes/header.php";   
include "../includes/connectDb.php";
include "../includes/spinner.php";
?> 
<div class="container">

        <h2 class="text-center p-5">Complete your details to finish the order</h2>
        
        <div class="row">
            <div class="col-md-5">
            <h4 class="text-center header">Complete your personal details</h4>
                   <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                      </div>
                      <input name="fullname" minlength="2" class="form-control" placeholder="Full name" type="text" required>
                  </div>
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fas fa-city"></i> </span>
                      </div>
                      <input name="city" class="form-control" placeholder="City" type="text" required>
                  </div>
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fas fa-map-marked-alt"></i> </span>
                      </div>
                      <input name="street" class="form-control" placeholder="Street" type="text" required>
                  </div>
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fas fa-code"></i> </span>
                      </div>
                      <input name="eircode" class="form-control" placeholder="Eircode" type="text">
                  </div>
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
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                      </div>
                      <input name="phone" minlength="9" class="form-control" placeholder="Phone number" type="text" required>
                  </div>
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control form-control-border" id="js--email" placeholder="E-Mail" type="email" required>
                    <div class="input-group-append">
                          <span class="input-group-text input-append js--email-valid"></span>
                      </div>
                  </div>
                  <hr>
                  <h4 class="text-center header">Complete your bank details</h4>
                  <div class="form-group input-group">
                          <select name="cardtype" class="form-control" style="width:45%" required>
                              <option selected disabled>Card type</option>
                              <option>Visa</option>
                              <option>MasterCard</option>
                              <option>American Express</option>
                          </select>
                  </div>
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-user"></i></span>
                      </div>
                      <input name="cardname" type="text" class="form-control" min-length="3" placeholder="Full name (on the card)" id="card-name" required>
                  </div>
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-credit-card"></i></span>
                      </div>
                      <input name="cardnumber" minlength="16" type="text" class="form-control" placeholder="Card number" id="credit-card" required>
                  </div>
                  <div class="form-group">
                      <label><span class="hidden-xs">Expiration:</span> </label>
                      <div class="form-inline">
                          <select name="expirationmonth" class="form-control" style="width:45%"  required>
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
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                          </select>
                      </div> 
                  </div>
            </div>
            <div class="col-md-7">
            <h4 class="text-center header">Order summary</h4>
                <div class="js--summary-products mt-5">
                </div>
                <div class="total-price">
                </div>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">                                       
                <div class="form-group">                                               
                    <button class="btn btn-secondary btn-block js--confirm-details-and-order">Confirm your details and place the order</button>
                </div>     
            </div>
        </div>
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
               <div class='p-2'><h4 class='js--laptop-price'>€${toFixed(item.item_price, 2)}</div>
             </div>
           </div><br>`
    )}

     $(".total-price").append(
         `<hr>
         <div class ="d-flex flex-row justify-content-start"><b>Delivery:&nbsp;</b>€${delivery}</div>
         <div class ="d-flex flex-row justify-content-start"><b>Price with VAT:&nbsp;</b>€${toFixed(totalPrice, 2)}</div>    
         <div class ="d-flex flex-row justify-content-start"><b>TotalPrice:&nbsp;</b>€<span class="js--final-price">${toFixed(delivery + totalPrice, 2)}</span></div> `
     )

})

$('.js--confirm-details-and-order').click(function(){
    $('#overlay').fadeIn();
    const fullname = $('input[name=fullname]').val();
    const city = $('input[name=city]').val();
    const street = $('input[name=street]').val();
    const eircode = $('input[name=eircode]').val();
    const county = $('select[name=county]').val();
    const phone = $('input[name=phone]').val();
    const email = $('input[name=email]').val();
    

    const card_type = $('select[name=cardtype]').val();
    const card_name = $('input[name=cardname]').val();
    const card_number = $('input[name=cardnumber]').val();
    const card_expiration_month = $('select[name=expirationmonth]').val();
    const card_expiration_year = $('select[name=expirationyear]').val();

    const products = JSON.parse(localStorage.getItem('cart'));
    const totalPrice = JSON.parse(localStorage.getItem('totalPrice'));

    const user ={
    'fullname': fullname,
    'city': city,
    'street': street,
    'eircode': eircode,
    'county': county,
    'phone_number': phone,
    'email': email,
   }

   const paymentMethod = {
    'card_type': card_type,
    'card_number': card_number,
    'card_expiration_date': card_expiration_month + '/' + card_expiration_year,
   }

   createOrderAsGuest(user, paymentMethod, products, totalPrice, false);
})

function createOrderAsGuest(user, paymentMethod, products, totalPrice, registered){
    
    $.ajax({
        url: "../php/createOrder.php",
        type:"POST",
        data:{
            registered: registered,
            user: JSON.stringify(user),
            paymentMethod: JSON.stringify(paymentMethod),
            products: JSON.stringify(products),
            totalPrice: totalPrice,
            },
    
        success: function(response){    
          if(response ==='success'){
            localStorage.clear();
            $('#overlay').fadeOut();
            window.location.href = "successfulCheckout.php";
          }
         

            },
    
        error: function(){
    
            }
        });
}

</script>