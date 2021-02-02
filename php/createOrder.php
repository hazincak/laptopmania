<?php 
    include "../includes/connectDb.php";
    include "../sharedFunctions/queries.php";
?>
<?php
 
if(isset( $_POST['paymentMethod'], $_POST['products'], $_POST['totalPrice'], $_POST['registered'])){
    $registered = $_POST['registered'];
    
    $paymentMethod = $_POST['paymentMethod'];
    $products = $_POST['products'];
    $totalPrice = $_POST['totalPrice'];
    
    $decodedPaymentMethod = json_decode($paymentMethod);
    $decodedProducts = json_decode($products);
    $totalPriceAndDelivery = $totalPrice + 3;
   
    if($registered === 'true'){        
    
        $email = $_POST['email'];
        $user_id = getUserIdByEmail($connection, $email);
        $order_id = createOrder($connection, $totalPriceAndDelivery, $user_id);

        attachProductToOrder($connection, $order_id, $decodedProducts);
        attachPaymentToOrder ($connection, $order_id, $user_id, $decodedPaymentMethod, $totalPrice);
    } else if($registered === 'false'){
        $user = $_POST['user']; 
        $decodedUser = json_decode($user);
        $decodedProducts = json_decode($products);
        
        $user_id = createUnregisteredUser($connection, $decodedUser);
        $order_id = createOrder($connection, $totalPriceAndDelivery, $user_id);
        attachProductToOrder($connection, $order_id, $decodedProducts);
        attachPaymentToOrder ($connection, $order_id, $user_id, $decodedPaymentMethod, $totalPrice);
       
    }
    
};
?>
