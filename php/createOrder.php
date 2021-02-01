<?php 
    include "../includes/connectDb.php";
    include "../sharedFunctions/queries.php";
?>
<?php
 
if(isset( $_POST['paymentMethod'], $_POST['products'], $_POST['totalPrice'])){
    $paymentMethod = $_POST['paymentMethod'];
    $products = $_POST['products'];
    $totalPrice = $_POST['totalPrice'];
    $email = $_POST['email'];
    
    $decodedPaymentMethod = json_decode($paymentMethod);
    $decodedProducts = json_decode($products);
    $totalPriceAndDelivery = $totalPrice + 3;

    $user_id = getUserIdByEmail($connection, $email);
    $order_id = createOrder($connection, null, $totalPriceAndDelivery, $user_id);

    attachProductToOrder($connection, $order_id, $decodedProducts);

  
};
?>
