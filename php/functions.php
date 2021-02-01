<?php



function getUserIdByEmail ($email){
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


?>