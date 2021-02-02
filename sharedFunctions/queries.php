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

 function createOrder($connection, $total_price, $user_id){
    $order_id = null;
    $query = "INSERT INTO orders (user_id, total_price)";
    $query .="VALUES ('$user_id', '$total_price')";

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
};

function attachPaymentToOrder($connection, $order_id, $user_id, $paymentMethod, $totalPrice){
    $query = "INSERT INTO payments ( user_id, order_id, card_type, exp_date, card_ending, total_price)";
    $query.="VALUES ('$user_id', '$order_id', '$paymentMethod->card_type', '$paymentMethod->card_expiration_date', '$paymentMethod->card_number', $totalPrice)";
    $result = mysqli_query($connection, $query); 
    if(!$result){
        die('Query FAILED' . mysqli_error($connection));
    }
};

function  createUnregisteredUser($connection, $user){
 $query = "INSERT INTO users (full_name, city, street, eircode, county, phone, email, registered)";
 $query .= "VALUES ('$user->fullname', '$user->city', '$user->street' , '$user->eircode' , '$user->county' , '$user->phone_number' , '$user->email', '0')";
 $result = mysqli_query($connection, $query);
 if(!$result){
     die('Query FAILED' . mysqli_error($connection));
 }

 $user_id = $connection->insert_id;
    
    return $user_id; 
}

?>