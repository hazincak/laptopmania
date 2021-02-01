<?php

include "../includes/connectDb.php";

function getUserIdByEmail ($connection, $email){
    $id = null;
    $query = "SELECT user_id FROM users WHERE email = '$email';";
    $result = mysqli_query($connection, $query); 
     if(!$result){
        die('Query FAILED' . mysqli_error($connection));
     }
     while($row = mysqli_fetch_assoc($result)){
       $id = $row['user_id'];
     };
     
     return $id;
 };

 function createOrder($connection, $customer_id, $total_price, $user_id){
    $order_id = null;
    $query = "INSERT INTO orders (user_id, customer_id, total_price)";
    $query .="VALUES ('$user_id', '$customer_id', '$total_price')";

    $result = mysqli_query($connection, $query); 
    if(!$result){
             die('Query FAILED' . mysqli_error($connection));
         }
    
    $order_id = $connection->insert_id;
    
    return $order_id;
          
};

function attachProductToOrder($connection, $order_id, $products){
    foreach($products as $product){
      
        $query = "INSERT INTO orderproducts (order_id, product_id)";
        $query .= "VALUES ('$order_id', '$product->item_id')";
        $result = mysqli_query($connection, $query); 
        if(!$result){
            die('Query FAILED' . mysqli_error($connection));
        }
     }
    

}

?>