<?php
$con = mysqli_connect('localhost', 'root', '', 'stock');

if(!$con){
    echo "Database not connected";

}else{
    // $register = $_POST['register'];
if(isset($_POST['register'])){
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

if($password!=$cpassword){
            echo "<script>alert('Password did not match ... Try again')</script>";          
}
else{

    $sel="SELECT * FROM users where email='$email'";

            $result =mysqli_query($con,$sel);
            if($result->num_rows>0){
                echo "Email entered already exist";
                // header('Location:signup.php');

            }
            else{
                  $qry = "INSERT INTO users(fname,email,pasword)VALUES('$fname','$email','$password')";
                $result = mysqli_query($con, $qry);
                
                if($result){
                    header('Location:dashbord.php');
                }
                else{
                    header('Location:signup.php');
                }
                    
                
            }


    
}



        







}



}








?>