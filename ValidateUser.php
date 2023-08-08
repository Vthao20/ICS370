<!DOCTYPE html>
<html>
  <head>
    <title>ValidateUser</title>

    <style>
.box{ 
    margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
    text-align: center;
    
  }
  </style>

<div class="box">
<?php
 include 'dbconnnection.php' 
?>


<?php


$Email = $_POST['Email'];
$Password = $_POST['Password'];
$type = $_POST['type'];

echo "Email: $Email</br>";
echo "type: $type";

$query = "SELECT * from account WHERE Email='$Email' and Password='$Password' and BusinessAccount = '$type'";
$result = mysqli_query($con, $query);


if(!$result){
    echo "Cannot run query";
    exit;
}else{

    echo "query run";
}

$row = mysqli_fetch_row($result);
$count = $row[0];
if($count > 0){
  echo "<h1>Logged in</h1>";
  $_SESSION['Email'] = $Email;
  $_Session['Password'] = $Password;
  $_Session['type'] = $type;
}else {
  echo"<h1>Incorrect Email or Password or type. Please try again.</h1>";
  exit;

}







// Check the user role for access control
if ($type !== 'Y') {
  // If the user is not an admin, redirect to a limited access page
  header('location: loanhome.php');
  exit();
}









mysqli_free_result($result);



?>

<form action= Bhome.php method = "post">
<td><input type="submit" value="Continue" /></td><br/>
</form></br>
