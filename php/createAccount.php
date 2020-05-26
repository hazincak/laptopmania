<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="../css/styles.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="../css/queries.css?v=<?php echo time(); ?>">
</head>
<body>
<?php include "connectDb.php";
    
if(isset($_POST['createaccount'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $eircode = $_POST['eircode'];
    $county = $_POST['county'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $confirmpassword = $_POST['confirmpassword'];
    $cardtype = $_POST['cardtype'];
    $cardnumber = $_POST['cardnumber'];
    $expirationmonth = $_POST['expirationmonth'];
    $expirationyear = $_POST['expirationyear'];
}   
    $expirationdate = $expirationmonth."-".$expirationyear; 
    
    $query = "INSERT INTO users (full_name,user_name,city,street,eircode,county,phone,email,password,card_type,card_number,expiration_date)";
    $query .= "VALUES ('$fullname', '$username','$city','$street','$eircode','$county','$phone','$email','$password', '$cardtype', '$cardnumber', '$expirationdate')";
    
    $result = mysqli_query($connection, $query); 

    if(!$result){
       
        echo "
        <section class = 'account-creation'>
            <div class='container-fluid'>
                <h2 class='text-center'>Ooops, something went wrong.</h2>
                <h4 class='text-center header'>User with username:&nbsp;</b>" .  $username ."&nbsp;already exists.</h4>
                <h4 class='text-center header'>Please finish your registration with different username.</h4>
                <div class='row justify-content-center'>
                    <div class='row-md-4'>
                    <div><a href='../laptopmania.php' class='btn btn-secondary btn-block'>Go back to our webpage</a>
                    </div>  
                </div> 
            </div> 
                ";
    }else{
        echo "
        <section class = 'account-creation'>
    
    <h2 class='text-center'>Welcome to Laptopmania</h2>
    <h4 class='text-center header'>Your account has been created</h4>
    <div class='container-fluid'>
        <hr>
        <h5 class='font-weight-bold text-left js--laptop-name'>Personal details</h5>
        <hr>
        <div class='d-flex flex-column justify-content-center'>
            <div><b>Full name:&nbsp;&nbsp;</b>". $fullname ."</div>
            <div><b>User name:&nbsp;&nbsp;</b>". $username ."</div>
            <div><b>City:&nbsp;&nbsp;</b>". $city ."</div>
            <div><b>Street:&nbsp;&nbsp;</b>". $street ."</div>
            <div><b>Eircode:&nbsp;&nbsp;</b>". $eircode ."</div>
            <div><b>County:&nbsp;&nbsp;</b>". $county ."</div>
        </div>
        <hr>
        <h5 class='font-weight-bold'>Contact details</h5>
        <hr>
        <div class='d-flex flex-column justify-content-center'>
            <div><b>Phone number:&nbsp;&nbsp;</b>" . $phone . "</div>
            <div><b>E-mail address:&nbsp;&nbsp;</b>" . $email . "</div>
        </div>
        <div class='row justify-content-center'>
            <div class='row-md-4'>
                <div><a href='../laptopmania.php' class='btn btn-secondary btn-block'>Go back to our webpage</a>
            </div>  
        </div>  
</div>   
</section>
        ";
    }

?>



</body>
</html>