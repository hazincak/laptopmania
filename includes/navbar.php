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
                    <i class="fas fa-user"></i>&nbsp;<span class="js--account"><?php echo (isset($_SESSION['username']))?$_SESSION['username'] : 'My Account'?></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <form action="php/loginUser.php" method="post">
                      <input type="text" name="login-username" class="form-control js--login-username <?php echo (!empty($_SESSION['login_err'])) ? 'is-invalid' : ''; ?>" placeholder="Username">
                      <div class="dropdown-divider"></div>
                      <input type="password" name="login-password" class="form-control js--login-password <?php echo (!empty($_SESSION['login_err'])) ? 'is-invalid' : ''; ?>" placeholder="Password">
                      <span class='invalid-feedback'><?php echo $_SESSION['login_err'] ?></span>
                      <div class="dropdown-divider"></div>
                      <?php 
                        if(!isset($_SESSION['username'])){
                          echo '<input class="btn btn-secondary btn-block js--login-account-button" type="submit" name="logintoaccount" value="Login">';
                        } ?>
                    </form>
                    <?php 
                      if(isset($_SESSION['username'])){
                        echo "<a href ='php/logout.php'><button class='btn btn-danger btn-block js--logout-account-button'><i class='fa fa-fw fa-power-off'></i> Log Out</button></a>";
                      }
                    ?> 
                    <div class="dropdown-divider"></div>
                    <a href="pages/register.php"><button class="btn btn-outline-light btn-block js--create-account-button">Create account</button></a> 
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
                    
                       <a type="button" class="btn btn-success btn-block  js--checkout-button" id="js--checkout-link" href=<?php echo (isset($_SESSION['username']) ? "pages/checkoutRegistered.php" : "pages/checkoutGuest.php") ?>>Check out<i class="far fa-credit-card"></i></a>
                    </div>
                  </div>
                </li>
        </ul>
    </div>
</nav>

