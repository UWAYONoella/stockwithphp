<?php
$con = mysqli_connect('localhost', 'root', '', 'stock');

if(!$con){
    echo "Database not connected";
}


if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sel = "SELECT * FROM users WHERE email='$email' AND pasword='$password'";
    $result = mysqli_query($con,$sel);
    if($result->num_rows>0){
        header("Location:dashbord.php");
    }


}




?>
