<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include 'dbconnnection.php' 
?>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}


.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #111;
}

.right {
  right: 0;
  background-color: red;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}


</style>
</head>

<?php 
error_reporting(E_ERROR | E_PARSE);
session_start();
if((isset($_SESSION['Email']))||(isset($_SESSIOn['Password']))){

?>



<header>


<div class="topnav">
        <div> <!--Home button-->
            <a href="Bhome.php">
                <img class="logo" width = "40px" height = "40" src="business logo.jpg" />
            </a>
        </div>

        <div> <!--Home button-->
            <a href="">
                <img class="logo" width = "40px" height = "40" px src="usericon.jpg" />
            </a>
        </div>
    
  <h1>Buiness Finacial Group</h1>
  <b><?php echo $_SESSION['Email']; ?></b>
  <a href="Logout.php">Logout</a>
</div>
</header>





<?php

$query = "SELECT * from loanapplication where bName = 'walmart'"; 

$stmt = mysqli_query($con, $query);
echo "<p>You have enlisted ".$stmt->num_rows." loan and grants</p>";


if($stmt)
    {
     ?><h1><?php   echo 'Results'; ?></h1> <?php
    }
    
    else{
        echo 'Error. Could not fetch results';
    }

    while($row = $stmt->fetch_row()){
      echo "<p><strong>ApplicationID: ".$row[0]."</strong>";
      echo "</br>Name: ".$row[2];
      echo "</br><p><strong>Email: ".$row[3]."</strong>";
      echo "</br>Scope: ".$row[4];
  echo "</br><h1>Status: ".$row[5]."</h1>";



    }



}else{
 
 ?>
 
 <div class="topnav">
         <div> <!--Home button-->
             <a href="Bhome.php">
                 <img class="logo" width = "40px" height = "40" src="business logo.jpg" />
             </a>
         </div>
 
         <div> <!--Home button-->
             <a href="">
                 <img class="logo" width = "40px" height = "40" px src="usericon.jpg" />
             </a>
         </div>
     
   <h1>Buiness Finacial Group</h1>
   <a href="Login.php">Login </a>
   <a href="CreateAccount.php">Create an account</a>
   
 </div>
 
 </header>
 
 
 
 
 <?php } ?>
 
 