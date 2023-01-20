<?php  
$con = mysqli_connect('localhost', 'root','','stock');
if(!$con){
  echo "Not connected";

}else{


    if(isset($_GET['deleteid'])){

        $id = $_GET['deleteid'];
        $sql = "DELETE FROM purchase where id=$id";
        $result = mysqli_query($con, $sql);
if($result){
    
    $_SESSION['success'] = "Deleted successfully";
    include("purchase.php");

}
    }

   

}


?>