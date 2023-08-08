<head>
    <title>UserCreated</title>
    <link rel="stylesheet" href="styles.css">
    <?php include 'dbconnnection.php'
     ?>
</head>
<style>
.box{ 
    margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
    text-align: center;
    
  }
  </style>


<div class = "box">
<?php

//create variables 
$Email = $_POST['Email'];
$Name = $_POST['Name'];
$Password = $_POST['Password'];
$type = $_POST['type'];

GLOBAL $type;

echo "<br>Email: $Email</br>";
echo "<br>Business Name or Name: $Name</br>";
echo "<br>Account type: $type</br>";

?>

<form action= login.php method = "post">
<td><input type="submit" value="Continue" /></td><br/>
</form></br>



<?php 
/*
$db = mysqli_connect('localhost', 'ics325sp230104', '3586', 'ics325sp230104');
if(mysqli_connect_errno()){
    echo'<p>Error. Could not connect to database.</br>
    Please try again later.</p>';
    exit;
}else{
    echo "database has connected";
}*/

//querrying to database to get videos that match the searched term 
$queryResult = "INSERT into account (accountID, Email, BusinessName, Password,BusinessAccount)
values (null, '$Email', '$Name', '$Password', '$type')"; 

$stmt = mysqli_query($con, $queryResult);

if($stmt)
    {
     ?><h1><?php   echo 'Account sucessfully created. Click continue to proceed.'; ?><h1> <?php
    }
    
    else{
        echo 'Error. Account was not created';
    }



mysqli_close($con);

?>

</div>


