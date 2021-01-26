
<?php include "../includes/connectDb.php";

if(isset($_GET['q'], $_GET['function'])) 
{
      $q = $_GET['q'];
      $functionCalled = $_GET['function'];
      
}

$excludedVat = 0.77;

if($functionCalled == "randomCarouselItem"){
    randomCarouselItem();
}else if ($functionCalled == "shopAutocomplete"){
    shopAutocomplete();
}else {
    echo "not working";
}

function vatCalculator($excludedVat, float $price){
    $priceResult = $price * $excludedVat;
    return number_format((float)$priceResult, 2, '.', '');
}

function randomCarouselItem(){
    
    global $connection;
    global $excludedVat;
    $arrayIndex = 0;
    $itemsArray[] = array(); 
    $sql = "SELECT laptop_name, laptop_price, old_price FROM laptops WHERE laptop_type = 'Discounted laptop'";
    $result = mysqli_query($connection,$sql);
    
//     while($row = mysqli_fetch_assoc ($result)){
//         $itemsArray[$arrayIndex] = $row;
//         $arrayIndex++;
//         }

//         $randomArrayIndex = rand(0,count($itemsArray)-1); 
//         $randomItem = $itemsArray[$randomArrayIndex];
//         $vatExcludedPrice = vatCalculator($randomItem['laptop_price'], $excludedVat);
    
//     echo "
    // <h1 class='display-4'>SUMMER OFFER</h1>
    //     <p class='lead'>Pick up your electronical companion for discounted price.</p>
    //         <span class='d-block p-2'> 
    //           <h4><b>". $randomItem['laptop_name'] ."</b></h4>
    //           <hr>
    //           <div class='d-inline-flex flex-row justify-content-around '>
    //           <div class='p-2 align-self-start'><h3>WOW!</h3></div>
    //           <div class='p-2 align-self-center'><h3 class='old-price'>WAS: €". $randomItem['old_price'] ."</h3></div>
    //           <div class='p-2 align-self-end'><h3>NOW: €". $randomItem['laptop_price'] ."</h3></div>
    //           <img src='img/laptops/". $randomItem['laptop_name'] .".jpg' class='laptop-img-jumbotron'>
    //           </div>
    //         </span>
//    ";
}
function shopAutocomplete(){
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
    }

    
  
mysqli_close($connection);
?>
