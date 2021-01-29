<?php 

include "../includes/connectDb.php";
include "../sharedFunctions/vatCalculator.php";
// $sql = "SELECT * FROM laptops WHERE laptop_type = '$laptopType'";

if(isset($_GET['q'], )){
    $q = $_GET['q'];
    //  die($q);
}

$result = mysqli_query($connection, $q);
$products = array();
while($row = mysqli_fetch_assoc($result)){
    $price = $row['laptop_price'];
    $vatExcludedPrice = vatCalculator($price);
    $row['excludedVAT'] = $vatExcludedPrice;
    $products[] = $row;
        }
         echo json_encode($products);


mysqli_close($connection);
?>