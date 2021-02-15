
<?php 
include "../includes/header.php";   
include "../includes/connectDb.php"; 
include "../includes/spinner.php";
include "../includes/navbar.php";  

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


    $fullname = mysqli_real_escape_string($connection, $fullname);
    $username = mysqli_real_escape_string($connection, $username);
    $city = mysqli_real_escape_string($connection, $city);
    $street = mysqli_real_escape_string($connection, $street);
    $eircode = mysqli_real_escape_string($connection, $eircode);
    $county = mysqli_real_escape_string($connection, $county);
    $phone = mysqli_real_escape_string($connection, $phone);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    $confirmpassword = mysqli_real_escape_string($connection, $confirmpassword);
    $cardtype = mysqli_real_escape_string($connection, $cardtype);
    $cardnumber = mysqli_real_escape_string($connection, $cardnumber);
    $expirationmonth = mysqli_real_escape_string($connection, $expirationmonth);
    $expirationyear = mysqli_real_escape_string($connection, $expirationyear);

    $expirationdate = $expirationmonth."/".$expirationyear; 
    // $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
    $password = password_hash($password, PASSWORD_DEFAULT);
}   
   
    
   
    
    $query = "INSERT INTO users (full_name, user_name, city, street, eircode, county, phone, email, password, card_type, card_number, registered ,expiration_date)";
    $query .= "VALUES ('$fullname', '$username','$city','$street','$eircode','$county','$phone','$email','$password', '$cardtype', '$cardnumber', 1, '$expirationdate')";
    
    $result = mysqli_query($connection, $query); 

    if(!$result){
        die('Query FAILED' . mysqli_error($connection));
    
    }else{
        echo "
        <div class='container'>
            <section class = 'account-creation-section'>

                <h2 class='text-center'>Welcome to Laptopmania</h2>
                <h4 class='text-center header'>Your account has been created</h4>    
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
                    <div><b>Phone number:&nbsp;&nbsp;</b> . $phone . </div>
                    <div><b>E-mail address:&nbsp;&nbsp;</b>" . $email . "</div>
                </div>
                <div class='row justify-content-center'>
                    <div class='row-md-4'>
                        <div><a href='../laptopmania.php' class='btn btn-secondary btn-block'>Go back to our webpage</a>
                    </div>  
                </div>  
            </section>
        </div>  
        ";
    }

?>

<?php include "../includes/footer.php"; ?>

</body>
</html>