
<?php
session_start();
    $dbhost = "localhost:3308";
    $dbuser = "root";
    $dbpass = "";
    $db = "ics370";



$con = new mysqli($dbhost, $dbuser, $dbpass, $db);

if(mysqli_connect_errno()){
    echo "Failed to connect";
    exit();
}
echo "Connection sucess";

