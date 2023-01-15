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

    $sqry = "INSERT INTO purchase(Dte,PoCode,Supplier,Items)VALUES('$date','$pocode','$supplier','$item')";
    $result = mysqli_query($con, $sqry);

    if($result){
        header('Location:purchase.php');
    }else{
        echo "There is error";
    }
}


?>