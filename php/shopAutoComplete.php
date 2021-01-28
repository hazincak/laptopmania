
<?php 

include "../includes/connectDb.php";
include "../sharedFunctions/vatCalculator.php";

if(isset($_GET['q'])) 
{
      $q = $_GET['q']; 
}
    global $q;
    global $connection;
    global $excludedVat;
    $sql = $q;
    $result = mysqli_query($connection,$sql);
    global $target;

while($row = mysqli_fetch_array($result)){
    $price = $row['laptop_price'];
    $vatExcludedPrice = vatCalculator($price, $excludedVat);
    
    if($row['laptop_type'] == "Discounted laptop"){
  
        echo "<span class='d-block p-2'> <h5 class='js--laptop-name'><b>" . $row['laptop_name'] . "</b></h5>
        <hr>
    <div class='d-flex flex-row align-items-center justify-content-around'>
            <div class='p-2'><b>Screen size: </b>&nbsp" . $row['laptop_screenSize'] . "<br><b>Processor: </b>&nbsp" . $row['laptop_CPU'] . "<br><b>RAM: </b>&nbsp" . $row['laptop_RAM'] . "<br><b>Storage: </b>&nbsp" . $row['laptop_storage'] . "<br><b>Graphic card: </b>&nbsp" . $row['laptop_graphicsCard'] . "</div>
            <img src='img/laptops/". $row['laptop_name'] .".jpg' class='laptop-img-shop'>
            <div class='d-flex flex-column'>
            <div class='p-2 align-items-start'><h5 class='old-price'>€". $row['old_price'] ."</h5><h4 class='js--laptop-price'>€". $row['laptop_price'] ."</h4><p class='text-muted js--vat-price'>€" . $vatExcludedPrice . " excl. VAT</p></div>
            <div class='p-2'><button class='btn btn-dark js--add-cart' href='#'>Add to cart  <i class='fas fa-cart-arrow-down'></i></button></div>
            </div>
    </div>
    </span>";

    }else{
        echo "<span class='d-block p-2'> <h5 class='js--laptop-name'><b>" . $row['laptop_name'] . "</b></h5>
        <hr>
        <div class='d-flex flex-row align-items-center justify-content-around'>
                <div class='p-2'><b>Screen size: </b>&nbsp" . $row['laptop_screenSize'] . "<br><b>Processor: </b>&nbsp" . $row['laptop_CPU'] . "<br><b>RAM: </b>&nbsp" . $row['laptop_RAM'] . "<br><b>Storage: </b>&nbsp" . $row['laptop_storage'] . "<br><b>Graphic card: </b>&nbsp" . $row['laptop_graphicsCard'] . "</div>
                <img src='img/laptops/". $row['laptop_name'] .".jpg' class='laptop-img-shop'>
                <div class='d-flex flex-column'>
                <div class='p-2 align-items-start'><h4 class='js--laptop-price'>€". $row['laptop_price'] ."</h4><p class='text-muted js--vat-price'>€" . $vatExcludedPrice . " excl. VAT</p></div>
                <div class='p-2'><button class='btn btn-dark js--add-cart'  href='#'>Add to cart  <i class='fas fa-cart-arrow-down'></i></button></div>
                </div>
        </div>
        </span>";
             }
        }
mysqli_close($connection);
?>
