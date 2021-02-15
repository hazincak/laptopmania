<?php session_start();?>
<?php include "../includes/connectDb.php";?>

<?php   
// header('Content-Type: application/json');
    if(isset($_POST['logintoaccount'])){
        $_SESSION['logged'] = false;

        $loginUsername = $_POST['login-username'];
        $loginPassword = $_POST['login-password'];
        
        $cleanLoginUsername = mysqli_real_escape_string($connection, $loginUsername);
        $cleanLoginPassword = mysqli_real_escape_string($connection, $loginPassword);

        

        $query = "SELECT * FROM users WHERE user_name = '{$cleanLoginUsername}' AND registered = true";
        $result = mysqli_query($connection, $query);
            if(!$result){
                die('Query FAILED' . mysqli_error($connection));
            }

            while($row = mysqli_fetch_array($result)){            
                $db_user_id = $row['user_id'];
                $db_full_name = $row['full_name'];
                $db_user_name = $row['user_name'];
                $db_city = $row['city'];
                $db_street = $row['street'];
                $db_eircode = $row['eircode'];
                $db_county = $row['county'];
                $db_phone = $row['phone'];
                $db_email = $row['email'];
                $db_user_password = $row['password'];
                $db_card_type = $row['card_type'];
                $db_card_number = $row['card_number'];
                $db_expiration_date = $row['expiration_date'];
            }

        if($cleanLoginUsername !== $db_user_name || !password_verify($cleanLoginPassword, $db_user_password)){
            header("Location: ../laptopmania.php");
            $_SESSION['logged'] = false;
            $_SESSION['login_err'] = 'Invalid password or username';
            
        }else if ($cleanLoginUsername == $db_user_name && password_verify($cleanLoginPassword, $db_user_password)){
            header("Location: ../laptopmania.php");
            
            $_SESSION['userid'] = $db_user_id;
            $_SESSION['fullname'] = $db_full_name;
            $_SESSION['username'] = $db_user_name;
            $_SESSION['city'] = $db_city;
            $_SESSION['street'] = $db_street;
            $_SESSION['eircode'] = $db_eircode;
            $_SESSION['county'] = $db_county;
            $_SESSION['phone'] = $db_phone;
            $_SESSION['email'] = $db_email;
            $_SESSION['password'] = $db_user_password;
            $_SESSION['cardtype'] = $db_card_type;
            $_SESSION['cardnumber'] = $db_card_number;
            $_SESSION['expdate'] = $db_expiration_date;
            
            $_SESSION['login_err'] = '';
            
            $_SESSION['logged'] = true;

            
        } else{
            header("Location: ../laptopmania.php");
            $_SESSION['logged'] = false;      
        }
    }
    
?>
</html>




