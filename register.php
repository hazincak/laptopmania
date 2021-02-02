<?php
 include "includes/header.php";   
 include "includes/navbar.php"; 
 include "includes/connectDb.php";
?>

<div class= "container-fluid">
    <form action="php/createAccount.php" method="post" >    
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
          <div class="row justify-content-center">
              <div class="col-md-6">
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
          <div class="row justify-content-center">
              <div class="col-md-6">
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-user"></i></span>
                      </div>
                      <input name="cardname" type="text" class="form-control" min-length="3" placeholder="Full name (on the card)" id="card-name" required>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-md-6">
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-credit-card"></i></span>
                      </div>
                      <input name="cardnumber" minlength="16" type="text" class="form-control" placeholder="Card number" id="credit-card" required>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-md-6">
                  <div class="form-group input-gropu">
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
            </div>
    </div>
            <div class="row justify-content-center">
                <div class="col-md-6">                                       
                    <div class="form-group">                                               
                        <input class="btn btn-secondary btn-block " type="submit" name="createaccount" value="Create account">
                    </div>     
                </div>
            </div>
    </form>
</div>
<?php include "includes/footer.php" ?>     

<script>
//Function monitoring if the passwords are matching while creating a new account
$('input#js--confirm-password').on('keyup', function () {
    if ($('input#js--password').val() == $('input#js--confirm-password').val()) {
      $('span.js--password-match').html('Matching').css('color', 'green');
    } else 
      $('span.js--password-match').html('Not Matching').css('color', 'red');
});

</script>