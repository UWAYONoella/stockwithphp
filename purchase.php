



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


.sta{
  padding-left: 30px;
}
.log img{
  width: 50px;
    height: 50px;
    border-radius: 100%;
    padding:20px;
}
.log{
  background-color: rgb(12, 102, 72);
}

 .adminn img{
    width: 40px;
    height: 40px;
    border-radius: 100%;
   
    
  
}

#lang{
  border:none;
  background:white;
  align-items:up;
 
}
.adminp{
  flex:3;
 
 
  margin-top:20px;
  height:40px;

}
.adminn{
  background:white;
  /* margin-top:20px; */
  width:240px;
  height:40px;
  border-radius:20px;
  margin-left:50%;
  display:flex;

  
  


}
.classi select{
  padding:10px;
}
.classi label{
  font-size:20px;
  color:black;
 padding:20px 20px;
 align-items:center;
 
}
.down{
 
  height: 85%;
  width:100%;
  background-color: aliceblue;


}
.down h1{
  padding-left:2%;
}
.mid{
  height: 400px;
  width: 96%;
 background-color: white;
  box-shadow: 1px 10px 8px 1px white;
  margin-left:2%;
  margin-top: 2%;
 display: flex;
 flex-direction: column;

  grid-gap: 1px;
  border-top:5px solid blue ;
  text-align: center;
  /* border: 1px solid ; */
  border-radius: 10px;
}
.prin{
  background-color: rgba(228, 224, 224, 0.863);
  height: 50px;
 text-align: center;
  gap: 5px;
  display: flex;
  margin-top: 10px;
}
.print{
  background-color: green;
  color: white;
  height: 30px;
  width: 80px;

 
}
a{
  font-size: 20px;
  color: white;
  text-decoration: none;
  
}
.edt{
  background-color: blue;
  color: white;
  height: 30px;
  width: 130px;
  
  padding-top: 10px;
  margin-top: 4px;
  margin-left: 30%;
}
.itemm{
  background-color: black;
  color: white;
  height: 30px;
  width: 150px;
}
.hed{
  height: 50px;
  /* border-bottom: 2px solid black; */
  text-align: left;
  padding: 15px;
  width: 50%;
}
.rtn{
  display: flex;
  /* width: 50%; */
 
}
.itemss{
  color: rgb(72, 177, 226);
  text-align: left;
  padding: 15px;
  padding-bottom: 20px;
  font-size: 30px;
  font-family: bold;
}
.men{
  background-color:white;
  height: 100px;
  margin:5px;
  padding:5px;
 
  box-shadow: 1px 10px 8px 1px aliceblue;
  
}
.men a{
  text-decoration: none;
  font-size: 20px;
  color: black;
}
.men i{
  height: 30px;
  width: 30px;
  font-size:30px
}

.fot{
  margin-top:60px;
  height: 15%;
  width: 100%;
  background-color:white;
  box-shadow: 1px 10px 8px 1px white;
  display: flex;
 
}
.rightbar{
  flex:2;
}
   i{
   color:white;
   background: #000;
    font-size: 20px;
    padding: 5px;
}
.cont a{
text-decoration: none;
font-size: 20px;
color: white;
}

label{
    color: white;
    font-size: 25px;
    padding-top: 25px;
}
.up{
    height: 15%;
    background-color:  rgb(32, 138, 138);
    display:flex;
    
}
.up .rightbar{
 padding:15px;
}
.nav {
    width: 25%;
    background: #000;
}

.nav2 {
    width: 75%;
}
.lft{
  width: 50%;
  padding: 10px;
}
.rgt{
  width: 50%;
  text-align: right;
  padding: 10px;
}
.table{
    width: 95%;
    height: 200px;
    border: 300px;
    margin-left: 20px;
    background-color: whitesmoke;
}
tr{
  text-align: center;
}
button{
  margin: 5px;
  color: white;
  /* padding-leff: 10px; */
}
.delete{
  color: white;
  background-color: red;
  border: none;
  height: 30px;
  width: 100px;
  border-radius: 5px;
  font-size: 25px;
}
.update{
  color: white;
  background-color: green;
  border: none;
  height: 30px;
  width: 100px;
  border-radius: 5px;
  font-size: 25px;
}

</style>


  </head>
<body>
  <div class="main">





        <div class="nav">
            <div class="log">
         <img src="p4.PNG" alt="">
           <div class="sta">One vision</div>
      
  
            </div>

            <div class="important">
            <div class="cont">
            <i class="fa fa-vimeo-square"></i><a href="dashbord.php">dashbord</a>
            </div>
            <div class="cont">
            <i class='fa fa-book' ></i> <a href="purchase.php">purchase order</a>
            </div>
            <div class="cont">
            <i class='fa fa-building'></i> <a href="receive.php">Receiving</a>
            </div>
            <div class="cont">
              <i class="fa fa-exchange" aria-hidden="true"></i><a href="back.php"> Back order</a>
            </div>
            <div class="cont">
            <i class='fa fa-undo'></i><a href="return.php"> Return list</a>
            </div>
            <div class="cont">
              <i class="fa fa-stack-exchange" aria-hidden="true"></i><a href="stock.php"> Stock</a>
            </div>
            <div class="cont">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="sales.php"> Sale list</a>
            </div>
         
            <div class="cont">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i> <a href="supply.php">Supplier list</a>
            </div>
            <div class="cont">
            <i class='fa fa-text-width'></i> <a href="item.php"> Item list</a>
            </div>
            <div class="cont">
          <a href="user.php"><i class='fa fa-users'></i> User list</a>
            </div>
            <div class="cont">
            <i class="fa fa-cog" aria-hidden="true"></i><a href="setting.php"> Setting</a>
            </div>
            </div>
       </div>

       
       <div class="nav2">
        <div class="up"> 
        <div class="rightbar"><i class="fa fa-bars" aria-hidden="true"></i> <label for="">Stock Management System</label></div> 
       <div class="adminp">
         <div class="adminn">
        <div class="classi"><img src="p4.PNG" alt=""></div>
        <div class="classi">
       
       <select name="languages" id="lang">
        <option value="admin">Administrator Admin</option>

</select>

</div>
      </div>
</div>



        </div>

<div class="down">
<div class="mid">
<div class="rtn">
 <div class="hed">List of Purchase Order </div>
 <div class="edt"><a href="pform.php" > + Create New</a></div>
</div>
 <div class="itemss"></div>
<div class="tb">
<table class="table table-bordered" border="1">
    <thead>
      <tr style="background-color: rgb(2, 4, 43);color:white;text-align:center;">
      <th>No</th>
        <th>Date Created</th>
        <th>PO Code</th>
        <th>Supplier</th>
        <th>Items</th>
     
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody>
    <?php
$con = mysqli_connect('localhost', 'root','','stock');
if(!$con){
  echo "Not connected";

}else{

      $sql = "SELECT * FROM purchase";
      $result = mysqli_query($con, $sql);
      if($result){

while($row=mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $datecreated = $row['datecreated'];
          $pcode = $row['pcode'];
          $supplier = $row['supplier'];
          $items = $row['items'];

          echo '
          <tr>
          <td>'.$id.'</td>
          <td>'.$datecreated.'</td>
          <td>'.$pcode.'</td>
          <td>'.$supplier.'</td>
          <td>'. $items.'</td>
          <td><button type="submit" name="update" class="update"><a href="update.php?updateid='.$id.'">Update</a></button>

<button type="submit" name="delete" class="delete"><a href="delete.php?deleteid='.$id.'">Delete</a></button></td>

</td>
          </tr>
          
          


';

         
}

      }
    }
    $re = mysqli_query($con, 'SELECT SUM(items) AS value_sum FROM purchase'); 
    $rows = mysqli_fetch_assoc($re); 
    $sum = $rows['value_sum'];
    

?>



<tr>
<td colspan="4" >Sum of Items</td><td ><?php echo $sum; ?> </td><td></td>

</tr>




    </tbody>



  </table>

<?php


if(isset($_SESSION['success'])) {
  $message = $_SESSION['success'];
  unset($_SESSION['success']);
  echo $message;
}


?>
</div>




</div>

<div class="fot">

<div class="lft"><p>Copyright &#169 2023 All right reserved</p>  </div>
 <div class="rgt"><p>Designed by Noella</p></div>
 
</div>



</div>



       </div>
    </div>


  
</body>
</html>