<?php
$con = mysqli_connect('localhost', 'root', '', 'stock');

if($con){
    echo "Database  well connected";
}



if(isset($_POST['create'])){
    $date = $_POST['date'];
    $pocode = $_POST['pocode'];
    $supplier= $_POST['supplier'];
    $item = $_POST['item'];

    $sqry = "INSERT INTO purchase(datecreated,pcode,supplier,items)VALUES('$date','$pocode','$supplier','$item')";
    $result = mysqli_query($con, $sqry);

    if($result){
        $_SESSION['success'] = "Product ordered";
         include("purchase.php");

    }else{
        echo "There is error";
    }
}


?>