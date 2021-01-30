<?php 

include "../includes/connectDb.php";
include "../sharedFunctions/vatCalculator.php";

$per_page = 4;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page="";
}

if($page == "" || $page == 1){
    $page_1 = 0;
}else{
    $page_1 = ($page * $per_page) - $per_page;
}

$q;


if(isset($_GET['option'], )){
    $option = $_GET['option'];

    switch ($option) {
        case "Business laptops":
          $q = "SELECT * FROM laptops WHERE laptop_screenSize < '15.6'";
          break;
        case "Laptops":
          $q = "SELECT * FROM laptops WHERE laptop_type = 'Laptop'";
          break;
        case "Gaming laptops":
          $q = "SELECT * FROM laptops WHERE laptop_type = 'Gaming laptop'";
          break;
        case "Macbooks":
          $q = "SELECT * FROM laptops WHERE laptop_OS = 'macOS Catalina'";
          break;
        case "Discounted laptop":
          $q = "SELECT * FROM laptops WHERE laptop_type = 'Discounted laptop'";
            break;    
        default:
          $q = "SELECT * FROM laptops";
      }

}
$products_query_count = mysqli_query($connection, $q);
$count = mysqli_num_rows($products_query_count);
$count=ceil($count  / $per_page);

$query = $q . ' LIMIT ' . $page_1 . ',' . $per_page;

$result = mysqli_query($connection, $query);
$products = array();
while($row = mysqli_fetch_assoc($result)){
    $price = $row['laptop_price'];
    $vatExcludedPrice = vatCalculator($price);
    $row['excludedVAT'] = $vatExcludedPrice;
    $products[] = $row;
        }
        $response = array();
        $response['products'] = $products;
        $response['count'] = $count;
         echo json_encode($response);


mysqli_close($connection);
?>