<?php include "connectDb.php"; ?>
<?php
if(isset($_GET['buyer'], $_GET['finalPrice'], $_GET['items'], )){
    $buyerName = $_GET['buyer'];
    $finalPrice = $_GET['finalPrice'];
    $orderedItems = $_GET['items']; 
    $buyerName = trim($buyerName, '"');
}
$query = "INSERT INTO orders (buyer_user_name, items, total_price)";
$query .= "VALUES ('$buyerName', '$orderedItems', '$finalPrice')";
$result = mysqli_query($connection, $query); 

if(!$result){
    die('Query FAILED' . mysqli_error());
}
?>
